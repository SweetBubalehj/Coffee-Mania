CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`)
);

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'admin1','admin1');
UNLOCK TABLES;
