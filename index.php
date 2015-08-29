<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-2.1.4.min.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <img src="img1.jpg" id="imagen1"/>
            <img src="img2.jpg" id="imagen2"/>
            <img src="img3.jpg" id="imagen3"/>
            <img src="descarga.jpg" id="imagen4"/>
        </div>
        
        <script>
        var imagenes = document.querySelectorAll("#contenedor img");
        for(var i=0;i<imagenes.length;i++){
            imagenes[i].addEventListener('click',carrito,false);
        }
        
        function carrito(imagen){
            
            for(var x=0;x<imagenes.length;x++){
               
                if(imagen.target==imagenes[x]){
                    $("#"+imagenes[x].getAttribute('id')).replaceWith('<div id ="'+imagenes[x].getAttribute('id')+'" >agregado al carrito</div>');
                }
                
                
            }
            
            
           
            
            
        }
        
        
        </script>
        
    </body>
</html>
