<?php
namespace Programmeren4\Article\Controller;
class Home extends \Modernways\Mvc\Controller{
      
      private $pdo;
      
      public function __construct(){
            $this->pdo = new \PDO('mysql:host=localhost;dbname=oleggolovchenko;charset=utf8');
      }
      
      public function editing(){
            $result = $this->pdo->prepare("call ArticleSelectAll");
            $result->execute();
            $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
            return $this->view('Home','Editing',$model);
      }
      
      public function inserting(){
            return $this->view('Home','Insrting',null);
      }
      
      public function insert(){
            $model = new \Programmeren4\Article\Model\Article();
            $model->setName($_POST['ArticleName']);
            $model->setPurchaseDate($_POST['ArticlePurchaseDate']);
            $model->setPrice($_POST['ArticlePrice']);
            $command = $this->pdo->prepare('ArticleInsert(:pName,:pPurchaseDate,:pPrice,@pId)');
            $command->bindValue(':pName',$model->getName(),\PDO::PARAM_STR);
            $command->bindValue(':pPurchaseDate',$model->getPurchaseDate(),\PDO::PARAM_STR);
            $command->bindValue(':pPrice',$model->getPrice(),\PDO::PARAM_STR);
            $result = $command->execute();
            $this->editing();
      }
}