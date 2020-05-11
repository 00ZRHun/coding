CREATE DATABASE IF NOT EXISTS `test`;

USE `test`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `society_year`( 
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp(),
  `delmode` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `society_year` (`id`, `name`, `post_date`, `update_time`, `delmode`) VALUES
(1, 'Hun', '2020-04-22 17:31:19', '2020-04-22 17:31:19', 1),
(2, 'Hun1', '2020-04-22 17:46:53', '2020-04-22 17:46:53', 1),
(3, 'Hun2', '2020-04-23 05:22:11', '2020-04-23 05:22:11', 1),
(6, 'Hun6', '2020-04-23 06:13:36', '2020-04-23 06:13:36', 1),
(7, 'abc123', '2020-04-23 07:53:43', '2020-04-23 07:53:43', 1),
(8, 'abc123', '2020-04-23 08:17:42', '2020-04-23 08:17:42', 1),
(9, 'Hun123', '2020-04-23 08:30:12', '2020-04-23 08:30:12', 0);

ALTER TABLE `society_year`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `society_year`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
