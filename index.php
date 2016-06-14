<h1>Hello</h1>

<pre>
<?php

$bulk = [
    [
        'name' => 'Jens',
        'age' => 23,
        'size' => 176
    ],
    [
        'name' => 'Snej',
        'age' => 18,
        'size' => 186
    ],
    [
        'name' => 'Peter',
        'age' => 80,
        'size' => 178
    ],
    [
        'name' => 'Snoop',
        'age' => 45,
        'size' => 160
    ]
];

$persons = array_filter($bulk, function ($person) {
    return $person['size'] == 176;
});

print_r($persons);

?>
</pre>
