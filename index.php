<?php
$continents = [
    'Africa' => [
        'Big-eared Fox',
        'Hippo',
        'Giraffe',
        'Crocodile',
        'Spotted hyena',
        'Zebra',
        'Chimpanzee',
        'Python',
        'Scorpio',
        'Canna',
    ],
    'Eurasia' => [
        'Tapir',
        'Snow leopard',
        'Varan',
        'White Hare',
        'Capercaillie',
        'Pheasant',
        'Mantis',
        'Brown bear',
        'Sable',
        'Wolf'
    ]
];
$explode = [];
$first_word = [];
$second_word = [];
$two_words = [];
$new_array = [];
foreach ($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        if (str_word_count($animal) == 2 ){
            $explode = explode(" ", $animal);
            $first_word[] = $explode[0];
            $second_word[] = $explode[1];
        }
    }
}

shuffle($first_word);
shuffle($second_word);
for ($i = 0;$i < count($first_word); $i++) {
    $two_words = $first_word[$i].' '.$second_word[$i];
    foreach ($continents as $continent => $animals) {
        foreach ($animals as $animal){
            if (stripos($animal,$first_word[$i]) !== false){
                $new_array[$continent][] = $first_word[$i]." ".$second_word[$i];
            }
        }
    }
}
foreach ($new_array as $continent => $animals) {
    echo '<h1>'.$continent.'</h1>';
    echo implode(", ",$animals);
}