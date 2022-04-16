<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{

    public function indexAction()
    {
        if($this->request->ispost())
        {  

            echo "<pre>";
            print_r($this->request->getPost());
            die;
        }
    }

}
