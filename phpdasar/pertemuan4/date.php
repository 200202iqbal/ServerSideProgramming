<?php
    //date
    // untuk menampilkan format tertentu
    echo date("l, d-M-Y");
    echo PHP_EOL;
    // Time
    // UNIX TimeStamp / EPOCH Time
    // detik yang sudah berlalu sejak 1 Januari 1970
    
    echo time();
    echo PHP_EOL;
    echo date("d-M-Y", time()-60*60*24*100).PHP_EOL;
    
    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0) ada 6 parameter
    // jam , menit ,detik ,bulan ,tanggal, tahun

    echo "<br>".mktime(0,0,0,12,13,1995);
    echo "<br>".date("l",mktime(0,0,0,12,13,1995));

    // strtotime
    // kebalikannya dari mktime
    echo strtotime("13 Desember 1995");
    echo "<br>".date("l", strtotime("13 Dec 1995"));

    /* Fungsi yang lain yg sering digunakan
         
        String:
        strlen()
        strcmp()
        explode()
        htmlspecialchars()

        Utility
        var_dump()
        isset()
        empty()
        die()
        sleep()
    */

?>