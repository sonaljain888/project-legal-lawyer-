<?php // include 'admin-config.php'; ?>
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
        <h2><i class="glyphicon glyphicon-user"></i>Company Name</h2> 
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Date</th>
        <th>City</th>
        <th>Location</th>
         <th>Website</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Specialization</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
     <?php
//                            $companyObj = new Company();
//                            $rows = $companyObj->getAll();
//                          foreach ($rows as $row) {
                                ?> 
    <tr>
             <td><?php// echo $row['id']; ?></td>
        <td class="center"><?php// echo $row['name']; ?></td>
        <td class="center"><?php// echo $row['date']; ?></td>
        <td class="center"><?php //echo $row['city']; ?></td>
        <td class="center"><?php // echo $row['location']; ?> </td>
        <td class="center"><?php // echo $row['website']; ?></td>
        <td class="center"><?php // echo $row['email']; ?></td>
        <td class="center"><?php // echo $row['phone']; ?> </td>
        <td class="center"><?php//  echo $row['specialization']; ?></td>
        <td class="center"><?php//  echo $row['description']; ?></td>
        <td class="center">
            <span class="label-success label label-default"><?php
//                            if ($row['active'] == 1) {
//                                echo "Active";
//                           } else {
//                                echo "Not Active";
//                           }
                               ?></span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="<?php//  echo $row['id']; ?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
        </td>
    </tr>
    <?php //}?>
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
