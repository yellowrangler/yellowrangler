<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="/javascript/jquery-ui-1.10.1.custom/css/ui-lightness/jquery-ui-1.10.1.custom.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link rel="stylesheet" href="/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="/javascript/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/javascript/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/javascript/jquery-ui-1.10.1.custom/js/jquery-ui-1.10.1.custom.js"></script>
<script type="text/javascript" src="/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="/javascript/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/javascript/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/javascript/jquery-ui-1.10.1.custom/js/jquery-ui-1.10.1.custom.js"></script>
<script type="text/javascript" src="/nivo-slider/jquery.nivo.slider.js"></script>

<style>
.container {
	position:absolute;top:0;left:0;width:100%;margin: 0 auto;padding:0;background-color:#F6F7ED; 
}

#banner {
	display:block;height:120px;margin:0;padding:0;width:100%;background:#F6F7ED url(/images/ywstripe.png) repeat-x 0 -5px;
}

#main-content {
	display:block;margin:0;padding-top:10px;width:100%;
}

#section-panel {
	display:block; padding-left:25px;  
}

.section-article {
	display:block; padding-left:0;font-family:'OFL Sorts Mill Goudy TT', georgia, times, serif;font-size:15px;width:100%;white-space: wrap;
	margin-left: 0 ;
  margin-right: 0 ;
}

#leftselect {
	float:left; width:35%; display:block;
}

#show-panel {
	float:left; width:55%; display:block; height:340px; background-color:#F6F7ED; overflow:auto; padding-left:30px;
}

/*start of image slider stuff*/
.slider-wrapper { 
	width: 80%; 
	margin: 5px auto;
}

#image-slider  {
	display:block;
	padding-top:5px;
}
/*end of image slider stuff*/


body {
	font-family:'OFL Sorts Mill Goudy TT','PT Sans', Helvetica, sans-serif;background-color:#F6F7ED;
} 

/*h1, h2, h3, h4, nav a {
	font-family: 'OFL Sorts Mill Goudy TT', georgia, times, serif;
}*/

#displayArea img:hover {
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 10px 10px 5px #888;
}

.anchorList {
	text-decoration:none;color:black;
}

.anchorList:hover {
	text-decoration:none;color:blue;
}

.lheader {
	list-style-type:none;padding-left:0;margin-left:0;
}
</style>

</head>
<body>
<script type="text/javascript" >
var titleBanner = "Yellowrangler";
var titleIndex = 0;
var intervalVar = "";

$(document).ready(function() {
	$("#ywTitle").append(titleBanner);
});

</script>

<div class="container">
<div id="banner">
<a title="Back to Home Page" href="..\index.html"><img border="0" style="float:left; padding-left:75px; padding-top:15px" src="../images/yellowranglercartoon.png"></a>
<h1 id="ywTitle" style="float:left; padding-left:15px; padding-top:15px; font-size: 35px;" ></h1>
</div> <!-- end of banner -->

<div id="main-content">
<div class="yrbreadcrumbs">
</div> <!-- end of yrbreadcrumbs -->

<div id="section-panel">
<div class="section-article">
<h2>Learning</h2>

<div id="leftselect">
<h3>Comeing Soon!</h3>
</div> <!-- end of  leftselect -->
<div id="show-panel">
</div>
</div> <!-- end of section-article -->
</div> <!-- end of section-panel -->

</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
