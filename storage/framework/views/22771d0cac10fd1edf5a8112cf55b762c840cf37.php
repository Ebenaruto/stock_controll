<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">
                    <a href="<?php echo e(route ('admin.users.create')); ?>"> <button type="button"
                            class="btn btn-success float-right">ajouter</button></a>


                    <table class="table table-striped">
                        <thead class="bg-info" style="color: white;">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th scope="row"> <?php echo e($user->id); ?></th>
                                <td> <?php echo e($user->name); ?></td>
                                <td> <?php echo e($user->email); ?></td>
                                <td> <?php echo e(implode(', ', $user->roles()->get()->pluck('name')->toArray() )); ?></td>
                                <td>
                                    <a href="<?php echo e(route ('admin.users.edit',$user->id)); ?>"> <button type="button"
                                            class="btn btn-warning float-left"
                                            style="color: white;">modifier</button></a>
                                    <form action="<?php echo e(route ('admin.users.destroy',$user->id)); ?>" method="POST"
                                        class="float-left">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        <button type="submit" class="btn btn-danger ">supprimer</button>
                                    </form>
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