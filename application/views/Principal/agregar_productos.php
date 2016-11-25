  <script type="text/javascript">
  $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Cambiar");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
  });
  </script>

  <style type="text/css">
.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}

  </style>

<div class="container">
  <h2>Contactanos</h2>
  <form enctype="multipart/form-data" name="formulario_contacto" method="POST" action="<?php echo base_url();?>index.php/Agregar_productos/guardarProducto">
    <div class="form-group">
      <label for="nombre_imagen">Nombre de la imagen:</label>
      <input type="text" name="nombre_imagen" class="form-control" id="nombre_imagen" placeholder="Nombre imagen">
    </div>
  
    <div class="form-group">
      <label for="descripcion_imagen">Descripcion:</label>
      <textarea id="descripcion_imagen" name="descripcion_imagen" class="form-control" rows="4" cols="50" name="descripcion_imagen" placeholder="Descripcion"></textarea>
    </div>

    <div class="form-group">
      <label for="subir_imagen">Subir imagen:</label>
      <div class="row">    
       <!-- col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2-->
          <div class="col-xs-12 col-md-6">  
              <!-- image-preview-filename input [CUT FROM HERE]-->
              <div class="input-group image-preview">
                  <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                  <span class="input-group-btn">
                      <!-- image-preview-clear button -->
                      <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                          <span class="glyphicon glyphicon-remove"></span> Limpiar
                      </button>
                      <!-- image-preview-input -->
                      <div class="btn btn-default image-preview-input">
                          <span class="glyphicon glyphicon-folder-open"></span>
                          <span class="image-preview-input-title">Buscar</span>
                          <input type="file" name="photo"/> <!-- rename it -->                        
                      </div>
                  </span>
              </div><!-- /input-group image-preview [TO HERE]--> 
          </div>
      </div>
    </div>
    
    <button type="submit" class="btn btn-default">Subir</button>
  </form>
</div>
<br/>