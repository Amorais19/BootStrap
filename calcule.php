<?php
    $primeiroNum = $_POST['numberO'];
    $segundoNum = $_POST['numberT'];

    if($operacao = $_POST['operacao1']){
        $result = $primeiroNum + $segundoNum;
    }else if($operacao = $_POST['operacao2']){
        $result = $primeiroNum - $segundoNum;
    }else if($operacao = $_POST['operacao3']){
        $result = $primeiroNum * $segundoNum;
    }else{
        $result = $primeiroNum / $segundoNum;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Life Style</title>
</head>
<body>
<div class="container py-4">
        <div class="jumbotron">
            <p class="h3 text-center"> Lunar </p>
        </div>
        <div class="row py-4">
            <div class="col-sm-12 text-center">
                <p>Prontinho! Aqui está o seu resultado:</p>
            </div>
            <div class="col-sm-12 text-center">
                <?php echo $result ?>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="card-footer text-center" style="background-color: darkslategrey;">
            <p>Todos os direitos reservados a &copy;Copyright</p>
        </div>
    </div>
</body>
</html>