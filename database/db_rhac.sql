-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2020 at 06:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutInfo`
--

DROP TABLE IF EXISTS `tbl_aboutInfo`;
CREATE TABLE IF NOT EXISTS `tbl_aboutInfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(65) NOT NULL,
  `para` text NOT NULL,
  `para2` text NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutInfo`
--

INSERT INTO `tbl_aboutInfo` (`id`, `title`, `para`, `para2`, `img`) VALUES
(1, 'Get To Know Us', 'The “No Shame” Campaign is a youth-targeted initiative run by the Regional HIV/AIDS Connection. this is a test', 'Our mission is to educate the community on HIV/AIDS and understand its impact, encourage safe testing to promote a healthier lifestyle and equip youth with the appropriate resources and information in an effort to reduce the stigma, change the conversation and support the youth living with, at-risk for, or affected by HIV/AIDS and Hep C. this is a test', 'RHAC_groupshot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutOld`
--

DROP TABLE IF EXISTS `tbl_aboutOld`;
CREATE TABLE IF NOT EXISTS `tbl_aboutOld` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `para` varchar(750) NOT NULL,
  `para2` varchar(450) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutOld`
--

INSERT INTO `tbl_aboutOld` (`id`, `title`, `para`, `para2`, `img`, `link`) VALUES
(1, 'Get to Know Us', 'The “No Shame” Campaign is a youth-targeted initiative run by the Regional HIV/AIDS Connection. ', 'Our mission is to educate the community on HIV/AIDS and understand its impact, encourage safe testing to promote a healthier lifestyle and equip youth with the appropriate resources and information in an effort to reduce the stigma, change the conversation and support the youth living with, at-risk for, or affected by HIV/AIDS and Hep C.', 'public/images/RHAC_groupshot.jpg', 'https://hivaidsconnection.ca/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

DROP TABLE IF EXISTS `tbl_help`;
CREATE TABLE IF NOT EXISTS `tbl_help` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `para` varchar(350) NOT NULL,
  `link` varchar(150) NOT NULL,
  `link2` varchar(150) NOT NULL,
  `button` varchar(50) NOT NULL,
  `button2` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`ID`, `title`, `img`, `para`, `link`, `link2`, `button`, `button2`) VALUES
(1, 'volunteer', 'public/images/volunteer.svg', 'Our service users include people living with HIV/AIDS and HCV, their partners/family/friends, as well as those concerned about HIV/AIDS and HCV or at risk for HIV.', '#', '', 'volunteer', 'events calendar'),
(2, 'Support', 'public/images/donation.svg', 'Your support contributes to important services such as transportation, and support programs.', '#', '', 'support', ''),
(3, 'subscribe', 'public/images/subscribe.svg', 'Stay in touch to get wellness tips, event updates and news.', '#/register', '', 'subscribe', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

DROP TABLE IF EXISTS `tbl_info`;
CREATE TABLE IF NOT EXISTS `tbl_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_title` varchar(80) NOT NULL,
  `info_description` varchar(350) NOT NULL,
  `description2` varchar(350) NOT NULL,
  `description3` varchar(350) NOT NULL,
  `description4` varchar(350) NOT NULL,
  `description5` varchar(350) NOT NULL,
  `description6` varchar(350) NOT NULL,
  `description7` varchar(350) NOT NULL,
  `btnLink` varchar(80) NOT NULL,
  `btnName` varchar(80) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`info_id`, `info_title`, `info_description`, `description2`, `description3`, `description4`, `description5`, `description6`, `description7`, `btnLink`, `btnName`) VALUES
(1, 'I Want to Learn More About HIV/AIDS', '<span>HIV</span> stands for Human Immunodeficiency Virus - A virus that weakens the immune system. The immune systems of people living with HIV may not allow them to fight off infections as well as people who do not have HIV (who are HIV negative).', '<span>AIDS</span> stands for acquired immune deficiency syndrome - an advanced form of the disease caused by HIV. Not all people living with HIV will develop AIDS.', 'HIV is mainly spread by having unprotected anal or vaginal sex (intercourse) or by sharing needles.', 'Currently, there is no vaccine and no cure for HIV/AIDS.', '', '', '', 'https://hivaidsconnection.ca/get-facts-about-hivaids-and-hepatitis-c', 'Learn More'),
(2, 'I Want to Get Tested', 'You can get HIV and Hep C rapid testing done at RHAC. No  appointment or health card required. Drop-in during <a href=\"https://hivaidsconnection.ca/get-facts/get-tested\">RHAC’S Testing Hours.</a>', 'You can also get tested for Hep C at your family doctor, walk-in clinics or at the <a href=\"https://lihc.on.ca/\">London Intercommunity Health Centre</a> if you have no permanent address.', 'Getting tested is the only way to determine if you are HIV/AIDS positive and by identifying this as soon as possible you can be sure to take the steps necessary to keep yourself and your partners safe.', '', '', '', '', 'https://hivaidsconnection.ca/get-facts/get-tested', 'Learn More'),
(3, 'I Want to Use Condoms', 'When used correctly, condoms are the most effective way of preventing Sexually Transmitted Infections (STIs), including HIV and are effective against all forms of sex including oral, anal and vaginal. Condoms prevent the transferal of fluids which is the biggest risk for contracting HIV/AIDS.', 'Condoms and lube are sold at pharmacies across Ontario or you can pick up free condoms and lube at your nearest youth clinic.', 'A new condom should be used each time you have sex and the expiry date of the condom should be followed before use.', '', '', '', '', 'https://www.healthunit.com/condoms', 'Learn More'),
(5, 'I\'m Questioning My Sexuality and/or Gender', 'That’s okay! Your sexual identity and gender identity is unique to you. You may feel pressure to put a label on your feeling, but you don’t have to. The variations are unlimited, but they are all valid.', '\r\nIt is important to give yourself time to explore your own identity and if you choose to do so, build up the strength and courage to share this with others.', 'Coming out is a difficult task and it is important to make this decision when YOU feel most comfortable. Maintaining positive mental health is a large barrier when dealing with your sexuality or gender and your sexuality/gender does not define who you are as a person.', '', '', '', '', 'https://hivaidsconnection.ca/opencloset', 'Get Support'),
(6, 'I heard about meds that can help', 'PrEP stands for Pre-Exposure Prophylaxis - an HIV infection strategy whereby those of us who are HIV-negative take daily medication containing antiretroviral drugs, which are also used for HIV treatment, before and continuing after activities that could potentially expose you to HIV.', 'The RHAC PrEP Clinic is currently held every second Friday and is open to all people. The clinic offers prescription, counselling, treatment and follow-up care.', 'The RHAC PrEP Clinic is a great way to get involved as well as learn more about HIV/AIDS.', '', '', '', '', 'http://www.hivaidsconnection.ca/prep', 'Learn More');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moreInfo`
--

