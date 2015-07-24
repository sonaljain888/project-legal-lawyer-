<?php include 'admin-config.php';?>
<?php
$menucategory_id = $menucategory_name = $menucategory_status = $error = "";
if(strlen(Request::post("submit"))){
    $menucategory_id = Request::post("menucategory_id");
    $menucategory_name = Request::post("menucategory_name");
    $menucategory_status = Validation::getStautsTinyVal(Request::post("active"));
    $menucategoryObj = new MenuCategory();
    $menucategoryObj->set("menucategory_id", $menucategory_id);
    $menucategoryObj->set("menucategory_name", $menucategory_name);
    $menucategoryObj->set("menucategory_status", $menucategory_status);
    if($menucategoryObj->save()){
        General::redirectUrl("menu_category.php");
    }else{
        $error = "Menu Category Name alreday exist !";
    }
}
?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="menu_category.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Add/Edit menucategory</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i>Add/Edit Menu Category</h2>


                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $menucategoryObj = new MenuCategory();
                                $menucategoryObj->set("menucategory_id", $id);
                                $result = $menucategoryObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $menucategory_id = $row['id'];
                                    $menucategory_name = $row['name'];
                                    $menucategory_status =$row['active'];
                                }
                            }
                            ?>
                            <form action="" method="POST" name="menucategory_frm" id="menucategory_frm">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <tr>
                                        <td><label class="control-label" for="selectError">Menu Category</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="menucategory_name"  value="<?php echo $menucategory_name;?>" class="form-control" placeholder="menucategory" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                        if ($menucategory_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2"> 
                                            <input type="hidden" name="menucategory_id" value="<?php if($menucategory_id){ echo $menucategory_id; } else {echo "0";}  ?>" />
                                            <button value="submit"  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="menu_category.php">
                                                <button  type="button"  class="btn btn-default">cancel</button>
                                            </a>
                                        </td>
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

</div><!--/.fluid-container-->


<?php include 'footer.php'; ?>