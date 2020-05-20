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

var noOfBreads;

function buyBread(costOfBread, amount) {
    console.log("Leave house");
    console.log("Turn Right");
    takeSteps();
    console.log("Turn Left");
    takeSteps();
    console.log("Enter Market");
    noOfBreads = amount/costOfBread;
    noOfBreads = Math.floor(noOfBreads);
    console.log("Buy " + noOfBreads + " Bread");
    console.log("Turn Right");
    takeSteps();
    console.log("Turn Left");
    takeSteps();
    console.log("Enter house");
    return remainingAmount = amount%costOfBread;
}

function takeSteps() {
    console.log("Move 1 step");
    console.log("Move 1 step");
    console.log("Move 1 step");
    console.log("Move 1 step");
    console.log("Move 1 step");
    console.log("Move 1 step");
}

alert("Here are your " + noOfBreads + " breads and here is the change amount: " + buyBread(100, 450));