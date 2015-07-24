<?php include 'admin-config.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
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
                    <h2><i class="glyphicon glyphicon-user"></i> Document type Category</h2>




                </div>
                <div class="box-content">
                    <a class="btn btn-info" href="add_documentCategory.php">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                        Add Data
                    </a><br/><br/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Type Document Name </th>
                                <th> Category Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $documentcategorytObj = new DocumentCategory();
                            $rows = $documentcategorytObj->getAll();
                            foreach ($rows as $row) {
                                ?>  

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td class="center"><?php  echo $row['DocumentType_name'];  ?></td>
                                    <td><?php echo $row['name']; ?></td>
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

                                        <a class="btn btn-info" href="type_doc_cat_edit.php?id=<?php //echo $rows['cat_id'];  ?>" name="edit">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>
                            <!--            <a class="btn btn-danger" href="type_doc_cat_delete.php?id=<?php // echo $rows['cat_id'];  ?>"  name="delete" onClick="return confirm('Are you sure want to delete record')">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            Delete
                                        </a>-->
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
</div><!--/fluid-row-->


<?php include 'footer.php'; ?>
</div><!--/.fluid-container-->




</body>
</html>
