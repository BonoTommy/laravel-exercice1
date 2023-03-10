
<?php $__env->startSection('title', 'Book'); ?>
<?php $__env->startSection('body-class'); ?>
<body class="sub_page">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeBook'); ?>
<span class="sr-only">(current)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeClassBook'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
</div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      

      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="" method="POST" action="<?php echo e(route('formBook')); ?>" accept-charset="UTF-8">
            <?php echo e(csrf_field()); ?>

              <div>
                <input type="text" class="form-control" placeholder="Your Name" name="name"/>
                <?php if($errors->has('name')): ?>
                <div class="text-danger"><?php echo e($errors->first('name')); ?></div>
                <?php endif; ?>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number"/>
                <?php if($errors->has('phone_number')): ?>
                <div class="text-danger"><?php echo e($errors->first('phone_number')); ?></div>
                <?php endif; ?>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email"/>
                <?php if($errors->has('email')): ?>
                <div class="text-danger"><?php echo e($errors->first('email')); ?></div>
                <?php endif; ?>
              </div>
              <div>
                <select class="form-control nice-select wide" name="guest_nbr">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                </select>
                <?php if($errors->has('guest_nbr')): ?>
                <div class="text-danger"><?php echo e($errors->first('guest_nbr')); ?></div>
                <?php endif; ?>
              </div>
              <div>
                <input type="date" class="form-control" name="date">
                <?php if($errors->has('date')): ?>
                <div class="text-danger"><?php echo e($errors->first('date')); ?></div>
                <?php endif; ?>
              </div>
              <div>
                <input type="time" min="17:00" max="22:00" class="form-control" name="time">
                <?php if($errors->has('time')): ?>
                <div class="text-danger"><?php echo e($errors->first('time')); ?></div>
                <?php endif; ?>
              </div>
              <div class="btn_box">
                <button type="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel-exercice1\resources\views/book.blade.php ENDPATH**/ ?>