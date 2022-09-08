//comments in Javascript - single line

/*A multiline comment*/

/*Remember that every language has syntax and semantics*/

/*Variables - a program essentially does 2 things

1. Perform operations
2. Remember the results of those operations

Variables are a way to remember - they are placeholders.. memory locations
*/
//three ways to declare variable in JS
var age = 21;

let Age = 22;

AGe = 23;
//NOTICE that the above are all different variables--Javascript is case sensitive

//to display or print out this variables, we will make use of the alert() - an inbuilt JS function and
// console.log()

//alert() - creates a popup dialog with the content
//console.log() - outputs the content on the browsers console window.


//The data types are not expresselly declared in JS

//in Java it would be
// String age = "twenty";

//JS is therefore refered to as a loosely typed language..other examples of such languages are
//PHP and Python

//Common datatypes are int,float(numbers with decimal points),bool(true or false) and string-characters

//Now let us do something to see all this four in action, they are refered to as simple types

//let us create a function that simply adds two numbers and returns the result(CAT 2 question)

//we can start with simple expressions

var number1 = 2;
var number2 = 3;

result = number1 + number2;

//a bool
resultTruth = (result == number1); //will be some boolean value

name = "Walubengo";// a string

//something important also is that variable names are constrained by some rules with regards to
//how you name them.

//there are illegal and illegal variable names which result in syntax errors.. e.g

//legal variable names
name
name_
name1
name_1
Name
_name

//illegal names
2name
$name
name 1
name^2

//etc

//Check out notes for more of this

//Do you remember this?

bank_balance = 24000;
Bank_balance = "24000";

if( bank_balance === Bank_balance ){
  //do something
}else{
  //do something else
}

//bank_balance === Bank_balance - this part especially

//Operators in JS are similar to most programming languages that you have looked at so far
//For example, addition,subtraction,comparison,logical etc..
//But we have some interesting ones like the "==="

//Note that it compares both the VALUE and DATA-TYPE

//therefore bank_balance === Bank_balance would be false, since the VALUES are similar
//but the DATA-TYPES are not.


//See notes for more on operators..

//CONTROL-FLOW

//The most common control flow block is the the if-else block.

//the rationale is that based on a certain condition, we would like to modify,
//the flow of the program since the typical execution of programs is line-by-line in consecutive order
//especially for interpreted languages like Javascript.

//the general syntax is

/*
  if condition_is_true
    //do this
  else if some_other_condition_is_true
    //do this
  else //default action (all the above are false)
    //do this

*/
bank_balance = 24000;
Bank_balance = "24000";

if( bank_balance === Bank_balance ){
  console.log('From hand to mouth');//print this out when the above condition is equal
}else{
  console.log("Good spending");//print this other when the condition above is false
}

//Familiar..yes?


//FUNCTION

//The rationale for functions is that at times, mostly, you will need to group certain functionality,
//So that you do not have to write the same code(logically) over and over again, for example

//you have to add 10 pairs of numbers and get results,..now the long cut would be..

r1 = number1 + number2;
console.log(r1);
r2 = number3 + number4;
console.log(r2);
r3 = number5 + number6;
console.log(r3);
r4 = number7 + number8;
console.log(r4);

//you would do this 10-times..pretty boring :(

//instead we could use a function :)

function addThem(number1,number2){
  r1 = number1 + number2;
  console.log(r1);
}

//and now
addThem(number1,number2);
addThem(number3,number4);

//and so on and so forth..

//so we see functions allow us to group functionality and in so doing,
//we have more modular code(things are logically grouped) and therefore more maintainable i.e.
//if there is a problem with my additions, I only need to modify one function and not the 10 instances
//where I have been doing addition :)

//Now we can work out the CAT 2 question;

//let us create a function that simply DIVIDES two numbers and returns the result(CAT 2 question)

//general syntax for functions is..

function divideNumz(first,second){

  if( second != 0 ){
    result = first / second;
  }else{
    console.log('Error! Division by zero');
  }

  console.log(result);

}

//an important thing to note is that in Javascript, a function is ONLY executed when called

//to call a function name, you simply write out its name with all the required arguments...


//a function call
divideNumz(1,2);
divideNumz(2,1);
divideNumz(2,0);//this means trouble given our function :) division by zero...
//let us modify our function

//there you have it.. a brief intro to basic JS syntax and semnantics...
//Now let us link this up to a HTML Page.. coming up next..
