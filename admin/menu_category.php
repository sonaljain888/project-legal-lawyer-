<?php include 'admin-config.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div id="content" class="col-lg-10 col-sm-10">
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i>Menu Category</h2>
                </div>
                <div class="box-content">
                    <a class="btn btn-info" href="add_menucategory.php">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                        Add 
                    </a><br/><br/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Name </th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $countryObj = new MenuCategory();
                            $rows = $countryObj->getAll();
                            foreach ($rows as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td class="center"><?php echo $row['name']; ?></td>
                                    <td class="center">
                                        <span class="label-success label label-default"><?php
                            if ($row['active'] == 1) {
                                echo "Active";
                            } else {
                                echo "Not Active";
                            }
                            ?></span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-info" href="add_menucategory.php?id=<?= $row['id'] ?>">
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
    </div>
</div>
<?php include 'footer.php'; ?>