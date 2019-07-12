<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>



<style>

#redes{
padding-right:40%;	
	}
	
#redes a{
	display: inline;	
	float: left;
	padding-right:40%;	
	}

body{
	background-color: white;
	}

/* Add a black background color to the top navigation */
.topnav {
    overflow: hidden;
	background-color: white;
	margin-right:3%;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: right;
    display: block;
    color: grey;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;

}

/* Add an active class to highlight the current page */
.active {
	background-color: #FFFFFF;
	color: grey;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
    float: right;
    overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
    font-size: 17px; 
    border: none;
    outline: none;
    color: grey;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
	display: none;
	position: absolute;
	background-color: #FFFFFF;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #555;
    color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
    display: block;
}

#logo_header{
	float: left;
    display: block;
	padding-top:1em;
	margin-left:3%;
	background-color:white;
	}
	
	
#quienes_somos_container{
	width: 100%;
	margin-left:auto;
	margin-right:auto;
	background-color: #F2F2F2;
	margin-top:-5.5em;
	box-shadow: inset 0px 0px 10px;
	}
	
#quienes_somos_container h1{
	line-height: 2em;
	font-size:22px;
	text-transform: uppercase;
	}

#quienes_somos_container p{
	line-height: 1.8;
	font-size:14px;
	color: #999;
	font-family: "Helvetica", sans-serif;
	text-align: justify; 
	}
	
#quienes_somos_container h4{
	line-height: 1.8;
	font-size:19px;
	color: #ADADAD;
	font-style: italic;	
	text-align: justify; 
	}
	
#quienes_somos_container ul li{
	line-height: 1.8;
	font-size:14px;
	color: #999;
	font-family: "Helvetica", sans-serif;
	text-align: justify; 
	}

#quienes_somos_section1{
	min-height:41em;
	margin-left:17%;
	margin-right:17%;
	margin-top: 6em;
	}
	
#nuestra_empresa{
	float:left;
	padding-top:6em;
	display:inline-block;
	}

#testimonio_adrian{
	float:left;
	clear:both;
	display:inline-block;
	}

#quienes_somos_section2{
	margin-left:17%;
	margin-right:17%;
	}
	
#quienes_somos_section3{
	margin-left:17%;
	margin-right:17%;
	}

#quienes_somos_section4{
	margin-left:17%;
	margin-right:17%;
	margin-top:4em;
	padding-bottom:6em;
	}


/* PAGINA CONTACTO */

#contact_section {
	background-color: #ffffff;
	border-top: 1px solid #000;
	color: #fff;
	background-size: 100%;
	padding-top: 15px;
	padding-right: 15px;
	padding-bottom: 200px;
	padding-left: 15px;
	min-height: 180em;
}

.box_section {
	background-color: #ffffff;
	border-top: 1px solid #000;
	color: #fff;
	background-size: 100%;
	padding-top: 15px;
	padding-right: 15px;
	padding-bottom: 200px;
	padding-left: 15px;
	min-height: 180em;
}



/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>

<body>
<div id ="logo_container"><a href="index.php"><img src="imagenes/logo_liosar.png" name="logo" width="215" id="logo_header"></a></div>
<div class="topnav" id="myTopnav">
<a href="suscribirse.php">Suscribirse</a>
  <a href="contacto.php">Contacto</a>
  <a href="index.php">Servicios</a>
   <div class="dropdown">
    <button class="dropbtn">Productos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php">Link 1</a>
      <a href="index.php">Link 2</a>
      <a href="index.php">Link 3</a>
    </div>
  </div> 
  <a href="nosotros.php">Nosotros</a>
 
  <a href="index.php">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

