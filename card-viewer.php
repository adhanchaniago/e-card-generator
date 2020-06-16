<?php // card-viewer.php
$pageTitle = "An eGreet Just For You";

require_once "inc/layout/header.inc.php";

// include process-card-viewer.inc.php

?>

<div class="container-fluid container-two">
        <div class="row two">
            <div class="editor-container col-sm-12 col-md-9">
                <div id="editor" class="r-two__editor">
                    <div id="editor-greeting" class="editor__greeting"></div>
                    <div id="editor-message" class="editor__custom-message"></div>
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
    <script src="js/editor.js"></script>


<?php require_once "inc/layout/footer.inc.php"; ?>