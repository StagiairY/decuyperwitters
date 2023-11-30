<?php
include('include/header.php')
    ?>
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Contacteer Ons</h1>
            <p class="text-white text-center">
              <a href="index.php">Home</a>
              <span class="mx-2">/</span>
              <span>Contact</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="fname">Voornaam</label>
                <input type="text" id="fname" class="form-control form-control-lg">
              </div>
              <div class="col-md-6 form-group">
                <label for="lname">Achternaam</label>
                <input type="text" id="lname" class="form-control form-control-lg">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="eaddress">E-mailadres</label>
                <input type="text" id="eaddress" class="form-control form-control-lg">
              </div>
              <div class="col-md-6 form-group">
                <label for="tel">Telefoonnummer</label>
                <input type="text" id="tel" class="form-control form-control-lg">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Bericht</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <input type="submit" value="Verstuur Bericht" class="btn btn-primary rounded-0 px-3 px-5">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <h3>Contactgegevens</h3>
                <p><strong>Adres:</strong> Koningsbaan 40 - 2220 Heist-op-den-Berg</p>
                <p><strong>Telefoon:</strong> <a href="tel:015233237" target="_blank">015.23.32.37</a></p>
                <p><strong>E-mail:</strong> <a href="mailto:decuyper-gilbert@hotmail.com" target="_blank">decuyper-gilbert@hotmail.com</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Openingsuren</h3>
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Dag</th>
                    <th>Uren</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Maandag</td>
                    <td>gesloten</td>
                  </tr>
                  <tr>
                    <td>Dinsdag</td>
                    <td>08:30 - 12:00 / 13:00 - 18:00</td>
                  </tr>
                  <tr>
                    <td>Woensdag</td>
                    <td>08:30 - 12:00 / 13:00 - 18:00</td>
                  </tr>
                  <tr>
                    <td>Donderdag</td>
                    <td>08:30 - 12:00 / 13:00 - 18:00</td>
                  </tr>
                  <tr>
                    <td>Vrijdag</td>
                    <td>08:30 - 12:00 / 13:00 - 18:00</td>
                  </tr>
                  <tr>
                    <td>Zaterdag</td>
                    <td>08:30 - 12:00</td>
                  </tr>
                  <tr>
                    <td>Zondag en Feestdagen</td>
                    <td>gesloten</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1532.4879674980743!2d4.679626367058454!3d51.05058551047885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c15850a02dfbcf%3A0x79589e1ffc5187ab!2sKoningsbaan%2040%2C%202220%20Heist-op-den-Berg!5e0!3m2!1snl!2sbe!4v1701353178568!5m2!1snl!2sbe"
            height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php
include('include/footer.php')
?>