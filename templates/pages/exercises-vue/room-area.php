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

    <main data-vue='rectangle'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        
        <div class='fields'> 
          <label for='length'>What is the length of the room in feet?</label> 
          <input id='length' type='number' v-model='length' min='0'> 
        </div>  
        
        <div class='fields'> 
          <label for='width'>What is the width of the room in feet?</label> 
          <input id='width' type='number' v-model='width' min='0'> 
        </div> 
       
        
        <output class='lazy-voice'>{{squareFeet}}</output> 
        <output class='lazy-voice'>{{squareMeter}}</output>
      </form-fields> 
    </main>


 
    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='rectangle']",
    
    data: {
      // heading: "Area of a Rectangle Room", 
      length: 15,
      width: 20,
    },
    
    computed: {
      squareFeet() {
        var feetTotal = this.length * this.width
        return `The area is ${feetTotal} square feet`
      },
      
      squareMeter() {
        var feetTotal = this.length * this.width
        var meterTotal = (feetTotal * 0.09290304).toFixed(3)
        return `The area is ${meterTotal} square meters`
      }
      
      
     
    }
   
  })

</script>