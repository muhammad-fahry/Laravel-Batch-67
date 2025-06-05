<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>

    <h1>Berlatih Looping</h1>

    <?php 




    echo "<h3>Soal No 1 Looping I Love PHP <br></h3>";

    // LOOPING PERTAMA (Ascending)
    echo "LOOPING PERTAMA <br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i - I Love PHP <br>";
    }

    // LOOPING KEDUA (Descending)
    echo "LOOPING KEDUA <br>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i - I Love PHP <br>";
    }

    // Soal No 2
    echo "<h3>Soal No 2 Looping Array Modulo <br></h3>";

    $numbers = [18, 45, 29, 61, 47, 34];

    echo "Array numbers: ";
    print_r($numbers);

    echo "<br>Array sisa baginya adalah:<br>";

    $rest = [];
    foreach ($numbers as $num) {
        $rest[] = $num % 5;
    }
    print_r($rest);

    // Soal No 3
    echo "<h3>Soal No 3 Looping Associative Array</h3>";

    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    foreach ($items as $item) {
        $assocItem = [
            "id" => $item[0],
            "name" => $item[1],
            "price" => $item[2],
            "description" => $item[3],
            "source" => $item[4]
        ];
        print_r($assocItem);
        echo "<br>";
    }

    // Soal No 4
    echo "<h3>Soal No 4 Asterix</h3>";

    echo "Asterix:<br>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    ?>

</body>

</html>
