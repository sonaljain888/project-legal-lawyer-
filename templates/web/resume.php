
<section>
    <div class="container">
			
        <div class="col-sm-9 padding-right">
					
	   <div class="category-tab" ><!--category-tab-->
               <div class="col-sm-12">
                    
		</div>
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="tshirt" >
                       <div> <input type="text" placeholder="Serch City"> <a href="<?=SERVER_URL?>/add-jobs" > Post Jobs</a></div>
                    		<table id="example" class="display" cellspacing="0" width="77%" style="float: left;">
				
				<tbody>
                                    <?php
                            
                                $companyObj = new Company ();
                                $result = $companyObj->getAll();
                                foreach ($result as $row){
                            ?>
                                    <tr class="trboder">
                                        <td >
                                            <div class="divdesc">
                                                <p><b>Name:</b> <?php echo $row['name'];?> <br/>
                                                 <b>City:</b> <?php echo $row['city'];?> <br/>
                                                 <b> Specialization:</b> <?php echo $row['specialization'];?> </p>
                                                  
                                            </div>
                                        </td>                                       
                                        <td><br/>
                                        <a href=""><input type="button" value="Details" style="background: gray;color: white;float: right;"/></a>
                                        </td>	
				</tr>
				<?php }?>	
				</tbody>
			</table>
                       
                        
                        
                  </div>
                   </div>

		</div>
		</div>
</section>
