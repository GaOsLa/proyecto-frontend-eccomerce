<?php 
// Establece los encabezados CORS para permitir el acceso desde cualquier origen
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
//header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Headers: Content-Type, Authorization'); //agruegue esta linea al comentar la anterior  (Gabriel)
    
// Comprueba el método de la solicitud
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Procesa solicitudes GET
    
    $articulos = [
      'results' => [
        [
          'codigo' => 1,
          'nombreProducto' => 'Smartphone Galaxy S20 FE',
          'descripcion' => 'Potente smartphone con cámara de alta resolución y pantalla AMOLED.',
          'precioUnitario' => 799.99,
          'categoria' => 'Smartphone',
          'stock' => 45,
          'disponibilidad' => false,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_675532-MLA51148838028_082022-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_688230-MLA51148838026_082022-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_615146-MLA51148838024_082022-O.webp',
          'caracteristicas' => 'El Samsung Galaxy S20 FE 5G es un equipo con una excelente relación precio-calidad. Con un procesador de última generación como el Snapdragon 865, brinda un rendimiento muy sólido y que aprovecha toda la velocidad de la conectividad 5G.',
          ],
        [
          'codigo' => 2,
          'nombreProducto' => 'Samsung Galaxy S21 Ultra',
          'descripcion' => 'Smartphone Android con una pantalla AMOLED dinámica de 6.8 pulgadas',
          'precioUnitario' => 999.99,
          'categoria' => 'Smartphone',
          'stock' => 30,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_611211-MLA71826976641_092023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_817200-MLA71773912600_092023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_662017-MLA71827085147_092023-O.webp',
          'caracteristicas' => 'El Exynos 2100. Esta vez con opciones de 12GB de memoria RAM 128GB o 256GB de almacenamiento. La cámara posterior del Galaxy S21 Ultra es mejorada a una cuádruple, con lente principal de 108MP, un lente periscópico de 10MP, lente telefoto de 10MP y un lente ultrawide de 12MP, mientras que la cámara frontal sube a 40MP.'
        ],
        [
          'codigo' => 3,
          'nombreProducto' => 'Google Pixel 6 Pro',
          'descripcion' => 'Teléfono Android con el chip personalizado Tensor de Google y pantalla OLED de 6.7 pulgadas',
          'precioUnitario' => 1199.99,
          'categoria' => 'Smartphone',
          'stock' => 25,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_930113-MLA72022730107_092023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_670832-MLA72022641041_092023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_863911-MLA72022709887_092023-O.webp',
          'caracteristicas' => 'Color Sorya Sunny. 128gb - 12gb Ram. Pantalla 1440p 120hz. Camara Triple, 50MP+12MP+48MP, con OIS, zoom óptico 4x y zoom híbrido 20x. Batería 5003mah con Carga Rápida de 30w,Carga Inalámbrica de 23 y Carga Reversible,Ip68(sumergible),Doble Parlante Stereo,Android 14'
        ],
        [
          'codigo' => 4,
          'nombreProducto' => ' OnePlus 9 Pro',
          'descripcion' => 'Dispositivo Android con pantalla Fluid AMOLED de 6.7 pulgadas y procesador Snapdragon 888.',
          'precioUnitario' => 599.99,
          'categoria' => 'Smartphone',
          'stock' => 50,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_637083-MLA52064698783_102022-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_677294-MLA52064764524_102022-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_694816-MLA52064834055_102022-O.webp',
          'caracteristicas' => 'Con una pantalla de 6.7 que le brinda una muy buena resolucion, este dispositivo cuenta con una memoria interna de 256 GB, camara frontal de 16 Mpx y 50 mpx en la camara posterior para una calidad y nitidez superior en tus fotos.'
        ],
        [
          'codigo' => 5,
          'nombreProducto' => 'Sony Xperia 1 III',
          'descripcion' => 'Teléfono Android con una pantalla OLED 4K HDR de 6.5 pulgadas, procesador Snapdragon 888',
          'precioUnitario' => 499.99,
          'categoria' => 'Smartphone',
          'stock' => 35,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_897804-MLA69427719081_052023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_780154-MLA69417136002_052023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_766221-MLA69417136056_052023-O.webp',
          'caracteristicas' => 'El Sony Xperia XZ1 es la nueva generación XZ, mejorando muchas de las características de sus antecesores. El Xperia XZ1 cuenta con una pantalla Full HD de 5.2 pulgadas, procesador Snapdragon 835 de ocho núcleos, 4GB de RAM, 64GB de almacenamiento interno, cámara principal con captura de video en cámara lenta de hasta 960 cuadros por segundo, parlantes stereo, sonido HiFi, puerto USB-C, lector de huellas.'
        ],
        [
          'codigo' => 6,
          'nombreProducto' => 'Samsung Galaxy Z Fold 3 ',
          'descripcion' => 'Innovador teléfono plegable con una pantalla AMOLED de 7.6 pulgadas. ',
          'precioUnitario' => 129.99,
          'categoria' => 'Smartphone',
          'stock' => 60,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_869437-MLA52132629318_102022-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_885645-MLA52132645077_102022-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_703695-MLA52132629320_102022-O.webp',
          'caracteristicas' => 'Chip A15 Bionic superrápido. Una increíble duración de batería y una cámara que es una superestrella. Y además, el vidrio más resistente en un smartphone y botón de inicio con la seguridad de Touch ID.'
        ],
        [
          'codigo' => 7,
          'nombreProducto' => 'Apple iPhone SE',
          'descripcion' => ' Smartphone compacto de Apple con el chip A13 Bionic, pantalla Retina HD de 4.7 pulgadas.',
          'precioUnitario' => 899.99,
          'categoria' => 'Smartphone',
          'stock' => 40,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_696564-MLA52130732644_102022-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_790114-MLA52130732645_102022-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_996430-MLA52130732650_102022-O.webp',
          'caracteristicas' => 'Chip A15 Bionic superrápido. Una increíble duración de batería y una cámara que es una superestrella. Y además, el vidrio más resistente en un smartphone y botón de inicio con la seguridad de Touch ID.'
        ],
        [
          'codigo' => 8,
          'nombreProducto' => 'Apple iPhone 15',
          'descripcion' => ' insignia de Apple para 2023, con un procesador A16 Bionic y una pantalla OLED de 6,1 pulgadas.',
          'precioUnitario' => 1499.99,
          'categoria' => 'Smartphone',
          'stock' => 28,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_779617-MLA71782867320_092023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_777748-MLA71835513709_092023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_749185-MLA71835504313_092023-O.webp',
          'caracteristicas' => 'El iPhone 15 viene con la Dynamic Island, cámara gran angular de 48 MP, entrada USB-C y un resistente vidrio con infusión de color en un diseño de aluminio.'
        ],
        [
          'codigo' => 9,
          'nombreProducto' => 'Samsung Galaxy S23 Ultra',
          'descripcion' => 'El smartphone más premium de Samsung para 2023, con una pantalla AMOLED de 6,8 pulgadas.',
          'precioUnitario' => 1399.99,
          'categoria' => 'Smartphone',
          'stock' => 20,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_762506-MLU72415593189_102023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_736785-MLU72349518978_102023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_738598-MLU72349518980_102023-O.webp',
          'caracteristicas' => 'Hacé que las noches sean más épicas con la cámara nocturna. Es un kit de nivel profesional que cabe en una mano. La cámara posterior triple y la cámara de selfie ofrecen hardware y software de cámara innovadores para que puedas capturar fácilmente una galería llena de contenido digno de compartir. Adiós, resplandor. Las asombrosas pantallas Infinity-O de 120 Hz están diseñadas con Dynamic AMOLED 2X con tecnología Vision Booster para una alta visibilidad al aire libre, lo que mantiene la vista nítida a plena luz del día o de noche. Ahora el único resplandor que verás será el de las cámaras de los celosos.'
        ],
        [
          'codigo' => 10,
          'nombreProducto' => 'Google Pixel 8 Pro',
          'descripcion' => 'smartphone de gama alta de Google, con un procesador Tensor de segunda generación.',
          'precioUnitario' => 649.99,
          'categoria' => 'Smartphone',
          'stock' => 55,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_658784-MLA72300509918_102023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_658784-MLA72300509918_102023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_603682-MLA72300656988_102023-O.webp',
          'caracteristicas' => 'La magia de Google. Ahora más pro. Con la IA de Google y la mejor Cámara Pixel, es el Pixel más potente y personal hasta la fecha. El nuevo chip Google Tensor G3 se ha diseñado a medida con la IA de Google para ofrecerte funciones vanguardistas de fotografía y vídeo, así como formas más inteligentes de ayudarte a lo largo del día. Cámara de gran angular de 50 MP, Cámara con teleobjetivo de 13 MP'
        ],
        [
          'codigo' => 11,
          'nombreProducto' => 'Oppo Find X5 Pro',
          'descripcion' => 'un procesador Snapdragon 8 Gen 2 y una pantalla AMOLED de 6,7 pulgadas .',
          'precioUnitario' => 699.99,
          'categoria' => 'Smartphone',
          'stock' => 32,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_925059-MLA49512286539_032022-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_706715-MLA52182895900_102022-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_829513-MLA52486131919_112022-O.webp',
          'caracteristicas' => 'Un material atemporal para un diseño atemporal. La curva estilizada del OPPO Find X5 Pro es posible gracias a la elegante cerámica. Para crear su acabado premium, el cuerpo se pule en 14 procesos durante 269 minutos para capturar la suavidad del guijarro. Mientras que la inclinación de 75° ofrece la curva óptima para iluminar el cuerpo a la luz del sol o a la sombra.'
        ],
        [
          'codigo' => 12,
          'nombreProducto' => 'Samsung Galaxy A53 5G',
          'descripcion' => 'Un smartphone de gama media de Samsung con una pantalla Super AMOLED de 6,5 pulgadas.',
          'precioUnitario' => 79.99,
          'categoria' => 'Accesorios de computación',
          'stock' => 50,
          'disponibilidad' => false,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_733993-MLA53362847182_012023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_603837-MLA53362743608_012023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_801109-MLA53362708977_012023-O.webp',
          'caracteristicas' => 'Si estás buscando un teléfono con conexión 5G de alta calidad, el Samsung Galaxy A53 5G SM-A536 es una excelente opción. Con una capacidad de almacenamiento de 128GB, tendrás suficiente espacio para almacenar todas tus fotos, videos y aplicaciones favoritas. La pantalla de 6.5 pulgadas es perfecta para ver tus películas y series favoritas con una calidad excepcional. Además, la cámara trasera de 48MP te permite tomar fotos y videos de alta calidad, mientras que la cámara frontal de 13MP es ideal para selfies y videollamadas. El procesador octa-core y los 6GB de RAM aseguran un rendimiento rápido y eficiente, incluso con aplicaciones y juegos exigentes.'

        ],
        [
          'codigo' => 13,
          'nombreProducto' => 'OnePlus 10 Pro',
          'descripcion' => 'Un smartphone de gama alta de OnePlus con un procesador Snapdragon 8 Gen 1.',
          'precioUnitario' => 749.99,
          'categoria' => 'Smartphone',
          'stock' => 37,
          'disponibilidad' => false,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_2X_900508-MLU54987997044_052023-F.webpg',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_2X_859243-MLU54988028186_052023-F.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_2X_624503-MLU54987957932_052023-F.webp',
          'caracteristicas' => 'EL SISTEMA DE CÁMARAS CON LA RESOLUCIÓN MÁS ALTA EN LA INDUSTRIA -Captura fotos detalladas en condiciones de poca luz con el increíble sensor de 200 MP con tecnología Ultra Pixel. Obtén un área de visión más amplia con el lente ultra gran angular de 50 MP. CAPTURA MOMENTOS ÚNICOS -Te presentamos la primera cámara de 200 MP del mercado. El sensor está diseñado para equilibrar perfectamente las luces y las sombras, lo que da como resultado imágenes nítidas y brillantes para los momentos más importantes de tu vida. CARGA DE MANERA INALÁMBRICA -Recarga el teléfono sin el molesto cableado gracias a la carga inalámbrica TurboPower de 50W y obtén batería para todo el día en solo 15 minutos.'
        ],
        [
          'codigo' => 14,
          'nombreProducto' => 'Motorola Edge 30 Ultra',
          'descripcion' => 'Un smartphone de gama alta de Motorola con un procesador Snapdragon 8 Gen 1.',
          'precioUnitario' => 2499.99,
          'categoria' => 'Smartphone',
          'stock' => 22,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_900508-MLU54987997044_052023-O.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_859243-MLU54988028186_052023-O.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_624503-MLU54987957932_052023-O.webp',
          'caracteristicas' => 'El Motorola Edge 30 Ultra es el primer smartphone del mundo con una cámara de 200MP. El Edge 30 Ultra cuenta con una pantalla P-OLED de 6.67 pulgadas a resolución FHD+ y tasa de refresco de 144Hz. Por dentro, encontramos un procesador Snapdragon 8+ Gen 1 junto con 8GB de RAM y 256GB de almacenamiento interno no expandible. La cámara de 200 MP cuenta con estabilización óptica de imagen y está acompañada de una cámara ultrawide de 50MP y una cámara telefoto de 12MP, mientras que la cámara selfie es de 60MP. Las características del Motorola Edge 30 Ultra se completan con una batería de 4610 mAh de carga rápida de 125W y carga inalámbrica de 50W, lector de huellas integrado en la pantalla, y Android 12.'
        ],
        [
          'codigo' => 15,
          'nombreProducto' => 'Apple iPhone 13',
          'descripcion' => 'Un smartphone de gama alta de Apple con un procesador A15 Bionic',
          'precioUnitario' => 1699.99,
          'categoria' => 'Smartphone',
          'stock' => 27,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_2X_639159-MLA47781882565_102021-F.webp',
          'imagen1' => 'https://http2.mlstatic.com/D_NQ_NP_2X_639159-MLA47781882565_102021-F.webp',
          'imagen2' => 'https://http2.mlstatic.com/D_NQ_NP_2X_994134-MLA47781962241_102021-F.webp',
          'caracteristicas' => 'Pantalla Super Retina XDR de 6.7 pulgadas con ProMotion que brinda una respuesta más rápida y fluida. Modo Cine con baja profundidad de campo y cambios de enfoque automáticos en tus videos. Nuevo sistema de cámaras Pro de 12 MP (teleobjetivo, gran angular y ultra gran angular), escáner LiDAR, rango de zoom óptico de 6x, fotografía macro, Estilos Fotográficos, video ProRes3, HDR Inteligente 4, modo Noche, Apple ProRAW y grabación de video 4K HDR en Dolby Vision. Cámara frontal TrueDepth de 12 MP con modo Noche y grabación de video 4K HDR en Dolby Vision. Chip A15 Bionic para un rendimiento fuera de serie. Hasta 28 horas de reproducción de video, la mayor duración de batería jamás vista en un iPhone. Diseño resistente con Ceramic Shield. Resistencia al agua IP68, líder en la industria.'
        ],
        [
          'codigo' => 16,
          'nombreProducto' => 'Moto G 9 power',
          'descripcion' => 'Es un teléfono con una gran batería, puede durar hasta 60 horas con una sola carga.',
          'precioUnitario' => 899.99,
          'categoria' => 'Smartphone',
          'stock' => 48,
          'disponibilidad' => true,
          'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_2X_849254-MLA71419269657_082023-F.webp',
          'imagen1' => 'https://aobeptqsxp.cloudimg.io/v7/zona1.tiendacel.com.ar/wp-content/uploads/2020/04/161616306216fab963c741d03db692a38a7e599fbf-1.jpg',
          'imagen2' => 'https://aobeptqsxp.cloudimg.io/v7/zona1.tiendacel.com.ar/wp-content/uploads/2020/04/161616312343d79b38e31f4db2378c0f71cc1b6a55.jpg',
          'caracteristicas' => 'El Motorola Moto G9 Power es un nuevo integrante de la serie Moto G con una enorme batería de 6000 mAh de carga rápida. Su pantalla también es generosa, con 6.8 pulgadas a resolución HD+ y está potenciado por un procesador Snapdragon 662 acompañado de 4GB de memoria RAM con 128GB de almacenamiento interno expandible. La cámara principal del Moto G9 Power es triple, con un lente principal de 64MP y dos secundarios de 2MP, mientras que su cámara frontal es de 16 megapixels. El Moto G9 Power completa sus características con lector de huellas, radio FM, NFC, y corre Android 10.'
        ]
        ]];
    $articulos_json = json_encode($articulos);
    //$articulos_json = $articulos;
    header('Content-Type: application/json');
    echo $articulos_json;


} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // $data = file_get_contents('php://input');
  // $response = $data;  
  // header('Content-Type' => '/application/json');
  // //echo json_encode($response);
  // echo ($response);

  // Devuelve una respuesta JSON, por ejemplo, para confirmar la adición exitosa
  // $data = ['message' => 'Artículo agregado exitosamente'];
  //  $data = $_POST["id"];
  //  $response = json_encode($data);
  //  header('Content-Type' => '/application/json');
  //  echo ($response);


    // Procesa solicitudes POST
    $data = json_decode(file_get_contents('php://input'), true);
    //$data = file_get_contents('php://input');

    // Aquí puedes manejar los datos POST, por ejemplo, agregar un nuevo artículo a la lista
    // Añade la lógica para manejar la solicitud POST aquí...

    // Devuelve una respuesta JSON, por ejemplo, para confirmar la adición exitosa
    // $response = ['message' => 'Artículo agregado exitosamente'];
 
    // Obtiene el cuerpo de la solicitud POST en formato JSON
    //$data = json_decode(file_get_contents('php://input'), true);
    //$json_data = file_get_contents("php://input");
    // Decodifica los datos JSON en un array asociativo
    //$data = json_decode($json_data, true);

    // Verifica si se pudo decodificar correctamente el JSON
    if ($data !== null) {
        // Accede a los datos
    //    $nombre = $data['nombre'];
    //    $precio = $data['precio'];
        
        // Realiza el procesamiento necesario con los datos
        // ...


      //$response = '{"id"' => '/"Artículo nuevo"}';  // ANDA !!!!
        //$response = json_dencode($data);  
        //$response = json_encode($response);  
        //echo json_encode($response);
        $data['id'] = $data['id']." -> super!";
        $response = json_encode($data);
        header('Content-Type: application/json');
        echo ($response);
    
    } else {
        // Si no se pudo decodificar el JSON, puedes devolver un error
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Datos JSON no válidos']);
    }      



} else {
    // Si el método de solicitud no es válido, devuelve un error
    http_response_code(405); // Método no permitido
    echo json_encode(['error' => 'Método no permitido']);
}
?>