
<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">

                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">

                    </div>
                    <div class="tab-content">
                        
                        <div class="tab-pane fade active in"  >
                            <div class="divdesc">                            
                                <?php  echo $pageDetails[0]['top_description']; ?>                            
                            </div>		
                            <div class="container">
		<section>
			<table id="example" class="display" cellspacing="0" width="77%" style="float: left;">
				<thead>
					<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
				</thead>
				<tbody>					
                                    <tr>
                                        <td><img src="" style="border: 1px rosybrown solid; width: 80px;height: 80px;"/></td>
                                        <td><a href="#"><b></b></a>
                                        <p> family law, matrimonial cases,property disputes,corporate law ,arbitration,business law</p>
                                        </td>
                                        <td><br/>
                                        <a href="lawyer-profile.php"><input type="button" value="Details" style="background: gray;color: white;float: right;"/></a>
                                        </td>	
				</tr>
					
				</tbody>
			</table>				
		</section>
	</div>
	
                            </div> 
                            <br/>
                            <div class="divdesc"><?php echo $pageDetails[0]['bottem_description']; ?></div>
                          
                        </div>
                    </div>
                </div><!--/category-tab-->
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
	$('#example').dataTable( {
		"paging":   false,
		"ordering": false,
		"info":     false
	} );
} );

	</script>
