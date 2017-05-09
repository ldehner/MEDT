<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=index.php">
	<?php
}
?>
<html>
	
	<head>
        <meta charset="utf-8">
	        <style>
           
            /*basic reset */
           
            *{
                margin: 0;
                padding: 0;
            }
           
            body {background: black;}
            canvas {display:block;}
       
        </style>
		<link rel="stylesheet" type="text/css" href="php.css">
	</head>
	<body>
        <canvas style="position: absolute;"id="c"></canvas>
       
        <script>
        // geting canvas by id c
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");
 
        //making the canvas full screen
        c.height = window.innerHeight;
        c.width = window.innerWidth;
 
        //chinese characters - taken from the unicode charset
        var matrix = "再见阴茎乱搞阴道";
        //converting the string into an array of single characters
        matrix = matrix.split("");
 
        var font_size = 10;
        var columns = c.width/font_size; //number of columns for the rain
        //an array of drops - one per column
        var drops = [];
        //x below is the x coordinate
        //1 = y co-ordinate of the drop(same for every drop initially)
        for(var x = 0; x < columns; x++)
            drops[x] = 1;
 
        //drawing the characters
        function draw()
        {
            //Black BG for the canvas
            //translucent BG to show trail
            ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
            ctx.fillRect(0, 0, c.width, c.height);
 
            ctx.fillStyle = "#0F0"; //green text
            ctx.font = font_size + "px arial";
            //looping over drops
            for(var i = 0; i < drops.length; i++)
            {
                //a random chinese character to print
                var text = matrix[Math.floor(Math.random()*matrix.length)];
                //x = i*font_size, y = value of drops[i]*font_size
                ctx.fillText(text, i*font_size, drops[i]*font_size);
 
                //sending the drop back to the top randomly after it has crossed the screen
                //adding a randomness to the reset to make the drops scattered on the Y axis
                if(drops[i]*font_size > c.height && Math.random() > 0.975)
                    drops[i] = 0;
 
                //incrementing Y coordinate
                drops[i]++;
            }
        }
 
        setInterval(draw, 10);
 
       
        </script>
        <div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="index2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Fächer</a>
            <ul>
                <li id="anders"><a href="mathe.php">Mathematik</a></li>
            </ul>
            </li>
        
        <li id="anders"><a class="dropdown" href="#"><?php	  echo $_SESSION["username"]	?></a>
            <ul>
					<?php
					if($save = 1){
						?><li id="anders"><a href="register.php">Jemanden registrieren</a></li>
						<?php
					}
						?>
					<li id="anders"><a href="account.php">Passwort ändern</a></li>
					<li id="anders"><a href="php3.php">Logout</a></li>
            		

            </ul>
        
        
           <li id="anders"><a class="dropdown" href="">Sonstiges</a>
            <ul>
                <li id="anders"><a href="zufall.php">Zufallszahlen Generator</a></li>
				
                
            </ul>
    </ul>
</nav>
		</div>
		<br>
		<br>
		<br><br><br>
		<form id="form" action="trashsend.php" style="position: relative; color:white " method="post">
			<input id="input" type="text" name="von" placeholder="Von E-Mail" style="margin-bottom: 10px; border: solid#646464;"/> @
			<input id="input" type="text" name="vonanhang" placeholder="Von E-Mail Anhang" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="wem" placeholder="Von Person Name" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="an" placeholder="An E-Mail" style="margin-bottom: 10px; border: solid#646464;"/> @
			<input id="input" type="text" name="anhang" placeholder="An E-Mail Anhang" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="betreff" placeholder="Betreff" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<textarea style="width:1000px;height:400px;margin-bottom: 10px; border: solid#646464;background-color: rgba(255,255,255,0.40);color: white; font-size: 18pt;" type="text" placeholder="Text" name="text"></textarea><br />
			<input id="input" type="submit" value="Senden" style="margin-bottom: 10px; border: solid#30940D; background-color: rgba(255,255,255,0.40)"/>
		</form>
	</body>
</html>