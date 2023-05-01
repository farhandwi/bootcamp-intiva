<?php

/*
 * Jelaskan perbedaan dari POST dan GET
    POST mengirimkan data dari klien ke server dalam format yang disembunyikan dari URL. Data dikirimkan sebagai bagian dari permintaan HTTP dan tidak terlihat pada URL. Karena data disembunyikan, POST lebih aman daripada GET, terutama jika data yang dikirimkan adalah sensitif atau pribadi.

    GET mengirimkan data dari klien ke server melalui URL. Data dikirimkan sebagai parameter yang terlihat pada URL. Karena data dikirimkan melalui URL, GET kurang aman daripada POST. Selain itu, karena batasan panjang URL, GET hanya cocok untuk mengirim data kecil seperti parameter pencarian atau halaman navigasi.
 */

/**
 * Jika user mengirimkan request dengan URL seperti ini
 * http://coolwebsite.net/posts?page=1&sort=asc
 * Bagaimana caranya dari sisi Back-end mendapatkan parameter request page dan sort? Tuliskan kodenya
 */
    //Untuk mengambil parameter page dan sort yang dikirimkan oleh user pada URL tersebut, kita bisa menggunakan variabel global $_GET di PHP.

    // Mengambil nilai parameter page dan sort dari URL menggunakan variabel global $_GET
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

    // Menampilkan nilai page dan sort
    echo 'Halaman: ' . $page . '<br>';
    echo 'Urutan: ' . $sort . '<br>';
