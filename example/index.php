<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php
    require __DIR__ . "/../vendor/autoload.php";

    $op = new \Polon\Optimizer\Optimizer();
    echo $op
        ->optimize(
            "Optimizer Happy and @Polon",
            "Is a compact and easy-to-use tag creator to optimize your site",
            "https://www.polon.digital/polon/optimizer/example/",
            "https://www.polon.digital/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
        )
        ->publisher(
            "polon",
            "polondigital",
            "107305124528362639842",
            "103958419096641225872"
        )
        ->twitterCard(
            "@polondigital",
            "@polondigital",
            "polon.digital",
            "summary_large_image"
        )
        ->openGraph(
            "polon",
            "pt_BR",
            "article"
        )
        ->facebook("123123123123")//->facebook(null, [9283729732123, 912837192372, 73642734723])
        ->render();
    ?>
</head>
<body>

<h1><?= $op->title; ?></h1>
<p><?= $op->description; ?></p>

<?php
echo "<pre>", print_r($op->data(), true), "</pre>";
echo "<pre>", print_r(array_map("htmlspecialchars", $op->debug()), true), "</pre>";
?>

</body>
</html>