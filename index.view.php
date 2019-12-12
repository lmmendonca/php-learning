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

    <h1> Task for the Day </h1>

    <ul>
        <?php

        echo "<li> <strong>title : </strong> $task[title] </li>";
        echo "<li> <strong>due : </strong> $task[due] </li>";
        echo "<li> <strong>assigned_to : </strong> $task[assigned_to] </li>";
        ?>

        <li> <strong> completed : </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ?> </li>

        <li> <strong> completed : </strong>
            <?php
            if ($task['completed']) {
                echo 'Complete';
            } else {
                echo 'Incomplete';
            }
            ?>
        </li>


    </ul>


</body>

</html>