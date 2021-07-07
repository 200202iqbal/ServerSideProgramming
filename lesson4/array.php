<?php
    $character = 
    [
        'id' => 1,
        'name' => 'ヒーロ',
        'job' => 'brave',
        'level' => 1,
        'hp' => 15,
        'mp' => 0,
        'exp' => 0,
    ];

    var_dump($character);
    echo "Character ID ".$character["id"];
    echo PHP_EOL;

    echo "Character's Name : ".$character["name"];
    echo PHP_EOL;

    echo "Job : ".$character["job"];
    echo PHP_EOL;

    echo "Level : ".$character["level"];
    echo PHP_EOL;

    echo "HP : ".$character["hp"];
    echo PHP_EOL;
    echo "MP : ".$character["mp"];
    echo PHP_EOL;

    echo "EXP : ".$character["exp"];
    echo PHP_EOL;

    $character["exp"] = 100;
    echo "Updated EXP Character : ".$character["exp"];
    echo PHP_EOL;

    $character["weapon"] = "sword";
    echo "Character weapon : ".$character["weapon"];
    echo PHP_EOL;
    echo PHP_EOL;

    $drinks = [
        "id" => 1,
        "name" => "ミネラルウォーター",
        "price" => 80,
        "amount" => 8,
        "is_sale" => true,
    ];

    var_dump($drinks);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>

        <div id="drink-table">
        <h1>Drinks List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Is_Sale</th>
            </tr>
            <tr>
                <?php foreach($drinks as $drink):?>
                <td><?= $drink ?></td>
                <?php endforeach ?>
            </tr>
        </table>
        </div>
</body>
</html>
