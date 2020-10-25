<? 
   
    

    if (isset($_GET['page'])):
        include_once('includes/header.php');
        include_once('pages/' . $_GET['page'] . '.php');      
  
    else:
        include_once('pages/main.php');
    endif;

    // var_dump($_GET['page']);

    include_once('includes/footer.php');

   
    

?>
