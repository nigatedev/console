<?php
namespace App\Controller;

use Nigatedev\FrameworkBundle\Controller\Controller;
use Nigatedev\FrameworkBundle\Http\Request;
use Nigatedev\FrameworkBundle\Attributes\Route;

class ControllerModel extends Controller
{
    #[Route('/index')]
    public function index()
    {
        return $this->render("index", [
        "cName" => "ControllerModel",
        "cPath" => "src/Controller/ControllerModel.php"
        ]);
    }
}
