<?php
include('include/header.php')
?>
<h1>Honden en katten</h1>

<style>
    .inline-galery {
        display: flex;
        overflow-x: auto;
    }

    .inline-galery a {
        margin-right: 10px;
    }

    .inline-galery img {
        border: 2px solid #ddd;
        border-radius: 5px;
        cursor: pointer;
        width: 200px;
    }
</style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title"><a href="index.php#diensten">DIEREN / </a> HONDEN EN KATTENVOEDERS</h1>
                        <p class="card-text">Hondenbrokken van verschillende merken in verschillende verpakkingen van 4kg – 5kg en grote zakken van 15kg.</p>
                        <p class="card-text">Zeer smakelijke kattenbrokjes in verpakkingen van 5kg en 15kg.</p>
                        <p class="card-text">Ook verschillende toebehoren verkrijgbaar zoals speeltjes, kattenbakvulling, enz.</p>
                        <p class="card-text">Eigen fabricatie van dieren hokken: Hondenslaaphokken, kippenhokken, konijnenhokken, ook op maat gemaakt.</p>
                        <div class="container mt-3">
                            <div id="smallImageCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="popup">
                                            <img class="foto" src="images/old/2_Honden_en_katten_eten_1.jpg"
                                                 alt="eigengemaakte_kippenhokken_1.JPG" width="220" height="220">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="popup" >
                                            <img class="foto" src="images/old/2_Honden_en_katten_eten_2.jpg"
                                                 alt="eigengemaakte_kippenhokken_2.JPG" width="220" height="220">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="popup" >
                                            <img class="foto" src="images/old/2_Honden_en_katten_eten_3.jpg"
                                                 alt="eigengemaakte_kippenhokken_3.JPG" width="220" height="220">
                                        </a>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#smallImageCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#smallImageCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="inline-galery">&nbsp;</div>
                        <h2><strong>Meer info nodig?</strong></h2>
                        <p>Neem telefonisch contact met ons op, op het nummer 015/23.32.37 of stuur een bericht via de <a href="contact.php">contactpagina</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('include/footer.php')
?>
