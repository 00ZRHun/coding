console.log('hello');

//alert('Hello this is Zu Rong');

// How to write a comment

// Variable
/* var b = 'smoothie';
console.log('b');
console.log(b);

var someNumber = 45;
console.log(someNumber);

// document.getElementById('someText').innerHTML = 'Hello World';
document.getElementById('someText').innerHTML = "Hello World";


//document.getElementById('someText').innerHTML = prompt('What is your age?');
var age = prompt("What is your age?");
document.getElementById('someText').innerHTML = age; */

// *** 3) Numbers in JS ***
var num1 = 10;

// Increment num1 by 1
/* num1 = num1 + 1;
num1 += 1;
num1++; */

// Decrement num1 by 1
/* num1--; */

console.log(num1);


// Divide /, multiple *, remainder %
console.log(num1 / 6);
console.log(num1 * 6);
console.log(num1 % 6);

// Increment/decrement by any number you want
num1 += 10;
console.log(num1);


// *** 4) Functions in JS ***
/*
    1. Create a function
    2. Call the function
*/
// Create
function fun() {
    console.log('this is a function');
}

// Call
fun();

/* Let's create a function that take in a name
and says hello followed by your name

For example

Name: "Zu Rong"
Return "Hello Zu Rong"
*/
/* var name = prompt('What is your name?');

function greeting(yourName) {
        // String Concatenation
    // var result = 'Hello' + ' ' + name;
    var result = 'Hello ' + yourName;
    console.log(result);
}

greeting(name); */

// How do arguments work in functions?
// How do we add 2 numbers together in a function?

function sumNumbers(num1, num2) {
    var result = num1 + num2;
    console.log(result);
}

sumNumbers(10, 10);         // 20
sumNumbers("10", 10);       // 1010
sumNumbers(10, "10");       // 1010
sumNumbers("Hi ", "ZR");    // Hi ZR


// *** 5) While VS For Loops in JS ***
// while loops
/* var num = 0;

while(num < 100) {
    num += 1;
    console.log(num);
} */

// For loop( similar to while loop )
for(let num=0; num <= 100; num++) { // let( == var )
    console.log(num);
}

// *** 6) Datatypes in JS ***
// Data types
let yourAge = 18;                               // number
let yourName = 'Bob';                           // string
let name = {first: 'Jane', last: 'Doe'};        // object( called as dictionary in Python )
let truth = false;                              // boolean
let groceries = ['apple', 'banan', 'oranges'];  // array
let random;                                     // undefined
let nothing = null;                             // value null


// *** 6) Strings( Common Methods ) ***
let fruit = 'banana, apple, orange, blackberry';
let moreFruit = 'banana\napple';                // new line
console.log(moreFruit);
console.log(fruit.length);
console.log(fruit.indexOf('nan'));
console.log(fruit.slice(2,6));                  // (including, upto)
console.log(fruit.replace('ban', 123))          // 123ana
console.log(fruit.replace('ban123', 123))       // banana
    // WRONG
/* console.log(fruit.toUpperCase(fruit));
console.log(fruit.toLowerCase(fruit)); */
    // CORRECT
console.log(fruit.toUpperCase());
console.log(fruit.toLowerCase());
// Both are same.
console.log(fruit.charAt(2));
console.log(fruit[2]);
console.log(fruit.split(''));                   // split by character
console.log(fruit.split(', '));                 // split by a comma

// *** 7) Array in JS ***
let fruits = new Array('banana', 'apple', 'orange', 'pineapple');
fruits = ['banana', 'apple', 'orange', 'pineapple'];

// alert(fruits[0]);
console.log(fruits[2]);             // access value at index 2nd

fruits[1] = 'pear';
console.log(fruits);

for(let i=0; i<fruits.length; i++) {
    console.log(fruits[i]);
}

// array common methods
console.log('to string', fruits.toString());
console.log(fruits.join(' * '));
// console.log(fruits.join(' - '));
// console.log(fruits, fruits.pop(''), fruits);
console.log(fruits.pop(''), fruits);                // removes last item
console.log(fruits.push('blackberries'), fruits);   // appends last itms
console.log(fruits[4]);
fruits[fruits.length] = 'new fruit';    // == fruits[4] = 'new fruit';
console.log(fruits);
fruits.shift();             // removes first element from an array( X .pop() )
console.log(fruits);
fruits.unshift('kiwi');     // add first element to an array( X .push() )
console.log(fruits);

let vegetables = ['asparagus', 'tomato', 'brocoli'];
let allGroceries = fruits.concat(vegetables);
console.log(allGroceries);
console.log(allGroceries.slice(1, 4));
console.log(allGroceries.reverse());
console.log(allGroceries.sort());       // sort by alphabet

let someNumbers = [5, 10, 2, 25, 3, 255, 1, 2, 5, 334, 321, 2];
console.log(someNumbers);
console.log(someNumbers.sort());
console.log(someNumbers.sort(function(a, b) { return a-b})); // sorted in ascending order
console.log(someNumbers.sort(function(a, b) { return b-a})); // sorted in descending order

// let emptyArray = new Array();
let emptyArray = [];
for (let num = 0; num <= 10; num++ ) {
    emptyArray.push(num);
}
console.log(emptyArray);



// *** 8) Object in JS ***
// dictionary in Python

let student = { 
    first: 'Zu Rong', 
    last: 'Hun', 
    age: 19, 
    height: 170,
    studentInfo: function() {
        return this.first + '\t' + this.last + '\n' + this.age;
    }
};
console.log(student.first);
console.log(student["first"]);
console.log(student.last);
student.first = 'not Zu Rong';  // change value
console.log(student.first);
    // similar
student.first = 'yes Zu Rong';  // change value
console.log(student.first); 
student.age++;
console.log(student.age);

console.log(student.studentInfo());