
<?php include 'admin-config.php'; ?>
   <?php include 'header.php';?>
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
        <h2><i class="glyphicon glyphicon-user"></i> Datatable Legal Lawyer</h2>
       
        
        
        
    </div>
    <div class="box-content">
        <a class="btn btn-info" href="for_user_form.php">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Add Data
            </a>
        <br/><br/>
        <div style="overflow-x: scroll;width: 100%;">
    <table  class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>UserId</th>
        <th>Logo</th>
          <th>User Role</th>
        <th>Name</th>
         <th>Email</th>
          <th>Mobile</th>
          <th>Address</th>
           <th>City</th>
         
        <th>Education</th>
         <th>Experiance</th>
         <th>Specialization</th>
           <th>Practicing Court</th>
            <th>Website</th>
        <th>Date</th>
        <th>Status</th>
         
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
                        <?php
                            $userObj = new User();
                            $rows = $userObj->getAll();
                            foreach ($rows as $row) {
                                ?> 

        <tr>
        <td class="center"><?php echo $row['UserId'];?></td>
        <td><img src="images/<?php echo $row['Image'];?>" name="logo" rel="logo" style="width: 50px;height: 50px; border: 2px #022241 solid;"/></td>
        <td class="center"><?php echo $row['role_name'];?></td>
       
        <td class="center"><?php echo $row['Name'];?></td>
        <td class="center"><?php echo $row['EmailId'];?></td>
        <td  class="center"><?php echo $row['Mobile'];?></td>
        <td  class="center"><?php echo $row['Address'];?></td>
        <td  class="center"><?php echo $row['City'];?></td>
        <td  class="center"><?php echo $row['Education'];?></td>
        <td class="center"><?php echo $row['Experiance'];?></td>
        <td class="center"><?php echo $row['Specialization'];?></td>
        <td class="center"><?php echo $row['PracticingCourt'];?></td>
         <td  class="center"><?php echo $row['Website'];?></td>
         <td class="center"><?php echo $row['Date'];?></td>
        <td class="center">
            <span class="label-success label label-default"><?php
                            if ($row['active'] == 1) {
                                echo "Active";
                            } else {
                                echo "Not Active";
                            }
                                ?></span>
        </td>
       
        <td class="center" style="width: 200px;">
              <a class="btn btn-info" href="edit_user.php?UserId=<?php  echo $row['UserId']; ?>"
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
<!--            <a class="btn btn-danger" href="for_user_delete.php?id=<?php //echo $row['id']; ?>" name="delete" onClick="return confirm('Are you sure want to delete record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>-->
        </td>
    </tr>
    <?php
}
?>
    </tbody>
    </table>
            </div>
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
</body>
</html>