# Consulta de CNPJ
## Exemplo de como carregar dinamicamente um CNPJ, com PHP e Javascript.

- Como funciona a API?
> Para entender como o sistema funciona, é necessario entender seus componentes. O sistema é composto pelos seguintes componentes:

> um banco de dados;
> uma fila;
> processos que recuperam informações da Receita Federal.

- https://velhobit.com.br/tutoriais/carregando-dinamicamente-dados-empresa-cnpj-php-jquery.html
- https://receitaws.com.br/faq
- https://receitaws.com.br/api

> ATENÇÃO: Caso você seja usuário Cloudflare, adicone os seguintes IPs em sua lista de permissões do .htaccess:

```php
Allow from 199.27.128.0/21
Allow from 173.245.48.0/20
Allow from 103.21.244.0/22
Allow from 103.22.200.0/22
Allow from 103.31.4.0/22
Allow from 141.101.64.0/18
Allow from 108.162.192.0/18
Allow from 190.93.240.0/20
Allow from 188.114.96.0/20
Allow from 197.234.240.0/22
Allow from 198.41.128.0/17
Allow from 162.158.0.0/15
Allow from 104.16.0.0/12
Allow from 172.64.0.0/13
```
> Pesquisa.php - Ajax para preencher o formulário com o retorno.
- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


## start php

```sh
php -S localhost:8000
```
<a href="https://twitter.com/cpdrenato"><img src="https://img.shields.io/twitter/url/http/shields.io.svg" alt="Follow @cpdrenato on Twitter"></img></a>
- Renato lucena - 2019
- renatolucena.net
@cpdrenato