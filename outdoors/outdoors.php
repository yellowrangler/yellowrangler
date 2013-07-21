<html>
<head>
<?php include("../includes/head.php"); ?>

<style type="text/css">
.newsItem {
	width:85%;
}

.imgpointer:hover {
    cursor:pointer;
}
</style>

<script type="text/javascript" >
$(document).ready(function() {
    $('.imgpointer').click(function() {
    	var img = new Image();
    	img.src = this.id;
    	// var img = document.getElementById(this.id); 
    	var width = img.clientWidth;
		var height = img.clientHeight;
        var imageurl = "showimages.php?image="+this.src;
      PopUP(imageurl, 'image', height, width, 0);
    }); 
});

function PopUP (urlParm, wname, ht, wt, restrict) 
{
    var winLeft, winTop;
    
    winLeft = (screen.width-wt)/2;
    winTop = (screen.height-(ht+110))/2; 

    if (restrict == 1)
    {
        popNew = window.open(urlParm,wname,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,width="+wt+",height="+ht+",left="+ winLeft+",top="+winTop+",resizable=0"); 
    }
    else
    {
        popNew = window.open(urlParm,wname,"toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,width="+wt+",height="+ht+",left="+winLeft+",top="+winTop+",resizable=1");       
    }
    return false;
}
</script>
</head>
<body>
<?php include("../includes/banner.php"); ?>

<div id="main-content">
<div class="yrbreadcrumbs">
</div> <!-- end of yrbreadcrumbs -->

<div id="section-panel">
<div class="section-article">
<h2>Outdoors</h2>

<h3>The Appalachain Trail</h3>

<div style="float:left">
<img border="0" class="imgpointer" style="width:90%;padding-right:15px;" id="images/appalachian_trail_map.jpg" src="images/appalachian_trail_map.jpg">
</div>
<div style="float:left; width:55%;">
<p>My son William is currently walking the Appalachain trail. As a result, I am including a map of the trail so that I can follow him.</p> 
<br /><br />
I will add information I get from him regarding his trip in most recent at top.
</div>

<div id="article2" style="clear:both;display:block;padding-top:35px;" class="newsItem">
<span>Date: April 11, 2013</span>
<br />
<span>Place: Erwin, TN</span>
<br /><br />
<span>In Erwin Tennessee. Weathers been a lot better since leaving the smokeys but got 
12 hr stomach virus last night as did a handful of people I shared a shelter with 2 
nights ago. I and them went into town today to recover and miss tonights 
thunderstorm. Not sure what mountain this was but it was a couple days ago;</span>
<br /><br />
<img border="0" id="images/04112013-mountains.png" class="imgpointer" style="padding-right:45px;width:60%;" src="images/04112013-mountains.png">
</div>

<div id="article1" style="position:relative;display:block;padding-top:35px;" class="newsItem">
<span>Date: March ??, 2013</span>
<br />
<span>Place: Springer Mountain, GA</span>
<br /><br />
<span>Will starts his hike.</span>
<br /><br />
</div>

<div id="end" style="position:relative;display:block;height:300px;">
<br /><br />
</div>

</div> <!-- end of section-article -->
</div> <!-- end of section-panel -->

</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
