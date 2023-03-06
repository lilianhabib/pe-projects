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

    <main data-vue='quotes'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1>
 -->  
      <form-fields> 
        <div class='fields'> 
          <label for='quote'>What is the quote?</label> 
          <input id='quote' type='text' v-model='quote'> 
        </div> 

        <div class='fields'> 
          <label for='author'>Who said it?</label> 
          <input id='author' type='text' v-model='author'> 
        </div> 

<!--         <button type='button' @click='clickMessage'>Click Me</button>
 -->   
        <output class='lazy-voice'>{{message}}</output>
        <output class='lazy-voice'>{{output}}</output>

      </form-fields> 

      
      
    </main> 

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script>
  new Vue ({
  el: "[data-vue='quotes']",
  
  data: {
    quote: "",
    author: "",
    output: "",
    // heading: "Printing Quotes",
  },
  
  // methods: { //needs to be clicked to see updates
  //   clickMessage() {
  //     if (this.quote.length && this.author.length > 0) {
  //       this.output = `${this.author} says "${this.quote}."`;
  //     } else {
  //       this.output = "Just waiting for your quote";
  //     }
      
  //   }
  // },
  
  computed: { //update as I type
    message() {
      if (this.quote && this.author == "" ) {
        return `${this.author} says, "${this.quote}."`;
      } else {
        return "Just waiting for your quote!";
      }
      
    }
  },
 
 
 
});
  
</script>
