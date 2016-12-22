<?php
namespace Programmeren4\Article\Controller;
class Home extends \ModernWays\Mvc\Controller{
      
      private $pdo;
      
    public function __construct(\ModernWays\Mvc\Route $route = null, \ModernWays\Dialog\Model\INoticeBoard $noticeBoard = null){
          try{
            $this->pdo = new \PDO('mysql:host=localhost;dbname=oleggolovchenko;charset=utf8','olegg','');
          }catch(\Exception $e){
                echo '<script type="text/javascript"> alert("'.$e->getMessage().'")</script>';
          }
            parent::__construct($route,$noticeBoard);
      }
      
      public function editing(){
            $result = $this->pdo->prepare("call ArticleSelectAll");
            $result->execute();
            $model = new \Programmeren4\Article\Model\Article();
            $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
            return $this->view('Home','Editing',$model);
      }
      
      public function inserting(){
            return $this->view('Home','Inserting',null);
      }
      
      public function insert(){
            $model = new \Programmeren4\Article\Model\Article();
            $model->setName($_POST['ArticleName']);
            $model->setPurchaseDate($_POST['ArticlePurchaseDate']);
            $model->setPrice($_POST['ArticlePrice']);
            $command = $this->pdo->prepare('call ArticleInsert(:pName,:pPurchaseDate,:pPrice,@pId)');
            $command->bindValue(':pName',$model->getName(),\PDO::PARAM_STR);
            $command->bindValue(':pPurchaseDate',$model->getPurchaseDate(),\PDO::PARAM_STR);
            $command->bindValue(':pPrice',$model->getPrice(),\PDO::PARAM_STR);
            $command->execute();
            return $this->editing();
      }
      
      public function updating() {
            $model = new \Programmeren4\Article\Model\Article();
            $model->setId($this->route->getId());
            $statement = $this->pdo->prepare("call ArticleSelectOne(:pId)"); 
            $statement->bindValue(':pId', $model->getId(), \PDO::PARAM_INT);
            $statement->execute();
            $articleOne = $statement->fetch(\PDO::FETCH_ASSOC);
            $model->setName($articleOne['Name']);
            $model->setPurchaseDate($articleOne['PurchaseDate']);
            $model->setPrice($articleOne['Price']);
            return $this->view('Home','Updating', $model);
    }
}