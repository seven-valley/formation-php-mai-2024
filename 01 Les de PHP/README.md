# Utilisation des balises
```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $age = 19;
    ?>
    <h1> Entrez Casino</h1>
    <?php if ($age >= 18) { ?>
        <h1>Good</h1>
    <?php } else { ?>
        <h1>No Good votre age <?= $age ?></h1>
    <?php } ?>

    <?php if ($age >= 18) : ?>
        <h1>Good</h1>
    <?php else :   ?>
        <h1>No Good</h1>
    <?php endif; ?>

</body>

</html>
````