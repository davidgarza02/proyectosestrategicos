<?= form_open_multipart('formulario/receiveform',array('class' => 'form-horizontal'));?>
<?php
    $labelclass = array('class' => 'col-sm-3 control-label');
    $labelradioclass = array('class' => 'col-sm-1 control-label');

    $fechainicio = array(
        'name' => 'fechainicio',
        'type' => 'date',
        'class' => 'form-control');
    $fechafin = array(
        'name' => 'fechafin',
        'type' => 'date',
        'class' => 'form-control');
     $diashabiles = array(
         'name' => 'diashabiles',
         'type' => 'number',
         'class' => 'form-control');

    $apellidopaternotitular = array(
        'name' => 'apellidopaternotitular',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidopaternotitular');
    $apellidomaternotitular = array(
        'name' => 'apellidomaternotitular',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidomaternotitular');
    $nombretitular = array(
        'name' => 'nombretitular',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'nombretitular');
    $cargotitular = array(
        'name' => 'cargotitular',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'cargotitular');
    $correotitular = array(
        'name' => 'correotitular',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'correotitular');

    $titularigualresponsable = array(
        'name' => 'titularigualresponsable',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsablesi');
    $titularigualresponsablesi = array(
        'name' => 'titularigualresponsable',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsablesi');
    $titularigualresponsableno = array(
        'name' => 'titularigualresponsable',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsableno');
    $apellidopaternoresponsable = array(
        'name' => 'apellidopaternoresponsable',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidopaternoresponsable');
    $apellidomaternoresponsable = array(
        'name' => 'apellidomaternoresponsable',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidomaternoresponsable');
    $nombreresponsable = array(
        'name' => 'nombreresponsable',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'nombreresponsable');
    $cargoresponsable = array(
        'name' => 'cargoresponsable',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'cargoresponsable');
    $correoresponsable = array(
        'name' => 'correoresponsable',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'correoresponsable');


    $titularigualresponsableplane = array(
        'name' => 'titularigualresponsableplane',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsablesiplane');
    $titularigualresponsablesiplane = array(
        'name' => 'titularigualresponsableplane',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsablesiplane');
    $titularigualresponsablenoplane = array(
        'name' => 'titularigualresponsableplane',
        'class' => 'form-control, radio',
        'id'=>'titularigualresponsablenoplane');
    $apellidopaternoresponsableplane = array(
        'name' => 'apellidopaternoresponsableplane',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidopaternoresponsableplane');
    $apellidomaternoresponsableplane = array(
        'name' => 'apellidomaternoresponsableplane',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidomaternoresponsableplane');
    $nombreresponsableplane = array(
        'name' => 'nombreresponsableplane',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'nombreresponsableplane');
    $cargoresponsableplane = array(
        'name' => 'cargoresponsableplane',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'cargoresponsableplane');
    $correoresponsableplane = array(
        'name' => 'correoresponsableplane',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'correoresponsableplane');


    $apellidopaternodireccion0 = array(
        'name' => 'apellidopaternodireccion0',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidopaternodireccion0');
    $apellidomaternodireccion0 = array(
        'name' => 'apellidomaternodireccion0',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'apellidomaternodireccion0');
    $nombredireccion0 = array(
        'name' => 'nombredireccion0',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'nombredireccion0');
    $cargodireccion0 = array(
        'name' => 'cargodireccion0',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'cargodireccion0');
    $correodireccion0 = array(
        'name' => 'correodireccion0',
        'type' => 'text',
        'class' => 'form-control',
        'id'=>'correodireccion0');

    $regla1si = array(
        'name' => 'regla1cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla1si');
    $regla1no = array(
        'name' => 'regla1cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla1no');
    $regla1descripcion = array(
        'name' => 'regla1descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla1descripcion',
        'maxlength' => '1000');
    $regla2si = array(
        'name' => 'regla2cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla2si');
    $regla2no = array(
        'name' => 'regla2cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla2no');
    $regla2descripcion = array(
        'name' => 'regla2descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla2descripcion',
        'maxlength' => '1000');
    $regla3si = array(
        'name' => 'regla3cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla3si');
    $regla3no = array(
        'name' => 'regla3cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla3no');
    $regla3descripcion = array(
        'name' => 'regla3descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla3descripcion',
        'maxlength' => '1000');
    $regla4si = array(
        'name' => 'regla4cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla4si');
    $regla4no = array(
        'name' => 'regla4cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla4no');
    $regla4descripcion = array(
        'name' => 'regla4descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla4descripcion',
        'maxlength' => '1000');
    $regla5si = array(
        'name' => 'regla5cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla5si');
    $regla5no = array(
        'name' => 'regla5cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla5no');
    $regla5descripcion = array(
        'name' => 'regla5descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla5descripcion',
        'maxlength' => '1000');
    $regla6si = array(
        'name' => 'regla6cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla6si');
    $regla6no = array(
        'name' => 'regla6cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla6no');
    $regla6descripcion = array(
        'name' => 'regla6descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla6descripcion',
        'maxlength' => '1000');
    $regla7si = array(
        'name' => 'regla7cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla7si');
    $regla7no = array(
        'name' => 'regla7cumplido',
        'class' => 'form-control, radio',
        'id'=>'regla7no');
    $regla7descripcion = array(
        'name' => 'regla7descripcion',
        'rows' => '2',
        'class' => 'form-control',
        'id'=>'regla7descripcion',
        'maxlength' => '1000');

    $evidencia = array(
        'name' => 'evidencia',
        'class' => 'form-control',
        'id'=>'evidencia',
        'type' => 'file');
?>
    <div class="container">
        <h1 class="col-sm-12">Registro de proyecto <small>Planeación Estratégica</small></h1>
        <h2 class="col-sm-12"><small>Cronograma</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('Fecha de inicio para la implementación del proceso: ', 'fechainicio', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($fechainicio)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Fecha final para la implementación del proceso: ', 'fechafinal', $labelclass )?>
            <div class="col-sm-9">
                <?= form_input($fechafin)?>
            </div>
        </div>

        <h2 class="col-sm-12"><small>Duración del proyecto</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('Duracion total del proyecto (dias habiles): ', 'diashabiles', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($diashabiles)?>
            </div>
        </div>

        <h2 class="col-sm-12">Roles del proceso</h2>
        <h2 class="col-sm-12"><small>Titular de la unidad</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('Apellido paterno: ', 'apellidopaternotitular', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidopaternotitular)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido materno: ', 'apellidomaternotitular', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidomaternotitular)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nombre: ', 'nombretitular', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($nombretitular)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Cargo / Puesto: ', 'cargotitular', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($cargotitular)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Correo oficial: ', 'correotitular', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($correotitular)?>
            </div>
        </div>


        <h2 class="col-sm-12"><small>Responsable del proceso</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('¿Es el titular de la unidad? ', 'titularigualresponsable', $labelclass)?>
            <div class="col-sm-1">
                <?= form_radio($titularigualresponsablesi,'Si')?>
                <?= form_label('Si ', 'titularigualresponsablesi', array('class' => 'control-label','for'=>'titularigualresponsablesi'))?>
            </div>
            <div class="col-sm-1">
                <?= form_radio($titularigualresponsableno,'No')?>
                <?= form_label('No ', 'titularigualresponsableno', array('class' => 'control-label','for'=>'titularigualresponsableno'))?>
            </div>
            <div class="col-sm-5">&nbsp;</div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido paterno: ', 'apellidopaternoresponsable', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidopaternoresponsable)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido materno: ', 'apellidomaternoresponsable', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidomaternoresponsable)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nombre: ', 'nombreresponsable', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($nombreresponsable)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Cargo / Puesto: ', 'cargoresponsable', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($cargoresponsable)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Correo oficial: ', 'correoresponsable', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($correoresponsable)?>
            </div>
        </div>

        <h2 class="col-sm-12"><small>Responsable de la planeación estratégica de la unidad</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('¿Es el titular de la unidad? ', 'titularigualresponsableplane', $labelclass)?>
            <div class="col-sm-1">
                <?= form_radio($titularigualresponsablesiplane,'Si')?>
                <?= form_label('Si ', 'titularigualresponsablesiplane', array('class' => 'control-label','for'=>'titularigualresponsablesiplane'))?>
            </div>
            <div class="col-sm-1">
                <?= form_radio($titularigualresponsablenoplane,'No')?>
                <?= form_label('No ', 'titularigualresponsablenoplane', array('class' => 'control-label','for'=>'titularigualresponsablenoplane'))?>
            </div>
            <div class="col-sm-5">&nbsp;</div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido paterno: ', 'apellidopaternoresponsableplane', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidopaternoresponsableplane)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido materno: ', 'apellidomaternoresponsableplane', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidomaternoresponsableplane)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nombre: ', 'nombreresponsableplane', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($nombreresponsableplane)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Cargo / Puesto: ', 'cargoresponsableplane', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($cargoresponsableplane)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Correo oficial: ', 'correoresponsableplane', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($correoresponsableplane)?>
            </div>
        </div>

        <h2 class="col-sm-12"><small>Grupo de trabajo para la dirección de TIC</small></h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="form-group">
            <?= form_label('Apellido paterno: ', 'apellidopaternodireccion0', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidopaternodireccion0)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Apellido materno: ', 'apellidomaternodireccion0', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($apellidomaternodireccion0)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nombre: ', 'nombredireccion0', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($nombredireccion0)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Cargo / Puesto: ', 'cargodireccion0', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($cargodireccion0)?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Correo oficial: ', 'correodireccion0', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($correodireccion0)?>
            </div>
        </div>
        <div id="workgroupcontainer"></div>
        <div class="form-group">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <?= form_button(array('id'=>'adddireccionbutton','class'=>'btn btn-default'),'Agregar')?>
            </div>
        </div>

        <h2 class="col-sm-12">Reglas del proceso</h2>
        <div class="col-sm-12">&nbsp;</div>
        <div class="col-sm-12">
            <h3 class="col-sm-3"><small>Regla</small></h3>
            <h3 class="col-sm-4"><small>Cumplido</small></h3>
            <h3 class="col-sm-5"><small>Describir cómo se cumplió</small></h3>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 1</small></h4>
            <h4 class="col-sm-4"><small>
                <div class="col-sm-1">
                    <?= form_radio($regla1si,'Si')?>
                    <?= form_label('Si ', 'regla1si', array('class' => 'control-label','for'=>'regla1si'))?>
                </div>
                <div class="col-sm-1">
                    <?= form_radio($regla1no,'No')?>
                    <?= form_label('No ', 'regla1no', array('class' => 'control-label','for'=>'regla1no'))?>
                </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla1descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 2</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla2si,'Si')?>
                        <?= form_label('Si ', 'regla2si', array('class' => 'control-label','for'=>'regla2si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla2no,'No')?>
                        <?= form_label('No ', 'regla2no', array('class' => 'control-label','for'=>'regla2no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla2descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 3</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla3si,'Si')?>
                        <?= form_label('Si ', 'regla1si', array('class' => 'control-label','for'=>'regla3si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla3no,'No')?>
                        <?= form_label('No ', 'regla1no', array('class' => 'control-label','for'=>'regla3no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla3descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 4</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla4si,'Si')?>
                        <?= form_label('Si ', 'regla4si', array('class' => 'control-label','for'=>'regla4si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla4no,'No')?>
                        <?= form_label('No ', 'regla4no', array('class' => 'control-label','for'=>'regla4no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla1descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 5</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla5si,'Si')?>
                        <?= form_label('Si ', 'regla5si', array('class' => 'control-label','for'=>'regla5si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla5no,'No')?>
                        <?= form_label('No ', 'regla5no', array('class' => 'control-label','for'=>'regla5no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla5descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 6</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla6si,'Si')?>
                        <?= form_label('Si ', 'regla6si', array('class' => 'control-label','for'=>'regla6si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla6no,'No')?>
                        <?= form_label('No ', 'regla6no', array('class' => 'control-label','for'=>'regla6no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla6descripcion) ?></small></h4>
        </div>
        <div class="col-sm-12">
            <h4 class="col-sm-3"><small>Regla 7</small></h4>
            <h4 class="col-sm-4"><small>
                    <div class="col-sm-1">
                        <?= form_radio($regla7si,'Si')?>
                        <?= form_label('Si ', 'regla7si', array('class' => 'control-label','for'=>'regla7si'))?>
                    </div>
                    <div class="col-sm-1">
                        <?= form_radio($regla7no,'No')?>
                        <?= form_label('No ', 'regla1no', array('class' => 'control-label','for'=>'regla7no'))?>
                    </div>
                </small></h4>
            <h4 class="col-sm-5"><small><?= form_textarea($regla7descripcion) ?></small></h4>
        </div>

        <h2 class="col-sm-12">Actividades del proceso</h2>
        <div class="col-sm-12">&nbsp;</div>

        <h2 class="col-sm-12">Relación de productos del proceso</h2>
        <div class="col-sm-12">&nbsp;</div>
        <h2 class="col-sm-12"><small>Acta de integración y forma de operación del grupo de trabajo para la dirección de TIC (F. PE F1)</small></h2>
        <div class="form-group">
            <?= form_label('Adjuntar evidencia: ', 'evidencia', $labelclass)?>
            <div class="col-sm-9">
                <?= form_input($evidencia)?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <?= form_submit('','Enviar','class="btn btn-default"')?>
            </div>
        </div>

    </div>


<?= form_close()?>
<script type="text/javascript" src="<?= base_url('js/formulario.js')?>"></script>
</body>
</html>