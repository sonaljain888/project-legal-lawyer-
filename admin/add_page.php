<?php include 'admin-config.php';?>
<?php
$page_id = $category_id = $page_name = $url = $top_description = $bottom_description =
$keyword = $title = $description = $author = $modified = $access_type = $page_status = $error = "";
if(strlen(Request::post("submit"))){
    
    $page_id = Request::post("page_id");
    $category_id= Request::post("category_id");
    $page_name = Request::post("page_name");
    $url= Request::post("url");
    $top_description= Request::post("top_description");
    $bottom_description = Request::post("bottom_description");
    $keyword = Request::post("keyword");
    $title= Request::post("title");
    $description = Request::post("pagedescription");
    $access_type =  Request::post("access_type");
    $page_status = Validation::getStautsTinyVal(Request::post("active"));
    $pageObj = new Page();
    $pageObj->set("page_id", $page_id);
    $pageObj->set("category_id", $category_id);
    $pageObj->set("page_name", $page_name);
    $pageObj->set("url", $url);
    $pageObj->set("top_description", $top_description);
    $pageObj->set("bottom_description", $bottom_description);
    $pageObj->set("keyword", $keyword);
    $pageObj->set("title", $title);
    $pageObj->set("pagedescription", $description);
    $pageObj->set("access_type", $access_type);
    $pageObj->set("page_status", $page_status);
    if($pageObj->save()){
        General::redirectUrl("page.php");
    }else{
        $error = "page Name alreday exist !";
    }
}
?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<script src="ckeditor/ckeditor.js"></script>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="#">Add Page</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i> Add Page </h2>
                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $pageObj = new Page();
                                $pageObj->set("page_id", $id);
                                $result = $pageObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $page_id = $row['page_id'];
                                    $page_name = $row['name'];
                                    $category_id= $row['category_id'];
                                    $url = $row['url'];
                                    $top_description=$row['top_description'];
                                    $bottom_description= $row['bottem_description'];
                                    $keyword= $row['Keyword'];
                                    $title= $row['title'];
                                    $description= $row['description'];
                                    $author= $row['author'];
                                    $modified= $row['modified_by'];
                                    $access_type=$row['access_type'];
                                    $page_status =$row['active'];
                                }
                            }
                            ?>
                            <div class="control-group">
                                <div class="error"><?=  Error::displayError()?></div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
                                        <tr>
                                            <td><label class="control-label" for="selectError">Category </label></td>
                                            <td>
                                                <div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="category_id" class="form-control">
                                                        <option value="">--Select Category--</option>
                                                        <?php
                                                        $pagecategoryObj = new PageCategory();
                                                        $rows = $pagecategoryObj->getAll();
                                                        foreach ($rows as $row) {
                                                            $selected = "";
                                                            if($row['id'] == $category_id){
                                                                $selected = 'selected="selected"';
                                                            }
                                                            ?>
                                                            <option value="<?php echo $row['id'] ?>" <?=$selected?>><?php echo $row['name']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label" for="selectError">Name</label> </td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="page_name" value="<?php echo $page_name; ?>" class="form-control" placeholder="Page Name" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Url</label> </td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="url" value="<?php echo $url; ?>" class="form-control" placeholder="Page Url" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label class="control-label" for="selectError">Top Description</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group" style="width: 100%;">
                                                    <textarea  id="description" name="top_description" ><?php echo $top_description ;?>
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('top_description');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label class="control-label" for="selectError">Bottom Description</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group"  style="width: 100%;">
                                                    <textarea  id="description" name="bottom_description"><?php echo $bottom_description ;?>
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('bottom_description');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label" for="selectError">Keyword</label> </td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="keyword" value="<?php echo $keyword ;?>"  class="form-control" placeholder="Keyword" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Title</label> </td>
                                            <td>
                                                <div class="input-group" >
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Title" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label class="control-label" for="selectError">Description</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group"  style="width: 100%;">
                                                    <textarea  id="description" name="pagedescription"><?= $description; ?>
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('pagedescription');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Access Type</label> </td>
                                            <td>
                                                <div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="access_type" class="form-control">
                                                        <option value="">--Select Access Type--</option>
                                                        <?php
                                                        $accessObj = new AccessType();
                                                        $rows = $accessObj->getAll();
                                                        foreach ($rows as $row) {
                                                            $selected = "";
                                                            if($row['id'] == $access_type){
                                                                $selected = 'selected="selected"';
                                                            }
                                                            ?>
                                                            <option value="<?php echo $row['id'] ?>" <?=$selected?>><?php echo $row['type']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Status</label> </td>
                                            <td>
                                                <div class="input-group" >
                                                    <input type="checkbox" name="active" <?php
                                                    if($page_status == 1)
                                                    {
                                                        echo "checked";
                                                    }
                                                    ?>>
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  colspan="2">
                                                <input type="hidden" name="page_id" value="<?php if ($page_id) {echo $page_id;} else {echo "0";} ?>" />
                                                <button  type="submit" name="submit" value="submit"  class="btn btn-default">Submit</button>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="page.php"><button  type="button" class="btn btn-default">cancel</button></a>
                                            </td>
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


    <hr>



</div><!--/.fluid-container-->

<?php include 'footer.php'; ?>