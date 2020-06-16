
function currencyFormat( num ) {
    return (
        num
            .toFixed( 0 ) // always two decimal digits
            .replace(' ', ' ') // replace decimal point character with
            .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
    ) // use . as a separator
}


function recalculate () {
    selectTariff(selectedTariff);
}

function selectTariff (id) {

    let elPrice       = document.getElementsByName("price");
    let totalPrice    = document.getElementById('totalPrice');
    let selElem       = document.getElementById(id);
    let square        = parseInt( document.getElementById('square').value ) ;

    selectedTariff = id;

    elPrice.forEach((element) => {
        //element.style.addProperty(color[id]);
        element.setAttribute("style", "color:red; border: 1px solid blue;");
        
        element.classList.remove('price');
    });

    totalPrice.innerText = currencyFormat ( price[id] * square );
    selElem.classList.add('price');


}