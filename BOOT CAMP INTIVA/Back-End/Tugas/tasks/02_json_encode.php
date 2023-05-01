<?php

$source = [
    [
        'name'      => 'Fikri Fadillah',
        'age'       => 23,
        'gender'    => 'male'
    ],
    [
        'name'      => 'Irham Mustofa',
        'age'       => 25,
        'gender'    => 'male'
    ],
    [
        'name'      => 'Sari Febriani',
        'age'       => 24,
        'gender'    => 'female'
    ],
    [
        'name'      => 'Kennedy Musyafa',
        'age'       => 23,
        'gender'    => 'male'
    ],
    [
        'name'      => 'Siti Fatimah',
        'age'       => 19,
        'gender'    => 'female'
    ],
];

/**
 * Buatlah code sehingga menghasilkan output dari variable $source di atas menjadi:
 * [
 *      {
 *          name: "Fikri Fadillah",
 *          age: 23,
 *          gender: "male"
 *      },
 *      {
 *          name: 'Irham Mustofa',
 *          age: 25,
 *          gender: 'male'
 *      },
 *      {
 *          name: 'Sari Febriani',
 *          age: 24,
 *          gender: 'female'
 *      },
 *      {
 *          name: 'Kennedy Musyafa',
 *          age: 23,
 *          gender: 'male'
 *      },
 *      {
 *          name: 'Siti Fatimah',
 *          age: 19,
 *          gender: 'female'
 *      },
 * ]
 */
$output = json_encode($source);
print_r($output);
