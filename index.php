 <!DOCTYPE html>
  <html>
  <head>
<title>Conclipse Games | Home</title>
<?php include("master/overhead.html");?>
      
<script>
    @keyframes toadd {
        from {transform: rotate(45deg); -webkit-transform: rotate(45deg);}
        to {transform: rotate(0deg); -webkit-transform: rotate(0deg);}
    }
    @keyframes tocross {
        from {transform: rotate(0deg); -webkit-transform: rotate(0deg);}
        to {transform: rotate(45eg); -webkit-transform: rotate(45deg);}
    }
      .home {
    animation-name: toadd;
    animation-duration: 1s;
    animation-iteration-count: 1;
}
.home.active {
    animation-name: tocross;
    animation-duration: 1s;
    animation-iteration-count: 1;
}
</script>
</head>
    <body>
        <!--NAVBAR-->
<?php include("master/nav.php");?>
        
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center blue-text text-lighten-1">Conclipse <span class="light">Games</span></h1>
        <div class="row center">
          
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img style="-webkit-filter: blur(10px); filter: blur(10px);" id="headerimg"></div>
  </div>
<div class="container">
        <h2>Projects:</h2>
    
    <div class="card">
         <div class="card-image waves-effect waves-light">
             <img class="activator" src="https://cloud.githubusercontent.com/assets/13873228/10803038/2891f3d0-7db8-11e5-946a-2c1fefd6cbcb.png">
                 </div>
         <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Elytra Minigame<i class="material-icons right">more_vert</i></span>
             <p><a href="http://conclipsegames.tk/mc/maps/elytra-minigame.php">See More</a></p>
         </div>
         <div class="card-reveal">
             <span class="card-title blue-text"><span class="blue-text">Elytra Minigame </span><i class="material-icons right">close</i></span>
             <p class="flow-text">This small, singleplayer minigame for Minecraft uses Elytras added in Minecraft 1.9. The aim is to fly through rings that give you more points. Diamond rings give you three points and gold rings give you one point. </p>
         </div>
     </div>
    
    <div class="card">
    <div class="card-image waves-effect waves-light">
      <img class="activator" src="https://cloud.githubusercontent.com/assets/13873228/10711803/3a6e6db8-7a7f-11e5-98aa-068606186b16.PNG">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Command Writer<i class="material-icons right">more_vert</i></span>
      <p><a href="http://conclipsegames.tk/mc/plugins/cmdwriter.php">Download</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><span class="blue-text">Command Writer</span><i class="material-icons right">close</i></span>
      <p class="flow-text">Command Writer is a minecraft plugin for 1.8 that allows multiple commands to be run in a single command. The commands you want to run can be put in a txt file on the server and when the command is executed, all commands in that file will be run. There is no limit to the amount of commands you can put in the text file or how many you can have. You can specify if you want all players to be allowed to run the command or just admin, and the commands will work inside a command block.</p>
    </div>
    </div>
   
    
       <!-- <div class="card">
    <div class="card-image waves-effect waves-light">
      <img class="activator" src="http://img51.imageshack.us/img51/8777/grfu.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">AToTweaks</span><i class="material-icons right">more_vert</i>
      <p><a href="http://conclipsegames.tk/mc/mods/atotweaks.php">Download</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><span class="blue-text">AToTweaks</span><i class="material-icons right">close</i></span>
       <p class="flow-text">AToTweaks is a simple and lightweight Minecraft mod that adds some small tweaks such as recipes for uncraftable items and new ways to get some items that were difficult to get such as slimeballs and lapis lazuli. The mod also adds some new items and tea.</p>
    </div>
  </div> -->
    
    
    
    
     
     <div class="card">
         <div class="card-image waves-effect waves-light">
             <img class="activator" src="https://cloud.githubusercontent.com/assets/13873228/10760758/1b1cfc5c-7cb6-11e5-8619-706954d2a77a.png">
                 </div>
         <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Lights Out<i class="material-icons right">more_vert</i></span>
             <p><a href="http://conclipsegames.tk/mc/maps/lights-out.php">See More</a></p>
         </div>
         <div class="card-reveal black">
             <span class="card-title blue-text"><span class="blue-text">Lights Out </span><i class="material-icons right">close</i><span class="blue-text"><br>Minecraft Horror Map</span></span>
             <p class="flow-text white-text">This horror map made for Minecraft 1.8 contains voice acting, custom block models and jumpscares! The block models are by <a href="https://www.youtube.com/user/VanillaBurp">VanillaBurp</a>, the command blocks are by <a href="https://www.youtube.com/user/samasaurus6">Samasaurus6</a>, the voice acting is by Ravenah, and help was given by inky2013, <a href="https://www.youtube.com/channel/UCnY51yTM2bb7xViXsII6HEw">acrominer</a> and <a href="https://twitter.com/t2t2">t2t2</a>.</p>
         </div>
     </div>
    
    <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i id="add" class="material-icons home">add</i> More Projects</div>
      <div class="collapsible-body"> <div class="card">
    <div class="card-image waves-effect waves-light">
      <img class="activator" src="https://cloud.githubusercontent.com/assets/13873228/9836791/7ede4c88-5a1e-11e5-8743-feffcce2f54c.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Back\Pack<i class="material-icons right">more_vert</i></span>
      <p><a href="http://conclipsegames.tk/mc/modpacks/backpack.php">Download</a></p>
    </div>
         <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><span class="blue-text">Back\Pack</span><i class="material-icons right">close</i></span>
       <p class="flow-text">The Back\Pack is a balanced, lightweight and server-friendly modpack for 1.7.10. It contains a selection of the best magic and tech mods as well as addon mods so all of the mods can easily interact with each other to create a more real environment. The modpack is avaliable on the technic launcher and all the mods are avaliable in a sperate file too.</p>
    </div>
  </div></div>
    </li>
  </ul>
        
    
    
      </div>

    <?php include("master/footer.html");?>

        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
    $('.home').click(function(){
        $('.home').removeClass('active');
        $(this).addClass('active');
    });
});
        $( document ).ready(function(){
             $(".button-collapse").sideNav();
            
      $('.parallax').parallax();
            });
        var headerimages = [
             "https://cloud.githubusercontent.com/assets/13873228/9389590/d72a04b8-4763-11e5-87f9-2386bb0bbbe2.jpeg",
             "https://cloud.githubusercontent.com/assets/13873228/9836791/7ede4c88-5a1e-11e5-8743-feffcce2f54c.png",
             "https://cloud.githubusercontent.com/assets/13873228/10262927/436f96dc-69d4-11e5-8666-76123fdbe447.png",
            "https://cloud.githubusercontent.com/assets/13873228/10803038/2891f3d0-7db8-11e5-946a-2c1fefd6cbcb.png",
            "https://cloud.githubusercontent.com/assets/13873228/10803039/28928020-7db8-11e5-80d0-2c36afe1bac7.png",
            "https://cloud.githubusercontent.com/assets/13873228/10803037/28904242-7db8-11e5-80f1-9adf12d4c0cd.png",
            "https://cloud.githubusercontent.com/assets/13873228/10803040/2893bd64-7db8-11e5-97ba-5dccb0c48452.png",
            "http://blog-imgs-57.fc2.com/g/h/a/ghasts/2013110319361376c.png",
             "https://cloud.githubusercontent.com/assets/13873228/9836791/7ede4c88-5a1e-11e5-8743-feffcce2f54c.png",
             "http://i.imgur.com/XyZRHga.png",
            "https://cloud.githubusercontent.com/assets/13873228/10711803/3a6e6db8-7a7f-11e5-98aa-068606186b16.PNG",
            "https://cloud.githubusercontent.com/assets/13873228/10760758/1b1cfc5c-7cb6-11e5-8619-706954d2a77a.png"
             ];

            var size = headerimages.length
            var x = Math.floor(size*Math.random())
            document.getElementById('headerimg').src=headerimages[x];
    </script>
    </body>
  </html>
