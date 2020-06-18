<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1 class="user-greet mt-5 text-center">Hello, <?= $_SESSION['first_name'];?>!</h1>
        </div>
        <div class="col-sm-12 col-md-12 user-gallery">
            <div class="card-URL-container">
                <div id="cardURL"></div>
            </div>
        </div>
    </div>
</div>

<script src="js/getCards.js"></script>
