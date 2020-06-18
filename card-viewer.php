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
?>

<div class="container-fluid container-two">
    <div class="row two">
        <div class="editor-container col-sm-12 col-md-9">
            <div style="<?php setBackground($row['bg_color'], $row['bg_image']); ?>" id="editor" class="r-two__editor">
                <div id="editor-greeting" class="editor__greeting">
                    <h1 style="color:<?=$row['greeting_color']?>;" class="viewer__greeting"><?=$row['greeting_option']?></h1>
                </div>
                <div id="editor-message" class="editor__custom-message viewer__custom-greeting-container">
                    <p class="viewer__custom-greeting" style="color:<?=$row['message_color']?>;"><?=$row['custom_greeting']?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 r-two__options">
            <div class="call-to-action">
                <h1>Want to make your own card?</h1>
                <p>eGreet allows you to build your own custom cards.</p>
                <button class="btn btn-dark btn-cta">Send A Card</button>
            </div>
        </div>
    </div>
</div>


<?php require_once "inc/layout/footer.inc.php"; ?>