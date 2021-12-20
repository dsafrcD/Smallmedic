<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.atendimentos.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.atendimento.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Atendimento">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.paciente')); ?>

                        </th>
                        <!-- <th>
                            <?php echo e(trans('cruds.paciente.fields.observacoes')); ?>

                        </th> -->
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.procedimento')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.data')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.hora')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.duracao')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.observacoes')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.atendimento.fields.documento')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $atendimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $atendimento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($atendimento->Medico == Auth::user()->name): ?>
                        <tr data-entry-id="<?php echo e($atendimento->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($atendimento->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($atendimento->paciente->nome ?? ''); ?>

                            </td>
                            <!-- <td>
                                <?php echo e($atendimento->paciente->observacoes ?? ''); ?>

                            </td> -->
                            <td>
                               <?php echo e($atendimento->procedimento ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($atendimento->data ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($atendimento->hora ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($atendimento->duracao ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($atendimento->observacoes ?? ''); ?>

                            </td>
                            <td>
                                <?php if($atendimento->documento): ?>
                                    <?php $__currentLoopData = $atendimento->documento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e($media->getUrl()); ?>" target="_blank">
                                                <?php echo e(trans('global.view_file')); ?>

                                        </a><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.atendimentos.show', $atendimento->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.atendimentos.edit', $atendimento->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_delete')): ?>
                                    <form action="<?php echo e(route('admin.atendimentos.destroy', $atendimento->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('atendimento_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.atendimentos.massDestroy')); ?>",
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
  $('.datatable-Atendimento:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Irroba\Consultorio\resources\views/admin/atendimentos/index.blade.php ENDPATH**/ ?>