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
            Welcome security services Company
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered alteration in some form, by
            injected humour, or randomised words which don't look even
            slightly believable. If you are going to use a passage of Lorem
            Ipsum, you need to be sure there isn't It is a long established
            f act that a reader will be distracted by the readable content
            of a page whe
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end welcome section -->

<!--Success Story Section -->
<div class="layout_padding  p-4">
  <div class="container-fluid">
    <div class="">
      <div class="col-md-12">
        <div class="success_detail ">
          <h3>Our Success Story</h3>
        </div>
        <div class="success_detail">
          <h2>Customer Feed-Back</h2>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card col-md-6">
                  <div class="card-body ">
                    <h1>Customer Feedback</h1>
                  </div>
                </div>
              </div>
              <?php foreach ($feedback as $fk) {
                //echo $fk->name;

                echo "<div class='carousel-item '>";
                  echo "<div class='card col-md-6'>";
                  echo "<div class='card-header border>'".$fk->name."</div>";
                  echo "<div class='card-body'>
                        ".$fk->username."
                        </div>";
                  echo "</div>";
                echo "</div>";
              }
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
              <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-target="#carouselExampleFade" data-slide="next">
              <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--End of Success Story Section -->




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