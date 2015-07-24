        <section class="login-form">
            <div class="container">
                <div class="row">
<?php include 'sitebar.php'; ?>
                    <div class="col-sm-9 padding-right">


                        <div class="category-tab" ><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="">My Home</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">My Question</a></li>
                                    <li><a href="">My Lawyer</a></li>
                                    <li><a href="" class="active">My Blogs</a></li>
                                    <!--<li><a href="userprofile">My Profile</a></li>-->
                                                     <li><a href="#">Upcoming 1</a></li>
                                       <li><a href="#">Upcoming 2</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-9 padding-right"style="margin-top: 1%;">
                                <div class="col-sm-12">
                                    <ul class="nav nav-tabs" style="background: #40403E;">
                                        <li class="active">
                                            <a href="" data-toggle="tab">Create a Blog</a>
                                        </li>

                                    </ul>
                                </div>
                                 <form id="form_background" action="" method="POST">
                                        <?php //  echo "<font color = 'blue' size='4' style='margin-left:100px'>$msg</font>";?>
                                        <table height="700" align="center" width="60%">
                                            <tr>
             <!--                                <td id="first_td">Email id : </td>-->
                                                <td><input type="text" name="reg_id" value="" id="second_td"style="display: none;"/></td>

                                            </tr>
                                            <tr>
                                                <td id="first_td"> Country Name : </td>
                                                <td> <select required="" name="country_name" class="form-control">
                                                        <option value="">--Select Country--</option>
                                                      </select></td>
                                            </tr>
                                            <tr>
                                                <td id="first_td"> Category : </td>
                                                <td> <select required="" name="b_c_id" class="form-control">
                                                        <option value="">--Select Category  --</option>
                                                       
                                                    </select></td>
                                            </tr>

                                            <tr>
                                                <td id="second_td">Heading (max of 100 characters):</td>
                                                <td><input id="second_td"type="text" name="heading" placeholder="heading" required=""/></td>
                                            </tr>
                                            <tr>
                                                <td id="second_td">Blog Author name</td>
                                                <td><input id="second_td"type="text" name="blog_auther" placeholder="Author name" required=""/></td>
                                            </tr>

                                            <tr>
                                                <td id="first_td">Describe your Blog:</td>
                                                <td><textarea id="teatarea_td" name="description" placeholder="Describe your Bolgs"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td id="second_td">Date:</td>
                                                <td><input id="second_td" type="date" name="date" placeholder=""required=""/></td>
                                            </tr>

                                            <tr>
                                                <td colspan="4" align="center"><input type="submit" value="Submit" name="submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></td>
                                            </tr>

                                        </table>

                                    </form>
    
                            </div><!--/category-tab-->

                            <!--/recommended_items-->

                        </div>
                    </div><!--/category-tab-->

<?php // include 'include/recommended.php'; ?>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
    <!--/Footer-->
