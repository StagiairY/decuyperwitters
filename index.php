<?php
include('include/header.php')
?>

    <div class="hero-slide owl-carousel site-blocks-cover pt-0 mt-0">
        <div class="intro-section"
             style="background-image: url('images/part1/agronomist-gardener-holding-organic-healthy-fresh-salad-showing-agricultural-businessman-discussing-vegetables-nutrition-hydroponics-greenhouse-plantation-concept-agriculture.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                        <h1>Landbouw is de beste oplossing voor wereldwijde honger</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section"
             style="background-image: url('images/part1/top-view-female-hands-holding-soil-plant.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Biologische groenten zijn goed voor de gezondheid</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section"
             style="background-image: url('images/part1/woman-holding-basket-full-different-vegetables.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Dagelijks verse producten aanbieden</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section"
             style="background-image: url('images/part1/farm-dedicated-producing-premium-chicken-goods.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Landbouw als passie</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>

        /* CSS for hover effect */
        .service-link:hover .service-1 {
            /* Add your hover styles here */
            border: 2px solid #0c8010; /* Change border color on hover */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add box shadow on hover */
        }


        @media (min-width: 768px) {
            .backgroundDrop {
                background-color: rgba(17, 107, 48, 0.3);
                color: white
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                border-radius: 50%;

            }

            .service-1 {

                margin: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                border-radius: 0%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: white;

            }

            .service-1:hover {
                z-index: 99;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
                /*transform: scale(1.1);*/
            }

        }

        @media (max-width: 768px) {


            /* CSS for hover effect and alternating background color */
            .col-lg-3:nth-child(even) .service-1 {
                background-color: #ffffff; /* Set the background color for even rows */
            }

            .col-lg-3:nth-child(odd) .service-1 {
                background-color: rgba(17, 107, 48, 0.3); /* Set the background color for odd rows to green */
            }

            .service-link:hover .service-1 {
                border: 2px solid #0c8010;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                z-index: 2;
            }
        }




        /* CSS for the section container */
        .section-container {
            display: flex;
            justify-content: space-between;
        }

        /* CSS for the section links */
        .section-link {
            text-decoration: none;
            color: #333; /* Change the text color as needed */
            text-align: center;
            flex-grow: 1;
            position: relative;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }

        /* CSS for the section background images */
        .section-bg {
            transform: scale(1.02);
            width: 100%;
            height: 600px;
            background-size: cover;
            background-position: center;
            transition: transform 0.2s ease-in-out, filter 0.2s ease-in-out;
            filter: blur(5px); /* Initial blur value, adjust as needed */
            color:white;
        }

        /* CSS for the section links */
        .section-link:hover .section-bg {
            transform: scale(1); /* Zoom out to original size */
            filter: blur(0); /* Remove blur on hover */
        }



        /* CSS for the "Dieren" section background */
        .section-dieren {
            background-image: url('images/part1/animal_lamb.jpg');
        }

        /* CSS for the "Huis en Tuin" section background */
        .section-huis-en-tuin {
            background-image: url('images/part1/beautiful-woman-works-garden-near-house.jpg');
        }

        /* CSS for the section title */
        .section-title-custom {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(3, 101, 18, 0.8);
            padding: 10px 20px;
            border-radius: 1px;
            transition: background 0.2s ease-in-out;
        }

        /* CSS for hover effect on section link */
        .section-link:hover {
            transform: scale(1.05);
            z-index: 1;

        }

        /* CSS for hover effect on section title */
        .section-link:hover .section-title {
            background: rgba(255, 255, 255, 1);
            color: #0a391b;
        }



    </style>




