

CREATE TABLE `partner_page` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ruta` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partner_page`
--

INSERT INTO `partner_page` (`id`, `nombre`, `ruta`) VALUES
(3, 'gobernacion', '1062_escudo-choco-new-pag_200x200.png'),
(4, 'dps', 'logo-DPS-Gov.png'),
(5, 'iiap', 'logo.png'),
(6, 'confachoco', 'logo (1).png'),
(7, 'alcaldia', 'escudo.png'),
(8, 'utch', 'logo_utch_400x95.png'),
(9, 'sena', 'logoSena.png'),
(10, 'icbf', 'icbf-logo_32.png'),
(11, 'fucla', 'logo-uniclaretiana.png'),
(12, 'bioinnova', 'BIOINNOVA-400.png'),
(13, 'banco agrario', 'logo-banco-agrario-colombia.png'),
(14, 'ica', 'LogoICA.png'),
(15, 'oim', 'logo (2).png'),
(16, 'wwf', 'logo (3).png'),
(17, 'pnud', 'pnud-logo-30.svg');


--
ALTER TABLE `partner_page`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `partner_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

