<?php
    function penjumlahanAritmatika($a, $b, $n) {
        $an = $a + ($n - 1) * $b; // mencari nilai suku ke-n
        $sum = ($n / 2) * ($a + $an); // mencari jumlah deret
        
        return $sum;
    }
    echo penjumlahanAritmatika(3, 5, 10);

    //dengan a adalah nilai suku pertama, b adalah beda suku atau selisih antar suku, dan n adalah jumlah suku yang dihitung.
    //Fungsi ini akan mengembalikan nilai jumlah deret aritmatika dari suku pertama hingga suku ke-n.

/**
 * Buatlah satu metode atau fungsi dengan tujuan untuk
 * melakukan operasi deret aritmatika
 */

 /*
    Apa perbedaan metode dan fungsi?
    Dalam bahasa pemrograman PHP, metode dan fungsi adalah dua konsep yang berbeda.

    Metode adalah fungsi yang didefinisikan di dalam kelas. Metode didefinisikan untuk melakukan operasi pada objek yang dibuat dari kelas tersebut. Metode dapat diakses dengan menggunakan objek sebagai pemanggilnya.

    Fungsi adalah blok kode terpisah yang dapat dipanggil dari bagian lain dari program. Fungsi tidak terikat dengan kelas tertentu dan tidak memerlukan objek sebagai pemanggilnya. Fungsi didefinisikan di luar kelas dan dapat diakses dari mana saja dalam program.

    Jadi, perbedaan antara metode dan fungsi dalam PHP adalah bahwa metode terkait dengan objek dan didefinisikan di dalam kelas, sementara fungsi terpisah dari objek dan didefinisikan di luar kelas. Metode biasanya digunakan dalam pemrograman berorientasi objek, sedangkan fungsi dapat digunakan dalam pemrograman prosedural atau berorientasi objek.
  */