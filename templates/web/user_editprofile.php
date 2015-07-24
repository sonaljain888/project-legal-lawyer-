
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
                                <input type="hidden" name="action" value="edituserprofile">
                                <input type="hidden" name="type" value="user">
                                <table width="100%">
                                    <tr>
                                        <td id="label">Name:</td>
                                        <td><input id="text" type="text" name="name" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Email:</td>
                                        <td><input id="text"type="email" name="email" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>

                                    <tr>
                                        <td id="label">Mobile No:</td>
                                        <td><input id="text"type="text" name="mobile" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Website:</td>
                                        <td><input id="text" type="url" name="website" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Address:</td>
                                        <td><input id="text" type="text" name="add"  value="<?=$userProfile["Name"]?>"/></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Practicing City:</td>
                                        <td><input id="text" type="text" name="city"  value="<?=$userProfile["Name"]?>"/></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Area / Locality:</td>
                                        <td><input id="text"  name="location" type="text" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Experience (in years):</td>
                                        <td><input id="text"  name="experience" type="text" value="<?=$userProfile["Name"]?>" /></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Educational Details:</td>
                                        <td><input id="text"  name="education" type="text" value="<?=$userProfile["Name"]?>"/></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Specialization:</td>
                                        <td><input id="text"  name="specialization" type="text" value="<?=$userProfile["Name"]?>"/></td>
                                    </tr>
                                    <tr>
                                        <td id="label">Practicing Courts:</td>
                                        <td><input id="text"  name="pra_court" type="text"/></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="submit" value="Submit" name="submit" style="background: red;height: 45px;color: white " />
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="button" value="Cancel" style="width:130px;background: gray;height: 45px;color: white" />  
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

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

