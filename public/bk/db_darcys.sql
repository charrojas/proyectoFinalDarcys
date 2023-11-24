-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 15:19:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_darcys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'Elegante'),
(2, 'Infantiles'),
(3, 'Temporada'),
(4, 'Artesanal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `recibir_publicidad` tinyint(1) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `tipo_plan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `direccion`, `recibir_publicidad`, `telefono`, `correo`, `fecha_evento`, `tipo_plan`) VALUES
(6, 'Douglas', 'Ramon jimenez', '70301', 1, '61994020', 'douglasjimenez2028@gmail.com', NULL, 'planClasico'),
(8, 'Ashly Charlotte', 'Ashly Rojas', '27 millas, de finca Barboza primer entrada a M/D 400 MTS al fondo, casa prefabricada color verde a M/D contiguo a un corral', 1, '60020469', 'charrojas2000@gmail.com', '2023-11-24', 'Plan preferencial'),
(9, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Plan clasico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocteles`
--

CREATE TABLE `cocteles` (
  `id_coctel` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `disponibilidad` tinyint(1) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cocteles`
--

INSERT INTO `cocteles` (`id_coctel`, `nombre`, `descripcion`, `precio`, `disponibilidad`, `img`, `id_categoria`) VALUES
(7, 'Margarita', 'La margarita es un cóctel compuesto por tequila, triple seco y jugo de lima o limón. A menudo se sirve con sal en el borde de la copa. La bebida se sirve sacudiendo el hielo (con hielo), mezclado con hielo (margarita frozen), o sin hielo (hacia arriba).', 12, 1, '1700611445.jpg', 1),
(8, 'Pantera rosa', 'Es un mocktail dulce especial para los peqeñines de la casa, su origen se basa por la orden del rey Octavio XI  para el cumpleaños de su hijo', 10, 1, '1700611540.jpg', 2),
(9, 'Tequila sunrise', 'El tequila sunrise o Acapulco es un cóctel preparado de dos maneras diferentes: la original, con tequila, crème de cassis, jugo de lima y agua con gas; la forma más popular está hecha con tequila, jugo de naranja y granadina.', 11, 1, '1700612617.jpg', 4),
(10, 'Drunk-Tomato', 'Su origen se basa en el chiliguaro costarricense el cual es un trago popular de Costa Rica. Es una mezcla de guaro, bebida alcohólica tradicional de Costa Rica, similar al aguardiente, combinado con salsa de chile picante.', 10, 1, '1700611721.jpg', 4),
(11, 'watermelon', 'Es un mocktail dulce especial para los peqeñines de la casa, su elaboracion nacio para que los niños puedan disfrutar en familia sin perder la elegancia de un coctel tradicional', 10, 1, '1700611899.jpg', 2),
(12, 'Drunken Strawberry', 'Un cóctel de fresa dulce y refrescante, con un toque de licor que lo hace irresistible.  Una mezcla de fresas frescas, vodka, limón y azúcar, que se combinan para crear un sabor único y delicioso.  La fresa es la protagonista de este cóctel, con su sabor dulce y afrutado. El vodka le aporta un toque de alcohol que lo hace más sofisticado. El limón le da un toque de acidez que lo balancea, y el azúcar lo endulza', 13, 1, '1700612149.jpg', 1),
(13, 'Chiliguaro tradicional', 'El chiliguaro es un trago popular de Costa Rica. Es una mezcla de guaro, bebida alcohólica tradicional de Costa Rica, similar al aguardiente, combinado con salsa de chile picante. En ocasiones se le agrega jugo de tomate, sal, limón, pimienta y otras especias utilizadas en la cocina costarricense.', 10, 1, '1700612230.jpg', 4),
(14, 'Martini', 'El martini o martini seco (Dry Martini en inglés) es uno de los cócteles más conocidos, compuesto de ginebra con una porción de vermut. Suele servirse en copa de cóctel, adornado con una aceituna.', 15, 1, '1700612326.jpg', 1),
(15, 'Gin Tonic Canela', 'Un clásico renovado y aumentado que gracias a la canela intensifica su amor y textura, perfecto para los amantes del Gin.', 12, 1, '1700671578.jpg', 1),
(16, 'Caipiruva', 'Es un coctel simple pero elegante, en el cual se extrae el sabor de las mejores uvas del pais para darle ese color unico  y ese sabor acido que lo hace muy famoso entre los consumidores', 15, 1, '1700671765.jpg', 4),
(17, 'Marea rosa', 'Es un sabor unico donde combinamos la complejidad del ravano con el sabor dulce y fresco de la fresa, logrando una explosion de sabor en tu paladar', 14, 1, '1700671842.jpg', 4),
(18, 'BeerKid', 'Es un coctel con forma de cerveza pero sabor a naranja y piña, único y sabroso el cual dejara el paladar de tu pequeño muy sastisfecho', 10, 1, '1700671949.jpg', 2),
(19, 'Ube Drunk', 'Es un trago tradicional, solo que agregamos la un trozo de raiz ube el cual le da un matiz de sabor unico', 12, 1, '1700672023.jpg', 4),
(20, 'Tropical shot', 'Es un coctel el cual por peticion de nuestros clientes estara de forma permanente en nuestro catalogo de temporada, debido a que por su sabor dulce y con cuerpo es muy popular en el publico femenino', 14, 1, '1700672118.jpg', 3),
(21, 'Queen shot', 'Un coctel el cual esta realizado con los mayores cuidados ya que se realiza una mezcla de flores de vainilla y licor Queen para que tenga el sabor uncio de este licor pero con un poco de esencia de vainilla', 17, 1, '1700672229.jpg', 1),
(22, 'Verano azul', 'Es un coctel el cual utiliza blue curacao y jugo de naranja, su inspiracion nace del sunrise pero no todos los atardeceres son naranja', 12, 1, '1700672380.jpg', 4),
(23, 'Explosion de maracuya', 'Es un coctel el cual tiene licor de maracuya y tambien se tritura una de estas frutas para hacer que ambos sabores nos transporten a otro universo', 12, 1, '1700672483.jpg', 4),
(24, 'Sunrise green', 'Es un coctel tequila sunrise tradicional solo que se combina granadina de distintos sabores a petición del cliente', 12, 1, '1700672666.jpg', 4),
(25, 'Santa muerte', 'Cuenta la leyenda que un dia la santa muerte visito a un anciano este sin saber que estaba ante la misma muerte le ofrecio de beber y aquel vaso se tinto de negro, lo traemos de la leyenda para ustedes.', 14, 1, '1700672803.jpg', 3),
(26, 'Los mirones', 'Un coctel el cual nos recuerda que cualquier cosa que veamos de mas nos puede salir caro, te animas a mirar?', 16, 1, '1700672896.jpg', 3),
(27, 'Las cuernudas', 'Un duo de cocteles para parejas, no se le pongas los cuernos mejor ven y tomatelos', 20, 1, '1700672994.jpg', 3),
(28, 'Draculea', 'Coctel solo para vampiros, se deconoce su origen cuenta la leyenda que un dia aparecio en nuestra carta, y nadie se atreve a tomarlo por su forma textura peculiar de sangre, te animas?', 16, 1, '1700673086.jpg', 3),
(29, 'Cholatada', 'Una choclatada tradicional pero con la elegancia de un coctel, la elegancia se enseña desde pequeños', 10, 1, '1700673156.jpg', 2),
(30, 'La novia', 'Se le da este curioso nombre ya que durante los primeros 7 minutos este desprende un vapor el cual le da una apariencia muy curiosa y lo hace ver como el velo de una novia', 14, 1, '1700673246.jpg', 1),
(31, 'Orange', 'Un trago simple pero elegante, cuenta con un licor de naranja y gotas de otros citricos como toronja, green fruit, limon, entre otros esto para lograr su unico sabor acido', 15, 1, '1700673357.jpg', 1),
(32, 'PigShot', 'Un trago dulce y elegante el cual cuenta con ingredientes de distinta naturaleza para lograr ese color unico', 15, 1, '1700673484.jpg', 1),
(33, 'La chaparra', '¿quien dijo que las chaparras no eran bravas?, les presentamos nuestro coctel mas pequeños el cual tiene un 17% de licor, te animas o te da miedo que te pegue la chaparra?', 15, 1, '1700673577.jpg', 1),
(34, '¿Para niños?', 'Es un mocktail que por su aspecto parece un coctel real, pero es realizado a base de powerade y frutas para darle espacio a los pequeñines en nuestras reuniones', 14, 1, '1700673793.jpg', 2),
(35, 'Feliz navidad', 'Un coctel perfecto para que santa olvide el sabor convencional de la leche y se ponga mas fino!!!', 15, 1, '1700673954.jpg', 3),
(36, 'Sunrise Kid', 'Es un coctel el cual genera un nivel de glamour a nuestras actividades creado en 1820 por leonardo segundo como una orden para sus empleados que el que complaciera a su hijo le daria riquezas', 15, 1, '1700674041.jpg', 2),
(37, 'Alma en pena', 'Dicen que es una sangria tradicional, pero los que la han probado notan algo diferente dicen los relatos que por cada sorbo se logra escuchar las almas en pena nadando en el mismo hades', 15, 1, '1700675216.jpg', 3),
(38, 'Verano terrorifico', 'El peligro al servir este coctel es indescriptible ya que si no se realiza en el tiempo correcto, la muerte reclama tu alma', 15, 1, '1700675307.jpg', 3),
(39, 'Corteza cerebral', 'Un shot terrorífico el cual tiene el extracto de corteza cerebral de un vampiro mientras dormia', 10, 1, '1700675367.jpg', 3),
(40, 'Cascanueces', 'Un mocktail realizado a base de mani y leche almendra especial para esas epocas frias', 13, 1, '1700675495.jpg', 2),
(41, 'Mangopiña', 'Un mocktail realizado a base de mango y jugo de piña especial para los dias soleados', 10, 1, '1700675558.jpg', 2),
(42, 'Red velvet', 'Inspirados en el famoso pastel red velvet, copiamos su rico y esponjoso sabor especialmente para los mas pequeños de la casa', 14, 1, '1700675669.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `nombre_proveedor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingrediente`, `nombre`, `cantidad`, `fecha_vencimiento`, `nombre_proveedor`) VALUES
(2, 'Sal', 12, '2023-11-23', 'SalSol'),
(3, 'Limones', 230, '2023-11-30', 'Granja del sur'),
(4, 'Sandia jumbo', 120, '2023-12-08', 'Granja del sur'),
(5, 'Uva granel', 540, '2023-11-23', 'Viñedo Cruz Sevilla'),
(6, 'Tomate', 1200, '2023-12-10', 'Verdureria michi'),
(7, 'aceituna', 230, '2023-12-03', 'Megasuper'),
(8, 'Piña', 120, '2023-12-08', 'Del monte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes_cocteles`
--

CREATE TABLE `ingredientes_cocteles` (
  `id_ingredientes_cocteles` int(11) NOT NULL,
  `id_ingrediente` int(11) DEFAULT NULL,
  `id_coctel` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingredientes_cocteles`
--

INSERT INTO `ingredientes_cocteles` (`id_ingredientes_cocteles`, `id_ingrediente`, `id_coctel`, `cantidad`) VALUES
(4, 6, 13, 2),
(5, 2, 13, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_admin`, `usuario`, `password`) VALUES
(1, 'admin', '123'),
(2, 'charrojas@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  ADD PRIMARY KEY (`id_coctel`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`);

--
-- Indices de la tabla `ingredientes_cocteles`
--
ALTER TABLE `ingredientes_cocteles`
  ADD PRIMARY KEY (`id_ingredientes_cocteles`),
  ADD KEY `id_ingrediente` (`id_ingrediente`),
  ADD KEY `id_coctel` (`id_coctel`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  MODIFY `id_coctel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ingredientes_cocteles`
--
ALTER TABLE `ingredientes_cocteles`
  MODIFY `id_ingredientes_cocteles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cocteles`
--
ALTER TABLE `cocteles`
  ADD CONSTRAINT `cocteles_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingredientes_cocteles`
--
ALTER TABLE `ingredientes_cocteles`
  ADD CONSTRAINT `ingredientes_cocteles_ibfk_1` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id_ingrediente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingredientes_cocteles_ibfk_2` FOREIGN KEY (`id_coctel`) REFERENCES `cocteles` (`id_coctel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
