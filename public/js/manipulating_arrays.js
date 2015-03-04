// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Saturn', 'Jupiter', 'Neptune', 'Uranus' ];

// function for logging the planets array
function logPlanets() {
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
//arrayName.splice(startIndex, 0, 'firstItemToAdd', 'anotherItemToAdd');
planets.unshift('The Sun');
console.log();


console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('Pluto');
console.log(planets);
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf('The Sun');
var sun = planets.splice(index, 1);
logPlanets();

console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf('Pluto');
var sun = planets.splice(index, 1);
logPlanets();

console.log('Finding and logging the index of "Earth" in the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf('Earth');
console.log(index);

console.log('Using splice to remove the planet after Earth.');
// // todo: Do what the log statement above says you will do.
var mars = planets.splice(index + 1, 1);
logPlanets();

console.log('Using splice to add back the planet after Earth.');
// // todo: Do what the log statement above says you will do.
planets.splice(index + 1, 0, mars[0]);
logPlanets();

console.log('Reversing the order of the planets array.');
// // todo: Do what the log statement above says you will do.
planets.reverse();
logPlanets();

console.log('Sorting the planets array.');
// // todo: Do what the log statement above says you will do.
planets.sort();
logPlanets();

// todo:
// Copy the array of planets you created in the last lesson.


// todo: Join the planets array with pipes (|) to create a variable named 'planetsAsString'.
var planetsAsString = planets.join(' | ');
console.log(planetsAsString);
planetsAsArray = planetsAsString.split(' | ');
console.log(planetsAsArray);

// todo: Split the 'planetsAsString' variable by pipes (|) to create a variable named 'planetsAsArray'.

// console.log(planetsAsArray);