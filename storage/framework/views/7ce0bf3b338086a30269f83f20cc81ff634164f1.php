<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.paciente.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.pacientes.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
                <label for="nome"><?php echo e(trans('cruds.paciente.fields.nome')); ?>*</label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo e(old('nome', isset($paciente) ? $paciente->nome : '')); ?>" required>
                <input type="hidden" id="Medico" name="Medico" value="<?php echo e(Auth::user()->name); ?>">
                <?php if($errors->has('nome')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('nome')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.nome_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('nascimento') ? 'has-error' : ''); ?>">
                <label for="nascimento"><?php echo e(trans('cruds.paciente.fields.nascimento')); ?>*</label>
                <input type="text" id="nascimento" name="nascimento" class="form-control date" value="<?php echo e(old('nascimento', isset($paciente) ? $paciente->nascimento : '')); ?>" required>
                <?php if($errors->has('nascimento')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('nascimento')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.nascimento_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('sexo') ? 'has-error' : ''); ?>">
                <label><?php echo e(trans('cruds.paciente.fields.sexo')); ?>*</label>
                <?php $__currentLoopData = App\Paciente::SEXO_RADIO; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <input id="sexo_<?php echo e($key); ?>" name="sexo" type="radio" value="<?php echo e($key); ?>" <?php echo e(old('sexo', null) === (string)$key ? 'checked' : ''); ?> required>
                        <label for="sexo_<?php echo e($key); ?>"><?php echo e($label); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($errors->has('sexo')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('sexo')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <label for="email"><?php echo e(trans('cruds.paciente.fields.email')); ?></label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', isset($paciente) ? $paciente->email : '')); ?>">
                <?php if($errors->has('email')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('email')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.email_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('fone_pessoal') ? 'has-error' : ''); ?>">
                <label for="fone_pessoal"><?php echo e(trans('cruds.paciente.fields.fone_pessoal')); ?>*</label>
                <input type="text" id="fone_pessoal" name="fone_pessoal" class="form-control" value="<?php echo e(old('fone_pessoal', isset($paciente) ? $paciente->fone_pessoal : '')); ?>" required>
                <?php if($errors->has('fone_pessoal')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('fone_pessoal')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.fone_pessoal_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('fone_comercial') ? 'has-error' : ''); ?>">
                <label for="fone_comercial"><?php echo e(trans('cruds.paciente.fields.fone_comercial')); ?></label>
                <input type="text" id="fone_comercial" name="fone_comercial" class="form-control" value="<?php echo e(old('fone_comercial', isset($paciente) ? $paciente->fone_comercial : '')); ?>">
                <?php if($errors->has('fone_comercial')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('fone_comercial')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.fone_comercial_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('observacoes') ? 'has-error' : ''); ?>">
                <label for="observacoes"><?php echo e(trans('cruds.paciente.fields.observacoes')); ?></label>
                <textarea id="observacoes" name="observacoes" class="form-control ckeditor"><?php echo e(old('observacoes', isset($paciente) ? $paciente->observacoes : '')); ?></textarea>
                <?php if($errors->has('observacoes')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('observacoes')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.observacoes_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('endereco') ? 'has-error' : ''); ?>">
                <label for="endereco"><?php echo e(trans('cruds.paciente.fields.endereco')); ?>*</label>
                <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo e(old('endereco', isset($paciente) ? $paciente->endereco : '')); ?>" required>
                <?php if($errors->has('endereco')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('endereco')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.endereco_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('bairro') ? 'has-error' : ''); ?>">
                <label for="bairro"><?php echo e(trans('cruds.paciente.fields.bairro')); ?>*</label>
                <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo e(old('bairro', isset($paciente) ? $paciente->bairro : '')); ?>" required>
                <?php if($errors->has('bairro')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('bairro')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.bairro_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('cidade') ? 'has-error' : ''); ?>">
                <label for="cidade"><?php echo e(trans('cruds.paciente.fields.cidade')); ?>*</label>
                <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo e(old('cidade', isset($paciente) ? $paciente->cidade : '')); ?>" required>
                <?php if($errors->has('cidade')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('cidade')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.cidade_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('cep') ? 'has-error' : ''); ?>">
                <label for="cep"><?php echo e(trans('cruds.paciente.fields.cep')); ?>*</label>
                <input type="text" id="cep" name="cep" class="form-control" value="<?php echo e(old('cep', isset($paciente) ? $paciente->cep : '')); ?>" required>
                <?php if($errors->has('cep')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('cep')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.cep_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('estado') ? 'has-error' : ''); ?>">
                <label for="estado"><?php echo e(trans('cruds.paciente.fields.estado')); ?>*</label>
                <input type="text" id="estado" name="estado" class="form-control" value="<?php echo e(old('estado', isset($paciente) ? $paciente->estado : '')); ?>" required>
                <?php if($errors->has('estado')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('estado')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.estado_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('documento') ? 'has-error' : ''); ?>">
                <label for="documento"><?php echo e(trans('cruds.paciente.fields.documento')); ?></label>
                <div class="needsclick dropzone" id="documento-dropzone">

                </div>
                <?php if($errors->has('documento')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('documento')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.paciente.fields.documento_helper')); ?>

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
    url: '<?php echo e(route('admin.pacientes.storeMedia')); ?>',
    maxFilesize: 3, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 3
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
<?php if(isset($paciente) && $paciente->documento): ?>
          var files =
            <?php echo json_encode($paciente->documento); ?>

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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TesteIrroba\resources\views/admin/pacientes/create.blade.php ENDPATH**/ ?>