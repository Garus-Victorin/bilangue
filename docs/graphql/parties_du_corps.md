# API GraphQL - Parties du Corps

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type PartieDuCorps {
  id: ID!
  nom: String
  image: String
  francais: String
  goun: String
  fon: String
  yoruba: String
  dendi: String
  anglais: String
  created_at: String
  updated_at: String
}
```

## Queries (GET)

### Liste des parties du corps
```
graphql
query {
  partiesDuCorps {
    id
    nom
    image
    francais
    goun
    fon
    yoruba
    dendi
    anglais
  }
}
```

### Une partie du corps par ID
```
graphql
query {
  partieDuCorps(id: 1) {
    id
    nom
    francais
    goun
  }
}
```

### Exemples de selection de champs

**Français et Goun uniquement:**
```
graphql
query {
  partiesDuCorps {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  partiesDuCorps {
    francais
    fon
  }
}
```

## Mutations

### Créer une partie du corps (POST)
```
graphql
mutation {
  createPartieDuCorps(input: {
    nom: "Tête"
    image: "tete.jpg"
    francais: "Tête"
    goun: "Tɔ́"
    fon: "Tɔ́"
    yoruba: "Ori"
    dendi: "Kuri"
    anglais: "Head"
  }) {
    id
    nom
  }
}
```

### Mettre à jour une partie du corps (PUT)
```
graphql
mutation {
  updatePartieDuCorps(id: 1, input: {
    francais: "Tête modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une partie du corps (DELETE)
```
graphql
mutation {
  deletePartieDuCorps(id: 1)
}
```

## Avec cURL

**Liste toutes les parties du corps (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ partiesDuCorps { francais goun } }"}'
```

**Une partie (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ partieDuCorps(id: 1) { francais fon } }"}'
