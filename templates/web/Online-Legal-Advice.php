
<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab lawyer-details-tab">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab" align="center">Online-Legal-Advice</a></li>
                        </ul>
                    </div>
                    <form style="border: 1px black;" action="" method="POST">
                        <input type="hidden" name="action" value="addquestion">
                            <input type="hidden" name="type" value="question">
                        <table height="650px;">
                            <tr><td><input type="text" name="question" value="" id="second_td" style="display:none;"/></td></tr>
                            <tr>
                                <td id="first_td">Describe your Question/Problem (Min 60 characters) : </td>
                                <td><textarea id="teatarea_td" name="question" placeholder="Describe your Question/Problem (Min 60 characters)"></textarea></td>
                            </tr>
                            <tr>
                                <td id="first_td">Heading (Min 20 characters) : </td>
                                <td><input type="text" id="second_td" name="heading" placeholder="Provide an appropriate heading for your question (minimum 20 characters)"/></td>
                            </tr>
                            <tr>
                                <td id="first_td">Topic : </td>
                                <td><select id="second_td" name="topic_id">
                                        <option value="">--Select Topic--</option>
                                         <?php
                            $topicObj = new Topic();
                            $rows = $topicObj->getAll();
                            foreach ($rows as $row) {
                                ?> 
                                        <option value="<?php echo $row['topic_id']; ?>"><?php echo $row['topic']; ?></option>
                                        <?php }?>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td id="first_td"> City : </td>
                                <td> <select required="" name="city" class="form-control">
                                        <option value="">--Select City--</option>
                                        <?php
                                        
                                            $cityObj = new City();
                                            $rows=$cityObj->getAll();
                                            foreach ($rows as  $row) {
                                             ?>
                                           <option value="<?= $row['id'] ?>"><?= $row['name'] ?> </option>
                                           <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="center"><input type="submit" name="submit" value="Submit" id="submit-btn" />&nbsp;&nbsp;&nbsp;
                                    <a href="question.php"><input type="button" value="Cancel" id="cancel-btn" /></a></td>
                            </tr>
                        </table>
                    </form>
                    <p><b>Note : </b>Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below. </p>
                </div>
            </div>
            </section>
