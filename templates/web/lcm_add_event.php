
    <section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
                                
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						
                                           <table style="width:100%;">
                                                <tr>
                                                    <td><a href="lcm_add_lawyers_to_group.php"><img src="../../images/lawyeradmin/lawyers.png" alt="disclaimer" width="80" height="80"><br/><br/>Lawyers</a> </td>
                                                    <td><a href="lcm_cases.php"><img src="../../images/lawyeradmin/cases.png" alt="disclaimer" width="80" height="80"><br/><br/>Cases </a> </td>
                                                    <td><a href="lcm_clients.php"><img src="../../images/lawyeradmin/clients.png" alt="disclaimer" width="80" height="80"><br/><br/>Clients</a> </td>
                                                    <td><a href="lcm_events.php"><img src="../../images/lawyeradmin/events.png" alt="disclaimer" width="80" height="80"><br/><br/>Events </a></td>
                                                    <td> <form name="myform">
                    
                        <input type="text" name="lcm_search_text" id="lcm_search_text" value="Client Name" class="search-txt">
                        
                       
                        <input type="submit" name="home_search_submit" value="Search" class="sub_mit"><br>

                        <input type="radio" name="lcmsearch" id="client" value="Client Name" checked="" onclick="ship('client')" class="radio1"> 
                        <label>Client</label>
                        
                        <input type="radio" name="lcmsearch" id="case" value="Case Title" onclick="ship('case')" class="radio2">
                        <label>Case</label>
                        
                        <input type="radio" name="lcmsearch" id="event" value="Event Title" onclick="ship('event')" class="radio3">
                        <label>Event</label>
                    </form></td>
                                                </tr>
                                            </table>
<br/><br/>
<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab" align="center">Add New Events</a></li>
							</ul>
						</div>
                                                
                      <form method="post" action="#" style="">
                        <table height="480" align="center" width="80%">
                            <tr>
                                <td id="label">Case :</td>
                                <td><select name="case_ev" required="" id="text"> 
                                        <option value="Case Events">Case Events</option>
                                      </select></td>
                            </tr>
                            <tr>
                                <td id="label">Event Date & Time:</td>
                                <td><input id="text"  type="datetime-local" name="Event" placeholder="Account Number"/>
                                   
                                </td>
                                
                            </tr>
                            <tr>
                                <td id="label">Title:</td>
                                <td><input id="text" required="" type="text" name="Title" placeholder="Account Number"/>
                                 
                                </td>
                                
                            </tr>
                             <tr>
                                <td id="label">Details:</td>
                                <td><input id="textarea" required="" type="text" name="Details" placeholder="PAN"/></td>
                            </tr>
                             
                            <tr>
                                <td id="label">Add Lawyers</td>
                               <td><select name="AddLawyers" required="" id="text">
                                        <option value="[Add Lawyers to the case]">[Add Lawyers to the case] </option>
                                    </select></td>
                            </tr>
                            
                            
                             <tr>
                                 <td colspan="4" align="center"><input type="submit" value="submit" name="submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></td>
                            </tr>
                        </table>
                    </form>          
             </div>
                                    
			
		</div>
	</section>
<?php include 'footer.php';?>		
