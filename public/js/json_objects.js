// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
var books = [
{"title": 'Fahrenheit 451', "author": {"first": 'Ray', "last": 'Bradbury'} },
{"title": 'Slaughterhouse-Five', "author": {"first": 'Kurt', "last": 'Vonnegut'}}, 
{"title": 'Angel\'s Ashes', "author": {"first": 'Frank', "last": 'McCourt'}}, 
{"title": 'The Ultimate Hitchhiker\'s Guide to the Galaxy ', "author": {"first": 'Douglas', "last": 'Adams'}}, 
{"title": 'The Martian Chronicles', "author": {"first": 'Ray', "last": 'Bradbury'}}]

// log out the books array
console.log(books);

for (i = 0; i < books.length; i++) {
	console.log('Book # '+ i);
	console.log('Title: '+ books[i]['title']);
	console.log('Author: '+ books[i]['author']['first'] + ' ' + books[i]['author']['last']);
	console.log('_______________________________________');
}

// books.forEach(function (book, index){

// 	console.log('Book # '+ index);
// 	console.log('Title: '+ book.title);
// 	console.log('Author: '+ book.author.first + ' ' +book.author.last);
// 	console.log('_______________________________________')
// });



//}

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
    // console.log("Book #" + todo);
    // console.log("Title: " + todo);
    // console.log("Author: " + todo);
    // console.log("---");
// end loop here