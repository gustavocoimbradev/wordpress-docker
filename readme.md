# 🚀 Wordpress Theme - Gustavo Coimbra

Siga as orientações abaixo para rodar o projeto no seu ambiente.

---

## 📋 Pré-requisitos

Para rodar este projeto, certifique-se de ter instalado em sua máquina:

* [Docker](https://www.docker.com/get-started/)
* [Docker Compose](https://docs.docker.com/compose/install/)

## 🧩 Plugins Necessários

Este tema utiliza o plugin **Advanced Custom Fields (ACF)** para funcionalidades específicas. Após configurar e iniciar o ambiente WordPress localmente, você precisará instalar e ativar este plugin através do painel administrativo do WordPress para garantir o funcionamento completo do tema. Além disso, os campos personalizados do ACF são configurados através de um arquivo JSON que precisa ser importado.

## ▶️ Como Iniciar o Projeto

Siga os passos abaixo para subir o ambiente local:

1.  Abra o terminal e navegue até a pasta do projeto.

2.  Execute o comando Docker Compose para construir e iniciar os serviços em segundo plano.
    ```bash
    docker-compose up -d
    ```
3.  Aguarde alguns instantes até que os serviços estejam totalmente iniciados.
4.  Acesse o projeto no seu navegador web:
    ```
    http://localhost:8080
    ```
    **(Nota:** Caso haja conflito de portas altere-a no arquivo `docker-compose.yml`)

5.  **Configuração do WordPress e Plugin ACF:**
    * Complete a instalação inicial do WordPress no seu navegador.
    * Após a instalação, acesse o painel administrativo (`http://localhost:8080/wp-admin`).
    * Navegue até `Plugins > Adicionar Novo`, procure por "Advanced Custom Fields", instale-o e ative-o.
    * Com o ACF ativo, vá para o menu lateral "ACF" ou "Campos Personalizados" (dependendo da versão e tradução) e procure pela opção **"Ferramentas" (Tools)**.
    * Dentro de Ferramentas, localize a seção **"Importar Campo(s)" (Import Field Group(s))**.
    * Clique em "Escolher arquivo" e selecione o arquivo `.json` do ACF que está incluído na estrutura do projeto (dentro da pasta `/wp-content/themes/gustavocoimbra/acf`).
    * Clique em "Importar Arquivos" (Import Files) para carregar as configurações dos campos personalizados.

## ⏹️ Como Parar o Projeto

Para desligar e remover os contêineres criados pelo Docker Compose, execute o seguinte comando na raiz do projeto:

```bash
docker-compose down
