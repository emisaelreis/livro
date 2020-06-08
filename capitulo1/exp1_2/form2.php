<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>
</head>
<body>
    <form method="POST" action="#">
    
    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome">
    <br>
    <label for="num">Número</label>
    <input type="text" name="num">
    <br>
    <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <?php
        if($_POST['nome']){
            echo 'E aí: ' . $_POST['nome'];
        }
        
        if($_POST['num']){
            echo '<br>';
            $n = $_POST['num'];
            for($i = 1 ; $i <= 10; $i++){
                echo $i . ' x ' . $n . ' = ' . ($i * $n) . '<br>';
            }

            echo '<br><hr><br>';
            $c = 1;
            while($c <= 10){
                echo $c . ' x ' . $n . ' = ' . ($c * $n) . '<br>';
                $c++;
            }
        }
    ?>
</body>
</html>