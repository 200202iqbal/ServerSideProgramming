<?php
//get パラメータをとる
if(isset($_GET["zipcode"]))
{
    $zipcode = $_GET["zipcode"];
    //APIのURL
    $url = "http://zipcloud.ibsnet.co.jp/api/search?zipcode={$zipcode}";
    //echo $url;

    $json = file_get_contents($url);
    //var_dump($json);

    //UTF8に変換
    $json = mb_convert_encoding($json,"UTF8","ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN,SJIS");
    //JSONをPHPのデータに変換
    $data = json_decode($json,true);
    //var_dump($data)

    //結果データ取得
    if ( is_array($data["results"]))
    {
        $prefecture = $data["results"][0]["address1"];
        $city = $data["results"][0]["address2"];
        $town = $data["results"][0]["address3"];
        $zipcode = $data["results"][0]["zipcode"];
        // var_dump($prefecture);
        // var_dump($city);
        // var_dump($town);
        // var_dump($zipcode);

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Zip Code</h2>
        <!-- method :get URLからデータが見られる -->
        <form action="" method="get">
            <input type="text" name="zipcode" class="form-control">
            <button class="btn btn-primary">Search</button>
        </form>
        <h3>Prefecture</h3>
        <p><?= $prefecture ?></p>

        <h3>City</h3>
        <p><?= $city ?></p>

        <h3>Town</h3>
        <p><?= $town ?></p>
    </div>
</body>
</html>
