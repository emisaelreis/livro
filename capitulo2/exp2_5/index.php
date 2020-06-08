<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exp 47</title>
</head>
<body>
    <h2>Comparando Strings</h2>
    <form action="#" method="post">
        <label for="nome1">Nome 1
        </label>
            <input type="text" name="nome1">
        <br>
        <label for="nome2">Nome2
            <input type="text" name="nome2">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <hr>

    <?php
        $nom1 = '';
        $nom2 = '';
        if(isset($_POST['nome1']) && isset($_POST['nome2'])){
            $nom1 = $_POST['nome1'];
            $nom2 = $_POST['nome2'];

        }

        if(strcasecmp($nom1, $nom2) ==0){
            echo 'Palavras iguais!';
        } else {
            echo 'Palavras diferentes';
        }

    ?>
</body>
</html>