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

    <main data-vue='checker' v-bind:class='bar'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields> 
        <div class='fields'> 
          <label for='password'>Enter your password</label> 
          <input type='text' id='password' v-model='password'> 
        </div> 
        
        <span id='strengthBar'>{{strengthBar}}</span>
      
        
      <button type='button'>Click</button>
        
        <output class='lazy-voice'></output>
        <output class='lazy-voice'></output>
      </form-fields> 
    </main>


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
 
  </body>
    
</html>


<script> 
    
  new Vue ({
    el: "[data-vue='checker']",
    
    data: {
      // heading: "Password Strength Checker",
      password: "",
      bar: "none",
    },
    
    computed: {
      strengthBar() {
        var veryWeak = /\d/.test(this.password);
        var weak = /[a-z]/.test(this.password)
        var strong = /[A-Z]/.test(this.password)
        var veryStrong = /[!@#\$%\^\&*\)\(+=._-]/.test(this.password);
        
        if (veryWeak) {
          this.bar = "veryWeak";
          return 'very weak'
        } else if (weak) {
          this.bar = "weak";
          return "weak";
        } else if (strong) {
          this.bar = "strong";
          return "strong";
        } else if (veryStrong && strong) {
          this.bar = "veryStrong"
          return "very strong"
        }
      }
    }
  })

</script>