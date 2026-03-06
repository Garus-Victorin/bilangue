# API GraphQL - Expressions Maison

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type ExpressionMaison {
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

### Liste des expressions de maison
```
graphql
query {
  expressionsMaison {
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

### Une expression de maison par ID
```
graphql
query {
  expressionMaison(id: 1) {
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
  expressionsMaison {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  expressionsMaison {
    francais
    fon
  }
}
```

## Mutations

### Créer une expression de maison (POST)
```
graphql
mutation {
  createExpressionMaison(input: {
    francais: "Maison"
    goun: "Xwe"
    fon: "Xwe"
    yoruba: "Ile"
    dendi: "Kuri"
    anglais: "House"
  }) {
    id
    francais
  }
}
```

### Mettre à jour une expression de maison (PUT)
```
graphql
mutation {
  updateExpressionMaison(id: 1, input: {
    francais: "Maison modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une expression de maison (DELETE)
```
graphql
mutation {
  deleteExpressionMaison(id: 1)
}
```

## Avec cURL

**Liste toutes les expressions de maison (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionsMaison { francais goun } }"}'
```

**Une expression (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionMaison(id: 1) { francais fon } }"}'
