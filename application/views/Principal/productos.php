
<div class="container">
  <h2>List Group With Badges</h2>
  <!--<? #php print_r($producto) ?>-->
  <ul class="list-group">
  	<?php foreach($producto as $producto_item): ?>
    <li class="list-group-item"> <?php echo $producto_item->nombreProducto; ?> <span class="badge"><?php echo $producto_item->idProducto; ?></span></li>
    <?php endforeach; ?>
  </ul>
</div>

<br/>
