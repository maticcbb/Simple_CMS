<?php


class Template { 

    private $data;
    private $alertTypes;

    function __construct(){      
    }

    function load($url){
        include($url);
    }

    function redirect($url){
        header("Location: $url");
    }

    function setData($name,$value){
        $this->data[$name] = htmlentities($value, ENT_QUOTES);
    }

    function setAlertTypes($types){
        $this->setAlertTypes = $types;

    }

    function setAlert($value, $type = null){
        if($type == ''){
            $type = $this->$alertTypes[0];
        }
        $_SESSION[$type][] = $value;
    }

    function getAlerts(){
        $data = '';
        foreach ($this->setAlertTypes as $alert) {
            if(isset($_SESSION[$alert])){
                foreach ($_SESSION[$alert] as $value) {
                    $data .= '<li class="'. $alert .'">' . $value . '</li>';
            
                };
                unset($_SESSION[$alert]); 

            }
        }

        return $data;
    }

    function getData($name){
        
        if(isset($this->data[$name])){
            return $this->data[$name];
        } 

        else {            
            return '';
        }
    }
}
?>