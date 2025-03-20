
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `csvi__appeal__appeals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__appeals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `them_id` bigint unsigned NOT NULL,
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` bigint unsigned NOT NULL,
  `accepted_by` bigint unsigned DEFAULT NULL,
  `closed_by` bigint unsigned DEFAULT NULL,
  `restored_by` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__appeal__appeals_them_id_foreign` (`them_id`),
  KEY `csvi__appeal__appeals_status_code_foreign` (`status_code`),
  KEY `csvi__appeal__appeals_sender_id_foreign` (`sender_id`),
  KEY `csvi__appeal__appeals_accepted_by_foreign` (`accepted_by`),
  KEY `csvi__appeal__appeals_closed_by_foreign` (`closed_by`),
  KEY `csvi__appeal__appeals_restored_by_foreign` (`restored_by`),
  CONSTRAINT `csvi__appeal__appeals_accepted_by_foreign` FOREIGN KEY (`accepted_by`) REFERENCES `main__users` (`id`),
  CONSTRAINT `csvi__appeal__appeals_closed_by_foreign` FOREIGN KEY (`closed_by`) REFERENCES `main__users` (`id`),
  CONSTRAINT `csvi__appeal__appeals_restored_by_foreign` FOREIGN KEY (`restored_by`) REFERENCES `main__users` (`id`),
  CONSTRAINT `csvi__appeal__appeals_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `main__users` (`id`),
  CONSTRAINT `csvi__appeal__appeals_status_code_foreign` FOREIGN KEY (`status_code`) REFERENCES `csvi__appeal__statuses` (`code`),
  CONSTRAINT `csvi__appeal__appeals_them_id_foreign` FOREIGN KEY (`them_id`) REFERENCES `csvi__appeal__them` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__appeals` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__appeals` DISABLE KEYS */;
