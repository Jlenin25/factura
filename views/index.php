<?= headerMain(); ?>
<!-- Banner -->
<div class="sliders">
	<div class="img-slider">
		<div class="slide active">
			<img src="<?= img(); ?>slide1.png" alt="">
		</div>
		<div class="slide">
			<img src="<?= img(); ?>slide2.png" alt="">
		</div>
		<div class="slide active">
			<img src="<?= img(); ?>slide3.png" alt="">
		</div>
		<div class="slide">
			<img src="<?= img(); ?>slide4.png" alt="">
		</div>
		<div class="navigation">
			<div class="btn active"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
		</div>
	</div>
</div>
<script src="<?= js(); ?>slide.js"></script>
<!-- Banner end -->
<div class="featured-items">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <div class="line-dec"></div>
          <h1>Productos</h1>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-carousel owl-theme">
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/1.png" alt="Item 1">
              <h4>Molde de PVC para probeta cilíndrica</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/2.png" alt="Item 2">
              <h4>Cono de Abrams</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/3.png" alt="Item 3">
              <h4>Cronómetro</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/4.png" alt="Item 4">
              <h4>Máquina extractora diamantina</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/6.png" alt="Item 6">
              <h4>Molde metálico de PVC para probeta cilíndrica</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/7.png" alt="Item 7">
              <h4>Molde prismático para viga de concreto</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/8.png" alt="Item 8">
              <h4>Tamiz de bronce</h4>
            </div>
          </a>
          <a href="">
            <div class="featured-item">
              <img src="<?= img(); ?>muestra/9.png" alt="Item 9">
              <h4>Panel circular para muestreo de shotcrete</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= footerMain(); ?>