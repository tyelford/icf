<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>

<link rel='stylesheet' href='styles/bootstrap.min.css'>
<link rel='stylesheet' href='styles/boiler.css'>

<script src='scripts/jquery-2.2.5.js'></script>
<script src='scripts/bootstrap.min.js'></script>

</head>


<body>
	<div id='wrapper'></div>
	
	<header>
	  <nav id='header-nav' class='navbar navbar-default'>
	    <div class='container' id='headerContainer'>
	      
	      <div class='navbar-header' id='navbarheader'>
  	        <a href='/' class='pull-left visible-md visible-lg'>
  	          <div id='logo-img' alt='ICF Builders Logo'></div>
  	        </a>
	        <div class='pull-left navbar-brand'>
	           <a href='/'>
	             <h1>ICF Builders Inc.</h1>
	           </a>
	           <p>
	             <span id='subBrand'>One leg up on the competition</span>
	           </p>
	        </div>
	        
	        <!--Mobile Menu-->
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	        
	      </div>
	      
	      <div id="collapsable-nav" class="collapse navbar-collapse">
            <ul id="nav-list" class="nav navbar-nav navbar-right">
                <li>
                    <a href="/what-is-icf.php">
                        <span class="glyphicon glyphicon-question-sign"></span>
                        <br class="hidden-xs" />
                        What is ICF
                    </a>
                </li>
                <li>
                    <a href="/benefits-of-icf.php">
                        <span class="glyphicon glyphicon-cog"></span>
                        <br class="hidden-xs" />
                        Benefits of ICF
                    </a>
                </li>
                <li>
                    <a href="/about.php">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        <br class="hidden-xs" />
                        About Us
                    </a>
                </li>
                <li>
                    <a href="/contact.php">
                        <span class="glyphicon glyphicon-inbox"></span>
                        <br class="hidden-xs" />
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
	      
	    </div>
	  </nav>
	</header>