DROP TABLE IF EXISTS `tbl_moreInfo`;
CREATE TABLE IF NOT EXISTS `tbl_moreInfo` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_title` varchar(80) NOT NULL,
  `info_para1` text NOT NULL,
  `info_para2` text NOT NULL,
  `info_para3` text NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_moreInfo`
--

INSERT INTO `tbl_moreInfo` (`info_id`, `info_title`, `info_para1`, `info_para2`, `info_para3`) VALUES
(4, 'I was diagnosed with HIV', 'Testing positive for HIV can feel scary or overwhelming. You are not alone, RHAC’s Client Services team are a skilled team that can offer support and put you in contact with peers who have been living with HIV or have been affected by HIV for many years.', 'It is important to know that HIV is not a terminal illness, there IS treatment, being HIV+ does not mean you have AIDS, people living with HIV can still have sex and children and there are many programs and support.', ''),
(3, 'I want to get tested', 'You can get HIV and Hep C rapid testing done at RHAC. No  appointment or health card required. Drop-in during RHAC’S Testing Hours.', 'You can also get tested for Hep C at your family doctor, walk-in clinics or at the London Intercommunity Health Centre if you have no permanent address.', 'Getting tested is the only way to determine if you are HIV/AIDS positive and by identifying this as soon as possible you can be sure to take the steps necessary to keep yourself and your partners safe.'),
(5, 'I’m questioning my sexuality and/or gender', 'That’s okay! Your sexual identity and gender identity is unique to you. You may feel pressure to put a label on your feeling, but you don’t have to. The variations are unlimited, but they are all valid.', 'It is important to give yourself time to explore your own identity and if you choose to do so, build up the strength and courage to share this with others.', 'Coming out is a difficult task and it is important to make this decision when YOU feel most comfortable. Maintaining positive mental health is a large barrier when dealing with your sexuality or gender and your sexuality/gender does not define who you are as a person.'),
(6, 'I heard about meds that can help', 'PrEP stands for Pre-Exposure Prophylaxis - an HIV infection strategy whereby those of us who are HIV-negative take daily medication containing antiretroviral drugs, which are also used for HIV treatment, before and continuing after activities that could potentially expose you to HIV. PrEP interferes with the pathways that HIV uses to cause a permanent infection.', 'The RHAC PrEP Clinic is currently held every second Friday and is open to all people. The clinic offers prescription, counselling, treatment and follow-up care.', 'The RHAC PrEP Clinic is a great way to get involved as well as learn more about HIV/AIDS.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newPartner`
--

DROP TABLE IF EXISTS `tbl_newPartner`;
CREATE TABLE IF NOT EXISTS `tbl_newPartner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_newPartner`
--

INSERT INTO `tbl_newPartner` (`id`, `name`, `img`, `link`) VALUES
(2, 'CACVO ACCHO', '17a9fae34e0ebb42cd115fe5bd3e264f.png', 'http://accho.ca/'),
(3, 'Gay Men\'s Sexual Health Alliance', 'd5182778fe2fb4879eb1b748c7661973.png', 'http://www.gmsh.ca/'),
(4, 'John Gordon Home', '24453430c0d65a1da5025eab29f9d396.png', 'http://hivaidsconnection.ca/about/john-gordon-home'),
(5, 'Janssen', 'ed4502cf46f502bf314ba672fe8309f4.png', 'https://www.janssen.com/'),
(6, 'London Cares', '70df3103ff935c1f3266dbf935bf23be.png', 'https://www.londoncares.ca/'),
(7, 'Local Health Integration Network', 'e5509c6bc525fbf8d784925874d28609.png', 'http://www.lhins.on.ca/'),
(8, 'London InterCommunity Health Centre', '3d9dc7e3d37f96fe17222a9467c5a082.png', 'https://lihc.on.ca/'),
(9, 'Middlesex-London Health Unit', 'd9680c9c7f39ba90d50691e33247f6b2.png', 'https://www.healthunit.com/'),
(10, 'Public Health Agency of Canada', 'e4bc35f74fefe51a7b50fa66e7677edc.png', 'https://www.canada.ca/en/public-health.html'),
(11, 'St Joseph\'s Health Care London', 'e7735cd0256184e772f82c787e64441f.png', 'https://www.sjhc.london.on.ca/'),
(12, 'Schulich Medicine & Dentistry', 'db7775df8eeb2ec713bcfdd97c15ff0d.png', 'https://www.schulich.uwo.ca/'),
(13, 'The Sex You Want', '83c92d16c29053cf220fcfa70bd80f07.png', 'https://thesexyouwant.ca/'),
(14, 'TD Canada Trust', 'af08a6f1e2e58c163c19cbaf2836889b.png', 'https://www.td.com/ca/en/personal-banking/'),
(15, 'Women & HIV/AIDS Initiative', 'e5663d6d721a30928f3440ac793f8408.png', 'http://www.whai.ca/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

DROP TABLE IF EXISTS `tbl_register`;
CREATE TABLE IF NOT EXISTS `tbl_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'austin', 'caron', 'austin.caron1@gmail.com'),
(4, 'Patrick', 'Bradley', 'wpatrickbradley99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_fname`, `user_pass`, `user_email`, `user_ip`) VALUES
(1, 'admin', 'Administrator', 'admin1234', 'admin@admin.com', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
