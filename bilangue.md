# Bi-Langue — Documentation Complète

## Table des matières

1. [Présentation du projet](#1-présentation-du-projet)
2. [Stack technique](#2-stack-technique)
3. [Installation et démarrage](#3-installation-et-démarrage)
4. [Architecture du projet](#4-architecture-du-projet)
5. [Base de données](#5-base-de-données)
6. [Authentification et utilisateurs](#6-authentification-et-utilisateurs)
7. [Modules d'apprentissage](#7-modules-dapprentissage)
8. [Système de Quiz](#8-système-de-quiz)
9. [API REST](#9-api-rest)
10. [API GraphQL](#10-api-graphql)
11. [Seeders](#11-seeders)
12. [Vues Blade](#12-vues-blade)

---

## 1. Présentation du projet

**Bi-Langue** est une application web d'apprentissage des langues locales du Bénin. Elle permet aux utilisateurs francophones ou anglophones d'apprendre des langues béninoises (Fon, Goun, Yoruba, Dendi, Bariba) à travers des modules thématiques et des quiz interactifs.

### Langues supportées

| Langue parlée (interface) | Langues à apprendre |
|---|---|
| Français | Fon, Goun, Yoruba, Dendi, Bariba |
| Anglais | Fon, Goun, Yoruba, Dendi, Bariba |

---

## 2. Stack technique

| Composant | Technologie |
|---|---|
| Framework backend | Laravel 12 (PHP 8.2+) |
| Base de données | PostgreSQL (Supabase) / SQLite (local) |
| Frontend | Blade + Vite + React (JSX) |
| API REST | Laravel API Resources |
| API GraphQL | `rebing/graphql-laravel` v9 |
| Tests | PHPUnit 11 |
| Linter | Laravel Pint |

### Dépendances principales (`composer.json`)

```json
"require": {
    "php": "^8.2",
    "laravel/framework": "^12.0",
    "laravel/tinker": "^2.10.1",
    "rebing/graphql-laravel": "^9.0"
}
```

---

## 3. Installation et démarrage

### Prérequis

- PHP 8.2+
- Composer
- Node.js + npm
- PostgreSQL (ou SQLite pour le dev local)

### Installation complète

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
npm run build
```

Ou via le script Composer :

```bash
composer run setup
```

### Démarrage du serveur de développement

```bash
composer run dev
```

Ce script lance en parallèle :
- `php artisan serve` — serveur Laravel
- `php artisan queue:listen` — worker de queue
- `php artisan pail` — logs en temps réel
- `npm run dev` — Vite (hot reload)

Ou simplement :

```bash
start.bat
# équivalent à : php artisan serve
```

### Configuration `.env` (variables clés)

```env
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=aws-1-eu-west-1.pooler.supabase.com
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres.<project_id>
DB_PASSWORD=<password>

SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
```

Pour SQLite en local, remplacer par :

```env
DB_CONNECTION=sqlite
```

---

## 4. Architecture du projet

```
bilangue/
├── app/
│   ├── GraphQL/
│   │   ├── Queries/       # Requêtes GraphQL
│   │   └── Types/         # Types GraphQL
│   ├── Http/
│   │   ├── Controllers/   # Contrôleurs Web + Quiz
│   │   │   └── Api/       # Contrôleurs API REST
│   │   └── Requests/      # Form Requests (validation)
│   ├── Models/            # Modèles Eloquent
│   └── Providers/
├── database/
│   ├── migrations/        # Migrations de la BDD
│   └── seeders/           # Données initiales
├── resources/
│   ├── views/             # Vues Blade par module
│   └── js/                # React (App.jsx)
├── routes/
│   ├── web.php            # Routes Web + Quiz
│   └── api.php            # Routes API REST
├── config/
│   └── graphql.php        # Configuration GraphQL
└── docs/                  # Documentation API
```

---

## 5. Base de données

### Table `users`

| Colonne | Type | Description |
|---|---|---|
| `id` | bigint | Clé primaire |
| `nom` | string | Nom de famille |
| `prenom` | string | Prénom |
| `email` | string (unique) | Email |
| `password` | string | Mot de passe hashé |
| `status` | enum(online, offline) | Statut de connexion |
| `type` | enum(admin, user) | Rôle |
| `api_token` | string | Token API REST |
| `langue_parlee` | string | Langue de l'interface (francais/anglais) |
| `langue_apprendre` | string | Langue à apprendre |

### Tables de contenu

Chaque table de contenu suit le même schéma multilingue :

| Colonne | Description |
|---|---|
| `francais` | Traduction française |
| `anglais` | Traduction anglaise |
| `fon` | Traduction en Fon |
| `goun` | Traduction en Goun |
| `yoruba` | Traduction en Yoruba |
| `dendi` | Traduction en Dendi |
| `bariba` | Traduction en Bariba |
| `emoji` | Emoji représentatif |

### Liste des tables de contenu

| Table | Clé primaire | Champ spécifique |
|---|---|---|
| `salutations` | `id` | — |
| `couleurs` | `id_couleur` | `couleur`, `typecouleur` |
| `nombres` | `id_nombre` | `nombre` (valeur numérique) |
| `partie_du_corps` | `id` | `image` (base64/URL) |
| `phrases_basiques` | `id` | — |
| `expressions_basiques` | `id` | — |
| `presentations` | `id_presentation` | `presentation` (clé logique) |
| `demandes_aide` | `id` | — |
| `expressions_ecole` | `id` | — |
| `expressions_maison` | `id` | — |
| `expressions_voyage` | `id` | — |
| `produits` | `id` | — |

### Table `quiz_scores`

| Colonne | Type | Description |
|---|---|---|
| `id` | bigint | Clé primaire |
| `user_id` | bigint | FK vers `users` |
| `quiz_type` | string | Type de quiz (ex: `salutations`) |
| `question_id` | bigint | ID de la question |
| `score` | integer | Score obtenu |

---

## 6. Authentification et utilisateurs

### Inscription (3 étapes)

1. **Étape 1** — `POST /register` : nom, prénom, email, mot de passe
2. **Étape 2a** — `POST /register/langue-parlee` : choix de la langue parlée (`francais` ou `anglais`)
3. **Étape 2b** — `POST /register/langue-apprendre` : choix de la langue à apprendre (`fon`, `goun`, `youba`, `dendi`, `bariba`, `yoruba`)

### Connexion / Déconnexion

- `GET/POST /login` — Formulaire de connexion, met le statut à `online`
- `POST /logout` — Déconnexion, met le statut à `offline`

### Compte admin par défaut (seeder)

```
Email    : admin@gmail.com
Password : Admin123
Type     : admin
```

### Paramètres du compte

- `GET /account/setting` — Formulaire de modification du profil
- `PUT /account/setting` — Mise à jour du profil

---

## 7. Modules d'apprentissage

Chaque module dispose de 5 routes et vues :

| Route | Action | Description |
|---|---|---|
| `GET /{module}` | `index` | Liste de toutes les entrées |
| `GET /{module}/create` | `create` | Formulaire de création (admin) |
| `POST /{module}` | `store` | Enregistrement |
| `GET /{module}/{id}` | `show` | Détail avec navigation précédent/suivant |
| `GET /{module}/{id}/edit` | `edit` | Formulaire d'édition |
| `PUT /{module}/{id}` | `update` | Mise à jour |
| `DELETE /{module}/{id}` | `destroy` | Suppression |
| `GET /learn/{module}` | `learn` | Vue d'apprentissage personnalisée |

### Vue `learn` — Apprentissage personnalisé

La vue `learn` adapte l'affichage selon les langues de l'utilisateur connecté :
- `fromColumn` = colonne de la langue parlée (ex: `francais`)
- `toColumn` = colonne de la langue à apprendre (ex: `fon`)

### Liste des modules

| Module | URL | Nom de route |
|---|---|---|
| Salutations | `/salutations` | `salutations.*` |
| Couleurs | `/couleurs` | `couleurs.*` |
| Nombres | `/nombres` | `nombres.*` |
| Parties du corps | `/partie_du_corps` | `parties_du_corps.*` |
| Phrases basiques | `/phrases_basiques` | `phrases_basiques.*` |
| Expressions basiques | `/expressions_basiques` | `expressions_basiques.*` |
| Présentations | `/presentations` | `presentations.*` |
| Demandes d'aide | `/demandes_aide` | `demandes_aide.*` |
| Expressions école | `/expressions_ecole` | `expressions_ecole.*` |
| Expressions maison | `/expressions_maison` | `expressions_maison.*` |
| Expressions voyage | `/expressions_voyage` | `expressions_voyage.*` |
| Produits | `/produits` | `produits.*` |

---

## 8. Système de Quiz

### Fonctionnement

Chaque quiz :
1. Récupère la langue à apprendre de l'utilisateur connecté
2. Sélectionne une entrée aléatoire comme bonne réponse
3. Génère 3 mauvaises réponses aléatoires
4. Affiche 4 suggestions mélangées (QCM)
5. Stocke la bonne réponse en session pour validation

### Routes de quiz

| Module | GET | POST (vérification) |
|---|---|---|
| Salutations | `GET /quiz-salutations` | `POST /quiz-salutations/check` |
| Couleurs | `GET /quiz-couleurs` | `POST /quiz-couleurs/check` |
| Nombres | `GET /quiz-nombres` | `POST /quiz-nombres/check` |
| Parties du corps | `GET /quiz-partie-du-corps` | `POST /quiz-partie-du-corps/check` |
| Phrases basiques | `GET /quiz-phrases-basiques` | `POST /quiz-phrases-basiques/check` |
| Présentations | `GET /quiz-presentations` | `POST /quiz-presentations/check` |
| Demandes d'aide | `GET /quiz-demandes-aide` | `POST /quiz-demandes-aide/check` |
| Expressions basiques | `GET /quiz-expressions-basiques` | `POST /quiz-expressions-basiques/check` |
| Expressions école | `GET /quiz-expressions-ecole` | `POST /quiz-expressions-ecole/check` |
| Expressions maison | `GET /quiz-expressions-maison` | `POST /quiz-expressions-maison/check` |
| Expressions voyage | `GET /quiz-expressions-voyage` | `POST /quiz-expressions-voyage/check` |
| Produits | `GET /quiz-produits` | `POST /quiz-produits/check` |

### Réponse de vérification (JSON)

```json
{
    "correct": true,
    "expected": "Wézon",
    "user_answer": "Wézon"
}
```

### Scores

- `GET /quiz-scores` — Page des scores (authentifié)
- Le modèle `QuizScore` expose `getTotalScore($userId, $quizType)` et `recentScores($userId, $quizType, $limit)`

---

## 9. API REST

### Base URL

```
http://localhost:8000/api
```

### Authentification API

| Méthode | Endpoint | Description |
|---|---|---|
| POST | `/api/register` | Inscription |
| POST | `/api/login` | Connexion (retourne un token) |
| POST | `/api/logout` | Déconnexion |
| GET | `/api/user` | Profil utilisateur |
| PUT | `/api/user` | Mise à jour du profil |
| PUT | `/api/password` | Changement de mot de passe |
| PUT | `/api/langues` | Mise à jour des langues |

### Endpoints de contenu (CRUD complet)

| Ressource | Endpoint |
|---|---|
| Salutations | `/api/salutations` |
| Nombres | `/api/nombres` |
| Couleurs | `/api/couleurs` |
| Présentations | `/api/presentations` |
| Demandes d'aide | `/api/demandes-aide` |
| Expressions école | `/api/expressions-ecole` |
| Expressions maison | `/api/expressions-maison` |
| Expressions voyage | `/api/expressions-voyage` |
| Produits | `/api/produits` |
| Expressions basiques | `/api/expressions-basiques` |
| Phrases basiques | `/api/phrases-basiques` |
| Parties du corps | `/api/parties-du-corps` |

### Méthodes HTTP disponibles

| Méthode | Action |
|---|---|
| `GET /api/{resource}` | Liste toutes les entrées |
| `GET /api/{resource}/{id}` | Détail d'une entrée |
| `POST /api/{resource}` | Créer une entrée |
| `PUT /api/{resource}/{id}` | Mettre à jour |
| `DELETE /api/{resource}/{id}` | Supprimer |

### Exemple cURL

```bash
# Liste toutes les salutations
curl http://localhost:8000/api/salutations

# Une salutation par ID
curl http://localhost:8000/api/salutations/1
```

---

## 10. API GraphQL

### Endpoint

```
POST http://localhost:8000/graphql
```

### Interface GraphiQL

```
http://localhost:8000/graphiql
```

### Queries disponibles

| Query | Description | Arguments |
|---|---|---|
| `couleurs` | Liste des couleurs | `limit`, `offset` |
| `couleur` | Une couleur par ID | `id` |
| `nombres` | Liste des nombres | `limit`, `offset` |
| `nombre` | Un nombre par ID | `id` |
| `salutations` | Liste des salutations | `limit`, `offset` |
| `partiesDuCorps` | Liste des parties du corps | — |

### Types GraphQL disponibles

`Couleur`, `Nombre`, `Salutation`, `PartieDuCorps`, `PhraseBasique`, `ExpressionBasique`, `Presentation`, `DemandeAide`, `ExpressionEcole`, `ExpressionVoyage`, `ExpressionMaison`, `Produit`, `User`

### Exemple de requête

```graphql
query {
    salutations(limit: 5) {
        id
        francais
        fon
        goun
        yoruba
        emoji
    }
}
```

```graphql
query {
    couleurs(limit: 10, offset: 0) {
        id_couleur
        couleur
        francais
        fon
        typecouleur
    }
}
```

---

## 11. Seeders

Les seeders peuplent la base avec des données initiales. Ordre d'exécution :

```
DatabaseSeeder
├── UserSeeder          → admin@gmail.com / Admin123
├── SalutationSeeder    → 5 salutations (Bonjour, Bonsoir, Bienvenue, Au revoir, Bonne journée)
├── CouleurSeeder
├── NombreSeeder
├── PartieDuCorpsSeeder
├── ExpressionBasiqueSeeder
├── PhraseBasiqueSeeder
├── PresentationSeeder
├── DemandeAideSeeder
├── ExpressionEcoleSeeder
├── ExpressionMaisonSeeder
├── ExpressionVoyageSeeder
└── ProduitSeeder
```

Commande :

```bash
php artisan db:seed
```

---

## 12. Vues Blade

### Structure des vues

```
resources/views/
├── auth/
│   ├── login.blade.php
│   ├── register.blade.php
│   ├── langue-parlee.blade.php
│   └── langue-apprendre.blade.php
├── account/
│   └── setting.blade.php
├── home.blade.php
├── {module}/
│   ├── index.blade.php    # Liste
│   ├── show.blade.php     # Détail
│   ├── create.blade.php   # Création
│   ├── edit.blade.php     # Édition
│   └── learn.blade.php    # Apprentissage
├── quiz-{module}.blade.php  # Quiz par module
└── quiz-scores.blade.php    # Tableau des scores
```

### Modules avec vues complètes

`salutations`, `couleurs`, `nombres`, `partie_du_corps`, `phrases_basiques`, `expressions_basiques`, `presentations`, `demandes_aide`, `expressions_ecole`, `expressions_maison`, `expressions_voyage`, `produits`
