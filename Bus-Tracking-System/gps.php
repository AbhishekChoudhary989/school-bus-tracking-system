<!html lang="en">
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>

</head>
<style type="text/css">
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        width:100%;

    }
    body{

overflow:hidden;
display:flex;

background-color:#ffffff;

    }
    .border {
        border-radius:10%;
  background-color:#AEC6CF;
  width: 300px;
  height:55%;
  border: 2px solid black;
  padding: 50px;
  margin-top: 100px;
  display: block;
  margin-left:500px;
  padding: 10px 25px; /* Some padding */
  cursor: pointer;
}
.login{ 
        background:white;
    
      }
#name{
    margin-top:-100px;
    margin-left:110px;
    font-size:20px;
    color:white;

  }
 
  
  .present{
font-size:20px;
color:black;
background-color:light green;
width:70%;
height:40px;
margin-left:60px;
margin-top:20px;
border:2px solid black;
border-radius:15%;
}
</style>
<body>
<link rel = "icon" href = 
"driver.jpg" 
        type = "image/x-icon">
<div class="login">
  <h1 style="text-align: center; background-color:#AEC6CF ; color:black;">Driver</h1> 
  <div class="border">
    <img src="person.png" alt="Driver" style="width:90px;height:140px; clip-path:circle();">
<p id="name" > Kajol</p>
<p id='date' style="color:white;font-size:18px;margin-left:110px"></p>
<p id='time' style="color:white;font-size:18px;margin-left:110px"></p>
<button class="present" >PRESENT</button>
  </div>
  </div>
<script>function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getDate() + 1+ "/" + x.getMonth() + "/" + x.getFullYear(); 
x2 =  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('date').innerHTML = x1;
document.getElementById('time').innerHTML = x2;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>

</body>
