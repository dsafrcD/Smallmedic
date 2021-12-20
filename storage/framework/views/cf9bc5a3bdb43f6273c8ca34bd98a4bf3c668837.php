<?php $__env->startSection('content'); ?>

<div class="card">

    <div class="card-body">
        <form action="<?php echo e(route("admin.users.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.user.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($user) ? $user->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.user.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <label for="email"><?php echo e(trans('cruds.user.fields.email')); ?>*</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', isset($user) ? $user->email : '')); ?>" required>
                <?php if($errors->has('email')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('email')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.user.fields.email_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                <label for="password"><?php echo e(trans('cruds.user.fields.password')); ?></label>
                <input type="password" id="password" name="password" class="form-control" required>
                <?php if($errors->has('password')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('password')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.user.fields.password_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('roles') ? 'has-error' : ''); ?>">
                <label for="roles"><?php echo e(trans('cruds.user.fields.roles')); ?>*
                    <span class="btn btn-info btn-xs select-all"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all"><?php echo e(trans('global.deselect_all')); ?></span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : ''); ?>><?php echo e($roles); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('roles')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('roles')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.user.fields.roles_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TesteIrroba\resources\views/admin/users/create.blade.php ENDPATH**/ ?>