<!DOCTYPE html>
<html lang="de">
<head>
    <?php require_once __DIR__ . '/module/head_meta_tags.tpl.php';?>
</head>
<body id="tpl_<?=$templateVariables['template']?>">
<header>
    <h2>PHP-Training:Design Pattern</h2>
</header>
<nav class="main">
    <?php require_once __DIR__ . '/module/main_navigation.tpl.php';?>
</nav>
<main>
    <article>
        <?php require_once $template;?>
    </article>
</main>
</body>
</html>