<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab" ><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs"style="background: #054F73;">
                            <li class="active"><a href="" data-toggle="tab">My Home</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">My Question</a></li>
                            <li><a href="">My Lawyer</a></li>
                            <li><a href="">My Blogs</a></li>
                            <li><a href="">My Profile</a></li>
                            <li><a href="">Clients  Q/A</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9 padding-right"style="margin-top: 1%;">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs" style="background: #40403E;">
                                <li class="active">
                                    <a href="#details" data-toggle="tab">User Update Account</a>
                                </li>

                            </ul>
                        </div>
                        <form id="form_background" action="" method="POST">
                            <table height="400" align="center" width="80%">
                                <tr><td id="label">Name:</td>
                                    <td><input id="text" type="text" name="name" /></td></tr>
                                <tr><td id="label">Email:</td>
                                    <td><input id="text"type="text" name="email" /></td> </tr>
                                <tr><td id="label">Mobile No:</td>
                                    <td><input id="text"type="text" name="mobile" /></td> </tr>
                                <tr><td id="label">website:</td>
                                    <td><input id="text"type="text" name="mobile" /></td></tr>
                                <tr><td id="label">Experience:</td>
                                    <td><input id="text"type="text" name="mobile" /></td></tr>
                                <tr><td id="label">Address:</td>
                                    <td><input id="text"type="text" name="mobile" /></td></tr>
                                <tr><td id="label">Practicing Courts:</td>
                                    <td><input id="text"type="text" name="mobile" /></td></tr>
                                <tr><td colspan="4" align="center"><input type="submit" value="update" name="edit" 
                                     style="width:150px;background: red;height: 45px;color: white" onClick="return confirm('Are you sure want to Edit some data')" />&nbsp;&nbsp;&nbsp;<a href="account">
                                    <input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></a></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php'; ?>
