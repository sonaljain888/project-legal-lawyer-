<?php include 'admin-config.php';?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="#">State</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i>All State</h2>
                </div>
                <div class="box-content">
                    <a class="btn btn-info" href="add_state.php">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                        Add 
                    </a><br/><br/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>State </th>
                                <th>Country </th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stateObj = new State();
                            $rows = $stateObj->getAll();
                            foreach ($rows as $row) {
                                ?>  

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td class="center"><?php echo $row['name']; ?></td>
                                    <td class="center"><?php echo $row['country_name']; ?></td>
                                    <td class="center">
                                        <span class="label-success label label-default"><?php if ($row['active'] == 1) {
                                echo "Active";
                            } else {
                                echo "Not Active";
                            } ?></span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-info" href="add_state.php?id=<?=$row['id']?>">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>

                                    </td>
                                </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

    <!-- content ends -->
</div><!--/#content.col-md-0-->
<?php include 'footer.php'; ?>