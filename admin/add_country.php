<?php include 'admin-config.php';?>
<?php
$country_id = $country_name = $country_status = $error = "";
if(strlen(Request::post("submit"))){
    $country_id = Request::post("country_id");
    $country_name = Request::post("country_name");
    $country_status = Validation::getStautsTinyVal(Request::post("active"));
    $countryObj = new Country();
    $countryObj->set("country_id", $country_id);
    $countryObj->set("country_name", $country_name);
    $countryObj->set("country_status", $country_status);
    if($countryObj->save()){
        General::redirectUrl("country.php");
    }else{
        $error = "Country Name alreday exist !";
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
                        <a href="country.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Add/Edit Country</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i>Add/Edit Country</h2>


                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $countryObj = new Country();
                                $countryObj->set("country_id", $id);
                                $result = $countryObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $country_id = $row['id'];
                                    $country_name = $row['name'];
                                    $country_status =$row['active'];
                                }
                            }
                            ?>
                            <form action="" method="POST" name="country_frm" id="country_frm">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <tr>
                                        <td><label class="control-label" for="selectError">Country</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="country_name"  value="<?php echo $country_name;?>" class="form-control" placeholder="Country" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                        if ($country_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2"> 
                                            <input type="hidden" name="country_id" value="<?php if($country_id){ echo $country_id; } else {echo "0";}  ?>" />
                                            <button value="submit"  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="country.php">
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