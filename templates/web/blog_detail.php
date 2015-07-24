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
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="" style="color: white"></a></li>
                            <li><a href="login" style="color: white">Login to Create Blogs</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" >
                            <h3>All Blogs</h3>
                            <table >
                                <tr> <td><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Lawyer > &nbsp;&nbsp;<br/>
                                 <b>Author :</b> <span> </span></td></tr>
                                <tr><td>&nbsp;</td></tr>
                            </table>
                            <div class='popup'>
                                <div class='cnt223'>
                                    <a href='blog1.php' ><img src='images/home/cancel.png' alt='quit'/></a> 
                                    <table id="" id="blog-tbl">
                                        <tr id="blog-tr">
                                            <td><span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Lawyer > &nbsp;&nbsp;<br/>
                                                <b>Author :</b> <span> </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div><!--/category-tab-->
            </div>
        </div>
    </div>
</section>


