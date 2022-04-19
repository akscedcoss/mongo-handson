<?php

use Phalcon\Mvc\Controller;


class OrdersController extends Controller
{

    public function indexAction()
    {
        $collection = $this->mongo->orders;
        $cursor = $collection->find()->toArray();
        $this->view->data = $cursor;
    }

    public function addAction()
    {
        $collection = $this->mongo->products;
        $cursor = $collection->find()->toArray();
        $this->view->data = $cursor;


        if ($this->request->ispost()) {
            print_r($this->request->getPost());
    


            $data = [
                'customer_name' => $this->request->getPost('cname'),
                'qty' => $this->request->getPost('qty'),
                'address' => $this->request->getPost('address'),
                'prod' => $this->request->getPost('prod'),
                'status'=>'Paid'
            ];

    
            $collection = $this->mongo->orders;
            $insertOneResult = $collection->insertOne($data);
            $this->response->redirect("/orders");
        }


    }
}
