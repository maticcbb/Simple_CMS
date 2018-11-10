<?php

include('includes/database.php');
include('includes/init.php');

if(isset($_POST['submit'])){
    /* przypisanie wartości z pola formularza */
    $Template->setData('input_user' , $_POST['username']);
    $Template->setData('input_pass' , $_POST['password']);

    // po wpisaniu pustych pól widok logowania jest ponownie uruchamiany 
    if($_POST['username'] == '' || $_POST['password'] == ''){
        $Template->setAlert('Uzupełnij wymagane pola','error');
        $Template->load('views/v_login.php');
    } 
    // hasło lub login nie prawidłowe
    else if ($Auth->validateLogin($Template->getData('input_user'), $Template->getData('input_pass')) == false) {
        $Template->setAlert('Nieprawidłowy login lub hasło' , 'error');
        $Template->load('views/v_login.php');
    }

    else {
        // prawidłowe zalogowanie 
        $_SESSION['username'] = $Template->getData('input_user');
        $_SESSION['loggedin'] = true ;
        $Template->setAlert('Witaj' . $Template->getData('input_user'));
        $Template->redirect('users.php');
    }

}  

else {
    $Template->load('views/v_login.php');

}
