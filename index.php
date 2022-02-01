<?php
  $nota1 = (float)$_GET["nota1"];
  $nota2 = (float)$_GET["nota2"];
  $situacao = 0; //0->indefindo,1->AP,2->RP,3->FN
  
  $media = ($nota1 + $nota2)/2;
  if($media >= 7){
    $situacao = 1;
  }elseif($media < 3){
    $situacao = 2;
  }else{
    $situacao = 3;
  }
?>

<html>
  <head>
    <style>
.centeraprovado{
  text-align: center;
  border: 3px solid black;
  background-color: light green;
}
.centerfinal {
  text-align: center;
  border: 3px solid black;
  background-color: light yellow;
}
.centerreprovado {
  text-align: center;
  border: 3px solid black;
  background-color: light red;
}
    </style>

    <title>Resultado da Simulação</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
  <?php if($situacao == 1 ){ ?>
    <div class="w3-blue">
    <div class="centeraprovado">
      <p>Parabéns, você esta aprovado!</p>
      <a href="main.html"><button>Voltar</button></a>
    </div>
    </div>
  <?php }elseif($situacao == 2){ ?>
    <div class="w3-red">
    <div class="centerreprovado">
      <p>Você esta reprovado</p>
      <a href="main.html"><button>Voltar</button></a>
    </div>
    </div>
  <?php }else{ ?>
    <div class="w3-yellow">
    <div class="centerfinal">
      <p>Você esta de Final.</p>
      <a href="main.html"><button>Voltar</button></a>
    </div>
    </div>

    <form class="w3-container" action="final.php">
      <p>
       	<label>Digite a Nota da Final:</label>
        <input class="w3-input" 
        type="number" name="final" min="0" max="10" step="0.1" required placeholder="Ex. 7.5"/>
        <input type="hidden" name="media" value=<?= $media ?> />
      </p>
      <p>
        <input class="w3-input" type="submit" value="Calcular a Média"/>
      </p>

  <?php } ?>
  </body>
</html>