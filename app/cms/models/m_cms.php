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
        return strtolower($id);
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
            $edit_type = '<a class="edit_type badge badge-dark" href=" '. SITE_PATH . 'app/cms/edit.php?id=' . $id . '&type=' . $type . '">' . $type . '</a>';
            $edit_link = '<a class="edit_link" href="' . SITE_PATH . 'app/cms/edit.php?id=' . $id . '&type=' .
            $type . '">Edytuj blok</a>';
            $edit_end = '</div>';

            echo $edit_start . $edit_type;
            echo $edit_link . $content . $edit_end;
        }

        else {
            echo $content;
        }
    }

    function generate_field($type, $content){
        if($type == 'wysiwyg'){
            return '<textarea name="field" id="field" calss="wysiwyg">' . $content . '</textarea>';
        }   
        else if ($type == 'textarea') {
            return '<textarea name="field" id="field" calss="textarea">' . $content . '</textarea>';
        }
        else if ($type == 'oneline') {
            return '<input name="field" id="field" calss="oneline" value="' . $content . '">';
            }
        else {
                $error = '<p>Użyj właściwego typu treści</p>';
                return $error;
            }
    }

    function load_block($id){
        if($stmt = $this->CMS->Database->prepare("SELECT content FROM content WHERE id = ?")){
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $stmt->store_result();

            if($stmt->num_rows != false){
                $stmt->bind_param($content);
                $stmt->fetch();
                $stmt->close();
                return $content;
            }
            else {
                $stmt->close();
                return false;
            }
        }
    }

    function create_block($id){
        if ($stmt = $this->CMS->Database->prepare("INSERT INTO content (id) VALUES (?)")) {
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $stmt->close();
        }
    }

    

}