<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.pacientes.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.paciente.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Paciente">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.nome')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.nascimento')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.sexo')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.email')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.fone_pessoal')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.fone_comercial')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.endereco')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.bairro')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.cidade')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.cep')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.estado')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.documento')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($paciente->Medico == Auth::user()->name): ?>
                        <tr data-entry-id="<?php echo e($paciente->id); ?>">
                            <td> </td>
                            <td><?php echo e($paciente->id ?? ''); ?></td>
                            <td><?php echo e($paciente->nome ?? ''); ?></td>
                            <td><?php echo e($paciente->nascimento ?? ''); ?></td>
                            <td><?php echo e(App\Paciente::SEXO_RADIO[$paciente->sexo] ?? ''); ?></td>
                            <td><?php echo e($paciente->email ?? ''); ?></td>
                            <td><?php echo e($paciente->fone_pessoal ?? ''); ?></td>
                            <td><?php echo e($paciente->fone_comercial ?? ''); ?></td>
                            <td><?php echo e($paciente->endereco ?? ''); ?></td>
                            <td><?php echo e($paciente->bairro ?? ''); ?></td>
                            <td><?php echo e($paciente->cidade ?? ''); ?></td>
                            <td><?php echo e($paciente->cep ?? ''); ?></td>
                            <td><?php echo e($paciente->estado ?? ''); ?> - <?php echo e($paciente->Medico ?? ''); ?></td>
                            <td> <?php if($paciente->documento): ?> <?php $__currentLoopData = $paciente->documento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="<?php echo e($media->getFullUrl()); ?>" target="_blank"><?php echo e(trans('global.view_file')); ?></a><br> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?></td>
                            <td> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_show')): ?><a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.pacientes.show', $paciente->id)); ?>"><?php echo e(trans('global.view')); ?></a><?php endif; ?>
                                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_edit')): ?><a class="btn btn-xs btn-info" href="<?php echo e(route('admin.pacientes.edit', $paciente->id)); ?>"> <?php echo e(trans('global.edit')); ?></a><?php endif; ?>
                                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_delete')): ?>
                                    <form action="<?php echo e(route('admin.pacientes.destroy', $paciente->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>

    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paciente_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.pacientes.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
<?php endif; ?>

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]], 
    pageLength: 100,
    "language": { select: {rows: "%d linhas selecionadas"}},
  });
  $('.datatable-Paciente:not(.ajaxTable)').DataTable({ buttons: dtButtons   })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Irroba\Consultorio\resources\views/admin/pacientes/index.blade.php ENDPATH**/ ?>