<!--    <div id="diensten" class="section-container">-->
<!--        <a href="#dieren" class="section-link">-->
<!--            <div class="section-bg section-dieren"></div>-->
<!--            <h3 class="section-title section-title-custom ">Dieren</h3>-->
<!--        </a>-->
<!--        <a href="#huis-en-tuin" class="section-link">-->
<!--            <div class="section-bg section-huis-en-tuin"></div>-->
<!--            <h3 class="section-title section-title-custom ">Huis en Tuin</h3>-->
<!--        </a>-->
<!--    </div>-->


    <!--Dieren Summary-->
    <div id="dieren" class="site-section services-1-wrap ">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-7">
                    <h3 class="section-subtitle">- dieren -</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <a href="./Rundvee.php" class="service-link">
                        <div class="service-1 backgroundDrop" style=" background-image: url('images/part1/12699097_Group happy farmers keeping cow and poultry.jpg')">
                            <span class="number">01</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/cow.png" alt="Afbeelding koe" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Rundvee</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <a href="./Paarden.php" class="service-link">
                        <div class="service-1 ">
                            <span class="number">02</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/horse.png" alt="Afbeelding paard" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Paarden</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Kleine_hoefdieren.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">03</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/sheep.png" alt="Afbeelding-shaap" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Kleine hoefdieren</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Stalstrooisel.php" class="service-link">
                        <div class="service-1">
                            <span class="number">04</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/hay.png" alt="Afbeelding-hooi" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Stalstrooisel</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Neerhofdieren.php" class="service-link">
                        <div class="service-1">
                            <span class="number">05</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/duck.png" alt="Afbeelding-eend" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Neerhofdieren</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Honden_en_katten.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">06</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/pets.png" alt="Afbeelding-cat-en-hond" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Honden en katten</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Duiven.php" class="service-link">
                        <div class="service-1">
                            <span class="number">07</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/pigeon.png" alt="Afbeelding-duif" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Duiven</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Vogels.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">08</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/footprint.png" alt="Afbeelding-vogel-voetprint"
                                     class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Vogels</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <!--huis en tuin-->
    <div id="huis-en-tuin" class="bg2 site-section services-1-wrap">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-7">
                    <h3 class="section-subtitle"> - huis en tuin -</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <a href="./Meststoffen.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">01</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/npk.png" alt="Afbeelding-meststof" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Meststoffen</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Potgrond.php" class="service-link">
                        <div class="service-1">
                            <span class="number">02</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/shovel.png" alt="Afbeelding-schep-potgrond"
                                     class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Potgrond</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Boomschors.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">03</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/bark.png" alt="Afbeelding-boom-schors" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Boomschors</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Graszaden.php" class="service-link">
                        <div class="service-1">
                            <span class="number">04</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/grass.png" alt="Afbeelding-grass" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Graszaden</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Sproeistoffen.php" class="service-link">
                        <div class="service-1">
                            <span class="number">05</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/fertilizer.png" alt="Afbeelding-spray-fertilizer"
                                     class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Sproeistoffen</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Tuingereedschap.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">06</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/garden-tools.png" alt="Afbeelding-garden-tools"
                                     class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Tuingereedschap</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Zaden_en_planten.php" class="service-link">
                        <div class="service-1">
                            <span class="number">07</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/seeds.png" alt="Afbeelding-seeds" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Zaden en planten</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Laarzen_en_Jolly's.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">08</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/boots.png" alt="Afbeelding-laarzen" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Laarzen en Jolly's</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Weide_afsluiting.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">09</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/fence.png" alt="fence" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Weide afsluiting</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Antargaz.php" class="service-link">
                        <div class="service-1 ">
                            <span class="number">10</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/propane.png" alt="Afbeelding-propane-fles"
                                     class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Antargaz</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./Houtpellets.php" class="service-link">
                        <div class="service-1 backgroundDrop">
                            <span class="number">11</span>
                            <div class="service-1-icon">
                                <img src="images/part1/Icons/wood.png" alt="Afbeelding-hout" class="img-fluid">
                            </div>
                            <div class="service-1-content">
                                <h3 class="service-heading">Houtpellets</h3>
                                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>





    <div class="site-section pb-0">
        <div class="block-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="images/part1/female-farmer-working-greenhouse.jpg" alt="Afbeelding-farmer"
                             class="img-fluid img-overlap">
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h3 class="section-subtitle text-white opacity-50">Waarom Voor Ons Kiezen</h3>
                        <h2 class="section-title mb-4">Meer dan <strong>50 jaar ervaring</strong> in de
                            landbouwindustrie
                        </h2>
                        <p class="opacity-50">Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima
                            nostrum perspiciatis error consequatur sit nulla.</p>

                        <div class="row my-5">
                            <div class="col-lg-12 d-flex align-items-start mb-4">
                                <span class="icon-leaf mr-4 display-4"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Altijd Verse Voeding</h4>
                                    <p class="text-white opacity-50">Bij De Cuyper Witters vindt u altijd verse
                                        dierenvoeding en tuinbenodigdheden.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-start mb-4">
                                <span class="icon-lemon-o mr-4 display-4"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Biologische Producten</h4>
                                    <p class="text-white opacity-50">Ons assortiment omvat ook biologische producten
                                        voor dier en tuin.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-start">
                                <span class="icon-dashboard mr-4 display-4"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Gezondere Bodem</h4>
                                    <p class="text-white opacity-50">Met onze professionele ervaring helpen we u de
                                        juiste keuzes te maken voor een gezondere bodem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END block-2 -->

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <a data-fancybox href="#" class="video-1">
                        <span class="play"><span class="icon-play"></span></span>
                        <img src="images/part1/portrait-senior-hardworking-farmer-agronomist-corn-field-checking-crops-before-harvest.jpg"
                             alt="Afbeelding" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <h2 class="text-primary mb-4">Planten Verbeteren Je Leven</h2>
                    <p class="mb-4">Bij De Cuyper Witters geloven we dat planten niet alleen de schoonheid van je
                        omgeving verhogen, maar ook je levenskwaliteit verbeteren. Onze passie voor groen inspireert ons
                        om hoogwaardige planten en producten aan te bieden die bijdragen aan een gezondere en
                        gelukkigere levensstijl.</p>
                    <ul class="list-unstyled  primary custom-bullet-list">
                        <li>Ontdek de schoonheid van de natuur</li>
                        <li>Verrijk je omgeving met groen</li>
                        <li>Ervaar de voordelen van planten</li>
                    </ul>

                    <p><a href="contact.php" class="btn btn-primary">Neem contact met ons op</a></p>
                </div>
            </div>
        </div>
    </div>


    <!---->
    <!--    <div class="site-section testimonial-wrap">-->
    <!--        <div class="container">-->
    <!--            <div class="row justify-content-center">-->
    <!--                <div class="col-12 mb-5 text-center">-->
    <!--                    <h3 class="section-subtitle">Testimonial</h3>-->
    <!--                    <h2 class="section-title text-black mb-4">What Clients Say...</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6 mb-4 mb-md-0">-->
    <!--                    <div class="testimonial">-->
    <!--                        <img src="images/person_3.jpg" alt="">-->
    <!--                        <blockquote>-->
    <!--                            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto-->
    <!--                                molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>-->
    <!--                        </blockquote>-->
    <!--                        <p class="client-name">James Smith</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-6 mb-4 mb-md-0">-->
    <!--                    <div class="testimonial">-->
    <!--                        <img src="images/person_4.jpg" alt="">-->
    <!--                        <blockquote>-->
    <!--                            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto-->
    <!--                                molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>-->
    <!--                        </blockquote>-->
    <!--                        <p class="client-name">Kate Smith</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!---->
    <!--    <div class="site-section bg-light">-->
    <!--        <div class="container">-->
    <!--            <div class="row justify-content-center">-->
    <!--                <div class="col-12 mb-5 text-left">-->
    <!--                    <h3 class="section-subtitle">Blog</h3>-->
    <!--                    <h2 class="section-title text-black mb-4">News &amp; Updates</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
    <!--                    <div class="blog-entry">-->
    <!--                        <a href="#" class="img-link">-->
    <!--                            <img src="images/img_sq_1.jpg" alt="Image" class="img-fluid">-->
    <!--                        </a>-->
    <!--                        <div class="blog-entry-contents">-->
    <!--                            <h3><a href="#">Farmers Prioritize Biodiversity on their Land</a></h3>-->
    <!--                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
    <!--                    <div class="blog-entry">-->
    <!--                        <a href="#" class="img-link">-->
    <!--                            <img src="images/img_sq_3.jpg" alt="Image" class="img-fluid">-->
    <!--                        </a>-->
    <!--                        <div class="blog-entry-contents">-->
    <!--                            <h3><a href="#">Farmers Prioritize Biodiversity on their Land</a></h3>-->
    <!--                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
    <!--                    <div class="blog-entry">-->
    <!--                        <a href="#" class="img-link">-->
    <!--                            <img src="images/img_sq_4.jpg" alt="Image" class="img-fluid">-->
    <!--                        </a>-->
    <!--                        <div class="blog-entry-contents">-->
    <!--                            <h3><a href="#">Farmers Prioritize Biodiversity on their Land</a></h3>-->
    <!--                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->


<?php
//include ('include/cta_nieuwsBrief.php')
//?>


<?php
include('include/footer.php')
?>