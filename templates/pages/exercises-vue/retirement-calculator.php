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

    <main data-vue='retirement'> 


<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->
      <form-fields>
        <div class='fields'> 
          <label for='age'>What is your current age?</label> 
          <input id='age' type='number' v-model='age'>
        </div> 

        <div class='fields'>
          <label for='retire'>At what age would you like to reitre</label> 
          <input id='reitre' type='number' v-model='retire'>
        </div> 


        <button type='button' @click='clicked'>Click Me</button> 
        
        <output class='lazy-voice'>{{message}}</output>

      </form-fields> 
  
    </main> 

      <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script>
  new Vue ({
    el: "[data-vue='retirement']", 
    
    data: {
      // heading: "Retirement Calculator", 
      age: 0,
      retire: 0,
    },
    
    computed: {
      message() {
        var years = (this.retire - this.age) + 2023; 
        var yearsLeft = eval(years - 2023);
        if (this.age && this.retire != 0) {
          return `You are ${this.age} years old and you will retire at ${this.retire}. It is the year ${this.year} and you will retire in the year ${years}. You have ${yearsLeft} years left until you can retire.`;
        } else {
          return `Keep writing!`; 
        }
      }
    },
    
    methods: {
      clicked() {
        if (this.age && this.retire != 0) {
         alert("Retirement Calculator")
        } else {
          alert("I didn't understand! Please try again")
        }
      }
    },
    
  });
    

  
</script>
