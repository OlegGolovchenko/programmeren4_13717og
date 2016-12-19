<?php

namespace Og;

class Noticeboard{
      public $notices;
      
      public function __construct(){
            if(!isset($_COOKIE["notices"])){
                  $this->notices = [];
            }else{
                  $this->notices = unserialize($_COOKIE["notices"]);
            }
      }
      
      public function place($notice){
            array_push($this->notices,$notice);
            setcookie("notices",serialize($this->notices),$time,"/");
      }
      
      public function remove($id){
            unset($this->notices[$id]);
            if(count($this->notices)>0){
                  array_values();
            }
            setcookie("notices",serialize($this->notices),$time,"/");
      }
}