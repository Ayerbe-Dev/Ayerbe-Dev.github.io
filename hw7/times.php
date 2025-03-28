<!doctype html>
<html>
<head>
    <title>Times Table</title>
</head>
<body>
    <h1>Times Table</h1>
    <?php
        $n = $_REQUEST['n'];
        for($i = 1; $i <= 15; $i++)
            $p = $i * $n
            echo "$n x $i = $p<br>";
    ?>
</body>