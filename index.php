<?php
require_once "src/Livro.php";
require_once "src/Tecnico.php";
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$livroA = new Tecnico(
  "Level UP: um Guia Para o Design de Grandes Jogos",
  " Scott Rogers",
  "https://m.media-amazon.com/images/I/61Cd8ZdR00L._SY466_.jpg",
  496,
  "https://www.amazon.com.br/Level-UP-Design-Grandes-Jogos/dp/852120700X/ref=asc_df_852120700X/?tag=googleshopp00-20&linkCode=df0&hvadid=379805025824&hvpos=&hvnetw=g&hvrand=4128897392492826558&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-423142399401&psc=1"
);

$livroA->setFormato(["fisico"]);


$livroB = new Didatico(
  "a",
  "",
  "",
  300,
  ""
);

$livroB->setFormato(["fisico"]);
$livroB->setDisciplina("UI(interface e usabilidade)");
$livroB->setNivel(["basico"]);

$livroC = new Programacao(
  "a",
  "",
  "",
  300,
  ""
);

$livroC->setArea("Front-end");
$livroC->setFormato(["digital"]);


$livros = [$livroA, $livroB, $livroC];


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
    <h1>Livros</h1>

    <section>

      <?php foreach ($livros as $livro) {?>
        <div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="<?=$livro->getCapa()?>" alt="images">
        </div>
        <div class="details">
            <h2>SomeOne Famous<br><span>Director</span></h2>
        </div>
      </div>
         
    <?php } ?>
    </section>


</body>
</html>