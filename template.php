<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php if (isset($content)) : ?>
        <div class="content">
            <?= $content ?>
        </div>
    <?php endif; ?>
</body>
</html>