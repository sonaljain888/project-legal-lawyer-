

<script type='text/javascript'>
    $(function(){
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>

<!--/header-->
<?php include 'header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">


                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="" style="padding-left: 15%;"><a href="#tshirt" data-toggle="tab"></a></li>								
                        </ul>
                    </div>
                    <div class="tab-content" style="height: 100%;">
                        <div class="tab-pane fade active in" id="tshirt" >
                            <table style="margin-left: 10%;float:left;">
                                <?php
                                $documentobj = new Document();
                                $results = $documentobj->getAllFile();
                                foreach($results as $row){ 
                                    print_r($row);                                    exit();  
                                ?>
                                <tr>
                                    <td><img src="images/home/folder.png" name="" rel=""/>
                                        <a href=""><?php echo $row["heading"];?></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>  

                            <table id="li-margin-left">

                                <tr>
                                    <td><img src="" name="" rel=""/>
                                        <a href=""></a>
                                    </td>
                                </tr>

                            </table> 

                            <table id="li-margin-left">

                                <tr>
                                    <td><img src="" name="" rel=""/>
                                        <a href=""></a>
                                    </td>
                                </tr>

                            </table>  
                            <div class='popup'>
                                <div class="cnt223">
                                    <a href="<?= SERVER_URL ?>/document" ><img src='' alt='quit' id="docimage" /></a> 
                                    <table id="blog-tbl">



                                        <tr>
                                            <td><img src="images/home/file.png"/>
                                                <a href="download-docunent.php?id="></a
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/category-tab-->






                <?php include 'recommended.php'; ?>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<!--/Footer-->
