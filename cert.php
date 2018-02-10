<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Montserrat+Alternates);



body{
  font-family: 'Montserrat Alternates', sans-serif;
  background-color: #5981D8;
}

.cert{
    background-color: #07618B;
    width: 750px;height: 620px;
    margin-left: 23%;margin-top: 5%;
    position: relative;
    border-radius: 20px 20px 20px 20px;
  -webkit-box-shadow: 0px 5px 10px 0px; 
-moz-box-shadow: 0px 5px 10px 0px;
box-shadow: 0px 5px 10px 0px;
}

.paper{
    position: absolute;
    width: 700px;
    height: 570px;
    background: white;
    left: 25px;
    top: 25px;
    border-radius: 5px 5px 5px 5px;
}

.cert .medal {
 
    width: 20px;
    height: 20px;
    top: 30px;
    left: 30px;
    position: absolute;
    padding: 10px 10px 10px 10px;
  
    z-index:30;
}

.git{
	  width: 20px;
    height: 20px;
    top: 490px;
    right: 150px;
    position: absolute;
    padding: 10px 10px 10px 10px;
  
    z-index:30;
}
.iiita{
	  width: 20px;
    height: 20px;
    top: 490px;
    right: 680px;
    position: absolute;
    padding: 10px 10px 10px 10px;
  
    z-index:30;
}
.foot{

    top: 530px;
    right: 220px;
    position: absolute;
    padding: 10px 10px 10px 10px;
  
    z-index:30;
}
.title {
  background:white;
  font-weight: bold;
  text-align: center;
  margin-top: 30px;
  height: 40px;
  z-index:999;
}

.text1 {
  
  z-index: 200;
  padding: 0px 100px;
  text-align: center;
  margin-top: 75px;
  margin-left: 50px;
  padding-bottom: 40px;
 }

.text2 {
  background-color: white;
  font-weight: bold;
  font-size: 30px;
  z-index: 200;
  margin-left: 30px;
  text-align: left;

  margin-top: 35px;
 }

	</style>
</head>
<body>
<section class="cert">
  <div class="paper">

    <div class="title">Congratulations!</div>
    <span class="text1"><i>For Having Successfully completed OpenCode'18 Event </i></span>
    <div class="text2"><b>NAME ->   <span id="l"></span></b></div>
    <div class="text2"><b>GITHUB USERNAME ->  <span id="p"></span></b></div>
    <div class="text2"><b>NO. OF ISSUES SOLVED ->  <span id="m"></span></b></div>
    <div class="text2"><b>SCORE ->  <span id="n"></span></b></div>
    <div class="text2"><b>FAVOURITE PROJECT ->  <span id="o"></span></b></div>
    
  </div>
  <div class="medal"><img src="opencode.png" height="90" width="90"></div>
  <div class="git"><img src="github-logo.png" height="90" width="150"></div>
<div class="col-md-4 col-sm-4 col-xs-12 text-center foot">
					<p>Created with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://opencode18.github.io/" target="_blank">TEAM OPENCODE</a></p>
				</div>
      <div class="iiita"><img src="iiita-logo1.gif" height="90" width="90"></div>
 
 
</section>

</body>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script language="JavaScript">
  
 
    var parameters = location.search.substring(1).split("&");

    var temp = parameters[0].split("=");
    l = unescape(temp[1]);
    l = l.replace('+',' ');
    temp = parameters[1].split("=");
    p = unescape(temp[1]);
    temp = parameters[2].split("=");
    m = unescape(temp[1]);
    temp = parameters[3].split("=");
    n = unescape(temp[1]);
    temp = parameters[4].split("=");
    o = unescape(temp[1]);
    o = o.replace('+',' ');
    document.getElementById("l").innerHTML = l;
    document.getElementById("p").innerHTML = p;
 	document.getElementById("m").innerHTML = m;
 	document.getElementById("n").innerHTML = n;
 	document.getElementById("o").innerHTML = o;



</script>
</html>
