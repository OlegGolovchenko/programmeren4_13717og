<?php
namespace Programmeren4\Les10\Controller;

class Home extends \ModernWays\Mvc\Controller{
    public function index(){
        return $this->view('Home','Index', null);
    }
    
    public function postcode(){
        $content = file_get_contents('PostcodesUtf8.csv');
        $lines = explode("\n", $content);
        $model = new \Programmeren4\Les10\Model\Postcode();
        $codes = array();
        foreach ($lines as $line) {
            $codes[] =  explode('|', $line);
        }
        $model->setList($codes);
        return $this->view('Home','Postcode',$model);
    }
}
?>