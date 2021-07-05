<?php
//関数を定義
function calculation($x)
{
    $y = $x + 5;
    return $y;

}
//関数を実行
$answer = calculation(5);

function totalPrice ($price,$amount)
{
    $tax = 1.1;
    $total_price = $price * $amount * $tax;
    return $total_price;
}
$total_price = totalPrice(200,5);
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
    <h1>Function / 関数</h1>
    <p>function calculation y = x + 5</p>
    <p>Answer is <?= $answer ?></p>

    <h3>合計金額</h3>
    <p><?= $total_price ?>円</p>

    <p>Mineral Water</p>
    <p id =price>100</p>
    <p id="result"></p>

</body>
</html>