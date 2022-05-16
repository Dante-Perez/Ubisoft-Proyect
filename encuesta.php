<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Final</title>
        <meta http-equiv="content-type"; charset="utf-8">
        <link rel="stylesheet" href="encuesta.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>
        <nav>
            <div id="logo"></div>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Encuesta</a></li>
                <li><a href="catalogo.html">Catalogo</a></li>
                <li><a href="acerca de.html">Acerca De</a></li>
                <li><a href="https://www.uacj.mx/">UACJ</a></li>        
            </ul>
        </nav>

        <div class="database">
            <h2>Cuentenos sus experiencias con la compañia</h2>
    
            <form class="UBISOFT" action="guardar.php" method="POST" id="contact form" runat="server" enctype="multipart/form-data">
    
                <label for="Conocer">Como conocio a la compañia?</label><br>
                <input type="text" id="Conocer" name="Conocer" maxlength="100" required><br>
    
                <label for="Gustar">Que fue lo que mas le gusta de la compañia?</label><br>
                <input type="text" id="Gustar" name="Gustar" maxlength="100" required><br>
    
                <label for="Fav">Videojuego favorito de la desarrolladora?</label><br>
                <input type="text" id="Fav" name="Fav" maxlength="30" required><br>
    
                <label for="Fran">Cual es tu Franquisia favorita?</label><br>
                <input type="text" id="Fran" name="Fran" maxlength="30" required><br>

                <label for="Primer">Cual fue el primer Videojuego que de la UBISOFT que jugaste?</label><br>
                <input type="text" id="Primer" name="Primer" maxlength="30" required><br>

                <label for="Actual">Que Videojuego de la compañia estas jugando actualmente?</label><br>
                <input type="text" id="Actual" name="Actual" maxlength="30" required><br>

                <label for="Peor">Cual fue tu peor experiencia con nosotros?</label><br>
                <input type="text" id="Peor" name="Peor" maxlength="30" required><br>

                <label for="Opinar">Que opina de UBISOFT?</label><br>
                <input type="text" id="Opinar" name="Opinar" maxlength="100" required><br><br>
    
                <button class="submit" type="submit">Enviar</button><br><Br>
        <p>Por alguna razon que escapa de mi nula comprension, no se enlaza con el estilo, perdon xD</p>
            </form>
        </div>
        <footer>
            <p>
                Autor: Dante Uriel P&eacute;rez Flores | UACJ - HTML5 | Visita la Pagina Oficial de <a href="https://www.ubisoft.com/es-mx/">Ubisoft</a>  aqui mismo
            </p>
        </footer>
    </body>
</html>