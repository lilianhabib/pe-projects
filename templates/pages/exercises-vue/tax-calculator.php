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

    <main data-vue='tax'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        
        <div class='fields'> 
          <label for='amount'>What is the order amount?</label> 
          <input id='amount' type='number' v-model='amount' min='0'> 
        </div>  
        
        <div class='fields'> 
          <label for='province'>What province or territory do you live in? </label> 
          <input id='province' type='text' v-model='province' min='0'> 
        </div> 
        
     <!-- 
        <button type='button'>Click</button>
         -->
        <output class='lazy-voice'>{{output}}</output>
        
      </form-fields> 
    </main>


 
    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='tax']",
    
    data: {
      // heading: "Multi-Provincial Sales Tax Calculator",
      amount: "",
      province: "", 
    },
    
    computed: {
      output() {
        if (this.province == "Ontario") {
            var ontario = (this.amount * 1.13).toFixed(2)
            return `The total is $${ontario}.`; 
        } else if (this.province == "Alberta") {
            var alberta = (this.amount * 1.05).toFixed(2)
            return `The total is $${alberta}.`; 
        } else if (this.province == "British Columbia") {
            var britishColumbia = (this.amount * 1.12).toFixed(2)
            return `The total is $${britishColumbia}.`;
        } else if (this.province == "Manitoba") {
            var manitoba = (this.amount * 1.05).toFixed(2)
            return `The total is $${manitoba}.`;
        } else if (this.province == "New Brunswick") {
            var newBrunswick = (this.amount * 1.15).toFixed(2)
            return `The total is $${newBrunswick}.`;
        } else if (this.province == "Newfoundland") {
            var newfoundland = (this.amount * 1.15).toFixed(2)
            return `The total is $${newfoundland}.`;
        } else if (this.province == "Northwest Territories") {
            var northwestTerritories = (this.amount * 1.15).toFixed(2)
            return `The total is ${northwestTerritories}.`;
        } else if (this.province == "Nova Scotia") {
            var novaScotia = (this.amount * 1.15).toFixed(2)
            return `The total is $${novaScotia}.`;
        } else if (this.province == "Nunavut") {
            var nunavut = (this.amount * 1.05).toFixed(2)
            return `The total is $${nunavut}.`;
        } else if (this.province == "Nunavut") {
            var nunavut = (this.amount * 1.05).toFixed(2)
            return `The total is $${nunavut}.`;
        } else if (this.province == "Prince Edward Island") {
            var pei = (this.amount * 1.15).toFixed(2)
            return `The total is $${pei}.`;
        } else if (this.province == "Quebec") {
            var quebec = (this.amount * 1.05).toFixed(2)
            return `The total is $${quebec}.`;
        } else if (this.province == "Saskatchewan") {
            var sas = (this.amount * 1.05).toFixed(2)
            return `The total is $${sas}.`;
        } else if (this.province == "Yukon") {
            var yukon = (this.amount * 1.05).toFixed(2)
            return `The total is $${yukon}.`;
        }
      }
       
    }
  })


</script>