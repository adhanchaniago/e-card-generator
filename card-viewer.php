<?php // card-viewer.php
$pageTitle = "An eGreet Just For You";

require_once "inc/layout/header.inc.php";
require_once "inc/process/process-card-viewer.inc.php";

function setBackground($bgColor, $bgImage) {
    if ($bgImage == "none") {
        echo "background-color:{$bgColor};";
    } else {
        echo "background-image:url({$bgImage});";
    }
}

if (isset($_GET['card'])) {
    require_once "inc/layout/card-preview.inc.php";
}
?>




<?php require_once "inc/layout/footer.inc.php"; ?>