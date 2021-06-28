<?php
    echo 'コーヒー';
    //文字を改行 (new line)
    echo PHP_EOL;
    echo '紅茶';
    //文字を改行
    echo "\n";
    echo 'ほうじ茶';
    echo "\n";
    //コードフォーマット(きれいにしてくれる)
    //alt + shift + f
    $drink = 'コーヒー';
    echo $drink;
    //echo PHP_EOL;
    echo "\n";
    //HTMLde改行する
    echo "<br>";
    $drink = "紅茶";
    echo $drink;
    echo "\n";
    //変数の中身をみる
    $character_name = "ヒーロー";
    var_dump($character_name);

    //int'整数
    $price = 120;
    var_dump($price);

    //float(小数型)
    $tax_rate = 0.1;
    var_dump($tax_rate);

    //bool 論理型
    $is_discount = true;
    var_dump($is_discount);

    $message = $drink."の価格は".$price."円です。";
    echo $message,PHP_EOL;

    $message2 = "Tax rate is ".$tax_rate;
    echo $message2,PHP_EOL;

    $message3 = "Total ".$price * $tax_rate + $price."円です。";
    echo $message3,PHP_EOL;

    //calculate
    $hp = 3;
    $hp = $hp + 1;
    var_dump($hp);

    $hp = $hp - 1;
    var_dump($hp);

    $hp = $hp * 8;
    var_dump($hp);

    $hp = $hp / 2;
    var_dump($hp);

    $hp = 10;
    $is_equal = ($hp == 20);
    var_dump($is_equal);
    
    $hp = 5;
    $is_under = ($hp < 10);
    var_dump($is_under);

    $hp = 15;
    $is_over = ($hp < 10);
    var_dump($is_over);

