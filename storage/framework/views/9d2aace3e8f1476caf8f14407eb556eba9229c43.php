<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route("admin.atendimentos.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('paciente_id') ? 'has-error' : ''); ?>">
                <label for="paciente"><?php echo e(trans('cruds.atendimento.fields.paciente')); ?>*</label>
                <select name="paciente_id" id="paciente" class="form-control select2" required>
                    <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((isset($atendimento) && $atendimento->paciente ? $atendimento->paciente->id : old('paciente_id')) == $id ? 'selected' : ''); ?>><?php echo e($paciente); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <input type="hidden" id="Medico" name="Medico" value="<?php echo e(Auth::user()->name); ?>">
                <?php if($errors->has('paciente_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('paciente_id')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('procedimento') ? 'has-error' : ''); ?>">
                <label for="procedimento"><?php echo e(trans('cruds.atendimento.fields.procedimento')); ?>*</label>
                <select id="procedimento" name="procedimento" class="form-control" required>
                    <option value="" disabled <?php echo e(old('procedimento', null) === null ? 'selected' : ''); ?>><?php echo e(trans('global.pleaseSelect')); ?></option>
                    <?php $__currentLoopData = App\Atendimento::PROCEDIMENTO_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('procedimento', null) === (string)$key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('procedimento')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('procedimento')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('data') ? 'has-error' : ''); ?>">
                <label for="data"><?php echo e(trans('cruds.atendimento.fields.data')); ?>*</label>
                <input type="text" id="data" name="data" class="form-control date" value="<?php echo e(old('data', isset($atendimento) ? $atendimento->data : '')); ?>" required>
                <?php if($errors->has('data')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('data')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.atendimento.fields.data_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('hora') ? 'has-error' : ''); ?>">
                <label for="hora"><?php echo e(trans('cruds.atendimento.fields.hora')); ?>*</label>
                <input type="text" id="hora" name="hora" class="form-control timepicker" value="<?php echo e(old('hora', isset($atendimento) ? $atendimento->hora : '')); ?>" required>
                <?php if($errors->has('hora')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('hora')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.atendimento.fields.hora_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('duracao') ? 'has-error' : ''); ?>">
                <label for="duracao"><?php echo e(trans('cruds.atendimento.fields.duracao')); ?>*</label>
                <select id="duracao" name="duracao" class="form-control" required>
                    <option value="" disabled><?php echo e(trans('global.pleaseSelect')); ?></option>
                    <?php $__currentLoopData = App\Atendimento::DURACAO_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('duracao', 1.00) === (string)$key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('duracao')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('duracao')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('observacoes') ? 'has-error' : ''); ?>">
                <label for="observacoes"><?php echo e(trans('cruds.atendimento.fields.observacoes')); ?></label>
                <textarea id="observacoes" name="observacoes" class="form-control "><?php echo e(old('observacoes', isset($atendimento) ? $atendimento->observacoes : '')); ?></textarea>
                <!--<input type="hidden" id="Medico" name="Medico" value="<?php echo e(Auth::user()->name); ?>">-->
                
                <?php if($errors->has('observacoes')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('observacoes')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.atendimento.fields.observacoes_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('documento') ? 'has-error' : ''); ?>">
                <label for="documento"><?php echo e(trans('cruds.atendimento.fields.documento')); ?></label>
                <div class="needsclick dropzone" id="documento-dropzone">

                </div>
                <?php if($errors->has('documento')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('documento')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.atendimento.fields.documento_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    var uploadedDocumentoMap = {}
Dropzone.options.documentoDropzone = {
    url: '<?php echo e(route('admin.atendimentos.storeMedia')); ?>',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="documento[]" value="' + response.name + '">')
      uploadedDocumentoMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentoMap[file.name]
      }
      $('form').find('input[name="documento[]"][value="' + name + '"]').remove()
    },
    init: function () {
<?php if(isset($atendimento) && $atendimento->documento): ?>
          var files =
            <?php echo json_encode($atendimento->documento); ?>

              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="documento[]" value="' + file.file_name + '">')
            }
<?php endif; ?>
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TesteIrroba\resources\views/admin/atendimentos/create.blade.php ENDPATH**/ ?>