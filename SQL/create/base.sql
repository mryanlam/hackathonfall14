
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
    `username` varchar(32) NOT NULL DEFAULT '',
    `shaPassHash` varchar(40) NOT NULL DEFAULT '',
    `email` varchar(255) NOT NULL DEFAULT '',
    `first` varchar(32) NOT NULL DEFAULT '',
    `last` varchar(32) NOT NULL DEFAULT '',
    PRIMARY KEY (`id`),
    UNIQUE KEY `idxUsername` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Account System';

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique ID',
    `code` varchar(32) NOT NULL DEFAULT '',
    `name` varchar(32) NOT NULL DEFAULT '',
    PRIMARY KEY (`id`),
    UNIQUE KEY `idxCode` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All Departments';

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'course id',
    `deptid` int(10) unsigned,
    `courseNumber` int(10) unsigned,
    `courseName` varchar(32) NOT NULL DEFAULT '',
    PRIMARY KEY (`id`),
    UNIQUE KEY `idxCourse` (`courseName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All Courses';

DROP TABLE IF EXISTS `myCourses`;
CREATE TABLE `myCourses` (
    `id` int(10) unsigned NOT NULL,
    `crs1` int(10) unsigned,
    `crs2` int(10) unsigned,
    `crs3` int(10) unsigned,
    `crs4` int(10) unsigned,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Courses an account is associated with';

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
    `previousId` int(10) unsigned,  /* used for responces */
    `timePosted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `type` int(10) unsigned NOT NULL, /* 0 for text, 1 for event */
    `authId` int(10) unsigned,
    `crsId` int(10) unsigned,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Posts in a course';

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
    `postId` int(10) unsigned NOT NULL,
    `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    `title` varchar(32) NOT NULL DEFAULT 'Your Title',
    `message` varchar(1000) NOT NULL DEFAULT 'description of the event',
    `location` varchar(32) NOT NULL DEFAULT 'Location of the event',
    PRIMARY KEY (`postId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Posts that are events';

DROP TABLE IF EXISTS `textPost`;
CREATE TABLE `textPost` (
    `postId` int(10) unsigned NOT NULL,
    `message` varchar(1000) NOT NULL DEFAULT 'Your Message',
    PRIMARY KEY (`postId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Posts that are normal messages';