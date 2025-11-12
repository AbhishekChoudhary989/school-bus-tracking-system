<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  .login{
    background-color: royalblue; font-weight: bold;border: 3px solid black;
    }
#submit{
width:25%;
height:30%;
}
#time{
margin-left:500px;
}
section{
  display: flex;
  flex-direction: column;
  padding: 0.5em;
}

h1{
  font-weight: 400;
  font-size: 2em;
  cursor: default;
  margin: 0 0 .5em 0;
}

input[type='checkbox']{ height: 0; width: 0; }

input[type='checkbox'] + label{
  position: relative;
  display: flex;
  margin: .6em 0;
  align-items: center;
  color: #9e9e9e;
  transition: color 250ms cubic-bezier(.4,.0,.23,1);
}
input[type='checkbox'] + label > ins{
  position: absolute;
  display: block;
  bottom: 0;
  left: 2em;
  height: 0;
  width: 100%;
  overflow: hidden;
  text-decoration: none;
  transition: height 300ms cubic-bezier(.6,.0,.25,1);
}
input[type='checkbox'] + label > ins > i{
  position: absolute;
  bottom: 0;
  font-style: normal;
  color: #4FC3F7;
}
input[type='checkbox'] + label > span{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 1em;
  width: 1em;
  height: 1em;
  background: transparent;
  border: 2px solid #9E9E9E;
  border-radius: 2px;
  cursor: pointer;  
  transition: all 250ms cubic-bezier(.4,.0,.23,1);
}

input[type='checkbox'] + label:hover, input[type='checkbox']:focus + label{
  color: #fff;
}
input[type='checkbox'] + label:hover > span, input[type='checkbox']:focus + label > span{
  background: rgba(255,255,255,.1);
}
input[type='checkbox']:checked + label > ins{ height: 100%; }

input[type='checkbox']:checked + label > span{
  border: .5em solid #FFEB3B;
  animation: shrink-bounce 200ms cubic-bezier(.4,.0,.23,1);
}
input[type='checkbox']:checked + label > span:before{
  content: "";
  position: absolute;
  top: .6em;
  left: .2em;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  transform: rotate(45deg);
  transform-origin: 0% 100%;
  animation: checkbox-check 125ms 250ms cubic-bezier(.4,.0,.23,1) forwards;
}

@keyframes shrink-bounce{
  0%{
    transform: scale(1);
  }
  33%{    
    transform: scale(.85);
  }
  100%{
    transform: scale(1);    
  }
}
@keyframes checkbox-check{
  0%{
    width: 0;
    height: 0;
    border-color: #212121;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  33%{
    width: .2em;
    height: 0;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  100%{    
    width: .2em;
    height: .5em;    
    border-color: #212121;
    transform: translate3d(0,-.5em,0) rotate(45deg);
  }
}
</style>

<body>
<div id="top">
<div class="login">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -100px;padding: 5px; font-size: 50px; font-family: 'Chakra Petch', sans-serif;">School Bus Tracking System</p>
 </div>
<div id="time">
<section>
  
  <h1>Choose a Time</h1>
  
  <input id='one' name="time"  type='checkbox' />
  <label for='one'>
    <span></span>
   5 minutes
    <ins><i>   5 minutes</i></ins>
  </label>
  
  <input id='two'  name="time"  type='checkbox' />
  <label for='two'>
    <span></span>
       10 minutes
    <ins><i>10 minutes</i></ins>
  </label>
  
  <input id='three'  name="time" type='checkbox' />
  <label for='three'>
    <span></span>
     15 minutes
    <ins><i> 15 minutes</i></ins>
  </label>
  
  <input id='four'  name="time"  type='checkbox' />
  <label for='four'>
    <span></span>
   20 minutes
    <ins><i>20 minutes</i></ins>
  </label>
  <input type="submit"  id="submit" value="Submit">
  
</section>
</div>
<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
</div>
</body>
</html>