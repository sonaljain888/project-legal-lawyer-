<?php echo Error::displayError();?>
<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 padding-right">
                <div class="category-tab" ><!--category-tab-->
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1 ">
                            <h2>Image </h2>
                            <span> <img src="#" name="image" id="col-sm-4_img"><br>
                                <a href=""> Edit Image</a></span>
                        </div>
                        <div class="col-sm-6">
                            <h2>Profile </h2>
                            <form id="form_background" action="#" method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="action" value="editProfile">
                                <input type="hidden" name="type" value="user">
                                <table width="100%">
                                    <?php
                                    $id = Session::read("userid");
                                    if (is_numeric($id) && $id > 0)
                                     $userObj = new User();
                                     $result = $userObj->profile();
                                     foreach ($result as $row) {
                                        ?>
                                        <tr>
                                            <td id="label">Name:</td>
                                            <td><input id="name" type="text" name="name"  value="<?php echo $row['Name']; ?>" /></td>
                                        </tr>                                        
                                        <tr>
                                            <td id="label">Website :</td>
                                            <td><input id="website" type="url" name="website"  value="<?php echo $row['Website']; ?>"  /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Address:</td>
                                            <td><input id="add" type="text" name="add"  value="<?php echo $row['Address']; ?>"  /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing City:</td>
                                            <td><input id="city" type="text" name="city"  value="<?php echo $row['City']; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Area / Locality:</td>
                                            <td><input id="location"  name="location" type="text"  value="<?php echo $row['Location']; ?>"  /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Experience (in years):</td>
                                            <td><input   name="experience" type="text"  value="<?php echo $row['Experiance']; ?>"  /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Educational Details:</td>
                                            <td><input id="education"  name="education" type="text"  value="<?php echo $row['Education']; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Specialization:</td>
                                            <td><input id="specialization"  name="specialization" type="text"  value="<?php echo $row['Specialization']; ?>"  /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Practicing Courts:</td>
                                            <td><input   name="pra_court" type="text"  value="<?php echo $row['PracticingCourt']; ?>"  /></td>
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
                                    <?php } ?> 
                                </table>
                            </form>

                            <div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

