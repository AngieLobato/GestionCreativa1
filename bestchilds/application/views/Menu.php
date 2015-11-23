<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>                
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="linkhome"><a id="home" href="<?=site_url();?>/Home/Index">Inicio</a></li>
                <li id="linkwho"><a id="who" href="#">Quienes Somos</a></li>
                <li id="linkpub"><a id="pub" href="<?=site_url();?>/Publicacion/Index">Publicaciones</a></li>
                <li id="linkcli"><a id="cli" href="<?=site_url();?>/cliente/Index">Clientes</a></li>
                <li id="linkarti"><a id="arti" href="<?=site_url();?>/Articulos/Index">Articulos</a></li>
                <li id="linkcontac"><a id="contac" href="#">Contactos</a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>