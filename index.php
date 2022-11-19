<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Практика PHP</title>
</head>
<body>
<?php include 'by_me.php' ?>
<div class="maket">
    <div class="header">И я пойду долиной смертной тени и не убоюсь зла, ибо ты со мной...</div>
        <table>
            <td><?php include 'logo.php' ?></td>
            <td><h1><?php echo $p ?></h1></td>
        </table>
    <div class="menu">
        <?php include 'menu.php' ?>

    </div>
    <div class="main">
            <div class="fullname">
                <p> Меня зовут
                <?php echo $name, ' ', $surname . '<br>';
                echo 'поселок', ' ', $city; ?> 
                </p> 
                <p> Мне
                    <?PHP echo $age; ?>
                лет </p>
                <p> Мы научились создавать переменные</p>
                <p> Изучили простые операции с ними </p>
            </div>
            <p class="text">
                Я учусь на курсе "Белый Хакер"
            </p>
        
    </div>
    <div class="footer">
        <?php include 'knowledge.php'; ?>
            <?php echo $a, ' ', $b, ' ', $c; ?> <br>
            <?php $a = 10;
                  $b = 20;
                  $c = $a + $b;
                  echo $c, ' = $a + $b';

            ?> <br>
            <?php echo $d; ?>
            
    </div>
</div>

</body>
</html>