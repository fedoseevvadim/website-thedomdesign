

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
    let elStep       = document.getElementsByName("step");
    let totalPrice    = document.getElementById('totalPrice');
    let selElem       = document.getElementById(id);
    let square        = parseInt( document.getElementById('square').value ) ;
    let elemStep      = document.getElementById('step'+id);
    let elShowMore       = document.getElementsByName("showMore");
    let elemButtonShowMore     = document.getElementById('buttonShowMore'+id);

    selectedTariff = id;

    elShowMore.forEach((element) => {
        element.setAttribute("hidden", true);
    });

    elPrice.forEach((element) => {
        element.setAttribute("style", "padding-top: 1rem; background-color: #ffffff; color: #000000");
    });

    elStep.forEach((element) => {
        element.setAttribute("hidden", true);
    });

    elemStep.removeAttribute("hidden", false);

    totalPrice.innerText = currencyFormat ( price[id] * square );
    selElem.setAttribute("style", "padding-top: 1rem; color: #ffffff; background-color: " + color[id] + ";");
    elemButtonShowMore.removeAttribute("hidden", true);

}

function showMore ( id ) {

    let elShowMore       = document.getElementsByName("showMore");
    let elemButtonShowMore     = document.getElementById('buttonShowMore'+id);
    let elemButtons      = document.getElementsByName('buttonShowMore');

    elShowMore.forEach((element) => {

        element.setAttribute("hidden", true);

        if ( element.id === 'showMore'+id ) {
            element.removeAttribute("hidden", false);
        }

    });

    elemButtons.forEach((element) => {
        element.setAttribute("hidden", true);
    });

}