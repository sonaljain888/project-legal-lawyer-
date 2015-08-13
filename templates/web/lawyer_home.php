<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">
                <?php
                foreach ($pageCnt as $key => $data) {
                    if ($key % 4 == 0 || $key == 0) {
                        ?>
                        <div class="row">
                            <?php
                        }
                        ?>
                        <div class="col-xs-3"  >
                            <div class="lawyer-image-wrapper">
                                <div class="single-lawyer">
                                    <div class="lawyerinfo text-center">
                                        <img  alt="<?= $data["name"] ?>" rel="<?= $data["name"] ?> logo" name="<?= $data["name"] ?>"
                                              src="<?php echo MENU_IMG_URL . "/" . $data['image']; ?>" width="80px"height="75px"></br>
                                        <a class="btn btn-default"  href="<?= SERVER_URL ."/".  $data["url"] ?>"><?= $data["name"] ?> </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        if ($key % 4 == 3 && $key > 0) {
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>