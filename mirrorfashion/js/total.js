var $input_quantidade = document.querySelector("#qtd");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = function () {
    var preço = document.querySelector("#preço").textContent;
  
    preço = parseFloat(preço);

    var quantidade = $input_quantidade.value ;
    var total = quantidade*preço;

    total = "R$ " + total.toFixed(2)
    total = total.replace (".",",");

    $output_total.value = total;


}
