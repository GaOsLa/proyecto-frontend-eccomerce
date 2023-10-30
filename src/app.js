let listaProductos;

async function getDataAPI() {

    
    try {
      const options = { method: "GET" };
      const response = await fetch("https://www.guarlo.com.ar/pi2/tiendaarg/api/", options);
  
      if (!response.ok) {
        console.log('error al conectar')
        throw new Error("La solicitud no pudo completarse.");
      } else{
        console.log('coneccion exitosa')
      }
  
      const data = await response.json();
      listaProductos = data.results;
      
      const jsonResultado = JSON.stringify(listaProductos);
      localStorage.setItem("listaProductos", jsonResultado);
    
      cargarProductos(data.results);
      
    } catch (error) {
      //console.log(error.message);
      domTarjetas.innerHTML = `<p class="alert alert-danger">${error.message}</p>`;;
    }
  }
  
listaProductos = getDataAPI();
console.log(listaProductos);

cargarProductos(listaProductos)


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

async function cargarProductos(productos) {
    console.log('cargarProductos', productos)

    if (productos.length > 0) {
        sectionCards.innerHTML = "";
        productos.forEach((producto) => {
            sectionCards.innerHTML += crearProductoHTML(producto);
        });
    } else {
        // alert("⛔️ No se han podido cargar los productos");
    }
};
 