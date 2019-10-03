-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 12:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpg3`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) VALUES
(1, 'HTML คืออะไร', 'ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล', '<h2><strong>HTML คืออะไร</strong></h2>\r\n\r\n                <p><strong>HTML5</strong>&nbsp;คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website &nbsp;ซึ่ง&nbsp;HTML5&nbsp;นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น</p>\r\n                \r\n                <h2>ข้อดีของ HTML5</h2>\r\n                \r\n                <ol>\r\n                    <li>เว็บไซต์ที่สร้างจากภาษา&nbsp;<strong>HTML5&nbsp;</strong>สามารถแสดงผลได้กับทุก web browser&nbsp;</li>\r\n                    <li><strong>HTML5&nbsp;</strong>จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</li>\r\n                    <li>มีการจัดการข้อผิดพลาดที่ดีขึ้น</li>\r\n                    <li>สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</li>\r\n                    <li><strong>HTML5&nbsp;</strong>มีความเป็นอิสระสูง (คล้ายๆ XML )</li>\r\n                    <li><strong>HTML5&nbsp;</strong>ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )</li>\r\n                </ol>\r\n                \r\n                <h2>Features ใหม่ๆ ของ HTML5</h2>\r\n                \r\n                <ol>\r\n                    <li>Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น</li>\r\n                    <li>Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element</li>\r\n                    <li>Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party</li>\r\n                    <li>Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย</li>\r\n                    <li>ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ</li>\r\n                    <li>Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</li>\r\n                    <li>Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้&nbsp;</li>\r\n                </ol>', 'html.jpg', 'all,html', 'true', '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(2, 'CSS คืออะไร', 'css คือการจัดตกแต่งเว็บไซต์ให้สวยงาม', 'CSS คืออะไร ? มีประโยชน์อย่างไรบ้าง\r\n\r\n       การจัดทำเว็บไซต์ที่มีประสิทธิภาพต้องมีการวางแผนและการออกแบบระบบที่ดี  โดยในยุคแรก ๆ จะใช้ภาษา HTML ในการจัดทำระบบการแสดงผลทางด้านโครงสร้างและข้อมูลของเว็บ  แต่ปัจจุบันมีการพัฒนามาจนถึง HTML5  และยังมีการพัฒนาภาษาที่ใช้เพื่อกำหนดรูปแบบการแสดงผลทางหน้าเว็บไซต์ที่หลากหลายและมีความยืดหยุ่น  เช่น สีอักษร สีพิ้นหลัง ขนาดตัวอักษร จัดการเลย์เอ้าท์ ให้สวยงามและอื่นๆ ซึ่งนั้นก็คือ CSS หรือ Style Sheets และในความหมายของทางโปรแกรมเมอร์นั้น คือ โครงสร้างการแสดงผลของหน้าตาเว็บไซต์ \r\n\r\nCSS คืออะไร \r\n        CSS ย่อมาจาก Cascading Style Sheet  มักเรียกโดยย่อว่า \"สไตล์ชีต\" คือภาษาที่ใช้เป็นส่วนของการจัดรูปแบบการแสดงผลเอกสาร  HTML โดยที่ CSS กำหนดกฏเกณฑ์ในการระบุรูปแบบ (หรือ \"Style\") ของเนื้อหาในเอกสาร อันได้แก่ สีของข้อความ สีพื้นหลัง ประเภทตัวอักษร และการจัดวางข้อความ ซึ่งการกำหนดรูปแบบ หรือ Style นี้ใช้หลักการของการแยกเนื้อหาเอกสาร HTML ออกจากคำสั่งที่ใช้ในการจัดรูปแบบการแสดงผล กำหนดให้รูปแบบของการแสดงผลเอกสาร ไม่ขึ้นอยู่กับเนื้อหาของเอกสาร เพื่อให้ง่ายต่อการจัดรูปแบบการแสดงผลลัพธ์ของเอกสาร HTML โดยเฉพาะในกรณีที่มีการเปลี่ยนแปลงเนื้อหาเอกสารบ่อยครั้ง หรือต้องการควบคุมให้รูปแบบการแสดงผลเอกสาร HTML มีลักษณะของความสม่ำเสมอทั่วกันทุกหน้าเอกสารภายในเว็บไซต์เดียวกัน  โดยกฏเกณฑ์ในการกำหนดรูปแบบ (Style) เอกสาร HTML ถูกเพิ่มเข้ามาครั้งแรกใน HTML 4.0  เมื่อปีพ.ศ. 2539 ในรูปแบบของ CSS level 1 Recommendations ที่กำหนดโดย องค์กร World Wide Web Consortium หรือ W3C', 'css3.jpg', 'all,css', 'true', '2018-05-19 00:00:00', '2018-05-19 00:00:00'),
(3, 'javascript คืออะไร', 'javascript คือภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต', 'JavaScript คือ ภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต ที่กำลังได้รับความนิยมอย่างสูง Java JavaScript เป็น ภาษาสคริปต์เชิงวัตถุ (ที่เรียกกันว่า \"สคริปต์\" (script) ซึ่งในการสร้างและพัฒนาเว็บไซต์ (ใช่ร่วมกับ HTML) เพื่อให้เว็บไซต์ของเราดูมีการเคลื่อนไหว สามารถตอบสนองผู้ใช้งานได้มากขึ้น ซึ่งมีวิธีการทำงานในลักษณะ \"แปลความและดำเนินงานไปทีละคำสั่ง\" (interpret) หรือเรียกว่า อ็อบเจ็กโอเรียลเต็ด (Object Oriented Programming) ที่มีเป้าหมายในการ ออกแบบและพัฒนาโปรแกรมในระบบอินเทอร์เน็ต สำหรับผู้เขียนด้วยภาษา HTML สามารถทำงานข้ามแพลตฟอร์มได้ โดยทำงานร่วมกับ ภาษา HTML และภาษา Java ได้ทั้งทางฝั่งไคลเอนต์ (Client) และ ทางฝั่งเซิร์ฟเวอร์ (Server) ', 'javascript.jpg', 'all,javascript', 'true', '2018-05-25 00:00:00', '2018-05-25 00:00:00'),
(4, 'PHP คืออะไร', 'PHP คือภาษาคอมพิวเตอร์จำพวก scripting language', '<h1>PHP คืออะไร</h1>\r\n\r\n<p>PHP คือภาษาคอมพิวเตอร์จำพวก scripting language ภาษาจำพวกนี้คำสั่งต่างๆจะเก็บอยู่ในไฟล์ที่เรียกว่า script และเวลาใช้งานต้องอาศัยตัวแปรชุดคำสั่ง ตัวอย่างของภาษาสคริปก็เช่น&nbsp;JavaScript&nbsp;, Perl เป็นต้น ลักษณะของ PHP ที่แตกต่างจากภาษาสคริปต์แบบอื่นๆ คือ PHP ได้รับการพัฒนาและออกแบบมา เพื่อใช้งานในการสร้างเอกสารแบบ&nbsp;HTML&nbsp;โดยสามารถสอดแทรกหรือแก้ไขเนื้อหาได้โดยอัตโนมัติ ดังนั้นจึงกล่าวว่า PHP เป็นภาษาที่เรียกว่า server-side หรือ HTML-embedded scripting language นั้นคือในทุกๆ ครั้งก่อนที่เครื่องคอมพิวเตอร์ซึ่งให้บริการเป็น&nbsp;Web server&nbsp;จะส่งหน้าเว็บเพจที่เขียนด้วย PHP ให้เรา มันจะทำการประมวลผลตามคำสั่งที่มีอยู่ให้เสร็จเสียก่อน แล้วจึงค่อยส่งผลลัพธ์ที่ได้ให้เรา ผลลัพธ์ที่ได้นั้นก็คือเว็บเพจที่เราเห็นนั่นเอง&nbsp;&nbsp;ถือได้ว่า PHP เป็นเครื่องมือที่สำคัญชนิดหนึ่งที่ช่วยให้เราสามารถสร้าง Dynamic Web pages (เว็บเพจที่มีการโต้ตอบกับผู้ใช้) ได้อย่างมีประสิทธิภาพและมีลูกเล่นมากขึ้น&nbsp;</p>\r\n\r\n<p>ลักษณะเด่นของ PHP</p>\r\n\r\n<ol>\r\n	<li>ใช้ได้ฟรี</li>\r\n	<li>PHP เป็นโปร แกรมวิ่งข้าง Sever ดังนั้นขีดความสามารถไม่จำกัด&nbsp;</li>\r\n	<li>Conlatfun นั่นคือPHP วิ่งบนเครื่อง UNIX,Linux,Windows ได้หมด</li>\r\n	<li>เรียนรู้ง่าย เนืองจาก PHP ฝั่งเข้าไปใน HTML และใช้โครงสร้างและไวยากรณ์ภาษาง่ายๆ</li>\r\n	<li>เร็วและมีประสิทธิภาพ โดยเฉพาะเมือใช้กับ Apach Xerve เพราะไม่ต้องใช้โปรแกรมจากภายนอก</li>\r\n	<li>ใช้ร่วมกับ XML ได้ทันที</li>\r\n	<li>ใช้กับระบบแฟ้มข้อมูลได้</li>\r\n	<li>ใช้กับข้อมูลตัวอักษรได้อย่างมีประสิทธิภาพ</li>\r\n	<li>ใช้กับโครงสร้างข้อมูล แบบ Scalar,Array,Associative array</li>\r\n	<li>ใช้กับการประมวลผลภาพได้</li>\r\n</ol>\r\n', 'php.jpg', 'all,php', 'true', '2018-10-18 00:00:00', '2018-10-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `check_login`
--

CREATE TABLE `check_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('admin','teacher','student','') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_login`
--

INSERT INTO `check_login` (`id`, `first_name`, `last_name`, `Code_id`, `username`, `password`, `status`) VALUES
(1, 'Jownyce', 'Sohappy', '60122660102', 'leonice11', '1234', 'admin'),
(2, 'FF', 'FF', '50436', '50436', 'aabbb089797c29a13e87e017a37fc972', 'teacher'),
(3, 'So', 'Sad', '60122660111', '60122660134', '1111', 'student'),
(4, 'asdasd', 'asdasd', '60122660128', '60122660123', '1111', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `detail`, `created_at`) VALUES
(1, 'appzstory', '099999999', 'test@test', 'สวัสดีครับ ผมสนใจคอร์สเรียน', '2018-06-01'),
(4, 'test', '0555555555', 'test@test', 'test', '2018-06-05'),
(5, 'appzstory studio', '032333522', 'admin@admin.com', 'สวัสดีครับ สนใจคอร์สเรียนเขียนเว็บไซต์', '2018-06-05'),
(6, 'edfefef', '59789898', 'efef@dfsef', 'sfefsefsef', '2018-06-05'),
(7, 'wefwef', '454654654', '4f68e46f@sdfsf', 'sdfsdf', '2018-06-05'),
(8, 'sdfsdf', '54654654', '46546@sdfsdf4564', 'sdfsdfsdfsdf', '2018-06-05'),
(9, 'eeee', '54654654', '54654@sdfsdf', 'sdfsddddd', '2018-06-05'),
(10, 'appzstory', '06666666', '06@admin', 'สนใจคอร์สเรียน', '2018-06-05'),
(11, 'fgdfgd', 'fgdfgdfg', 'dfgdg@sefrsdfsdf', 'sdfsdfsdf', '2018-06-05'),
(12, 'efwef', '08680745081', 'efwe@dsfsdf', 'sdfsdf', '2018-06-24'),
(13, 'sdf', 'sdf', 'sdf@sdfsdf', 'sdfsdf', '2018-08-01'),
(14, 'eeeeeeeeee', '086806506', 'sdfsdf@sdfsdf', 'sdfsefwegwgweg', '2018-08-01'),
(15, 'sdf', '564564654', 'sdfsdf@sdfsdf', 'sdf', '2018-08-01'),
(16, 'efwefwef', '546654654', 'sdfsdf@sdf546sdf', 'sdfwefgwef', '2018-08-01'),
(17, 'sdfsdf', '54654', 'sdfsdf564@sdfsdf', 'sdfwsewfgweg', '2018-08-01'),
(18, 'appzstory', '08680000000', 'appz@gmail.com', 'ข้อความมาแล้ววววว', '2018-08-01'),
(19, 'sdf', '05650606', 'sdfsdf@sdfsdf', 'sdfsdfewgw', '2018-08-01'),
(20, 'fefef', '065506', 'fsdf@sdfsdf', 'sfewgweg', '2018-08-01'),
(21, 'ewfwe', 'fefwe', 'fwef@sdf', 'sdfswef', '2018-08-01'),
(22, 'พระครูพิศาลกิจจานุรักษ์', '0854935999', 'kanta227@gmail.com', 'ทดสอบส่งข้อความ เจริญพร', '2018-08-01'),
(23, 'dsf', '04650465', 'sdfsdf@sedfsdf', 'sdfsdf', '2018-08-24'),
(24, 'test', '1232312321', 'testad@asdsads', 'asdsadwdasd', '2018-08-24'),
(25, 'chaiyapote nuntapreecha', '853609391', 'chaiyapoteza@gmail.com', 'daD', '2018-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `coursename_tb`
--

CREATE TABLE `coursename_tb` (
  `Cos_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursename_tb`
--

INSERT INTO `coursename_tb` (`Cos_code`, `Cos_name`) VALUES
('12345', 'วิศวกรรมซอฟต์แวร์ 2560'),
('172839', 'อังกฤษเพื่อคนอื่น'),
('25124', 'The world'),
('12346', 'Area 51'),
('12345', 'วิศวกรรมซอฟต์แวร์ 2560'),
('172839', 'อังกฤษเพื่อคนอื่น'),
('25124', 'The world'),
('12346', 'Area 51');

-- --------------------------------------------------------

--
-- Table structure for table `course_tb`
--

CREATE TABLE `course_tb` (
  `Cos_id` int(11) NOT NULL,
  `Cos_term` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_tb`
