<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">


                    <table class="table table-striped">
                        <thead class="bg-info" style="color: white;">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th scope="row"> <?php echo e($user->id); ?></th>
                                <td> <?php echo e($user->name); ?></td>
                                <td> <?php echo e($user->email); ?></td>
                                <td>
                                    <a href="<?php echo e(route ('admin.users.create',$user->id)); ?>"> <button type="button"
                                            class="btn btn-success">ajouter</button></a>
                                    <a href="<?php echo e(route ('admin.users.destroy',$user->id)); ?>"><button type="button"
                                            class="btn btn-danger">supprimer</button></a>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\stock\resources\views/Admin/users/index.blade.php ENDPATH**/ ?>