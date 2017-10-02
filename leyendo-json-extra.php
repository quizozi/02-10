<?php include('header.php')?>
<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($datos['data']['sensors'][2]['value']);?>%">
  <?php echo ($datos['data']['sensors'][2]['value']) ;?>
    <span class="sr-only">70% Complete</span>
  </div>
</div>

<pre><code><?php print_r($datos)?></code></pre>

</div>
</div>
</div>
<?php include('footer.php');?>
