<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800;900&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <?php wp_enqueue_style("styles", get_template_directory_uri() . "/css/app.css"); ?>


</head>

<body>
    <?php get_template_part('./themeSection/section', 'header',); ?>