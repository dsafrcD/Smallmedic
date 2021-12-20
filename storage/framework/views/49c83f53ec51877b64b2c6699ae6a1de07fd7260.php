<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.paciente')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->paciente->nome ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.procedimento')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->procedimento); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.data')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->data); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.hora')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->hora); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.duracao')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->duracao); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.observacoes')); ?>

                        </th>
                        <td>
                            <?php echo e($atendimento->observacoes); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.documento')); ?>

                        </th>
                        <th>
                        <?php if($atendimento->documento): ?>
                                    <?php $__currentLoopData = $atendimento->documento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e($media->getUrl()); ?>" target="_blank">
                                                <?php echo e(trans('global.view_file')); ?>

                                        </a><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                        </th>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <h3>Observações</h3>

            <br>

            <?php echo $__env->make('comments::components.comments', ['model' => $atendimento], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Irroba\Consultorio\resources\views/admin/atendimentos/show.blade.php ENDPATH**/ ?>