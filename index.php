<?php




// Chamando a Subclasse Tecnico

require_once "src/Tecnico.php";
// criando o objeto/instancia Técnico
$livroA = new Tecnico(
  "Level UP: um Guia Para o Design de Grandes Jogos",
  " Scott Rogers",
  "https://m.media-amazon.com/images/I/61Cd8ZdR00L._SY466_.jpg",
  496,
  "https://www.amazon.com.br/Level-UP-Design-Grandes-Jogos/dp/852120700X/ref=asc_df_852120700X/?tag=googleshopp00-20&linkCode=df0&hvadid=379805025824&hvpos=&hvnetw=g&hvrand=4128897392492826558&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-423142399401&psc=1"
);

/* 
Chamando o Formato usando o Implode

$livroA->setFormato(["Digital"]);

Para Exibir usando o metodo implode (Fezendo a Saída de Dados)

<?=$livroA->getFormato()?>

*/

// chamando a Subclasse Didatico

require_once "src/Didatico.php";

// criando o objeto/instância Didatico
$livroB = new Didatico(
  "Design thinking: uma metodologia poderosa para decretar o fim das velhas ideias",
  "Tim Brown",
  "https://m.media-amazon.com/images/I/61frFqn8n2L._SY425_.jpg",
  304,
  "https://www.amazon.com.br/Design-Thinking-Metodologia-Poderosa-Decretar/dp/8550814369/ref=asc_df_8550814369/?tag=googleshopp00-20&linkCode=df0&hvadid=433029705108&hvpos=&hvnetw=g&hvrand=415144835464396054&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-950570941657&psc=1"
);

$livroB->setDisciplina("UI(interface e usabilidade)");

// Chamando a Subclasse Programacao

require_once "src/Programacao.php";

// Criando o objeto/instancia Programacao

$livroC = new Programacao(
  "Liberdade digital: O mais completo manual para empreender na internet e ter resultados",
  " Souza Hyeser",
  "https://m.media-amazon.com/images/I/51LfDHL8YTL._SY445_SX342_.jpg",
  194,
  "https://www.amazon.com.br/Liberdade-digital-completo-empreender-resultados/dp/6588370326/ref=asc_df_6588370326/?tag=googleshopp00-20&linkCode=df0&hvadid=379733344741&hvpos=&hvnetw=g&hvrand=4362126077100260625&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-1441433926056&psc=1"
);

$livroC->setArea("Front-end");

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercício POO</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <h1>Livros</h1>

  <section class="caixa">

    <!-- Exibindo o Objeto/Instância Tecnico -->

    <div class="cartao">
      <h2>Tecnico</h2>
      <figure>
        <a href="<?= $livroA->getLink() ?>" target="_blank"><img src="<?= $livroA->getCapa() ?>" alt=""></a>
      </figure>
      <div class="texto">
        <ul>
          <li>
            <h2><b><?= $livroA->getTitulo() ?></b></h2>
          </li>
          <li><b>Autor(a):</b> <?= $livroA->getAutor() ?></li>
          <li><b>Páginas:</b> <?= $livroA->getPaginas() ?></li>
          <li><b>Formato: </b><?= $livroA->getFormato()[0] ?></li>
        </ul>
      </div>
    </div>

    <!-- Exibindo Objeto/Instancia Ditatico -->

    <div class="cartao">
      <h2>Didatico</h2>
      <figure>
        <a href="<?= $livroB->getLink() ?>" target="_blank"><img src="<?= $livroB->getCapa() ?>" alt=""></a>
      </figure>
      <div class="texto">
        <ul>
          <li>
            <h2><b><?= $livroB->getTitulo() ?></b></h2>
          </li>
          <li> <b>Autor(a):</b> <?= $livroB->getAutor() ?> </li>
          <li><b>Páginas:</b> <?= $livroB->getPaginas() ?></li>
          <li><b>Formato: </b><?= $livroB->getFormato()[1] ?></li>
          <li><b>Disciplina: </b><?= $livroB->getDisciplina() ?></li>
          <li><b>Nível: </b><?= $livroB->getNivel()[1] ?></li>
        </ul>
      </div>
    </div>

    <!-- Exibindo o Objeto/Instancia Programacao -->

    <div class="cartao">
      <h2>Programação</h2>
      <figure>
        <a href="<?= $livroC->getLink() ?>" target="_blank"><img src="<?= $livroC->getCapa() ?>" alt=""></a>
      </figure>
      <div class="texto">
        <ul>
          <li>
            <h2><b><?= $livroC->getTitulo() ?></b></h2>
          </li>
          <li><b>Autor(a):</b> <?= $livroC->getAutor() ?></li>
          <li><b>Páginas:</b> <?= $livroC->getPaginas() ?></li>
          <li><b>Formato: </b><?= $livroC->getFormato()[0] ?></li>
          <li><b>Área: </b><?= $livroC->getArea() ?></li>
        </ul>
      </div>
    </div>



  </section>

</body>

</html>