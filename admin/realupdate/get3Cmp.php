<?php
    include '../includes/CollectionOfComplains.inc.php';
    $cltOfCmp = new CollectionOfComplains;
    $cmps = $cltOfCmp->getLast3complainAdmin();
    foreach ($cmps as $key => $cmp) {
?>
    <li>
    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
        <li>
        <a href="viewComplain.php" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
            <div class="peer mR-15">
            <span class="icon-holder">
                <i class="c-brown-500 ti-email"></i>
            </span>
            </div>
            <div class="peer peer-greed">
            <div>
                <div class="peers jc-sb fxw-nw mB-5">
                <div class="peer">
                    <p class="fw-500 mB-0">Station : &nbsp;<?php echo $cmp['station'];?></p>
                </div>
                <div class="peer">
                    <small class="fsz-xs"><?php echo $cmp['complainTime'];?></small>
                </div>
                </div>
                <span class="c-grey-600 fsz-sm">
                <?php echo $cmp['title'];?>...
                </span>
            </div>
            </div>
        </a>
        </li>
    </ul>
    </li>
<?php
    }
?>