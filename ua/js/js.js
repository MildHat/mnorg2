$(".malenkaiaPalka").width($("iframe").width())
$("iframe").width($(".rozklad").width())
var height=$(".bgtime").width()/1.5228426;$(".bgtime").height($(".bgtime").width()/1.5228426)
$(".button").css({"top":((height/100)*80.20304568)+"px","padding-top":(height/100)*4.781725+"px","padding-bottom":(height/100)*4.781725+"px"})
$(window).resize(function(){height=$(".bgtime").width()/1.5228426
$(".bgtime").height($(".bgtime").width()/1.5228426)
$(".button").css({"top":((height/100)*80.20304568)+"px","padding-top":(height/100)*4.781725+"px","padding-bottom":(height/100)*4.781725+"px"})
$(".imageWidth").height($(".imageWidth").width())
$(".malenkaiaPalka").width($("iframe").width())
$("iframe").width($(".rozklad").width())
if($('.resizeWidthButton').is(':visible')==true){$("#nav").attr({"id":"navUsl"})
$("#navUsl").css({"display":"none"})}else{if($('.resizeWidthButton').is(':visible')==false){$("#navUsl").attr({"id":"nav"})}}$("#nav").css({"display":"flex"})});$(".imageWidth").height($(".imageWidth").width());
function a(){var lengthX=$(".Box").children().length;var blockNumber=-1;for(var a=lengthX;a>=1;a--){++blockNumber;$(".xelement:eq("+blockNumber+")").addClass("xelement"+a)}if(lengthX>3){for(var f=lengthX-3;f>=1;f--){$(".xelement"+f).remove()}}}a()
function b(){var lengthNew=$(".PHPNew").children().length;var functionname=-1;for(var c=lengthNew;c>=1;c--){++functionname;$(".xelement:eq("+functionname+")").addClass("xelement"+c)}if(lengthNew>10){for(var t=lengthNew-10;t>=1;t--){$(".xelement"+t).remove()}var liNumber=(lengthNew-(lengthNew%10))/10;for(var p=1;p<=liNumber;p++){$(".navigate").append($("<li>").append($("<a>").attr({"href":"","class":"href"+p}).text(""+p)))}}var lengthPojects=$(".PHPProjects").children().length;var functname=-1;for(var c=lengthPojects;c>=1;c--){++functname;$(".ItForYou:eq("+functname+")").addClass("ItForYou"+c)}if(lengthPojects>3){for(var t=lengthPojects-3;t>=1;t--){$(".ItForYou"+t).remove()}var liNumbers=(lengthPojects-(lengthPojects%3))/3;for(var p=1;p<=liNumbers;p++){$(".navigate").append($("<li>").append($("<a>").attr({"href":"","class":"href"+p}).text(""+p)))}}var lengthLive=$(".PHPLive").children().length;var functnaeme=-1;for(var c=lengthLive;c>=1;c--){++functnaeme;$(".xelement:eq("+functnaeme+")").addClass("xelement"+c)}if(lengthLive>3){for(var t=lengthLive-3;t>=1;t--){$(".xelement"+t).remove()}var liNumberss=(lengthLive-(lengthLive%3))/3;for(var p=1;p<=liNumberss;p++){$(".navigate").append($("<li>").append($("<a>").attr({"href":"","class":"href"+p}).text(""+p)))}}var lengthPeople=$(".PHPPeople").children().length;var functnaeme=-1;for(var z=lengthPeople;z>=1;z--){++functnaeme;$(".people:eq("+functnaeme+")").addClass("people"+z)}if(lengthPeople>10){for(var t=lengthPeople-10;t>=1;t--){$(".people"+t).remove()}var liNumberss=(lengthPeople-(lengthPeople%3))/3;for(var p=1;p<=liNumberss;p++){$(".navigate").append($("<li>").append($("<a>").attr({"href":"","class":"href"+p}).text(""+p)))}}}b()
$(".headBottom > #wrapper").append($("<button class=\"resizeWidthButton\">+</button>"))
if($('.resizeWidthButton').is(':visible')==true){$("#nav").attr({"id":"navUsl"})
$("#navUsl").css({"display":"none"})}else{if($('.resizeWidthButton').is(':visible')==false){$("#navUsl").attr({"id":"nav"})}}var active=false;$(".resizeWidthButton").click(function(){if(active==false){$("#navUsl").css({"display":"block","animation-name":"top_bottom","animation-duration":"1s"})
active=true;}else{if(active==true){$("#navUsl").css({"display":"none"})
active=false;}}});
$(".boxnavigate").css("display","block");