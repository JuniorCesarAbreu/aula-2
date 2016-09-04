<body>
  <?php

  // PHP_EOL = quebra de linha

  $variavel = '6' + '1';
  $variavel2 = "Um numero qualquer {$variavel}" . $variavel;
  $variavel3 = $variavel2[0];

  // array com indices anonimos
  $variavel4 = array(
    'Maça', 'Banana', 'Pêra', 'Quiabo'
  );

  // array associativo
  $variavel5 = array(
    'a' => 'Maça', 'b' => 'Banana', 'c' => 'Pêra', 'd' => 'Quiabo'
  );

  //$variavel5[10];


  echo $variavel;

  echo "<br>";

  echo $variavel2;

  echo $variavel3;

  echo '<br>' . implode(' | ', $variavel4);

  echo '<br>' . $variavel5['c'];

  var_dump($variavel5);


   ?>
</body>
