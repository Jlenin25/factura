<div class="subscribe-form">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="<?= img(); ?>logo1.png" alt="" style="width:300px">
            </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="<?= facebook(); ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?= instagram(); ?>"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2021 <?php echo date('Y'); ?> - Powered by <a rel="nofollow" href="<?= facebook(); ?>">Kuyaru</a> | Desarrollador web <a rel="nofollow" href="<?= facebook(); ?>">Lenin</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= js(); ?>custom.js"></script>
    <script src="<?= js(); ?>owl.js"></script>
    <script src="<?= js(); ?>isotope.js"></script>
    <script src="../<?= js(); ?>flex-slider.js"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  </body>
</html>