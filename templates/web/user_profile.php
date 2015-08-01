<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="lawyer-details"><!--lawyer-details-->
                    <div class="col-sm-5">
                        <div class="view-lawyer">
                            <img src="<?=USER_PROFILE_IMAGE_URL?>/default.png" alt="" />
                            <h3><a href="<?=SERVER_URL?>/user/editprofile" >Edit Profile</a></h3>
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
                            <p><b>Area:</b> <?=$pageCnt["Location"]?>, <?=$pageCnt["City"]?><br/><?=$pageCnt["Address"]?></p>
                            <p><b>Experience:</b> <?=$pageCnt["Experiance"]?> Years </p>
                            <p><b>Education:</b> <?=$pageCnt["Education"]?></p>
                            <p><b>Practice Courts:</b> <?=$pageCnt["PracticingCourt"]?> </p>
                            <p><b>Specialization:</b>  <?=$pageCnt["Specialization"]?></p>
                        </div><!--/lawyer-information-->
                    </div>
                </div><!--/lawyer-details-->

                
        </div>
    </div>
</section>
