# API GraphQL - Demandes d'Aide

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type DemandeAide {
  id: ID!
  demande_aide: String
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

### Liste des demandes d'aide
```
graphql
query {
  demandesAide {
    id
    demande_aide
    francais
    goun
    fon
    yoruba
    dendi
    anglais
  }
}
```

### Une demande d'aide par ID
```
graphql
query {
  demandeAide(id: 1) {
    id
    demande_aide
    francais
  }
}
```

### Exemples de selection de champs

**Français et Goun uniquement:**
```
graphql
query {
  demandesAide {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  demandesAide {
    francais
    fon
  }
}
```

## Mutations

### Créer une demande d'aide (POST)
```
graphql
mutation {
  createDemandeAide(input: {
    demande_aide: "Aide-moi"
    francais: "Aide-moi"
    goun: "Wanɖo mǐ"
    fon: "Wanɖo mǐ"
    yoruba: "Ran mi lowo"
    dendi: "Afu"
    anglais: "Help me"
  }) {
    id
    demande_aide
  }
}
```

### Mettre à jour une demande d'aide (PUT)
```
graphql
mutation {
  updateDemandeAide(id: 1, input: {
    francais: "Aide-moi modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une demande d'aide (DELETE)
```
graphql
mutation {
  deleteDemandeAide(id: 1)
}
```

## Avec cURL

**Liste toutes les demandes d'aide (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ demandesAide { francais goun } }"}'
```

**Une demande (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ demandeAide(id: 1) { francais fon } }"}'
