<?php
    require_once 'load.php';
        $infoTable = 'tbl_info';
        $getInfo = getAll($infoTable);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/wvm1igw.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>No Shame</title>
</head>
<body>
    <?php include("templates/header.php");?>
    <main id="app">
    <section id="hero">
        <object data="public/images/RHAC.svg" type="image/svg+xml"></object>
        <div id="heroCon">
            <div id="heroImg"><img src="public/images/hero.png"></div>
            <h2>no shame.</h2>
        </div>
    </section>
    <section id="help">
        <h3>I need answers</h3>
    <?php while($row = $getInfo->fetch(PDO::FETCH_ASSOC)):?>
        <div class="infoObject">
        <ul>
            <li class="helpBtn"><span class="helpTitle"><img class="helpImg" src="public/images/Arrow.svg" alt=""><h2><?php echo $row['title']; ?></h2></span>
            <p class="helpContent"><?php echo $row['description']; ?></p>
            <p><?php echo $row['description2']; ?></p>
            <p><?php echo $row['description3']; ?></p>
            <p><?php echo $row['description4']; ?></p>
            <p><?php echo $row['description5']; ?></p>
            <p><?php echo $row['description6']; ?></p>
            <p><?php echo $row['description7']; ?></p>
            <a class="helpBtn" target="_blank" href="<?php echo $row['btnLink']; ?>"><?php echo $row['btnName']; ?></a>
        </li>
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
      <img v-bind:src="about.img" alt="">
  </div>
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
      <a target="_blank" :href="action.link">{{action.button}}</a>
  </div>
</div>
</div>
        </div>
    </section>
    <section id="partners">
    <h3>Our Partners</h3>
        <div id="partnerCon">
            <ul>
                <li v-for="partner in partners"><a target="_blank" href=""><img v-bind:src="partner.img" alt="partner logo"></a></li>
            </ul>
        </div>
    </section>
</main>
    <?php include("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/static.js"></script>
</body>
</html>