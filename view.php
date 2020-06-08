<?php
class view {
    public static function exibir($titulo, $campos = array(),$tipo = "E")
    {
        print "<br><table border='1' width='40%'>";
        print "<tr><th colspan='2'>$titulo</th></tr>";

        if($tipo == "c"){
            $total = 0;
            foreach ($campos as $key => $value) {
                print "<tr><td>$key</td><td align='right' width='15%'>" . number_format($value, 2, ',','.') . "</td></tr>";
                $total += $value;
            }
            print "<tr><td align='right'>Total</td><td>" . number_format($total, 2, ',','.') . "</td></tr>";
        } else {
            foreach ($campos as $key => $value) {
                print "<tr><td>$key</td><td align='right' width='15%'>$value</td></tr>";
            }
        }
        print "</table>";
    }
}