--

INSERT INTO `course_tb` (`Cos_id`, `Cos_term`, `Sub_Code`, `Teach_code`, `Cos_code`) VALUES
(82, '1/2562', '5672202', '60122660130', 12345),
(84, '2/2560', '5672101', '60122660130', 12346);

-- --------------------------------------------------------

--
-- Table structure for table `day_tb`
--

CREATE TABLE `day_tb` (
  `day` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Day_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `day_tb`
--

INSERT INTO `day_tb` (`day`, `Day_Num`) VALUES
('Mon', 1),
('Tue', 2),
('Wed', 3),
('Thu', 4),
('Fri', 5),
('Sat', 6),
('Sun', 7),
('Mon', 1),
('Tue', 2),
('Wed', 3),
('Thu', 4),
('Fri', 5),
('Sat', 6),
('Sun', 7);

-- --------------------------------------------------------

--
-- Table structure for table `edit_grade`
--

CREATE TABLE `edit_grade` (
  `ID` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `B+` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `C+` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `D+` int(11) NOT NULL,
  `D` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edit_grade`
--

INSERT INTO `edit_grade` (`ID`, `A`, `B+`, `B`, `C+`, `C`, `D+`, `D`) VALUES
(1, 80, 75, 70, 65, 60, 55, 50);

-- --------------------------------------------------------

--
-- Table structure for table `grade_tb`
--

CREATE TABLE `grade_tb` (
  `Grad_id` int(16) NOT NULL,
  `Grad_Term` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_code` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `GPA` text COLLATE utf8_unicode_ci NOT NULL,
  `P1` int(11) NOT NULL,
  `P2` int(11) NOT NULL,
  `Mid` int(11) NOT NULL,
  `Final` int(11) NOT NULL,
  `grade_font` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade_tb`
--

INSERT INTO `grade_tb` (`Grad_id`, `Grad_Term`, `Std_code`, `Sub_code`, `GPA`, `P1`, `P2`, `Mid`, `Final`, `grade_font`) VALUES
(5, '2/2561', '60122660128', '5673101', '0', 0, 0, 0, 0, 'F'),
(7, '1/2561', '60122660134', '9011103', '40', 10, 10, 10, 10, 'F'),
(8, '1/2561', '60122660140', '9011103', '75', 0, 0, 0, 0, 'B+'),
(9, '2/2561', '60122660140', '5673101', '34', 0, 0, 0, 0, 'F'),
(12, '1/2561', '60122660118', '9011103', '40', 10, 10, 10, 10, 'F'),
(13, '1/2561', '60122660100', '9011103', '80', 20, 20, 20, 20, 'A'),
(14, '1/2561', '60122660118', '5674901', '100', 0, 0, 0, 0, 'A'),
(15, '1/2560', '60122660100', '9011103', '30', 10, 10, 10, 0, 'F'),
(21, '2/2563', '60122660122', '5672202', '50', 0, 0, 0, 0, 'D'),
(22, '2/2563', '60122660134', '5672202', '48', 0, 0, 0, 0, 'F'),
(23, '1/2561', '60122660134', '5673604', '79', 0, 0, 0, 0, 'B+'),
(24, '1/2561', '60122660134', '5673501', '68', 0, 0, 0, 0, 'C+'),
(25, '1/2561', '60122660122', '9011103', '40', 10, 10, 10, 10, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `Mem_id` int(16) NOT NULL,
  `Mem_user` text COLLATE utf8_unicode_ci NOT NULL,
  `Mem_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `Type_id` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `Email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`Mem_id`, `Mem_user`, `Mem_pass`, `Type_id`, `Email`) VALUES
(1, '60122660134', '123456', '3', 'eazy@gmail.com'),
(2, 'admin', 'admin', '1', 'test@gmail.com'),
(3, '50436', 'aabbb089797c29a13e87e017a37fc972', '2', 'namo@gmail.com'),
(4, '60122660140', '25121990', '3', 'gg@gmail.com'),
(5, '30144', '170919', '2', 'chai@gmail.com'),
(6, '60122660128', '0620323036tae', '2', 'drnarathip@gmail.com'),
(7, '60122660122', '123456789', '2', 'kd@hotmail.com'),
(8, '30141', '170919', '2', 'JJ@gmail.com'),
(9, '60122660120', '251290', '2', 'joker@gmail.com'),
(11, '15648', '120300', '2', 'yada3@gmail.com'),
(14, '51423', '999999', '2', 'yada99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `Reg_id` int(11) NOT NULL,
  `Std_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Cos_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`Reg_id`, `Std_code`, `Cos_code`) VALUES
(1, '60122660134', '12345'),
(2, '60122660118', '12346'),
(3, '60122660100', '172839'),
(4, '', '12345'),
(5, '60122660140', '25124'),
(6, '60122660128', '25124'),
(7, '60122660122', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sect_tb`
--

CREATE TABLE `sect_tb` (
  `Sect_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Sect_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sect_tb`
--

INSERT INTO `sect_tb` (`Sect_code`, `Sect_Name`) VALUES
('01', 'เอกบังคับ'),
('02', 'วิชาเลือก'),
('03', 'เลือกเสรี');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `Std_id` int(16) NOT NULL,
  `Std_Code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Std_Add` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Birth` date NOT NULL,
  `Std_Card` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Major` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Faculty` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`Std_id`, `Std_Code`, `Std_Pname`, `Std_Fname`, `Std_Lname`, `Std_Tel`, `Std_Add`, `Std_Birth`, `Std_Card`, `Std_Major`, `Std_Faculty`, `Std_Image`) VALUES
(1, '60122660118', 'Mr.', 'Kuy', 'Puat', '0652556595', 'USA', '2019-09-19', '1529900975465', 'SE', 'SE', ''),
(2, '60122660134', 'Mrs.', 'Worawit', 'Luffy', '0659897895', 'LA, USA', '1998-12-25', '152990098755', 'Science', 'Physics', ''),
(3, '60122660100', 'Mr.', 'Van', 'Helsing', '0620323035', 'Netherland', '1997-09-01', '1529900975111', 'IE', 'SE', ''),
(4, '60122660140', 'Mr.', 'Naruto', 'Uzumaki', '0620323038', 'Japan', '1990-12-25', '1529900975889', 'SE', 'IE', ''),
(5, '60122660128', 'ดร.', 'นราทิพย์', 'สุขสมบูรณ์', '0625986589', 'ลำพูน', '1997-09-22', '1529900985236', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุสาหกรรม', ''),
(6, '60122660122', 'นาย', 'เค', 'ด่วย', '0620323039', 'LA', '1998-01-25', '1562233698756', 'SE', 'IE', ''),
(7, '60122660120', 'นาย', 'ดอก', 'ทอง', '0620323036', 'lp', '1990-12-25', '1529900975032', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุสาหกรรม', ''),
(9, '60122660128', 'นาย', 'ณัฐวัชต์', 'โชติธนนันทพงศ์', '0620323036', 'lp', '2099-09-09', '1529900985236', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุสาหกรรม', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tb`
--

CREATE TABLE `subject_tb` (
  `Sub_id` int(16) NOT NULL,
  `Sub_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Credit` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_tb`
--

INSERT INTO `subject_tb` (`Sub_id`, `Sub_code`, `Sub_Name`, `Sub_Credit`) VALUES
(1, '9011103', 'ภาษาอังกฤษเพื่อทักษะการเรียน', '3'),
(2, '9011202', 'สุนทรียภาพของชีวิต', '3'),
(3, '9011403', 'เทคโนโลยีสารสนเทศเพื่อการเรียนรู้', '3'),
(4, '9011204', 'ทักษะการรู้สารสนเทศ', '3'),
(5, '5672202', 'การเขียนโปรแกรมเชิงวัตถุ', '3'),
(6, '5672101', 'คณิตศาสตร์ดิสครีตสำหรับวิศวกรรมซอฟต์แวร์', '3'),
(7, '5671101', 'สถิติสำหรับวิศวกรรมซอฟต์แวร์', '3'),
(8, '5671201', 'การออกแบบและการวิเคราะห์ขั้นตอนวิธี', '3'),
(9, '5671202', 'ระบบฐานข้อมูลสำหรับการพัฒนาซอฟต์แวร์', '3'),
(10, '5671701', 'โครงสร้างคอมพิวเตอร์', '3'),
(11, '5672601', 'วิศวกรรมซอฟต์แวร์เบื้องต้น', '3'),
(12, '5672501', 'การพัฒนาเว็บเซอร์วิสสำหรับธุรกิจอิเล็กทรอนิกส์', '3'),
(13, '5672301', 'การโปรแกรมบนระบบข้อมูลเป็นศูนย์กลาง', '3'),
(14, '5672304', 'การพัฒนาเว็บด้วยเทคโนโลยีสมัยใหม่', '3'),
(15, '5673301', 'การพัฒนาโปรแกรมประยุกต์สำหรับอุปกรณ์เคลื่อนที่', '3'),
(16, '5673601', 'การกำหนดความต้องการและการจัดการซอฟต์แวร์', '3'),
(17, '5672602', 'สถาปัตยกรรมซอฟต์แวร์', '3'),
(18, '5673101', 'พีชคณิตเชิงเส้นสำหรับวิศวกรรมซอฟต์แวร์', '3'),
(19, '5673602', 'การประกันคุณภาพในกระบวนการพัฒนาซอฟต์แวร์', '3'),
(20, '5673603', 'การสร้างและการวิวัฒน์ซอฟต์แวร์', '3'),
(21, '5673501', 'การบริหารซอฟต์แวร์ขนาดใหญ่ในองค์กร', '3'),
(22, '5673604', 'การจัดการโครงแบบซอฟต์แวร์', '3'),
(23, '5673605', 'การทวนสอบและการทดสอบซอฟต์แวร์', '3'),
(24, '5673606', 'การจัดการโครงการซอฟต์แวร์', '3'),
(25, '5674501', 'การพัฒนาซอฟต์แวร์เป็นทีม', '3'),
(26, '5674801', 'การเตรียมฝึกประสบการณ์วิชาชีพด้านวิศวกรรมซอฟต์แวร์', '3'),
(27, '5674901', 'สัมนาวิศวกรรมซอฟต์แวร์', '3'),
(28, '5674902', 'โครงงานนวิศวกรรมซอฟต์แวร์', '3'),
(29, '5674501', 'การพัฒนาเซอฟต์แวร์เป็นทีม', '3'),
(30, '5674891', 'การเตรียมสหกิจศึกษาด้านวิศวกรรมซอฟต์แวร์', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `class` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `Std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `pname`, `firstname`, `lastname`, `class`, `username`, `password`, `status`, `email`, `picture`, `Std_id`) VALUES
(1, '', '', '', '', 'Admin', '1234', 'admin', 'Max.nan.798@gmail.com', '1569473521.png', 0),
(2, 'อ.', 'ญาดา', 'เขื่อนใจ', '3', 'khim', '1234', 'teacher', 'tuylnw12@gmail.com', '1569473521.png', 0),
(3, 'นาย', 'กิตติโชติ', 'มุลทะโนช', '3', '60122660101', '070542', 'student', 'tuylnw12@gmail.com', '1569473521.png', 12),
(5, 'นาย', 'คณาศักดิ์', 'จ่าปัน', '3', '60122660102', '140841', 'student', 'tuylnw12@gmail.com', '1569473521.png', 0),
(6, 'นาย', 'บัณฑิตพงษ์', 'ตาปินตา', '3', '60122660107', '321257', 'teacher', 'icecooler_112@gmail.com', '1569473521.png', 7),
(7, 'นาย', 'ยุทธนา', 'แสงจันทร์', '3', '60122660111', '121241', 'admin', 'yuthana.sangjan@gamil.com', '1569473521.png', 0),
(8, 'นาย', 'ณัฐชานนท์', 'ต่อทรัพย์สิริ', '3', '60122660116', '270342', 'admin', '', '1569474749.jpg', 0),
(9, 'นาย', 'อนุรักษ์', 'ใจทิศ', '3', '60122660130', '09092541', 'student', 'Max.nan.789@gmail.com', '1569475101.png', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE `tb_grade` (
  `Grad_id` int(11) NOT NULL,
  `Grad_Term` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_code` text COLLATE utf8_unicode_ci NOT NULL,
  `Sub_code` text COLLATE utf8_unicode_ci NOT NULL,
  `GPA` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_grade`
--

INSERT INTO `tb_grade` (`Grad_id`, `Grad_Term`, `Std_code`, `Sub_code`, `GPA`) VALUES
(2, '2/2561', '60122660130', '45464', 'A'),
(3, '2/2561', '60122660130', '45464', 'B+'),
(5, '2/2561', '60122660130', '45464', 'C'),
(6, '2/2561', '60122660130', '45464', 'A'),
(7, '2/2561', '60122660130', '45464', 'A'),
(8, '2/2561', '60122660130', '45464', 'A'),
(9, '1/2562', '60122660130', '589214', 'D+'),
(12, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `Reg_id` int(11) NOT NULL,
  `Reg_term` text NOT NULL,
  `Std_code` text NOT NULL,
  `Sub_code` text NOT NULL,
  `Teach_code` text NOT NULL,
  `Reg_Section` text NOT NULL,
  `Reg_Time` text NOT NULL,
  `Reg_Room` text NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`Reg_id`, `Reg_term`, `Std_code`, `Sub_code`, `Teach_code`, `Reg_Section`, `Reg_Time`, `Reg_Room`, `class`) VALUES
(1, '1/2562', '60122660130', '589214', '56743', '3', '10.00 น.', '38402', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `Std_id` int(16) NOT NULL,
  `Std_Code` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Pname` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Fname` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Lname` text CHARACTER SET utf8 NOT NULL,
  `Std_Tel` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Add` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Birth` date NOT NULL,
  `Std_Card` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Major` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Faculty` text COLLATE utf8_unicode_ci NOT NULL,
  `Std_Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`Std_id`, `Std_Code`, `Std_Pname`, `Std_Fname`, `Std_Lname`, `Std_Tel`, `Std_Add`, `Std_Birth`, `Std_Card`, `Std_Major`, `Std_Faculty`, `Std_Image`, `class`) VALUES
(7, '60122660107', 'นาย', 'บัณฑิตพงษ์', 'ตาปินตา', '095310XXXX', '175/22', '2019-09-05', '1580300087300', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุตสาหกรรม', '', '3'),
(11, '60122660130', 'นาย', 'อนุรักษ์', 'ใจทิศ', '096890XXXX', '09 บ้านปางสา หมู่ที่ 3 ต.ผาทอง อ.ท่าวังผา จ.น่าน 55140', '1998-09-09', '1550600099451', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุตสาหรกรรม', '', '3'),
(12, '60122660101', 'นาย', 'กิตติโชติ', 'มุลทะโนช', '0979969414', '36/1 ม.10 ต.แม่คง อ.แม่สะเรียง จ.แม่ฮ่องสอน 58110', '1999-05-07', '1580400216055', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุตสาหรกรรม', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `Sub_id` int(11) NOT NULL,
  `Sub_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Sub_Credit` text COLLATE utf8_unicode_ci NOT NULL,
  `CR` int(5) NOT NULL,
  `Teach_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_subject`
--

INSERT INTO `tb_subject` (`Sub_id`, `Sub_code`, `Sub_Name`, `Sub_Credit`, `CR`, `Teach_id`) VALUES
(1, '589214', 'สถาปัตยกรรมซอฟต์แวร์', '3 (2-2-5)', 3, 56743),
(2, '567439', 'วิศวกรรมซอฟต์แวร์เบื้องต้น', '3 (2-2-5)', 3, 58375),
(3, '5123156', 'สถาปัตยกรรม', '3(2-2-5)', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_teacher`
--

CREATE TABLE `tb_teacher` (
  `Teach_id` int(16) NOT NULL,
  `Teach_code` varchar(5) NOT NULL,
  `Teach_Pname` text NOT NULL,
  `Teach_Fname` text NOT NULL,
  `Teach_Lname` text NOT NULL,
  `Teach_Birth` date NOT NULL,
  `Teach_Add` text NOT NULL,
  `Teach_Tel` text NOT NULL,
  `Teach_Card` varchar(13) NOT NULL,
  `Teach_Major` text NOT NULL,
  `Teach_Faculty` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_teacher`
--

INSERT INTO `tb_teacher` (`Teach_id`, `Teach_code`, `Teach_Pname`, `Teach_Fname`, `Teach_Lname`, `Teach_Birth`, `Teach_Add`, `Teach_Tel`, `Teach_Card`, `Teach_Major`, `Teach_Faculty`, `picture`) VALUES
(28, '123', 'นาย', 'บัณฑิตพงษ์', 'ตาปินตา', '2019-09-12', '121423', '0953103854', '1580300087300', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุตสาหกรรม', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tb`
--

CREATE TABLE `teacher_tb` (
  `Teach_id` int(16) NOT NULL,
  `Teach_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Birth` date NOT NULL,
  `Teach_Add` text COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Teach_Card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teach _Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_tb`
--

INSERT INTO `teacher_tb` (`Teach_id`, `Teach_code`, `Teach_Pname`, `Teach_Fname`, `Teach_Lname`, `Teach_Birth`, `Teach_Add`, `Teach_Tel`, `Teach_Card`, `Teach _Major`, `Teach _Faculty`, `Teach _Image`) VALUES
(1, '50436', 'นางสาว', 'กนกกัญญา', 'รวมไมตรี', '2019-09-17', 'test', '1234567890', '1234567891234', 'คณะเทคโนโลยีอุตสาหกรรม', 'คณะเทคโนโลยีอุตสาหกรรม', ''),
(2, '30141', 'นางสาว', 'กรรณิกา', 'พิมสิงห์รี', '2019-09-17', 'test', '1234567890', '1234567891234', 'คณะเทคโนโลยีอุตสาหกรรม', 'คณะเทคโนโลยีอุตสาหกรรม', ''),
(3, '30144', 'นางสาว', 'กฤษดา', 'ชัยเรือง', '2019-09-17', 'test', '1234567890', '1234567891234', 'นักวิชาการโสตทัศนศึกษา', 'คณะเทคโนโลยีอุตสาหกรรม', ''),
(4, '50143', 'Dr', 'GG', 'GG', '0000-00-00', 'fr', '0896549874', '1234567890123', 'SE', 'IE', ''),
(5, '50142', 'we', 'ณัฐวัชต์', 'โชติธนนันทพงศ์', '2005-05-05', 'lp', '0625986589', '1529900975032', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุสาหกรรม', ''),
(6, '50142', 'de', 'ณัฐวัชต์', 'โชติธนนันทพงศ์', '2005-05-01', 'lp', '0625986589', '1529900985236', 'วิศวกรรมซอฟต์แวร์', 'เทคโนโลยีอุสาหกรรม', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_login`
--
ALTER TABLE `check_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tb`
--
ALTER TABLE `course_tb`
  ADD PRIMARY KEY (`Cos_id`);

--
-- Indexes for table `edit_grade`
--
ALTER TABLE `edit_grade`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grade_tb`
--
ALTER TABLE `grade_tb`
  ADD PRIMARY KEY (`Grad_id`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`Mem_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `sect_tb`
--
ALTER TABLE `sect_tb`
  ADD PRIMARY KEY (`Sect_code`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`Std_id`);

--
-- Indexes for table `subject_tb`
--
ALTER TABLE `subject_tb`
  ADD PRIMARY KEY (`Sub_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD PRIMARY KEY (`Grad_id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`Std_id`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`Sub_id`);

--
-- Indexes for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  ADD PRIMARY KEY (`Teach_id`);

--
-- Indexes for table `teacher_tb`
--
ALTER TABLE `teacher_tb`
  ADD PRIMARY KEY (`Teach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `check_login`
--
ALTER TABLE `check_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `course_tb`
--
ALTER TABLE `course_tb`
  MODIFY `Cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `edit_grade`
--
ALTER TABLE `edit_grade`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade_tb`
--
ALTER TABLE `grade_tb`
  MODIFY `Grad_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member_tb`
--
ALTER TABLE `member_tb`
  MODIFY `Mem_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `Std_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject_tb`
--
ALTER TABLE `subject_tb`
  MODIFY `Sub_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_grade`
--
ALTER TABLE `tb_grade`
  MODIFY `Grad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `Std_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `Sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  MODIFY `Teach_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `teacher_tb`
--
ALTER TABLE `teacher_tb`
  MODIFY `Teach_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
