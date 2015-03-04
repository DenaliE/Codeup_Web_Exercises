var random = Math.floor((Math.random()*50)+1);
console.log('The random number is ' + random);

for (var i = 1; i < 50; i++) {

    if (i == random){
   	console.log('You skipped this number: ' + random);


    }

    else if (i % 2 == 0) {
        // number isn't even
        // odd numbers aren't as cool
        // skip the rest of the loop and continue with the next iteration
        continue;
    }

    else {
    	console.log('This number is odd: ' + i);
    }
}

