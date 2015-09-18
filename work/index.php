<?php include('../inc/header.php'); ?>

    <div class="hero padding-top-5 padding-bottom-4">
      <p class="small-12 small-centered columns center text-white">
        Selected Projects
      </p>
    </div>
    <div class="bg-white gallery">
      <div class="row center">
        <div class="large-6 large-uncentered small-12 small-centered columns padding-top-5">
          <a href="agriscaping/">
            <img src="/img/thumbnail-agriscaping.png" alt="">
            <h4 class="text-blue-green uppercase padding-top-1">MyAgriscapePro Mobile App</h4>
            <h5 class="text-charcoal">HTML5, SCSS, AngularJS, Ionic Framework</h5>
          </a>
        </div>
        <div class="large-6 large-uncentered small-12 small-centered columns padding-top-5">
          <a href="lambworks/">
            <img src="/img/thumbnail-lambworks.png" alt="">
            <h4 class="text-blue-green uppercase padding-top-1">Lambworks.com</h4>
            <h5 class="text-charcoal">HTML5, SCSS, jQuery, PHP</h5>
          </a>
        </div>
      </div>
      <div class="row center">
        <div class="large-6 large-uncentered small-12 small-centered columns padding-top-5">
          <a href="hawkhvac/">
            <img src="/img/thumbnail-hawkhvac.png" alt="">
            <h4 class="text-blue-green uppercase padding-top-1">Hawkhvac.com</h4>
            <h5 class="text-charcoal">HTML5, SCSS, jQuery, PHP</h5>
          </a>
        </div>
        <div class="large-6 large-uncentered small-12 small-centered columns padding-top-5">
          <a href="ymcamontgomery/">
            <img src="/img/thumbnail-ymca.png" alt="">
            <h4 class="text-blue-green uppercase padding-top-1">Ymcamontgomery.org</h4>
            <h5 class="text-charcoal">HTML5, CSS, WordPress (Genesis Framework)</h5>
          </a>
        </div>
      </div>
      <div class="row center">
        <div class="large-6 large-uncentered small-12 small-centered columns padding-top-5 padding-bottom-5">
          <a href="d2s/">
            <img src="/img/thumbnail-d2s.png" alt="">
            <h4 class="text-blue-green uppercase padding-top-1">2014 D2S Fearless Landing Page</h4>
            <h5 class="text-charcoal">HTML5, CSS, WordPress (Genesis Framework)</h5>
          </a>
        </div>
      </div>
    </div>
    <div class="bg-light-grey padding-top-5 padding-bottom-4 gallery">
      <div class="row">
        <h3 class="large-8 large-uncentered small-12 small-centered columns center text-dark-blue">
          Need help bringing your designs to life?
        </h3>
        <div class="large-4 large-uncentered small-12 small-centered columns center">
          <a href="/#contact" class="radius button bg-aqua button-xl">
            <span>Let's Talk</span>
          </a>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(function() {
      $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
    });
    </script>
<?php include('../inc/footer.php') ?>
