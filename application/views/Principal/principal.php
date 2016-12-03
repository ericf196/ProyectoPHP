
<div class="container">
  <div class="row">



<?php foreach($producto as $producto_item): ?>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> <?php echo $producto_item->nombreProducto; ?> </div>
        <div class="panel-body"><img src=" <?php echo base_url(); ?>application/imagen/<?php echo $producto_item->urlProducto; ?>" class="img-responsive" style="width:100%" alt="Image"></div>                         
        <div class="panel-footer"> <?php echo $producto_item->descripcionProducto; ?> </div>
      </div>
    </div>

<?php endforeach; ?> 
    
  </div>
</div>

<br><br>

