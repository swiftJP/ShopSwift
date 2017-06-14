var stripe = Stripe('pk_test_nMG6joBPzK6kGAAjgzSuakUR');
var elements = stripe.elements();

var card = elements.create('card');
card.mount('#card-element');

function setOutcome(result) {
    var successElement = document.querySelector('.success');
    var errorElement = document.querySelector('.error');
    successElement.classList.remove('visible');
    errorElement.classList.remove('visible');

    if (result.token) {
        // Use the token to create a charge or a customer
        // https://stripe.com/docs/charges
        successElement.querySelector('.token').textContent = result.token.id;
        successElement.classList.add('visible');
    } else if (result.error) {
        errorElement.textContent = result.error.message;
        errorElement.classList.add('visible');
    }
}

card.on('change', function(event) {
    setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = document.querySelector('form');
    var extraDetails = {
        name: form.querySelector('input[name=cardholder-name]').value,
        address_zip: form.querySelector('input[name=address-zip]').value
    };
    stripe.createToken(card, extraDetails).then(setOutcome);
});