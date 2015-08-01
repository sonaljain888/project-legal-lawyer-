<?php include 'admin-config.php'; ?>
   <?php include 'header.php';?>
    <!-- topbar ends -->
<?php include 'sitebar.php';?>
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
        <h2><i class="glyphicon glyphicon-user"></i> Legal Lawyer</h2> 
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Heading</th>
        <th>Post</th>
        <th>Eduction</th>
        <th>Experience</th>
         <th>Description</th>
        <th>Company</th>
        <th>Address</th>
        <th>Date</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php
                            $jobsObj = new Jobs();
                            $rows = $jobsObj->getAll();
                            foreach ($rows as $row) {
                                ?> 
    <tr>
             <td><?php echo $row['id']; ?></td>
        <td class="center"><?php echo $row['heading']; ?></td>
        <td class="center"><?php echo $row['post']; ?></td>
        <td class="center"><?php echo $row['education']; ?></td>
        <td class="center"><?php  echo $row['exp_min']; ?> </td>
        <td class="center"><?php  echo $row['c_name']; ?></td>
        <td class="center"><?php  echo $row['desc']; ?></td>
        <td class="center"><?php  echo $row['address']; ?> </td>
        <td class="center"><?php  echo $row['date']; ?></td>
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
            <a class="btn btn-success" href="jobs.php?id=<?php  echo $row['id']; ?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
           
<!--            <a class="btn btn-danger" href="job_delete.php?id=<?php // echo $rows['id']; ?>" onClick="return confirm('Are you sure want to delete record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>-->
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

   
<?php include 'footer.php';?>
</div><!--/.fluid-container-->

<!-- external javascript -->




</body>
</html>
