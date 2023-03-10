
<?php $__env->startSection('title', 'About'); ?>
<?php $__env->startSection('body-class'); ?>
<body class="sub_page">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeAbout'); ?>
<span class="sr-only">(current)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeClassAbout'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

</div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Feane
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel-exercice1\resources\views/about.blade.php ENDPATH**/ ?>