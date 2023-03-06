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
    <main data-vue='names'> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        
        <div class='fields'> 
          <label for='month'>Select a number from 1 to 12</label> 
          <input id='month' type='number' v-model='month' min='0' max='12'> 
         
        </div>  
         
        
<!--         <button type='button'>Click</button> -->
        
        <output class='lazy-voice'>{{months}}</output>
      </form-fields> 
    </main>

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script> 

  new Vue ({
    el: "[data-vue='names']",
    
    data: {
      // heading: "Numbers to Names",
      month: 0,
    },
    
    computed: {
      months(){
        if (this.month == 0) {
          return "";
        } else if (this.month == 1) {
          return "January";
        } else if (this.month == 2) {
          return "February"; 
        } else if (this.month == 3) {
          return "March";
        } else if (this.month == 4) {
          return "April";
        } else if (this.month == 5) {
          return "May";
        } else if (this.month == 6) {
          return "June";
        } else if (this.month == 7) {
          return "July";
        } else if (this.month == 8) {
          return "August";
        } else if (this.month == 9) {
          return "September"; 
        } else if (this.month == 10) {
          return "October";
        } else if (this.month == 11) {
          return "November";
        } else if (this.month == 12) {
          return "December";
        }
      }
    }
  })

</script>