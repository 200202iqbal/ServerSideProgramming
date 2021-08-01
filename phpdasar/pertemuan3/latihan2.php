<?php
// Pengondisian / percabangan
// if else
// if else if else
// ternary 
// switch

$x = 20;
if($x < 20)
{
    echo "True";
}elseif ( $x == 20)
{
    echo "Equal";
}
else
{
    echo "False";
}


// ternary 
/* $result = condition ? value1 : value2;
    atau jika kepanjangan bisa menjadi
    $result = condition
                        ? value1
                        : value2 ;

    cara yang lain menulis ternary

    $result = $initial ?: $default;
    jika $initial bernilai kosong/false akan menghasilkan nilai $default,
    dan jika bernilai true akan menghasilnya nilai si $initial itu sendiri
    contoh

    $path = '/about';
    $url = $path ?: '/';

    echo $url;
    hasilnya akan /about
*/
?>