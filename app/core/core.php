<?php

class CMS_Core {

    public $Template, $Auth, $Database;

    function __construct($server,$user,$password,$db){

        /* łączenie z bazą oraz kodowanie znaków  */
        $this->Database = new mysqli($server, $user, $password, $db);
        $this->Database->set_charset('utf8');

       /*  obiekt template */
       include(APP_PATH . "core/models/m_template.php");
       $this->Template =  new Template();
       $this->Template->setAlertTypes(array('success , warning','error'));

       /* obiekt autoryzacji */
        include(APP_PATH . "core/models/m_auth.php");
        $this->Auth = new Auth();

        /* start sesji */
        session_start();

    }
    /* zamknięcie połączenie z bazą */
    function __destruct(){
        $this->Database->close();
    }

    function head(){
        if($this->Auth->checkLoginStatus()) {
            include(APP_PATH . "core/templates/t_head.php");
        }
        if(isset($_GET['login']) && $this->Auth->checkLoginStatus() == FALSE){
            include(APP_PATH . "core/templates/t_login.php");
        }
    }

    function toolbar() {
        if ($this->Auth->checkLoginStatus()) {
            include(APP_PATH . "core/templates/t_toolbar.php");
        }
    }

    function login_link() {
        if ($this->Auth->checkLoginStatus()) {
            echo '<a href="' . SITE_PATH . 'app/logout.php" class="btn btn-success btn-large">Wyloguj</a>';
        }
        else {
            echo '<a href="?login" class="btn btn-success btn-large">Zaloguj</a>';
        }

    }

}