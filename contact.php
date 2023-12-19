<?php
include('include/header.php')
?>




    <div class=" pt-0 mt-0 intro-section site-blocks-cover innerpage"
         style="height: 600px; background-image: url('images/part1/cows-grazing-around-farm.jpg');">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 mt-5" data-aos="fade-up">
                    <h1>Contacteer Ons</h1>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="fname">Voornaam</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Achternaam</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="eaddress">E-mailadres</label>
                                <input type="email" id="eaddress" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="tel">Telefoonnummer</label>
                                <input type="tel" id="tel" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="message">Bericht</label>
                                <textarea id="message" class="form-control"  style="height: 221px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill px-4">Verstuur Bericht</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <!-- Contactgegevens -->
                    <div class="card border-primary mb-4">
                        <div class="card-header bg-primary text-white">Contactgegevens</div>
                        <div class="card-body text-primary">

                            <p class="card-text"><strong>Adres:</strong> Koningsbaan 40 - 2220 Heist-op-den-Berg</p>
                            <p class="card-text"><strong>Telefoon:</strong> <a href="tel:015233237" class="text-primary">015.23.32.37</a></p>
                            <p class="card-text"><strong>E-mail:</strong> <a href="mailto:info@decuyper-gilbert.be" class="text-primary">decuyper-gilbert@hotmail.com</a></p>
                        </div>
                    </div>

                    <!-- Openingsuren -->
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">Openingsuren</div>
                        <div class="card-body text-primary">
                            <ul class="list-unstyled card-text">
                                <li><strong>Maandag:</strong> gesloten</li>
                                <li><strong>Dinsdag t/m Vrijdag:</strong> 08:30 - 12:00 / 13:00 - 18:00</li>
                                <li><strong>Zaterdag:</strong> 08:30 - 12:00</li>
                                <li><strong>Zondag en Feestdagen:</strong> gesloten</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1532.4879674980743!2d4.679626367058454!3d51.05058551047885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c15850a02dfbcf%3A0x79589e1ffc5187ab!2sKoningsbaan%2040%2C%202220%20Heist-op-den-Berg!5e0!3m2!1snl!2sbe!4v1701353178568!5m2!1snl!2sbe"
            height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php
include('include/footer.php')
?>