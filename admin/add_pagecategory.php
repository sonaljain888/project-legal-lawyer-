<?php include 'admin-config.php';?>
<?php
$pagecategory_id = $pagecategory_name = $pagecategory_url = $pagecategory_status = $error = "";
if(strlen(Request::post("submit"))){
    $pagecategory_id = Request::post("pagecategory_id");
    $pagecategory_name = Request::post("pagecategory_name");
    $pagecategory_url = Request::post("pagecategory_url");
    $pagecategory_status = Validation::getStautsTinyVal(Request::post("active"));
    $pagecategoryObj = new pagecategory();
    $pagecategoryObj->set("pagecategory_id", $pagecategory_id);
    $pagecategoryObj->set("pagecategory_name", $pagecategory_name);
    $pagecategoryObj->set("pagecategory_url", $pagecategory_url);
    $pagecategoryObj->set("pagecategory_status", $pagecategory_status);
    if($pagecategoryObj->save()){
        General::redirectUrl("page_category.php");
    }else{
        $error = "Page Category Name alreday exist !";
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
                        <a href="page_category.php">Home</a>
                    </li>
                    <li>
                        Add / Edit Page Category
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i> Add / Edit Page Category</h2>


                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $pagecategoryObj = new PageCategory();
                                $pagecategoryObj->set("pagecategory_id", $id);
                                $result = $pagecategoryObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $pagecategory_id = $row['id'];
                                    $pagecategory_name = $row['name'];
                                    $pagecategory_url = $row['url'];
                                    $pagecategory_status =$row['active'];
                                }
                            }
                            ?>
                            <div class="error"><?=  Error::displayError()?></div>
                            <form action="" method="POST" name="pagecategory_frm" id="pagecategory_frm">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <tr>
                                        <td><label class="control-label" for="selectError">Name</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="pagecategory_name"  value="<?php echo $pagecategory_name;?>" class="form-control" placeholder="pagecategory" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">URL</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="pagecategory_url"  value="<?php echo $pagecategory_url;?>" class="form-control" placeholder="pagecategory" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                        if ($pagecategory_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2"> 
                                            <input type="hidden" name="pagecategory_id" value="<?php if($pagecategory_id){ echo $pagecategory_id; } else {echo "0";}  ?>" />
                                            <button value="submit"  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="page_category.php">
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