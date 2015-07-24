<section class="login-form">
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab" ><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="">My Home</a></li>
                            <li><a href="">My Question</a></li>
                            <li><a href="">My Lawyer</a></li>
                            <li><a href="">My Blogs</a></li>
                            <li><a href="">My Profile</a></li>
                            <li><a href="#">Upcoming 1</a></li>
                            <li><a href="#">Upcoming 2</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9 padding-right"style="margin-top: 1%;">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs" style="background: #40403E;">
                                <li class="active">
                                    <a href="" data-toggle="tab">Add /Law Firm/Judge</a>
                                </li>
                            </ul>
                        </div>
                        <form id="form_background" action="" method="POST">
                            <table height="680" align="center" width="80%">
                                <tr>
                                    <td id="label">category:</td>
                                    <td><select id="text" name="lawyer_category" required="">
                                            <option>Select</option>
                                            <option>firm</option>
                                            <option>Judge</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td id="label">Name:</td>
                                    <td><input id="text" type="text" name="name" placeholder="Name"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Email:</td>
                                    <td><input id="text"type="email" name="email" placeholder="Email"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Confirm Email:</td>
                                    <td><input id="text"type="email" placeholder="Confirm Email"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Password:</td>
                                    <td><input id="text"type="password" name="password" placeholder="Password"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Mobile No:</td>
                                    <td><input id="text"type="text" name="mobile" placeholder="Mobile No"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Website:</td>
                                    <td><input id="text" type="url" name="website" placeholder="Website"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Address:</td>
                                    <td><input id="text" type="text" name="add" placeholder="Address"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Practicing City:</td>
                                    <td><input id="text" type="text" name="city" placeholder="Type city(Ex.:Banglore)"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Area / Locality:</td>
                                    <td><input id="text"  name="location" type="text" placeholder="Location"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Experience (in years):</td>
                                    <td><input id="text"  name="experience" type="text" placeholder="Experience"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Educational Details:</td>
                                    <td><input id="text"  name="education" type="text" placeholder="Educational Details"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Specialization:</td>
                                    <td><input id="text"  name="specialization" type="text" placeholder="Specialization"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Practicing Courts:</td>
                                    <td><input id="text"  name="pra_court" type="text" placeholder="Practicing Courts"/></td>
                                </tr>

                                <tr>
                                    <td colspan="4" align="center"><input type="submit" value="Submit" name="submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<a href="my profile.php"><input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></a></td>
                                </tr>
                            </table>
                        </form>	

                    </div><!--/category-tab-->

                    <!--/recommended_items-->

                </div>
            </div><!--/category-tab-->

            <?php // include 'include/recommended.php';?>
            <!--/recommended_items-->

        </div>
    </div>
</div>
</section>
<!--/Footer-->
