var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valorTamanho]')

function mostraTamanho() {
    outputTamanho.value = inputTamanho.value
    outputTamanho.textContent	=	event.target.value //IE 10
}

inputTamanho.oninput = mostraTamanho
inputTamanho.onchange	=	mostraTamanho //IE 10