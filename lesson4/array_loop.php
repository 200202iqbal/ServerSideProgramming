<?php
$years = [2021,2020,2019,2018,2017];
$drinks= ["milktea","cola","cider","pocari sweat","orange juice","milk"];
$user = [
    "name" => "東京",
    "gender" => "male",
    "age" => 21,
];

$selectYears = range(date("Y"),1880);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Loop</title>
</head>
<body>
    <h2>個数</h2>
    <p><?=count($years)?></p>

    <?php
        for($i= 0; $i < count($years); $i++)
        {
            echo $years[$i];
            echo "<br>";
        }
        echo "<hr>";
        foreach($years as $year)
        {
            echo $year;
            echo "<br>";
        }
    ?>
    <h2>飲み物のcount</h2>
    <p><?=count($drinks)." items"?></p>
    <ul>
        <?php
            foreach($drinks as $drink)
            {
                echo "<li>{$drink}</li>"; 
            }
        ?>
    </ul>
    <h2>飲み物の</h2>
    <p><?=count($drinks)." items"?></p>
    <ul>
        <?php foreach($drinks as $drink) : ?>
            <li><?=$drink?></li>
        <?php endforeach ?>
    </ul>

    <h2>ユーザデータ</h2>
    <dl>
        <?php foreach($user as $key => $value) : ?>
            <dt><?=$key?></dt>
            <dt><?=$value?></dt>
        <?php endforeach ?>
    </dl>
    <select name="year" id="">
        <?php foreach($years as $year) : ?>
        <option value="<?=$year?>"><?=$year?>年</option>
        <?php endforeach ?>
    </select>
    <h2>Select years count</h2>
    <p><?=count($selectYears)?></p>
    <select name="selectYears" id="">
        <?php foreach($selectYears as $selectyear) : ?>
            <option value="<?=$selectyear?>"><?= $selectyear?>年</option>
        <?php endforeach ?>
    </select>
    <?php
    //現在の階層のすべてのファイルをとる
    $files = glob('./*'); 
    //phpファイルしかをとらないと
    // $files = glob('./*.php');
    var_dump($files);
    ?>

    <ul>
        <?php foreach ($files as $file) : ?>
            <li><?=$file?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>