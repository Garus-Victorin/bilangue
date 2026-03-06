# API GraphQL - Expressions Ecole

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type ExpressionEcole {
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

### Liste des expressions d'école
```
graphql
query {
  expressionsEcole {
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

### Une expression d'école par ID
```
graphql
query {
  expressionEcole(id: 1) {
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
  expressionsEcole {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  expressionsEcole {
    francais
    fon
  }
}
```

## Mutations

### Créer une expression d'école (POST)
```
graphql
mutation {
  createExpressionEcole(input: {
    francais: "L'école"
    goun: "Xwé"
    fon: "Xwé"
    yoruba: "Ile-iwe"
    dendi: "Jinde"
    anglais: "School"
  }) {
    id
    francais
  }
}
```

### Mettre à jour une expression d'école (PUT)
```
graphql
mutation {
  updateExpressionEcole(id: 1, input: {
    francais: "L'école modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une expression d'école (DELETE)
```
graphql
mutation {
  deleteExpressionEcole(id: 1)
}
```

## Avec cURL

**Liste toutes les expressions d'école (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionsEcole { francais goun } }"}'
```

**Une expression (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionEcole(id: 1) { francais fon } }"}'
