<?php include 'include/header.php' ?>

<section id="properties" class="container">
  <!-- <div class="property-filter">
    <button class="active" data-filter="all">All</button>
    <button data-filter="hillside">Hillside</button>
    <button data-filter="riverside">Riverside</button>
  </div> -->
  <div class="row justify-content-center">
    <div class="col-xl-12">
      <div class="section-title center-align mb-50 text-center">
        <h5>The pleasure of luxury</h5>
        <h2>Explore Our All Cottages Rooms and Restaurant</h2>
      </div>
    </div>
  </div>
  <div class="property-grid">


    <!-- Hillside acomon hotels -->
    <div class="property-card" data-type="hillside">
      <div class="property-header">
        <img src="./image/valley/room/1.png" alt="Hillside Resort">
        <span class="property-type">Hotels</span>
      </div>
      <div class="property-body">
        <h3>Accomoon valleyside homes</h3>
        <p class="location"> Address : kargong, mechuka, Arunachal Pradesh, 791003</p>
        <div class="property-gallery">
          <div class="scrolling-wrapper">
            <img src="./image/valley/room/9.png" alt="Riverside view">
            <img src="./image/valley/room/2.png" alt="Riverside view">
            <img src="./image/valley/room/3.png" alt="Riverside view">
            <img src="./image/valley/room/4.png" alt="Riverside view">
            <img src="./image/valley/room/10.png" alt="Riverside view">
            <img src="./image/valley/room/6.png" alt="Riverside view">
            <img src="./image/valley/room/7.png" alt="Riverside view">
            <img src="./image/valley/room/8.png" alt="Riverside view">


          </div>
        </div>
        <div class="buttons-home" style="display: flex; justify-content:space-between;">

          <!-- <a href="tel:9862618194
            " class="book-btn"><i class="fa fa-globe"></i>
            9862618194
          </a> -->
          <a href="valleyside.php" class="book-btn"><i class="fa fa-globe"></i>
            Visit Website</a>

          <!-- <a href="acoomoonresaults.php" class="book-btn"><i class="fa fa-globe"></i>
            Visit Website</a> -->
          <a href="https://maps.app.goo.gl/QAt8CdHcZEfspXV9A" class="book-btn"><i class="fa fa-map"></i>
            View on Google Maps</a>
        </div>

      </div>
    </div>



    <div class="property-card" data-type="hillside">
      <div class="property-header">
        <img src="image/tawang/1.png" alt="Hillside Resort">
        <span class="property-type">Hotels</span>
      </div>
      <div class="property-body">
        <h3>Accomoon hotels</h3>
        <p class="location"> Address Old Market, Tawang, Arunachal Pradesh 790104</p>
        <div class="property-gallery">
          <div class="scrolling-wrapper">
            <img src="image/tawang/p/1.png" alt="Riverside view">
            <img src="image/tawang/p/2.png" alt="Riverside view">
            <img src="image/tawang/p/3.png" alt="Riverside view">
            <img src="image/tawang/p/4.png" alt="Riverside view">
            <img src="image/tawang/p/5.png" alt="Riverside view">
            <img src="image/tawang/p/6.png" alt="Riverside view">
            <img src="image/tawang/p/7.png" alt="Riverside view">
            <img src="image/tawang/p/8.png" alt="Riverside view">


          </div>
        </div>
        <div class="buttons-home" style="display: flex; justify-content:space-between;">

          <!-- <a href="tel:9612156198
            " class="book-btn"><i class="fa fa-globe"></i>
            9612156198
          </a> -->

          <a href="acoomoonresaults.php" class="book-btn"><i class="fa fa-globe"></i>
            Visit Website</a>
          <a href="https://maps.app.goo.gl/Gr2vaNSHCFFBXTag7" class="book-btn"><i class="fa fa-map"></i>
            View on Google Maps</a>
        </div>

      </div>
    </div>




    <!-- Riverside -->
    <div class="property-card" data-type="riverside">
      <div class="property-header">
        <img src="image/riverside/1.png" alt="Riverside Resort">
        <span class="property-type">Riverside</span>
      </div>
      <div class="property-body">
        <h3>Accomoon River side Cottages cum restaurant</h3>
        <p class="location">Rama Camp, Dirang West Kameng District, Arunachal Pradesh - 790101</p>

        <!-- Scrolling Gallery -->
        <div class="property-gallery">
          <div class="scrolling-wrapper">
            <img src="image\riverside\ga\1.png" alt="Riverside view">
            <img src="image\riverside\ga\2.png" alt="Riverside view">
            <img src="image\riverside\ga\3.png" alt="Riverside view">
            <img src="image\riverside\ga\4.png" alt="Riverside view">
            <img src="image\riverside\ga\5.png" alt="Riverside view">

            <img src="image\riverside\ga\1.png" alt="Riverside view">
            <img src="image\riverside\ga\2.png" alt="Riverside view">
            <img src="image\riverside\ga\3.png" alt="Riverside view">
            <img src="image\riverside\ga\4.png" alt="Riverside view">
            <img src="image\riverside\ga\5.png" alt="Riverside view">

          </div>
        </div>
        <div class="buttons-home" style="display: flex; justify-content:space-between;">

          <a href="accomoonriverside.php" class="book-btn"><i class="fa fa-globe"></i>
            Visit Website</a>
          <a href="https://maps.app.goo.gl/rBT6KmK6NiHxZbP76" class="book-btn"><i class="fa fa-map"></i>
            View on Google Maps</a>
        </div>

      </div>
    </div>


    <!-- Popup -->
    <div class="image-popup" id="imagePopup">
      <span class="close" id="closePopup">&times;</span>
      <div class="nav-btn left" id="prevImg">&#10094;</div>
      <img src="" alt="Large view" id="popupImage">
      <div class="nav-btn right" id="nextImg">&#10095;</div>
    </div>



    <!-- Hillside -->
    <div class="property-card" data-type="hillside">
      <div class="property-header">
        <img src="image\restaurant\6.png" alt="Hillside Resort">
        <span class="property-type">Hillside</span>
      </div>
      <div class="property-body">
        <h3>Accomoon Hillside Homes</h3>
        <p class="location"> Sangti, Dirang, West Kameng, Arunachal Pradesh - 790101</p>
        <div class="property-gallery">
          <div class="scrolling-wrapper">
            <img src="image\hillside\1.png" alt="Riverside view">
            <img src="image\hillside\2.png" alt="Riverside view">
            <img src="image\hillside\3.png" alt="Riverside view">
            <img src="image\hillside\4.png" alt="Riverside view">
            <img src="image\hillside\5.png" alt="Riverside view">
            <img src="image\hillside\1.png" alt="Riverside view">
            <img src="image\hillside\2.png" alt="Riverside view">
            <img src="image\hillside\3.png" alt="Riverside view">
            <img src="image\hillside\4.png" alt="Riverside view">
            <img src="image\hillside\5.png" alt="Riverside view">

          </div>
        </div>
        <div class="buttons-home" style="display: flex; justify-content:space-between;">

          <a href="accomoonhillside.php" class="book-btn"><i class="fa fa-globe"></i>
            Visit Website</a>
          <a href="https://maps.app.goo.gl/SW4M71s4VZDN5mzK6" class="book-btn"><i class="fa fa-map"></i>
            View on Google Maps</a>
        </div>

      </div>
    </div>



  </div>
</section>

<?php include 'include/footer.php' ?>