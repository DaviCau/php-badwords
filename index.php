<?php

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt impedit nisi suscipit, temporibus quasi aspernatur ipsam omnis molestias cupiditate aut voluptatibus commodi vitae nostrum, voluptate, modi beatae sit quis quia! Voluptatem non nihil voluptate deleniti dolore autem reiciendis. Ipsum beatae ullam sapiente, corrupti quidem ab eum, sed eaque quos repellat laborum quis illo minus fuga, voluptatem deleniti deserunt sunt dignissimos voluptatum id obcaecati. Unde nam, impedit sit, quidem, debitis totam maxime ea sed iusto repellendus sequi assumenda distinctio nobis! Ut temporibus assumenda excepturi voluptas at a amet vero ad. Sunt quisquam et quod eius harum accusamus molestias amet rem soluta.";

$word = $_GET["badword"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <h2>Paragrafo originale</h2>
        <p><?php echo $string; ?></p>
        <small>Lunghezza paragrafo: <?php echo strlen($string); ?></small>
        <h2>Paragrafo censurato</h2>
        <p><?php

        $newstring = str_replace($word, "***", $string);
        echo $newstring;
        
        ?></p>
        <small>Lunghezza paragrafo: <?php echo strlen($newstring); ?></small>
    </body>
</html>