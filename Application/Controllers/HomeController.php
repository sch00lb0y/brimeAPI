<?php

namespace Brime\Controllers;

use Brime\Models\User;
use Slim\Views\Twig as View;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $user = User::find(61);
        echo '<pre>';
        var_dump($user->email);

        die();
        return $this->view->render($response, 'home.twig');
    }
}