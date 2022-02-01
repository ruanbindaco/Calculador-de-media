<?php
  $notafinal = (float)$_GET["final"];
  $media = (float)$_GET["media"];

  $mediafinal = ($notafinal + $media)/2;
  if($mediafinal >= 6){
    $situacao = 1;
  }else{
    $situacao = 2;
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

    </style>

      <title> Resultado da Final </title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
    <?php if($situacao == 1){ ?>
      <div class="w3-panel w3-pale-green w3-leftbar w3-rightbar w3-border-green">
      <div class="center2">
      <p> Parabéns, você passou na Final </p>
            <a href="main.html"><button>Voltar</button></a>
      </div>
      </div>
    <?php }else{ ?>
      <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
      <div class="center2">
      <p> Você está reprovado </p>
            <a href="main.html"><button>Voltar</button></a>
      </div>

    <?php } ?>
    </body>
  </html>