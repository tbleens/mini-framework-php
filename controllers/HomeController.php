<?php

namespace Controllers;

use Models\User;

class HomeController extends Controller {

    public function index()
    {
        $newUsers = new User();

        $users = $newUsers->getAll();

        self::View('home');
    }

}