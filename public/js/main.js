// todo => use a key to track the current video, or just pass the video in as a ref to the function and grab its source

// just using this as a working source for right now



  Vue.component('contact', {
    props: {
      heading: String,
      content1: String,
      content2: String,
      icon: String
  
    },

    template: `
    <div class="contactCon">
      <div><img :src="'public/images/' + icon" alt="Contact Icon">
            <h4>{{ heading }}</h4>
            <h5>{{ content1 }}</h5>
            <h5 class="contact2">{{ content2 }}</h5>
      </div>
    </div>
    `
  })

  Vue.component('promotion', {
    props: {
      title: String,
      video: String
    },

    template: `
    <div id="promoContainer">
      <h3>{{ title }}</h3>
        <div class="vidCon">
            <video :src="'public/video/' + video" controls></video>
        </div>
    </div>
    `
  })
  
  
  var vm = new Vue({
    el: "#app",
  
    data: {

      about: {
        //isadmin: true,
        //isLoggedIn: true,
        //avatar: '../images/thor.png'
      },

      partners: {

      },

      help: {

      },

      promoContent: [
        {title: "our campaign", video: "campaign.mp4"}
      ],

      contactContent: [
        {heading: "call", content1: "+1 (866) 920-1601", content2: " ", icon: "phone.svg"},
        {heading: "hours", content1: "Monday - Friday", content2: "9:00 AM - 5:00 PM", icon: "clock.svg"}
      ],

  // replace this with database content later
     
    },

    mounted: function(){
      
  let nav = document.querySelector(".toggle-menu"),
  navBtns = document.querySelectorAll(".navBtn"),
  helpButton = document.querySelectorAll(".helpBtn"),
  main = document.querySelector("body");


  helpButton.forEach(button => button.addEventListener("click", function(e) {
    this.classList.toggle("reveal");
  }));


  nav.addEventListener("click", function() {
    this.classList.toggle("active");
    document.querySelector("#menu").classList.toggle("open");
    main.classList.toggle("noscroll");
  });

  navBtns.forEach(btn => btn.addEventListener("click", function() {
    nav.classList.toggle("active");
    document.querySelector("#menu").classList.toggle("open");
    main.classList.toggle("noscroll");
  }));


    },
    
    created: function(){
      this.fetchAbout();
      this.fetchPartners();
      this.fetchHelp();

      
    },

    methods: {

      toggleOn() {
        let regPopup = document.querySelector(".regPopup"),
            signForm = document.querySelector(".signForm");

        regPopup.classList.toggle("newsReveal");
        signForm.classList.toggle("newsReveal");
      },

      toggleOff() {

        let regPopup = document.querySelector(".regPopup"),
            signForm = document.querySelector(".signForm");

        regPopup.classList.toggle("newsReveal");
        signForm.classList.toggle("newsReveal");

      },

      fetchAbout() {
        const url = './includes/index.php?about=true';

        fetch(url)
        .then(res => res.json())
        .then(data => {
          console.log(data);
          this.about =  data[0];
        })
        .catch((err) => console.log(err))
      },

      fetchPartners() {
        const url = './includes/index.php?partners=true';

        fetch(url)
        .then(res => res.json())
        .then(data => {
          console.log(data);
          this.partners =  data;
        })
        .catch((err) => console.log(err))
      },

      fetchHelp() {
        const url = './includes/index.php?help=true';

        fetch(url)
        .then(res => res.json())
        .then(data => {
          console.log(data);
          this.help =  data;
        })
        .catch((err) => console.log(err))
      }
    }
  });
  