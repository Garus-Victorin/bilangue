# API GraphQL - Phrases Basiques

## Endpoint
```
http://localhost:8000/graphql
```

## Type
```
graphql
type PhraseBasique {
  id: ID!
  phrase: String
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

### Liste des phrases basiques
```
graphql
query {
  phrasesBasiques {
    id
    phrase
    francais
    goun
    fon
    yoruba
    dendi
    anglais
  }
}
```

### Une phrase basique par ID
```
graphql
query {
  phraseBasique(id: 1) {
    id
    phrase
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
  phrasesBasiques {
    francais
    goun
  }
}
```

**Français et Fon uniquement:**
```
graphql
query {
  phrasesBasiques {
    francais
    fon
  }
}
```

## Mutations

### Créer une phrase basique (POST)
```
graphql
mutation {
  createPhraseBasique(input: {
    phrase: "Bonjour"
    francais: "Bonjour"
    goun: "Mawu"
    fon: "Mawu"
    yoruba: "Ku à"
    dendi: "Salam"
    anglais: "Hello"
  }) {
    id
    phrase
  }
}
```

### Mettre à jour une phrase basique (PUT)
```
graphql
mutation {
  updatePhraseBasique(id: 1, input: {
    francais: "Bonjour modifié"
  }) {
    id
    francais
  }
}
```

### Supprimer une phrase basique (DELETE)
```
graphql
mutation {
  deletePhraseBasique(id: 1)
}
```

## Avec cURL

**Liste toutes les phrases basiques (français et goun):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ phrasesBasiques { francais goun } }"}'
```

**Une phrase (français et fon):**
```
bash
curl -X POST http://localhost:8000/graphql \
  -H "Content-Type: application/json" \
  -d '{"query": "{ phraseBasique(id: 1) { francais fon } }"}'
