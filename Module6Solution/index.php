<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b893c8c2</title>
</head>

<body>
    <h1 style="text-align: center;">neeraj kumar singh</h1>
    <pre>
        <?php
            $target=13;
            if(!isset($_GET['guess']))echo "Missing guess parameter";
            else if(empty($_GET['guess']))echo "Your guess is too short";
            else if(!is_numeric($_GET['guess']))echo "Your guess is not a number";
            else if($_GET['guess']<$target)echo "Your guess is too low";
            else if($_GET['guess']==$target)echo "Congratulations - You are right";
            else if($_GET['guess']>$target)echo "Your guess is too high";
        ?>
    </pre>
</body>

</html>