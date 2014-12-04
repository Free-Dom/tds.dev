<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="canonical" href="" />

  <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

  <!-- css style -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>


  <div class="container-fluid">

    <div class="container">

      <div class="row">
       <div class="navbar-header">
        <a class="navbar-brand"  href="" title="">Logo</a>

      </div>


      <ul class="nav navbar-nav navbar-right" >
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
            <li class="icl-en active_lang">
              <a href="#" hreflang="en"><img class="iclflag" src="/template/icons/en.png" alt="en" title="en"> English</a>

            </li>
            <li class="icl-de active_lang">
              <a href="#" hreflang="de"><img class="iclflag" src="/template/icons/de.png" alt="de" title="de"> Deutsch</a>

            </li>
            <li class="icl-it active_lang">
              <a href="#" hreflang="it"><img class="iclflag" src="/template/icons/it.png" alt="it" title="it">Italiano</a>

            </li>
          </ul>
        </li>
      </ul>

    </div>

    <nav class="navbar navbar-default" role="navigation" >
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="first active">
              <a href="#">Home</a>

            </li>

            <li >
              <a href="#">Eventi</a>

            </li>

            <li >
              <a href="#">Articoli</a>

            </li>

            <li class="menu">
              <a href="#">Risorse</a>

            </li>
          </ul>

        </div>

      </div>
    </nav>
  </div>
</div>


<div class="container-fluid">
  <div class="container">

    @yield ('content')

  </div>
</div>





<div class="container-fluid footer">

  <div class="container">

  </div>

</div>


</body>
</html>
