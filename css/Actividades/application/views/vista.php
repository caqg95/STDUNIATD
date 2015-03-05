<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>

<body>
<!--<div>
        <a href='<?php echo site_url('main/tipoactividad')?>'>Tipo Actividad</a> |
        <a href='<?php echo site_url('main/lugar')?>'>Lugar</a> |
        <a href='<?php echo site_url('main/cargo')?>'>Cargo</a> |
        <a href='<?php echo site_url('main/actividad')?>'>Actividad</a> |
        <a href='<?php echo site_url('main/asignacion')?>'>Asignacion</a> |
 
    </div> -->

    
    <div style='height:20px;'></div>
    
    <div>
        <?php echo $output; ?>
 
    </div>
</body>
</html>