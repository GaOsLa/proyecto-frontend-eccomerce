// let carrito = [];

const carritoLS = JSON.parse(localStorage.getItem("carrito")) || []; //para saber que contiene el localStorage
document.addEventListener("DOMContentLoaded", () => {
    // Obtén el código del producto de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get("id"); // Cambia "codigo" a "id" para que coincida con la URL

    // Encuentra el producto correspondiente por su código
    const producto = productos.find((p) => p.codigo === parseInt(productId)); 

    if (producto) {
        // Construye el HTML para mostrar los detalles del producto

        console.log(producto)

    const detalleproductoHTML = `
        <div class="detalle">
         
        <div class="producto-detalle">
        
            <h1 id="nombreProducto">${producto.nombreProducto}</h1>
            <h1 id="nombreProducto">${producto.codigo}</h1>
            
            
            <div class="imagenproducto">
           <p> <img id="imagen" src="${producto.imagen1}" alt="Imagen del producto"></p> 
           <p> <img id="imagen" src="${producto.imagen2}" alt="Imagen del producto"></p>
           </div>
            <h4 id="precioUnitario">Precio: $${producto.precioUnitario}</h4>
            <div class="buttonsDecInc">
            <button id="decrementar">-</button>
            <input type="text" id="cantidad" value="0">
            <button id="incrementar">+</button>
            <button type="button" id="agregarCarrito" class="agregarCarrito">Agregar</button></div>
            
        </div>
        </div>
        <div class="car-env-op">
        <div>
            <h2 id="caracteristicas_${producto.id}">caracteristicas</h2> 
            <p>${producto.caracteristicas}</p>
        </div>
        
              
            `; 

            const detalleProductoContainer = document.querySelector(".producto-detalle");
            detalleProductoContainer.innerHTML = detalleproductoHTML;
    
            // Obtén los elementos del DOM para los botones y el campo de cantidad
            const cantidadInput = document.getElementById("cantidad");
            const incrementarButton = document.getElementById("incrementar");
            const decrementarButton = document.getElementById("decrementar");
            const agregarCarritoButton = document.getElementById("agregarCarrito");
    
            // Agrega manejadores de eventos a los botones
            incrementarButton.addEventListener("click", function () {
                var cantidad = parseInt(cantidadInput.value);
                cantidadInput.value = cantidad + 1;
            });
        
            decrementarButton.addEventListener("click", function () {
                var cantidad = parseInt(cantidadInput.value);
                if (cantidad > 0) {
                    cantidadInput.value = cantidad - 1;
                }
            });
            
            agregarCarritoButton.addEventListener("click", function () {
                const cantidad = parseInt(cantidadInput.value);
                if (cantidad > 0) {
                    // Crea un objeto para agregar al carrito
                    const productoEnCarrito = {
                        codigo: producto.codigo,
                        nombreProducto: producto.nombreProducto,
                        descripcion: producto.descripcion,
                        precioUnitario: producto.precioUnitario,
                        cantidad: cantidad,
                        importeTotal: cantidad * producto.precioUnitario
                    };
            
                    // Verifica si el producto ya existe en 'carritoLS'
                    const existingProductIndex = carritoLS.findIndex((p) => p.codigo === productoEnCarrito.codigo);
            
                    if (existingProductIndex !== -1) {
                        // Si el producto ya existe, actualiza la cantidad y el importe total
                        carritoLS[existingProductIndex].cantidad += cantidad;
                        carritoLS[existingProductIndex].importeTotal += cantidad * producto.precioUnitario;
                    } else {
                        // Si el producto no existe en el carrito, agrégalo
                        carritoLS.push(productoEnCarrito);
                    }
            
                    // Actualiza 'localStorage' con el carrito actualizado
                    localStorage.setItem("carrito", JSON.stringify(carritoLS));
            
                    // Puedes mostrar un mensaje al usuario para confirmar que se ha agregado al carrito
                    alert("Producto agregado al carrito");
                }
                cantidadInput.value = "0";
            });
            
      
            
        } else {
            // Muestra un mensaje si el producto no se encuentra
            alert("Producto no encontrado");
        }
    });