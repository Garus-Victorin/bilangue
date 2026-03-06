# API GraphQL - Expressions Basiques

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type ExpressionBasique {
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

### Liste des expressions basiques
```
graphql
query {
  expressionsBasiques {
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

### Une expression basique par ID
```
graphql
query {
  expressionBasique(id: 1) {
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
  expressionsBasiques {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  expressionsBasiques {
    francais
    fon
  }
}
```

## Mutations

### Créer une expression basique (POST)
```
graphql
mutation {
  createExpressionBasique(input: {
    nom: "Merci"
    image: "merci.jpg"
    francais: "Merci"
    goun: "Mèsi"
    fon: "Mèsi"
    yoruba: "Àlàáfíà"
    dendi: "Moussey"
    anglais: "Thank you"
  }) {
    id
    nom
  }
}
```

### Mettre à jour une expression basique (PUT)
```
graphql
mutation {
  updateExpressionBasique(id: 1, input: {
    francais: "Merci modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une expression basique (DELETE)
```
graphql
mutation {
  deleteExpressionBasique(id: 1)
}
```

## Avec cURL

**Liste toutes les expressions basiques (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionsBasiques { francais goun } }"}'
```

**Une expression (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ expressionBasique(id: 1) { francais fon } }"}'
