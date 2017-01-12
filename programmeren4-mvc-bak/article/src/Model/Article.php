<?php
      namespace Programmeren4\Article\Model;
      class Article extends \ModernWays\Mvc\Model{
            private $name;
            private $purchaseDate;
            private $price;
            private $id;
            
            public function getName(){
                  return $this->name;
            }
            
            public function getPrice(){
                  return $this->price;
            }
            
            public function getPurchaseDate(){
                  return $this->purchaseDate;
            }
            
            public function getId(){
                  return $this->id;
            }
            
            public function setName($pName){
                  (strlen($pName)>0&&preg_match("/^[a-zA-Z 0-9]*$/"))? $this->name = $pName : $this->name ="";
            }
            
            public function setPrice($pPrice){
                  $this->price = $pPrice;
            }
            
            public function setPurchaseDate($pPurchaseDate){
                  $this->purchaseDate = $pPurchaseDate;
            }
            
            public function setId($pId){
                  $this->id = $pId;
            }
      }
?>