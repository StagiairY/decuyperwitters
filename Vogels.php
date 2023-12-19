<?php
include('include/header.php')
?>
<h1>Vogels</h1>

<div id="main">


    <style>
        #imageCarousel .carousel-inner img {
            height: 300px; /* Set your desired fixed height */
            object-fit: cover; /* Preserve aspect ratio and cover the whole area */
        }
    </style>


    <!-- HEADER / NAV CONTENT-->


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1></a>VOGELVOEDERS</h1>
                        <h2>Beduco - Deli Nature</h2>
                        <p>Wij verkopen de zeer alom hoge kwaliteitszaden van Deli Nature, zowel enkelvoudige als Deli
                            Nature als samengestelde mengelingen</p>
                        <p>Ook hebben wij onze eigen samengestelde mengelingen voor wilde- en natuurvogels<br>Verpakt in
                            zakken van 1kg - 2.5kg - 5kg en volledige zakken van 15kg tot 20kg<br><br></p>
                        <h2>Bijproducten en toebehoren voor vogels</h2>
                        <ul style="list-style-type: disc;">
                            <li>Schelpenzand, wit en bruin van Ostrea.</li>
                            <li>Verschillende soorten eivoeders in grote en kleine verpakkingen.</li>
                            <li>Alle soorten eetbakjes en drinkflessen, nestmateriaal, ...<br><br></li>
                        </ul>
                        <h2><strong>Meer info nodig?</strong></h2>
                        <p>Neem telefonisch contact met ons op, op het nummer 015/23.32.37 of stuur een bericht via de
                            <a href="contact.php">contactpagina</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://www.decuyperwitters.be/UPLOAD/2_beduco.png" alt="logo" class="d-block w-20">
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.decuyperwitters.be/UPLOAD/2_gen_d__vyr_4140-20KG.jpg" alt="gen_d__vyr_4140-20KG.jpg"
                             class="d-block w-20">
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.decuyperwitters.be/UPLOAD/2_delinature.jpg" alt="delinature.jpg" class="d-block w-20">
                    </div>
                    <div class="carousel-item">
                        <a class="popup" href="http://www.decuyperwitters.be/UPLOAD/2_Vogels_1.JPG">
                            <img src="http://www.decuyperwitters.be/UPLOAD/3_Vogels_1.JPG" alt="Vogels_1.JPG" class="d-block w-20">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="popup" href="http://www.decuyperwitters.be/UPLOAD/2_Vogels_2.JPG">
                            <img src="http://www.decuyperwitters.be/UPLOAD/3_Vogels_2.JPG" alt="Vogels_2.JPG" class="d-block w-20">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- FOOTER CONTENT-->

</div>
<?php
include('include/footer.php')
?>
