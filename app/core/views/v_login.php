<script>
    $(document).ready(function(){

        $('#login-form').on('submit' , function(e){

            e.preventDefault();

            var username = $('input#username').val();
            var password = $('input#password').val();

            var dataString = 'username=' + username + '&password=' + password;
            
$.ajax({
    type: "POST",
    url: "<?php echo SITE_PATH; ?>app/login.php",
    data: dataString,
    cache: false,
    success: function(html){
        $('#cboxLoadedContent').html(html);
    }



            });

        });

    });
    </script>
  
       
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->getData('nazwa'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Anuluj">
          <a href="#" id="cancel" class="cancel"><span aria-hidden="true">&times;</span></a>
        </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="login-form">
                    <!-- Wyświetlanie alertów -->
                    <div style="clear: both"></div>
                    <div>
                    <?php 
                        $alerts = $this->getAlerts();
                        if($alerts != '') {
                            echo '<ul class="alerts">' . $alerts .'</ul>' ;
                        }
                    ?>
                        </div>
                        <!-----------------LOGIN---------------->
                        <div class="form-group row justify-content-end">
                            <label for="username" id="username" class="col-md-4 col-form-label text-right">Nazwa użytkownika</label>
                            <div class="col-md-5">
                                <input type="text"  class="form-control float-left" id="username" name="username" value="<?php echo $this->getData('input_user') ; ?>" placeholder="Wpisz nazwę użytkownika">
                            </div>
                        </div>


                        <!-------------------PASSWORD------------>
                        <div class="form-group row justify-content-end">
                            <label for="password" class="col-md-4 col-form-label text-right">Hasło</label>
                            <div class="col-md-5">
                                <input type="password" id="password" class="form-control" name="password" value="<?php $this->getData('input_pass'); ?>" placeholder="Wpisz hasło">
                            </div>
                        


                    
                        

                <!-------MODAL BUTTONS----->
                <div class="modal-footer">
                
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
                    <input type="submit"  name="submit" class="submit btn btn-primary" value="Zaloguj">
                </div>
                </form>
            </div>
        </div>
   
