// todo => use a key to track the current video, or just pass the video in as a ref to the function and grab its source

// just using this as a working source for right now




Vue.component('card', {
    props: {
      paragraph: String
  
    },
    template: `
    <div class="actionCon">
        <h4>Heading</h4>
        <div class="actionIcon"><h3>Icon</h3></div>
      <p>{{ paragraph }}</p>
      <a href="https://hivaidsconnection.ca/" class="actionBtn"><h5>Placeholder Btn</h5></a>
    </div>
    `
  })

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

      contactContent: [
        {heading: "call", content1: "+1 (866) 920-1601", content2: " ", icon: "phone.svg"},
        {heading: "hours", content1: "Monday - Friday", content2: "9:00 AM - 5:00 PM", icon: "clock.svg"}
      ],

  // replace this with database content later
     
    },
    
    created: function(){
      console.log("this is working");
      this.fetchAbout();
      this.fetchPartners();
      this.fetchHelp();
    },

    methods: {

      testOn: function() {
        console.log("test");
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
  