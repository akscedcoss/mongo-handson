<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{

    public function indexAction()
    {
        if ($this->request->ispost()) {


            if ($this->request->getPost('label')) {
                $labelValue = array_combine($this->request->getPost('label'), $this->request->getPost('value'));
            }

            $data = [
                'name' => $this->request->getPost('name'),
                'categoryName' => $this->request->getPost('categoryName'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'labelValue' => $labelValue
            ];

    
            $collection = $this->mongo->products;
            $insertOneResult = $collection->insertOne($data);

        }
    }
}
