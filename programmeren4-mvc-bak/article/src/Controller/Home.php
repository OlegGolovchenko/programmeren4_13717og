<?php
namespace Programmeren4\Article\Controller;
class Home extends \Modernways\Mvc\Controller{
      
      public function Editing(){
            $pdo = new \PDO('mysql:host=localhost;dbname=oleggolovchenko;charset=utf8');
            $result = $pdo->prepare("call ArticleSelectAll");
            $result->execute();
            $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
            return $this->view('Home','Editing',$model);
      }
      
      
}