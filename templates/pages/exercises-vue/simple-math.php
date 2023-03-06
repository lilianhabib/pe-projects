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

    <main data-vue='math'> 

<!--       <h1 class='loud-voice' v-if="heading">Simple Math</h1> 
 -->
      <form-fields> 

        <div class='fields'> 
          <label for='first'>What is the first number</label> 
          <input id='first' type='number' v-model.number='firstNum'>
        </div> 

        <div class='fields'>
          <label for='second'>What is the second number?</label> 
          <input id='second' type='number' v-model.number='secondNum'> 
        </div> 

        <button type='submit' @click="click">Click</button> 

        <output v-html='output' class='lazy-voice'>{{output}}</output>

      </form-fields> 
    </main> 

    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
  </body>
    
</html>


<script>
  new Vue ({
    el: "[data-vue='math']",
    
    data: {
      // heading: true, 
      firstNum: "", 
      secondNum: "",
      message: '',
    },
    
    computed: {
      message() {
        return ``; 
      },
      
      multiply() {
        var multiply = (this.firstNum * this.secondNum);
        return multiply;
      },
          
      
      divide() {
        var divide = (this.firstNum / this.secondNum).toFixed(2);
        return divide
      },
      
      subtract() {
        var subtract = eval(this.firstNum - this.secondNum);
        return subtract
      },
      
      add() {
        var add = eval(this.firstNum + this.secondNum);
        return add;
      },
      
      output() {
        if (this.firstNum || this.secondNum != 0) {
          return `
            <p>Add: ${this.firstNum} + ${this.secondNum} = ${this.add}</p>
            <p>Subtract: ${this.firstNum} - ${this.secondNum} = ${this.subtract}</p>
            <p>Divide: ${this.firstNum} / ${this.secondNum} = ${this.divide}</p>
            <p>Multiply: ${this.firstNum} * ${this.secondNum} = ${this.multiply}</p>
          `;
        } else {
          return this.message;
        }
      },
    },
    
    methods: {
      click() {
        if (this.firstNum && this.secondNum != 0) {
          this.output = "Here are the results"
        } else {
          this.output = "Please choose your numbers.";
        }
      }    
    }

  })
  
</script>
