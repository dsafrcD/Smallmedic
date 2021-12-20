<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h4> Informações do paciente <?php echo e($paciente->nome); ?></h4>
    </div>


    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID do paciente
                        </th>
                        <td>
                            <?php echo e($paciente->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.nome')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->nome); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.nascimento')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->nascimento); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.sexo')); ?>

                        </th>
                        <td>
                            <?php echo e(App\Paciente::SEXO_RADIO[$paciente->sexo]); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.email')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->email); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.fone_pessoal')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->fone_pessoal); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.fone_comercial')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->fone_comercial); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.observacoes')); ?>

                        </th>
                        <td>
                            <?php echo $paciente->observacoes; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.endereco')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->endereco); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.bairro')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->bairro); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.cidade')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->cidade); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.cep')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->cep); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.estado')); ?>

                        </th>
                        <td>
                            <?php echo e($paciente->estado); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.paciente.fields.documento')); ?>

                        </th>
                        <th>
                            <?php if($paciente->documento): ?>
                            <?php $__currentLoopData = $paciente->documento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($media->getUrl()); ?>" target="_blank">
                                <?php echo e(trans('global.view_file')); ?>

                            </a><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </th>
                    </tr>
                </tbody>
            </table>

            <br> <br>

            <h4>Observações</h4> 
            <?php echo $__env->make('comments::components.comments', ['model' => $paciente], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            
            
            <br> 
            <hr> <h4>Imprimir relatório</h4> 
            <p>Ao clicar no botão abaixo, serão impressos os dados e atendimentos do paciente acima.</p>
            
            <input type="button" onclick="javascript:window.print();" value="Clique para imprimir">
            <br><br>


            <br> <br> 
            <hr>
            <h4>Todos os atendimentos</h4>
            
            
            <?php $__currentLoopData = \App\Atendimento::all()->where('paciente_id', '=', $paciente->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atendimento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            
            
            <div class="card-body">
                <div class="mb-2">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    Identificador do atendimento
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
                                    <?php echo $atendimento->observacoes; ?>

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
                    
                    <h4>Observações</h4>
                    
                    <br>
                    
                    <?php echo $__env->make('comments::components.comments', ['model' => $atendimento], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                        <?php echo e(trans('global.back_to_list')); ?>

                    </a>
                </div>
                
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            <hr>    
            
        </div>
        
        
        <nav class="mb-3">
            <div class="nav nav-tabs">
                
            </div>
        </nav>
        <div class="tab-content">
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Irroba\Consultorio\resources\views/admin/pacientes/show.blade.php ENDPATH**/ ?>