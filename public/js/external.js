var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];


var favorite = 'blue'; 

if (color == 'red'){
	console.log('Roses are red.');
	//another way to do it is console.log(color + 'is the color of ___')
}

else if (color == 'orange'){
	console.log('Oranges are orange.');
}

else if (color == 'yellow'){
	console.log('The sun is yellow.');
}

else if (color == 'green'){
	console.log('Leaves are green.');
}

else if (color == 'blue'){
	console.log('The ocean is blue.');
}

else {
	console.log('I do not know anything by that color.');
}

var message = (color == favorite) ? "That's my favorite color!": "That's not my favorite color!";
console.log(message);

<!-- console.log(message = (favorite) ? "That's my favorite color": "That's not my favorite color.") -->

/* this was reassigning the variable, so the statement was always true */
<!-- console.log(var message = (favorite) ? "That's my favorite color": "That's not my favorite color.") -->