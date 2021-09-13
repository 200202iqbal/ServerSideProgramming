<?php
require_once "function.php";
$title = "My Shop";
$price = 150;
$amount = 5;
//合計金額の計算
$total_price = totalPrice($price,$amount)
?>

<!DOCTYPE html>
<html lang="en">
<!-- head タグのコンポーネントを読み込む -->
<?php include "head.php" ?>
<body>  
    <div class="container">
        <label class="fw-bold">価格</label>
        <p><?= $price ?>円</p>
        <label class="fw-bold">個数</label>
        <p><?= $amount ?>個</p>
        <label class="fw-bold">合計金額</label>
        <p><?= $total_price ?>円</p>
    </div>
</body>
</html>
