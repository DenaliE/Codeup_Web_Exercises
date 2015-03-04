var myNameIs = 'Denali'; // todo: Fill in your name here.

function do_something (name) {
	console.log(name + ' says hello.');
}

do_something(myNameIs);



// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.

function isOdd(random) {
	var random = Math.floor((Math.random()*100)+1);
	var message  = (random % 2 == 0) ? random + ' is even': random + ' is odd';
	console.log(message);
}

isOdd();