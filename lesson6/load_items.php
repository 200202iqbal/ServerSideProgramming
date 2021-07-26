<?php
//お知らせファイルのパス
$path = "data/information.txt";
$informations =[];
if(file_exists($path))
{
    //ファイルがあればファイルを開く(read only)
    $file=fopen($path,"r");
    //1行読み込み
    $line = fgets($file);
    fclose($file);
    $file=fopen($path,"r");
    //すべて読み込み
    while($lines = fgets($file))
    {
        $informations[] = $lines;
    }
    fclose($file);
}

$pathItems = "data/items.csv";
$items =[];
if(file_exists($path))
{
    //ファイルがあればファイルを開く(read only)
    $file=fopen($pathItems,"r");
    //カラムを読み込む
    $columns = fgetcsv($file);
    //var_dump($column);
    var_dump($columns);
    //1行ずつCSV読み込み
    while($data = fgetcsv($file))
    {

        //カラムを繰り返す
        foreach($columns as $index => $column)
        {
            $item[$column] = $data[$index];
        }
        //商品を追加
        $items[] = $item;
    }
    fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Information</h2>
    <p>1行読み込み</p>
    <ul>
        <li><?= $line ?></li>
    </ul>
    <p>すべて読み込み</p>
    <ul>
        <?php foreach($informations as $information) :?>
            <li><?= $information?></li>
        <?php endforeach ?>
    </ul>

    <h2>商品一覧</h2>
        <table>

            <?php foreach($items as $item):?>
                <tr>
                    <td><?= $item["name"] ?></td>
                    <td><?= $item["price"]?></td>
                </tr>
                <?php endforeach ?>
        </table>
</body>
</html>