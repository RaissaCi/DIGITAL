
<!-- <script type="text/javascript">
	$(document).ready(function(){
	$('.navbar').click(function() {
		$('.menu').toggleClass('open')

	});
	});
</script> -->

<script type="text/javascript">
	function myFunction() {
  document.getElementById("menu").classList.toggle("open");
  document.getElementById("line").classList.toggle("crossline");
  document.getElementById("line2").classList.toggle("crossline");
} 
</script>



<nav>
	<div class="navbar" id="navbar" onclick="myFunction()">
		<div class="line" id="line"></div>
		<div class="line" id="line2"></div>
	</div>
	<ul class="menu" id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php">Chi Siamo</a></li>
		<li><a href="index.php">Servizi</a></li>
	</ul>
</nav>
