
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
                            <input type="hidden" name="action" value="addjobs">
                            <input type="hidden" name="type" value="jobs">
                            <table height="680" align="center" width="80%">
                                
                                <tr>
                                    <td id="label">Heading:</td>
                                    <td><input id="text" type="text" name="heading" placeholder="Heading"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Post:</td>
                                    <td><input id="text" type="text" name="post" placeholder="Post"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Education:</td>
                                    <td><input id="text" type="text" name="education" placeholder="Education"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Experiance:</td>
                                    <td><input id="text" type="text" name="exp_min" required="" style="width: 50px"/></td>
                                    <td><input id="text" type="text" name="exp_max" required="" style="width: 50px"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Salary:</td>
                                    <td><input id="text" type="text" name="salary" placeholder="Salary"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Description:</td>
                                    <td><input id="text" type="text" name="description" placeholder="Description"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Company Name:</td>
                                    <td><input id="text" type="text" name="companyname" placeholder="Company Name"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">City:</td>
                                    <td><input type="text" name="city" placeholder="city"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Address:</td>
                                    <td><input type="text" name="address" placeholder="Address" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Website:</td>
                                    <td><input id="text"  name="website" placeholder="Website"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Email:</td>
                                    <td><input type="text" name="email" placeholder="Email"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Phone No:</td>
                                    <td><input type="text" name="phone" placeholder="Phone No"/></td>
                                </tr>
                                     <tr>
                                            <td colspan="2" align="center">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                              <input type="submit" value="submit" name="submit" id="submit-btn"/>
                                                    </div>
                                                    <div class="col-sm-6">
                                              <input type="button" name="" value="Cancel"  id="cancel-btn" />  
                                                    </div>
                                                </div>
                                            </td>
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
