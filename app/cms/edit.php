<?php
include("../init.php");
$CMS_Core->Auth->checkAuthorization();
if(isset($_POST['field'])){
    
}
else {
   
    if(isset($_GET['id']) == false || isset($_GET['type']) == false){
        /*  jeśli w  adresie nie występują dane zmienne , wyświetl error */
        $CMS_Core->Template->error();
        exit;
    }

    $id = $CMS_Core->Cms->clean_block_id($_GET['id']);
    $type = htmlentities($_GET['type'], ENT_QUOTES);

    $content = $CMS_Core->Cms->load_block($id);

    $CMS_Core->Template->setData('block' , $id);
    $CMS_Core->Template->setData('block_type' , $type);
    $CMS_Core->Template->setData('cms_field' , $CMS_Core->Cms->generate_field($type,$content), false);
    
    $CMS_Core->Template->load(APP_PATH . 'cms/views/v_edit.php');
}