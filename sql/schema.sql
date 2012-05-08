-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` INTEGER(10) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) NOT NULL,
  `password` VARCHAR(64) NOT NULL,
  `firstname` VARCHAR(64) NOT NULL,
  `lastname` VARCHAR(64) NOT NULL,
  `title` VARCHAR(64) NOT NULL,
  `address` VARCHAR(64) NOT NULL,
  `phone` VARCHAR(64) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;


--
-- Dumping data for table `users`
--
TRUNCATE TABLE `users`;
INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `title`, `address`, `phone`) VALUES
(1, 'jkim', 'test1234', 'Jason', 'Kim', 'Mr.', '23 Sheppard Ave. East', '416-738-1863');

-- --------------------------------------------------------