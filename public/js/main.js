// todo => use a key to track the current video, or just pass the video in as a ref to the function and grab its source

// just using this as a working source for right now




Vue.component('card', {
    props: {
      paragraph: String
  
    },
    template: `
    <div class="actionCon">
        <div class="actionIcon"><h3>Icon</h3></div>
        <h4>Heading</h4>
      <p>{{ paragraph }}</p>
      <a href="https://hivaidsconnection.ca/" class="actionBtn"><h5>Placeholder Btn</h5></a>
    </div>
    `
  })

  Vue.component('carousel', {
    props: {
      partid: String,
      icon: String
  
    },
    template: `
    <li><a href="#"><div class="partner"><h5>{{icon}}</h5></div></a></li>
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

  // replace this with database content later
      actionContent: [
        { paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
        { paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc congue nisi vitae. Sed odio morbi quis commodo. Donec ultrices tincidunt arcu non sodales neque sodales ut etiam." },
        { paragraph: "Egestas congue quisque egestas diam in. Nunc sed blandit libero volutpat sed. Est velit egestas dui id. Orci ac auctor augue mauris augue neque gravida. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum." }
      ]
    },
    
    created: function(){
      console.log("this is working");
      this.fetchAbout();
      this.fetchPartners();
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
      }
    }
  });
  