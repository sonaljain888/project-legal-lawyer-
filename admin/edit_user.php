
<?php include 'admin-config.php'; ?>
<?php include 'header.php'; ?>
<?php
$UserId= $active = $error = "";
if (strlen(Request::post("submit"))) {
    $UserId = Request::post("UserId");
    $active = Validation::getStautsTinyVal(Request::post("active"));
    $userObj = new User();
    $userObj->set("UserId", $UserId);
    $userObj->set("active", $active);
    if ($userObj->save()) {
        General::redirectUrl("users.php");
    } else {
        $error = " Name alreday exist !";
    }
}
?>
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <?php include 'sitebar.php'; ?>
        <!--/span-->
        <!-- left menu ends -->



        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i>User View</h2>


                        </div>
                        <div class="box-content">
                            <div class="control-group">
                                <?php
                                $UserId = Request::get("UserId");
                                if (is_numeric($UserId) && $UserId > 0) {
                                    $userObj = new User();
                                    $userObj->set("UserId", $UserId);
                                    $result = $userObj->getName();
                                    if (count($result)) {
                                        $row = $result[0];
                                        $UserId= $row['UserId'];
//                                    $topic = $row['topic'];
                                        $active = $row['active'];
                                    }
                                }
                                ?>
                                <div class="error"><?= Error::displayError() ?></div>

                                <form action="" method="POST">
                                    <table style="margin-left: 20%;" width="100%" >

                                        <tr>
                                            <td><label class="control-label" for="selectError">Active</label></td>
                                            <td><input type="checkbox" name="active"<?php
                                if ($active == 1) {
                                    echo "checked";
                                }
                                ?>></td>
                                        </tr>
                                        <tr>
                                     <input type="hidden" name="UserId" value="<?php if ($UserId) {
                                                           echo $UserId;
                                                       } else {
                                                           echo "0";
                                                       } ?>" />
                                        <td  colspan="2"> <button  type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="users.php"><button  type="button" class="btn btn-default">cancel</button></a></td>
                                        </tr>
                                    </table>

                                </form>
<?php // } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->


            <!-- content ends -->
        </div><!--/#content.col-md-0-->
    </div><!--/fluid-row-->



    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
</div><!--/.fluid-container-->