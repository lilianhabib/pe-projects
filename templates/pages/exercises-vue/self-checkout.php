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

    <main data-vue="checkout" v-bind:class=''> 
<!--       <h1 class='loud-voice'>{{heading}}</h1> 
 -->      
      <form-fields>
        <div class='fields'> 
          <label for='item1'>Enter the price of item 1</label> 
          <input id='item1' type='number' v-model='item1'>
        </div> 
        <div class='fields'> 
          <label for='quantity1'>Enter the quantity of item 1</label> 
          <input id='quantity1' type='number' v-model='quantity1'>
        </div> 
        
        
        <div class='fields'> 
          <label for='item2'>Enter the price of item 2</label> 
          <input id='item2' type='number' v-model='item2'>
        </div> 
        <div class='fields'> 
          <label for='quantity2'>Enter the quantity of item 2</label> 
          <input id='quantity2' type='number' v-model='quantity2'>
        </div>
        
        
        <div class='fields'> 
          <label for='item3'>Enter the price of item 3</label> 
          <input id='item3' type='number' v-model='item3'>
        </div> 
        <div class='fields'> 
          <label for='quantity3'>Enter the quantity of item 3</label> 
          <input id='quantity3' type='number' v-model='quantity3'>
        </div> 

    <!--     <button type='button'>Calculate</button>  -->
      
        <output class='lazy-voice'>{{message}}</output>
        
        <output class='lazy-voice'>{{theOutput}}</output> 
        
      </form-fields> 
    </main> 


   
    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

  </body>
    
</html>


<script>

  new Vue ({
    
    el: '[data-vue="checkout"]',
    
    data: {
      // heading: "Self-Checkout", 
      item1: "",
      quantity1: "", 
      item2: "",
      quantity2: "",
      item3: "",
      quantity3: "",
     
      message: "", 
    },
    
    computed: {
      calculate() {
        var total1 = this.item1 * this.quantity1;
        var total2 = this.item2 * this.quantity2;
        var total3 = this.item3 * this.quantity3;
        var tax = 1.12;
        var finalTotal = (total1 + total2 + total3);
        var subTotal = (finalTotal * 1.12).toFixed(2)
        return subTotal; 
      },
      
      theOutput() {
        if (this.item1 && this.item2 && this.item3) {
          return `The total cost of my groceries is $${this.calculate} dollars.`
        } else if (this.item1 && this.item2 && this.item3 == "") {
          return "";
        } 
      }
    },
    
    methods: {
      
    }
  })


</script>