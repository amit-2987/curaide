<footer class="footer-wrapper">
    <div class="footer-body">

      <!-- Logo -->
      <div class="footer-logo-wrap">
        <!-- Heart checkmark SVG logo -->
        <img src="/assets/footer-logo.png" alt="Curaide Footer Logo" class="img-fluid footer-logo">
      </div>

      <!-- Top divider -->
      <hr class="footer-divider" />

      <!-- Navigation Links -->
      <ul class="footer-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/#ecosystem">Ecosystem</a></li>
        <li><a href="/#pods">Curaide Pods</a></li>
        <li><a href="/#proof">Results</a></li>
        <li><a href="/#security">Security &amp; HIPAA</a></li>
        <!-- <li><a href="#">HIPAA</a></li> -->
        <!-- <li><a href="#">Security</a></li> -->
        <li><a href="/privacy-policy.php">Privacy Policy</a></li>
      </ul>

      <!-- Bottom divider -->
      <hr class="footer-divider-bottom" />

      <!-- Copyright -->
      <p class="footer-copyright">© 2026 Flatworld Solutions Inc. All rights reserved.</p>

      <!-- Scroll to top -->
      <button class="scroll-top-btn" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll to top">
        <svg viewBox="0 0 24 24">
          <polyline points="17 11 12 6 7 11" />
          <polyline points="17 18 12 13 7 18" />
        </svg>
      </button>

    </div>
  </footer>
  <!-- Demo & Download Modal -->
  <div class="modal fade curaide-modal" id="demoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content curaide-modal__content border-0 position-relative overflow-hidden">

        <!-- Close Button -->
        <button type="button" class="curaide-modal__close-btn" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x-lg"></i>
        </button>

        <div class="modal-body p-0">
          <div class="row g-0 align-items-stretch">

            <!-- Left Column: Nurse Image -->
            <div class="col-lg-5 d-none d-lg-block">
              <div class="curaide-modal__image-wrapper h-100">
                <img src="/assets/popup-imgV2.png" alt="Customer Support Representative" class="img-fluid h-100 object-fit-cover w-100">
              </div>
            </div>

            <!-- Right Column: Form -->
            <div class="col-lg-7 p-4 p-md-3 d-flex flex-column justify-content-center">
              <div class="text-center mb-4">
                <h3 class="curaide-modal__title mb-0">Contact us to schedule a Curaide demo or speak with our experts.</h3>
              </div>

              <form class="curaide-modal__form main-form">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <input type="text" class="form-control curaide-form-input" name="FirstName" placeholder="Full Name *" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="email" class="form-control curaide-form-input" name="Email" placeholder="Business Email *" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="tel" class="form-control curaide-form-input" name="phone" placeholder="Phone Number *" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control curaide-form-input" name="Company" placeholder="Company Name" required>
                     <input type="hidden" name="check-bot-entry" value="">
                    <input type="hidden" name="form-type" value="small-form" />
                    <input type="hidden" name="currentpage_url" value="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
                  </div>
                  <div class="col-12">
                    <textarea class="form-control curaide-form-input curaide-form-textarea" name="description" rows="4" placeholder="How can we help?"></textarea>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="curaide-btn curaide-btn--primary px-4 py-2">Submit Request</button>
                </div>
              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/infoemail-capturing-js-script.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer-js-script.php"; ?>
<script src="/js/form-handler-script.js?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/form-handler-script.js'); ?>"></script>