
------ Create pages Table  -------

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `meta_keywords` varchar(500) CHARACTER SET utf8 NOT NULL,
  `meta_description` text CHARACTER SET utf8 NOT NULL,
  `route_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4

INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Home', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.home'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('About', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.about'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Blog', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.blog'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Contact', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.contact'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Career', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.career'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('News', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.news'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Work', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.work'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Strategy', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.services.strategy'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Design', 'iey fkjkl gjlksj klgfl', 'jkfjhj fhj kl hfs ksk  hsjklkh hjjkjs jhgfsk ', 'frontend.services.design');
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Content', 'hgdjkh shk kh kjxvzkxjhvxz klv ', 'fffffffg rgd df jtys reyrth rthf er  ', 'frontend.services.content'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Technology', 'fgnxc uhfiue tol,kj jka gkdgj', 'ghk iiuuwqo sdsklla as sdffui nzckl', 'frontend.services.technology'); 
INSERT INTO `pages` (`title`, `meta_keywords`, `meta_description`, `route_name`) VALUES ('Studio', 'dfhjadiureg roiegklk lkjgfdk gdlfkgjl', 'dgffdg ggfg iurure rweiruik uehkl lsjfdlkf ', 'frontend.services.studio'); 


CREATE TABLE `test_skote`.`news` ( `id` INT NOT NULL AUTO_INCREMENT, `title` VARCHAR(200), `description` TEXT, `cover_photo` VARCHAR(200), `creted_at` DATETIME, `created_by` INT, `updated_at` DATETIME, `updated_by` INT, `deleted_at` DATETIME, `deleted_by` INT, PRIMARY KEY (`id`) ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; 


CREATE TABLE `test_skote`.`blogs` ( `id` INT NOT NULL AUTO_INCREMENT, `title` VARCHAR(200), `description` TEXT, `cover_photo` VARCHAR(200), `creted_at` DATETIME, `created_by` INT, `updated_at` DATETIME, `updated_by` INT, `deleted_at` DATETIME, `deleted_by` INT, PRIMARY KEY (`id`) ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; 


CREATE TABLE `test_skote`.`contacts` ( `id` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(200), `email` VARCHAR(200), `phone` VARCHAR(15), `website` VARCHAR(200), `project` TEXT, `budget` VARCHAR(15), `services` TEXT, `competitots` TEXT, `reference` VARCHAR(255), `documents` VARCHAR(255), `created_at` DATETIME, `created_by` INT, `updated_at` DATETIME, `updated_by` INT, `deleted_at` DATETIME, `deleted_by` INT, PRIMARY KEY (`id`) ) ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; 

