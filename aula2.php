<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 2</title>
</head>
<body>
    <?php

    $idade = 17;
    $idade2 = 30;
    $altura = 1.7;
    $nome = 'Tiago';
    $casado = false;
    $numero = 1;
    define = ('CONFIG', 1500);

    function calc(){
        global $numero;
        echo $numero;
    }

    calc();


    print($idade);

    echo $altura;

    echo gettype($nome);

    echo $idade + $idade2;

    echo "Olá mundo!, me chamo $nome"

    //$cadastro = array('3', '2', '1');
    //var_dump($cadastro);
   // echo $cadastro[2];

    $cadastro = array(
        'cliente 1' => array(
            nome => 'Roger',
            idade => 3,
        );
        'cliente 2' => array(
            nome => 'Cleber',
            idade => 33,
    );

    ?>
</body>
</html>

 
