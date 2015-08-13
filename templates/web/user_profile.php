<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="lawyer-details"><!--lawyer-details-->
                    <div class="col-sm-5">
                        <div class="view-lawyer">
                            <img src="<?=USER_PROFILE_IMAGE_URL?>/default.png" alt="" />
                            <h3><a href="<?=SERVER_URL?>/editProfile/<?php $row["UserId"]?>" >Edit Profile</a></h3>
                        </div>
                    </div>
                    <div class="col-sm-7">  
                        <div class="lawyerinfo">
                            <span>
                                <button type="button" class="btn btn-fefault cart">
                                    Phone Consulting
                                </button>
                                <button type="button" class="btn btn-fefault cart">
                                    Get contact Detail
                                </button>
                                <button type="button" class="btn btn-fefault cart">
                                    Ask & Chat
                                </button>
                            </span>
                            <?php 
                            $id = Session::read("userid");
                            if (is_numeric($id) && $id > 0)
                                $userObj= new User();
                            $result=$userObj->profile();
                            foreach ($result as $row){
                                //print_r($row);                                exit(); 
                            
                            ?>
                            <p><b>Name:</b> <?php echo $row["Name"]?></p>
                            <p><b>Area:</b><?php echo $row["Address"]?>,<?php echo $row["Location"];?>,<?php echo $row["City"];?> </p>
                            <p><b>Experience:</b> <?php echo $row["Experiance"];?>Years </p>
                            <p><b>Education:</b><?php echo $row["Education"]?> </p>
                            <p><b>Practice Courts:</b><?php echo $row["PracticingCourt"]?></p>
                            <p><b>Specialization:</b><?php echo $row["Specialization"]?> </p>
                            <?php }?>
                        </div><!--/lawyer-information-->
                    </div>
                </div><!--/lawyer-details-->

                
        </div>
    </div>
</section>
