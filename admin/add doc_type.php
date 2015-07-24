
<?php include 'admin-config.php'; ?>
<?php
$id = $name = $active = $error = "";
if (strlen(Request::post("submit"))) {
    $id = Request::post("id");
    $name = Request::post("name");
    $active = Validation::getStautsTinyVal(Request::post("active"));
    $TypeOfDocumentObj= new TypeOfDocument();
    $TypeOfDocumentObj->set("id",$id);
    $TypeOfDocumentObj->set("name", $name);
    $TypeOfDocumentObj->set("active", $active);
    if($TypeOfDocumentObj->save())
    {
        General::redirectUrl("type_document.php");
    }
 else {
      $error = " Document Name alreday exist !";
        
    }
    
}
?>
 <?php include 'header.php';?>
 <?php include 'sitebar.php';?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
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
                <h2><i class="glyphicon glyphicon-edit"></i>Type Of Document Form</h2>
                
            </div>
            <div class="box-content">
                  <?php
                                    $id = Request::get("id");
                                    if (is_numeric($id) && $id > 0) {
                                      $TypeOfDocumentObj = new TypeOfDocument();
                                   $TypeOfDocumentObj->set("id", $id);
                                        $result = $TypeOfDocumentObj->getName();
                                        if (count($result)) {
                                            $row = $result[0];
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $active = $row['active'];
                                        }
                                    }
                                    ?>
                <form action="" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError">Type Of Document</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="name"  class="form-control" placeholder="Type Of Document" required="" value="<?php echo $name;?>">
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                           <td><input type="checkbox" name="active"<?php
                                            if($active== 1)
                                            {
                                                echo "checked";
                                            }
                                            ?>></td>
                                            
                        </tr>
                        <tr>
                            <input type="hidden" name="id" value="<?php if ($id) {echo $id;} else {echo "0";} ?>" />
                            <td  colspan="2"> <button  type="submit" name="submit" value="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="type_document.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
                        </tr>
                    </table>
                
                    </form>
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
</div>

