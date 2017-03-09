<?php
//Set the page title
$title = 'ICF Builders Inc.';
$customStylesheet = "<link rel='stylesheet' href='styles/home.css'>";
//Header portion of the page
include 'header.php';
/*PAGE MAIN CONTENT*/
?>

<div id="container-fluid">
    <div id="front-img">
        <img src="images/frontImage.jpg" alt="frontimg" />
    </div>
</div>

<div class='container'>


    <div class="row">

        <div class="featuredCardWrapper">
            <div class="quote-request-button">
                <a href='contact.php?c=quote' class="btn btn-default">Request a Quote</a>
            </div>
            <div class="col-sm-4 card featuredCard">
                <img src="images/logix_logo.png" alt="Logix Logo" />
                <h2>Logix Insulated Concrete Forms</h2>
                <img src="images/logix_product.png" alt="Logix Product" />
                <p>Here is a bunch of more info on what this product does and how we are awesome at using it!</p>

            </div>

            <div class="col-sm-4 card featuredCard">
                <img src="images/canam_logo.png" alt="Canam Logo" />
                <h2>Hambro Composite Floor System</h2>
                <img src="images/hambro_product.png" alt="Logix Product" />
                <p>Here is a bunch of more info on what this product does and how we are awesome at using it!</p>
            </div>

            <div class="col-sm-4 card featuredCard">
                <img src="images/fortruss_logo.png" alt="Canam Logo" />
                <h2>Fortruss<br />&nbsp;</h2>
                <img src="images/fortruss_product.png" alt="Logix Product" />
                <p>Here is a bunch of more info on what this product does and how we are awesome at using it!</p>
            </div>
        </div>

    </div>

</div>

<hr />






<?php	
/*END OF PAGE CONTENT*/
//Foot portion of the page
include 'footer.php';

?>