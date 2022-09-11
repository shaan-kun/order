let physical = document.querySelector('[value="physical"]');
let legal = document.querySelector('[value="legal"]');

let contract_label = document.querySelector('[for="contract"]');
let contract_field = document.querySelector('[name="contract"]');

contract_label.style.display = 'none';
contract_field.style.display = 'none';

physical.addEventListener('click', function() {
	contract_label.style.display = 'none';
	contract_field.style.display = 'none';
});

legal.addEventListener('click', function() {
	contract_label.style.display = 'block';
	contract_field.style.display = 'block';
});

window.addEventListener( "load", function () {
  function sendData() {
    const XHR = new XMLHttpRequest();

    // Bind the FormData object and the form element
    const FD = new FormData( form );

    // Define what happens on successful data submission
    XHR.addEventListener( "load", function(event) {
      // alert( event.target.responseText );
    } );

    // Define what happens in case of error
    XHR.addEventListener( "error", function( event ) {
      alert( 'Oops! Something went wrong.' );
    } );

    // Set up our request
    XHR.open( "POST", "php/order.php" );

    // The data sent is what the user provided in the form
    XHR.send( FD );
  }

  // Access the form element...
  const form = document.getElementById( "form" );

  // ...and take over its submit event.
  form.addEventListener( "submit", function ( event ) {
    event.preventDefault();

    sendData();
  } );
} );