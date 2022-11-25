-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela banco_laravel.consultas
CREATE TABLE IF NOT EXISTS `consultas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_agendamento` date NOT NULL,
  `hora_agendamento` time NOT NULL,
  `paciente_id` bigint unsigned DEFAULT NULL,
  `medico_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultas_paciente_id_index` (`paciente_id`),
  KEY `consultas_medico_id_index` (`medico_id`),
  CONSTRAINT `consultas_medico_id_foreign` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `consultas_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.consultas: ~0 rows (aproximadamente)
DELETE FROM `consultas`;

-- Copiando estrutura para tabela banco_laravel.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `especialidades_nome_unique` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.especialidades: ~26 rows (aproximadamente)
DELETE FROM `especialidades`;
INSERT INTO `especialidades` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Pediatria', NULL, NULL),
	(2, 'Lodging Manager', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(3, 'Biochemist', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(4, 'Production Laborer', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(5, 'Postsecondary Education Administrators', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(6, 'Criminal Investigator', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(7, 'Potter', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(8, 'Business Manager', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(9, 'Mechanical Engineer', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(10, 'Payroll Clerk', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(11, 'Aircraft Structure Assemblers', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(12, 'Woodworking Machine Operator', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(13, 'Grinding Machine Operator', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(14, 'Paralegal', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(15, 'Numerical Tool Programmer OR Process Control Programmer', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(16, 'Agricultural Worker', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(17, 'Material Moving Worker', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(18, 'Title Abstractor', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(19, 'Electrical Power-Line Installer', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(20, 'Licensing Examiner and Inspector', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(21, 'Dispatcher', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(22, 'Statement Clerk', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(23, 'Parts Salesperson', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(24, 'Civil Engineer', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(25, 'Coil Winders', '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(26, 'Film Laboratory Technician', '2022-11-24 23:44:54', '2022-11-24 23:44:54');

-- Copiando estrutura para tabela banco_laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Copiando estrutura para tabela banco_laravel.medicos
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidade_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `medicos_nome_unique` (`nome`),
  UNIQUE KEY `medicos_crm_unique` (`crm`),
  KEY `medicos_especialidade_id_index` (`especialidade_id`),
  CONSTRAINT `medicos_especialidade_id_foreign` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.medicos: ~25 rows (aproximadamente)
DELETE FROM `medicos`;
INSERT INTO `medicos` (`id`, `nome`, `crm`, `especialidade_id`, `created_at`, `updated_at`) VALUES
	(1, 'Jovanny Russel', '94.98.92.78', 3, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(2, 'Mr. Richard Osinski PhD', '53.128.237.1', 25, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(3, 'Mrs. Viola Kub DDS', '193.233.174.160', 20, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(4, 'Margarette Larson', '236.238.65.207', 4, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(5, 'Elta Parker', '193.119.13.165', 12, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(6, 'Lucius Schneider', '54.124.238.127', 8, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(7, 'Jovan Monahan', '105.28.217.31', 5, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(8, 'Mr. Justus Zieme', '5.240.122.181', 20, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(9, 'Anderson Miller', '208.112.152.224', 21, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(10, 'Westley Davis', '79.191.12.247', 15, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(11, 'Shaniya Cormier', '250.168.100.25', 5, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(12, 'Hollie Brown', '142.221.184.133', 3, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(13, 'Dr. Emilio Kuvalis IV', '215.211.88.90', 15, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(14, 'Rosa Kihn', '70.219.214.148', 8, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(15, 'Mr. Efren Cremin III', '215.225.38.238', 13, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(16, 'Aisha Herman', '6.130.109.150', 23, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(17, 'Evangeline Douglas', '134.17.54.45', 12, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(18, 'Keegan Ziemann', '227.18.253.243', 3, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(19, 'Evalyn Casper', '30.235.216.186', 2, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(20, 'Evie D\'Amore', '217.143.95.47', 16, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(21, 'Syble McClure', '165.37.85.139', 1, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(22, 'Mrs. Maritza Cummings II', '197.57.244.200', 20, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(23, 'Noemi Kovacek', '18.194.207.98', 2, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(24, 'Malinda Parker', '253.12.245.162', 4, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(25, 'Karina Abernathy', '216.144.96.244', 10, '2022-11-24 23:44:54', '2022-11-24 23:44:54');

-- Copiando estrutura para tabela banco_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.migrations: ~7 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(63, '2014_10_12_000000_create_users_table', 1),
	(64, '2014_10_12_100000_create_password_resets_table', 1),
	(65, '2019_08_19_000000_create_failed_jobs_table', 1),
	(66, '2022_11_22_135730_create_especialidades_table', 1),
	(67, '2022_11_23_180537_create_medicos_table', 1),
	(68, '2022_11_24_122648_create_pacientes_table', 1),
	(69, '2022_11_24_133858_create_consultas_table', 1);

-- Copiando estrutura para tabela banco_laravel.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf_responsavel` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_responsavel` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pacientes_email_unique` (`email`),
  UNIQUE KEY `pacientes_cpf_unique` (`cpf`),
  UNIQUE KEY `pacientes_cpf_responsavel_unique` (`cpf_responsavel`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.pacientes: ~11 rows (aproximadamente)
DELETE FROM `pacientes`;
INSERT INTO `pacientes` (`id`, `nome`, `email`, `cpf`, `cep`, `endereco`, `numero`, `uf`, `cidade`, `telefone`, `nascimento`, `cpf_responsavel`, `nome_responsavel`, `created_at`, `updated_at`) VALUES
	(1, 'Prof. Micheal Zemlak', 'dameon74@bartoletti.biz', 'Ullam quam.', 'Ea quia.', 'Ayden Loop', '2010', 'MG', 'Asiamouth', '+1-407-770-3158', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(2, 'Dallin Lebsack', 'obie16@brakus.com', 'Non libero.', 'Aut.', 'Stoltenberg Orchard', '1979', 'MG', 'Kadeshire', '(386) 569-2110', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(3, 'Mr. Lester D\'Amore', 'bogisich.joe@hill.net', 'Sit ea.', 'Aut ut.', 'Karine Cape', '2000', 'MG', 'New Davon', '719-570-8796', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(4, 'Fannie Dibbert', 'xmertz@marks.com', 'Aut hic et.', 'Eaque.', 'Lesch Glen', '1985', 'MG', 'East Buck', '1-434-461-8353', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(5, 'Valentine Pfeffer', 'ben72@ferry.com', 'Ut dolore et.', 'Rem.', 'Lilla Keys', '1982', 'MG', 'South Emeliaton', '(760) 786-7772', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(6, 'Reyes Treutel DDS', 'vicenta.ohara@hegmann.info', 'Ut non.', 'Optio.', 'Senger Camp', '1985', 'MG', 'Cormierburgh', '+1-218-869-8098', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(7, 'Mr. Jettie King DVM', 'anastacio.okon@gmail.com', 'Est provident.', 'Sint.', 'Andy Burg', '1993', 'MG', 'South Karianefurt', '(256) 412-9187', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(8, 'Dr. Erling Kreiger Jr.', 'edwina.kohler@schiller.biz', 'Est est.', 'Ut autem.', 'Lisa Trail', '2021', 'MG', 'Belleville', '629.481.4463', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(9, 'Edyth Haag PhD', 'alicia11@berge.org', 'Aliquam sed.', 'Aut nemo.', 'Athena Parkways', '2015', 'MG', 'North Ramonmouth', '726-900-4478', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(10, 'Mr. Judson Homenick MD', 'olaf39@gmail.com', 'Aut nostrum.', 'Labore.', 'Reilly Points', '2001', 'MG', 'West Rosalind', '872.319.8046', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54'),
	(11, 'Jason Muller', 'ysmith@gmail.com', 'Et suscipit.', 'Et aut.', 'Bins Hill', '2013', 'MG', 'West Alexismouth', '253-903-1361', NULL, NULL, NULL, '2022-11-24 23:44:54', '2022-11-24 23:44:54');

-- Copiando estrutura para tabela banco_laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;

-- Copiando estrutura para tabela banco_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela banco_laravel.users: ~1 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Marcos Daniel', 'marcosdaniel.developer@hotmail.com', NULL, '$2a$12$bZPjvK2ne.jJHy8Al9EJgeIz/pY.cekq1Gh.SJivAoFfBNItcNrcG', NULL, '2022-11-24 23:43:29', '2022-11-24 23:43:29');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
