## Informações 
Nome do curso: Informática

Nome da Unidade curricular: Desenvolver Serviços Web

Nome do aluno: Luiza Vittória Cardoso

### 1. Status da API

- `GET /status`
  - Retorna o status da API.
  - Exemplo de resposta:

```json
{
  "status": "ok"
}
```

- `GET /status/xml`
  - Retorna o mesmo valor em XML.
  - Exemplo de resposta:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<status>ok</status>
```

### 2. Informações pessoais

- `GET /nome`
  - Retorna o nome do aluno.
  - Resposta:

```json
{
  "nome": "Luiza"
}
```

- `GET /nome/xml`
  - Mesmo dado em XML.

### 3. Curso

- `GET /curso`
- `GET /curso/xml`

Resposta JSON:

```json
{
  "curso": "Informatica"
}
```

### 4. Sons de animais

- `GET /gato`
- `GET /gato/xml`

```json
{
  "som": "Miau"
}
```

- `GET /dog`
- `GET /dog/xml`

```json
{
  "som": "Au Au"
}
```

- `GET /telefone`
- `GET /telefone/xml`

```json
{
  "som": "Trimm Trimm"
}
```

### 5. Frases motivacionais e desmotivacionais

- `GET /desmotivacional`
- `GET /desmotivacional/xml`

```json
{
  "frase": "O não você já tem, agora busque o humilhação"
}
```

- `GET /motivacional`
- `GET /motivacional/xml`

```json
{
  "frase": "Acredite nos seus sonhos e persista sempre"
}
```

### 6. Música, filme e interação

- `GET /musica`
- `GET /musica/xml`

```json
{
  "musica": "A Thousand Years"
}
```

- `GET /filme`
- `GET /filme/xml`

```json
{
  "filme": "Como treinar seu dragão"
}
```

- `GET /tic`
- `GET /tic/xml`

```json
{
  "resposta": "toc"
}
```

### 7. Status e filmes extras

- `GET /status2`
- `GET /status2/xml`

```json
{
  "status2": "ok"
}
```

- `GET /filme1` até `GET /filme9`
- Correspondentes `.../xml`

Exemplo:

```json
{
  "filme": "Interestelar"
}
```

### 8. Animes

#### Populares

- `GET /animes/populares`
- `GET /animes/populares/xml`

```json
{
  "populares": ["Attack on Titan", "Demon Slayer", "Jujutsu Kaisen", "One Piece"]
}
```

#### Gêneros

- `GET /animes/generos`
- `GET /animes/generos/xml`

```json
{
  "generos": ["Shonen", "Seinen", "Isekai", "Mecha", "Shojo", "Slice of Life"]
}
```

#### Estudos

- `GET /animes/estudios`
- `GET /animes/estudios/xml`

```json
{
  "estudios": ["MAPPA", "ufotable", "Studio Ghibli", "Kyoto Animation", "Madhouse"]
}
```

#### Protagonistas

- `GET /animes/protagonistas`
- `GET /animes/protagonistas/xml`

```json
{
  "protagonistas": ["Monkey D. Luffy", "Naruto Uzumaki", "Eren Yeager", "Saitama"]
}
```

#### Filmes de anime

- `GET /animes/filmes`
- `GET /animes/filmes/xml`

```json
{
  "filmes": ["A Viagem de Chihiro", "Your Name", "Koe no Katachi", "Akira"]
}
```

#### Clássicos

- `GET /animes/classicos`
- `GET /animes/classicos/xml`

```json
{
  "classicos": ["Dragon Ball Z", "Cowboy Bebop", "Neon Genesis Evangelion", "Death Note"]
}
```

#### Vilões

- `GET /animes/viloes`
- `GET /animes/viloes/xml`

```json
{
  "viloes": ["Madara Uchiha", "Meruem", "Johan Liebert", "Aizen Sosuke"]
}
```

#### Frase

- `GET /animes/frase`
- `GET /animes/frase/xml`

```json
{
  "frase": "Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.",
  "autor": "Naruto Uzumaki"
}
```

#### Curiosidades

- `GET /animes/curiosidades`
- `GET /animes/curiosidades/xml`

```json
{
  "curiosidade": "Sazae-san é a série de anime de televisão mais longa do mundo, sendo exibida desde 1969."
}
```


#### Listar todos os produtos

- `GET /produtos`
- Possível filtro por query string:
  - `GET /produtos?nome=tecl`

Exemplo de resposta:

```json
[
  {"id": 1, "nome": "Teclado"},
  {"id": 2, "nome": "Mouse"}
]
```

#### Buscar produto por ID

- `GET /produtos/{id}`
- Exemplo: `GET /produtos/1`

Resposta:

```json
{
  "id": 1,
  "nome": "Teclado"
}
```

Se o produto não existir:

```json
{
  "erro": "Produto não encontrado"
}
```

#### Criar produto

- `POST /produtos`
- Enviar no corpo da requisição em JSON:

```json
{
  "nome": "Monitor"
}
```

Resposta esperada:

```json
{
  "id": 7,
  "nome": "Monitor"
}
```

#### Atualizar produto

- `PUT /produtos/{id}`
- Exemplo: `PUT /produtos/1`
- Corpo:

```json
{
  "nome": "Teclado Gamer"
}
```

Resposta esperada:

```json
{
  "id": 1,
  "nome": "Teclado Gamer"
}
```

#### Excluir produto

- `DELETE /produtos/{id}`
- Exemplo: `DELETE /produtos/2`

Resposta: status HTTP `204 No Content`.



## Como instalar e testar o projeto

### 1. Instalar 

No terminal, dentro da pasta do projeto, execute:

```bash
composer install
```

### 2. Iniciar o servidor local

```bash
php -S localhost:8000 -t public
```

### 3. Testar os endpoints

Abra o navegador ou use o cURL para testar:

```bash
curl http://localhost:8000/status
```

```bash
curl http://localhost:8000/produtos
```

```bash
curl -X POST http://localhost:8000/produtos \
  -H "Content-Type: application/json" \  -> Essa linha avisa o servidor que os dados que estamos enviando estão no formato JSON.
  -d '{"nome":"Monitor"}'
```

```bash
curl -X PUT http://localhost:8000/produtos/1 \
  -H "Content-Type: application/json" \
  -d '{"nome":"Teclado Gamer"}'
```

```bash
curl -X DELETE http://localhost:8000/produtos/2
```

