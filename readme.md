# 🚀 WP - Gustavo Coimbra

Este repositório contém a configuração para rodar o projeto WordPress localmente utilizando Docker e Docker Compose.

---

## 📋 Pré-requisitos

Para rodar este projeto, certifique-se de ter instalado em sua máquina:

* [Docker](https://www.docker.com/get-started/)
* [Docker Compose](https://docs.docker.com/compose/install/)

## ▶️ Como Iniciar o Projeto

Siga os passos abaixo para subir o ambiente local:

1.  Abra o terminal e navegue até a pasta raiz do projeto onde se encontra o arquivo `docker-compose.yml`.
    ```bash
    cd /caminho/para/seu/projeto
    ```
2.  Execute o comando Docker Compose para construir (se necessário) e iniciar os serviços em segundo plano (`-d`).
    ```bash
    docker-compose up -d
    ```
3.  Aguarde alguns instantes até que os serviços estejam totalmente iniciados.
4.  Acesse o projeto no seu navegador web:
    ```
    http://localhost:8080
    ```
    **(Nota:** A porta pode variar dependendo da configuração no seu `docker-compose.yml`)

## ⏹️ Como Parar o Projeto

Para desligar e remover os contêineres criados pelo Docker Compose, execute o seguinte comando na raiz do projeto:

```bash
docker-compose down