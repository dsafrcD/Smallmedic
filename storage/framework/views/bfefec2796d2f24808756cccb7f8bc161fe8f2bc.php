<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="<?php echo e($settings1['column_class']); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                            <i class="fa fa-chart-line"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e($settings1['chart_title']); ?></span>
                            <span class="info-box-number"><?php echo e(number_format($settings1['total_number'])); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="<?php echo e($settings2['column_class']); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                            <i class="fa fa-chart-line"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e($settings2['chart_title']); ?></span>
                            <span class="info-box-number"><?php echo e(number_format($settings2['total_number'])); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="<?php echo e($settings3['column_class']); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                            <i class="fa fa-chart-line"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e($settings3['chart_title']); ?></span>
                            <span class="info-box-number"><?php echo e(number_format($settings3['total_number'])); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="<?php echo e($settings4['column_class']); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                            <i class="fa fa-chart-line"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e($settings4['chart_title']); ?></span>
                            <span class="info-box-number"><?php echo e(number_format($settings4['total_number'])); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <input type="hidden" name="event_id" id="event_id" value="" />
            <input type="hidden" name="atendimento_id" id="atendimento_id" value="" />
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Atendimento #<span id="numberAtd"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
                <div class="form-group">
                    <label>Paciente</label>
                    <input class="form-control" name="selectPacienteEdit" id="selectPacienteEdit" disabled/>
                </div>
                <div class="form-group">
                    <label >Data</label>
                    <input type="text" id="date" name="date" disabled class="form-control date" value="<?php echo e(old('data', isset($atendimento) ? $atendimento->data : '')); ?>" required>
                </div>
                <div class="form-group">
                    <label>Procedimento</label>
                    <input type="text" class="form-control" disabled name="procedimento" id="procedimento" placeholder="Procedimento">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Horário</label>
                        <input type="text" id="time" name="time" disabled class="form-control timepicker" value="<?php echo e(old('hora', isset($atendimento) ? $atendimento->hora : '')); ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Duração</label>
                        <input class="form-control" name="selectDuracaoEdit" disabled id="selectDuracaoEdit" />
                    </div>
                </div>
                <div class="form-group">
                    <label>Observação</label>
                    <input type="text" class="form-control" name="observacao" disabled id="observacao" placeholder="Observação">
                </div>
            </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <input type="button" class="btn btn-primary" id="atendimento_update" value="Salvar">
                </div> -->
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Novo Atendimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
                <div class="form-group">
                    <label>Paciente*</label>
                    <select class="form-control" name="selectPaciente" required="required" id="selectPaciente"></select>
                    <input type="hidden" id="Medico" name="Medico" value="<?php echo e(Auth::user()->name); ?>">
                
                </div>
                <div class="form-group">
                    <label>Data*</label>
                    <input type="text" id="new_date" name="date" class="form-control date" required="required" value="<?php echo e(old('data', isset($atendimento) ? $atendimento->data : '')); ?>" required>
                </div>
                <div class="form-group">
                    <label>Procedimento*</label>
                    <select class="form-control" name="selectProcedimento" required="required" id="selectProcedimento"></select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Hora</label>
                        <input type="text" id="new_time" name="time" required="required" class="form-control timepicker" value="<?php echo e(old('hora', isset($atendimento) ? $atendimento->hora : '')); ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Duração Procedimento*</label>
                        <select class="form-control" name="selectDuracao" required="required" id="selectDuracao"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observação</label>
                    <input type="text" class="form-control" name="observacao" id="new_observacao" placeholder="Observação">
                </div>
                <span id="notificacao" style="color: red"></span>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <input type="button" class="btn btn-primary" id="new_atendimento" value="Criar">
                </div>
            </form>
        </div>
    </div>
</div>

