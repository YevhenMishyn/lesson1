<?php

$Earth = [
    'Africa' => [
        'Asilisaurus kongwe',
        'Megaloceros giganteus',
        'Hippotragus leucophaeus',
        'Aegyptopithecus zeuxis',
        'Kamoyapithecus',
        'Kenyapithecus wickeri hamiltoni',
        'Hyopsodus',
        'Ictidorhinus martinisi',
        'Victoriapithecus koenigswald',
        'Titanomyrma lubei fastigatus',
        'Herpetoskylax hopsoni',
        'Hipparion',
        'Sphecomyrma mesaki concudense',
        'Podabrus',
        'Barytherium grave',
        'Formica annosa florissantensis',
        'Lasius',
        'Glyptodon clavipes glom',
        'Protochrysa',
        'Osbornoceros osborni fuscobasalis',
    ],
    'N_America' => [
    ],
    'S_America' => [
    ],
    'Eurasia' => [
    ],
    'Australia' => [
    ],
    'Antarctica' => [
    ],
];

echo '<pre>';
print_r($Earth);


//Нужно провести поиск по африке и найти всех животных из двух слов и перетащить их в новый массив


$Black_continent = array_shift($Earth['Africa']);
echo '<pre>';
print_r($Black_continent);


foreach ($Earth['Africa'] as $faunas) {
    echo '<b>' . $Continent . '</b><br>';
    foreach ($faunas as $fauna) {
        echo $fauna, ',', PHP_EOL;
    }
}
