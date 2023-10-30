
const sectionCards = document.getElementById("section-cards");
const crearProductoHTML = (producto) => {
    return `
        <div class="div-producto">
            <a href="./pages/detalleproducto.html?id=${producto.codigo}">
                <ul>
                    <li>
                        <h3>${producto.nombreProducto}</h3>
                    </li>
                    <li>
                        <p>${producto.descripcion}</p>
                    </li>
                    <li>
                        <img src="${producto.imagen}" alt="Imagen del producto">
                    </li>
                    <li>
                        <h4>${producto.precioUnitario}</h4>
                    </li>
                </ul>
            </a>
        </div>
    `;
};

const cargarProductos = (productos) => {


    if (productos.length > 0) {
        sectionCards.innerHTML = "";
        productos.forEach((producto) => {
            sectionCards.innerHTML += crearProductoHTML(producto);
        });
    } else {
        alert("⛔️ No se han podido cargar los productos");
    }
};



cargarProductos(productos)