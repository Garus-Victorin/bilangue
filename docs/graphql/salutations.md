# API GraphQL - Salutations

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type Salutation {
  id: ID!
  francais: String
  goun: String
  fon: String
  yoruba: String
  dendi: String
  anglais: String
  bariba: String
  created_at: String
  updated_at: String
}
```

## Queries (GET)

### Liste des salutations
```
graphql
query {
  salutations {
    id
    francais
    goun
    fon
    yoruba
    dendi
    anglais
    bariba
  }
}
```

### Une salutation par ID
```
graphql
query {
  salutation(id: 1) {
    id
    francais
    goun
    fon
  }
}
```

### Exemples de selection de champs

**Français et Goun uniquement:**
```
graphql
query {
  salutations {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  salutations {
    francais
    fon
  }
}
```

**Tous les champs:**
```
graphql
query {
  salutations {
    id
    francais
    goun
    fon
    yoruba
    dendi
    anglais
    bariba
    created_at
    updated_at
  }
}
```

## Mutations

### Créer une salutation (POST)
```
graphql
mutation {
  createSalutation(input: {
    francais: "Bonjour"
    goun: "Mawu"
    fon: "Mawu"
    yoruba: "Ku à"
    dendi: "Salam"
    anglais: "Hello"
    bariba: "Salam"
  }) {
    id
    francais
  }
}
```

### Mettre à jour une salutation (PUT)
```
graphql
mutation {
  updateSalutation(id: 1, input: {
    francais: "Bonjour modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une salutation (DELETE)
```
graphql
mutation {
  deleteSalutation(id: 1)
}
```

## Avec cURL

**Liste toutes les salutations:**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ salutations { id francais goun } }"}'
```

**Une salutation (champs sélectionnés):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ salutation(id: 1) { francais fon } }"}'
```

**Créer une salutation:**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "mutation { createSalutation(input: { francais: \"Bonjour\", goun: \"Mawu\", fon: \"Mawu\", yoruba: \"Ku à\", dendi: \"Salam\", anglais: \"Hello\", bariba: \"Salam\" }) { id francais } }"}'
