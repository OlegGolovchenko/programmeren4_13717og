<?php
namespace Og;

class Notice{
      private $owner;
      private $text;
      private $created;
      
      public function __construct($owner,$text,$created){
            $this->owner = $owner;
            $this->text = $text;
            $this->created = $created;
      }
      
      public function display(){
            echo "<ul>";
            echo "<li>";
            echo "aangemaakt door ".$this->owner;
            echo "</li>";
            echo "<li>";
            echo $this->text;
            echo "</li>";
            echo "<li>";
            echo "aangemaakt op ".$this->created;
            echo "</li>";
            echo "</ul>";
      }
      
      public function equals($notice){
            return ($this->owner === $notice->owner) && ($this->text === $notice->text) && ($this->created === $notice->created);
      }
}