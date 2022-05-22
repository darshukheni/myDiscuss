-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.byetcluster.com
-- Generation Time: Sep 24, 2020 at 11:26 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26675322_mydiscussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_discription` varchar(2000) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_discription`, `created`) VALUES
(1, 'python', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace. Its language', '2020-08-02 00:00:00'),
(2, 'javascript', 'JavaScript\r\nHigh-Level Programming Language\r\nJavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket synt', '2020-08-02 00:00:00'),
(3, 'java', '\r\nJava is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible. It is intended to let application developers write once, run anywhere, meaning that compiled Java c', '2020-08-02 00:00:00'),
(4, 'c language', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system.', '2020-08-02 00:00:00'),
(5, 'Dart', '\r\nDart is a client-optimized programming language for apps on multiple platforms. It is developed by Google and is used to build mobile, desktop, server, and web applications. Dart is an object-oriented, class-based, garbage-collected language with C-style syntax. Dart can compile to either native code or JavaScript. It supports interfaces, mixins, abstract classes, reified generics, and type inference.', '2020-09-04 01:24:57'),
(6, 'Flutter', '\r\nFlutter is an open-source UI software development kit created by Google. It is used to develop applications for Android, iOS, Linux, Mac, Windows, Google Fuchsia and the web from a single codebase. The first version of Flutter was known as codename \"Sky\" and ran on the Android operating system. It was unveiled at the 2015 Dart developer summit, with the stated intent of being able to render consistently at 120 frames per second.', '2020-09-04 01:24:57'),
(7, 'swift', 'Swift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. for iOS, iPadOS, macOS, watchOS, tvOS, and Linux. Swift is designed to work with Apple\'s Cocoa and Cocoa Touch frameworks and the large body of existing Objective-C code written for Apple products. It is built with the open source LLVM compiler framework and has been included in Xcode since version 6, released in 2014. On Apple platforms, it uses the Objective-C runtime library which allows C, Objective-C, C++ and Swift code to run within one program.', '2020-09-04 01:29:04'),
(8, 'HTML5', 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.', '2020-09-04 01:31:00'),
(9, 'css', '\r\nCascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '2020-09-04 01:31:00'),
(10, 'Bootstrap', 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.', '2020-09-04 01:31:54'),
(11, 'Node.js', 'Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scripting—running scripts server-side to produce dynamic web page content before the page is sent to the user\'s web browser. Consequently, Node.js represents a \"JavaScript everywhere\" paradigm, unifying web-application development around a single programming language, rather than different languages for server- and client-side scripts.', '2020-09-04 01:35:17'),
(12, 'React', '\r\nReact is an open-source JavaScript library for building user interfaces or UI components. It is maintained by Facebook and a community of individual developers and companies. React can be used as a base in the development of single-page or mobile applications. However, React is only concerned with rendering data to the DOM, and so creating React applications usually requires the use of additional libraries for state management and routing. Redux and React Router are respective examples of such libraries.', '2020-09-04 01:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_content` varchar(5555) NOT NULL,
  `thread_id` int(10) NOT NULL,
  `comment_by` int(10) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(16, 'it is simple, run sudo apt-get install python3.6 command in your terminal.', 44, 14, '2020-09-15 04:50:46'),
(17, 'Please you can use windows operating system and go to python.org and download your python then you can create your application and âœŒðŸ˜', 44, 18, '2020-09-15 06:25:26'),
(18, 'thanks vivek.ðŸ‘ŒâœŒâœŒ\r\n', 44, 15, '2020-09-15 06:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(20, 'gender', 'aslf', 'kfpwkeo@gmail.com', '03285794750', 'mskirhijsfv', '2020-08-22 17:45:53', 1),
(21, 'gender', 'aslf', 'kfpwkeo@gmail.com', '03285794750', 'mskirhijsfv', '2020-08-22 17:45:53', 1),
(22, 'gender', 'fgdngije', 'a@gmail.com', '124u9649020', 'dsgerg', '2020-08-22 17:47:07', 1),
(23, 'gender', 'fgdngije', 'a@gmail.com', '124u9649020', 'dsgerg', '2020-08-22 17:47:07', 1),
(24, 'darshan', 'kheni', 'darshu@gmail.com', '94328572920', 'hii there is some problem\r\n', '2020-08-22 17:47:50', 1),
(25, 'darshan', 'kheni', 'darshu@gmail.com', '94328572920', 'hii there is some problem\r\n', '2020-08-22 17:47:51', 1),
(26, 'sss', 'ss', 'sss@gmail.com', '1234', 'ssss\r\n', '2020-08-22 17:48:32', 1),
(27, 'sss', 'ss', 'sss@gmail.com', '1234', 'ssss\r\n', '2020-08-22 17:48:32', 1),
(28, 'darshan', 'Kheni', 'darshankheni@gmail.om', '1234567890', 'sdg', '2020-09-15 10:00:29', 1),
(29, 'darshan', 'Kheni', 'darshankheni@gmail.om', '1234567890', 'sdg', '2020-09-15 10:00:29', 1),
(30, 'hii', 'hii', '19se02ce@ppsu.ac.in', '545121', 'hii', '2020-09-15 10:00:48', 1),
(31, 'hii', 'hii', '19se02ce@ppsu.ac.in', '545121', 'hii', '2020-09-15 10:00:48', 1),
(32, 'hiii', 'hii', '19se02ce015@ppsu.ac.in', '123456789', '<script>alert(\"hii\");</script>', '2020-09-15 10:01:42', 1),
(33, 'hiii', 'hii', '19se02ce015@ppsu.ac.in', '123456789', '<script>alert(\"hii\");</script>', '2020-09-15 10:01:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(10) NOT NULL,
  `thread_title` varchar(2555) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(10) NOT NULL,
  `thread_user_id` int(10) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(49, 'Threre is a problem', '&lt;script&gt;alert(\"hii\");&lt;/script&gt;', 1, 15, '2020-09-21 01:29:47'),
(46, 'About download dart sdk.', 'how to download dart sdk.?ðŸ˜”ðŸ¤”', 5, 18, '2020-09-15 06:29:23'),
(47, '', '&lt;b&gt;Helloo...&lt;/b&gt;', 1, 16, '2020-09-15 09:25:59'),
(48, '&lt;h1&gt;Hiii...&lt;/h1&gt;', '', 1, 16, '2020-09-15 09:26:50'),
(44, 'I am not able to install python.', 'I am trying to install python in linux system but i can not install, so please suggest me to right way to install python in linux system.', 1, 15, '2020-09-15 04:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(10) NOT NULL,
  `user_first_name` varchar(25) NOT NULL,
  `user_last_name` varchar(25) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_first_name`, `user_last_name`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, '', '', 'test@test.com', '123', '2020-08-07 10:54:53'),
(2, '', '', '', '$2y$10$3tHKSR879lIXkoKknJp1tekzzCZ0oJQxP/9CEvxj2dUjbDt7UQ33S', '2020-08-07 11:10:11'),
(3, '', '', 'darshu@darshu.om', '$2y$10$l.GO2UmrL6uAs9IyKjvHXuX9hZ75w9R076hr.pgM3n1quQQLQf2bi', '2020-08-07 11:14:49'),
(5, '', '', 'sohu@sohu.com', '$2y$10$PA2o6/DxbRtWKlZ2DFiYj.pojwmgHO30ihT0UOdXAYuegl8oYN/pK', '2020-08-07 11:22:14'),
(6, '', '', 'test@test1.com', '$2y$10$NcuJr7IPDU7pIrjHhP67j.wmkcF6pd5a092RKuGOJlaJ7kueJhRSy', '2020-08-07 11:45:47'),
(7, 'Rohan', '', 'rohan@roham.com', '$2y$10$HAaFzjQ50/MghoG68tu65uOL9LpuNT1QdtzPDd152NTz9Vthujstu', '2020-08-07 12:23:28'),
(8, '', '', 'gelini9823@ofmailer.net', '$2y$10$qdkS8M5Wy.0F0RiDn6Z5queD7aAcbU3z7rp2.OoXcfQGwy8Q7H7dS', '2020-08-07 22:06:12'),
(9, '', '', 'test@ts.com', '$2y$10$Lj4T2ZGiWKPE7dsIb.6ube3sve1uTYs7tpvRzaelXJbEIZdIeW.1S', '2020-08-12 14:17:37'),
(10, 'darshan', '', '123@123.123', '$2y$10$6HS1hlyZowENKTgCOpXE6uy2wlE8jzs6GjkJl3daNnRgpNj0WwPFK', '2020-08-28 15:32:54'),
(11, 'Darshan Kheni', '', '1234567890@gmail.com', '$2y$10$uDiLbr.Dak/45tt2ISgXc.z9vcrvkARZJVqBHEnNwVu9YId/GoxyS', '2020-08-28 17:02:54'),
(12, 'dhruv', 'gandhi', 'dhruvgandhi@gmail.com', '$2y$10$Q75QXLwUlVPilWm.tuCvFu6RKLp9LF0PKPzdV1w8tug3ZdDBFiVZm', '2020-08-28 17:14:44'),
(13, 'Chal', 'Man', 'chalman@gmail.com', '$2y$10$9rwJtDN5.HowpG0cr1ztjeJqpDory4EkKDFeAWt1IQ8xPituibuwy', '2020-08-28 17:17:35'),
(14, 'kalu', 'bhai', 'kalubhai@gmail.com', '$2y$10$2FOQI3o7N3FKojEbUzkCaOgzuzTVraCcYKSZIPozhz9NvJmEGbjwi', '2020-08-29 09:47:36'),
(15, 'Darshan', 'Kheni', 'darshankheni@gmail.com', '$2y$10$lF2SQoQyZDoDuMhDOKMboOo1UjJFjkQlCJUTr390FaWjkeCxp9y9O', '2020-09-02 04:54:47'),
(16, 'Garvit', 'Dhameliya', '19se02ce015@ppsu.ac.in', '$2y$10$GCuYnEb1W9g8BQc6eHXQBOE504WJU5KsZCfPjMiGQRHy25LOdeLky', '2020-09-15 04:26:11'),
(18, 'vivek', 'bodarya', 'v@gmail.com', '$2y$10$Zoic5yNnjNWgyb9kMldKUOu/0r0VLsQV5/Jm0J3i6jrHB0UFi2B.S', '2020-09-15 06:18:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title_2` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
