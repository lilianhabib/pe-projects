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

    <main data-vue='bmi'> 
      
      <form-fields>
        
         <div class='fields'> 
          <label for='height'>Enter your height in centimeters</label> 
          <input id='height' type='number' v-model='height' min='0'> 
        </div>  
        
        <div class='fields'> 
          <label for='weight'>What is your approximate weight in kilograms?</label> 
          <input id='weight' type='number' v-model='weight' min='0'> 
        </div> 
        
        <button type='button' @click='clickedMessage'>Click</button>
       
        <output class='lazy-voice'>{{output}}</output>
        <output class='lazy-voice'>{{message}}</output> 
      </form-fields> 
    </main>

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='bmi']",
    
    data: {
      // heading: "BMI", 
      weight: 0,
      height: 0,
      message: "",
    },
    
    computed: {
      bmi() {
        var bmi = (this.weight / this.height / this.height) * 10000
        var bmiRounded = bmi.toFixed(1);
        return bmiRounded; 
      },
      
      output() {
        if (this.bmi === isNaN) {
          return "";
        } else if (this.bmi >= 18.5 && this.bmi <= 25) {
          return `Your BMI is ${this.bmi}.`;
        }
      }
    }, 
    
    methods: {
      theSentence() {
        return `You are beautiful!`;
      },
      clickedMessage() {
        this.message = this.theSentence();
      }
    }
  })


</script>