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