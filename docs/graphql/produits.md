# API GraphQL - Produits

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type Produit {
  id: ID!
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

### Liste des produits
```
graphql
query {
  produits {
    id
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

### Un produit par ID
```
graphql
query {
  produit(id: 1) {
    id
    image
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
  produits {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  produits {
    francais
    fon
  }
}
```

## Mutations

### Créer un produit (POST)
```
graphql
mutation {
  createProduit(input: {
    image: "pain.jpg"
    francais: "Pain"
    goun: "Ahɔ́"
    fon: "Ahɔ́"
    yoruba: "Oúnje"
    dendi: "Gari"
    anglais: "Bread"
  }) {
    id
    francais
  }
}
```

### Mettre à jour un produit (PUT)
```
graphql
mutation {
  updateProduit(id: 1, input: {
    francais: "Pain modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer un produit (DELETE)
```
graphql
mutation {
  deleteProduit(id: 1)
}
```

## Avec cURL

**Liste tous les produits (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ produits { francais goun } }"}'
```

**Un produit (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ produit(id: 1) { francais fon } }"}'
