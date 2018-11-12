<?php

class Auth {

    private $salt = 'e3FREc';

    function __construct(){       
    }

    function validatelogin($user, $password){
        global $CMS_Core;


        
        $mixed_pass = md5($password . $this->salt);

        if($stmt = $CMS_Core->Database->prepare("SELECT * FROM users WHERE username = ? AND password = ? ")){
         /*   przekazujemy parametry do zapytania , 'ss'- dwa typy string  , md5 hashowane hasło */
            $stmt->bind_param("ss", $user, $mixed_pass);
            $stmt->execute();
            $stmt->store_result();

           /*  sprawdzenie czy ilosc rekordow jest wieksza od zera */
            if($stmt->num_rows > 0){
                $stmt->close();
                return TRUE;
            } 
            
            else {
                $stmt->close();
                return FALSE;
            }
            
        }
    }

/* sprawdza stan zmiennej sesji , czy została wprowadzona określona wartość */
    function checkLoginStatus(){
        if(isset($_SESSION['loggedin'])){
            return TRUE;
        } else {
            return FALSE;
        }
    }

   /*  jeśli użytkownik nie jest zalogowany to error */
    function checkAuthorization(){
        global $CMS_Core;
        if($this->checkLoginStatus()== false){
            $CMS_Core->Template->error('unathorized');
            exit;
        }
    }


/* wylogowanie, usuwa bierzącą sesje i rozpoczyna nową  */
    function logout(){
        session_destroy();
        session_start();
    }

}