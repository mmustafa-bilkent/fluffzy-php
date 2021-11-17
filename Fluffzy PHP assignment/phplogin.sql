

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;




CREATE TABLE `tasks` (
  `id` int(3) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_desc` varchar(1000)NOT NULL
); 
INSERT INTO `tasks` (`id`,`task_code`, `task_name`, `task_desc`) VALUES
(29, 'Complete Assigmment', 'Complete assignment given by Fluffzy' ),
(30, ' Dishes', 'do the dishes in the kitchen'),
(31,' Iron clothes', 'iron clothes from the clean laundary' );


CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16)NOT NULL,
  `admin` text  NOT NULL
); 

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(1, 'mustafa', '12345', 'yes'),
(2, 'test', '12345', 'yes');

COMMIT;

