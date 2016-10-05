-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2016 at 10:18 AM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `johnfedoruk`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `album_name` varchar(255) NOT NULL COMMENT 'album''s name',
  `album_summ` varchar(255) NOT NULL COMMENT 'album''s summery'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user''s albums';

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `ed_title` varchar(255) NOT NULL COMMENT 'education title',
  `school_site` varchar(255) NOT NULL COMMENT 'school''s site',
  `school_name` varchar(255) NOT NULL COMMENT 'school''s name',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'enrollment''s date',
  `end_date` timestamp NULL DEFAULT NULL COMMENT 'graduation''s date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user education history';

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `email` varchar(255) NOT NULL COMMENT 'email address'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user emails';

-- --------------------------------------------------------

--
-- Table structure for table `employment_histories`
--

CREATE TABLE `employment_histories` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `roll` varchar(255) NOT NULL COMMENT 'roll',
  `employer_site` varchar(255) NOT NULL COMMENT 'employer''s site',
  `employer_name` varchar(255) NOT NULL COMMENT 'employer''s name',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'first day',
  `end_date` timestamp NULL DEFAULT NULL COMMENT 'last day'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user employment history';

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `work_name` varchar(255) NOT NULL COMMENT 'works'' name',
  `file_name` varchar(255) NOT NULL COMMENT 'works'' file name',
  `file_summ` varchar(255) NOT NULL COMMENT 'works'' file summary',
  `file_path` varchar(255) NOT NULL COMMENT 'works'' file path'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of a works'' files';

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `job_title` varchar(255) NOT NULL COMMENT 'job title'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user job titles';

-- --------------------------------------------------------

--
-- Table structure for table `phone_numbers`
--

CREATE TABLE `phone_numbers` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `phone_number` varchar(255) NOT NULL COMMENT 'phone number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user phone numbers';

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `position` int(11) NOT NULL COMMENT 'index of pictures',
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `album_name` varchar(255) NOT NULL COMMENT 'album''s name',
  `picture_name` varchar(255) NOT NULL COMMENT 'picture''s name',
  `picture_summ` varchar(255) DEFAULT NULL COMMENT 'picture''s summary',
  `picture_path` varchar(255) NOT NULL COMMENT 'picture''s url',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'time of post'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of album''s pictures';

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `project_name` varchar(255) NOT NULL COMMENT 'project''s name',
  `project_path` varchar(255) NOT NULL COMMENT 'path to the project',
  `project_summ` varchar(255) DEFAULT NULL COMMENT 'summery of the project',
  `project_desc` text COMMENT 'long description of the project',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'first day',
  `end_date` timestamp NULL DEFAULT NULL COMMENT 'last day'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `district` varchar(255) DEFAULT '' COMMENT 'residence''s district',
  `city` varchar(255) NOT NULL COMMENT 'residence''s city',
  `province` varchar(255) DEFAULT '' COMMENT 'residence''s province',
  `country` varchar(255) NOT NULL COMMENT 'residence''s country',
  `area_code` varchar(255) NOT NULL COMMENT 'residence''s area code',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'first day',
  `end_date` timestamp NULL DEFAULT NULL COMMENT 'last day'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user''s residences';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'user id',
  `username` varchar(255) NOT NULL COMMENT 'user''s username',
  `first_name` varchar(255) NOT NULL COMMENT 'users''s last name',
  `middle_name` varchar(255) NOT NULL DEFAULT '' COMMENT 'user''s middle name',
  `last_name` varchar(255) NOT NULL COMMENT 'user''s last name',
  `password` varchar(255) NOT NULL COMMENT 'user''s password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user information';

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `work_name` varchar(255) NOT NULL COMMENT 'works'' name',
  `work_summ` varchar(255) NOT NULL COMMENT 'works'' summery',
  `work_desc` text NOT NULL COMMENT 'work''s description',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'time of post'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of user''s works';

-- --------------------------------------------------------

--
-- Table structure for table `works_albums`
--

CREATE TABLE `works_albums` (
  `user_id` int(11) NOT NULL COMMENT 'user''s id',
  `work_name` varchar(255) NOT NULL COMMENT 'works'' name',
  `album_name` varchar(255) NOT NULL COMMENT 'album''s name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of albums for a given works post';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`user_id`,`album_name`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`user_id`,`ed_title`,`start_date`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- Indexes for table `employment_histories`
--
ALTER TABLE `employment_histories`
  ADD PRIMARY KEY (`user_id`,`employer_name`,`start_date`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`user_id`,`work_name`,`file_name`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`user_id`,`job_title`);

--
-- Indexes for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD PRIMARY KEY (`user_id`,`phone_number`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`user_id`,`album_name`,`picture_name`),
  ADD UNIQUE KEY `pic_index` (`position`,`user_id`,`album_name`,`picture_name`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`user_id`,`project_name`);

--
-- Indexes for table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`user_id`,`area_code`,`start_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`user_id`,`work_name`);

--
-- Indexes for table `works_albums`
--
ALTER TABLE `works_albums`
  ADD PRIMARY KEY (`user_id`,`work_name`),
  ADD KEY `user_id` (`user_id`,`album_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id', AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `employment_histories`
--
ALTER TABLE `employment_histories`
  ADD CONSTRAINT `employment_histories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`user_id`,`work_name`) REFERENCES `works` (`user_id`, `work_name`) ON DELETE CASCADE;

--
-- Constraints for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD CONSTRAINT `job_titles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD CONSTRAINT `phone_numbers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pictures_ibfk_2` FOREIGN KEY (`user_id`,`album_name`) REFERENCES `albums` (`user_id`, `album_name`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `residence`
--
ALTER TABLE `residence`
  ADD CONSTRAINT `residence_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `works_albums`
--
ALTER TABLE `works_albums`
  ADD CONSTRAINT `works_albums_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `works_albums_ibfk_2` FOREIGN KEY (`user_id`,`work_name`) REFERENCES `works` (`user_id`, `work_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `works_albums_ibfk_3` FOREIGN KEY (`user_id`,`album_name`) REFERENCES `albums` (`user_id`, `album_name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
