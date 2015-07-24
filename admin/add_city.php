
<?php include 'admin-config.php'; ?>
<?php
$city_id = $state_id = $city_name = $city_status = $error = "";
if (strlen(Request::post("submit"))) {
    $city_id = Request::post("city_id");
    $state_id = Request::post("state_id");
    $city_name = Request::post("city_name");
    $city_status = Validation::getStautsTinyVal(Request::post("active"));
    $cityObj= new City();
    $cityObj->set("city_id",$city_id);
    $cityObj->set("state_id", $state_id);
    $cityObj->set("city_name", $city_name);
    $cityObj->set("city_status", $city_status);
    if($cityObj->save())
    {
        General::redirectUrl("city.php");
    }
 else {
      $error = "City Name alreday exist !";
        
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
                            <h2><i class="glyphicon glyphicon-edit"></i> Form City</h2>


                        </div>
                        <div class="box-content">
                            <div class="control-group">
                                <form action="#" method="POST">
                                    <table style="margin-left: 20%;" width="100%" >

                                        <tr>
                                            <td>
                                                <label class="control-label" for="selectError">State</label>
                                            </td>
                                            <td>
                                                <div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="state_id" class="form-control">
                                                        <option value="">--Select State--</option>
                                                        <?php
                                                        $countryObj = new State();
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
                                        $cityObj = new City();
                                        $cityObj->set("city_id", $id);
                                        $result = $cityObj->getName();
                                        if (count($result)) {
                                            $row = $result[0];
                                            $city_id = $row['id'];
                                            $state_id = $row['state_id'];
                                            $city_name = $row['name'];
                                            $city_status = $row['active'];
                                        }
                                    }
                                    ?>
                                        <tr>
                                            <td><label class="control-label" for="selectError">City</label></td>
                                            <td><div class="input-group" style="width: 50%">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="city_name" value="<?php echo $city_name ;?>" class="form-control" placeholder="City" required="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label" for="selectError">Active</label></td>
                                            <td><input type="checkbox" name="active"<?php
                                            if($city_status == 1)
                                            {
                                                echo "checked";
                                            }
                                            ?>></td>
                                        </tr>
                                        <tr>
                                             <input type="hidden" name="city_id" value="<?php if ($city_id) {echo $city_id;} else {echo "0";} ?>" />
                                            <td  colspan="2"><button  type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                                &nbsp;&nbsp;&nbsp;<a href="city.php">
                                                <button  type="button" class="btn btn-default">cancel</button></a></td>
                                        </tr>
                                    </table>

                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#content.col-md-0-->
    </div>
    <hr>
</div><!--/.fluid-container-->
<?php include 'footer.php'; ?>



