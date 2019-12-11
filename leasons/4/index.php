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
    <header>
        <h1>
            <?php 
                // ?key=value
                
                // $name = $_GET['name'];


                // echo $name; 
            ?>
        </h1>

        <h1>
            <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
        </h1>
    </header>
</body>

</html>