# API GraphQL - Présentations

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type Presentation {
  id: ID!
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

### Liste des présentations
```
graphql
query {
  presentations {
    id
    francais
    goun
    fon
    yoruba
    dendi
    anglais
  }
}
```

### Une présentation par ID
```
graphql
query {
  presentation(id: 1) {
    id
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
  presentations {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  presentations {
    francais
    fon
  }
}
```

## Mutations

### Créer une présentation (POST)
```
graphql
mutation {
  createPresentation(input: {
    francais: "Je m'appelle"
    goun: "Mí wá"
    fon: "Mí wá"
    yoruba: "Orukọ mi ni"
    dendi: "Mbe"
    anglais: "My name is"
  }) {
    id
    francais
  }
}
```

### Mettre à jour une présentation (PUT)
```
graphql
mutation {
  updatePresentation(id: 1, input: {
    francais: "Je m'appelle modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une présentation (DELETE)
```
graphql
mutation {
  deletePresentation(id: 1)
}
```

## Avec cURL

**Liste toutes les présentations (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ presentations { francais goun } }"}'
```

**Une présentation (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ presentation(id: 1) { francais fon } }"}'
