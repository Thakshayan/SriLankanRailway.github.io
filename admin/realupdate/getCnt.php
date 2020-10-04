<?php
    session_start();
    include '../includes/CollectionOfComplains.inc.php';
    $cltOfCmp = new CollectionOfComplains;
    $ntfyCnt = $cltOfCmp->countUnseenComplains();
    if ($ntfyCnt > 0 && !@$_SESSION['ntfyPlayed']) {
        echo '<script type="text/javascript"> playNotification('.$ntfyCnt.'); </script>';
        $_SESSION['ntfyPlayed'] = true;
    }
    echo $ntfyCnt;
?>