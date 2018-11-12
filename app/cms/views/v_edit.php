<div class='form-wrapper'>

    <form action="" method="post" id="edit" class="well" >
        <h3>Edycja bloku:<span><?php echo $this->getData('block_id'); ?></span></h2>
        <?php echo $this->getData('cms_field'); ?>
        <input type="hidden" id="type"  value="<?php echo $this->getData('block_type'); ?><" />
        <hr />
        <button type="submit" name="name" class="btn btn-primary">Wyślij</button>
        <a href="#" id="cancel" class="btn">Wróć</a> 
        
        
        
    </form>


</div>