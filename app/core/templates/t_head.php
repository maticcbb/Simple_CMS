<link type="text/css" rel="stylesheet" href="<?php echo APP_RES ?>css/colorbox.css">
<script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.colorbox-min.js"></script>

<script>

$(document).ready(function(){
   $('.edit').each(function(){
       var height = $(this).outerHeight();
       if(height < 25) {height = 25; }
       var width = $(this).parent().width();

       $(this).height(height).width(width);
       $(this).find('.edit_link').height(height-2).width(width-2);
   });

   $('#edit_t').click(function(e){
       e.preventDefault();

       if($(this).text() == 'Podgląd'){
           $(this).text('Edytuj');
       }
       else {
           $(this).text('Podgląd');
       }

        $('.edit_link').toggle();
        $('.edit_type').toggle();
       
   });

   $('.edit_link , edit_type').click(function(e){
       $(this).colorbox({});
   })

});

</script>