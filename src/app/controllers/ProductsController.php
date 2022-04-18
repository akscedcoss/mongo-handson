<?php

use Phalcon\Mvc\Controller;


class ProductsController extends Controller
{

    public function indexAction()
    {

        if ($this->request->ispost()) {
            // print_r($this->request->getPost('q'));
            $query = $this->request->getPost('q');
            $collection = $this->mongo->products;
            $cursor = $collection->find(['name' => $query])->toArray();
        } else {
            $collection = $this->mongo->products;
            $cursor = $collection->find()->toArray();
        }
        $this->view->data = $cursor;
    }
    public function delAction($id)
    {
     
        $collection = $this->mongo->products;
        $deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId ($id)]);
      
        $this->response->redirect("/products");
    }

    public function editAction($id)
    {
        
        $collection = $this->mongo->products;
        $findOne = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId ($id)]);
        $this->view->data=  $findOne;
        
    }
}
