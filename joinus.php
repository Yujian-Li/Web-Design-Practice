<!-- 17201848 Yujian Li -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Join us</title>
      <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
      <link rel="stylesheet" href="css/mycss.css" type="text/css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
   </head>
   <body>
      <div class = "before-top">
         <div class = "logo"><a href = "home.html">Nourished Yummies</a></div>
      </div>
      <div class = "header">
         <nav class = "navbar" id = "navbar">
            <input type="checkbox" id="nav-toggle" class="nav-toggle"/>
            <label for="nav-toggle">
               <span class="menu-icon">
                  <svg viewBox="0 0 18 15" width="18px" height="15px">
                     <path fill="black" d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.031C17.335,0,18,0.665,18,1.484L18,1.484z"/>
                     <path fill="black" d="M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0c0-0.82,0.665-1.484,1.484-1.484 h15.031C17.335,6.031,18,6.696,18,7.516L18,7.516z"/>
                     <path fill="black" d="M18,13.516C18,14.335,17.335,15,16.516,15H1.484C0.665,15,0,14.335,0,13.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.031C17.335,12.031,18,12.696,18,13.516L18,13.516z"/>
                  </svg>
               </span>
            </label>
            <ul class = "nav-list">
               <li><a href = "home.html" class = "nav-others">Home</a></li>
               <li><a href = "recipes.html" class = "nav-others">Recipes</a></li>
               <li><a href = "foodA-Z.html" class = "nav-others">Food A-Z</a></li>
               <li><a href = "" class = "nav-others">Food News</a></li>
               <li><a href = "joinus.html" class = "nav-current">Join us</a></li>
            </ul>
         </nav>
         <div class = "joinus-space"></div>
         <div class = "joinus">
            <p><span class = "joinus-logo">Nourished Yummies</span> gathered a group of food lovers who aim to improve their personal wellbeing through paying attention to their diet. <br/><br/>Join us to get the latest healthy recipes!</p>
            <?php echo ('<p class = "joinus-thanks">Thanks for joining us!</p>');?>
         </div>
      </div>
   </body>
</html>