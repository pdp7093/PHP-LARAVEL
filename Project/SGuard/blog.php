<?php include_once('header.php');

?>
  <!-- story section -->
  <div class="layout_padding">

    <section class="layout_padding story_section ">
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
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of
                letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved
                over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              </p>
              <div class="story_detail-btn">
                <a href="">
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
  </div>

  <!-- end story section -->



  
  <!--Footer Section -->
	<?php include_once('footer.php');?>
  <!-- End Footer Section -->
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