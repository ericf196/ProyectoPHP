<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class File extends CI_Model {
 
        public function UploadImage($path = '', $message = '')
        {
               #echo '<script type="text/javascript" charset="utf-8">alert("'.$path .'"); </script>';
                $config['upload_path'] = $path;
                #$config['encrypt_name'] = TRUE;  //el nombre de de el archivo imagen se encripta
                $new_name='NombreNuevo'; //SE CAMBIA EL NOMBRE DE LA IMAGEN
                $config['file_name'] = $new_name;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite']='FALSE'; //SE  PUEDE REESCRIBE EL NOMBRE        
                
                
               
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')){

                        echo $error = $this->upload->display_errors();                    
                        //var_dump(is_dir('imagen'));

                        //echo $this->html();
                        if($message == ''){ //cierre de php ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("Error al subir la imagen");
                                </script> <?php
                        }else{            ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("<?= $message ?>");
                                </script> <?php
                        }

                        return null;
                }
                else{
                        //echo '<script type="text/javascript" charset="utf-8">alert("Policia Eric");</script>';
                        $file_data = $this->upload->data();
                        return $file_data['file_name'];
                }

        }
 
        /*public function html($value='')
        {
                return "
                <html>
                <head>
                        <title> Upload Error </title>
                </head>
                
                <body>
               
                </body>
                </html>";
        }*/
 
}
 
/* End of file File.php */
/* Location: ./application/models/File.php */