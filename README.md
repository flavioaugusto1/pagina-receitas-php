# 🍳 Central Receitas

Site estático em PHP que exibe receitas culinárias: listagem, detalhe por ID e página institucional.  
Interface construída com **Tailwind CSS** carregado via CDN.

---

## 📋 Requisitos

- **PHP 8.x** (recomendado)  
  Pode usar servidor embutido ou Apache/Nginx apontando para a pasta do projeto.

---

## 🚀 Como executar

Na raiz do projeto:

```bash
php -S localhost:8000
```

Acesse no navegador:  
👉 http://localhost:8000/

### 🔧 Produção

Configure o servidor web para que todas as rotas amigáveis apontem para:

```
index.php
```

(pode exigir rewrite dependendo do servidor)

---

## 📁 Estrutura do projeto

| Caminho                          | Função |
|---------------------------------|--------|
| `index.php`                     | Ponto de entrada: carrega `functions.php` e `routes.php`. |
| `routes.php`                    | Roteamento por segmento da URL → `controllers/{nome}.controller.php`. |
| `functions.php`                 | Funções utilitárias: `abort()`, `view()`, `dd()`. |
| `dados.php`                     | Array PHP com todas as receitas (dados mock). |
| `controllers/`                  | Um controller por rota (`index`, `revenues`, `revenue`, `about`). |
| `views/template/app.php`        | Layout (nav, main, footer) + Tailwind no `<head>`. |
| `views/*.view.php`              | Conteúdo de cada página. |
| `views/components/card.php`     | Card reutilizável na home e na listagem. |
| `assets/`                       | Imagens (receitas, hero, logo e redes sociais). |
| `tailwind.config.js`            | Configuração do Tailwind (para uso futuro com build local). |

---

## 🌐 Rotas

| URL                  | Controller | Descrição |
|----------------------|-----------|----------|
| `/` ou vazio         | `index`   | Home com as 3 receitas mais recentes. |
| `/revenues`          | `revenues`| Listagem de todas as receitas em grade. |
| `/revenue?id={id}`   | `revenue` | Página de detalhe (ingredientes, preparo e extras). |
| `/about`             | `about`   | Página institucional "Sobre nós". |

⚠️ Rotas inexistentes retornam:

```
HTTP 404 - Página não existente.
```

(usando `abort(404)`)

---

## 🧾 Dados

As receitas estão em:

```
dados.php
```

Cada receita possui campos como:

- `id`
- `nome`
- `descricao`
- `imagem`
- `alt`
- `ingredientes`
- `modoPreparo`
- `informacoesAdicionais`

👉 Para adicionar novas receitas:
1. Edite o `dados.php`
2. Adicione as imagens em `assets/`

---

## 🎨 Front-end

- **Tailwind CSS v4** via CDN (`@tailwindcss/browser`)
- Tema visual:
  - Fundo em tons de *slate*
  - Destaque amarelo na navegação e rodapé
  - Hero com imagem: `assets/hero.png`

---

## 📄 Licença

- O projeto ainda não possui um arquivo de licença
