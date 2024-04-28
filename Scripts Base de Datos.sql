CREATE TABLE `hotel` (
  `cant_habitaciones` int DEFAULT NULL,
  `id_hotel` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `habitaciones` (
  `id_habitacion` int NOT NULL,
  `planta` int NOT NULL,
  `ocupada` tinyint DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `salida` tinyint DEFAULT NULL,
  `id_hotel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_habitacion`),
  KEY `planta` (`planta`),
  KEY `id_hotel` (`id_hotel`),
  CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `id_empleado` varchar(20) DEFAULT NULL,
  `id_hotel` varchar(50) DEFAULT NULL,
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `checklist_ocupada` (
  `idchecklist` int NOT NULL AUTO_INCREMENT,
  `id_habitacion` varchar(10) NOT NULL,
  `ropa_sucia` varchar(20) NOT NULL,
  `papeleras` varchar(20) NOT NULL,
  `camas` varchar(20) NOT NULL,
  `polvo` varchar(20) NOT NULL,
  `suelo` varchar(20) NOT NULL,
  `toallas` varchar(20) NOT NULL,
  `minibar` varchar(20) NOT NULL,
  `amenities` varchar(20) NOT NULL,
  `olor` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `servicio` varchar(20) NOT NULL,
  PRIMARY KEY (`idchecklist`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `checklist_ocupada_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `checklist_salida` (
  `idchecklist_salida` int NOT NULL AUTO_INCREMENT,
  `id_habitacion` int DEFAULT NULL,
  `puertas` varchar(2) DEFAULT NULL,
  `interruptores` varchar(2) DEFAULT NULL,
  `mobiliario` varchar(2) DEFAULT NULL,
  `griferia` varchar(2) DEFAULT NULL,
  `cortinas` varchar(2) DEFAULT NULL,
  `paredes` varchar(2) DEFAULT NULL,
  `objetos` varchar(2) DEFAULT NULL,
  `papeleras` varchar(2) DEFAULT NULL,
  `camas` varchar(2) DEFAULT NULL,
  `polvo` varchar(2) DEFAULT NULL,
  `television` varchar(2) DEFAULT NULL,
  `suelo` varchar(2) DEFAULT NULL,
  `toallas` varchar(2) DEFAULT NULL,
  `amenities` varchar(2) DEFAULT NULL,
  `olor` varchar(2) DEFAULT NULL,
  `telefono` varchar(2) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `minibar` varchar(2) DEFAULT NULL,
  `servicio` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idchecklist_salida`),
  KEY `usuario` (`usuario`),
  KEY `id_habitacion` (`id_habitacion`),
  CONSTRAINT `checklist_salida_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  CONSTRAINT `checklist_salida_ibfk_2` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `perfectroom`.`hotel` (`cant_habitaciones`, `id_hotel`, `nombre`) VALUES ('30', '1D', 'Palace');
INSERT INTO `perfectroom`.`usuarios` (`usuario`, `password`, `cargo`, `tipo`, `nombre`, `apellidos`, `id_empleado`, `id_hotel`) VALUES ('sdrf000', 'clave4rf', 'gobernanta', 'Administrador', 'Cristina', 'Riquelme', '2', '1D');
INSERT INTO `perfectroom`.`habitaciones` (`id_habitacion`, `planta`, `ocupada`, `estado`, `id_hotel`) VALUES ('1', '1', '0', 'ok', '1C');
INSERT INTO `perfectroom`.`habitaciones` (`id_habitacion`, `planta`, `ocupada`, `salida`, `id_hotel`) VALUES ('2', '1', '1', '0', '1C');
INSERT INTO `perfectroom`.`habitaciones` (`id_habitacion`, `planta`, `ocupada`, `salida`, `id_hotel`) VALUES ('3', '1', '0', '1', '1C');



