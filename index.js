// alert("Hello World!");
/*
    console.log("Hello NexSkill, Full Stack Batch 2");
    prompt("Please enter your Name:");
*/

// var myName = "Jahanzeb Naeem";
// var yourName = prompt("Please enter your name:");

// alert("My name is : " + myName + ", and your name is : " + yourName);
// myName.length;
// myName.slice(0,5);
// myName.toLocaleLowerCase();
// myName.toUpperCase();
// myName.split(" ");
// var firstName = fullName[0];
// var lastName = fullName[1];

// var a = 2;


// console.log("Leave house");
// console.log("Turn Right");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Turn Left");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Enter Market");
// console.log("Buy Bread");
// console.log("Turn Right");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Turn Left");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Move 1 step");
// console.log("Enter house");

// 1) Simple function
// function buyBread() {
//     console.log("Leave house");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter Market");
//     console.log("Buy Bread");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter house");
// }

// function takeSteps() {
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
// }

// buyBread();

// 2) Parameterized function
// function buyBread(noOfBreads) {
//     console.log("Leave house");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter Market");
//     console.log("Buy " + noOfBreads + " Bread");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter house");
// }

// function takeSteps() {
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
// }

// buyBread(3);

// var noOfBreads;

// function buyBread(costOfBread, amount) {
//     console.log("Leave house");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter Market");
//     noOfBreads = amount/costOfBread;
//     noOfBreads = Math.floor(noOfBreads);
//     console.log("Buy " + noOfBreads + " Bread");
//     console.log("Turn Right");
//     takeSteps();
//     console.log("Turn Left");
//     takeSteps();
//     console.log("Enter house");
//     return remainingAmount = amount%costOfBread;
// }

// function takeSteps() {
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
//     console.log("Move 1 step");
// }

// alert("Here are your " + noOfBreads + " breads and here is the change amount: " + buyBread(100, 450));

// Conditional statements
// function calculateMarks () {
//     var marksObtained = Math.random() * 100;
//     marksObtained = Math.floor(marksObtained);
//     marksObtained = marksObtained + 1;

//     if(marksObtained >= 90) {
//         console.log("You are eligible for engineering");
//     } else if(marksObtained < 90 && marksObtained >= 70) {
//         console.log("You have passed");
//     } else {
//         console.log("Better luck next time");
//     }

//     return marksObtained;
// }

/*
    multiples of 7 you have to say 7up
*/
/*
    multiples of 3 you have to say fizz
    multiples of 5 you have to say buzz
    multiples of both you have to say fizzbuzz.
*/

// var cars = ["BMW", "Honda", "Toyota", "Audi"];
// cars.includes("BMW");

// jahanzeb.naeem@hotmail.com
// Assignment - fizzbuzz JavaScript
// Name
// Batch

/*
    Today's Objective
    1) Switch
    2) Loops
        a) While
        b) For
    3) DOM (Document Object Model)
    4) debugger
    5) Event Listeners
    6) High level function
*/

// var arrOutput = [];
// var i = 1;

// function callFizzBuzz() {
//     while(i<=100) {
//         if(i%3 === 0 && i%5 === 0) {
//             arrOutput.push("fizzbuzz")
//         }
//         else if(i%3 === 0) {
//             arrOutput.push("fizz")
//         } else if(i%5 === 0) {
//             arrOutput.push("buzz")
//         } else {
//             arrOutput.push(i)
//         }
//         i++;
//     }
//     return arrOutput;
// }

// var a = 5;
// var b = "5";

// a == b;
// ==
// ===
// for(var i = 1; i<10; i++) {
//     console.log(i);
// }

// Switch
// switch (new Date().getDay()) {
//   case 0:
//     day = "Sunday";
//     break;
//   case 1:
//     day = "Monday";
//     break;
//   case 2:
//      day = "Tuesday";
//     break;
//   case 3:
//     day = "Wednesday";
//     break;
//   case 4:
//     day = "Thursday";
//     break;
//   case 5:
//     day = "Friday";
//     break;
//   case 6:
//     day = "Saturday";
// }

// alert("From external file");

// document.querySelector("#clickMe").addEventListener("click", function(){
//     alert("this is from an event");
// });

function add(num1, num2) {
  return num1 + num2;
}

function multiply(num1, num2) {
  return num1 * num2;
}

function calculate(num1, num2, operator) {
  return operator(num1, num2);
}
