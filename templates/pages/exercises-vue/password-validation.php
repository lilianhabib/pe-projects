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

    <main data-vue='password'>

<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->
      <form-fields> 

        <div class='fields'> 
          <label for='name'>What is your name?</label> 
          <input id='name' type='text' v-model='name'> 
        </div> 

        <div class='fields'> 
          <label for='password'>What is your password?</label> 
          <input id='password' type='password' v-model='password'> 
        </div> 

        <button type='button' @click='clickedMessage()'>Click Me</button> 

        <output class='lazy-voice'>{{validation}}</output>

        <output class='lazy-voice'>{{message}}</output>

      <form-fields> 
    </main> 


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script>
  new Vue ({
    el: "[data-vue='password']",
    
    data: {
      // heading: "Password Validation",
      password: "", 
      name: "", 
      message: "",
    },
    
    computed: {
      validation() {
        if (this.password === "abc$123") {
          return `Welcome, ${this.name}!`;
        } else {
          return `Sorry, I don't know you!`;
        }
      }
    },
    
    methods: {
      clickedMessage() {
        if (this.password === "abc$123" ) {
          this.message = `Welcome back!`;
        } else {
          this.message = `Try again!`;
        }
      }
    }
  });  
  
</script>
