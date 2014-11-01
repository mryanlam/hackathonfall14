
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
    `username` varchar(32) NOT NULL DEFAULT '',
    `shaPassHash` varchar(40) NOT NULL DEFAULT '',
    `email` varchar(255) NOT NULL DEFAULT '',
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
    UNIQUE KEY `idxCourse` (`course_name`)
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