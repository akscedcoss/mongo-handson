<?php

use Phalcon\Mvc\Controller;


class OrdersController extends Controller
{

    public function indexAction()
    {
        echo "hi";
        die;
    }

    public function addAction()
    {
       $this->view->hola='hola';
     
    }
}
