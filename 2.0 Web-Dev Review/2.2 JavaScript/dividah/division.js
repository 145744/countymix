//Event handling
//1. Using special attributes in certain elements

//An example would be onclick, onhover etc....
//We usually attach this to a javascript method that we would
//like executed when that event happens
//global variables...

var number1_element = document.getElementById('num1');
var number2_element = document.getElementById('num2');

function divideThem(){

  //getting values from our DOM (Document Object Model..remember?)
  //check out notes for more on the DOM
  //most common is using the id


  var number1 = number1_element.value;
  var number2 = number2_element.value;

  //now we would like to write the result in the span tag..
  //2. empty inputs
  //We basically need to check whether number1 and number2 are empty

  if( number1 == ""){

    //to avoid duplication..the more intelligent way is to add a span tag for errors...

    document.getElementById('num1Error').innerHTML = "Number one is empty";

    document.getElementById('num1Error').style.display = 'block';

    //we can shift the focus to number one
    number1_element.focus();

    //make the error display if filled :)

    //plus notice the icon is not appearing :) -- fix that too...

  }else if( number2 == ""){

    //to avoid duplication..the more intelligent way is to add a span tag for errors...

    document.getElementById('num2Error').innerHTML = "Number two is empty";

    document.getElementById('num2Error').style.display = 'block';

    //we can shift the focus to number one
    number2_element.focus();


  }else{
    //all is well..do division
    //1. Division by zero

    if( number2 != '0' ){
      result = number1 / number2;
    }else{
      document.getElementById('num2Error').innerHTML = "Error! Division by zero not allowed";

      document.getElementById('num2Error').style.display = 'block';

      //we can shift the focus to number one
      number2_element.focus();

      //we can also delete the zero
      number2_element.value = "";

      //we can give number 2 focus
      number2_element.focus();

    }

    //we need to take care of;
    // 1. division by zero (DONE)
    // 2. empty inputs (validation - ensuring that a user enters the right input data)
    // 3. Output formatting : Let us sort this out now...

    // we would like to format the results better

    var result_span = document.getElementById('results');
    result_span.innerHTML = result;



  }


}

//2. Using javascript addEventListener methods

var divide_them = document.getElementById('divide-them');
/*
target.addEventListener(type, listener [, options]);

target is divide_them -- our button
type is click
listener is a function to be executed..
so..


divide_them.addEventListener('click',function(){
  alert('I am not implemented also!');
});
*/
//we can use the first approach for now..


//let us get rid of the error once someone fills in a value...

//let us check out the different events..

//clear error message if there is input
number1_element.addEventListener('focusout',(event)=>{
  //perfect..
  if(number1_element.value != ""){
    document.getElementById('num1Error').innerHTML = '';
    document.getElementById('num1Error').style.display = 'none';
  }
});

//clear error message if there is input
number2_element.addEventListener('focusout',(event)=>{
  //perfect..
  if(number2_element.value != ""){
    document.getElementById('num2Error').innerHTML = '';
    document.getElementById('num2Error').style.display = 'none';
  }
});



// There you have it
// We have looked at;
// Adding JS to a Page
/*
  1. Adding JS to a Page
  2. Event handling
  3. Bootstrap (overview) and Adding Icons
  4. Input validation

*/

//Check out classroom resources for more..

//Cheers
