<?php // card-editor.php 
$pageTitle = "Edit Your Card";
require_once "inc/layout/header.inc.php";
session_start();
?>

    <div class="container-fluid container-two">
        <div class="row two">
            <div class="col-sm-12 col-md-4 r-two__options">
            <div class="form-group">
                    <label for="greeting"><span class="arrows">>></span> Select a greeting</label>
                    <select data-greeting multiple class="form-control" id="greeting">
                        <option class="greeting-option" value="1">Happy Birthday!</option>
                        <option class="greeting-option" value="2">Get Well</option>
                        <option class="greeting-option" value="3">Thinking of You</option>
                        <option class="greeting-option" value="4">Thank you!</option>
                        <option class="greeting-option" value="5">Happy Anniversary!</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="greet-color"><span class="arrows">>></span> Choose a greeting color</label>
                    <input data-color-greet type="color" id="greet-color">
                </div>

                <div class="form-group">
                    <label for="custom-greeting"><span class="arrows">>></span> Enter your own message</label>
                    <textarea data-custom-greeting class="form-control" id="custom-greeting" rows="3"
                        maxlength="700"></textarea>
                </div>

                <div class="form-group">
                    <label for="msg-color"><span class="arrows">>></span> Choose a message color</label>
                    <input data-color-msg type="color" id="msg-color">
                </div>

                <div class="bg-container">
                    <p class="bg-label"><span class="arrows">>></span> Choose a background image</p>
                    <div class="bg-options">
                        <div class="bg-option opt-one">
                            <img class="bg-image" src="img/white-network-jj-ying-unsplash.jpg"
                                alt="card background">
                        </div>

                        <div class="bg-option opt-two">
                            <img class="bg-image" src="img/white-splash-henry-co-unsplash.jpg"
                                alt="card background">
                        </div>

                        <div class="bg-option opt-three">
                            <img class="bg-image" src="img/feathers-evie-s-unsplash.jpg" alt="card background">
                        </div>

                        <div class="bg-option opt-three">
                            <img class="bg-image" src="img/grey-melt-markus-spiske-unsplash.jpg"
                                alt="card background">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bg-color"><span class="arrows">>></span> <span class="or">OR</span> Choose a
                        background color</label>
                    <input data-color type="color" id="bg-color">
                </div>

                <div class="control-btns" role="group">
                    <label for="controlbuttons"><span class="arrows">>></span> You're ready to save and share!</label>
                    <div>
                        <button id="saveAndShare" class="btn btn-dark controlbuttons">Save & Share</button>
                        <div class="share-url-container">
                            <p id="displayShareURL"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="editor-container col-sm-12 col-md-8">
                <div id="editor" class="r-two__editor">
                    <div id="editor-greeting" class="editor__greeting"></div>
                    <div id="editor-message" class="editor__custom-message"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/editor.js"></script>
<?php require_once "inc/layout/footer.inc.php"; ?>