<?php
    require_once 'load.php';
        $infoTable = 'tbl_moreInfo';
        $getInfo = getAll($infoTable);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="public/favIcon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="public/favIcon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="public/favIcon/favicon-16x16.png">
<link rel="manifest" href="public/favIcon/site.webmanifest">
<link rel="mask-icon" href="public/favIcon/safari-pinned-tab.svg" color="#c10000">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.typekit.net/wvm1igw.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>No Shame</title>
</head>
<body>
    <?php include("templates/header.php");?>
    <main id="app">
    <div class="regPopup">
    <div class="signForm">
    <span @click="toggleOff()">X</span>
    <h1>Sign Up to receive Newsletters, Donate, Volunteer and participate in Events!</h1>
    <form action="admin/sign-up.php" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="regEmail" value="" placeholder='Enter Email' required>
            </div>
            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="fname" value="" placeholder='Enter First Name' required>
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lname" value="" placeholder='Enter Last Name' required>
            </div>
 
            <button name="register">Register</button>
        </form>
        </div>
    </div>
    <section id="hero">
        <h2 class="hidden">Hero</h2>
        <div id="heroCon">
            <div id="heroImg"><img src="public/images/hero.png" alt="background hero image"></div>
            <h2><span id="no">#no</span> <span id="shame">shame.</span></h2>
        </div>
    </section>
    <section id="help">
        <h3>I need answers</h3>
    <?php while($row = $getInfo->fetch(PDO::FETCH_ASSOC)):?>
        <div class="infoObject">
        <div>
            <div class="helpBtn"><div class="helpTitle"><img class="helpImg" src="public/images/Arrow.svg" alt="arrow"><h2><?php echo $row['info_title']; ?></h2></div>
            <p class="helpContent"><?php echo $row['info_para1']; ?></p>
            <p><?php echo $row['info_para2']; ?></p>
            <p><?php echo $row['info_para3']; ?></p>
    </div>
    </div>
        </div>
    <?php endwhile;?>
    </section>
    <section>
        <div class="contact">
            <h3>I Need Help</h3>
            <contact v-for="(contactInfo, index) in contactContent"
            :key="index"
            :heading="contactInfo.heading"
            :content1="contactInfo.content1"
            :content2="contactInfo.content2"
            :icon="contactInfo.icon"></contact>
        </div>
        <div class="contactLink">
            <a target="_blank" href="https://hivaidsconnection.ca/">RHAC in your community</a>
        </div>
        </section>
    <section id="aboutSection">
    <div>
    <h3>{{ about.title }}</h3>
        <div id="aboutText">
      <!-- lots of text, needs to be figured out -->
      <p>{{ about.para }}</p>
      <p>{{ about.para2 }}</p>
      <a target="_blank" href="https://hivaidsconnection.ca/">Learn More</a>
  </div>
  <div id="greenCircle"></div>
  <div id="aboutImg">
      <img v-bind:src="'public/images/' + about.img" alt="image of RHAC group">
  </div>
</div>
    </section>
    <section id="actionSection">
        <h3>get involved</h3>
        <div class="actionCon">
        <div v-for="action in help">
      <h4>{{ action.title }}</h4>
      <div id="actionImg">
      <img v-bind:src="action.img" alt="actionIcon">
  </div>
      <!-- lots of text, needs to be figured out -->
      <p>{{ action.para }}</p>
      <a :class="action.button" @click.prevent="toggleOn()" :href="action.link">{{action.button}}</a>
  </div>
</div>
    </section>
    <section id="videoSection">
    <promotion v-for="(promoVideo, index) in promoContent"
    :key="index"
    :title="promoVideo.title"
    :video="promoVideo.video"></promotion>
    </section>
    <section id="instaSection">
    <h3>Our Social Media</h3>
    <div class='embedsocial-instagram' data-ref="431940c3ef5e01f8f2a9e12fe88a2997a639ece2"></div>
    </section>
    <section id="partners">
    <h3>Our Partners</h3>
        <div id="partnerCon">
            <ul>
                <li v-for="partner in partners"><a target="_blank" href=""><img v-bind:src="'public/images/' + partner.img" alt="partner logo"></a></li>
            </ul>
        </div>
    </section>
</main>
    <?php include("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="public/js/main.js"></script>
    <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/in.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialInstagramScript"));</script>
</body>
</html>