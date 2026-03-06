# URLs pour Postman - GraphQL Bi-Langue

## Base URL
```
http://localhost:8000/graphql
```

---

## Requêtes GraphQL - Format

### Pour GET (paramètre query dans l'URL)
```
http://localhost:8000/graphql?query={QUERY}
```

### Pour POST (JSON body)
```
json
{
  "query": "{QUERY}"
}
```

---

## Nombres

### Liste tous les nombres
```
GET http://localhost:8000/graphql?query={nombres{id_nombre,nombre,francais,goun,fon,yoruba,dendi,anglais}}
```

### Un nombre par ID
```
GET http://localhost:8000/graphql?query={nombre(id_nombre:1){id_nombre,nombre,francais,goun}}
```

---

## Salutations

### Liste toutes les salutations
```
GET http://localhost:8000/graphql?query={salutations{id,francais,goun,fon,yoruba,dendi,anglais,bariba}}
```

---

## Couleurs

### Liste toutes les couleurs
```
GET http://localhost:8000/graphql?query={couleurs{id,nom_francais,nom_goun,nom_fon,nom_yoruba,nom_dendi,nom_anglais}}
```

### Une couleur par ID
```
GET http://localhost:8000/graphql?query={couleur(id_couleur:1){id,nom_francais,nom_goun}}
```

---

## Parties du Corps

### Liste toutes les parties du corps
```
GET http://localhost:8000/graphql?query={partiesDuCorps{id,francais,goun,fon,yoruba,dendi,anglais}}
```

---

## Exemples avec cURL

**Liste tous les nombres:**
```
bash
curl "http://localhost:8000/graphql?query={nombres{id_nombre,nombre,francais}}"
```

**Un nombre par ID:**
```
bash
curl "http://localhost:8000/graphql?query={nombre(id_nombre:1){id_nombre,nombre,francais,goun}}"
```

---

## Configuration Postman

### Pour GET:
1. **Method:** GET
2. **URL:** `http://localhost:8000/graphql?query={nombres{id_nombre,nombre,francais}}`

### Pour POST:
1. **Method:** POST
2. **URL:** `http://localhost:8000/graphql`
3. **Headers:** 
   - Content-Type: application/json
4. **Body (raw JSON):**
```
json
{
  "query": "{nombres{id_nombre,nombre,francais}}"
}
```

---

## Types disponibles

- `Nombre` - Nombres avec traductions
- `Salutation` - Salutations avec traductions
- `Couleur` - Couleurs avec traductions
- `PartieDuCorps` - Parties du corps avec traductions
- `PhraseBasique` - Phrases basiques
- `ExpressionBasique` - Expressions basiques
- `Presentation` - Présentations
- `DemandeAide` - Demandes d'aide
- `ExpressionEcole` - Expressions d'école
- `ExpressionVoyage` - Expressions de voyage
- `ExpressionMaison` - Expressions maison
- `Produit` - Produits
- `User` - Utilisateurs
