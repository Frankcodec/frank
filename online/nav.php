<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav>
	<h3 id="fashion" onclick="openPage(id)">Fashion</h3>
    <h3 id="electronics" onclick="openPage(id)">Electronics</h3>
	<h3 id="automobiles" onclick="openPage(id)">Automobiles</h3>
	<h3 id="foods" onclick="openPage(id)">Surge</h3>
	<h3 id="books" onclick="openPage(id)">Books&Lifestyle</h3>
	<h3 id="mobile" onclick="openPage(id)">Mobile</h3>
	<h3 id="others" onclick="openPage(id)">Others</h3>
</nav>
</body>
<style type="text/css">
	nav{
		background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        color: #fff;
    	display: flex;
    	flex-direction: row;
    	justify-content: space-around;
    	height: 55px;
	}
		#foods{
		border-bottom: 4px solid #fff;
	}
	nav h3{
		color: #fff;
		margin-left: 15px;
		margin-right: 15px;
		padding-bottom: 30px;
		cursor: pointer;
		transition: color 1.2s;
	}
	nav h3:hover{
		color: orange;
	}
	#one{
		border-bottom: 3px solid #fff;
	}
</style>
<script type="text/javascript">
	function openPage(x){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function (){
		if(this.readyState == 4  && this.status == 200){
			document.getElementById('stream').innerHTML = this.responseText;
		}
	};
	if(x == "automobiles"){
		xhttp.open("GET","options/automobiles.php",true);
	}
	if(x == "books"){
		xhttp.open("GET","options/books.php",true);
	}
	if(x == "electronics"){
		xhttp.open("GET","options/electronics.php",true);
	}
	if(x == "fashion"){
		xhttp.open("GET","options/fashion.php",true);
	}
	if(x == "foods"){
		window.location.replace('dashboard.php');
	}
	if(x == "mobile"){
		xhttp.open("GET","options/mobile.php",true);
	}
	if(x == "others"){
		xhttp.open("GET","options/others.php",true);
	}
	xhttp.send();
}
</script>
</html>

