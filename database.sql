CREATE TABLE IF NOT EXISTS `craftsmen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `work_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `settings` (`register_code`) VALUES ('Y2728');