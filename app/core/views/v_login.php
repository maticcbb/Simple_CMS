
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

<body class="text-font">
  
  <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->getData('nazwa'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Anuluj">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    <!-- Wyświetlanie alertów -->
                    <?php 
                        $alerts = $this->getAlerts();
                        if($alerts != '') {
                            echo '<ul class="alerts">' . $alerts .'</ul>' ;
                        }
                    ?>

                        <!-----------------EMAIL---------------->
                        <div class="form-group row justify-content-end">
                            <label for="username" class="col-md-4 col-form-label text-right">Nazwa użytkownika</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control float-left" name="username" value="<?php echo $this->getData('input_user') ; ?>" placeholder="Wpisz email">
                            </div>
                        </div>


                        <!-------------------PASSWORD------------>
                        <div class="form-group row justify-content-end">
                            <label for="password" class="col-md-4 col-form-label text-right">Hasło</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="password" value="<?php $this->getData('input_pass'); ?>" placeholder="Wpisz hasło">
                            </div>
                        </div>


                    
                        

                <!-------MODAL BUTTONS----->
                <div class="modal-footer">
                
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Zaloguj">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>