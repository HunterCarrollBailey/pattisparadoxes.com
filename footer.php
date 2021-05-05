<section class="container-fluid bg-secondary">
  <footer class="text-center text-lg-start text-light p-2 container align-items-center">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h4 class="fw-bold">About the Company</h4>
        <div class="container">
          <p>Patti's Paradoxes is an independent software and web application solutions company based in Northern Nevada. We aim to provide the best possible service and content to our customers in order to meet their budgetary needs and time restrictions.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="fw-bold">Contact Us</h4>
        <div class="container">
          <ul class="list-unstyled">
            <li><i class="fas fa-phone"></i>  (775) 357-8831</li>
            <li><i class="fas fa-envelope"></i>  sales@pattisparadoxes.net</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="fw-bold">Sitemap</h4>
        <div class="container">
          <ul class="list-unstyled text-start">
            <li><a class="text-light" href="/index">Home</a></li>
            <!-- <li><a class="text-light" href="#">Products & Services</a></li> -->
            <!-- <li><a class="text-light" href="#">Gallery</a></li> -->
            <li><a class="text-light" href="/about">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3">
      &#169; 2021 Copyright <a class="text-light" href="/index">Patti's Paradoxes</a>
    </div>
  </footer>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- JQuery CDN -->
    <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
    <!-- Add Active class based on URL -->
    <script>
      $(function() {
        var uri = location.pathname;
        $('#mainNavigation li a').each(function() {
          var $this = $(this);
          if($this.attr('href').indexOf(uri) !== -1){
            $this.addClass('active');
          }
        })
      })
    </script>
  </body>
</html>