<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sample</title>
</head>
<body>
    このページはPHPで動いています。
    <div>
    <?php
        //最後はセミコロンで終わる
        echo "こんにちは！";
        echo 1 + 2;
        
    ?>        
    </div>
    <p>
        <?php
        //文字をくっつけるときは、[.]　(ビリオド)を使う
            echo "神奈川県"."横浜市";
        ?>
    </p>

</body>
</html>