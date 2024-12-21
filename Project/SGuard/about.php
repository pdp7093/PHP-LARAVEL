<?php include_once('header.php'); ?>
<!-- slider section -->


<!-- end slider section -->

<!-- welcome section -->
<section class="welcome_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class=" col-md-6">
        <div>
          <img class="img-fluid" src="images/welcome.jpg" alt="" />
        </div>
      </div>
      <div class=" col-md-6">
        <div class="welcome_detail">
          <h3>
            Welcome
          </h3>
          <h2>
            Welcome in security services Company
          </h2>
          <p>
          Welcome to SGuard, your trusted platform for hiring professional security guards. Whether it’s safeguarding your home, office, or events, we bring you verified and reliable guards to ensure complete peace of mind.
          </p>
          <p>
          With a focus on safety and convenience, SGuard simplifies the process of finding skilled personnel. Create your account, explore our services, and hire guards tailored to your needs—all in just a few clicks!
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end welcome section -->
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

<script>
  $(".nav_search-btn").click(function () {
    if ($(".nav_search-input").hasClass("d-none")) {
      event.preventDefault();
      $(".nav_search-input")
        .animate({
          left: "-1000px"
        },
          "1000000"
        )
        .removeClass("d-none");
    } else {
      $(".nav_search-input")
        .animate({
          left: "0px"
        },
          "1000000"
        )
        .addClass("d-none");
    }
  });
</script>





</body>

</html>