<div style="position:absolute; z-index:200; background: #FFF; top: 0px; left:0px; right:0px; padding:20px; margin:0px;  border-bottom: 4px solid #A1A1A1;" class="col-sm-12 row">
  <div class="col-xs-4" >
<<<<<<< HEAD
    <img src="{{url('/img/bizlac/bizlac.png')}}" width="60" >
=======
    <img src="{{url('/img/bizlac/bizlac.jpg')}}" height="60">
>>>>>>> 488bff2650c17beb41db6fdb8328ef0534074212
  </div>
    @if(Auth::user() != null)
      <div class="col-xs-6 down" >
    <!--  	<a class="menuOption NoShadow " href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/BizlacWeb/public/">PÁGINA PRINCIPAL</a>-->
      </div>
      <div class="col-xs-2">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" style="border:none !important; color:#009999 !important;"
          type="button" id="menu1" data-toggle="dropdown"><?php echo Auth::user()->Nombre. " ".Auth::user()->APaterno;?>
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li>
            <a style="color:#009999 !important"
              href="http://<?php echo $_SERVER['SERVER_NAME']?>/BizlacWeb/public/logout">
              CERRAR SESIÓN</a>
           </li>
        </ul>

        </div>
      </div>
    @endif
    </div>
