<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exp46</title>
</head>
<body>
    <h3>Validando String, Pag 46</h3>
    <form action="#" method="post">
        <input type="text" name="word" value="">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <hr>

    <?php
        $dado = '';
        if(isset($_POST['word'])){
            $dado = $_POST['word'];
        }

        if(strlen($dado) < 4){
            echo 'Digite uma palavra com pele menos 4 caracteres';
        }
        echo $dado. '<br>';

        // echo strlen($dado).'<br>';
        // echo strlen(trim($dado)) . '<br>';
        // echo $dado. '<br>';
        

    ?>
</body>
</html>