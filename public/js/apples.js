var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];


var favorite = 'blue'; 

switch(color){
	case "red": 
	console.log('Roses are red.');
	break;
	//another way to do it is console.log(color + 'is the color of ___')


	case "orange": 
	console.log('Oranges are orange.');
	break;

	case "yellow": 
	console.log('The sun is yellow.');
	break;

	case "green": 
	console.log('Leaves are green.');
	break;

	case "blue": 
	console.log('The ocean is blue.');
	break;

	default: 
	console.log('I do not know anything about that color.');
}

var message = (color == favorite) ? "That's my favorite color!": "That's not my favorite color!";
console.log(message);

//<!-- console.log(message = (favorite) ? "That's my favorite color": "That's not my favorite color.") -->

//this was reassigning the variable, so the statement was always true 
//<!-- console.log(var message = (favorite) ? "That's my favorite color": "That's not my favorite color.") -->