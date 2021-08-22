<?php
namespace App\Controllers;

use App\service\HomeService;
use Core\Controller;

class HomeController extends Controller
{
    private $homeService;

    public function __construct ()
    {
        $this->homeService = new HomeService;
    }

	public function index()
	{
        $data = [];

        $data['nome'] = 'Lucas';
        $data['last'] = 'Lucas Vieira de Andrade';
        $data['clientes'] = $this->homeService->all();
        $data['teste'] = [
          'id' => 1, 'nome' => 'lucas vieira', 'idade' => 30,
          'id' => 2, 'nome' => 'lorraine', 'idade' => 28,
        ];
        template($data);

//        $data = $this->homeService->all();
//		$this->render('home/home', $data);
	}
}