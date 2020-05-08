<?php
/*
Template Name: Housing Page
*/
?>

<?php get_header();

//Breaking out of site-container
?>

<a onclick="load(0)">
	<!-- <div id="top" class="feature-image feature-staff"> -->
		<!-- <div class="title-container" id="top">
			<h1 class="tagline">Student Life Housing Guide</h1>
		</div> -->
	<!-- </div> -->
</a>

</div>

<style type="text/css">
	a{
		cursor: pointer;
	}
	.person-container > a:hover{
		color: #d31c13;
	}
	/*image shadow on hover*/
	.person-container > a:hover img{
		filter: brightness(80%);
		-webkit-filter: brightness(80%);
		-moz-filter: brightness(80%);
		/*box-shadow: 3px 3px 3px #d31c13;
		-moz-box-shadow: 3px 3px 3px #d31c13;
		-webkit-box-shadow: 10px -10px #d31c13;*/
	}
	.static-house .feature-image.feature-staff{
		background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("../south40/images/housing-cover.jpg");
		background-position: 0 40%;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.breakingnews{
		display: none;
	}
	.h-c {
		max-width: 850px;
		margin: 30px auto;
		padding: 0 15px;
	}
	#housing-container{
		padding: 0 60px;
	}
	.rights-reserved > h3, .static-house .static-nav a{
		font-family: "Georgia", "Times", serif !important;
	}
	.housing-map{
		height: 600px;
	}
	.leaflet-popup-content{
		font-size: 1.5em;
	}

	@media(max-width: 500px){
		#housing-container{
			padding: 0 30px;
		}
		.h-c{
			margin: 30px 0;
			padding: 0;
		}
		.rights-reserved{
			margin: 0;
			padding: 0;
			width: 100%;
		}
	}
</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>

<div class="static-house">

	<div class="static-nav" id="housing-nav">
		<div class="container">
			<a onclick="load(1)" id="s40f">South 40 Freshmen</a>
			<a onclick="load(2)" id="s40s">South 40 Sophomores</a>
			<a onclick="load(3)" id="voc">Village &amp; Off Campus</a>
			<div class="float-clear">
			</div>
		</div>
	</div>

	<div class="site-container" id="housing-container">
	</div>
</div>

<div class="site-container">
	<?php get_footer(); ?>
</div>
<!-- load jquery for tab selector -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>

	$(document).ready(function () {
		//$('html, body').animate({scrollTop: $('#housing-nav').offset().top}, 'slow');
		var url = window.location.href;
		var tab = url.charAt(url.length-1);
		if(tab==1||tab==2||tab==3){
			load(tab);
		}
		else{
			load(0);
		}
	});

	function load(tab){
		if(tab=="0"){
			front();
		}
		if(tab=="1"){
			fresh();
		}
		if(tab=="2"){
			soph();
		}
		if(tab=="3"){
			north();
		}
	}
	function fresh(){
		$("#housing-container").load("../south40/south40freshmen.html");
		$("#s40s").removeClass('current');
		$("#voc").removeClass('current');
		$("#s40f").addClass('current');
	}
	function soph(){
		$("#housing-container").load("../south40/south40sophomores.html");
		$("#s40f").removeClass('current');
		$("#voc").removeClass('current');
		$("#s40s").addClass('current');
	}
	function north(){
		$("#housing-container").load("../northside/villageoffcampus.html");
		$("#s40f").removeClass('current');
		$("#s40s").removeClass('current');
		$("#voc").addClass('current');
	}
	function front(){
		$("#housing-container").load("../northside/front.html");
		$("#s40f").removeClass('current');
		$("#s40s").removeClass('current');
		$("#voc").removeClass('current');
	}
</script>
