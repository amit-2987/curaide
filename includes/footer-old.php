<!-- Start Footer Code -->
<footer class="telenok-footer pt-5">
 <div class="container py-5">
  <!-- Top Subscribe Row -->
  <div class="row align-items-center mb-1">
   <div class="col-lg-6 col-xl-6 col-md-4 mb-3 mb-lg-0">
    <img src="images/footer-logo.webp" alt="Telenok" class="footer-logo">
   </div>
   <div class="col-lg-6 col-xl-6 col-md-8 text-lg-end">
    <h6 class="mb-2">Stay in Touch</h6>
    <div class="subscribe-box ms-lg-auto">
     <input type="email" placeholder="Email Address...">
     <button>Subscribe</button>
    </div>
   </div>
  </div>
  <hr class="footer-divider">
  <!-- Main Content -->
  <div class="row gy-4">
   <div class="col-lg-6 col-xl-6 col-md-12">
    <h4 class="mb-3">Our Mission</h4>
    <p>
     As support volumes rise, adding agents no longer improves the customer
     experience. Telenok removes the cost imbalance by resolving routine,
     revenue-sensitive interactions instantly, accurately, and at scale.
    </p>
    <div class="social-icons pt-5 py-0">
     <h6 class="mt-4">SOCIAL MEDIA</h6>
     <a href="#"><i class="fa fa-facebook"></i></a>
     <a href="#"><i class="fa fa-instagram"></i></a>
     <a href="#"><i class="fa fa-twitter"></i></a>
     <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
   </div>
   <div class="col-lg-2 col-xl-2 col-md-4">
    <h6>Platform</h6>
    <ul>
     <li><a href="#">Overview</a></li>
     <li><a href="#">How It Works</a></li>
     <li><a href="#">Use Cases</a></li>
     <li><a href="#">Integrations</a></li>
    </ul>
   </div>
   <div class="col-lg-2 col-xl-2 col-md-4">
    <h6>Enterprise</h6>
    <ul>
     <li><a href="#">Security & Governance</a></li>
     <li><a href="#">Deployment</a></li>
     <li><a href="#">Customers</a></li>
     <li><a href="#">Industries</a></li>
    </ul>
   </div>
   <div class="col-lg-2 col-xl-2 col-md-4">
    <h6>My Account</h6>
    <ul>
     <li><a href="#">My Login</a></li>
     <li><a href="#">My Account</a></li>
     <li><a href="#">Contact Us</a></li>
    </ul>
   </div>
  </div>
  <!-- Contact Strip -->
  <div class="row contact-strip mt-5 text-center text-lg-start">
   <div class="col-lg-4 col-xl-4 col-md-4 mb-3">
    <div class="d-flex align-items-start footer-contact-top">
     <i class="fa fa-phone"></i>
     <div class="footer-contact">
      <span>Call Us Now</span>
      <p class="mb-0">+1 (321) 546-8790</p>
     </div>
    </div>
   </div>
   <div class="col-lg-4 col-xl-4 col-md-4 mb-3">
    <div class="d-flex align-items-start footer-contact-top">
     <i class="fa fa-envelope"></i>
     <div class="footer-contact">
      <span>Email</span>
      <p class="mb-0">info@telenok.ai</p>
     </div>
    </div>
   </div>
   <div class="col-lg-4 col-xl-4 col-md-4">
    <div class="d-flex align-items-start footer-contact-top">
     <i class="fa fa-map-marker"></i>
     <div class="footer-contact">
      <span>Address</span>
      <p class="mb-0">116 Village Blvd, Suite 200, Princeton, NJ 08540</p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Bottom Bar -->
 <div class="footer-bottom pt-3">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
   <span>© 2026 Telenok. All Rights Reserved</span>
   <div>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms</a>
    <a href="#">Accessibility</a>
   </div>
  </div>
 </div>
</footer>
<!-- End Footer Code -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
 var $owl = $('.feature-carousel');
 $owl.owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  dots: false,
  responsive: {
   0: { items: 1 },
   768: { items: 2 },
   1200: { items: 3 }
  }
 });
/* Update dots on slide change */
 $owl.on('changed.owl.carousel', function(event) {
  var index = event.item.index - event.relatedTarget._clones.length / 2;
  var count = event.item.count;
  index = ((index % count) + count) % count;
  $('.progress-bar-wrap .dot')
  .removeClass('active')
  .eq(index)
  .addClass('active');
 });
/* Nav buttons */
 $('.nav-next').click(function () {
  $owl.trigger('next.owl.carousel');
 });
 $('.nav-prev').click(function () {
  $owl.trigger('prev.owl.carousel');
 });
</script>
<script>
 $('.timeline-carousel').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  dots: false,
  navText: [
   '<span class="nav-btn prev">←</span>',
   '<span class="nav-btn next">→</span>'
   ],
  responsive: {
   0: { items: 2 },
   768: { items: 2 },
   1200: { items: 4 }
  }
 });
</script>
</body>
</html>
