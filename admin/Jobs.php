
<?php include 'admin-config.php'; ?>
<?php include 'header.php'; ?>
<?php
$id = $active = $error = "";
if (strlen(Request::post("submit"))) {
    $id = Request::post("id");
    $active = Validation::getStautsTinyVal(Request::post("active"));
    $jobsObj = new Jobs();
    $jobsObj->set("id", $id);
    $jobsObj->set("active", $active);
    if ($jobsObj->save()) {
        General::redirectUrl("post-law-legal-jobs.php");
    } else {
        $error = "jobs Name alreday exist !";
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
                            <h2><i class="glyphicon glyphicon-edit"></i>Job View</h2>


                        </div>
                        <div class="box-content">
                            <div class="control-group">
                                <?php
                                $id = Request::get("id");
                                if (is_numeric($id) && $id > 0) {
                                    $jobsObj = new Jobs();
                                    $jobsObj->set("id", $id);
                                    $result = $jobsObj->getName();
                                    if (count($result)) {
                                        $row = $result[0];
                                        $id = $row['id'];
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
                                            <td><input type="checkbox"  name="active" <?php
                                if ($active == 1) {
                                    echo "checked";
                                }
                                ?>></td>
                                        </tr>
                                        <tr>
                                        <input type="hidden" name="id" value="<?php if ($id) {
                                                           echo $id;
                                                       } else {
                                                           echo "0";
                                                       } ?>" />
                                        <td  colspan="2"> <button  type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="post-law-legal-jobs.php"><button  type="button" class="btn btn-default">cancel</button></a></td>
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

<!-- external javascript -->




</body>
</html>

