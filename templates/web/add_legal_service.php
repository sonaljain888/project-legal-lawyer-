
<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">My Home</a></li>
                            <li><a href="#reviews" data-toggle="tab" align="center">My Account</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">My Questions</a></li>
                            <li><a href="#tag" data-toggle="tab">My Lawyers</a></li>
                            <li><a href="#reviews" data-toggle="tab" align="center">My Blogs</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Upcoming 1</a></li>
                            <li><a href="#tag" data-toggle="tab">Upcoming 2</a></li>
                        </ul>
                    </div>
                    <p class="tomato"><b>Make sure that you can support the client for the service you are adding here. Add only the service you can support.</b></p>
                    <form method="post" action="#" id="form_background"style="">
                        <table height="480" align="center" width="100%">
                            <tr>
                                <td id="label">Choose the Legal Service:</td>
                                <td><select name="legal_service" id="text"> 
                                        <option value="<?php //echo $rows['id'];  ?>"><?php // echo $rows['legal_service'];  ?></option>
                                        <?php //}?>     </select></td>
                            </tr>
                            <tr>
                                <td id="label">Description:</td>
                                <td><input id="textarea"type="text" name="description" placeholder="PAN"/></td>
                            </tr>
                            <tr>
                                <td id="label">Estimated Cost of the work(in rupees):</td>
                                <td><input id="text"type="text" name="cost" placeholder="Account Number"/>
                                    <span>This information will not publish along with your profile and only available on request. </span>
                                </td>

                            </tr>
                            <tr>
                                <td id="label">Estimated complete time(hours/days):</td>
                                <td><input id="text"type="text" name="time" placeholder="Bank Name"/></td>
                            </tr>


                            <tr>
                                <td colspan="4" align="center"><input type="submit" value="Submit" name="submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></td>
                            </tr>
                        </table>
                    </form>                                      


                </div>


            </div>
            </section>
          	
