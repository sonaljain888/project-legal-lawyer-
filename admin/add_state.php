<?php include 'admin-config.php';?>
<?php
$state_id = $country_id = $state_name = $state_status = $error = "";
if(strlen(Request::post("submit"))){
    $state_id = Request::post("state_id");
    $country_id=  Request::post("country_id");
    $state_name = Request::post("state_name");
    $state_status = Validation::getStautsTinyVal(Request::post("active"));
    $stateObj = new State();
    $stateObj->set("state_id", $state_id);
    $stateObj->set("country_id", $country_id);
    $stateObj->set("state_name", $state_name);
    $stateObj->set("state_status", $state_status);
    if($stateObj->save()){
        General::redirectUrl("state.php");
    }else{
        $error = "State Name alreday exist !";
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms</a></li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i> Form State</h2>
                        </div>
                        <div class="box-content">

                            <form action="#" method="POST">
                                <table style="margin-left: 20%;" width="100%" >
                                    <tr>
                                        <td><label class="control-label" for="selectError">Country</label></td>
                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>

                                                <select required="" name="country_id"  class="form-control">
                                                    <option value="">--Select Country--</option>
                                                    <?php
                                                    $countryObj = new Country();
                                                    $rows = $countryObj->getAll();
                                                    foreach ($rows as $row) {
                                                        ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $id = Request::get("id");
                                    if (is_numeric($id) && $id > 0) {
                                        $stateObj = new State();
                                        $stateObj->set("state_id", $id);
                                        $result = $stateObj->getName();
                                        if (count($result)) {
                                            $row = $result[0];
                                            $state_id = $row['id'];
                                            $country_id=$row['country_id'];
                                            $state_name = $row['name'];
                                            $state_status = $row['active'];
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td><label class="control-label" for="selectError">State</label></td>
                                        <td><div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="state_name" value="<?php echo $state_name; ?>" class="form-control" placeholder="State" required="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                    if ($state_status == 1) {
                                        echo "checked";
                                    }
                                    ?>></td>
                                    </tr>
                                    <tr>
                                    <input type="hidden" name="state_id" value="<?php if ($state_id) {echo $state_id;} else {echo "0";} ?>" />
                                    <td  colspan="2"> <button  type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                        &nbsp;&nbsp;&nbsp;<a href="state.php">
                                            <button  type="button"  class="btn btn-default">cancel</button></a></td>
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
    <hr>

</div>
<?php include 'footer.php'; ?>
