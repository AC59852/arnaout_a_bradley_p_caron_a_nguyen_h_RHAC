<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Document</title>
</head>
<body>
    <?php include("templates/header.php");?>
    <main id="app">
    <section id="hero">
        <div>
            <div id="placeholderHero"><h1>Placeholder Hero Img</h1></div>
            <h2>Tagline</h2>
        </div>
    </section>
    <section id="aboutSection">
        <div id="about">
        <div id=aboutText>
            <h3>Heading</h3>
            <p>Paragraph</p>
        </div>
        <div id="placeholderAbout"></div>
</div>
    <h2>About</h2>
    </section>
    <section id="help">
    <h2 class="hidden">Help Section</h2>
        <p id="helpPara1">Paragraph</p>
        <div id="helpBtns">
            <button>Button 1</button>
            <button>Button 2</button>
        </div>
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