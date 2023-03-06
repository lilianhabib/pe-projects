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

    <main data-vue='interest'>
      
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields> 
        
        <div class='fields'> 
          <label for='principal'>Enter the principal</label> 
          <input id='principal' type='number' v-model='principal'> 
        </div> 
        
        <div class='fields'>
          <label for='interest'>Enter the rate of interest</label> 
          <input id='interest' type='number' v-model='interest'> 
        </div>
        
        <div class='fields'>
          <label for='years'>Enter the number of years</label> 
          <input id='years' type='number' v-model='years'> 
        </div> 
        
        <button type='button'>Click Me</button> 
        
        <output class='lazy-voice'>{{theSentence}}</output>
      <form-fields> 
    </main> 

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script>
  new Vue ({
    el: "[data-vue='interest']",
    
    data: {
      // heading: "Computing Simple Interest", 
      principal: 0, 
      interest: 0, 
      years: 0, 
      
    }, 
    
    computed: {
      calculation() {
        var amount = this.interest * this.principal * this.years;
        return amount;
      },
      
      theSentence() {

        if (this.years && this.interest) {
          return `After ${this.years} years at ${this.interest}%, the investment will
  be worth $${this.calculation}.`
        } else {
          return "";
        }
        
      }
      
      
    }
  })
  
</script>
