<?php

class CMS_Core {
    /* podstawowe obiekty */
    public $Template, $Auth, $Database , $Cms;

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


        /* obiekt Cms */
        include(APP_PATH . "cms/models/m_cms.php");
        $this->Cms = new Cms();

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
        /* jeżeli istnieje zmienna login w url pokaż modal logowania */
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
            echo '<a id="log-badge" href="' . SITE_PATH . 'app/logout.php" class="btn btn-success btn-large">Wyloguj</a>';
        }
        else {
           /*  zmienia zmienna login w url */
            echo '<a id="log-badge"  href="?login" class="badge badge-info border border border-dark">Zaloguj</a>';
        }

    }

}