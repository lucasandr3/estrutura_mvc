<?php
namespace App\middleware;

use App\models\Usuarios;

class Auth
{
    public static function isLogged()
    {
        $user = new Usuarios();

        if (!$user->verifyLogin()) {
            header("Location: ".BASE_URL."login");
            exit;
		}
    }
}