REPLACE INTO `csvi__appeal__appeals` (`id`, `office`, `comment`, `them_id`, `status_code`, `sender_id`, `accepted_by`, `closed_by`, `restored_by`, `created_at`, `updated_at`) VALUES (1,'257','Ratione officiis reprehenderit ut minus. Qui molestias fugit distinctio magnam ipsam quos corrupti laboriosam. Aut pariatur et nemo nulla voluptatum vero.',15,'closed',3,NULL,2,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(2,'384','Vel quis velit non saepe. Tempore cupiditate sed et nostrum consequatur. Quae nihil provident in voluptatibus est.',10,'created',6,NULL,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(3,'343','Quia eveniet quam voluptatibus molestiae in. Dolores eum ullam inventore culpa incidunt rerum. Qui maiores eum voluptatem qui architecto amet quia nobis. Nesciunt itaque et omnis ut sit eos at blanditiis.',18,'accepted',13,2,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(4,'366','Facilis magni id labore sapiente. Similique non perferendis eum voluptas culpa consequatur culpa delectus. Vero repellat velit praesentium dignissimos doloribus praesentium omnis. Quis nihil ratione cumque provident consequatur nulla.',3,'accepted',7,2,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(5,'428','Ut id eos animi neque voluptates voluptatem non quidem. Corporis dolores asperiores in voluptate ut hic explicabo. Quos enim vel ex non. Laboriosam vero autem provident sunt nam dolorem corporis.',14,'created',7,NULL,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(6,'290','Sit maxime sed libero reprehenderit quaerat consectetur. Tenetur corporis libero nobis. Qui rem accusamus recusandae sed nemo. Incidunt alias placeat impedit iusto reiciendis qui fugiat. Unde repellendus qui est doloribus odio molestias.',16,'closed',9,NULL,2,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(7,'419','Pariatur ut iste provident deleniti enim. Error numquam aliquid debitis rerum. Atque tempore eaque et sint ut et in.',10,'created',10,NULL,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(8,'145','Ducimus rem quia rerum ipsum est. Quia natus sed harum quisquam nihil odio nostrum. Ut tenetur quos eligendi occaecati aspernatur et fugiat in. Et nesciunt excepturi architecto quia blanditiis eos voluptas.',16,'restored',8,NULL,NULL,2,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(9,'247','Animi ut et fugiat dignissimos voluptas labore placeat. Nam laborum maiores quod cumque et dicta voluptatibus minus. Deleniti commodi ducimus blanditiis et beatae odit velit.',15,'closed',9,NULL,2,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(10,'239','Veniam commodi vel doloribus qui ea. Animi cumque illo minima dicta possimus. Aut quia harum velit sit ducimus eligendi. Culpa natus accusantium laboriosam accusamus nihil vel eius.',12,'restored',12,NULL,NULL,2,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(11,'254','Voluptates laudantium error esse eum itaque dolores. Voluptatibus eos et ratione non rerum ipsa. In aut nostrum qui repudiandae deleniti voluptatem culpa excepturi. Eligendi et velit ad dolores a tenetur.',16,'accepted',13,2,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(12,'407','Quia magnam rem adipisci architecto eos consequatur. Aut mollitia et atque impedit est. Omnis veniam ea voluptate qui eius voluptatem.',12,'created',13,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(13,'104','Eos perferendis sunt minus dignissimos. Veritatis quae et nulla. Accusantium quibusdam est aut ipsam omnis doloribus. Officia dolorum provident assumenda dolor aut id voluptas provident.',22,'created',13,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(14,'190','Est iure magni facilis quis quia animi consequuntur. Nostrum veritatis repellendus fuga aliquam asperiores in. Praesentium quidem animi est ea nesciunt repudiandae nihil.',9,'closed',8,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(15,'257','Nobis culpa sed eveniet numquam debitis libero delectus. Sunt et harum ut velit doloribus magnam at. Aliquam aut vel id qui in. Doloribus repellat dolores omnis quo. Blanditiis ullam voluptatibus autem amet labore quae.',18,'created',5,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(16,'108','Eum iste architecto cupiditate. Error voluptatum enim laboriosam quibusdam nemo ut. Dolorem explicabo occaecati et hic accusantium rerum.',11,'created',9,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(17,'184','Et occaecati esse aut et dolorum et et. Rerum sunt repudiandae adipisci deserunt dolor nobis et porro. Ex voluptas dolor mollitia laboriosam ullam blanditiis ut.',10,'restored',4,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(18,'211','Ipsum nemo voluptates in aut. Eaque est voluptas voluptate dolor ea quis delectus. Exercitationem ut repellat minus nisi perspiciatis suscipit nam.',5,'restored',9,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(19,'179','Minima quas ipsam cupiditate sed. Illo voluptatem tempora saepe architecto esse. Architecto impedit architecto ut qui voluptatem aspernatur. Reiciendis beatae voluptas iusto qui dolor.',22,'accepted',7,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(20,'243','Quasi perspiciatis ex culpa architecto possimus iste. Ut velit quis est ipsum.',21,'accepted',11,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(21,'168','Praesentium consequatur corrupti et voluptatum. Numquam laborum accusantium non nobis harum. Qui dolorem architecto eos culpa minus. Beatae reiciendis ut in ut eos aut illum.',7,'restored',4,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(22,'191','Voluptas corrupti ut similique quod id velit voluptatem. In quas quaerat eius harum qui ad. Sunt quaerat maxime dolor nisi in. Facere et omnis voluptas consequatur tenetur.',19,'restored',6,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(23,'405','Perspiciatis et consequatur tenetur qui dolorem unde qui iure. Corrupti inventore accusamus ut. Sint cumque delectus sapiente magni amet aperiam. Nostrum sit et nihil et nemo voluptatem voluptas dolorum.',17,'created',5,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(24,'154','Nobis unde eligendi doloribus qui dolorem. Accusantium hic enim iure repellendus optio incidunt quis sed.',22,'closed',10,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(25,'151','Doloremque aut eveniet sequi. Tenetur qui in exercitationem. Doloremque est repellat nesciunt nemo sit voluptates. Perspiciatis id mollitia quisquam est reprehenderit tenetur doloribus.',19,'restored',12,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(26,'268','Voluptatem non est aut mollitia deserunt magni. Error placeat soluta perspiciatis nihil dolor illum. Et enim minus facere quia et expedita.',14,'created',6,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(27,'292','Quas praesentium qui vel libero consequatur. Beatae voluptatem et blanditiis optio amet. Rerum et sed corporis et. Veritatis aliquam quidem itaque. Voluptatem explicabo est et.',5,'closed',2,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(28,'400','Dolores est et corrupti consequatur qui quo sit. Qui a beatae fugiat qui. Alias ratione et enim consectetur. Hic velit ut quo est tempora quia et.',16,'restored',9,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(29,'149','Suscipit provident rerum dolorum id ea inventore odit deserunt. Laboriosam enim est culpa corporis in libero distinctio. Delectus temporibus inventore doloribus amet. Voluptas ex qui harum reiciendis perferendis et est consequuntur.',12,'accepted',13,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(30,'219','Est qui eum illo. Dolores exercitationem laudantium quibusdam et quia aut. Quos necessitatibus aut sequi.',1,'accepted',7,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(31,'127','Quibusdam autem quo eos voluptatum deleniti porro quia sequi. Aut non nulla officia aut dolorum error illum dolores.',14,'accepted',12,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(32,'336','Quod atque debitis deserunt ut fugit praesentium. Distinctio aut quia cupiditate reprehenderit eius saepe.',1,'accepted',9,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(33,'375','Autem vel facere aspernatur. Nemo ut temporibus voluptatem ea. Voluptatem illum sunt aut. Modi magnam consequatur sunt velit.',22,'closed',10,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(34,'292','In quo accusamus minima eum veritatis. Velit eos sed facilis culpa perspiciatis. Odio nulla corporis rerum est qui aperiam voluptatem sed. Dolor doloremque nulla doloribus facere et qui et.',22,'created',11,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(35,'120','Illum ut exercitationem autem ea in dolor voluptatem. Laboriosam mollitia voluptatum placeat est sed sunt quasi. Maxime minima ad nihil cupiditate. Debitis occaecati est a fugit adipisci. Aliquam est accusantium sit natus earum et quam.',3,'accepted',9,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(36,'241','Porro officiis non qui aliquid porro fuga. Incidunt necessitatibus qui consequatur.',19,'restored',9,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(37,'144','Minima aut qui temporibus nobis provident velit quia. Voluptates eos quia necessitatibus minima. Magnam voluptate dolorem deleniti excepturi odio placeat voluptatem. Repellendus sed cum nobis dolorem consectetur ut.',3,'restored',4,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(38,'340','Illum aliquam aperiam distinctio laudantium. Voluptas dolores tempora iusto voluptatem dolores ducimus sequi. Qui facere possimus quae porro neque.',19,'closed',10,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(39,'281','Placeat quo occaecati laborum ut aut sequi commodi maxime. Dolor recusandae commodi perferendis itaque fugiat. Consequatur consequatur ex facere. Autem nam repellendus occaecati.',2,'created',3,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(40,'164','Magnam cupiditate fugit eos ratione omnis quia veritatis. Ut et quia dolor exercitationem ipsum. Ipsum consequuntur perferendis nisi dolores quae ea eveniet.',15,'created',9,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(41,'412','Sunt repellendus est blanditiis voluptatum. Quaerat est aut ex rerum minus similique. Autem enim blanditiis nulla et accusantium.',14,'closed',10,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(42,'200','Voluptas minus dolorem delectus nihil natus aut labore laborum. Deserunt exercitationem aut in tempora. Ea expedita est cum et voluptatem.',6,'accepted',5,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(43,'115','Assumenda modi necessitatibus praesentium nam repellat aliquam nostrum. Dolores possimus debitis voluptatum aut. Similique et voluptatem sunt et sit qui nostrum. Voluptatem hic ipsa id ipsam consequatur autem.',3,'closed',8,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(44,'230','Dolorem voluptas ullam incidunt libero consequatur natus. Debitis officia modi provident quo et. Esse in aliquam maxime et distinctio quos non.',22,'created',6,NULL,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(45,'292','Nihil sit aspernatur earum voluptas non et et. Sint ducimus aliquam adipisci quam culpa officia. Aut dolor officiis non natus. Autem ad consequuntur impedit commodi omnis sunt.',10,'restored',1,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(46,'373','Sunt eum consequatur voluptas veniam aut. Reprehenderit excepturi itaque pariatur autem officiis ut ut nisi. Ea consequatur libero eos facilis voluptas. Laudantium voluptas minus eos minus et consequuntur deserunt.',15,'restored',9,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(47,'347','Et omnis ducimus sed et ad quo. Corporis doloribus pariatur quo optio consequatur sed excepturi. Inventore vel aut placeat vero ullam libero.',7,'restored',12,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(48,'272','Nobis dolores molestiae iure eius quos enim autem accusamus. Natus ut voluptas nihil dicta aut est perferendis. Ut ipsum sed non quia ut quia voluptatem. Fugiat ducimus deserunt eos quo ut.',19,'accepted',10,2,NULL,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(49,'277','Et laboriosam voluptate est. Amet vel voluptates quia voluptatem ab reiciendis qui. Numquam beatae sit in laboriosam.',20,'restored',11,NULL,NULL,2,'2025-03-20 08:33:24','2025-03-20 08:33:24'),(50,'330','Ut tempore ea consequuntur soluta. Voluptatum hic consequuntur sed qui quia iusto qui eum. Beatae et culpa aut sint officiis omnis.',17,'closed',12,NULL,2,NULL,'2025-03-20 08:33:24','2025-03-20 08:33:24');
/*!40000 ALTER TABLE `csvi__appeal__appeals` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__appeal__category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__category` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__category` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__category` DISABLE KEYS */;
REPLACE INTO `csvi__appeal__category` (`id`, `name`) VALUES (1,'СТПО'),(2,'Оборудование'),(3,'АСП'),(4,'Безопасность'),(5,'ГИС КС | Dijit МЭВ'),(6,'ЕГИССО'),(7,'РИСКЕМОБЛ'),(8,'Прочее');
/*!40000 ALTER TABLE `csvi__appeal__category` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__appeal__messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `appeal_id` bigint unsigned NOT NULL,
  `sender_id` bigint unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_system` tinyint(1) DEFAULT '0',
  `is_file` tinyint(1) DEFAULT '0',
  `is_image` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__appeal__messages_appeal_id_foreign` (`appeal_id`),
  KEY `csvi__appeal__messages_sender_id_foreign` (`sender_id`),
  CONSTRAINT `csvi__appeal__messages_appeal_id_foreign` FOREIGN KEY (`appeal_id`) REFERENCES `csvi__appeal__appeals` (`id`),
  CONSTRAINT `csvi__appeal__messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__messages` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `csvi__appeal__messages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__appeal__statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__statuses` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__statuses` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__statuses` DISABLE KEYS */;
REPLACE INTO `csvi__appeal__statuses` (`code`, `name`) VALUES ('accepted','Принята'),('closed','Закрыта'),('created','Создана'),('restored','Возобновлена');
/*!40000 ALTER TABLE `csvi__appeal__statuses` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__appeal__them`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__them` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__appeal__them_category_id_foreign` (`category_id`),
  CONSTRAINT `csvi__appeal__them_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `csvi__appeal__category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__them` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__them` DISABLE KEYS */;
REPLACE INTO `csvi__appeal__them` (`id`, `category_id`, `name`) VALUES (1,1,'Вопрос | Предложение'),(2,1,'Моей темы нет в списке'),(3,2,'Неполадки с компьютером'),(4,2,'Неполадки с МФУ | принтером'),(5,2,'Проблема с IP-телефоном'),(6,2,'Моей темы нет в списке'),(7,3,'Объединение ПКУ'),(8,3,'Адреса'),(9,3,'Тарифы ЖКУ'),(10,3,'Моей темы нет в списке'),(11,4,'ЭЦП'),(12,4,'Антивирус'),(13,4,'Континент'),(14,4,'VIPNET'),(15,4,'Моей темы нет в списке'),(16,5,'Подключение'),(17,5,'Добавить вид сведений (адаптер)'),(18,5,'Перенаправить (потерялось) заявление'),(19,5,'Моей темы нет в списке'),(20,6,'Моей темы нет в списке'),(21,7,'Моей темы нет в списке'),(22,8,'Моей темы нет в списке');
/*!40000 ALTER TABLE `csvi__appeal__them` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__appeal__workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__appeal__workers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `appeal_id` bigint unsigned NOT NULL,
  `worker_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__appeal__workers_appeal_id_foreign` (`appeal_id`),
  KEY `csvi__appeal__workers_worker_id_foreign` (`worker_id`),
  CONSTRAINT `csvi__appeal__workers_appeal_id_foreign` FOREIGN KEY (`appeal_id`) REFERENCES `csvi__appeal__appeals` (`id`),
  CONSTRAINT `csvi__appeal__workers_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__appeal__workers` WRITE;
/*!40000 ALTER TABLE `csvi__appeal__workers` DISABLE KEYS */;
/*!40000 ALTER TABLE `csvi__appeal__workers` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__technical__folders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__technical__folders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `division_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__technical__folders_division_id_foreign` (`division_id`),
  CONSTRAINT `csvi__technical__folders_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `main__divisions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__technical__folders` WRITE;
/*!40000 ALTER TABLE `csvi__technical__folders` DISABLE KEYS */;
REPLACE INTO `csvi__technical__folders` (`id`, `parent_id`, `division_id`, `name`) VALUES (1,NULL,127,'voluptatem'),(2,NULL,18,'ad'),(3,NULL,72,'totam'),(4,NULL,64,'tempore'),(5,NULL,129,'pariatur'),(6,NULL,116,'sequi'),(7,NULL,75,'maxime'),(8,NULL,183,'est'),(9,NULL,50,'corporis'),(10,NULL,108,'deleniti'),(11,NULL,135,'ad'),(12,NULL,118,'cumque'),(13,NULL,165,'a'),(14,NULL,55,'et'),(15,NULL,88,'aut'),(16,NULL,120,'incidunt'),(17,NULL,97,'et'),(18,NULL,123,'praesentium'),(19,NULL,145,'fugiat'),(20,NULL,173,'reprehenderit'),(21,12,124,'voluptatem'),(22,13,32,'beatae'),(23,NULL,93,'ut'),(24,NULL,153,'neque'),(25,17,116,'non'),(26,NULL,121,'dolores'),(27,3,104,'molestias'),(28,NULL,30,'voluptas'),(29,11,100,'est'),(30,NULL,24,'sint'),(31,16,52,'cupiditate'),(32,NULL,7,'id'),(33,13,5,'perferendis'),(34,16,133,'perspiciatis'),(35,6,147,'sunt'),(36,16,176,'et'),(37,NULL,115,'quae'),(38,17,61,'ut'),(39,NULL,78,'distinctio'),(40,NULL,75,'voluptas'),(41,16,175,'autem'),(42,NULL,112,'omnis'),(43,6,172,'sint'),(44,13,183,'aut'),(45,NULL,47,'quia'),(46,NULL,77,'dolorem'),(47,15,169,'aut'),(48,NULL,1,'aut'),(49,NULL,82,'animi'),(50,NULL,173,'iure'),(51,NULL,44,'repudiandae'),(52,NULL,177,'culpa'),(53,6,18,'est'),(54,8,123,'cum'),(55,NULL,136,'vel'),(56,11,73,'a'),(57,NULL,95,'aut'),(58,4,9,'quae'),(59,6,154,'aut'),(60,NULL,96,'eligendi'),(61,NULL,50,'commodi'),(62,1,92,'eos'),(63,3,1,'quam'),(64,NULL,173,'quia'),(65,NULL,122,'eum'),(66,13,103,'et'),(67,14,178,'aut'),(68,NULL,45,'tenetur'),(69,NULL,119,'facere'),(70,NULL,66,'qui'),(71,NULL,63,'dolor'),(72,NULL,21,'id'),(73,NULL,119,'rerum'),(74,19,32,'sunt'),(75,NULL,6,'enim'),(76,9,49,'voluptatem'),(77,NULL,14,'et'),(78,10,113,'nam'),(79,12,130,'iure'),(80,NULL,43,'id'),(81,13,41,'molestiae'),(82,19,174,'voluptatem'),(83,10,161,'enim'),(84,4,47,'dignissimos'),(85,10,92,'in'),(86,NULL,37,'veritatis'),(87,14,29,'et'),(88,NULL,38,'voluptate'),(89,NULL,69,'doloribus'),(90,NULL,126,'sunt'),(91,2,44,'repellat'),(92,NULL,51,'voluptatem'),(93,NULL,27,'doloremque'),(94,NULL,155,'quam'),(95,NULL,57,'facilis'),(96,NULL,135,'minima'),(97,NULL,159,'et'),(98,7,162,'ut'),(99,NULL,121,'vitae'),(100,NULL,100,'molestiae'),(101,12,142,'laudantium'),(102,NULL,19,'corrupti'),(103,NULL,59,'id'),(104,14,59,'in'),(105,15,147,'nisi'),(106,7,149,'officiis'),(107,4,124,'aperiam'),(108,2,51,'maxime'),(109,6,37,'quis'),(110,1,67,'non'),(111,NULL,176,'quas'),(112,NULL,60,'modi'),(113,NULL,72,'natus'),(114,18,87,'sint'),(115,16,131,'sint'),(116,18,25,'quia'),(117,NULL,1,'voluptas'),(118,18,56,'eligendi'),(119,11,31,'sed'),(120,4,109,'expedita'),(121,NULL,120,'tempora'),(122,7,81,'alias'),(123,15,32,'impedit'),(124,NULL,29,'et'),(125,8,57,'dolor'),(126,NULL,49,'quos'),(127,NULL,38,'fuga'),(128,NULL,146,'ut'),(129,4,174,'tempore'),(130,6,158,'et'),(131,12,97,'et'),(132,NULL,142,'dolore'),(133,4,120,'ut'),(134,15,166,'neque'),(135,NULL,80,'itaque'),(136,17,20,'blanditiis'),(137,NULL,157,'explicabo'),(138,19,57,'culpa'),(139,NULL,34,'et'),(140,NULL,74,'nostrum'),(141,8,56,'minima'),(142,NULL,146,'in'),(143,5,176,'possimus'),(144,15,172,'non'),(145,4,82,'maiores'),(146,NULL,34,'similique'),(147,3,113,'accusantium'),(148,10,112,'provident'),(149,NULL,114,'non'),(150,1,81,'rerum'),(151,9,169,'occaecati'),(152,NULL,172,'voluptates'),(153,18,173,'perspiciatis'),(154,14,37,'aut'),(155,4,125,'ipsam'),(156,NULL,24,'corrupti'),(157,NULL,102,'omnis'),(158,11,149,'aut'),(159,19,68,'et'),(160,NULL,111,'laborum'),(161,17,103,'alias'),(162,NULL,172,'vitae'),(163,NULL,146,'maxime'),(164,12,17,'sit'),(165,13,17,'libero'),(166,NULL,90,'amet'),(167,NULL,150,'voluptas'),(168,NULL,79,'maxime'),(169,NULL,125,'fugiat'),(170,NULL,131,'perspiciatis'),(171,15,79,'dolores'),(172,17,124,'omnis'),(173,20,165,'hic'),(174,9,129,'repudiandae'),(175,8,113,'et'),(176,3,114,'sapiente'),(177,7,149,'et'),(178,8,156,'voluptatem'),(179,11,64,'dolores'),(180,NULL,85,'sit'),(181,9,142,'blanditiis'),(182,NULL,131,'aut'),(183,NULL,143,'vel'),(184,15,38,'nesciunt'),(185,NULL,62,'dolores'),(186,NULL,26,'consequatur'),(187,19,146,'voluptatum'),(188,NULL,93,'consequuntur'),(189,NULL,148,'dolorem'),(190,20,28,'quam'),(191,15,157,'non'),(192,NULL,14,'perspiciatis'),(193,12,62,'nemo'),(194,20,138,'adipisci'),(195,8,122,'est'),(196,NULL,180,'et'),(197,NULL,177,'officiis'),(198,3,14,'tenetur'),(199,NULL,159,'modi'),(200,10,29,'aut');
/*!40000 ALTER TABLE `csvi__technical__folders` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__technical__marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__technical__marks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `csvi__technical__marks_type_id_foreign` (`type_id`),
  CONSTRAINT `csvi__technical__marks_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `csvi__technical__types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__technical__marks` WRITE;
/*!40000 ALTER TABLE `csvi__technical__marks` DISABLE KEYS */;
REPLACE INTO `csvi__technical__marks` (`id`, `type_id`, `name`) VALUES (2,1,'Depo'),(3,1,'ICL'),(4,1,'Аквариус'),(5,1,'kraftway'),(6,1,'Lenovo'),(7,1,'RAMEC'),(8,1,'OLDI'),(9,1,'НЭТА'),(10,1,'VELTON'),(11,1,'Intel'),(12,1,'AMD'),(13,1,'NPC'),(14,1,'GigaBayte'),(15,1,'3Logic'),(16,1,'Acer'),(17,1,'Credo'),(18,1,'RAI'),(19,1,'R-Style'),(20,1,'ASUS'),(21,1,'DEXP'),(22,1,'RAY'),(23,1,'InWin'),(24,1,'ExeGate'),(25,1,'BRIGHTWINS'),(26,1,'MAGELAN'),(27,1,'AeroCool'),(28,1,'Krauler'),(29,1,'CHUWI'),(30,1,'AOC'),(31,1,'DNS'),(32,1,'BENQ'),(33,1,'Samsung'),(34,1,'LG'),(35,2,'Pantum'),(36,2,'Samsung'),(37,2,'HP'),(38,2,'Canon'),(39,2,'Xerox'),(40,2,'Brother'),(41,2,'Kyocera'),(42,2,'Epson'),(43,2,'Ricoh'),(44,2,'Konica Minolta'),(45,2,'MB'),(46,2,'Sharp'),(47,2,'Panasonic'),(48,2,'Lexmark'),(49,3,'DNS'),(50,3,'Acer'),(51,3,'Asus'),(52,3,'Lenovo'),(53,3,'Dell'),(54,3,'HP'),(55,3,'Samsung'),(56,3,'Toshiba'),(57,3,'Flaptop'),(58,3,'GigaBayte'),(59,3,'Siemens'),(60,3,'CHUWI'),(61,3,'AOC'),(62,3,'Packard'),(63,3,'DEXP'),(64,3,'Itel'),(65,3,'BENQ'),(66,3,'CeLM'),(67,4,'Pantum'),(68,4,'Samsung'),(69,4,'HP'),(70,4,'Canon'),(71,4,'Xerox'),(72,4,'Brother'),(73,4,'Kyocera'),(74,4,'Epson'),(75,4,'Ricon'),(76,4,'OKI'),(77,4,'Phaser'),(78,4,'lexmark'),(80,5,'Depo'),(81,5,'ICL'),(82,5,'Аквариус'),(83,5,'kraftway'),(84,5,'Lenovo'),(85,5,'R-Style Marshall'),(86,5,'RAMEC'),(87,5,'HP'),(88,5,'SUPERMICRO'),(89,5,'Synergy'),(90,5,'Andromeda'),(91,5,'Iru rock'),(92,5,'geg express'),(93,5,'Velton'),(94,7,'Samsung'),(95,7,'DEPO'),(96,7,'DNS'),(97,7,'Extreme'),(98,7,'GigaBayte'),(99,7,'Papirrus'),(100,7,'R-Style'),(101,7,'Proxima'),(102,7,'DEXP'),(103,7,'CREDO'),(104,7,'Pentium'),(105,7,'ASUS '),(106,7,'Нет'),(107,7,'Lenovo'),(108,7,'System manufacturer'),(109,7,'MSI'),(110,7,'Aquarius'),(111,7,'ПЭВМ RAY B102'),(112,7,'kraftway'),(113,7,'RAMEC'),(114,7,'OLDI'),(115,7,'НЭТА'),(116,7,'VELTON'),(117,7,'BRIGHTWINS'),(118,7,'LARA'),(119,7,'КС'),(120,7,'Magellan'),(121,7,'intel'),(122,7,'AMD'),(123,7,'SunPro'),(124,7,'InWin'),(125,7,'HP'),(126,7,'ExeGate'),(127,7,'MAGELAN'),(128,7,'AeroCool'),(129,7,'Krauler'),(130,7,'Formoza'),(131,7,'Gel E'),(132,7,'Colors'),(133,7,'AP-1'),(134,7,'Power'),(135,7,'Super rite master'),(136,7,'ZACMAN'),(137,7,'BIOSTAR'),(138,7,'iRU'),(139,7,'Flextron'),(140,7,'Acer'),(141,7,'Microlab'),(142,7,'Micro-Star'),(143,7,'Synergy'),(144,8,'Samsung'),(145,8,'MSI'),(146,8,'Asus'),(147,8,'Lenovo'),(148,8,'Acer'),(149,8,'Dell'),(150,8,'Philips'),(151,8,'Viewsonic'),(152,8,'HP'),(153,8,'Envision'),(154,8,'LG'),(155,8,'Huawei'),(156,8,'packard bell'),(157,8,'iiyama'),(158,8,'PROVIEW'),(159,8,'Dexp'),(160,8,'AOC'),(161,8,'NEC'),(162,8,'BENQ'),(163,8,'Digma'),(164,8,'KraftWay'),(165,8,'DNS'),(166,8,'eMachines'),(167,8,'Wintelton'),(168,8,'HANNS'),(169,8,'MAG'),(170,8,'ExeGate'),(171,8,'Think Vision'),(172,8,'Rombica'),(173,8,'Hiper Easy View'),(174,8,'Prestigio'),(175,8,'LIME'),(176,9,'DEPO'),(177,9,'IRBIS'),(178,9,'Acer'),(179,9,'HP'),(180,9,'DNS'),(181,9,'Asus'),(182,9,'MSI'),(183,10,'Canon'),(184,10,'Kyocera'),(185,11,'Realme'),(186,11,'Lenovo'),(187,11,'DEXP'),(188,11,'Huawei'),(189,11,'Samsung'),(190,11,'OKSI'),(191,11,'Apple'),(192,11,'Life Tab Plus');
/*!40000 ALTER TABLE `csvi__technical__marks` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__technical__technicals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__technical__technicals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `division_id` bigint unsigned NOT NULL,
  `type_id` bigint unsigned NOT NULL,
  `mark_id` bigint unsigned NOT NULL,
  `folder_id` bigint unsigned DEFAULT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `csvi__technical__technicals_serial_number_unique` (`serial_number`),
  KEY `csvi__technical__technicals_division_id_foreign` (`division_id`),
  KEY `csvi__technical__technicals_type_id_foreign` (`type_id`),
  KEY `csvi__technical__technicals_mark_id_foreign` (`mark_id`),
  KEY `csvi__technical__technicals_folder_id_foreign` (`folder_id`),
  CONSTRAINT `csvi__technical__technicals_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `main__divisions` (`id`),
  CONSTRAINT `csvi__technical__technicals_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `csvi__technical__folders` (`id`),
  CONSTRAINT `csvi__technical__technicals_mark_id_foreign` FOREIGN KEY (`mark_id`) REFERENCES `csvi__technical__marks` (`id`),
  CONSTRAINT `csvi__technical__technicals_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `csvi__technical__types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__technical__technicals` WRITE;
/*!40000 ALTER TABLE `csvi__technical__technicals` DISABLE KEYS */;
REPLACE INTO `csvi__technical__technicals` (`id`, `division_id`, `type_id`, `mark_id`, `folder_id`, `serial_number`, `inventory_number`, `model`, `exp_date`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,35,8,152,134,'9-728-507','6-264-766',NULL,'2021-09-20','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(2,93,3,64,6,'7-046-568','9-846-414',NULL,'1988-12-13','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(3,67,1,19,20,'5-250-659','6-246-969',NULL,'2025-02-03','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(4,167,7,95,NULL,'7-363-424','3-886-461',NULL,'1982-04-25','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(5,148,8,170,57,'4-997-467','4-942-003',NULL,'1994-03-08','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(6,118,5,87,NULL,'7-877-482','2-281-010',NULL,'1999-11-11','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(7,73,7,118,NULL,'1-169-368','9-261-509',NULL,'2007-02-24','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(8,113,8,154,NULL,'0-873-769','9-686-137',NULL,'2014-04-26','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(9,37,5,92,37,'6-544-199','9-240-327',NULL,'2014-02-09','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(10,123,7,106,NULL,'4-147-840','6-076-127',NULL,'2004-02-15','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(11,93,1,8,NULL,'6-234-462','9-045-594',NULL,'2004-01-21','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(12,106,4,68,NULL,'5-620-500','6-671-488',NULL,'2000-05-21','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(13,175,7,128,41,'4-105-151','7-024-045',NULL,'1978-04-12','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(14,13,5,85,NULL,'6-698-509','0-228-861',NULL,'2010-01-03','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(15,164,3,52,NULL,'1-530-434','9-581-169',NULL,'1998-09-05','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(16,113,3,53,190,'6-786-514','4-046-323',NULL,'2022-07-11','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(17,130,10,183,NULL,'6-657-898','9-164-107',NULL,'2021-06-11','2025-03-20 08:33:25','2025-03-20 08:33:25',NULL),(18,78,2,35,NULL,'0-726-221','1-354-058',NULL,'2001-01-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(19,97,8,172,11,'7-788-801','6-301-317',NULL,'1987-09-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(20,148,7,103,NULL,'5-816-163','3-181-626',NULL,'2021-04-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(21,36,7,121,NULL,'8-873-318','5-538-580',NULL,'1994-04-06','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(22,179,7,118,123,'8-732-274','9-708-787',NULL,'1988-03-29','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(23,122,1,33,4,'1-460-258','8-463-339',NULL,'2012-08-12','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(24,158,8,163,NULL,'7-092-098','2-800-009',NULL,'1998-05-06','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(25,172,8,144,81,'7-209-416','6-976-945',NULL,'2023-06-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(26,60,8,145,NULL,'5-296-592','6-568-791',NULL,'1989-06-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(27,55,5,81,79,'4-445-652','8-955-505',NULL,'2000-07-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(28,162,8,164,NULL,'6-845-877','2-138-172',NULL,'2008-09-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(29,71,4,69,105,'2-313-397','9-790-453',NULL,'1978-12-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(30,163,7,98,196,'5-972-646','1-148-682',NULL,'2010-03-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(31,135,7,132,134,'0-694-288','7-421-019',NULL,'2006-02-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(32,103,8,146,119,'2-834-999','8-848-603',NULL,'1974-06-22','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(33,59,7,110,142,'8-882-868','5-423-797',NULL,'2007-04-30','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(34,152,1,32,NULL,'7-400-743','0-954-369',NULL,'2023-04-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(35,126,8,167,NULL,'6-520-293','0-272-035',NULL,'1976-11-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(36,124,8,174,NULL,'8-747-369','5-603-554',NULL,'1977-06-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(37,151,7,121,41,'7-588-217','2-538-425',NULL,'1992-04-14','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(38,75,5,87,104,'2-551-721','1-943-181',NULL,'1993-12-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(39,135,8,166,NULL,'3-288-301','6-379-472',NULL,'2017-10-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(40,143,8,155,NULL,'1-779-854','4-407-155',NULL,'1978-02-06','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(41,166,7,101,NULL,'8-671-687','5-407-453',NULL,'1986-04-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(42,73,2,40,156,'2-268-452','7-186-416',NULL,'1989-02-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(43,125,8,173,NULL,'4-697-971','3-904-458',NULL,'2012-02-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(44,104,7,124,NULL,'5-866-731','8-031-284',NULL,'2025-02-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(45,6,8,157,97,'1-201-833','4-789-386',NULL,'1970-08-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(46,114,8,149,57,'9-246-720','8-890-872',NULL,'2000-12-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(47,169,7,120,NULL,'1-831-409','2-297-041',NULL,'1984-09-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(48,112,2,46,139,'1-423-399','1-912-332',NULL,'1985-10-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(49,70,9,180,NULL,'6-219-349','1-562-116',NULL,'2009-02-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(50,134,1,17,NULL,'4-927-777','7-828-583',NULL,'1997-07-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(51,73,5,87,167,'9-002-268','1-083-847',NULL,'1982-09-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(52,53,5,91,NULL,'2-416-262','4-786-673',NULL,'1996-12-27','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(53,63,7,115,NULL,'0-826-156','0-553-555',NULL,'2003-01-27','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(54,75,8,169,74,'0-912-303','6-784-318',NULL,'2012-06-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(55,88,4,77,NULL,'1-517-860','4-881-142',NULL,'1983-04-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(56,134,2,41,63,'3-426-911','0-251-247',NULL,'2006-09-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(57,62,9,178,NULL,'5-468-031','9-709-869',NULL,'1996-08-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(58,98,5,86,NULL,'6-169-862','4-705-733',NULL,'1975-08-03','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(59,81,2,43,NULL,'8-256-321','0-691-606',NULL,'2015-12-14','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(60,73,8,169,144,'2-489-368','6-571-623',NULL,'1979-04-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(61,25,1,25,NULL,'7-645-895','7-753-708',NULL,'2003-08-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(62,79,8,173,3,'2-964-846','7-778-482',NULL,'2004-10-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(63,5,3,54,131,'2-815-997','4-671-196',NULL,'1988-06-22','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(64,24,4,75,154,'3-293-114','6-634-367',NULL,'2017-05-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(65,156,8,172,176,'5-456-337','5-449-119',NULL,'2015-11-12','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(66,100,1,18,69,'8-587-372','3-916-147',NULL,'2017-07-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(67,30,8,155,176,'2-819-087','4-978-256',NULL,'2018-09-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(68,100,8,148,NULL,'9-237-621','6-096-269',NULL,'2003-03-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(69,97,8,168,164,'9-972-694','1-760-207',NULL,'2015-04-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(70,55,8,158,110,'7-512-668','7-535-532',NULL,'1974-06-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(71,1,4,70,106,'9-192-313','9-632-745',NULL,'1983-10-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(72,134,9,176,NULL,'7-909-515','8-495-448',NULL,'1994-12-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(73,111,1,14,106,'2-860-205','1-700-974',NULL,'1985-08-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(74,160,7,140,NULL,'0-279-327','2-854-592',NULL,'2011-02-24','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(75,29,3,55,NULL,'0-509-804','5-327-395',NULL,'1986-10-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(76,130,3,63,NULL,'6-682-435','6-875-428',NULL,'1989-09-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(77,66,2,44,35,'3-591-130','4-707-319',NULL,'1989-06-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(78,60,5,89,NULL,'1-524-238','9-800-985',NULL,'2000-08-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(79,93,1,21,138,'9-863-806','4-099-096',NULL,'1992-07-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(80,89,3,60,156,'8-026-406','6-758-408',NULL,'1985-10-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(81,123,7,107,NULL,'0-913-215','1-273-667',NULL,'2012-01-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(82,49,7,98,NULL,'8-409-495','8-841-417',NULL,'1974-09-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(83,128,7,138,115,'8-881-761','7-734-013',NULL,'1998-04-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(84,24,1,5,134,'5-545-131','2-912-955',NULL,'2023-10-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(85,24,2,38,NULL,'7-712-300','5-923-323',NULL,'1986-08-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(86,114,2,38,72,'4-956-246','5-051-267',NULL,'1985-03-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(87,107,3,50,24,'2-651-943','9-957-774',NULL,'2013-05-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(88,27,1,27,NULL,'9-563-217','8-503-779',NULL,'2005-08-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(89,163,7,102,NULL,'5-431-113','5-125-667',NULL,'1979-08-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(90,93,3,59,NULL,'0-319-866','0-906-799',NULL,'1993-10-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(91,174,7,108,NULL,'7-093-922','2-339-512',NULL,'2015-05-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(92,110,1,4,18,'4-796-753','4-171-251',NULL,'1992-05-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(93,158,10,184,NULL,'4-971-527','0-142-320',NULL,'1990-12-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(94,56,8,173,NULL,'5-612-836','8-987-487',NULL,'1983-09-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(95,73,8,166,58,'2-016-148','0-197-698',NULL,'2011-12-22','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(96,87,7,95,196,'0-115-426','8-548-438',NULL,'2013-01-31','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(97,37,8,172,NULL,'3-130-067','6-016-370',NULL,'1977-09-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(98,59,9,180,48,'6-054-551','6-994-003',NULL,'2004-11-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(99,79,3,51,51,'0-630-232','1-724-135',NULL,'1988-12-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(100,162,3,51,67,'8-088-036','8-889-757',NULL,'1986-07-07','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(101,121,5,87,NULL,'1-893-725','9-305-011',NULL,'1979-11-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(102,125,7,112,96,'0-905-242','0-216-774',NULL,'2009-05-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(103,55,1,23,NULL,'7-569-177','9-110-279',NULL,'1977-12-29','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(104,177,2,42,80,'8-306-649','3-769-866',NULL,'1976-09-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(105,149,7,131,NULL,'3-515-912','0-853-004',NULL,'2014-09-27','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(106,152,3,54,NULL,'4-026-463','0-299-362',NULL,'1974-01-31','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(107,66,3,58,191,'7-332-631','7-836-633',NULL,'2017-04-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(108,112,11,189,120,'1-954-850','2-112-196',NULL,'2017-05-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(109,177,1,34,NULL,'6-420-795','8-664-477',NULL,'1977-03-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(110,89,1,18,126,'6-352-041','9-191-591',NULL,'2007-10-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(111,31,7,108,64,'2-435-649','5-053-004',NULL,'2009-07-09','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(112,167,8,157,114,'1-650-537','4-886-054',NULL,'1979-06-09','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(113,151,7,139,15,'8-336-351','7-908-846',NULL,'1975-06-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(114,89,1,24,NULL,'5-246-514','3-403-645',NULL,'1989-06-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(115,97,2,40,132,'9-568-368','3-758-217',NULL,'1970-03-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(116,20,8,145,NULL,'8-818-331','7-674-875',NULL,'2003-07-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(117,160,1,25,91,'2-091-358','6-456-121',NULL,'2021-11-07','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(118,38,4,69,169,'2-925-821','5-045-321',NULL,'1989-07-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(119,183,4,77,NULL,'9-468-983','8-179-130',NULL,'1999-11-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(120,71,2,47,77,'2-771-826','3-722-977',NULL,'1976-02-07','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(121,182,7,108,NULL,'5-410-873','9-246-909',NULL,'2015-02-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(122,30,2,42,135,'7-300-753','2-706-051',NULL,'2011-04-12','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(123,3,4,70,168,'7-730-849','4-105-779',NULL,'2002-03-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(124,23,7,126,NULL,'3-004-272','5-035-768',NULL,'2022-11-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(125,100,3,50,NULL,'7-527-477','7-847-610',NULL,'1976-09-09','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(126,181,9,180,111,'6-281-972','8-908-959',NULL,'1984-08-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(127,38,7,135,NULL,'1-835-237','1-069-227',NULL,'1995-08-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(128,96,1,13,NULL,'0-368-719','7-881-870',NULL,'1982-12-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(129,8,8,149,102,'0-280-641','3-210-491',NULL,'1986-05-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(130,85,1,5,NULL,'3-376-826','8-224-869',NULL,'2021-01-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(131,62,7,135,148,'4-957-355','2-613-326',NULL,'1971-06-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(132,163,8,171,NULL,'7-542-655','1-088-814',NULL,'2008-04-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(133,167,7,131,NULL,'4-495-233','8-974-855',NULL,'2004-07-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(134,105,1,5,18,'2-708-751','1-297-740',NULL,'2024-03-30','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(135,109,1,32,32,'0-242-581','0-256-527',NULL,'2013-01-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(136,33,2,36,55,'8-376-032','6-570-945',NULL,'1990-04-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(137,38,2,38,NULL,'3-581-247','1-526-979',NULL,'1988-09-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(138,146,7,124,NULL,'9-915-779','9-052-081',NULL,'2016-12-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(139,33,7,128,NULL,'8-660-096','7-735-434',NULL,'2009-01-30','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(140,164,11,188,143,'6-613-724','0-515-640',NULL,'1987-06-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(141,78,5,85,61,'3-294-515','3-956-894',NULL,'1982-01-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(142,170,4,74,13,'1-219-501','3-926-854',NULL,'2004-01-14','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(143,156,7,115,NULL,'3-446-392','0-858-906',NULL,'2004-12-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(144,107,9,182,NULL,'1-945-684','6-823-325',NULL,'1995-05-28','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(145,47,7,125,149,'6-149-657','7-028-641',NULL,'2016-05-14','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(146,17,7,102,14,'8-426-766','4-993-966',NULL,'1977-09-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(147,47,8,158,NULL,'7-449-148','7-909-705',NULL,'1995-07-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(148,24,2,40,NULL,'4-745-794','8-015-928',NULL,'2024-11-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(149,97,11,188,95,'4-756-919','8-379-890',NULL,'1981-05-28','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(150,113,8,154,NULL,'7-074-572','9-979-557',NULL,'2018-10-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(151,166,10,183,18,'4-453-636','6-203-075',NULL,'2013-03-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(152,11,7,137,NULL,'8-796-422','5-183-087',NULL,'1974-08-03','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(153,117,1,11,168,'4-389-654','5-285-225',NULL,'1970-03-25','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(154,2,2,36,73,'0-324-738','7-242-601',NULL,'2007-02-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(155,52,7,143,NULL,'8-278-942','5-336-403',NULL,'2008-05-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(156,163,8,159,199,'3-915-529','0-347-878',NULL,'2024-11-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(157,5,7,109,NULL,'9-641-420','9-434-304',NULL,'1978-11-07','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(158,51,1,16,NULL,'3-208-485','9-491-591',NULL,'1996-07-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(159,87,1,32,NULL,'3-694-448','1-519-452',NULL,'2013-09-21','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(160,41,1,23,NULL,'7-285-826','3-626-840',NULL,'1989-06-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(161,50,2,45,193,'4-925-063','0-028-796',NULL,'2003-04-10','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(162,117,7,101,98,'9-295-729','2-235-848',NULL,'1992-10-23','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(163,38,8,145,NULL,'2-595-708','1-914-099',NULL,'1972-03-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(164,168,3,62,12,'3-442-524','1-216-744',NULL,'1997-10-28','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(165,162,8,172,110,'1-809-367','5-581-511',NULL,'1980-02-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(166,165,7,127,186,'2-216-606','0-991-740',NULL,'2007-05-20','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(167,35,8,157,NULL,'8-388-474','8-381-300',NULL,'1980-10-14','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(168,28,7,125,31,'4-187-709','5-569-349',NULL,'2000-07-28','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(169,46,8,164,169,'1-667-531','3-280-438',NULL,'1987-03-11','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(170,9,5,91,52,'9-553-092','5-800-244',NULL,'1980-12-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(171,23,1,15,NULL,'4-020-535','8-171-021',NULL,'1989-08-24','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(172,181,9,178,142,'6-324-474','3-181-625',NULL,'1988-08-31','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(173,23,8,160,NULL,'6-865-252','0-659-155',NULL,'2012-07-15','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(174,22,1,22,58,'6-575-840','2-243-871',NULL,'2022-01-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(175,175,8,159,NULL,'1-376-710','5-331-915',NULL,'1996-04-01','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(176,159,1,30,158,'7-145-066','6-037-789',NULL,'1985-12-13','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(177,144,8,159,NULL,'7-935-313','6-434-389',NULL,'2010-12-28','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(178,115,8,162,NULL,'1-530-646','7-282-663',NULL,'1981-12-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(179,28,1,18,156,'6-387-568','3-537-354',NULL,'1976-10-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(180,120,7,136,NULL,'4-839-596','6-880-300',NULL,'2006-01-12','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(181,21,7,127,154,'2-204-780','4-902-339',NULL,'2017-05-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(182,148,1,30,NULL,'6-377-885','4-024-663',NULL,'2016-04-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(183,63,7,122,NULL,'0-334-957','1-103-345',NULL,'1989-05-31','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(184,62,7,114,NULL,'2-849-283','4-823-295',NULL,'1979-03-06','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(185,124,8,175,NULL,'2-756-841','2-123-321',NULL,'1996-12-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(186,25,5,88,NULL,'6-272-376','4-022-936',NULL,'1979-06-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(187,136,1,7,NULL,'6-186-424','6-404-363',NULL,'2018-12-19','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(188,175,5,80,NULL,'4-296-305','3-274-322',NULL,'2005-06-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(189,53,3,63,25,'8-714-800','8-701-273',NULL,'2009-10-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(190,19,4,70,118,'2-105-214','6-829-914',NULL,'1978-07-08','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(191,39,1,8,NULL,'6-743-887','1-792-275',NULL,'1992-12-31','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(192,122,1,33,61,'6-347-066','0-901-049',NULL,'1978-09-04','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(193,28,3,52,191,'3-099-743','2-522-409',NULL,'2009-10-05','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(194,76,8,166,NULL,'7-865-788','1-970-138',NULL,'2022-01-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(195,83,7,140,NULL,'1-714-384','8-553-101',NULL,'2000-08-17','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(196,56,7,122,71,'0-868-039','5-002-662',NULL,'1980-11-02','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(197,30,2,43,90,'9-603-461','9-093-481',NULL,'2008-11-18','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(198,64,7,139,NULL,'9-199-393','5-363-208',NULL,'2002-10-07','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(199,118,7,129,27,'9-512-825','6-635-906',NULL,'2001-06-16','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL),(200,16,8,168,119,'0-968-156','0-914-546',NULL,'1997-11-26','2025-03-20 08:33:26','2025-03-20 08:33:26',NULL);
/*!40000 ALTER TABLE `csvi__technical__technicals` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `csvi__technical__types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `csvi__technical__types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `csvi__technical__types` WRITE;
/*!40000 ALTER TABLE `csvi__technical__types` DISABLE KEYS */;
REPLACE INTO `csvi__technical__types` (`id`, `name`) VALUES (1,'АРМ'),(2,'МФУ'),(3,'Ноутбук'),(4,'Принтер'),(5,'Сервер'),(7,'Системный блок'),(8,'Монитор'),(9,'Моноблок'),(10,'Копировальный аппарат'),(11,'Планшет');
/*!40000 ALTER TABLE `csvi__technical__types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__alerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__alerts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `to` bigint unsigned NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `main__alerts_to_foreign` (`to`),
  CONSTRAINT `main__alerts_to_foreign` FOREIGN KEY (`to`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__alerts` WRITE;
/*!40000 ALTER TABLE `main__alerts` DISABLE KEYS */;
/*!40000 ALTER TABLE `main__alerts` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__cityes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__cityes` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__cityes` WRITE;
/*!40000 ALTER TABLE `main__cityes` DISABLE KEYS */;
REPLACE INTO `main__cityes` (`code`, `name`) VALUES ('anj-sudj','Анжеро-Судженск'),('belovo','Белово'),('berez','Берёзовский'),('cheb','Чебула'),('gur','Гурьевск'),('ijm','Ижморский'),('kaltan','Калтан'),('kem','Кемерово'),('kisel','Киселёвск'),('krapiv','Крапивинский'),('lk-kuz','Ленинск-Кузнецкий'),('mariinsk','Мариинск'),('mejd','Междуреченск'),('myski','Мыски'),('nk','Новокузнецк'),('osin','Осинники'),('prokop','Прокопьевск'),('promish','Промышленовский'),('tashtag','Таштагол'),('tayga','Тайга'),('tisul','Тисуль'),('topki','Топки'),('tyajin','Тяжин'),('yash','Яшкино'),('yaya','Яя'),('yrga','Юрга');
/*!40000 ALTER TABLE `main__cityes` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__departments` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__departments` WRITE;
/*!40000 ALTER TABLE `main__departments` DISABLE KEYS */;
REPLACE INTO `main__departments` (`code`, `name`) VALUES ('administration','Администрирование'),('CSVI','ЦСВИ'),('OOR','Отдел организации реабилитации и интеграции инвалидов'),('ORVDKN','Отдел по работе с ветеранами и другими категориями населения');
/*!40000 ALTER TABLE `main__departments` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__divisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__divisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `main__divisions_city_code_foreign` (`city_code`),
  CONSTRAINT `main__divisions_city_code_foreign` FOREIGN KEY (`city_code`) REFERENCES `main__cityes` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__divisions` WRITE;
/*!40000 ALTER TABLE `main__divisions` DISABLE KEYS */;
REPLACE INTO `main__divisions` (`id`, `name`, `city_code`) VALUES (1,'МТСЗН Кузбасса','kem'),(2,'ГКУ ЦСВИ','kem'),(3,'ГАУ Журавлевский дом-интернат для престарелых и инвалидов','kem'),(4,'МКУ ЦСО ГПВиИ г. Таштагол','tashtag'),(5,'АНО \"Жизнь\"','anj-sudj'),(6,'БФ \"Загадай желание\"','anj-sudj'),(7,'ГБУ \"Анжеро-Судженский дом-интернат для граждан, имеющих психические расстройства\"','anj-sudj'),(8,'МБУ \"Анжеро-Судженский КЦСОН\"','anj-sudj'),(9,'МКУ \"Реабилитационный центр\" г. Анжеро-Судженск','anj-sudj'),(10,'МКУ СРЦ для несовершеннолетних г. Анжеро-Судженск','anj-sudj'),(11,'ГБУ \"Евтинский ДДИ для детей с ментальными нарушениями\"','belovo'),(12,'ГБУ \"Инской дом-интернат для граждан, имеющих психические расстройства\"','belovo'),(13,'МБУ ЦСО г. Белово','belovo'),(14,'МКУ ЦСОН г. Белово','belovo'),(15,'МКУ СРЦ \"Теплый дом\"','belovo'),(16,'МКУ ЦСПСиД г.Белово','belovo'),(17,'ООО \"Чибисы\"','belovo'),(18,'МБУ ЦСО Березовского ГО','berez'),(19,'МКУ СРЦ \"Берегиня\"','berez'),(20,'ГКУ \"Гурьевский дом-интернат для граждан, имеющих психические расстройства\"','gur'),(21,'МКУ СРЦ для несовершеннолетних\" г. Гурьевск','gur'),(22,'МКУ ЦСО г. Гурьевск','gur'),(23,'МБУ КЦСОН Ижморский МР','ijm'),(24,'АНО \"Центр Социального Развития\" г. Калтан','kaltan'),(25,'ГБУ \"Малиновский дом-интернат для граждан, имеющих психические расстройства\"','kaltan'),(26,'МКУ ЦСО Калтанского ГО','kaltan'),(27,'МКУ ЦСПСД г. Калтан','kaltan'),(28,'АНО \"Православная патронажная служба\"','kem'),(29,'АНО пансионат по уходу за пожилыми иинвалидами \"ВероНика\"','kem'),(30,'АНО Психологический центр \"СемьЯ\"','kem'),(31,'АНО Дом-интернат для престарелых и инвалидов \"Семеновна\"','kem'),(32,'АНО Пансионат для пожилых людей \"Доброе сердце\"','kem'),(33,'АНО \"Социальный скреп\"','kem'),(34,'АНО \"ВОСХОЖДЕНИЕ\"','kem'),(35,'ГАУ \"Кемеровский дом-интернат для престарелых и инвалидов\"','kem'),(36,'ГАУ \"Кемеровский центр социальной адаптации населения\"','kem'),(37,'ГБУ \"Кедровский дом-интернат для граждан, имеющих психические расстройства\"','kem'),(38,'ГКУ СРЦ для несовершеннолетних \"Маленький принц\"','kem'),(39,'ГАУ \"Фламинго\"','kem'),(40,'КГОО \"Интеграция\"','kem'),(41,'МАУ \"КЦСОН Кировского района г. Кемерово\"','kem'),(42,'МБУ \"КЦСОН ж.р.Кедровка г.Кемерово\"','kem'),(43,'МБУ \"КЦСОН Заводского района г. Кемерово\"','kem'),(44,'МБУ \"КЦСОН Ленинского района г. Кемерово\"','kem'),(45,'МБУ \"КЦСОН Рудничного района г. Кемерово\"','kem'),(46,'МБУ \"КЦСОН Центрального района г. Кемерово\"','kem'),(47,'МКУ \"КЦСОН Кемеровского МО\"','kem'),(48,'МКУ ЦСПСиД г. Кемерово','kem'),(49,'НКО КРОО \"Новые горизонты\"','kem'),(50,'ООО \"Гармония\"','kem'),(51,'РОО ООО \"Всероссийское ордена Трудового Красного Знамени общество слепых\"','kem'),(52,'МКУ ЦСО г. Киселевск','kisel'),(53,'МКУ СРЦ \"Доверие\"','kisel'),(54,'МБУ КЦСОН Крапивинского МО','krapiv'),(55,'МКУ СРЦ для несовершеннолетних пгт. Крапивинский','krapiv'),(56,'ООО \"Ренессанс\"','krapiv'),(57,'ГБУ \"Краснинский дом-интернат для граждан, имеющих психические расстройства\"','lk-kuz'),(58,'ГБУ \"Ленинск-Кузнецкий реабилитационный центр для детей и подростков с ограниченными возможностями\"','lk-kuz'),(59,'МБУ ЦСОН г.Ленинск-Кузнецкий','lk-kuz'),(60,'МКУ СРЦ \"Надежда\"','lk-kuz'),(61,'МКУ СРЦ \"Радуга\"','lk-kuz'),(62,'МКУ ЦСО ГПВИИ г. Ленинск-Кузнецкий','lk-kuz'),(63,'АНО Центр Социальной Помощи \"Гавань Надежды\"','mariinsk'),(64,'ГБУ \"Благовещенский дом-интернат для граждан, имеющих психические расстройства\"','mariinsk'),(65,'ГБУ \"Мариинский дом-интернат для граждан, имеющих психические расстройства\"','mariinsk'),(66,'ГБУ \"Мариинский реабилитационный центр для детей и подростков с ограниченными возможностями\"','mariinsk'),(67,'МБУ КЦСОН Мариинского МР','mariinsk'),(68,'МКУ СРЦ для несовершеннолетних\" г. Мариинск','mariinsk'),(69,'ГБУ \"Междуреченский дом-интернат для граждан, имеющих психические расстройства\"','mejd'),(70,'МБУ КЦСОН г.Междуреченск','mejd'),(71,'МКУ СРЦ для несовершеннолетних г. Междуреченск','mejd'),(72,'МКУ ЦСПСиД г. Междуреченск','mejd'),(73,'ГБУ \"Мысковский ДДИ для детей с ментальными нарушениями\"','myski'),(74,'МКУ СРЦ для несовершеннолетних г. Мыски','myski'),(75,'МКУ ЦСОН г. Мыски','myski'),(76,'БФ \"Источник жизни\"','nk'),(77,'ГКУ \"Новокузнецкий дом-интернат для престарелых и инвалидов\"','nk'),(78,'МБУ КЦСОН Кузнецкого района г. Новокузнецк','nk'),(79,'МБУ КЦСОН Куйбышевского района г. Новокузнецк','nk'),(80,'МБУ КЦСОН Новоильинского района г. Новокузнецк','nk'),(81,'МБУ КЦСОН Орджоникидзевского района г. Новокузнецк','nk'),(82,'МБУ КЦСОН Центрального района г. Новокузнецк','nk'),(83,'МКУ Дом ночного пребывания для лиц без определенного места жительства и занятий','nk'),(84,'МКУ КЦСОН МО \"НМО Кемеровской области-Кузбасса\"','nk'),(85,'МКУ СРЦ \"Алые паруса\"','nk'),(86,'МКУ СРЦ \"Полярная звезда\"','nk'),(87,'МКУ СРЦ \"Уютный дом\"','nk'),(88,'МКУ ЦСПСиД г. Новокузнецк','nk'),(89,'МКУ ЦСПСиД \"Виктория\"\"','nk'),(90,'МКУ Центр реабилитации детей и подростков сограниченными возможностями г. Новокузнецк','nk'),(91,'ООО \"Росток\"','nk'),(92,'ООО \"Здоровье\"','nk'),(93,'ООО \"Здоровье-НК\"','nk'),(94,'МБУ ЦСО Осиниковского ГО','osin'),(95,'МКУ ЦСПСиД г. Осиники','osin'),(96,'МБУ КЦСОН г. Полысаево','lk-kuz'),(97,'ГБУ \"Прокопьевский дом-интернат для граждан, имеющих психические расстройства\"','prokop'),(98,'КРООБН \"Дом свободы\"','prokop'),(99,'МБУ ЦСОН г. Прокопьевск','prokop'),(100,'МКУ СРЦ для несовершеннолетних \"Алиса\"','prokop'),(101,'МКУ ЦОСО г. Прокопьевск','prokop'),(102,'МКУ ЦСО г. Прокопьевск','prokop'),(103,'МКУ СРЦ для несовершеннолетних г. Прокопьевск','prokop'),(104,'МБУ КЦСОН Промышленновского МО','promish'),(105,'ГБУ \"Тайгинский дом-интернат для граждан, имеющих психические расстройства\"','tayga'),(106,'МБУ КЦСОН Тяжинского ГО','tayga'),(107,'МКУ СРЦ для несовершеннолетних\" г. Тайга','tayga'),(108,'МКУ СРЦ для несовершеннолетних г. Таштагол','tashtag'),(109,'ГБУ \"Листвянский дом-интернат для граждан, имеющих психические расстройства\"','tisul'),(110,'МКУ СРЦ пгт. Тисуль','tisul'),(111,'МКУ ЦСО пгт. Тисуль','tisul'),(112,'МБУ ЦСО г. Топки','topki'),(113,'МКУ СРЦ \"Центр Семья\"','topki'),(114,'ГКУ \"Кубитетский специальный дом-интернат для престарелых и инвалидов\"','tyajin'),(115,'МБУ ЦСОН Тяжинского МО','tyajin'),(116,'МКУ СРЦ для несовершеннолетних\" пгт. Тяжинский','tyajin'),(117,'МКУ КЦСОН Чебулинского МО','cheb'),(118,'ГАУ \"Юргинский дом-интернат для граждан, имеющих психические расстройства\"','yrga'),(119,'ГАУ \"Юргинский дом-интернат для престарелых и инвалидов\"','yrga'),(120,'ГБУ \"Юргинский ДДИ для детей с ментальными нарушениями\"','yrga'),(121,'МБУ \"ЦСО ГПВиИ г. Юрги\"','yrga'),(122,'МКУ \"КЦСОН Юргинского МО\"','yrga'),(123,'МКУ СРЦ для несовершеннолетних \"Солнышко\"','yrga'),(124,'МКУ ЦСПСиД г. Юрга','yrga'),(125,'МБУ ЦСО Яйского МО','yaya'),(126,'МКУ СРЦ для несовершеннолетних пгт. Яя','yaya'),(127,'МКУ СРЦдН пгт. Яшкино','yash'),(128,'МКУ ЦСО пгт. Яшкино','yash'),(129,'Заводский отдел СЗН администрации г.Кемерово','kem'),(130,'Кировский отдел СЗН Администрации г. Кемерово','kem'),(131,'КСП администрации Новокузнецкого МО','nk'),(132,'КСЗН администрации Топкинского МО','topki'),(133,'КСЗН Беловского ГО','belovo'),(134,'Ленинский отдел СЗН Администрации г. Кемерово','kem'),(135,'Рудничный отдел СЗН Администрации г. Кемерово','prokop'),(136,'Рудничный отдел СЗН администрации','kem'),(137,'УСЗН Прокопьевского района (Красный брод)','prokop'),(138,'УСЗН администрации Анжеро-Судженского ГО','anj-sudj'),(139,'УСЗН администрации Беловского МО','belovo'),(140,'УСЗН Администрации г. Юрги','yrga'),(141,'УСЗН администрации Гурьевского МО','gur'),(142,'УСЗН Администрации Калтанского ГО','kaltan'),(143,'УСЗН администрации Кемеровского МО','kem'),(144,'УСЗН администрации Крапивинского МО','krapiv'),(145,'УСЗН администрации Ленинск-Кузнецкого ГО','lk-kuz'),(146,'УСЗН администрации Ленинск-Кузнецкого МО','lk-kuz'),(147,'УСЗН администрации Мариинского МО','mariinsk'),(148,'УСЗН администрации Междуреченского ГО','mejd'),(149,'УСЗН администрации Осинниковского ГО','osin'),(150,'УСЗН администрации Прокопьевского МО','prokop'),(151,'УСЗН администрации Промышленновского МО','promish'),(152,'УСЗН администрации Тайгинского ГО','tayga'),(153,'УСЗН администрации Таштагольского МО','tashtag'),(154,'УСЗН администрации Тисульского МО','tisul'),(155,'УСЗН администрации Тяжинского МО','tyajin'),(156,'УСЗН администрации Юргинского МО','yrga'),(157,'УСЗН администрации Яшкинского МО','yash'),(158,'УСЗН Березовского ГО','berez'),(159,'УСЗН Заводского района г.Новокузнецка','nk'),(160,'УСЗН Ижморского МО','ijm'),(161,'УСЗН Киселевского ГО','kisel'),(162,'УСЗН Кузнецкого района г.Новокузнецка','nk'),(163,'УСЗН Куйбышевского района г.Новокузнецка','nk'),(164,'УСЗН Мысковского ГО','myski'),(165,'УСЗН Новоильинского района г.Новокузнецка','nk'),(166,'УСЗН Орджоникидзевского района г.Новокузнецка','nk'),(167,'УСЗН Центрального района г.Новокузнецка','nk'),(168,'УСЗН Чебулинского МО','cheb'),(169,'УСЗН Яйского МО','yaya'),(170,'Центральный отдел СЗН г. Прокопьевска','prokop'),(171,'УСЗН администрации г. Кемерово','kem'),(172,'Зенковский отдел СЗН г. Прокопьевска','prokop'),(173,'КСЗН г. Прокопьевска','prokop'),(174,'КСЗН г. Новокузнецк','nk'),(175,'ГБУ \"Междуреченский дом-интернат для престарелых и инвалидов\"','mejd'),(176,'ГБУ \"Анжеро-Судженский дом-интернат для престарелых и инвалидов\"','anj-sudj'),(177,'ГАУ Санаторий \"Борисовский\"','krapiv'),(178,'ГБУ Прокопьевский реабилитационный центр «Радуга»','prokop'),(179,'ГКУ \"Государственное юридическое бюро Кузбасса\"','kem'),(180,'МКУ \"Центр организации соц. обслуживания г. Кемерово\" ','kem'),(181,'МБУ КЦСОН Заводского района г. Новокузнецк','nk'),(182,'Разработчики',NULL),(183,'Центральный отдел СЗН администрации г.Кемерово','kem');
/*!40000 ALTER TABLE `main__divisions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__moduls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__moduls` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `require_permission_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code`),
  KEY `main__moduls_department_code_foreign` (`department_code`),
  KEY `main__moduls_require_permission_code_foreign` (`require_permission_code`),
  CONSTRAINT `main__moduls_department_code_foreign` FOREIGN KEY (`department_code`) REFERENCES `main__departments` (`code`),
  CONSTRAINT `main__moduls_require_permission_code_foreign` FOREIGN KEY (`require_permission_code`) REFERENCES `main__permissions` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__moduls` WRITE;
/*!40000 ALTER TABLE `main__moduls` DISABLE KEYS */;
REPLACE INTO `main__moduls` (`code`, `name`, `route`, `department_code`, `require_permission_code`, `deleted_at`) VALUES ('csvi-technical','Сведения по технике','technical.index','CSVI','technical-work',NULL);
/*!40000 ALTER TABLE `main__moduls` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__permissions` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__permissions` WRITE;
/*!40000 ALTER TABLE `main__permissions` DISABLE KEYS */;
REPLACE INTO `main__permissions` (`code`, `name`) VALUES ('appeal-work','Работа с обращениями'),('technical-work','Работа с модулем \"Техника подразделения\"'),('veteran-work','Работа с заявлениями \"Ветеран труда\"');
/*!40000 ALTER TABLE `main__permissions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__role_pivot_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__role_pivot_permission` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main__role_pivot_permission_role_code_foreign` (`role_code`),
  KEY `main__role_pivot_permission_permission_code_foreign` (`permission_code`),
  CONSTRAINT `main__role_pivot_permission_permission_code_foreign` FOREIGN KEY (`permission_code`) REFERENCES `main__permissions` (`code`),
  CONSTRAINT `main__role_pivot_permission_role_code_foreign` FOREIGN KEY (`role_code`) REFERENCES `main__roles` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__role_pivot_permission` WRITE;
/*!40000 ALTER TABLE `main__role_pivot_permission` DISABLE KEYS */;
REPLACE INTO `main__role_pivot_permission` (`id`, `role_code`, `permission_code`) VALUES (1,'asp_developer','appeal-work'),(2,'sys_admin','technical-work');
/*!40000 ALTER TABLE `main__role_pivot_permission` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__roles` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__roles` WRITE;
/*!40000 ALTER TABLE `main__roles` DISABLE KEYS */;
REPLACE INTO `main__roles` (`code`, `name`) VALUES ('asp_developer','Разработчик АСП'),('division_admin','Администратор подразделения'),('sys_admin','Системный администратор');
/*!40000 ALTER TABLE `main__roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__table_filters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__table_filters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filters` json NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main__table_filters_user_id_foreign` (`user_id`),
  CONSTRAINT `main__table_filters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__table_filters` WRITE;
/*!40000 ALTER TABLE `main__table_filters` DISABLE KEYS */;
/*!40000 ALTER TABLE `main__table_filters` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__user_pivot_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__user_pivot_permission` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `permission_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main__user_pivot_permission_user_id_foreign` (`user_id`),
  KEY `main__user_pivot_permission_permission_code_foreign` (`permission_code`),
  CONSTRAINT `main__user_pivot_permission_permission_code_foreign` FOREIGN KEY (`permission_code`) REFERENCES `main__permissions` (`code`),
  CONSTRAINT `main__user_pivot_permission_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__user_pivot_permission` WRITE;
/*!40000 ALTER TABLE `main__user_pivot_permission` DISABLE KEYS */;
REPLACE INTO `main__user_pivot_permission` (`id`, `user_id`, `permission_code`) VALUES (1,2,'technical-work'),(2,2,'appeal-work');
/*!40000 ALTER TABLE `main__user_pivot_permission` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__user_pivot_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__user_pivot_role` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main__user_pivot_role_user_id_foreign` (`user_id`),
  KEY `main__user_pivot_role_role_code_foreign` (`role_code`),
  CONSTRAINT `main__user_pivot_role_role_code_foreign` FOREIGN KEY (`role_code`) REFERENCES `main__roles` (`code`),
  CONSTRAINT `main__user_pivot_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `main__users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__user_pivot_role` WRITE;
/*!40000 ALTER TABLE `main__user_pivot_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `main__user_pivot_role` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main__users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main__users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` bigint unsigned NOT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `main__users_login_unique` (`login`),
  KEY `main__users_division_id_foreign` (`division_id`),
  CONSTRAINT `main__users_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `main__divisions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main__users` WRITE;
/*!40000 ALTER TABLE `main__users` DISABLE KEYS */;
REPLACE INTO `main__users` (`id`, `last_name`, `first_name`, `middle_name`, `full_name`, `phone`, `email`, `login`, `password`, `logo`, `division_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'СИСТЕМА',NULL,NULL,'СИСТЕМА test',NULL,NULL,'system','$2y$12$JfHBB/TV4eQbNSNcFDoqwOKkZBNFuP.OAe6cZ9X6/dx4BiKopAr4q',NULL,2,NULL,NULL,'2025-03-20 08:33:20','2025-03-20 08:33:20'),(2,'Администратор',NULL,NULL,'Администратор',NULL,'admin@test.ru','admin','$2y$12$6Ex04b8oYTKWccqGVz1CduSV0kgXpM/jok1z3/VCjRC07PUa2qr/W',NULL,2,NULL,NULL,'2025-03-20 08:33:21','2025-03-20 08:33:21'),(3,'Пользователь',NULL,NULL,'Пользователь',NULL,'user@test.ru','user','$2y$12$Gw7Z/uFv8i58E55uDH0P/edWcAHOUqe3TcIfz4tk0XOumH9DhLW1K',NULL,2,NULL,NULL,'2025-03-20 08:33:21','2025-03-20 08:33:21'),(4,'Пономарёв','Аркадий','Филиппович','komissarov.vladlena','(35222) 30-8287','elizaveta71@hotmail.com','komissarov.vladlena','$2y$12$WirXUuF.P/mhpuzE0JuRUORCfljOKrGx9qpfXE6.Y3m.8OhUFl1ey',NULL,60,'2025-03-20 15:33:21',NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(5,'Михеев','Август','Комарович','saveleva.akov','(495) 848-3643','msamsonova@masnikova.ru','saveleva.akov','$2y$12$iCRBZV2jC0RrBn5/FNp2aOxy9uupHJ9IP7cQeBOIb4jyezYkjPVx6',NULL,163,'2025-03-20 15:33:22',NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(6,'Дмитриев','Виль','Попович','cnikolaev','(812) 904-96-70','akusev.apollon@ponomareva.com','cnikolaev','$2y$12$Ms/Hyph3zMFd7z.4p5qwWeRMtGCJu0x8pR68kFtos6V4om6rEN8la',NULL,55,'2025-03-20 15:33:22',NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(7,'Жуков','Аркадий','Тихонович','inga14','(812) 613-73-13','nadezda.avdeeva@sokolov.com','inga14','$2y$12$MMWK5sO.EEgVf4tfrOhOHOPqCvEZAyov2Hm6WFHJlTe3Uv3XgnFIS',NULL,141,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(8,'Селезнёв','Назар','Анисимович','gerasim94','(495) 700-4193','lihacev.lada@ya.ru','gerasim94','$2y$12$rycL7BrOnyHGyIiZehYbmum0fWvTTC7EmuvPKHetCcfFl.Ny7.upy',NULL,75,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(9,'Васильев','Антонин','Мухинич','adam68','(35222) 87-7196','florentina39@mail.ru','adam68','$2y$12$C.tUlPnVFd2pMuoLXs5AY.dY86MURkE9OBfB5kdXA8WbyCJe.9B5S',NULL,156,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(10,'Моисеев','Арсений','Турович','viktoria.kirillov','(812) 356-68-81','loginova.iraklij@gmail.com','viktoria.kirillov','$2y$12$ELhOxdJGyUxpOQVUFxMhouOFo5a14Mlp6sUUfPc57WhUwU9G8GTPy',NULL,68,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(11,'Дементьев','Вениамин','Субботинич','fedoseeva.alla','8-800-625-2216','gennadij77@agafonov.net','fedoseeva.alla','$2y$12$G9DeSAJSp/hKWRJid6i3eOFzUJMv9iXPwtbLKYeY7HgPTgS4IO86e',NULL,148,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(12,'Лихачёв','Гарри','Мамонтович','rodion.sitnikova','+7 (922) 135-0997','vitold46@rabova.ru','rodion.sitnikova','$2y$12$dTrWbzpF5808nKaMQtpiBOjJavzpd6oiqQA98n/u3EKew7qmQu2KK',NULL,108,NULL,NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23'),(13,'Шаров','Евгений','Русакович','polakova.margarita','(812) 544-09-44','alla75@fomicev.net','polakova.margarita','$2y$12$mf6J8wdy40yZvKsXfBQs5uCvlkJWOT0tirSYPV4rZNxupBv5zYVI.',NULL,53,'2025-03-20 15:33:23',NULL,'2025-03-20 08:33:23','2025-03-20 08:33:23');
/*!40000 ALTER TABLE `main__users` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__cache` WRITE;
/*!40000 ALTER TABLE `sys__cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__cache` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__cache_locks` WRITE;
/*!40000 ALTER TABLE `sys__cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__cache_locks` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sys__failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__failed_jobs` WRITE;
/*!40000 ALTER TABLE `sys__failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__job_batches` WRITE;
/*!40000 ALTER TABLE `sys__job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__job_batches` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sys__jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__jobs` WRITE;
/*!40000 ALTER TABLE `sys__jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__migrations` WRITE;
/*!40000 ALTER TABLE `sys__migrations` DISABLE KEYS */;
REPLACE INTO `sys__migrations` (`id`, `migration`, `batch`) VALUES (1,'0001_01_01_000001_create_cache_table',1),(2,'0001_01_01_000002_create_jobs_table',1),(3,'2025_03_04_081800_create_divisions_table',1),(4,'2025_03_04_081900_create_users_table',1),(5,'2025_03_07_025650_create_moduls_table',1),(6,'2025_03_07_044937_create_appeals_table',1),(7,'2025_03_18_140306_create_technicals_table',1);
/*!40000 ALTER TABLE `sys__migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `sys__password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sys__sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sys__sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sys__sessions_user_id_index` (`user_id`),
  KEY `sys__sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sys__sessions` WRITE;
/*!40000 ALTER TABLE `sys__sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys__sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

