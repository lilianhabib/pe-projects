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

    <main data-vue="pizza"> 

      <form-fields>
        <div class='fields'> 
          <label for='people'>How many people?</label> 
          <input id='people' type='number' v-model='people'>
        </div> 

        <div class='fields'>
          <label for='number'>How many pieces of pizza will each person have?</label>
          <input id='number' type='number' v-model='pizza'>
        </div> 


        <button type='button' @click='clickMessage()'>Click Me</button> 

        <output class='lazy-voice'>{{sentence}}</output>

        <output class='lazy-voice'>{{message}}</output> 
      </form-fields> 



    </main> 
    
      <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script>
  
  new Vue ({
    
    el: "[data-vue='pizza']",
    
    data: {
      // heading: "Pizza Party", 
      people: 0, 
      pizza: 0, 
      sentence: "",
    }, 
    
    computed: {
      totalPizza() {
        var pizzaPieces = 8; 
        var pizzaTotal = this.pizza * this.people; // 20
        var total = Math.round(pizzaTotal / pizzaPieces);
        return total;
      },
      
      message() {
        if (this.pizza && this.people != 0) {
          return `There are ${this.people} people coming to the party. There are 8 pieces in a box and you will need ${this.totalPizza} boxes total.`;
        } else {
          return "Keep on planning!";
        }
        
      }
      
    }, 
    
    methods: {
      clickMessage() {
        if (this.pizza && this.people != 0 ) {
           this.sentence = "It's time to party!";
        } else {
          this.sentence = "We are not ready yet!";
        }
         
      }
    }
  })

</script>
