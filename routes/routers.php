<?php
global $routes;
$routes = array();

/*
*   Rotas do APP 
*/

// rota home
$routes['/'] = '/home';

// rotas auth
$routes['/login'] = '/login';
$routes['/login/entrar'] = '/login/signin';
$routes['/login/cadastro'] = '/login/signup';
$routes['/sair'] = '/login/logout';

// rotas de links
$routes['/links'] = '/link';
$routes['/meu_link'] = '/link/meu_link';

// rota cliente rota
$routes['/{slug}'] = '/page/index/:slug';

// rotas de links
$routes['/conta'] = '/conta';

/*
*  Fim das rotas do app
*/


