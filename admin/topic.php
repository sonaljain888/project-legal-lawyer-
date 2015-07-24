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
        <a class="btn btn-info" href="topic-add.php">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Add Data
            </a><br/><br/>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Topic </th>
       
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      
    <tr>
        <td></td>
        <td class="center"></td>
        <td class="center">
            <span class="label-success label label-default"></span>
        </td>
        <td class="center">

            <a class="btn btn-info" href="">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="" onClick="return confirm('Are you sure want to delete record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
  
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

<?php include 'footer.php';?>
