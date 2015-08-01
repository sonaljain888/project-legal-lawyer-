<?php 
if(strlen(Request::post("submit"))){
    $name = Request::post("name");
    $city= Request::post("city");
    $location= Request::post("location");
    $website= Request::post("website");
    $email= Request::post("email");
    $phone= Request::post("phone");
    $specialization= Request::post("specialization");
    $description= Request::post("description");
    $active = Validation::getStautsTinyVal(Request::post("active"));
    $companyObj = new Company();
    $companyObj->set("name", $name);
    $companyObj->set("city",$city);
    $companyObj->set("location",$location);
    $companyObj->set("website",$website);
    $companyObj->set("email",$email);
    $companyObj->set("phone",$phone);
    $companyObj->set("specialization",$specialization);
    $companyObj->set("description",$description);
    $companyObj->set("active", $active);
    if($companyObj->save()){
        General::redirectUrl("");
    }
}

?>
<section class="login-form">
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab" ><!--category-tab-->
                    
                    <div class="col-sm-9 padding-right"style="margin-top: 1%;">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs" style="background: #40403E;">
                                <li class="active">
                                    <a href="" data-toggle="tab">Add Company</a>
                                </li>
                            </ul>
                        </div>
                        <form id="form_background" action="" method="POST">
                            <table height="680" align="center" width="80%">
                                
                                <tr>
                                    <td id="label">Company Name:</td>
                                    <td><input id="text" type="text" name="name" placeholder="Name"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">City:</td>
                                    <td><input type="text" name="city" placeholder="city"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Location:</td>
                                    <td><input type="text" name="location" placeholder="Location"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Website:</td>
                                    <td><input id="text"  name="website" placeholder="Website"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Email:</td>
                                    <td><input type="text" name="email" placeholder="City Name"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Phone No:</td>
                                    <td><input type="text" name="phone" placeholder="Address"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Specialization:</td>
                                    <td><input id="text"  name="specialization" type="text" placeholder="Specialization"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Description:</td>
                                    <td><input id="text"  name="description" type="text" placeholder="Practicing Courts"/></td>
                                </tr>
                                <tr>
                                        <td id="label">Active:</td>
                                        <td><input type="checkbox" name="active" <?php
                                        if ($country_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                <tr>
                                    <td colspan="4" align="center"><input type="submit" value="Submit" name="submit" id="submit-btn" />&nbsp;&nbsp;&nbsp;<a href="">
                                            <input type="button" value="Cancel" id="cancel-btn" /></a></td>
                                </tr>
                            </table>
                        </form>	
                    </div><!--/category-tab-->
                </div>
            </div><!--/category-tab-->
        </div>
    </div>
</div>
</section>
<!--/Footer-->
