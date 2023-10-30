const tableBody = document.getElementById("detalle-carrito");
const importeTotalCarrito = document.getElementById("importeTotalCarrito");

function crearFilaHTML(producto) {
  const importeUnitario = producto.precioUnitario.toLocaleString("es-AR", {
    style: "currency",
    currency: "ARS",
  });
  const importeTotal = (producto.precioUnitario * producto.cantidad).toLocaleString("es-AR", {
    style: "currency",
    currency: "ARS",
  });

  return `
    <tr>
      <td>${producto.nombreProducto}</td>
      <td>${producto.cantidad}</td>
      <td>${importeUnitario}</td>
      <td>${importeTotal}</td>
      <td>
        <button type="button" data-codigo="${producto.codigo}" class="boton_carrito_eliminar">Eliminar</button>
      </td>
    </tr>
  `;
}

function cargarCarrito(carrito) {
  let importeTotal = 0;
  if (carrito.length > 0) {
    tableBody.innerHTML = "";
    carrito.forEach((producto) => {
      const filaHTML = crearFilaHTML(producto);
      tableBody.innerHTML += filaHTML;
      importeTotal += producto.precioUnitario * producto.cantidad;
    });

    importeTotalCarrito.textContent = importeTotal.toLocaleString("es-AR", {
      style: "currency",
      currency: "ARS",
    });
  } else {
    alert("⛔️ No se han podido cargar los productos");
  }
}

const carritoLS = JSON.parse(localStorage.getItem("carrito")) || [];
cargarCarrito(carritoLS);

tableBody.addEventListener("click", (event) => {
  if (event.target.tagName === "BUTTON") {
    let codigoProductoAEliminar = event.target.getAttribute("data-codigo");
   
    // Encontrar y eliminar el producto correspondiente de 'carritoLS'
    let indexAEliminar = carritoLS.findIndex((producto) => producto.codigo === parseInt(codigoProductoAEliminar));
   
    if (indexAEliminar !== -1) {
      carritoLS.splice(indexAEliminar, 1);
      // Actualizar el carrito en el localStorage
      localStorage.setItem("carrito", JSON.stringify(carritoLS));
        // Volver a cargar el carrito
      cargarCarrito(carritoLS);
    }
  }
});

/*tableBody.addEventListener("click", (event) => {
  if (event.target.tagName === "BUTTON") {
    const codigoProductoAEliminar = event.target.getAttribute("data-codigo");
    console.log(codigoProductoAEliminar)

    // Encontrar y eliminar el producto correspondiente de 'carritoLS'
    const indexAEliminar = carritoLS.findIndex((producto) => producto.codigo === codigoProductoAEliminar);
    console.log(indexAEliminar)

    if (indexAEliminar !== -1) {
      carritoLS.splice(indexAEliminar, 1);
      // Actualizar el carrito en el localStorage
      localStorage.setItem("carrito", JSON.stringify(carritoLS));

      // Volver a cargar el carrito
      cargarCarrito(carritoLS);
    }

*/