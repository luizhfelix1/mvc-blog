# mvc-blog

## Objetivo

Criar um projeto com CRUD completo e autentucação de usuários utilizando MVC 

# Comandos do banco de dados

```

CREATE DATABASE  IF NOT EXISTS `projeto-mvc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto-mvc`;


DROP TABLE IF EXISTS `depoimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `depoimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `data` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


LOCK TABLES `depoimentos` WRITE;
/*!40000 ALTER TABLE `depoimentos` DISABLE KEYS */;
INSERT INTO `depoimentos` VALUES (1,'asdsadsada','asdasdasda','2022-01-21 19:38:18'),(2,'Luiz Felix','testetesteteste\r\n','2022-01-21 20:36:41'),(3,'Luiz Felix','testetesteteste\r\n','2022-01-21 20:37:16'),(4,'Luiz Felix','testetesteteste\r\n','2022-01-21 20:37:42'),(5,'Luiz Felix2','teste teste','2022-01-21 21:17:30'),(6,'sdasdasd','asdasdasd','2022-01-21 22:31:36'),(7,'asdasd','asdasdas','2022-01-21 22:31:39'),(14,'Teste de depoimento','OlÃ¡, teste.','2022-01-28 18:02:21');
/*!40000 ALTER TABLE `depoimentos` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Luiz','luiz@teste.com','$2y$10$dhVoHUYMOfz56kiBDwmaiOs9GMsl6nQwtL.vDT7WZrl2nuoFCbVI.'),(2,'Teste Usuario','teste2@teste.com','$2y$10$g0aY/jBAHDfdxkpuETktKue4HXOQGg1YaZSSeOi/fSldabwBwAW2a'),(4,'Novo','novo@email.com','$2y$10$8AFCgYhHLeef.GaTLe8g/OvqPXaaxXEcJmo.T/iZNnxZSgtIph80C'),(5,'Admin','admin@admin.com','$2y$10$tB40RLvcviooyUt0tAuF/O0bW3c5qyWZlf/3wPQhF36QNhFqL5Wre');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

```
# Como utilizar

Rota de usuário sem autenticação: 

> localhost/mvc

Rota para acessar o painel de administração:

> Localhost/mvc/admin

Na rota do painel de administração Acessar com o usuário:

> E-mail: admin@admin.com

> senha: 123456

<br>

Dentro do painel de administração é possível visualizar, criar, editar e deletar usuários e também visualizar, criar, editar e deletar depoimentos.

Na rota sem autenticação só é possível visualizar e adicionar novos depoimentos.

