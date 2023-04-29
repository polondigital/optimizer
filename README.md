# Optimizer @Polon

[![Maintainer](http://img.shields.io/badge/maintainer-@polondigital-blue.svg?style=flat-square)](https://twitter.com/polondigital)
[![Source Code](http://img.shields.io/badge/source-polon/optimizer-blue.svg?style=flat-square)](https://github.com/polondigital/optimizer)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/polon/optimizer.svg?style=flat-square)](https://packagist.org/packages/polon/paginator)
[![Latest Version](https://img.shields.io/github/release/polondigital/optimizer.svg?style=flat-square)](https://github.com/polondigital/optimizer/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/polondigital/optimizer.svg?style=flat-square)](https://scrutinizer-ci.com/g/polondigital/optimizer)
[![Quality Score](https://img.shields.io/scrutinizer/g/polondigital/optimizer.svg?style=flat-square)](https://scrutinizer-ci.com/g/polondigital/optimizer)
[![Total Downloads](https://img.shields.io/packagist/dt/polon/optimizer.svg?style=flat-square)](https://packagist.org/packages/polon/optimizer)

###### Optimizer is a component of website optimization for search engines and social networks. Simplified and straight to the point it creates the necessary tags and links in your ***head*** for the best search and sharing result.

Optimizer é um componente de otimização de sites para motores de buscas e redes sociais. Simplificado e direto ao ponto ele cria as tags e links necessários em sua ***head*** para o melhor resultado de busca e compartilhamento.

## About Polon

###### Polon is a set of small and optimized PHP components for common tasks. Held by Victor and the Polon team. With them you perform routine tasks with fewer lines, writing less and doing much more.

Polon é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Victor e a equipe Polon. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Simple composer for dynamic data (Compositor simples para dados dinâmicos)
- Author and publisher settings for Facebook and Google Plus (Configuração de autor e publicador para Facebook e Google Plus)
- Quickly configure TwitterCard data for sharing cards (Configure rapidamente os dados TwitterCard para cartões de compartilhamento)
- Quickly configure OpenGraph data for social sharing. (Configure rapidamente os dados OpenGraph para compartilhamento social.)
- Add FacebookAdmins or FacebookAppId and everything is ready (Adiciona FacebookAdmins ou FacebookAppId e tudo fica pronto)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Optimizer is available via Composer:

```bash
"polon/optimizer": "^1.0"
```

or run

```bash
composer require polon/optimizer
```

## Documentation

###### For details on how to use the optimizer, see the sample folder with details in the component directory

Para mais detalhes sobre como usar o optimizer, veja a pasta de exemplo com detalhes no diretório do componente

#### @optimize

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \Polon\Optimizer\Optimizer();

echo $op->optimize(
    "Optimizer Happy and @Polon",
    "Is a compact and easy-to-use tag creator to optimize your site",
    "https://www.polon.digital/polon/optimizer/example/",
    "https://www.polon.digital/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
)->render();
```

##### Result @optimize

````html
<title>Optimizer Happy and @Polon</title>
<meta property="og:url" content="https://www.polon.digital/polon/optimizer/example/"/>
<meta property="og:title" content="Optimizer Happy and @Polon"/>
<meta property="og:image" content="https://www.polon.digital/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta property="og:description" content="Is a compact and easy-to-use tag creator to optimize your site"/>
<meta name="twitter:url" content="https://www.polon.digital/polon/optimizer/example/"/>
<meta name="twitter:title" content="Optimizer Happy and @Polon"/>
<meta name="twitter:image" content="https://www.polon.digital/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta name="twitter:description" content="Is a compact and easy-to-use tag creator to optimize your site"/>
<meta name="robots" content="index, follow"/>
<meta name="description" content="Is a compact and easy-to-use tag creator to optimize your site"/>
<meta itemprop="url" content="https://www.polon.digital/polon/optimizer/example/"/>
<meta itemprop="name" content="Optimizer Happy and @Polon"/>
<meta itemprop="image" content="https://www.polon.digital/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta itemprop="description" content="Is a compact and easy-to-use tag creator to optimize your site"/>
<link rel="canonical" href="https://www.polon.digital/polon/optimizer/example/"/>
````

#### @publisher

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \Polon\Optimizer\Optimizer();

echo $op->publisher(
  "polon",
  "polondigital",
  "107305124528362639842",
  "103958419096641225872"
)->render();
```

##### Result @publisher

````html
<meta property="article:publisher" content="https://www.facebook.com/polon"/>
<meta property="article:author" content="https://www.facebook.com/polondigital"/>
<link rel="publisher" href="https://plus.google.com/107305124528362639842"/>
<link rel="author" href="https://plus.google.com/103958419096641225872"/>
````

#### @twitterCard

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \Polon\Optimizer\Optimizer();

echo $op->twitterCard(
  "@polondigital",
  "@polon",
  "polon.digital",
  "summary_large_image"
)->render();
```

##### Result @twitterCard

````html
<meta name="twitter:site" content="@polondigital"/>
<meta name="twitter:domain" content="polon.digital"/>
<meta name="twitter:creator" content="@polondigital"/>
<meta name="twitter:card" content="summary_large_image"/>
````

#### @openGraph

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \Polon\Optimizer\Optimizer();

echo $op->openGraph(
  "polon",
  "pt_BR",
  "article"
)->render();
```

##### Result @openGraph

````html
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="polon"/>
<meta property="og:locale" content="pt_BR"/>
````

## Contributing

Please see [CONTRIBUTING](https://github.com/polondigital/optimizer/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email polon@polon.digital instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para polon@polon.digital em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Victor](https://github.com/polondigital) (Developer)
- [Polon Treinamentos](https://github.com/polon) (Team)
- [All Contributors](https://github.com/polondigital/optimizer/contributors) 

## License

The MIT License (MIT). Please see [License File](https://github.com/polondigital/optimizer/blob/master/LICENSE) for more information.
