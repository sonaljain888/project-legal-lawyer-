<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-9 padding-right">					
                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">  
                            <li><a href="">Forums</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" style="height: 100%;">
                        <div class="tab-pane fade active in" id="tshirt" >
                            <table class="documenttbl">
                                <tr class="documentshow"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forms</td></tr>
                                <?php
                                $documentcategoeyObj = new DocumentCategory();
                                $result = $documentcategoeyObj->getForms();
                                foreach ($result as $row){
                                   
                            ?>
                                <tr class="trboder">
                                    <td><img src="<?=SERVER_URL?>/images/folder.jpg" name="" rel="" height="30px" width="30px"/>
                                            <a href="<?=SERVER_URL?>/documentsFile/<?php $row["id"];?>"><?php echo $row["name"];?> </a>
                                        </td>
                                        <?php }?>
                                </tr>
                            </table>  
                            <table class="documenttbl">
                                <tr class="documentshow"><td>&nbsp;&nbsp;&nbsp;&nbsp;Agreements</td></tr>
                                    <tr class="trboder">
                                        
                                          <?php
                                $documentcategoeyObj = new DocumentCategory();
                                $result = $documentcategoeyObj->getAgreements();
                                foreach ($result as $row){
                            ?>
                                <tr class="trboder">
                                    <td><img src="<?=SERVER_URL?>/images/folder.jpg" name="" rel="" height="30px" width="30px"/>
                                            <a href=""><?php echo $row["name"];?> </a>
                                        </td>
                                        <?php }?>
                                    </tr>                              
                            </table> 
                            <table class="documenttbl">
                                <tr class="documentshow"><td>&nbsp;&nbsp;&nbsp;&nbsp;Judgements</td></tr>
                                    <tr class="trboder">
                                          <?php
                                $documentcategoeyObj = new DocumentCategory();
                                $result = $documentcategoeyObj->getJudgements();
                                foreach ($result as $row){
                            ?>
                                <tr class="trboder">
                                    <td><img src="<?=SERVER_URL?>/images/folder.jpg" name="" rel="" height="30px" width="30px"/>
                                            <a href=""><?php echo $row["name"];?> </a>
                                        </td>
                                        <?php }?>
                                    </tr>
                            </table>  


                        </div>
                    </div>
                </div><!--/category-tab-->
                

            </div>
        </div>
    </div>
</section>