<?php


include('./init.php');

if(isset($_POST['username'])){
    /* przypisanie wartości z pola formularza */
    $CMS_Core->Template->setData('input_user' , $_POST['username']);
    $CMS_Core->Template->setData('input_pass' , $_POST['password']);

    // po wpisaniu pustych pól widok logowania jest ponownie uruchamiany 
    if($_POST['username'] == '' || $_POST['password'] == ''){
        $CMS_Core->Template->setAlert('Uzupełnij wymagane pola','error');
        echo '<script>$.colorbox.resize();</script>';
        $CMS_Core->Template->load('core/views/v_login.php');
    } 
    // hasło lub login nie prawidłowe
    else if ($CMS_Core->Auth->validateLogin($CMS_Core->Template->getData('input_user'), $CMS_Core->Template->getData('input_pass')) == false) {
        $CMS_Core->Template->setAlert('Nieprawidłowy login lub hasło' , 'error');
        echo '<script>$.colorbox.resize();</script>';
        $CMS_Core->Template->load('core/views/v_login.php');
    }

    else {
        // prawidłowe zalogowanie 
        $_SESSION['username'] = $CMS_Core->Template->getData('input_user');
        $_SESSION['loggedin'] = true ;
        $CMS_Core->Template->load(APP_PATH . 'core/views/v_logginin.php');
    }

}  

else {
    $CMS_Core->Template->load(APP_PATH . 'core/views/v_login.php');

}
