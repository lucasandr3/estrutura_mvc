<?php
namespace App\repository;

use App\interfaces\repository\HomeRepositoryInterface;
use App\models\Home;

class HomeRepository implements HomeRepositoryInterface
{
    public function all()
    {
        return Home::all();
    }
}