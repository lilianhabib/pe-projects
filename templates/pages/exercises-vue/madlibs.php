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

    <main data-vue='madlibs'>
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields> 
        <div class='fields'> 
          <label for='noun'>Enter a noun:</label>
          <input id='noun' type='text' v-model='noun'>
          {{noun}}
        </div> 
        
        <div class='fields'> 
          <label for='adjective'>Enter an adjective</label> 
          <input id='adjective' type='text' v-model='adjective'>
          {{adjective}}
        </div> 
        
        <div class='fields'> 
          <label for='verb'>Enter a verb</label> 
          <input id='verb' type='text' v-model='verb'> 
          {{verb}}
        </div> 
        
        <div class='fields'>
          <label for='adverb'>Enter an adverb</label> 
          <input id='adverb' type='text' v-model='adverb'> 
          {{adverb}}
        </div> 
        
        <button type='button' @click='clickMagic()'>Magic</button> 
    
        <output class='lazy-voice'>{{message}}</output> 
      </form-fields> 
    </main> 


    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  
  </body>
    
</html>


<script>

  new Vue ({
    el: "[data-vue='madlibs']", 
    
    data: {
      // heading: "MadLibs",
      noun: "",
      adjective: "", 
      verb: "", 
      adverb: "", 
      message: "", 
    },
    
    methods: {
      theSentence() {
        if (this.noun.length && this.verb.length && this.adverb.length && this.adjective.length > 0) {
          return `${this.noun}, a ${this.adjective} human, is ${this.verb} really ${this.adverb}.`;
        } 
        
      },
      
      clickMagic() {
        if (this.noun.length && this.verb.length && this.adverb.length && this.adjective) {
          this.message = this.theSentence();
        } else {
          this.message = `I think we might be missing something!`;
        }
      }
    },
    
  })


</script>