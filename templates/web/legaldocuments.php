

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

	<!--/header-->
	<?php include 'header.php';?>

	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                                                            	<li class="" style="padding-left: 15%;"><a href="#tshirt" data-toggle="tab"></a></li>
                                                                
<!--								<li><a href="#blazers" data-toggle="tab">For Lawyer</a></li>
								<li><a href="#sunglass" data-toggle="tab">Top Lawyers</a></li>-->
<!--								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>-->
							</ul>
						</div>
                                            <div class="tab-content" style="height: 100%;">
							<div class="tab-pane fade active in" id="tshirt" >
                                                            <table style="margin-left: 10%;float:left;">
                                         
                                                                <tr>
                                                                    <td><img src="images/home/folder.png" name="" rel=""/>
                                                                        <a href="?cat_id="></a>
                                                                   </td>
                                                                  </tr>
                                                                  
                                                                </table>  
							
							<table id="li-margin-left">
                                          
                                                               <tr>
                                                                    <td><img src="" name="" rel=""/>
                                                                        <a href=""></a>
                                                                   </td>
                                                                  </tr>
                                                               
                                                            </table> 
                                                            
                                                            <table id="li-margin-left">
                                           
                                                                <tr>
                                                                    <td><img src="" name="" rel=""/>
                                                                        <a href=""></a>
                                                                   </td>
                                                                  </tr>
                                                                
                                                            </table>  
								<div class='popup'>
                                            <div class="cnt223">
                                                <a href='' ><img src='' alt='quit' id="docimage" /></a> 
                                            <table id="blog-tbl">
                                                
                                            
                                               
                                            <tr>
                                                <td><img src="images/home/file.png"/>
                                                    <a href="download-docunent.php?id="></a
                                                </td>
                                            </tr>
                                           
                                            </table>
                                            </div>
                                            </div>
								
                                                           </div>
						</div>
					</div><!--/category-tab-->
                                       
                                        
                                        
                                        
                                        
                                        
					<?php include 'recommended.php';?>
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
	