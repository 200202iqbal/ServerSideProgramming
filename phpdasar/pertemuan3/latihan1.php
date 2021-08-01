<?php
// Pengulangan
// for
// while
// do ... while
// foreach : pengulangan khusus array

for ($i = 0 ; $i < 5 ; $i++)
{
    echo "Hello World <br>";
}
$i = 0;
while ($i < 5)
{
    echo "Hello World <br>";
    $i++;
}
$i = 0;
do {
    echo "Do ... While";
    $i++;
}while($i < 5)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warnabaris
        {
            background-color:grey;
        }
    
    </style>
</head>
<body>
    
    <?php //ternary example
        $status = true; 
        $title = $status ? "Login" : "Logout";
        echo "<h1> $title </h1>"; 

        $message= "Hello";
        $printMessage = $message ?: "Hello World";
        echo "$printMessage";
    ?>
    <table border="1" cellpadding="20" cellspacing="0"> 
        <?php 
            for($i=1;$i<=3;$i++){
                echo "<tr>";
                for($j=0 ; $j<5;$j++)
                {
                echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }  
        ?>
    </table>
    <h1>Table II</h1>
    <table border="1" cellpadding="50" cellspacing="0">
            <?php for ($i=1;$i<=5;$i++) :?>
                <?php if($i %2 == 1 ) : ?>
                    <tr class="warnabaris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for ($j=1;$j<=5;$j++) :?>
                        <td> <?= "$i,$j"; ?> </td>
                    <?php endfor;?>
                </tr>
            <?php endfor; ?>
    </table>
</body>
</html>