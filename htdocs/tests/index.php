<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <h1>Ma page web</h1>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <?php

    $user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

    echo $user1[0]; // "Mickaël Andrieu"
    echo $user1[1]; // "email"
    echo $user1[3]; // 34
    ?> <br />
    <?php

    $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
    $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
    $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

    $users = [$mickael, $mathieu, $laurene];

    echo $users[1][2]; // "mathieu.nebra@exemple.com"
    ?>
</body>

</html> -->

<!-- <?php

        // Déclaration du tableau des recettes
        $recipes = [
            ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
            ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
        ];

        ?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++) : ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>

</html> -->

<!-- <?php
        $recipe = [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
            'author' => 'mickael.andrieu@exemple.com',
            'enabled' => true,
        ];

        foreach ($recipe as $value) {
            echo $value;
        } ?> -->
        
<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach ($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL;
}
