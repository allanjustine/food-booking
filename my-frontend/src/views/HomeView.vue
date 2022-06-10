<template>
  <main>
	  <h1 class="welcome">Welcome</h1>
	  <div class="look-out">&#8595;&#8595; Look out &#8595;&#8595;</div>
	  <RouterLink class="nav-3" to="/order">
		<div class="row">
			<div class="column">
				<div class="card">
  					<img src="@/assets/image1.jpg" alt="picture" style="width:100%">
					<div class="container">
						<h4><b>Burger</b>	</h4>
						<p id="price"><span class="red"> &#8369;399 </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8369;299</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
  					<img src="@/assets/image2.jpg" alt="picture" style="width:100%">
					<div class="container">
						<h4><b>Calamares</b></h4> 
						<p id="price"><span class="red"> &#8369;99 </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8369;89</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
  					<img src="@/assets/image3.jpg" alt="picture" style="width:100%">
					<div class="container">
						<h4><b>Fried Chicken</b></h4> 
						<p id="price"><span class="red"> &#8369;289 </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8369;259</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
  					<img src="@/assets/image4.jpg" alt="picture" style="width:100%">
					<div class="container">
						<h4><b>Spicy Shrimp</b></h4> 
						<p id="price"><span class="red"> &#8369;239 </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8369;209</p>
					</div>
				</div>
			</div>
		</div>
		</RouterLink>
  </main>
</template>

<style>

body {
	font-family: Arial, Helvetica, sans-serif;
}
.column {
	float: left;
	width: 25%;
	padding: 0 10px;
}
.row {
	margin: 0 -5px;
}
.row:after {
	content: "";
	display: table;
	clear: both;
}
.card {
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	padding: 5px;
	text-align: center;
	transition: 0.3s;
	background-color: rgba(65, 65, 65, 0.545);
	height: 250px;
}
.welcome {
	text-align: center;
	font-size: 100px;
	font-weight: bolder;
	background: -webkit-linear-gradient(rgb(112, 64, 64), rgb(63, 12, 12));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font-family: 'Merienda';
}
.container {
	padding: 2px 16px;
}
.card:hover {
	box-shadow: 0 8px 16px 0 rgb(109, 109, 109);
}
h4 {
	color: rgb(255, 255, 255);
}
.red {
	text-decoration-line: line-through;
	color: red;
}
#price {
	color: rgb(255, 255, 255);
}
@-moz-keyframes blink {0%{opacity:1;} 50%{opacity:0.5;} 100%{opacity:1;}}
@-webkit-keyframes blink {0%{opacity:1;} 50%{opacity:0.5;} 100%{opacity:1;}}
@-ms-keyframes blink {0%{opacity:1;} 50%{opacity:0.5;} 100%{opacity:1;}}
@keyframes blink {0%{opacity:1;} 50%{opacity:0.5;} 100%{opacity:1;}}

.look-out {
    padding: 15px 15px 15px 15px;
    text-align:center;
	width: 200px;
	margin: auto;
	color: rgb(155, 0, 0);
    margin-bottom: 30px;
	margin-top: -10px;
    font-size: 25px;
    border-radius: 5px;
    -moz-transition:all 0.5s ease-in-out;
    -webkit-transition:all 0.5s ease-in-out;
    -o-transition:all 0.5s ease-in-out;
    -ms-transition:all 0.5s ease-in-out;
    transition:all 0.5s ease-in-out; 
    -moz-animation:blink normal 1.5s infinite ease-in-out;
    -webkit-animation:blink normal 1.5s infinite ease-in-out;
    -ms-animation:blink normal 1.5s infinite ease-in-out;
    animation:blink normal 1.5s infinite ease-in-out;
}
</style>