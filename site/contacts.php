<?php include "header.php";?>
<div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Контакти</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="thank.php" class="contact-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">Ваше ім'я</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">Ваше прізвище</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Email адрес</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label class="text-black" for="message">Повідомлення</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="5" name="message" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Надіслати</button>
          </form>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-house"></span>
            <address class="text">
              155 Market St #101, Paterson, NJ 07505, United States
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-phone-call"></span>
            <a href="tel:+380987654321"><address class="text">
              +38 (098) 765 4321
            </address></a>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-mail"></span>
            <a href="mailto:info@exdomain.com"><address class="text">
              info@exdomain.com
            </address></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "footer.php";?>