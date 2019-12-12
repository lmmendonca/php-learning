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
<ul>

    <?php foreach ($tasks as $task) : ?>

        <li>

            <?php if ($task->complited) : ?>
                <span style="text-decoration: line-through;">
                    <?= $task->description; ?>
                </span>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif ?>

            <?php if ($task->complited) : ?>
                <span style="text-decoration: line-through;"></span>
            <?php endif; ?>

        </li>

    <?php endforeach; ?>

</ul>

</body>

</html>