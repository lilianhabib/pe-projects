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

    <main data-vue='converter'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        
        <div class='fields'> 
          <label for='fahrenehitTemp'>Enter the temperature in Fahrenheit</label> 
          <input id='fahrenehitTemp' type='number' v-model='fahrenehitTemp' min='0'> 
        </div>  
        <br>
        <button type='button' @click='clickedCelsius'>Celsius</button>
        <p>{{celsiusMessage}}</p> <br>
        
        
        <div class='fields'> 
          <label for='celsiusTemp'>Enter the temperature in Celsius</label> 
          <input id='celsiusTemp' type='number' v-model='celsiusTemp' min='0'> 
        </div>  

        
        <button type='button' @click='clickedFahrenheit'>Fahrenheit</button>
        
        <output class='lazy-voice'>{{fahrenheitMessage}}</output>
        
      </form-fields> 
    </main>

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='converter']",
    
    data: {
      // heading: "Temperature Converter", 
      fahrenehitTemp: "",
      celsiusTemp: "",
      celsiusMessage: "",
      fahrenheitMessage: "",
    },
    
    computed: {
      celsius() {
        var theCelsius = ((this.fahrenehitTemp - 32) * 5/9).toFixed(0);
        return theCelsius;
      },
      
      fahrenheit() {
        var theFahrenheit = ((this.celsiusTemp * 9/5) + 32).toFixed(0);
        return theFahrenheit;
      },
      

    },
    
    methods: {
      clickedCelsius() {
        if (this.fahrenheitTemp != 0) {
          this.celsiusMessage = `The temperature in Celsius is ${this.celsius}.`;
        }
      },
      
      clickedFahrenheit() {
        if (this.celsiusTemp != 0) {
          this.fahrenheitMessage = `The temperature in Fahrenheit is ${this.fahrenheit}.`;
        }
      }
    }
  })

</script>