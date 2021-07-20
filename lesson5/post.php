
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="confirm.php" method="post">
        <h3>氏名</h3>
        <input type="text" name="name">
        <h3>メールアドレス</h3>
        <input type="text" name="email">
        <h3>パスワード</h3>
        <input type="password" name="password">
        <h2>誕生日</h2>
        <select name="year">
            <?php foreach (range(date('Y'),1990) as $year): ?>
            <option value="<?=$year ?>"><?=$year ?></option>
            <?php endforeach?>
        </select>
        <select name="month">
            <?php foreach (range(1,12) as $month): ?>
            <option value="<?=$month ?>"><?=$month ?></option>
            <?php endforeach?>
        </select>
        <select name="day">
            <?php foreach (range(1,31) as $day): ?>
            <option value="<?=$day ?>"><?=$day ?></option>
            <?php endforeach?>
        </select>
        <h3>性別</h3>
        <input type="radio" name="gender" value="male" id="gender_male">
        <label for="gender_male">男</label>
        <input type="radio" name="gender" value="female" id="gender_female">
        <label for="gender_female">女</label>

        <h3>質問 1</h3>
        <p>このサイトは何で知りましたか</p>
        <input type="checkbox" name="q1[]" id="q1_1">
        <label for="q1_1">答え1</label>
        <input type="checkbox" name="q1[]" id="q1_2">
        <label for="q1_2">答え2</label>
        <input type="checkbox" name="q1[]" id="q1_3">
        <label for="q1_3">答え 3</label>
        <div>
            <input type="submit" value="送信">
        </div>

    </form>
</body>
</html>