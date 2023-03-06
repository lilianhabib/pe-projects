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

    <main data-vue="paint" v-bind:class='outputStyle'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        <div class='fields'> 
          <label for='length'>What is the length in feet?</label> 
          <input id='length' type='number' v-model='length'>
        </div> 
        
        <div class='fields'>
          <label for='width'>What is the width in feet?</label> 
          <input id='width' type='number' v-model='width'>
        </div> 
       
        <button type='button' @click='clickedMessage'>Click Me</button> 
        
        <output class='lazy-voice'>{{message}}</output>
        
        <output class='lazy-voice'>{{theSentence}}</output>
        
      </form-fields> 
    </main> 


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script>
  new Vue ({
    
    el: "[data-vue='paint']",
    
    data: {
      // heading: "Paint Calculator",
      length: 0,
      width: 0,
      outputStyle: 'none',
      theSentence: "", 
    },
    
    computed: {
      calculate() {
        var gallon = 350
        var area = this.length * this.width 
        var totalRounded = area / gallon;
        var total = Math.ceil(totalRounded);
        return total; 
      },
      
       message() {
         var area = this.length * this.width 
        if (this.length && this.width != 0) {
          return `You will need ${this.calculate} gallon of paint to cover ${area} square feet.`;
         
        }  
      }
      
    },
    
    methods: {
      clickedMessage(){
        if (this.length && this.width != 0 ) {
          this.outputStyle = "yay";
          this.theSentence = "Let's paint!";
        } else {
          this.outputStyle = "nay";
          this.theSentence = "Try again, please!";
        }
        
        
      }
    }
    

  })
  
</script>
