<?php
      namespace Programmeren4\Article\Model;
      class Article extends \Modermways\Mvc\Model{
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
                  $this->name = $pName;
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