<h3 class="page-title"><?php echo e(trans('global.systemCalendar')); ?></h3>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.systemCalendar')); ?>

    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/locale/pt-br.js'></script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events=<?php echo json_encode($events); ?>;
            pacientes=<?php echo json_encode($pacientes); ?>;
            duracoes=<?php echo json_encode($duracoes); ?>;
            procedimentos=<?php echo json_encode($procedimentos); ?>;

            $('[name=selectPaciente]').append('<option>' + 'Selecione por favor' + '</option>');
            $.each(pacientes, function(key, value){
                $('#selectPaciente').append('<option>' + value.id + ' - ' + value.nome + '</option>');
            });

            $.each(duracoes, function(key, value){
                $('[name=selectDuracao]').append('<option>' + value + '</option>');
            });

            $.each(procedimentos, function(key, value){
                $('[name=selectProcedimento]').append('<option>' + value + '</option>');
            });
    
            $('#calendar').fullCalendar({
               
                events: events,
                eventMouseover: function (data, event, view) {

                    $.each(data.comentarios[0], function(key, value) {
                        
                        tooltip = '<div class="tooltiptopicevent" style="width:auto;height:auto;background:#feb811;position:absolute;z-index:10001;padding:10px 10px 10px 10px ;  line-height: 200%;">' + 'Aviso: ' + value + '</br>' + '</div>';
                    });
                    
                    $("body").append(tooltip);
                    $(this).mouseover(function (e) {
                        $(this).css('z-index', 10000);
                        $('.tooltiptopicevent').fadeIn('500');
                        $('.tooltiptopicevent').fadeTo('10', 1.9);
                    }).mousemove(function (e) {
                        $('.tooltiptopicevent').css('top', e.pageY + 10);
                        $('.tooltiptopicevent').css('left', e.pageX + 20);
                    });
                },
                eventMouseout: function (data, event, view) {
                    $(this).css('z-index', 8);

                    $('.tooltiptopicevent').remove();
                },
                theme: false,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    $('#new_date').val(moment(end._d).format('DD-MM-YYYY'));
                    $('#selectProcedimento').val(''),
                    $('#selectDuracao').val(''),
                    $('#new_observacao').val(''),
                    $('#new_time').val('00:00:00'),
                    $('#newModal').modal();
                },
                editable: true,
                droppable: true,
                eventDrop: function(element) {
                    // if (!confirm("Você tem certeza sobre essa mudança?")) {
                    //     revertFunc();
                    // }
                    // saveEvent(drag, event);
                },
                eventClick: function(calEvent, jsEvent, view) {
                    $('#event_id').val(calEvent._id);
                    $('#atendimento_id').val(calEvent.id);
                    $('#numberAtd').html(calEvent.id);
                    $('#selectPacienteEdit').val(calEvent.nome);
                    $('#date').val(moment(calEvent.start).format('DD-MM-YYYY'));
                    $('#time').val(calEvent.hora);
                    $('#procedimento').val(calEvent.procedimento);
                    $('#observacao').val(calEvent.observacao);
                    $('#selectDuracaoEdit').val(calEvent.duracao);
                    $('#editModal').modal();
                }
            });

            function saveEvent(drag, event){
                $.ajax({
                    url: 'uashuahsusah',
                    type: 'post',
                    data: {event: event, atendimento_id: drag.id},
                    dataType: 'json',
                    success: function(response){
                        console.log('response');
                    }
                });
            }

            $('#atendimento_update').click(function(e) {
                e.preventDefault();
                let paciente = $('#selectPacienteEdit').val();
                let paciente_id = paciente.substring(0, 1);

                var data = {
                    _token: '<?php echo e(csrf_token()); ?>',
                    atendimento_id: $('#atendimento_id').val(),
                    paciente_id: paciente_id,
                    procedimento: $('#procedimento').val(),
                    data: $('#date').val(),
                    hora: $('#time').val(),
                    duracao: $('#selectDuracaoEdit').val(),
                    observacoes: $('#observacao').val() 
                };

                $.post('<?php echo e(route('admin.atendimentos.ajax_update')); ?>', data, function( result ) {

                    $('#editModal').modal('hide');

                    location.reload();
                });
            });

            $('#new_atendimento').click(function(e) {
                e.preventDefault();

                validaCampos();

                let paciente = $('#selectPaciente').val();
                let paciente_id = paciente.substring(0, 1);

                var data = {
                    _token: '<?php echo e(csrf_token()); ?>',
                    paciente_id: paciente_id,
                    data: $('#new_date').val(),
                    procedimento: $('#selectProcedimento').val(),
                    duracao: $('#selectDuracao').val(),
                    observacoes: $('#new_observacao').val(),
                    hora: $('#new_time').val(),
                };

                $.post('<?php echo e(route('admin.atendimentos.ajax_new')); ?>', data, function( result ) {

                $('#editModal').modal('hide');

                location.reload();
                });
            })

            function validaCampos() {

                var selectPaciente = $('#selectPaciente').find(":selected").text();
                var selectProcedimento = $('#selectProcedimento').find(":selected").text();
                var selectDucacao = $('#selectDuracao').find(":selected").text();
                var dataTime = $('#new_date').val();

                if (selectPaciente == 'Selecione por favor') {
                    $('#notificacao').html('');
                    $('#notificacao').html('Selecione um paciente!');
                    $('#selectPaciente').css('border', '1px solid red');
                    $('#selectPaciente').focus();
                    return;
                }

                else if (selectProcedimento == '') {
                    $('#notificacao').html('');
                    $('#notificacao').html('O campo procedimento não pode ficar em branco!');
                    $('#selectProcedimento').css('border', '1px solid red');
                    $('#selectProcedimento').focus();
                    return;
                }

                else if (selectDucacao == '') {
                    $('#notificacao').html('');
                    $('#notificacao').html('O campo duração procedimento não pode ficar em branco!');
                    $('#selectDuracao').css('border', '1px solid red');
                    $('#selectDuracao').focus();
                    return;
                }

                else if (dataTime == '') {
                    $('#notificacao').html('');
                    $('#notificacao').html('O campo data não pode ficar em branco!');
                    $('#new_date').css('border', '1px solid red');
                    $('#new_date').focus();
                    return;
                }
            }
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Irroba\Consultorio\resources\views/home.blade.php ENDPATH**/ ?>