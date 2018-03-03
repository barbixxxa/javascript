var gasPrice = document.querySelector('[name=gasPrice]')
var answer = document.querySelector('[name=answer]')

function calculate() {
    var output = gasPrice.value;
    output = output * 0.7;
    answer.placeholder = output;
}