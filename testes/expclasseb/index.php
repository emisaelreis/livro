<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
</head>
<body>
    <form action="proc.php" method="post">
        <table width="30%">
            <tr><th colspan="2">Movimento de Caixa</th></tr>
            <tr>
                <td><label for="entrada">Entrada</label></td>
                <td align="right"><input type="text" name="entrada"></td>
            </tr>
            <tr>
                <td><label for="despesa">Despesa</label></td>
                <td align="right"><input type="text" name="despesa"></td>
            </tr>
            <tr>
                <td><label for="saldoanterior">Saldo Anterior</label></td>
                <td align="right"><input type="text" name="saldoanterior"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Calcular">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>