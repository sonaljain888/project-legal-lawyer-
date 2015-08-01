<section>
    <div class="container">

        <div class="col-sm-9 padding-right">

            <div class="category-tab" ><!--category-tab-->

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tshirt" >
                        <div class="verwraper" >
                            <div class="verearn"  >
                                <a href=""  >
                                    <img class="img1" src="../../admin/images/earning.jpg" width="60" height="60">
                                    <p class="pagehead">
                                        &nbsp; &nbsp;&nbsp;How to earn <br>&nbsp; &nbsp;&nbsp from it? 
                                    </p>
                                </a>
                            </div>
                            <div class="verearn">
                                <a href="" >
                                    <img class="img1" src="../../images/home/image/download (2).png" width="60" height="60">
                                    <p class="pagehead">
                                        &nbsp; &nbsp;&nbsp;How does it <br> &nbsp; &nbsp;&nbsp work?
                                    </p>
                                </a>
                            </div>

                        </div> 

                    </div>   

                    <span class="varbox"><strong>Add property verification report</strong></span><br>
                    <br><br>


                    <div class="topicsbox box1">

                        <form enctype="multipart/form-data"  method="POST" name="form_ask" action="#" >
                            <div class="topicsbox box1">

                                <p class="varp"><label style="margin-right: 200px; ">Property City </label>:
                                    <input type="text"  name="cityname" />
                                    <input type="hidden" id="cntry" name="country" value="" />
                                    <input type="hidden" id="state" name="state" value=""  />
                                    <input type="hidden" id="city" name="city" value=""   />&nbsp;Eg: Bangalore</p>



                                <p class="varp"> <label style="margin-right: 175px;">Property Locality </label>:
                                    <input class="re-feild" type="text"  name="locality"  value=""/>&nbsp;Eg:- MG Road</p>

                                <p class="varp"> <label style="margin-right: 197px;">Builder Name</label>:
                                    <input class="re-feild" type="text"  name="builder" id="builder" value=""/>&nbsp;Eg:- DLF</p>

                                <p class="varp"><label style="margin-right: 195px;">Project Name</label>:
                                    <input class="re-feild" type="text"  name="project" id="project" value=""/>&nbsp;Eg:- DLF New Town</p>


                                <p class="varp"> <label style="margin-right: 217px;" >Clear Title</label>:
                                    <label><INPUT class="yes_title"  TYPE=RADIO NAME="cleartitle" id="yes_title" VALUE="1"  > Yes</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label><INPUT  style="width:auto!important;"  TYPE=RADIO NAME="cleartitle" id="no_title" VALUE="0" > No</label></p> 	
                                <p class="varp"> 
                                    <label style="margin-right: 215px;">Legal Risk </label>
                                    :<select class="risk" name="risk">
                                        <option value="0">No Legal Risk</option>
                                        <option value="1">Less Risk</option>
                                        <option value="2">Average Risk</option>
                                        <option value="3">High Risk</option>   
                                    </select> </p>            
                                <p class="varp"> <label style="margin-right: 60px;" >Legal Description<br> (Legal status,<br> Legal issues,
                                        Risk factors) <br>
                                        Eg:- Legal status of DLF New Town
                                    </label>:<textarea name="descrp" rows="5" class="vartextarea"  ></textarea></p>					
                                <p class="varp"> <label style="margin-right: 215px;">Cost (INR)</label>:
                                    <input  type="text"  name="cost" id="cost" value="" />
                                    <font color="#469FBD" size="3" face=""> <br> Client has to pay you the given amount to view this report. 
                                    (Quote the minimum rate to increase the direct clients, write 0 to make it free) </font></p>
                                <p>&nbsp;&nbsp;I hereby declare that all the information given above is true is best of my knowledge <br><br></p>
                                <p class="varp"> <label style="margin-right: 300px;"> </label>
                                    <input class="varsubmit" type="submit" name="submit" value="Submit" /> 
                                </p>

                            </div>			

                        </form>





                        <br>
                        <br>



                    </div>     


                </div>
            </div>

        </div>
    </div>
</section>
<?php include '../footer.php'; ?>
<!--/Footer-->



