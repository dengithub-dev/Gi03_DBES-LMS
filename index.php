<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
/*header logo*/
.logo{
  margin: 5px;
  float: left;
  width: 180px;

}
/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 25px;
  text-align: right;
  font-size: 25px;

}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}


/* Style the side navigation */
.sidenav {
  height: 70%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 190px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Middle column */
.cmiddle{
  width: 81%;

  top: 250px;
  left: 250px;
  float: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="logo"><img src="C:\xampp\htdocs\PhpProject1\img\logo.png" width= 89%;></div>
		<div class="header"><h1>Diocese of Bayombong Educational System</h1> </div>
		<aside><div class="sidenav"><menu>
				<li><a href="">Saint Louis School</a></li>
				<li><a href="">Saint Mary's School of Dupax Inc.</a></li> 
				<li><a href="">Saint Catherine's School</a></li>
				<li><a href="">Saint Jerome's Academy</a></li>
				<li><a href="">Saint Teresita's Academy</a></li>
				<li><a href="">Our of Lady Fatima School Villaverde</a></li>
                                <li><a href="">Saint Mary's Academy</a></li>
				<li><a href="">Saint Vincent School</a></li>
				<li><a href="">Saint Mark's School</a></li>
				<li><a href="">Saint Joseph School</a></li>
				<li><a href="">Immaculate Conception Academy</a></li>
				<li><a href="">Our Lady of Lourdes School</a></li>
			</menu>
		</div></aside>
	<div class="cmiddle"><iframe id="iframe" src="<?php echo $_GET['link'];?>" style="height:470px;width:1060px;"></iframe></div>	
    </body>
</html>
