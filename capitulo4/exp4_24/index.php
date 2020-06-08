<?php

    /**
     * Função sort() classifica um array pelos valores de seus elementos.Só deve ser usada em
     * arrays numéricos, porque redefine as chaves do array ao fazer a classificação.
     * No caso de arrays com chaves não numérias, a função sort() os subtituirá por chaves
     * numéricas
     */

    $dinner = array('Sweet Corn and Aspargus',
                    'Lemon Chicken',
                    'Braised Bamboo Fungus');

    $meal = array('breakfast' => 'Walnut Bum',
                'lunh' => 'Cashew Nuts and White Mushrooms',
                'snack' => 'Dried Mulberries',
                'dinner' => 'Eggplant with Chili Sauce');

    print "Antes de função sort()<br><br>";

    foreach($dinner as $key => $value){
        print "\$dinner: $key $value<br>";
    }
    foreach($meal as $key => $value){
        print "\$meal: $key $value<br>";
    }

    sort($dinner);
    sort($meal);
    print "<br>Após a função sort()<br>";
    foreach($dinner as $key => $value){
        print "\$dinner: $key $value<br>";
    }
    foreach($meal as $key => $value){
        print "\$meal: $key $value<br>";
    }
