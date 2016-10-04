    <?php
        $count = $_GET['count'];
        $labelclass = array('class' => 'col-sm-3 control-label');
        $apellidopaternodireccion = array(
            'name' => 'apellidopaternodireccion'.$count,
            'type' => 'text',
            'class' => 'form-control',
            'id'=>'apellidopaternodireccion'.$count);
        $apellidomaternodireccion = array(
            'name' => 'apellidomaternodireccion'.$count,
            'type' => 'text',
            'class' => 'form-control',
            'id'=>'apellidomaternodireccion'.$count);
        $nombredireccion = array(
            'name' => 'nombredireccion'.$count,
            'type' => 'text',
            'class' => 'form-control',
            'id'=>'nombredireccion'.$count);
        $cargodireccion = array(
            'name' => 'cargodireccion'.$count,
            'type' => 'text',
            'class' => 'form-control',
            'id'=>'cargodireccion'.$count);
        $correodireccion = array(
            'name' => 'correodireccion'.$count,
            'type' => 'text',
            'class' => 'form-control',
            'id'=>'correodireccion'.$count);
    ?>
    <div class="col-sm-12">&nbsp;</div>
    <div class="form-group">
        <?= form_label('Apellido paterno: ', 'apellidopaternodireccion'.$count, $labelclass)?>
    <div class="col-sm-9">
        <?= form_input($apellidopaternodireccion)?>
    </div>
    </div>
    <div class="form-group">
        <?= form_label('Apellido materno: ', 'apellidomaternodireccion'.$count, $labelclass)?>
        <div class="col-sm-9">
            <?= form_input($apellidomaternodireccion)?>
        </div>
    </div>
    <div class="form-group">
        <?= form_label('Nombre: ', 'nombredireccion'.$count, $labelclass)?>
        <div class="col-sm-9">
            <?= form_input($nombredireccion)?>
        </div>
    </div>
    <div class="form-group">
        <?= form_label('Cargo / Puesto: ', 'cargodireccion'.$count, $labelclass)?>
        <div class="col-sm-9">
            <?= form_input($cargodireccion)?>
        </div>
    </div>
    <div class="form-group">
        <?= form_label('Correo oficial: ', 'correodireccion'.$count, $labelclass)?>
        <div class="col-sm-9">
            <?= form_input($correodireccion)?>
        </div>
    </div>