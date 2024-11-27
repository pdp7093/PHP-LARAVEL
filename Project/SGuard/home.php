<?php include_once('header.php'); ?>
<!-- slider section -->
<section class="  back_image text-wrap">
  <div class=" text-white position-absolute top-50 start-0 text-left"
    style="width:100%;height: 18rem; background-color: none;">
    <h2 class="ml-3" style="width:40%;">Ensuring Your Safety with Trusted Security Solutions, Anytime, Anywhere</h2>
    <a href="login" class="btn btn-success ml-4 mt-4 border rounded-pill font-weight-bold">Start your Journey with
      us</a>
  </div>
</section>

<!-- end slider section -->
<!-- service section -->
<section class="service_section ">
  <div class="container">
    <div class="service_detail">

      <h2 class="pt-3 mt-4 border rounded-pill bg-primary p-3">
        <span class=" text-white">we provide service</span>
      </h2>
    </div>
    <div class="row service_img-container">
      <div class="service_img-box i-box-1 col-md-6 text-info">
        <a href=""> Bank security</a>
      </div>
      <div class="service_img-box i-box-2 col-md-6">
        <a href="">society Guard </a>
      </div>
    </div>
    <div class="row service_img-container">
      <div class="service_img-box i-box-3">
        <a href="">Hotel Security </a>
      </div>
      <div class="service_img-box i-box-4">
        <a href=""> Home security</a>
      </div>
    </div>
    
  </div>
</section>
<!-- end service section -->



<!-- story section -->

<section class=" mt-5 layout_padding story_section">
  <div class="container-fluid">
    <div class="row">
      <div class=" col-md-6">
        <div>
          <img class="img-fluid" src="images/security.jpg" alt="" />
        </div>
      </div>
      <div class=" col-md-6">
        <div class="story_detail">
          <h3>
            Our
          </h3>
          <h2>
            Success Stories
          </h2>
          <p>
          At SGuard, we take pride in delivering reliable and professional security solutions tailored to every need. From ensuring family safety to protecting businesses and managing events, our team has consistently exceeded expectations. Here are some stories that highlight our commitment to your safety and peace of mind.
          </p>
          <div class="story_detail-btn">
            <a href="about">
              <span>
                Read More
              </span>
              <img src="images/arrow-black.png" alt="" class="ml-2" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end story section -->

<!-- contact section -->
<section class="contact_section layout_padding-top">
  <div class="container-fluid">
    <div class="row">

      <div class=" col-md-12 contact_form-container position-relative">
        <div class="contact_box ">
          <p class="" style="text-align:center;">Contact Us</p>
          <form action="" class="">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Phone Number">
            <input type="text" placeholder="Message">
            <div>
              <button type="submit">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<!-- end contact section -->
<!-- footer section -->
<?php include_once('footer.php'); ?>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
</script>
<script type="text/javascript">
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
</script>

</body>

</html>