<?php include 'admin-config.php';?>
<?php
$blogcategory_id = $blogcategory_name = $blogcategory_status = $error = "";
if(strlen(Request::post("submit"))){
    $blogcategory_id = Request::post("blogcategory_id");
    $blogcategory_name = Request::post("blogcategory_name");
    $blogcategory_status = Validation::getStautsTinyVal(Request::post("active"));
    $blogcategoryObj = new BlogCategory();
    $blogcategoryObj->set("blogcategory_id", $blogcategory_id);
    $blogcategoryObj->set("blogcategory_name", $blogcategory_name);
    $blogcategoryObj->set("blogcategory_status", $blogcategory_status);
    if($blogcategoryObj->save()){
        General::redirectUrl("blog_category.php");
    }else{
        $error = "blog Category Name alreday exist !";
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
                        <a href="blog_category.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Add/Edit blogcategory</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i>Add/Edit blog Category</h2>


                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $blogcategoryObj = new BlogCategory();
                                $blogcategoryObj->set("blogcategory_id", $id);
                                $result = $blogcategoryObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $blogcategory_id = $row['id'];
                                    $blogcategory_name = $row['name'];
                                    $blogcategory_status =$row['active'];
                                }
                            }
                            ?>
                            <form action="" method="POST" name="blogcategory_frm" id="blogcategory_frm">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <tr>
                                        <td><label class="control-label" for="selectError">Blog Category</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="blogcategory_name"  value="<?php echo $blogcategory_name;?>" class="form-control" placeholder="blogcategory" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                        if ($blogcategory_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2"> 
                                            <input type="hidden" name="blogcategory_id" value="<?php if($blogcategory_id){ echo $blogcategory_id; } else {echo "0";}  ?>" />
                                            <button value="submit"  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="blog_category.php">
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