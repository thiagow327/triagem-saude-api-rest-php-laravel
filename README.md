# API de Triagem de Saúde

Este é um projeto de API desenvolvido em Laravel PHP, baseado em um projeto anterior de triagem de saúde. A API permite gerenciar pacientes e realizar operações como criar, atualizar, consultar e deletar informações de pacientes.

## Funcionalidades Implementadas

- Criação de pacientes
- Consulta de pacientes por ID
- Atualização de dados do paciente
- Deleção de pacientes
- Retorno de todos os dados dos pacientes

## Instalação e Execução

Para executar o projeto localmente, siga as instruções abaixo:

1. Clone este repositório:

    ```bash
    git clone https://github.com/seu-usuario/api-triagem-saude.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd api-triagem-saude
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Copie o arquivo de configuração `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave de aplicação:

    ```bash
    php artisan key:generate
    ```

6. Configure as variáveis de ambiente no arquivo `.env`, especialmente as configurações de banco de dados.

7. Execute o servidor Laravel:

    ```bash
    php artisan serve
    ```

8. Acesse a API em seu navegador ou em uma ferramenta de teste de API.
