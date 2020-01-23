<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>
<body>
    <?php include("../templates/header.php");?>
    <main id="app">
    <section id="hero">
        <div>
            <div id="placeholderHero"><h1>Placeholder Hero Img</h1></div>
            <h2>Tagline</h2>
        </div>
    </section>
    <section id="about">
        <div id=aboutText>
            <h3>Heading</h3>
            <p>Paragraph</p>
        </div>
        <div id="placeholderAbout"></div>
    </section>
    <section id="help">
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
      <card v-for="(action, index) in actionContent"
      :paragraph="action.paragraph"
      :key="index">
</card>
        <!-- <div>
            <img src="" alt="Icon 1">
            <p>Paragraph</p>
            <button>Action Btn 1</button>
        </div> -->
    </section>
</main>
    <?php include("../templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="../public/js/main.js"></script>
</body>
</html>