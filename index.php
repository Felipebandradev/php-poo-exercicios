<?php
require_once "src/Livro.php";

$livroA = new Livro(
    "Ultima Parada", 
    "Cassey McQuinston", 
    "https://m.media-amazon.com/images/I/81UXlJUcQ9L._SY425_.jpg",
    400,
    "https://www.amazon.com.br/%C3%9Altima-parada-Casey-McQuiston/dp/8555341566/ref=asc_df_8555341566/?tag=googleshopp00-20&linkCode=df0&hvadid=379699540309&hvpos=&hvnetw=g&hvrand=17494258563512609653&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-1541466325825&psc=1"
);

$livroB = new Livro(
    "O Destino dos Vilões é a Morte", 
    "Gwon Gyeoeul",
    "https://m.media-amazon.com/images/I/51QqljA8BnL._SY445_SX342_.jpg", 
    260,
    "https://www.amazon.com.br/%C3%BAnico-Destino-dos-Vil%C3%B5es-Morte/dp/8583623139/ref=asc_df_8583623139/?tag=googleshopp00-20&linkCode=df0&hvadid=379787749838&hvpos=&hvnetw=g&hvrand=17494258563512609653&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-1946082457664&psc=1"
);

$livroC = new Livro(
    "Vilã Romance Entre Mundos", 
    "Bianca Andrade",
    "https://m.media-amazon.com/images/I/7157o69-uJL._SY425_.jpg", 
    380,
    "https://www.amazon.com.br/Vil%C3%A3-Romance-Entre-Mundos-Vol-1/dp/6551230326?source=ps-sl-shoppingads-lpcontext&ref_=fplfs&psc=1&smid=A1ZZFT5FULY4LN"
);

$livroD = new Livro(
    "Fica entre nós",
    "Sophie Gonzales",
    "https://m.media-amazon.com/images/I/81Mh6glGpqL._SY425_.jpg",
    416,
    "https://www.amazon.com.br/Fica-entre-n%C3%B3s-Sophie-Gonzales/dp/8555342031/ref=asc_df_8555342031/?tag=googleshopp00-20&linkCode=df0&hvadid=379799549714&hvpos=&hvnetw=g&hvrand=17494258563512609653&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-1678833533508&psc=1"
);
$livroE = new Livro(
    "Não nasci para agradar",
    "Michelle Quach",
    "https://m.media-amazon.com/images/I/41qVfU9MbgL._SY445_SX342_.jpg",
    400,
    "https://www.amazon.com.br/Nasci-Para-Agradar-Michelle-Quach/dp/6555604883/ref=asc_df_6555604883/?tag=googleshopp00-20&linkCode=df0&hvadid=379707157135&hvpos=&hvnetw=g&hvrand=17494258563512609653&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-1641079939387&psc=1"
);


$livros = [$livroA, $livroB, $livroC, $livroD, $livroE];

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercício POO</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Livros De Romance</h1>

    <section>
        <div class="biblioteca">
            <?php foreach ($livros as $livro){?>
                <div class="minip">
              <div class="mg">
            <div class="clr"></div>
            <div class="group">
              <span>Capa</span>
            </div>
              </div>
              <div class="av" style="background-image: url(' <?=$livro->getCapa()?> ');"></div>
              <div class="info">
            <name><?=$livro->getTitulo()?></name>
            <deets>
            Autor(a): <?=$livro->getAutor()?><br>
              Nºde Páginas <?=$livro->getPaginas()?>
            </deets>
              </div>
              <a class="plot" title="comprar" href="<?=$livro->getLink()?>" target="_blank">
    comprar →
  </a>
            </div>
            <?php }?>
        </div>
    </section>


</body>
</html>