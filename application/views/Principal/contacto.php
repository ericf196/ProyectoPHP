
  
<div class="container">
  <h2>Contactanos</h2>
  <form name="formulario_contacto" method="POST" action="<?php echo base_url();?>index.php/Contact/guardarContacto">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="asunto">Asunto:</label>
      <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto">
    </div>
    
    <div class="form-group">
      <label for="comentario">Cometario:</label>
      <textarea id="comentario" name="comentario" class="form-control" rows="4" cols="50" name="comentario" placeholder="Comentario"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</div>
<br/>

