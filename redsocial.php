<!DOCTYPE html>
<html lang="en">
<head>
<link href="estilo.css" rel="stylesheet" type="text/css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>red social</title>
</head>
<body>
    <h1 id="header">MI BLOG</h1>
    <section id="inicio">
       <p>Inicio</p>
       <p>Sobre mi</p>
       <p>Blog</p>
       <p>Contacto</p>
    </section>
    <main id="principal">
        <?php
        $likes =0;
        class Post{
            private $titulo;
            private $contenido;
            private $tag;
            public function __construct($titulo, $contenido, $tag){
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->tag = $tag;
            }
            public function getPost(){
                return "<h3>".$this->titulo."</h3>".$this->contenido;
               
            }
            public function getTags(){
    
                 return $this->tag;

            }


        }
     
            $articulos = [
              new Post("Titulo 1", "Contenido 1", ['viajes', 'nombre', 'html']),
              new Post("Titulo 2", "Contenido 2", ["viaj", "nombre", "htm"])
             
            ];
        foreach($articulos as $articulo){
        echo "<section id='articulos'>";
        echo $articulo->getPost();
        echo "<br>"."Tags = ";
            foreach($articulo->getTags() as $tag){
                echo "#".$tag." ";
            } 
        echo "<br>";    
        echo "<button type='submit' on-click='".$likes++."'>like</button>";
        echo " ".$likes;
        echo "<br>";   
        echo "</section>"; 

        }
        ?>
    </main>
</body>
</html>
