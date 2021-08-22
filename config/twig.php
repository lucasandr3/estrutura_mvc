<?php
function template($params) {
    $tp = file_get_contents('themes/layout'.LAYOUT.'/template.php');

    $loader = new \Twig\Loader\FilesystemLoader('themes/theme'.THEME);
    $twig = new \Twig\Environment($loader, [
        'debug' => true,
        'cache' => false
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());
    echo "<pre>";
    var_dump($params);
    exit;

    $template = $twig->load('home/home.php');
    $conteudo = $template->render($params);
    $tplPronto = str_replace('{{area_dinamica}}', $conteudo, $tp);
    echo $tplPronto;
    exit;
}