<?php
$email = $name = $mobile = $website = $address = $city = $locality = $exp = $education = $specialization = $court = "";
?>
<section class="login-form">
    <div class="row error" align="center"><?php echo Error::displayError();?></div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1 ">
         
            <h2>Login </h2>
                    <form action="" method="post" >

                        <input type="hidden" name="action" value="login">
                        <input type="hidden" name="type" value="user">
                        <input type="email" name="email" placeholder="Email Address" required=""/>

                        <input type="password" name="password" placeholder="Password" required="" />
                        <span>
                            <input type="checkbox" class="checkbox" required="required"> 
                            Keep me signed in
                        </span>
                        <button type="submit" name="submit" class="btn btn-default" >Login</button>
                    </form>

        </div>
        <div class="col-sm-1">
            <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-6">
           <h2>Registration </h2>
           <?php
           if(Request::post("action") == "registration"){
               $name = Request::post("name");
               $email = Request::post("email");
               $mobile = Request::post("mobile");
               $website = Request::post("website");
               $add = Request::post("add");
               $city = Request::post("city");
               $location = Request::post("location");
               $exp = Request::post("experience");
               $education = Request::post("education");
               $specialization = Request::post("specialization");
               $court = Request::post("pra_court");
           }
           ?>
            <form id="form_background" action="" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="action" value="registration">
                <input type="hidden" name="type" value="user">
                                    <table  align="center" width="100%">
                                        <tr>
                                            <td id="label">Name:</td>
                                            <td><input id="name" type="text" name="name" placeholder="Name" required="" value="<?=$name?>" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Email:</td>
                                            <td><input id="email" type="email" name="email" placeholder="Email"required="" value="<?=$email?>"/></td>
                                        </tr>
                                        
                                        <tr>
                                            <td id="label">Password:</td>
                                            <td><input id="password" type="password" name="password" placeholder="Password" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Confirm Password:</td>
                                            <td><input id="r_password" type="password"  name="r_password" placeholder="Confirm Password"required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Mobile No:</td>
                                            <td><input id="mobile" type="text" name="mobile" placeholder="Mobile No" required="" value="<?=$mobile?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Website :</td>
                                            <td><input id="website" type="url" name="website" placeholder="Website" required="" value="<?=$website?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Address:</td>
                                            <td><input id="add" type="text" name="add" placeholder="Address" required="" value="<?=$address?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing City:</td>
                                            <td><input id="city" type="text" name="city" placeholder="Type city(Ex.:Banglore)" required="" value="<?=$city?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Area / Locality:</td>
                                            <td><input id="location"  name="location" type="text" placeholder="" required="" value="<?=$locality?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Experience (in years):</td>
                                            <td><input id="experience"  name="experience" type="text" placeholder="" required="" value="<?=$exp?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Educational Details:</td>
                                            <td><input id="education"  name="education" type="text" placeholder="" required="" value="<?=$education?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Specialization:</td>
                                            <td><input id="specialization"  name="specialization" type="text" placeholder="" required="" value="<?=$specialization?>"/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing Courts:</td>
                                            <td><input id="pra_court"  name="pra_court" type="text" placeholder="" required="" value="<?=$court?>"/></td>
                                        </tr>
                                       
                                        <tr>
                                            <td colspan="2" align="center">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                              <input type="submit" value="submit" name="submit" id="submit-btn"/>
                                                    </div>
                                                    <div class="col-sm-6">
                                              <input type="button" value="Cancel"  id="cancel-btn" />  
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </form>
        </div>
    </div>
</section>