# Encurtador de Links em PHP

O Encurtador de Links é uma aplicação simples desenvolvida em PHP que permite aos usuários encurtarem URLs longas em links mais curtos e fáceis de compartilhar.

## Funcionalidades Principais

- **Encurtamento de Links:** Permite aos usuários inserirem URLs longas e gerar links curtos correspondentes.
- **Redirecionamento:** Ao acessar um link encurtado, o usuário é redirecionado para a URL original.

## Como Usar

1. **Encurtar um Link:**
   - Acesse a página inicial do Encurtador de Links.
   - Cole a URL longa no campo designado.
   - Clique no botão "Encurtar" para gerar o link encurtado.

2. **Redirecionar um Link Encurtado:**
   - Copie e compartilhe o link encurtado gerado com outras pessoas.
   - Ao clicar no link encurtado, o usuário será redirecionado para a URL original.

## Tecnologias Utilizadas

- PHP
- HTML
- CSS (ou outro sistema de estilização, se aplicável)
- Banco de dados (exemplo: MySQL)

## Instalação e Configuração

1. **Requisitos:**
   - Servidor PHP instalado (exemplo: Apache, Nginx, etc.).
   - Banco de dados configurado.

2. **Instalação:**
   - Clone o repositório: `[git clone https://github.com/seu-usuario/encurtador-de-links-php.git](https://github.com/Manuel-AC-Ventura/shortify.git)`
   - Configure as informações do banco de dados no arquivo `config.php`.
   - Altere o `BASE_URL` com a URL do seu site no arquivo `index.php`.

3. **Configuração:**
   - Certifique-se de criar a estrutura do banco de dados necessária (tabela para armazenar links encurtados, por exemplo).
   - Configure as variáveis de ambiente, se necessário.

## Contribuição

Se desejar contribuir com melhorias ou correções, sinta-se à vontade para enviar um Pull Request. Certifique-se de seguir as diretrizes de contribuição.
