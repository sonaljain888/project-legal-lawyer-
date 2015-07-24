<?php echo Error::displayError();?>
<section class="login-form">

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
            <form id="form_background" action="#" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="action" value="registration">
                <input type="hidden" name="type" value="user">
                
                                    <table height="680" align="center" width="80%">
                                        <tr>
                                            <td id="label">Name:</td>
                                            <td><input id="text" type="text" name="name" placeholder="Name"required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Email:</td>
                                            <td><input id="text"type="email" name="email" placeholder="Email"required=""/></td>
                                        </tr>
                                        
                                        <tr>
                                            <td id="label">Password:</td>
                                            <td><input id="text"type="password" name="password" placeholder="Password" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Confirm Password:</td>
                                            <td><input id="text"type="password" placeholder="Confirm Password"required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Mobile No:</td>
                                            <td><input id="text"type="text" name="mobile" placeholder="Mobile No" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Website:</td>
                                            <td><input id="text" type="url" name="website" placeholder="Website" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Address:</td>
                                            <td><input id="text" type="text" name="add" placeholder="Address" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing City:</td>
                                            <td><input id="text" type="text" name="city" placeholder="Type city(Ex.:Banglore)" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Area / Locality:</td>
                                            <td><input id="text"  name="location" type="text" placeholder="" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Experience (in years):</td>
                                            <td><input id="text"  name="experience" type="text" placeholder="" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Educational Details:</td>
                                            <td><input id="text"  name="education" type="text" placeholder="" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Specialization:</td>
                                            <td><input id="text"  name="specialization" type="text" placeholder="" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing Courts:</td>
                                            <td><input id="text"  name="pra_court" type="text" placeholder="" required=""/></td>
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