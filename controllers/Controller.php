<?php

namespace Controllers;

class Controller {

    public function View($file)
    {
        return require 'views/'.$file.'.php';
    }
}