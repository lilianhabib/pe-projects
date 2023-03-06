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

    <main data-vue='strength'> 
      
      <form-fields> 
        <div class='fields'> 
          <label for='string1'>Enter the first string</label> 
          <input id='string1' type='text' v-model='string1'> 
        </div> 
        
        <div class='fields'> 
          <label for='string2'>Enter the second string</label> 
          <input id='string2' type='text' v-model='string2'> 
        </div> 
        
        
    <!--     <button type='button'>Click</button> -->
        
        <output class='lazy-voice'>{{isLength}}</output>
        <output class='lazy-voice'>{{isAnagram}}</output>
      </form-fields> 
    </main>


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script>

  new Vue ({
    el: "[data-vue='strength']",
    
    data: {
      // heading: "Anagram Checker", 
      string1: "", 
      string2: "", 
    },
    
    computed: {
      isLength() {
       if (this.string1.length === this.string2.length ) {
         return `${this.string1} and ${this.string2} are the same length`;
       } else {
         return `${this.string1} and ${this.string2} are not the same length`;
       }
      },
      
      isAnagram() {
        var one = this.string1.split('').sort().join('');
        var two = this.string2.split('').sort().join('');
        
        if (one === two) {
          return `${this.string1} and ${this.string2} are anagrams`;
        } else {
          return `${this.string1} and ${this.string2} are not anagrams`;
        }
      },
    }

  })



</script>