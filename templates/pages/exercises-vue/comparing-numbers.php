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

    <main data-vue='number'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        
         <div class='fields'> 
          <label for='num1'>Enter the first number</label> 
          <input id='num1' type='number' v-model='num1' min='0'> 
        </div> 
        
        <div class='fields'> 
          <label for='num2'>Enter the second number</label> 
          <input id='num2' type='number' v-model='num2' min='0'> 
        </div> 
        
        <div class='fields'> 
          <label for='num3'>Enter the third number</label> 
          <input id='num3'type='number' v-model='num3' min='0'> 
        </div> 
        
        <button type='button' @click='clickedMessage'>Click</button>
        
        <output class='lazy-voice'>{{largest}}</output>
        <output class='lazy-voice'>{{message}}</output>
        
      </form-fields> 
    </main> 


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script> 
    
  new Vue ({
    el: "[data-vue='number']",
    
    data: {
      // heading: "Comparing Numbers", 
      num1: 0,
      num2: 0,
      num3: 0, 
      message: "", 
    },
    
    computed: {
      largest() {
        var maxNumber = Math.max(this.num1, this.num2, this.num3);
        return `The largest number is ${maxNumber}.`; 
      }
    },
    
    methods: {
      clickedMessage() {
        if (this.num1 && this.num2 && this.num3) {
           this.message = "I think you found it!";
        } else {
          this.message = "I think you need to try again!";
        }
      }
    }
  })

</script>