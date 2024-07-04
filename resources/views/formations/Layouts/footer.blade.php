<footer id="footer" class="footer position-relative">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">OFPPT</span>
          </a>
          <div class="pt-3 footer-contact">
            <p>Casablanca</p>
            <p>Casablanca</p>
            <p class="mt-3"><strong>Phone:</strong> <a href="tel:+212522634444">05 22 63 44 44 / 05 22 62 07 49</a></p>
            <p><strong>Email:</strong> <a href="mailto:contact@ofppt.ma">contact@ofppt.ma</a></p>
        </div>

          <div class="mt-4 social-links d-flex">
            <a href="https://x.com/i/flow/login?redirect_after_login=%2Fofppt_officiel" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://web.facebook.com/ofppt.page.officielle/?_rdc=1&_rdr" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ofppt.officiel/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://ma.linkedin.com/company/ofpptpageofficielle" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('formations.index') }}">Home</a></li>
            <li><a href="{{ route('formations.about') }}">About us</a></li>
            <li><a href="{{ route('formations.formations') }}">Nos Formations</a></li>
            <li><a href="{{ route('formations.events') }}">Prochains Événements</a></li>
            <li><a href="{{ route('formations.contact') }}">Nous contactez</a></li>
            <li><a href="generate-qrcode">QrCode</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

  </footer>
