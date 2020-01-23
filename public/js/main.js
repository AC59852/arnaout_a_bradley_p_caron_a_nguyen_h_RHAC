// todo => use a key to track the current video, or just pass the video in as a ref to the function and grab its source
Vue.component('card', {
    props: {
      paragraph: String
  
    },
    template: `
    <div class="actionCon">
        <div class="actionIcon"><h3>Icon</h3></div>
      <p>{{ paragraph }}</p>
      <a href="https://hivaidsconnection.ca/" class="actionBtn"><h4>Placeholder Btn</h4></a>
    </div>
    `
  })
  
  
  var vm = new Vue({
    el: "#app",
  
    data: {
  // replace this with database content later
      actionContent: [
        { paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
        { paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc congue nisi vitae. Sed odio morbi quis commodo. Donec ultrices tincidunt arcu non sodales neque sodales ut etiam." },
        { paragraph: "Egestas congue quisque egestas diam in. Nunc sed blandit libero volutpat sed. Est velit egestas dui id. Orci ac auctor augue mauris augue neque gravida. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum." }
      ]
    },
  
  
    methods: {
  
    }
  });
  