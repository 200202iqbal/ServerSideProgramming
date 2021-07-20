<?php
    //東京の時刻に設定
    date_default_timezone_set('Asia/Tokyo');
    $INDZ =  date_default_timezone_set('Asia/Jakarta');

    $weeks = ["日","月","火","水","木","金","土"];
    $week_number = date("w");
    //1999/4/9
    $datetime = strtotime("1999/4/9");

    //DateTime class を作成
    //今日
    $date = new DateTime();
    $date2 = new DateTime("1994/4/9");
    $diffdate = $date2->diff($date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h2>年</h2>
    <P>
        <?= date('Y')?>
    </P>

    <h2>月</h2>
    <p>
        <?= date('m')?>
    </p>
    <h2>日</h2>
    <p><?= date('d') ?></p>

    <h2>日付</h2>
    <p><?= date('y年m月d日')?></p>

    <h2>時刻</h2>
    <p><?= date('H:i:s')?></p>

    <h2>曜日</h2>
    <p><?= $weeks[$week_number]?>曜日</p>

    <h2>今月の末日</h2>
    <p><?= date('t')?>日</p>

    <h2>UTC(Unix TimeStamp)</h2>
    <p><?= time()?></p>

    <h2>1999/4/9</h2>
    <p><?= $datetime ?></p>

    <p><?= date('Y年m月d日', $datetime)?></p>

    <h2>INDZone</h2>
    <p><?= date('Y年m月d日 H:i:s',$INDZ)?></p>

    <h2>翌日</h2>
    <p><?= date('Y/m/d', strtotime('+1days'))?></p>
    <h2>昨日</h2>
    <p><?= date('Y/m/d', strtotime('-1days'))?></p>
    <h2>3か月前に</h2>
    <p><?= date('Y/m/d', strtotime('-3months'))?></p>

    <h2>2週間後</h2>
    <p><?= date('Y/m/d', strtotime('+2weeks'))?></p>
    <h2>5週間後</h2>
    <p><?= date('Y/m/d', strtotime('+5weeks'))?></p>

    <h2>DateTime</h2>
    <p><?= $date->format('Y')?></p>
    <p><?= $date->format('Y/m/d H:i:s')?></p>
    <p><?= $date->modify('+1days')->format('Y/m/d H:i:s')?></p>

    <h2>Diff</h2>
    <p><?= $diffdate->days?>日</p>
    <p><?= $diffdate->days/365?></p>
    <p><?= floor($diffdate->days/365)?></p>

    <h2>今月カレンダー</h2>
    <h2>2021年7月</h2>
        <?php        
            $month = (int)date('m');
            $start_day = 1;
            $end_day = date('t');
            $days = range($start_day, $end_day);
            function dayOfWeek($day){
                $year = date('Y');
                $month = date('m');
                $date_string = "{$year}-{$month}-{$day}";
                $index = date("w",strtotime($date_string));
                return $index;
            }

        ?>
    <?php foreach ($days as $day): ?>
    <p><?= $day?> (<?=$weeks[dayOfWeek($day)]?>)</p>
    <?php endforeach ?>
    
</body>
</html>