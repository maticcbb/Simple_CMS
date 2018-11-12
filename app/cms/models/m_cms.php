<?php

class Cms {

    private $content_types = array('wysiwyg', 'textarea' , 'oneline');
    private $CMS;

    function __construct(){
        global $CMS;
        /* referemcje */
        $this->CMS =& $CMS_Core;
    }

}