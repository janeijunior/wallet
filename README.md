# Wallet

### Frameworks/Bibliotecas
* bcit-ci/CodeIgniter
* twbs/bootstrap
* jquery/jquery
* jquery/jquery-ui
* mpdf/mpdf
* Matrix Admin
#Requerimentos

* PHP >= 5.6.0
* MySQL

## Como instalar esta aplicação



### Tecnologias necessárias

Para poder trabalhar com este sistema, precisará contar com os seguintes softwares
instalados em sua máquina.

1. PHP 5.6;
2. Composer;
3. MySQL;
4. Apache2;
5. Git;
6. Node;
7. Grunt.

### Clonar o repositório

Para ser possível clonar o repositório, precisará ter uma conta BitBucket autorizada.

Após a autorização, crie uma pasta em um local de sua preferência, evite pastas que contenham 
nomes com acentos, espaços em brancos e afins. Sugestão:

```
/C/xampp/wallet
```

Dentro desta pasta, faça o clone do projeto com seu git, poderá utilizar do SourceTree ou Git Kraken.

O comando para o clone é o seguinte:

```
$ git clone --branch master git@github.com:janeijunior/wallet.git
```

### Instalar o projeto

Após clonar o sistema, deverá entrar na pasta do mesmo e editar a url:
```
C:\xampp\htdocs\wallet\application\config\config.php
```
````
$config['base_url']	= 'http://127.0.0.1/wallet/';
````
### Banco de dados
Após instalar o projeto em sua máquina, precisamos configurar o banco de dados. Para isto, entre na seguinte pasta do projeto:
```
C:\xampp\htdocs\wallet\application\config\database.php
```

````
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'wallet';
$db['default']['dbdriver'] = 'mysql';
````

Dentro deste arquivo, configure os dados internos de acordo com as configurações da sua máquina, como banco de dados e 
pasta que o projeto se encontra.

Uma cópia atualizada encontra-se dentro da pasta DB\wallet.sql

Primeiramente importar o full com o seguinte comando:
```
mysqldump -h localhost -u NOME_USUARIO -p --force wallet < wallet.sql
```

### Adicionando novos campos ao banco de dados

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `sobrenome`, `cpf`, `email`, `senha`, `telefone`, `situacao`, `url_logo`, `permissoes_id`, `id_emitente`, `codigo`, `terms`, `controle`, `endereco`, `endnumero`, `endcomplemento`, `bairro`, `cidade`, `estado`, `cep`, `celular`, `refban`, `data`, `lktipo`, `lkvendedor`, `obs`, `web`, `numcartao`, `validade`, `nomeimp`, `lkcartao`, `codseg`, `cgc`, `limitecred`, `atendbloq`, `contato`, `insc`, `atividade`, `fax`, `tagfisica`, `refcom`, `identidade`, `nascimento`, `filiacao`, `profissao`, `rettrib`, `cgi`, `lkclim`, `bloqvendacr`, `lkuserinc`, `envio`, `userinsert`, `userupdate`, `dateinsert`, `dateupdate`) VALUES
(1, 'Janei', 'Araujo', '', 'jaraujo.php@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '21968710758', 1, 'http://127.0.0.1/wallet/assets/uploads/aed159303317c0d9fce735a07739d0bc.jpeg', 3, 0, '4444', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '2022-04-19 13:18:00', '2022-04-19 13:18:00');

### Configurar o Apache (Servidor http)

Para configurar o mesmo, precisa ser criado um arquivo access-manager.conf com as informações 
do diretório do sistema apontado para a pasta public, este arquivo deverá ser adicionado como segue abaixo.

```bash
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName   wallet.local
    DocumentRoot /c/Sites/access-manager/public   
	<Directory /c/Sites/wallet/public/>
        DirectoryIndex index.php
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

* Precisará modificar o arquivo acima de acordo com suas configurações.

### Hosts do windows
Para que seja possível abrir a url do sistema em seu navegador, precisamos informar ao windows que 
seu projeto encontra-se na máquina local. Para isto, abrimos o seguinte arquivo:

C:\Windows\System32\Drivers\etc\hosts

Adicionamos a seguinte linha:
```
127.0.0.1 wallet.local
```

Salve o arquivo e reinicie o apache em sua máquina.

### Testando o projeto
Em seu navegador, abra o endereço: http://wallet.local

Seu servidor apache deverá responder com o website, se tudo ocorreu perfeitamente.

### Acesso
````
User: jaraujo.php@gmail.com
Pass: 123456
````

