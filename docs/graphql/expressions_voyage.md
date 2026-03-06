# API GraphQL - Expressions Voyage

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type ExpressionVoyage {
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

### Liste des expressions de voyage
```
graphql
query {
  expressionsVoyage {
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

### Une expression de voyage par ID
```
graphql
query {
  expressionVoyage(id: 1) {
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
  expressionsVoyage {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  expressionsVoyage {
    francais
    fon
  }
}
```

## Mutations

### Créer une expression de voyage (POST)
```
graphql
mutation {
  createExpressionVoyage(input: {
    francais: "Voyage"
    goun: "Nuwu"
    fon: "Nuwu"
    yoruba: "Irin"
    dendi: "Fito"
    anglais: "Travel"
  }) {
    id
    francais
  }
}
```

### Mettre à jour une expression de voyage (PUT)
```
graphql
mutation {
  updateExpressionVoyage(id: 1, input: {
    francais: "Voyage modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une expression de voyage (DELETE)
```
graphql
mutation {
  deleteExpressionVoyage(id: 1)
}
```

## Avec cURL

**Liste toutes les expressions de voyage (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionsVoyage { francais goun } }"}'
```

**Une expression (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionVoyage(id: 1) { francais fon } }"}'
