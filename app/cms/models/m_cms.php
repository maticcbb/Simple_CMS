<?php

class Cms {

    private $content_types = array('wysiwyg', 'textarea' , 'oneline');
    private $CMS;

    function __construct(){
        global $CMS_Core;
        /* referemcje */
        $this->CMS =& $CMS_Core;
    }
    /* czyści identyfikatory */
    function clean_block_id($id){
        /* usuwa spacje w id */
        $id = str_replace('', '_', $id);
        /* myślniki spacje w id */
        $id = str_replace('-', '_', $id);
        /* dozwolone znaki w id*/
        $id = preg_replace('/[^a-zA-Z0-9_]/','' , $id);
    }
            /* wyświetla zawartość */
    function display_block($id, $type = 'wysiwyg'){
        $id = $this->clean_block_id($id);

        $type = strtolower(htmlentities($type, ENT_QUOTES));
        if(in_array($type, $this->content_types) == false){
            echo "<script>alert('Nieprawidłowy typ zawartości')</script>";
            return;
        }

        $content = $this->load_block($id);
        if($content === false){
            $this->create_block($id);
            $content = '';
        }

        if($this->CMS->Auth->checkLoginStatus()){
            /* linki do edycji istniejących elementów na stronie  */
            $edit_start = '<div class="edit">';
            $edit_type = '<a class="edit_type badge badge-dark" href=" '. SITE_PATH . 'app/cms.edit.php?id=' . $id . '&type=' . 
            $type . '">' . $type . '</a>';
            $edit_link = '<a class="edit_link" href="' . SITE_PATH . 'app/cms/edit.php' . $id . '&type=' .
            $type . '">Edytuj blok</a>';
            $edit_end = '</div>';

            echo $edit_start . $edit_type;
            echo $edit_link . $content . $edit_end;
        }

        else {
            echo $content;
        }
    }

    function load_block($id){

    }

    function create_block($id){

    }

    

}