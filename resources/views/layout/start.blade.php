<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Page {{ $title }}</title>
    <style>
      @yield("css")
    </style>
    <style>
     #load{
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
}
#loading{
  position: fixed;
  left: 0.1px;
  top: 0.1px;
  width: 100vw;
  height: 100vh;
}
.z{
	width: 30vw;
	height: 30vw;
	animation: rot 2s infinite;
}
.z > div{
	width: 100%;
	height: 33%;
	
	
}
.z > div:nth-child(1){
	display: flex;
}
.z > div:nth-child(3){
	display: flex;
}
.z > div:nth-child(2){
	display: flex;
	justify-content: center;
}
.b, .e{
	position: relative;
	right: 0.1px;
}
.k{
}
.a, .b, .c, .d, .e, .k{
	width: 33%;
	
	height: 100%;
}

.a, .b, .c, .d, .e{
	border: 2px solid black;
	
}
.c{
	border-radius: 100%;
	background-color: white;
}
.a{
	border-radius: 50% 50% 0% 50%;
	background-color: blue;
}
.b{
	border-radius: 50% 50% 50% 0%;
	background-color: green;
}
.d{
	border-radius: 50% 0% 50% 50%;
	background-color: red;
}
.e{
	border-radius: 0 50% 50% 50%;
	background-color: yellow;
}
@keyframes up{
	0%{
		opacity: 1;
	}
	100%{
		opacity: 0;
	}
}
@keyframes rot{
	
	100%{
		transform: rotate(360deg);
	}
}
.dNone{
  display: none;
}
    </style>
</head>
<body onloadstart="spiner()">
    <div id="loading" class="dNone">
      <div id="load">
      @include("parts.loading")
    </div>
    </div>
    @yield("body")
<script>
  /*  const loading = document.querySelector("#loading")

function spiner(){
    loading.classList.remove("dNone")
setTimeout(() => {
    window.location.reload(true);
  }, 500);
}
*/
</script>
</body>
</html>
