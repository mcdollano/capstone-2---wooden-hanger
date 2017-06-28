<div>	
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
			&times;
		</a>
		<a href="#">Home</a>
		<a href="#">About Us</a>
		<a href="#">Catalog</a>
		<a href="#">Blog</a>
		<a href="#">Sign In</a>
	</div>
	<div id="navbar-main">
		<span id="navbtn" style="font-size:30px;cursor:pointer" onclick="openNav()" onclick="closeNav()">&#9776;</span>
		<img src="images/woodenhanger_logo.png" id="brand_logo">
		<a href="#"><i id="nav-icon-search" class="fa fa-search search-icon"></i></a>
		<a href="#"><i id="nav-icon-user" class="fa fa-user-circle search-icon"></i></a>
	</div>

</div>

<script type="text/javascript">
	function openNav() {
		document.getElementById('mySidenav').style.width = "250px";
		document.getElementById("navbtn").style.visibility = "hidden";
		document.getElementById("body").style.marginLeft = "250px";
		document.getElementById("nav-icon-search").style.visibility = "hidden";
		document.getElementById("nav-icon-user").style.visibility = "hidden";
	}
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("navbtn").style.visibility = "visible";
		document.getElementById("body").style.marginLeft = "0";
		document.getElementById("nav-icon-search").style.visibility = "visible";
		document.getElementById("nav-icon-user").style.visibility = "visible";

	}
</script>
	