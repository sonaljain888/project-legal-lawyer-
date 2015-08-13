<?php
    $file_name = implode("_", array_filter( $urlArray, 
                        function($arrayEntry) { 
                            return !is_numeric($arrayEntry);
                        }
                      )).'.php';
    //echo USER_TEMPLATE_FOLDER."/".$file_name; exit;
                      
    if(count($pageDetails[0]) == 0){
        
        Error::notFoundPage();
    }
  //print_r($pageDetails);
include 'header.php';
?>
<div class="container">
    <?php if(file_exists(USER_TEMPLATE_FOLDER."/".$file_name)){
        include USER_TEMPLATE_FOLDER."/".$file_name;
    }elseif($pageDetails[0]['file_name'] != NULL && file_exists(USER_TEMPLATE_FOLDER."/".$pageDetails[0]['file_name'] )){       
        include USER_TEMPLATE_FOLDER."/".$pageDetails[0]['file_name'];
    }  else {
        echo $pageDetails[0]['top_description'];
        echo $pageDetails[0]['bottem_description'];
    } ?>
</div>

<?php include 'footer.php';

?>
