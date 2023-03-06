<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Lilian Habib">
    <meta name="description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">

    <meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/sharelilian.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles-vue.css">


    <title>Lilian's Portfolio</title>
  </head>

  <body> 
    <header> 
    </header>

    <main data-vue='driving'>
      
      <h1 class='loud-voice'>{{heading}}</h1> 
      <form-fields> 
        
        <div class='fields'> 
          <label for='age'>What is your age?</label> 
          <input id='age' type='number' v-model='age'> 
        </div> 
        
        <button type='button' @click='clickedMessage'>Click Me</button> 
        
        <p>{{message}}</p>
        
        <output>{{autoMessage}}</output>
      <form-fields> 
    </main> 

    <footer> 
      <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    </footer>
  </body>
    
</html>


<script>

  new Vue ({
    el: "[data-vue='driving']",
    
    data: {
      heading: "Legal Driving Age", 
      age: "",
      message: "", 
    }, 
    
    computed: {
      autoMessage() {
        if (this.age >= 16) {
          return "You are legally allowed to drive.";
        } else if (this.age == "" ) {
          return "";
        } else {
          return "You are not old enough to drive.";
        }
      } 
    },
    
    methods: {
      clickedMessage() {
        if (this.age >= 16) {
          this.message = "Let's go on an adventure!";
        } else {
          this.message = "Let's walk instead!";
        }
      }
    }
  })  
  
</script>