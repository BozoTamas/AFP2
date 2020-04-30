CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `password` varchar(60),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `dir` (
  `id` int(11) AUTO_INCREMENT,
  `userID` int(11),
  `alias` varchar(30) NOT NULL UNIQUE,
  `views` int(11) DEFAULT 0,
  `created` datetime NOT NULL,
  `expiration` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userID`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `dir` (`id`, `alias`, `views`, `created`, `expiration`) VALUES
(1, 'asd', 0, '2020-02-15', '2021-02-15');

CREATE TABLE `links` (
  `id` int(11) AUTO_INCREMENT,
  `userID` int(11),
  `alias` varchar(30) NOT NULL UNIQUE,
  `url` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userID`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `links` (`id`, `userID`, `alias`, `url`, `created`) VALUES
(1, NULL, 'git', 'https://github.com/BozoTamas/AFP2', '2020-02-15'),
(2, NULL, 'trello', 'https://trello.com/b/kvd2LSU9/afp2', '2020-02-15');
