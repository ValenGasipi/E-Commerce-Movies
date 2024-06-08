-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2024 a las 22:24:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `filmlens`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Suspenso', 'Género cinematográfico que mantiene a la audiencia en un estado de tensión e incertidumbre, a menudo con tramas que involucran misterio, crimen, y eventos inesperados.'),
(2, 'Comedia', 'Género cinematográfico caracterizado por el humor y situaciones divertidas, destinadas a hacer reír a la audiencia.'),
(3, 'Terror', 'Género cinematográfico diseñado para asustar y causar pavor, frecuentemente involucrando elementos sobrenaturales, monstruos, y eventos aterradores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `biografia` text NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `nombre`, `biografia`, `img`) VALUES
(1, 'Dennis Dugan', 'Dennis Dugan es un director y actor estadounidense, conocido por su trabajo en comedias como \"Happy Gilmore\" y \"Big Daddy\".', ''),
(2, 'David Bruckner', 'David Bruckner es un director y guionista estadounidense, conocido por su trabajo en películas de terror como \"The Ritual\" y \"The Night House\".', ''),
(3, 'Tom Shadyac', 'Tom Shadyac es un director, guionista y productor estadounidense, conocido por su trabajo en comedias como \"Ace Ventura: Pet Detective\" y \"Liar Liar\".', ''),
(4, 'James Wan', 'James Wan es un director y productor australiano, conocido por sus películas de terror como \"Saw\", \"Insidious\" y \"The Conjuring\".', ''),
(5, 'Christopher Nolan', 'Christopher Nolan es un cineasta británico-estadounidense conocido por sus películas complejas y visualmente impresionantes. Ha dirigido éxitos de taquilla como \"Inception\", \"The Dark Knight\", y \"Interstellar\".', ''),
(6, 'Martin Scorsese', 'Martin Scorsese es un director, guionista y productor estadounidense, considerado uno de los más grandes cineastas de todos los tiempos. Sus películas incluyen \"Taxi Driver\", \"Raging Bull\" y \"Goodfellas\".', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `director_id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `precio` int(11) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `director_id`, `categoria_id`, `img`, `nombre`, `sinopsis`, `precio`, `trailer`) VALUES
(1, 1, 2, 'img/son_como_ninos_2.jpg', 'Son Como Niños 2', 'Lenny (Adam Sandler) se muda con su familia al pequeño pueblo donde él y sus amigos crecieron. Pero esta vez, los adultos serán los que aprenderán de sus hijos en un día notoriamente lleno de sorpresas y locas situaciones: el último día de clases.', 1200, 'https://www.youtube.com/embed/EJlI-peYPVs?si=n0_9LkU2EmbrSWwJ'),
(2, 2, 3, 'img/vhs.jpg', 'V.H.S 94', 'Una misteriosa cinta VHS revela la existencia de una secta siniestra que tiene material pregrabado que muestra una horrible conspiración.', 1500, 'https://www.youtube.com/embed/RwZBmHTwgDo?si=dF2U4WXeu_2UrtRz'),
(3, 3, 2, 'img/mentiroso.jpg', 'Mentiroso, Mentiroso', 'Fletcher Reede es un abogado ambicioso y sin escrúpulos, que utiliza la mentira como un medio habitual de trabajo. Su hijo de cinco años, harto de promesas incumplidas, pide un deseo, que su padre no pueda mentir durante veinticuatro horas.', 1250, 'https://www.youtube.com/embed/odPUipiGYek?si=z7_LL2ioZJe2FlND'),
(4, 1, 2, 'img/una_esposa_de_mentira.jpg', 'Una esposa de mentira', 'El cirujano Danny decide contratar a su ayudante Katherine, una madre soltera con hijos, para que finjan ser su familia. Su intención es demostrarle a Palmer que su amor por ella es tan grande que está a punto de divorciarse de su mujer.', 1500, 'https://www.youtube.com/embed/xuZnmYjAKww?si=qEj7MiqQPawFBmsb'),
(5, 1, 2, 'img/ese_es_mi_hijo.jpg', 'Ese es mi hijo', 'Cuando era un adolescente, Donny tuvo un hijo, Todd, al que crió como padre soltero hasta que cumplió los 18 años. Tras estar sin verse varios años, el mundo de Todd se viene abajo la noche antes de su boda, cuando Donny aparece sin ser invitado.', 900, 'https://www.youtube.com/embed/Uw43IpalZEQ?si=5ChcxP-BmeVeDQ7B'),
(6, 3, 2, 'img/todopoderoso.jpg', 'Todopoderoso', 'Tras pasar el peor día de su vida, el reportero de televisión Bruce Nolan le reprocha a Dios lo mal que está administrando el mundo, por lo que el Todopoderoso le otorga sus poderes y lo desafía a hacerlo mejor que Él.', 1000, 'https://www.youtube.com/embed/9jL-CDgE-fY?si=W_-132pAei3MAPnM'),
(7, 4, 3, 'img/conjuro.jpg', 'El conjuro', 'A principios de los años 70, Ed y Lorrain Warren, reputados investigadores de fenómenos paranormales, se enfrentan a una entidad demoníaca al intentar ayudar a una familia que está siendo aterrorizada por una presencia oscura en su aislada granja.', 1300, 'https://www.youtube.com/embed/_zU1gLWGnpg?si=5Y_z0bHrBiIHsVV3'),
(8, 4, 3, 'img/saw.jpg', 'Saw X: el juego del miedo', 'John Kramer conoce a una persona que le promete curarle el cáncer en una clínica de la Ciudad de México. Tras descubrir que todo era una estafa, se venga de los timadores secuestrándolos y obligándolos a participar en un juego perverso.', 1700, 'https://www.youtube.com/embed/z8dlTVL1J0A?si=68S5IvhO2NFrvAPs'),
(9, 4, 3, 'img/demonio.jpg', 'La noche del demonio', 'En 2010, Renai y Josh Lambert se han mudado recientemente a una nueva casa con sus tres hijos. Una mañana, Renai comienza a mirar un álbum familiar de fotos con su hijo, Dalton. Él pregunta por qué no hay fotos de su padre cuando él era un niño. Renai le explica que él siempre ha sido tímido ante la cámara.', 1100, 'https://www.youtube.com/embed/jxTLFXP_wYc?si=EwHaE_Hr4arVUao_'),
(10, 2, 3, 'img/vhs_85.jpg', 'VHS 85', 'A través de un documental realizado para la televisión, se presentan cinco historias de terror de metraje encontrado que llevan a los espectadores a un viaje terrorífico por los sombríos bajos fondos de la década de 1980.', 1100, 'https://www.youtube.com/embed/slkHJn_xUDU?si=lQgpZKQ7NdLWUvMA'),
(11, 5, 1, 'img/oppenheimer.jpg', 'Oppenheimer', 'Durante la Segunda Guerra Mundial, el teniente general Leslie Groves designa al físico J. Robert Oppenheimer para un grupo de trabajo que está desarrollando el Proyecto Manhattan, cuyo objetivo consiste en fabricar la primera bomba atómica.', 1200, 'https://www.youtube.com/embed/EuPBDXY0xYo?si=LhhA_DeohKbeihJ4'),
(12, 5, 1, 'img/el_gran_truco.jpg', 'El gran truco', 'Un encuentro durante una sesión fraudulenta provoca que dos magos del siglo XIX, Alfred Borden y Rupert Angier, se enfrenten en una intensa batalla por la supremacía. Las consecuencias son terribles cuando ambos intentan triunfar no sólo superando a su rival, sino destruyéndolo.', 1300, 'https://www.youtube.com/embed/438-eKgAIFE?si=-NuQP7S24_Lay50J'),
(13, 5, 1, 'img/memento.jpg', 'Memento', 'Leonard, cuya memoria está dañada por culpa de un golpe en la cabeza al intentar evitar el asesinato de su mujer, tiene que recurrir a la ayuda de una cámara instantánea y a las notas tatuadas en su cuerpo para investigar el crimen y vengarla.', 1000, 'https://www.youtube.com/embed/EuPBDXY0xYo?si=LhhA_DeohKbeihJ4'),
(14, 6, 1, 'img/taxi_driver.jpg', 'Taxi Driver', 'Un veterano de Vietnam que padece insomnio decide emplearse como taxista nocturno para ganar dinero extra. Su trabajo le lleva a conocer todos los ambientes de la ciudad y a personas que viven de noche como él. Se enamora de una oficinista, pero su relación no prospera.', 1000, 'https://www.youtube.com/embed/nfC-RpJF5F0?si=1igz_D4UdNY8ZVbE'),
(15, 6, 1, 'img/wall_street.jpg', 'El lobo de Wall Street', 'Jordan Belfort, corredor de bolsa de Nueva York, quien fundó la compañía Stratton Oakmont cuando aún era un veinteañero, desarrolla hábitos de exceso y corrupción.', 1000, 'https://www.youtube.com/embed/PaAvUOXUohk?si=p983cVLGaIWqveRL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `director_id` (`director_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `director` (`id`),
  ADD CONSTRAINT `peliculas_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
