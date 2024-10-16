/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;

CREATE TABLE `contato` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT NULL,
  `nome` varchar(128) DEFAULT NULL,
  `mensagem` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb3;

/*!40101 SET character_set_client = @saved_cs_client */;

-- 
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` (`email`, `nome`, `mensagem`) VALUES 
('joao@example.com', 'João da Silva', 'Adorei o sistema TaskXP, muito fácil de usar e organizado!'),
('maria@example.com', 'Maria Fernandes', 'O TaskXP me ajudou a manter minhas tarefas em dia. Excelente ferramenta!'),
('ana@example.com', 'Ana Souza', 'Muito bom, estou ansiosa para ver as futuras atualizações.');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;
