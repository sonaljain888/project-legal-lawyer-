<?php include 'admin-config.php';?>
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
                    <h2><i class="glyphicon glyphicon-user"></i> Description</h2>
                </div>
                <div class="box-content" id="div-overflow">
                    <div>
                        <a class="btn btn-info" href="add_page.php">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Add Data
                        </a>
                    </div>
                    <div>&nbsp;</div>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
                        <thead>
                            <tr>
                                <th style="vertical-align: top">Id</th>
                                <th style="vertical-align: top">Category</th>
                                <th style="vertical-align: top">Name</th>
                                <th style="vertical-align: top">Url</th>
                                <th style="vertical-align: top">Top Desc</th>
                                <th style="vertical-align: top">Bottom Desc</th>
                                <th style="vertical-align: top">Keyword</th>
                                <th style="vertical-align: top">Title</th>
                                <th style="vertical-align: top">Desc</th>
                                <th style="vertical-align: top">Author</th>
                                <th style="vertical-align: top">Date</th>
                                <th style="vertical-align: top">Modified By</th>
                                <th style="vertical-align: top">Access Type</th>
                                <th style="vertical-align: top">Status</th>
                                <th style="vertical-align: top">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                            $pageObj = new Page();
                            $rows = $pageObj->getAll();
                            foreach ($rows as $row) {
                                ?>
                            <tr>
                                <td class="center"><?php echo $row['page_id']; ?></td>
                                <td class="center"><?php echo $row['category_name']; ?></td>
                                <td class="center"><?php  echo $row['name']; ?></td>
                                <td class="center"><?php echo $row['url']; ?></td>
                                <td class="center"><div class="show-dataindiv" ><?php echo $row['top_description']; ?></div></td>
                                <td class="center"><div class="show-dataindiv"> <?php echo $row['bottem_description']; ?></div></td>
                                <td class="center"><?php echo $row['Keyword']; ?></td>
                                <td class="center"><?php echo $row['title']; ?></td>
                                <td class="center"><?php echo $row['description']; ?></td>
                                <td class="center"><?php echo $row['author']; ?></td>
                                <td class="center"><?php echo $row['date']; ?></td>
                                <td class="center"><?php echo $row['modified_by']; ?></td>
                                <td class="center"><?php echo $row['type']; ?></td>
                                <td class="center"><span class="label-success label label-default"><?php if ($row['active'] == 1) {
                                echo "Active";
                            } else {
                                echo "Not Active";
                            } ?></span></td>
                                <td class="center">
                                    <a class="btn btn-info" href="add_page.php?id=<?=$row['page_id']?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>

                                    <a class="btn btn-danger" href="" onClick="return confirm('Are you sure want to delete record')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
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



</div><!--/.fluid-container-->

<?php include 'footer.php'; ?>