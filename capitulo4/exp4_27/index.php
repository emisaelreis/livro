<?php

    /**
     * Função rsort() classifica um array pelos valores de seus elementos de forma decrescente.Só deve ser usada em
     * arrays numéricos, porque redefine as chaves do array ao fazer a classificação.
     * No caso de arrays com chaves não numérias, a função rsort() os subtituirá por chaves
     * numéricas
     */

    $dinner = array('Sweet Corn and Aspargus',
                    'Lemon Chicken',
                    'Braised Bamboo Fungus');

    $meal = array('breakfast' => 'Walnut Bum',
                'lunh' => 'Cashew Nuts and White Mushrooms',
                'snack' => 'Dried Mulberries',
                'dinner' => 'Eggplant with Chili Sauce');

    print "Antes de função rsort()<br><br>";

    foreach($dinner as $key => $value){
        print "\$dinner: $key $value<br>";
    }
    foreach($meal as $key => $value){
        print "\$meal: $key $value<br>";
    }

    rsort($dinner);
    rsort($meal);
    print "<br>Após a função rsort()<br>";
    foreach($dinner as $key => $value){
        print "\$dinner: $key $value<br>";
    }
    foreach($meal as $key => $value){
        print "\$meal: $key $value<br>";
    }
