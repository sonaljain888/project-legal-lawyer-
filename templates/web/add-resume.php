
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
                            <input type="hidden" name="action" value="addresume">
                            <input type="hidden" name="type" value="resume">
                            <table height="680" align="center" width="80%">
                                
                                <tr>
                                            <td id="label"> Name:</td>
                                            <td><input id="" type="text" name="name" placeholder="Name" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Email:</td>
                                            <td><input id="email" type="email" name="email" placeholder="Email"required="" /></td>
                                        </tr>
                                        
                                        <tr>
                                            <td id="label">Education:</td>
                                            <td><input id="" type="text" name="education" placeholder="Education" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Total Experience:</td>
                                            <td><input id="" type="text"  name="total_exp" placeholder="Total Experience"required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Salary:</td>
                                            <td><input id="" type="text" name="salary" placeholder="Salary" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Description :</td>
                                            <td><input id="" type="text" name="desc" placeholder="Description" required="" v/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Address:</td>
                                            <td><input id="add" type="text" name="add" placeholder="Address" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Mobile:</td>
                                            <td><input id="" type="text" name="phone" placeholder="Mobile " required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">City:</td>
                                            <td><input id=""  name="city_name" type="text" placeholder="Type city(Ex.:Banglore)" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Address:</td>
                                            <td><input id=""  name="address" type="text" placeholder="Address" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Date:</td>
                                            <td><input id=""  name="Date" type="date" required=""/></td>
                                        </tr>
                                        <tr>
                                            <td id="label">Resume:</td>
                                            <td><input id=""  name="resume" type="file" required="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center;"><input id=""  name="Submit" type="submit" value="Submit" />
                                            <input id=""  name="Cancel" type="submit" value="Cancel" /></td>
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
