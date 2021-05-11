<!DOCTYPE html>
<html lang="en">
<title>Text Mining Project Demo - Kickstarter Analytics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Kickstarter<br>Analytics</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Welcome</a> 
    <a href="#recommendation" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Recommendation</a> 
    <a href="#sentiment" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sentiment Analysis</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Kickstarter Analytics</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo w3-text-red w3-bold"><b>Ready to Kickstart Your Crowdfunding Project?</b></h1>
    <h1 class="w3-xxlarge "><b>Let's Go!</b></h1>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-container" id="home_1" style="margin-top:25px">
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are here to help you build a successful project.</p>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Recommendation -->
  <div class="w3-container" id="recommendation" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Recommendation.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We will recommend related and similar projects to you based on your project description!</p>
    <br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
      <p>Input your project description below:</p>
        <textarea id='projectdes' name='projectdes' rows='6' cols='100'  placeholder='For example, Nuvi is a smart sleeping mask designed to improve your sleep quality, creativity and adjust your jet lag!'></textarea>
          <br><br>
          <input type='submit' value='Submit' name ="fname">
    </form>
      
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "";
    } else {
      echo "<br>";
        echo "Your project belongs to the<br>";
        echo "<h1 class='w3-xxlarge'><b>Arts, Digital, Painting, Design, Recycling and LGBT </b></h1>";
        echo "categories!<br>";
        echo "<br>"; 
       echo "<div class='w3-row-padding'>
    <div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey w3-center'>
      Recommendation 1 <br>
       BITTER X SWEET: A WLW Art Zine 
      <a href='https://www.kickstarter.com/projects/mcapriglioneart/bitter-x-sweet-a-wlw-art-zine?ref=discovery_category&term=digital'>
        <img src='project1.png' alt='Recommendation1' style='width:100%'>
      </a>
      </div>
    </div>
    <div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey w3-center'>
      Recommendation 2
      Foxes Among Hydrangeas Hard Enamel Pins
      <a href='https://www.kickstarter.com/projects/pinklemonrabbit/foxes-among-hydrangeas-hard-enamel-pins?ref=discovery_category&term=digital'>
        <img src='project2.png' alt='Recommendation2' style='width:100%'>
      </a>
      </div>
    </div>
    <div class='w3-col m4 w3-margin-bottom'>
    <div class='w3-light-grey w3-center'>
    Recommendation 3<br>
    The Art of DiVinica #1 
    <a href='https://www.kickstarter.com/projects/dawnmcteigue/the-art-of-divinica-1?ref=discovery_category'>
      <img src='project3.png' alt='Recommendation3' style='width:100%'>
    </a>
    </div>
  </div>"
    ;
    }
}
?>
  </div>



  <!-- Sentiment -->
  <div class="w3-container" id="sentiment" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Sentiment Analysis.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Understand the crowdfunding project landscape within a few clicks!</p>
    <h3 class='w3-xlarge'><b>Across All Categories</b></h3>

  </div>

  <!-- The Team -->
  <div class="w3-row-padding ">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey w3-center">
          Unigram
        <img src="unigram_comment.jpg" alt="projectcountbycountry" style="width:100%">
        <!-- <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div> -->
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey w3-center">
        Bigram
        <img src="bigram_comment.jpg" alt="Jane" style="width:100%">
        <!-- <div class="w3-container">
          <h3>Jane Doe</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div> -->
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey w3-center">
        Trigram
        <img src="trigram_comment.jpg" alt="Mike" style="width:100%">
        <!-- <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Architect</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div> -->
      </div>
    </div>
  </div>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <select>
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
        $categories = array('comics,graphic novels', 'technology,wearables', 'art,ceramics',
        'film & video,drama', 'technology,robots', 'art,sculpture',
        'technology,camera equipment', 'technology,3d printing',
        'art,mixed media', 'film & video,documentary', 'music,jazz',
        'art,public art', 'music,indie rock', 'comics,comic books',
        'publishing,zines', 'technology,hardware', 'art,installations',
        'publishing,fiction', 'art,painting', 'technology,gadgets',
        'photography', 'art,illustration', 'film & video,experimental',
        'music,world music', 'technology,software',
        'publishing,nonfiction', 'technology,apps', 'music,kids',
        'music,rock', 'comics,webcomics', 'art,textiles',
        "publishing,children's books", 'dance,performances',
        'crafts,printing', 'crafts,diy', 'publishing,poetry',
        'technology,diy electronics', 'publishing,academic',
        'photography,photobooks', 'music,faith',
        'film & video,science fiction', 'film & video,shorts',
        'technology,space exploration', 'design,product design',
        'design,toys', 'music,punk', 'crafts,woodworking',
        'film & video,comedy', 'design,architecture', 'art,digital art',
        'crafts', 'photography,people', 'film & video,horror',
        'music,hip-hop', 'design,civic design',
        'film & video,narrative film', 'photography,fine art',
        'publishing,anthologies', 'publishing,radio & podcasts', 'dance',
        'technology,flight', 'photography,nature', 'art,social practice',
        'music,electronic music', 'technology,sound', 'comics,events',
        'crafts,knitting', 'publishing,art books', 'music,metal',
        'film & video,television', 'publishing,young adult',
        'art,video art', 'film & video,animation', 'photography,animals',
        'comics', 'film & video,webseries', 'technology,fabrication tools',
        'art', 'film & video,movie theaters', 'photography,places',
        'dance,spaces', 'publishing,calendars', 'crafts,candles',
        'comics,anthologies', 'art,conceptual art', 'music,r&b',
        'publishing,literary spaces', 'technology', 'crafts,stationery',
        'crafts,glass', 'publishing', 'music,pop', 'art,performance art',
        'crafts,embroidery', 'film & video,fantasy');
        sort($categories);
        // Iterating through the product array
        foreach($categories as $category){
            echo "<option value='strtolower($category)'>$category</option>";
        }
        ?>
    </select>
    <input type="submit" value="Submit" name='categoryname'>
</form>
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['categoryname'];
    if (empty($name)) {
        echo "";
    } else {
      echo "<br>";
        echo "<h3 class='w3-xlarge'><b>Your Chosen Category: art,illustration</b></h3>";
        echo "<br>"; 
       echo "<div class='w3-row-padding'>
    <div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey w3-center'>
      Most Frequent Words for Project Description 
      
        <img src='art,illustration_blurb.jpg' alt='Recommendation1' style='width:100%'>

      </div>
    </div>
    <div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey w3-center'>
      Projects Sentiments from Comments for Chosen Category
      
        <img src='art_illustration_compound.jpg' alt='Recommendation2' style='width:100%'>
      </div>
    </div>
    <div class='w3-col m4 w3-margin-bottom'>
    <div class='w3-light-grey w3-center'>
    Most Frequent Words for Project Comments
   
      <img src='art,illustration_comments.jpg' alt='Recommendation3' style='width:100%'>
    
    </div>
  </div>"
    ;
    }
}
?>


  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
