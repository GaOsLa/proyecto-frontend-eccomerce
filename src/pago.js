//eliminar los productos comprados del localStorage.

// Seleccionar el botón
let button1 = document.getElementById('pay-button1');
let button2 = document.getElementById('pay-button2');

// Agregagamos un controlador de eventos al botón1
button1.addEventListener('click', function(event) {
    // Realizar alguna acción cuando se hace clic en el botón
    let carrito = JSON.parse(localStorage.getItem('carrito')); // levanto el carrito comprado del localStorage
    let comprados = JSON.parse(localStorage.getItem('comprados')) || []; // tomamos el array guardado o un array vacío si no hay

    comprados.push(carrito); // acumulamos los datos del array actual

    localStorage.setItem('comprasRealizadas', JSON.stringify(comprados)); // guardamos el array en local storage

    // eliminamos el carrito confirmado
    removeArrayFromLocalStorage()
    // alert('Botón clickeado');
});
// Agregamos un controlador de eventos al botón2
button2.addEventListener('click', function(event) {
    // Realizar alguna acción cuando se hace clic en el botón
    let carrito = JSON.parse(localStorage.getItem('carrito')); // levanto el carrito comprado del localStorage
    let comprados = JSON.parse(localStorage.getItem('comprados')) || []; // tomamos el array guardado o un array vacío si no hay
    
    comprados.push(carrito); // acumulamos los datos del array actual
    
    localStorage.setItem('comprasRealizadas', JSON.stringify(comprados)); // guardamos el array en local storage
    
    // eliminamos el carrito confirmado
    removeArrayFromLocalStorage()
    // alert('Botón clickeado');
});
function removeArrayFromLocalStorage() {
    
    //antes de eliminar confirmamos que carrito aun existe
    if (localStorage.getItem('carrito') !== null) {
    
        //si existe procedemos a eliminarlo
        localStorage.removeItem('carrito');
    }
}