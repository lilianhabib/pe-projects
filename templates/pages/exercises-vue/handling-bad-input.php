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

    <main data-vue='input'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields> 
        <div class='fields'> 
          <label>What is the rate of return?</label> 
          <input type='number' v-model='rate' min='0'> 
        </div>
        
        <output class='lazy-voice'>{{output}}</output>
      </form-fields> 
    </main>

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='input']",
     
     data: {
       // heading: "Handling Bad Input",
       rate: '',
     },
     
     computed: {
       calculation() {
         var years = (72 / this.rate).toFixed(2); 
         return years
       },
       
       output() {
         if (this.rate >= 1 ) {
           return `It will take ${this.calculation} years to double your initial investment`;
          } else if (this.rate == "") {
              return "";
          } else if (this.rate == 0) {
              return 'Sorry, this is not a valid input.';
          } 

    
       }
       
     }
   });

</script>