<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/main.css">

</head>

<body>
    <div class="container">
        <h2>Новости</h2>
        <div class="row">
            <?php foreach ($newsList as $item) { ?>
                <div class="block">
                    <div class="block__item"><?php echo $item['name']; ?></div>
                    <div class="block__item"><?php echo $item['guild']; ?></div>
                    <div class="block__item"><?php echo $item['info']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
    <a href="/news/sport/1">123</a>
</body>

</html>