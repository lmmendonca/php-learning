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

    <h1> Pessoas </h1>

    <ul>
        <?php

        foreach ($person as $feature => $value) {
            echo "<li> <strong>$feature : </strong> $value </li>";
        }

        ?>

    </ul>


</body>

</html>