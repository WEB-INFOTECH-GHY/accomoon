<!-- footer -->
<footer class="footer-bg footer-p">
    <div class="footer-top  pt-50 pb-40" style="background-color: #644222; background-image: url(img/bg/footer-bg.png);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title mb-30">
                            <img src="image/logo2.jpeg" alt="img">
                        </div>
                        <p>Accomoon Hillside Homes is more than a stay — it’s an experience. </p>
                       <div class="footer-social">
                        <a href="https://www.facebook.com/profile.php?id=61577826461559" target="_blank"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.facebook.com/profile.php?id=61577795767154" target="_blank;" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/accomoonhotels?utm_source=qr&igsh=MXBvMjgwc3R3ZG95NA==" target="_blank"><i class="fab fa-instagram"></i></a>
                       <a href="https://www.makemytrip.com/hotels/hotel-details?hotelId=202507030022197581&checkin=date_3&checkout=date_4&country=IN&city=CTBDL&roomStayQualifier=2e0e&openDetail=true&currency=ENG&region=IN&checkAvailability=true&locusId=CTBDL&locusType=city&homestay=true&zcp=51579cec1e22" target="_blank;" title="MakemyTrip"> <img src="image/11.png" alt="logo">  </a>
                       
                             <a href="https://www.booking.com/Pulse-f7h9yA" target="_blank"><img src="image/12.png" alt="logo"> </a>
                    </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Our Links</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php"> About Us</a></li>
                                <li><a href="rooms.php"> Our Rooms</a></li>
                                <li><a href="contact.php"> Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="f-contact">
                            <ul>
                                   <li>
                                    <i class="icon fal fa-map-marker-check"></i>
                                    <span>Sangti , Dirang, Bomdila, West Kameng <br> Arunachal Pradesh-790101</span>
                                </li>
                                <li>
                                    <i class="icon fal fa-phone"></i>
                                    <span><a href="tel:8415899459">+91 8415899459</a></span>
                                </li>
                                <li><i class="icon fal fa-envelope"></i>
                                    <span>
                                         <a href="mailto:accomoonhotels@gmail.com">accomoonhotels@gmail.com</a>
                                      
                                    </span>
                                </li>
                             

                            </ul>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-6">
                <p>    Copyright &copy; Accomoon Hillside 2025 . All rights reserved | Developed by <a href="https://webinfotech.net.in/" target="_blank;"></a> Web Infotech </p>
                </div>
              

            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/paroller.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/js_isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/element-in-view.js"></script>
<script src="js/main.js"></script>
<script>
    function openPopup(src) {
        document.getElementById("popup").style.display = "flex";
        document.getElementById("popup-img").src = src;
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }



const buttons = document.querySelectorAll(".property-filter button");
const cards = document.querySelectorAll(".property-card");

buttons.forEach(btn => {
  btn.addEventListener("click", () => {
    buttons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    const filter = btn.dataset.filter;
    cards.forEach(card => {
      if (filter === "all" || card.dataset.type === filter) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});





// Pause scroll on hover
const gallery = document.querySelector('.scrolling-wrapper');
gallery.addEventListener('mouseenter', () => gallery.style.animationPlayState = 'paused');
gallery.addEventListener('mouseleave', () => gallery.style.animationPlayState = 'running');

// Collect all images
const images = Array.from(document.querySelectorAll('.property-gallery img'));
const popup = document.getElementById("imagePopup");
const popupImg = document.getElementById("popupImage");
const closeBtn = document.getElementById("closePopup");
const prevBtn = document.getElementById("prevImg");
const nextBtn = document.getElementById("nextImg");
let currentIndex = 0;

// Open popup on image click
images.forEach((img, index) => {
  img.addEventListener('click', () => {
    currentIndex = index;
    showImage(currentIndex);
    popup.classList.add('active');
  });
});

// Function to show image
function showImage(index) {
  popupImg.src = images[index].src;
}

// Navigation
prevBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(currentIndex);
});
nextBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
});

// Close popup
closeBtn.addEventListener('click', () => popup.classList.remove('active'));
popup.addEventListener('click', e => {
  if (e.target === popup) popup.classList.remove('active');
});
</script>

</body>

</html>