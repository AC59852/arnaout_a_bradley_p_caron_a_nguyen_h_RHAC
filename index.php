<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/wvm1igw.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Document</title>
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
    <section id="aboutSection">
        <div id="aboutText">
            <h3>Get to Know Us</h3>
            <p>Our service users include people living with HIV/AIDS and HCV, their partners/family/friends, as well as those concerned about HIV/AIDS and HCV or at risk for HIV.</p>
            <p>We also work with anyone who provides services to people with, or at risk of, HIV and HCV. All services are free and confidential.</p>
            <button>Learn More</button>
        </div>
        <div id="aboutImg">
            <img src="public/images/RHAC_groupshot.jpg" alt="">
        </div>
</div>
    </section>
    <section id="help">
    <h2 class="">Get Involved</h2>
        <div id="helpPopup">
            <p>Placeholder Paragraph</p>
        </div>
    </section>
    <section id="action">
    <h2 class="hidden">Call for Action Section</h2>
      <card id="card" v-for="(action, index) in actionContent"
      :paragraph="action.paragraph"
      :key="index">
</card>
        <!-- <div>
            <img src="" alt="Icon 1">
            <p>Paragraph</p>
            <button>Action Btn 1</button>
        </div> -->
    </section>
    <section id="partners">
    <h2>Our Partners</h2>
        <div id="partnerCon">
            <ul>
                <carousel id="carousel" v-for="(partner, index) in partnerContent"
                :partID="partner.id"
                :icon="partner.logo"
                :key="index">
            </carousel>
            </ul>
        </div>
    </section>
</main>
    <?php include("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>