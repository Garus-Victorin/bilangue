# API GraphQL - Couleurs

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type Couleur {
  id: ID!
  couleur: String
  francais: String
  goun: String
  fon: String
  yoruba: String
  dendi: String
  anglais: String
  typecouleur: String
  created_at: String
  updated_at: String
}
```

## Queries (GET)

### Liste des couleurs
```
graphql
query {
  couleurs {
    id
    couleur
    francais
    goun
    fon
    yoruba
    dendi
    anglais
    typecouleur
  }
}
```

### Une couleur par ID
```
graphql
query {
  couleur(id: 1) {
    id
    couleur
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
  couleurs {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  couleurs {
    francais
    fon
  }
}
```

## Mutations

### Créer une couleur (POST)
```
graphql
mutation {
  createCouleur(input: {
    couleur: "Rouge"
    francais: "Rouge"
    goun: "Kú"
    fon: "Kú"
    yoruba: "Pupa"
    dendi: "Kura"
    anglais: "Red"
    typecouleur: "Primaire"
  }) {
    id
    couleur
  }
}
```

### Mettre à jour une couleur (PUT)
```
graphql
mutation {
  updateCouleur(id: 1, input: {
    francais: "Rouge modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une couleur (DELETE)
```
graphql
mutation {
  deleteCouleur(id: 1)
}
```

## Avec cURL

**Liste toutes les couleurs (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ couleurs { francais goun } }"}'
```

**Une couleur (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ couleur(id: 1) { francais fon } }"}'
