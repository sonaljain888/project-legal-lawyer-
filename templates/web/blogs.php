
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 550px;
margin-top: -350px;
/*margin: 0 auto;*/
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 10px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 #p{
clear: both;
height: 500px;
overflow: scroll;
color: #555555;
text-align: justify;
}
.cnt223 #p a{
    
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
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

	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                                                             
                                                            <li style="padding-left: 5%;"><a href="" style="color: white"></a></li>
                                                               
                                                                <li style="padding-left: 5%;"><a href="login" style="color: white">Login to Create Blogs</a></li>
							</ul>
						</div>
                                            <div class="tab-content" style="height: 100%;">
							<div class="tab-pane fade active in"  >
                                                             <h3 style="margin-left: 10%;">All Blogs</h3>
                                                            <table style="margin-left: 10%;width: 700px;">
                                                                
                                                                <tr style=" height: 110px;;border-top: 1px #000 dotted;border-bottom:1px #000 dotted; ">
                                                                    <td><span style="color: #006699;font-size: 24px;font-weight: bold;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Lawyer > &nbsp;&nbsp;<br/>
                                                                        <b>Author :</b> <span style="font-weight: bold;color: #006699"> </span>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </table>
							
							 
                                                            
                                                             
								<div class='popup'>
                                            <div class='cnt223'style="border: 1px #000 solid">
                                                <a href='blog1.php' ><img src='images/home/cancel.png' alt='quit'style="position:  absolute;margin-left: 96%;margin-top: -3%" /></a> 
                                            <table id="" style="border: 1px #000 solid; overflow: scroll;margin-left: 9%;margin-top: 7%">
                                                
                                           
                                               
                                            <tr style=" height: 110px;;border-top: 1px #000 dotted;border-bottom:1px #000 dotted; ">
                                                                    <td><span style="color: #006699;font-size: 24px;font-weight: bold;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Lawyer > &nbsp;&nbsp;<br/>
                                                                        <b>Author :</b> <span style="font-weight: bold;color: #006699"> </span>
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
	
