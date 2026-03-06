# URLs pour Postman - API REST Bi-Langue

## Base URL
```
http://localhost:8000/api
```

---

## Nombres

### Liste tous les nombres
```
GET http://localhost:8000/api/nombres
```

### Un nombre par ID
```
GET http://localhost:8000/api/nombres/1
```

---

## Salutations

### Liste toutes les salutations
```
GET http://localhost:8000/api/salutations
```

### Une salutation par ID
```
GET http://localhost:8000/api/salutations/1
```

---

## Couleurs

### Liste toutes les couleurs
```
GET http://localhost:8000/api/couleurs
```

### Une couleur par ID
```
GET http://localhost:8000/api/couleurs/1
```

---

## Presentations

### Liste toutes les présentations
```
GET http://localhost:8000/api/presentations
```

### Une présentation par ID
```
GET http://localhost:8000/api/presentations/1
```

---

## Demandes d'aide

### Liste toutes les demandes d'aide
```
GET http://localhost:8000/api/demandes-aide
```

### Une demande d'aide par ID
```
GET http://localhost:8000/api/demandes-aide/1
```

---

## Expressions École

### Liste toutes les expressions d'école
```
GET http://localhost:8000/api/expressions-ecole
```

### Une expression d'école par ID
```
GET http://localhost:8000/api/expressions-ecole/1
```

---

## Expressions Maison

### Liste toutes les expressions maison
```
GET http://localhost:8000/api/expressions-maison
```

### Une expression maison par ID
```
GET http://localhost:8000/api/expressions-maison/1
```

---

## Expressions Voyage

### Liste toutes les expressions de voyage
```
GET http://localhost:8000/api/expressions-voyage
```

### Une expression de voyage par ID
```
GET http://localhost:8000/api/expressions-voyage/1
```

---

## Produits

### Liste tous les produits
```
GET http://localhost:8000/api/produits
```

### Un produit par ID
```
GET http://localhost:8000/api/produits/1
```

---

## Expressions Basiques

### Liste toutes les expressions basiques
```
GET http://localhost:8000/api/expressions-basiques
```

### Une expression basique par ID
```
GET http://localhost:8000/api/expressions-basiques/1
```

---

## Phrases Basiques

### Liste toutes les phrases basiques
```
GET http://localhost:8000/api/phrases-basiques
```

### Une phrase basique par ID
```
GET http://localhost:8000/api/phrases-basiques/1
```

---

## Parties du Corps

### Liste toutes les parties du corps
```
GET http://localhost:8000/api/parties-du-corps
```

### Une partie du corps par ID
```
GET http://localhost:8000/api/parties-du-corps/1
```

---

## Exemples avec cURL

**Liste tous les nombres:**
```
bash
curl http://localhost:8000/api/nombres
```

**Un nombre par ID:**
```
bash
curl http://localhost:8000/api/nombres/1
```

**Toutes les salutations:**
```
bash
curl http://localhost:8000/api/salutations
```

---

## Configuration Postman

1. **Method:** GET (pour lire)
2. **URL:** `http://localhost:8000/api/nombres` (par exemple)
3. **Headers:** Aucun requis pour les requêtes GET publiques

## Méthodes disponibles

- **GET** - Lire (liste ou un élément par ID)
- **POST** - Créer
- **PUT/PATCH** - Modifier
- **DELETE** - Supprimer
