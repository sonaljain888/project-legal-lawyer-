<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab" align="center">LPO Traning</a></li>
                        </ul>
                    </div>
                    <table style="width:100%;">
                        <tr>
                            <?php
                        $lawyerMenus = Menu::getMenus(Validation::getAccessType(0), "LPO Training");
                          if (count($lawyerMenus)) {
                            foreach ($lawyerMenus as $key => $data) {
                          ?>
                            <td><a href="<?= $data["url"] ?>"><img src="<?php echo MENU_IMG_URL . "/" . $data['image'];?>" alt="disclaimer" width="80" height="80"><br/><br/><?= $data["name"] ?></a> </td>
                        <?php } }?>                            
                        </tr>
                    </table>
                    <p style="margin-top: 30px;"><img src="<?=USER_IMG_URL?>/home/image/20.jpg"/>
                        <b>FREE LPO TRAINING</b></p>
                    <hr style="border-top: 1px black dotted;"/>
                    <p><b>FREE </b>Click on the following topics to get started your free online LPO training. ALL RIGHTS RESERVED BY PATHLEGAL. Please do not copy the contents of this webpage to another website or distribute it electronically. </p>
                    <table width="500">
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" /> Legal Process Outsourcing</a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" /> Law Firm Management </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />  Litigation System - US </a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" /> Litigation System - UK </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />   Legal Writing & Drafting</a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" /> Contract Management </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" /> Intellectual Property </a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />  Copy Rights  </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />  LPO related Software and Tools </a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />  Litigation Coding </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />   Conveyancing </a>
                            </td>
                            <td>
                                <a href=""><img src="<?=USER_IMG_URL?>/home/image/rite.jpg" />   Electronic Conveyancing </a>
                            </td>
                        </tr>
                    </table>
                    <p>
                        Practicals are very important for the subjects, PathLegal can not deliver those practical sections for free as you need to work with the working LPO professionals. 
                    </p><br/>
                    <p>
                        Subject to the candidate availability PathLegal can conduct LPO Training program in the following cities, Kochi, Bangalore, Chennai, Hyderabad, Pune, Mumbai, Kolkata, Noida and Delhi.
                        Please write to pathlegal@gmail.com for more detail
                    </p>
                </div>
            </div>
            </section>
