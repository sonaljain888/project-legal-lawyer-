<?php
    $file_name = implode("_", array_filter( $urlArray, 
                        function($arrayEntry) { 
                            return !is_numeric($arrayEntry);
                        }
                      )).'.php';
    //echo USER_TEMPLATE_FOLDER."/".$file_name; exit;
    if(!file_exists(USER_TEMPLATE_FOLDER."/".$file_name)){
        Error::notFoundPage();
    }
include 'header.php';
?>
<div class="container">
    <?php include USER_TEMPLATE_FOLDER."/".$file_name; ?>
</div>

<?php include 'footer.php';

?>
