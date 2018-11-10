<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/views/font-awesome.css">
    <link rel="stylesheet" href="/views/bootstrap.min.css">
    <link rel="stylesheet" href="/views/style.css">
</head>

<body>
<h1>Użytkownicy</h1>
  
 
                    <?php 
                        $alerts = $this->getAlerts();
                        if($alerts != '') {
                            echo '<ul class="alerts">' . $alerts .'</ul>' ;
                        }
                    ?>

                <a href="logout.php">Wyloguj</a>    

</body>
</html>