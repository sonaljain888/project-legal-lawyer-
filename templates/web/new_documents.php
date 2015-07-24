<section class="login-form">
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab" ><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs"style="background: #054F73;">
                            <li class="active"><a href="" data-toggle="tab">My Home</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">My Question</a></li>
                            <li><a href="">My Lawyer</a></li>
                            <li><a href="">My Blogs</a></li>
                            <li><a href="">My Profile</a></li>
                            <li><a href="">Clients  Q/A</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <form id="form_background" action="#" method="POST" enctype="multipart/form-data">
                            <table height="680" align="center" width="80%">
                                <tr>  
                                    <td id="label">Choose the document types</td>
                                    <td >
                                        <select id="text" name="doc_type_id">
                                            <option  value="">Types of document</option>
                                            <option value="">
                                        </select>
                                    </td>   
                                </tr>
                                <tr>
                                    <td id="label">Document Heading</td>
                                    <td><input id="text" name="heading" type="text" /></td>
                                </tr>
                                <tr>
                                    <td id="label">Document Description</td>
                                    <td><input type="text" id="text" name="Description" ></td>
                                </tr>
                                <tr>
                                    <td id="label">Choose the category</td>
                                    <td ><select name="category" id="text">
                                            <option  value="">Types of document</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td id="label">Cost(INR):</td>
                                    <td><input id="text" name="cost" type="text" placeholder="0"/></td>
                                </tr>
                                <tr>
                                    <td id="label" style="font-weight: bold">Judgement Detail</td>

                                </tr>
                                <tr>
                                    <td id="label">Date</td>
                                    <td><input id="text" name="date" type="date" /></td>
                                </tr>
                                <tr>
                                    <td id="label">Case No.</td>
                                    <td><input id="text" name="case_no" type="text"/></td>
                                </tr>
                                <tr>
                                    <td id="label">Petitoner</td>
                                    <td><input id="text" name="petitoner" type="text" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Respondent</td>
                                    <td><input id="text" name="respondent" type="text" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Judge</td>
                                    <td><input id="text" name="judges" type="text" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Act</td>
                                    <td><input id="text" name="act" type="text" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td id="label"></td>
                                    <td><input type="file" name="docfile"  id="text"></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center"><input type="submit" name="submit" value="Submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<input type="button" name="cancel" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></td>
                                </tr>
                            </table>
                        </form>
                    </div><!--/category-tab-->
                </div>
            </div>
        </div>
</section>
