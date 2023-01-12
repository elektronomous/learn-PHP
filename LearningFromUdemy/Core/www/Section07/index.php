<?php
declare(strict_types=1);

// 21
$myName = "Muhammad Faza Akbar";
$hour = 12;

$fruits = ["Apple", "Bananas", "Strawberry"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Website</title>
</head>

<body>
    <h1>First Website</h1>
    <?php if($hour < 12): ?>
    <h2>Good Morning <?php echo $myName; ?></h2>
    <?php elseif ($hour < 18): ?>
    <h2>Good Afternoon <?php echo $myName; ?></h2>
    <?php elseif ($hour < 22): ?>
    <h2>Good Evening <?php echo $myName; ?></h2>
    <?php else: ?>
    <h2>Good Night</h2>
    <?php endif; ?>

    <ol>
        <?php foreach($fruits as $fruit): ?>
        <li><?php echo $fruit; ?></li>
        <?php endforeach; ?>
    </ol>
    <ol>
        <?php for($i = 0; $i < count($fruits); $i++): ?>
        <li><?php echo $fruit; ?></li>
        <?php endfor; ?>
    </ol>
    <pre><?php print_r($_SERVER);?></pre>
    <pre><?php print_r($_GET); ?></pre>
</body>

</html>