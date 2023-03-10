
<?php $__env->startSection('title', 'Liste des réservations'); ?>
<?php $__env->startSection('body-class'); ?>
<body class="sub_page">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeReservation'); ?>
<span class="sr-only">(current)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activeClassReservation'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
</div>
  <section class="about_section layout_padding">
    <div class="container  bg-white">
      <table class="table table-striped">
        <thead thead-dark>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Nombre d'invités</th>
            <th scope="col">Date</th>
            <th scope="col">Heure d'arrivée</th>
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($book->id); ?></th>
            <td><?php echo e($book->name); ?></td>
            <td><?php echo e($book->phone_number); ?></td>
            <td><?php echo e($book->email); ?></td>
            <td><?php echo e($book->guest_nbr); ?></td>
            <td><?php echo e($book->date); ?></td>
            <td><?php echo e($book->time); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </tbody>
      </table>
      <?php echo e($books); ?>

    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel-exercice1\resources\views/reservation-list.blade.php ENDPATH**/ ?>