<?php include 'admin-config.php';?>
<?php
$menu_id = $category_id = $menu_name = $parent_id = $url =  $access_type = $menu_order = $menu_status = $error = "";
if(strlen(Request::post("submit"))){
    $menu_id = Request::post("menu_id");
    $menu_name = Request::post("menu_name");
    $category_id= Request::post("category_id");
    $parent_id= Request::post("parent_id");
    //$image= Request::post("image");
    $url= Request::post("url");
    $access_type =  Request::post("access_type");
    $menu_order= Request::post("menu_order");
    $menu_status = Validation::getStautsTinyVal(Request::post("active"));
    $menuObj = new Menu();
    $menuObj->set("menu_id", $menu_id);
    $menuObj->set("menu_name", $menu_name);
    $menuObj->set("category_id", $category_id);
    $menuObj->set("parent_id", $parent_id);
   // $menuObj->set("image", $image);
    $menuObj->set("url", $url);
    $menuObj->set("access_type", $access_type);
    $menuObj->set("menu_order", $menu_order);
    $menuObj->set("menu_status", $menu_status);
    if($menuObj->save()){
        General::redirectUrl("menu.php");
    }else{
        $error = "Menu Name alreday exist !";
    }
}
?>

<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="menu.php">Manage Menus</a>
                    </li>
                    <li>
                        <a href="#">Add Menu</a>
                    </li>
                </ul>
            </div>

            <div class="row" >
                <div class="box col-md-12" >
                    <div class="box-inner" >
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i> Add Menu</h2>               
                        </div>
                        <div class="box-conten" >     
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $menuObj = new Menu();
                                $menuObj->set("menu_id", $id);
                                $result = $menuObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $menu_id = $row['id'];
                                    $menu_name = $row['name'];
                                    $category_id= $row['category_id'];
                                    $parent_id= $row['parent_id'];
                                    $url = $row['url'];
                                    $access_type=$row['access_type'];
                                    $menu_order= $row['menu_order'];
                                    $menu_status =$row['active'];
                                }
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">                       
                                    <tr><td><label class="control-label" for="selectError">Menu Name</label></td>
                                    <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="menu_name" value="<?php echo $menu_name; ?>"  class="form-control" placeholder="Menu Name" required="required">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Menu Category</label> </td>

                                        <td>
                                                <div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="category_id" class="form-control">
                                                        <option value="">--Select Category--</option>
                                                        <?php
                                                        $menuObj = new MenuCategory();
                                                        $rows = $menuObj->getAll();
                                                        foreach ($rows as $row) {
                                                            ?>
                                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                            </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Parent Id</label> </td>
                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="parent_id" class="form-control" value="<?php echo $parent_id ; ?>" placeholder="Parent Id" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">URL</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="url" class="form-control" value="<?php echo $url ; ?>" placeholder="URL" required="">
                                            </div> 
                                        </td>
                                    </tr>
<!--                                    <tr>
                                        <td><label for="exampleInputFile">image Upload</label></td>
                                        <td><input type="file" name="image" id="exampleInputFile" required="">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Access Type</label> </td>

                                        <td>
                                                <div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="access_type" class="form-control">
                                                        <option value="">--Select Access Type--</option>
                                                        <?php
                                                        $menuObj = new AccessType();
                                                        $rows = $menuObj->getAll();
                                                        foreach ($rows as $row) {
                                                            ?>
                                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['type']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                            </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Menu Order</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="menu_order" value="<?php echo $menu_order ; ?>" class="form-control" placeholder="Menu Order" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="exampleInputFile">Active</label></td>
                                        <td><input type="checkbox" name="active"<?php
                                            if($menu_status == 1)
                                            {
                                                echo "checked";
                                            }
                                            ?>> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center" colspan="2">
                                            <input type="hidden" name="menu_id" value="<?php if ($menu_id) {echo $menu_id;} else {echo "0";} ?>" />
                                            <button type="submit" name="submit" value="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="menu.php"><button type="button" class="btn btn-default">cancel</button></a>
                                        </td>
                                    </tr>
                                </table> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<?php include 'footer.php'; ?>