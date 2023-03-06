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

    <main data-vue='characters'> 

<!--       <h1 class='loud-voice'>{{heading}}</h1>
 -->        
        
        <form-field> 
          <div class='fields'> 
            <label for='name'>What is your name?</label> 
            <input id='name' type='text' v-model='name'>
          </div> 
        </form-field> 
        <br>

        <output class='lazy-voice'>{{nameLength}}</output>

    </main> 

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script>
  new Vue ({
    el: "[data-vue='characters']", 
    
    data() {
      return {
        name: "Lilian", 
        // heading: "Number of Characters", 
      }
    },
    
    computed: {
      nameLength() {
        if (this.name.length > 0 ) {
          return `Hello, ${this.name}. There are ${this.name.length} characters in your name.`;
        } else {
          return `I do not understand. Please try again.`;
        }
      }
    }, 
    
    methods: {
      
    },
  })
  
</script>
