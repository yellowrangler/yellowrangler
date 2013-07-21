var titleBanner = "Yellowrangler";
var titleIndex = 0;
var intervalVar = "";
  
function buildTitle()
{
  if (titleIndex < titleBanner.length)
  {
    $("#ywTitle").append(titleBanner[titleIndex]);
    titleIndex++;
  }
  else
  {
    window.clearInterval(intervalVar);

    $("#openingRemarks").show("slow");

    $("#healthallianze").css("display", "inline-block");
    $("#healthallianze").animate({
      left: '+=10%'
    }, 1000);
    
    $("#solorte").css("display", "inline-block");
    $("#solorte").animate({
      left: "+=15%"
    }, 1000);
    
    $("#wwb").css("display", "inline-block");
    $("#wwb").animate({
      left: "+=20%"
    }, 1000);
    
    $("#lejac").css("display", "inline-block");
    $("#lejac").animate({
      left: "+=25%"
    }, 1000);

    $("#madmoose").css("display", "inline-block");
    $("#madmoose").animate({
      left: "+=30%"
    }, 1000); 

    $("#haimg").rotate({ 
       bind: 
         { 
            mouseover : function() { 
                $(this).rotate({animateTo:360})
            },
            mouseout : function() { 
                $(this).rotate({animateTo:0})
            }
         } 
       
    });   

    $("#madmooseimg").rotate({ 
       bind: 
         { 
            mouseover : function() { 
                $(this).rotate({animateTo:360})
            },
            mouseout : function() { 
                $(this).rotate({animateTo:0})
            }
         } 
       
    });   

    $("#lejacimg").rotate({ 
       bind: 
         { 
            mouseover : function() { 
                $(this).rotate({animateTo:360})
            },
            mouseout : function() { 
                $(this).rotate({animateTo:0})
            }
         } 
       
    });   

    $("#wwbimg").rotate({ 
       bind: 
         { 
            mouseover : function() { 
                $(this).rotate({animateTo:360})
            },
            mouseout : function() { 
                $(this).rotate({animateTo:0})
            }
         } 
       
    });   

    $("#solorteimg").rotate({ 
       bind: 
         { 
            mouseover : function() { 
                $(this).rotate({animateTo:360})
            },
            mouseout : function() { 
                $(this).rotate({animateTo:0})
            }
         } 
       
    });     
  }
}

function displayPanelDetail(el)
{
  var i = 0;
  alert("hi ho");

}
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