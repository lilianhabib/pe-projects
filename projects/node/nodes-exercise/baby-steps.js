
let total = 0;
const arg = process.argv;



for (let i = 2; i < arg.length; i++) {
	total += Number(arg[i])
}
	

 

console.log(total);