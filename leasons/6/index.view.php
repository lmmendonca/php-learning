<html lang='pt'>

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;

            padding: 2em;

            text-align: center;
        }
    </style>
</head>

<body>

    <h1> Nomes </h1>

    <ul>

        <?php

        foreach ($names as $name) {
            echo "<li>$name</li>";
        }

        ?>

    </ul>

    <h1> Nomes </h1>
    <ul>

        <?php

        foreach ($names as $name) : ?>
            <li> <?= $name ?></li>
        <?php endforeach; ?>

    </ul>

    <h1>Animais</h1>
    <ul>
        <?php

        foreach ($animals as $animal) {
            echo "<li> $animal </li>";
        }
        ?>
    </ul>


</body>

</html>