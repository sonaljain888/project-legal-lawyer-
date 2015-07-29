<?php include 'admin-config.php'; ?>
<?php include 'header.php';?>
<?php
$topic_id = $topic = $active = $error = "";
if(strlen(Request::post("submit"))){
    $topic_id = Request::post("topic_id");
    $topic = Request::post("topic");
    $active = Validation::getStautsTinyVal(Request::post("active"));
    $topicObj = new Topic();
    $topicObj->set("topic_id", $topic_id);
    $topicObj->set("topic", $topic);
    $topicObj->set("active", $active);
    if($topicObj->save()){
        General::redirectUrl("topic.php");
    }else{
        $error = "Page Category Name alreday exist !";
    }
}
?>

<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
       <?php include 'sitebar.php';?>
        <!--/span-->
        <!-- left menu ends -->

       

        <div id="content" class="col-lg-10 col-sm-10">

            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Topic</h2>

                
            </div>
            <div class="box-content">
                 <?php
                            $topic_id = Request::get("topic_id");
                            if(is_numeric($topic_id) && $topic_id > 0){
                                $topicObj = new Topic();
                                $topicObj->set("topic_id", $topic_id);
                                $result = $topicObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $topic_id = $row['topic_id'];
                                    $topic = $row['topic'];
                                    $active =$row['active'];
                                }
                            }
                            ?>
                            <div class="error"><?=  Error::displayError()?></div>
                 <form action="" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError">Topic</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="topic" class="form-control" placeholder="Topic" value="<?php echo $topic;?>" required="">
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                             <td><input type="checkbox" name="active" <?php
                                        if ($active == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="topic_id" value="<?php if($topic_id){ echo $topic_id; } else {echo "0";}  ?>" />
                            <td  colspan="2"> <button  type="submit" name="submit" value="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="topic.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
                        </tr>
                    </table>
                
                    </form>
                     </div>
               </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
   
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
   
<?php include 'footer.php';?>

