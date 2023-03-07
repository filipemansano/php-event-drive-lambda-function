# Função Lambda em PHP
Este repositório contém um exemplo de como usar o [Bref.sh](https://bref.sh/) para criar uma função Lambda no AWS em PHP. O código usa o Serverless [Application Model (SAM)](https://aws.amazon.com/serverless/sam/) para definir e implantar a função.

Pré-requisitos
* [Composer](https://getcomposer.org/)
* [SAM CLI](https://docs.aws.amazon.com/serverless-application-model/latest/developerguide/serverless-sam-cli-install.html)

## Como usar
1. Clone este repositório em sua máquina local:

```bash
git clone git@github.com:filipemansano/php-event-driven-lambda-function.git
```

2. Navegue até o diretório do projeto (pasta source) e execute o seguinte comando para instalar as dependências:

```bash
composer install
```

3. Execute o seguinte comando (no diretório raiz) para implantar a função Lambda usando o SAM CLI:

```bash
sam deploy --guided
```

Este comando iniciará um assistente que o guiará através do processo de implantação. Você precisará fornecer um nome para sua pilha CloudFormation, escolher a região da AWS onde deseja implantar a função Lambda e outras configurações relevantes.  Quando a implantação for concluída, você poderá acessar sua função normalmente atráves do console da AWS, ou caso queira pode criar um evento HTTP para aciona-la via URL.

4. Quando a implantação estiver concluída, você pode testar a função Lambda acessando a URL da API Gateway exibida na saída do SAM CLI. Você deve ver a mensagem "HelloWorld" sendo exibida.

## Arquivos importantes
* `template.yaml`: Este arquivo contém a definição da função Lambda e suas dependências usando o SAM.
* `source/index.php`: Este arquivo contém o código que será executado quando a função Lambda for acionada.

## Créditos
O exemplo neste repositório foi criado com base no [Quick Start](https://bref.sh/docs/quickstart.html) do Bref.sh e na documentação do SAM CLI. Se você tiver dúvidas ou encontrar problemas ao usar este exemplo, sinta-se à vontade para abrir uma [issue](https://github.com/filipemansano/php-event-driven-lambda-function/issues) neste repositório.