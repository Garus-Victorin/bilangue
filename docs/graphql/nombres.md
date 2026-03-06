# API GraphQL - Nombres

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type Nombre {
  id: ID!
  nombre: String
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

### Liste des nombres
```
graphql
query {
  nombres {
    id
    nombre
    francais
    goun
    fon
    yoruba
    dendi
    anglais
  }
}
```

### Un nombre par ID
```
graphql
query {
  nombre(id: 1) {
    id
    nombre
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
  nombres {
    francais
    goun
  }
}
```

**Français et Fon uniquement (ex: nombre 1):**
```
graphql
query {
  nombre(id: 1) {
    francais
    fon
  }
}
```

**Tous les champs:**
```
graphql
query {
  nombres {
    id
    nombre
    francais
    goun
    fon
    yoruba
    dendi
    anglais
    created_at
    updated_at
  }
}
```

## Mutations

### Créer un nombre (POST)
```
graphql
mutation {
  createNombre(input: {
    nombre: "1"
    francais: "un"
    goun: "dó"
    fon: "wɛ̌"
    yoruba: "ọ̀kan"
    dendi: "dó"
    anglais: "one"
  }) {
    id
    nombre
    francais
  }
}
```

### Mettre à jour un nombre (PUT)
```
graphql
mutation {
  updateNombre(id: 1, input: {
    francais: "un modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer un nombre (DELETE)
```
graphql
mutation {
  deleteNombre(id: 1)
}
```

## Avec cURL

**Liste tous les nombres (champs sélectionnés):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ nombres { nombre francais goun } }"}'
```

**Nombre 1 en français et fon uniquement:**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ nombre(id: 1) { francais fon } }"}'
```

**Créer un nombre:**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "mutation { createNombre(input: { nombre: \"2\", francais: \"deux\", goun: \"ɛ́\", fon: \"we\", yoruba: \"èjì\", dendi: \"ɛ́\", anglais: \"two\" }) { id nombre francais } }"}'
