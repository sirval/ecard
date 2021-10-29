<?php
    $existence = explode('/',$_SERVER['PHP_SELF']);
    if(in_array('functions',$existence))
        {
    die ("Direct access not forbidden");
    exit;
}
		
    
function form()
{
  ?>
  <link rel="stylesheet" href="<?php BASE_URL ?>../assets/css/font-awesome.min.css">
        
   <link rel="stylesheet" href="<?php BASE_URL ?>../assets/css/userforms.css">
  
  <?php
}
?>
<script type="text/javascript">
    function val_dept() {
        if (card_form.dept.selectedIndex==0) || (card_form.d_confirm.selectedIndex==0) {
            alert('Please select department and confirm it');
            return false;
        }
        return false;
        if (card_form.dept.selectedIndex <> card.d_confirm.selectedIndex) {
            alert('Confirmation department did not match your initial selection ');
            return false;
        }
        $('#dept')
    }
    
</script>
