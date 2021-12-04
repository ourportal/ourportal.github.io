-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 08:52 AM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanaico1_our_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `status` varchar(500) NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `parent_category` varchar(500) DEFAULT 'Others',
  `price` varchar(500) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `title`, `description`, `pid`, `ip`, `status`, `date`, `time`) VALUES
(141, 'CYBEROX', 'theabhinaykumar@gmail.com', 'how to take screenshot in laptop', 'help', '53', '103.220.21.144', 'Deleted', '29-Jan-2021', '01:42 PM'),
(143, 'Sarfaraj', 'mdsarfaraj38603@gmail.com', 'It is very effective ', '', '71', '2405:204:3485:f4db:a589:7765:40d3:5aaa', 'Deleted', '30-Jan-2021', '11:43 PM'),
(145, 'Shashi sudarshan', 'mal', '', 'Very informative article', '71', '2405:204:3203:3abe:1319:767:9f16:1dcf', 'Aproved', '30-Jan-2021', '11:49 PM'),
(146, 'Alexander Alan', 'alexander466alan@gmail.com', 'Get likes and followers', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', '68', '185.210.217.248', 'Aproved', '31-Jan-2021', '02:03 AM'),
(148, 'Diksha', 'diksharajpoot41@gmail.com', 'Good👍 nd very helpful we&apos;ll', '', '71', '2401:4900:30c4:f236:eded:94de:beec:9340', 'Deleted', '31-Jan-2021', '09:23 AM'),
(151, 'Arvel Cruickshank I', 'csrbutler@aol.com', 'attitude', 'Persevering', '34', '135.148.33.100', 'Aproved', '01-Feb-2021', '04:14 AM'),
(152, 'Mike Peacock\r\n', 'see-email-in-message@monkeydigital.co', 'Increase sales for ifi9.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your ifi9.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your ifi9.com to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Peacock\r\n \r\nsupport@monkeydigital.co', '52', '84.247.48.7', 'Aproved', '01-Feb-2021', '03:40 PM'),
(155, 'Jovita Blackston', 'jovita@stardatagroup.com', '', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\n\r\nFire sale till the 7th of Feb.\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time offer.\r\nYou can purchase it at www.StarDataGroup.com and view samples.\r\n\r\n- LinkedIn Database\r\n 43,535,433 LinkedIn Records\r\n\r\n- USA B2B Companies Database\r\n 28,147,835 Companies\r\n\r\n- Forex\r\n Forex South Africa 113,550 Forex Traders\r\n Forex Australia 135,696 Forex Traders\r\n Forex UK 779,674 Forex Traders\r\n\r\n- UK Companies Database\r\n 521,303 Companies\r\n\r\n- German Databases\r\n German Companies Database: 2,209,191 Companies\r\n German Executives Database: 985,048 Executives\r\n\r\n- Australian Companies Database\r\n 1,806,596 Companies\r\n\r\n- UAE Companies Database\r\n 950,652 Companies\r\n\r\n- Affiliate Marketers Database\r\n 494,909 records\r\n\r\n- South African Databases\r\n B2B Companies Database: 1,462,227 Companies\r\n Directors Database: 758,834 Directors\r\n Healthcare Database: 376,599 Medical Professionals\r\n Wholesalers Database: 106,932 Wholesalers\r\n Real Estate Agent Database: 257,980 Estate Agents\r\n Forex South Africa: 113,550 Forex Traders\r\n\r\nVisit www.stardatagroup.com or contact us with any queries.\r\n\r\nKind Regards,\r\nStarDataGroup.com', '71', '52.148.142.207', 'Aproved', '01-Feb-2021', '06:33 PM'),
(156, 'Emma Haley', 'maren.gelfond@yahoo.com', 'circuit', 'Gloves', '34', '195.154.179.3', 'Read', '02-Feb-2021', '10:55 AM'),
(157, 'Thomas Kraynik', 'contact@ddmmarketing.net', 'Try Now For Free - DDM Marketing Package', 'Dear Potential Partner, \r\n \r\nThe DDM team offers you 360° online marketing solutions. We are a successful BPO, filled with talented people having partnerships across USA. Moreover, we have a broad IT team ready to build custom applications and software. \r\n \r\nYou can view our website here: https://ddmmarketing.net. \r\n \r\nYou have now one month of free marketing services - no costs, no hidden fees, nothing. If you are not satisfied, you can cancel - free of charge. \r\n \r\nIf you are ready to commit to growth and profits book a free consultation or reach out to us directly via e-mail or phone. \r\n \r\nI appreciate your quick response. \r\n \r\n \r\nBest regards, \r\n \r\nThomas Kraynik | CEO \r\n \r\nDDM Marketing \r\nThe new way of outsourced marketing \r\nE-mail: contact@ddmmarketing.net \r\nPhone: +011 40 0730765553', '56', '84.17.61.187', 'Pending', '03-Feb-2021', '08:52 PM'),
(158, 'Angeelasic', 'puramzes@vulkan333.com', 'поставить звонок на телефон бесплатно muzmo', 'по сведениям, музмо ру новые песни [url=https://muzloman.me/music/%D0%BF%D1%80%D0%BE%D1%81%D1%82%D0%BE+%D0%BF%D0%BE%D1%82%D1%80%D1%8F%D1%81%D0%B0%D1%8E%D1%89%D0%B0%D1%8F+%D0%BC%D1%83%D0%B7%D1%8B%D0%BA%D0%B0+%D0%B1%D0%B5%D0%B7+%D1%81%D0%BB%D0%BE%D0%B2]скачать музыку без слов[/url]', '34', '51.75.146.127', 'Pending', '08-Feb-2021', '03:14 PM'),
(159, 'David Song', 'noreply@googlemail.com', 'PROJECT FUNDING', 'Hello, \r\nOur Investors wishes to invest in your company by offering debt financing in any viable Project presented by your Management,Kindly send your Business Project Presentation Plan Asap. \r\n \r\ndavidsong2030@gmail.com \r\n \r\nRegards, \r\nMr.David Song', '74', '31.171.152.135', 'Pending', '09-Feb-2021', '04:50 AM'),
(160, 'Mike Hill\r\n', 'no-replylek@gmail.com', 'Local SEO for more business', 'Good Day \r\n \r\nI have just verified your SEO on  ifi9.com for its Local SEO ranks and seen that your website could use a boost. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart improving your local visibility with us, today! \r\n \r\nregards \r\nMike Hill\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', '35', '5.253.204.4', 'Pending', '10-Feb-2021', '04:49 AM'),
(161, 'Ashton Wisozk', 'rubyireland01@gmail.com', 'indigo', 'Sausages', '34', '109.70.100.38', 'Pending', '10-Feb-2021', '05:46 AM'),
(162, 'Patrick Skiles', 'andrew.mcfadzen@hotmail.com', 'Harbor', 'blockchains', '34', '23.129.64.231', 'Pending', '10-Feb-2021', '09:08 PM'),
(163, 'Carleton Bartoletti', 'monikaminhas6@gmail.com', 'multi-tasking', 'Operations', '34', '109.70.100.46', 'Pending', '10-Feb-2021', '11:22 PM'),
(164, 'Javier Jomez', 'awardnotification2021@gmail.com', 'WINNING  NOTIFICATION.', 'LA PRIMITIVA  LOTTERY AWARD, MADRID SPAIN \r\nYour Reference: No: FU/578629K \r\nCongratulations! Your E-mail address has won With winning lucky number No:3 26 31 35 46 49, The results for the Internet users were released. \r\nThis E-mail lottery was sponsored by International software organization, Your e-mail address was attached to the lucky number  that was how your E-mail won the lump sum amount. \r\nPlease contact your claims agent/legal office: Pedro Jose, to being your claims call:Tel:+34 672 520 003 and Fax:+34 91 272 50 79 \r\nEmail: Awardnotificatios1721@gmx.com,  Email: winingnotifications2021@gmail.com. \r\nYours Sincerely. \r\nDr. Don Javier Jomez \r\nReply To This Email: Awardnotificatios1721@gmx.com \r\nReply To This Email: winingnotifications2021@gmail.com \r\nPhone: +34 672 520 000 \r\nPresident  International Relations Department.', '72', '185.189.114.115', 'Pending', '11-Feb-2021', '01:47 AM'),
(165, 'Joe Miller', 'info@domainregistercorp.com', '0YH213IM00', 'Notice#: 491343\r\nDate: 2021-02-11  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN ifi9.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain ifi9.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain ifi9.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-service.ga/?n=ifi9.com&r=a&t=1613015254&p=v3\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN ifi9.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-service.ga/?n=ifi9.com&r=a&t=1613015254&p=v3\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification ifi9.com will EXPIRE WITHIN 24 HOURS after reception of this email', '67', '144.172.106.92', 'Pending', '11-Feb-2021', '09:17 AM'),
(166, 'Andres Bone', 'andres.bone@gmail.com', '', 'Hi,\r\n\r\nAre you presently utilizing Wordpress/Woocommerce or maybe will you plan to use it sooner or later ? We offer a little over 5000 premium plugins and also themes to download : http://shortxp.buzz/BsPaL\r\n\r\nThanks,\r\n\r\nAndres', '58', '191.102.156.131', 'Pending', '11-Feb-2021', '11:01 AM'),
(167, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Hi, Eric here with a quick thought about your website ifi9.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '107.175.39.25', 'Pending', '14-Feb-2021', '02:55 AM'),
(168, 'Alena Glover', 'coley1108@yahoo.com', 'Indiana', 'disintermediate', '34', '185.220.100.255', 'Pending', '14-Feb-2021', '08:44 PM'),
(169, 'Wallace Rodrigues', 'wallace@sendbulkmails.com', '', 'Use SendBulkMails.com to run email campaigns from your own private dashboard.\r\n\r\nCold emails are allowed and won&apos;t get you blocked :)\r\n\r\n- 1Mil emails / mo @ $99 USD\r\n- Dedicated IP and Domain Included\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n- Quick and easy setup with extended support at no extra cost.\r\n- Cancel anytime!\r\n\r\nRegards,\r\nwww.SendBulkMails.com', '72', '52.229.16.21', 'Pending', '15-Feb-2021', '04:11 PM'),
(170, 'Mike Flatcher\r\n', 'no-reply@google.com', 'cheap monthly SEO plans', 'Hi there \r\n \r\nI have just checked  ifi9.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Flatcher\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '52', '109.248.149.25', 'Pending', '15-Feb-2021', '09:54 PM'),
(171, 'Shawn Weissnat', 'timbrenwol@aol.com', 'Knolls', 'Tuna', '34', '192.160.102.170', 'Pending', '16-Feb-2021', '12:04 PM'),
(172, 'MR HO CHOI', 'andrewyoung4545@gmail.com', 'INVESTMENT PORTFOLIO', 'Greetings, I have been tasked with identifying, initiating and possibly developing a business partnership with you / your company. I checked recommendation sites, corporate social networking sites, interviewed a few list investors and made a list of potential partners that identified you and your business. I visited your website and saw your products. I have to say that I am very impressed with the quality of your products. Therefore, we would like your company to ship large quantities of your product to our country for commercial use. Please contact me for more information on our requirements / orders and shipping deadlines. Best regards. HO CHOI email ..... hchoi382@gmail.com', '66', '37.120.152.102', 'Pending', '16-Feb-2021', '07:25 PM'),
(173, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'My name’s Eric and I just came across your website - ifi9.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like ifi9.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '198.46.201.167', 'Pending', '18-Feb-2021', '05:55 PM'),
(174, 'Carmel Newcomb', 'carmel@buy-rapid-tests.com', '', 'Get your own Covid-19 test results in 15 minutes on Buy-Rapid-Tests.com\r\n\r\nSimple 3 step process - anyone can do it.\r\n\r\nWe have FDA Authorized Covid-19 Rapid Test Kits - Most orders ship standard within 48 hours.\r\n\r\nOrder minimum is only - 1 Box \r\n\r\nEach Box includes:\r\n- 25 individual Covid-19 tests cassettes\r\n- 25 blood droppers\r\n- 1 bottle of buffer/testing solution\r\n\r\nBuy as many boxes as you would like.\r\n\r\nThese tests are perfect for your organization, business, restuarant or group.\r\n\r\nPrice is $36 per test (25 tests per box) and that includes shipping to any location for $50\r\n\r\nWe offer 10% wholesale price breaks for quantities of 5 boxes or more.\r\n\r\nRegards,\r\nBuy-Rapid-Tests.com', '34', '70.37.78.209', 'Pending', '19-Feb-2021', '08:42 PM'),
(175, 'Sherlyn', 'info@ifi9.com', '', 'You Won&apos;t Want To Miss This!  50 pcs medical surgical masks only $1.99 and N95 Mask $1.79 each.  \r\n\r\nOnly 10 orders left!  Get yours here: pharmacyusa.online\r\n\r\nTo your success,\r\n\r\nhow to take screenshot in laptop - ifi9.com', '53', '208.84.155.69', 'Pending', '20-Feb-2021', '01:28 AM'),
(176, 'Wilfrid McDermott', 'tigarchoi@hotmail.com', 'quantify', 'Sleek', '34', '199.249.230.170', 'Pending', '22-Feb-2021', '05:02 AM'),
(177, 'James Cruz', 'mmzzx101@gmail.com', 'Financial Loan', 'WE ARE; \r\n \r\nFunding any company in any kind of project; Financing Debt/ loans/Investment Opportunity Etc..., with \r\nonly 4% interest for 10 Years, with 3 years grace of return. \r\n \r\nRegards \r\nMHA. \r\nWhatsApp:+44 7537 166152 \r\nMmzzx101@gmail.com', '72', '185.206.225.27', 'Pending', '22-Feb-2021', '06:48 PM'),
(178, 'WilliamSox', 'artofnegotiations@theonlinepublishers.com', 'How negotiations work! A must read book', 'LISTENEVERYHOW – How Negotiations Work, is an easy-to-read book and pragmatic approach to get the best results from a negotiation. It is adaptable in content and style – as a story book for leisure readers, life skills manual for entrepreneurs and professionals, or even as a business school handbook. \r\n \r\nThis book is written with clarity and easy eloquence of a man who knows what he is talking about, telling captivating stories in well sequenced chapters that all end with enticing nuggets. A rudiment skill in negotiation is listening and the major themes of this book are reflective of the insights that make the difference in negotiations. \r\n \r\nYou are one click away from having this excellent book for just $5.99 https://www.amazon.com/dp/B08W5DMQV3/ref=cm_sw_r_cp_awdb_t1_6E8T8CE1VW6P49PPQF8F_nodl', '67', '51.77.53.174', 'Pending', '24-Feb-2021', '04:18 AM'),
(179, 'SendBulkMails.com', 'carma@sendbulkmails.com', '', 'SendBulkMails.com allows you to reach out to clients via cold email marketing.\r\n\r\n- 1Mil emails starter package\r\n- Dedicated IP and Domain Included\r\n\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n\r\n- Quick and easy setup with extended support at no extra cost.\r\n\r\n- Cancel anytime!\r\n\r\nSendBulkMails.com', '58', '52.162.255.131', 'Pending', '25-Feb-2021', '03:17 PM'),
(180, 'Meliesehig', 'sankovy4@foxmaily.com', 'игровые автоматы онлайн бонусом', 'как положено, игра пираты автоматы <a href=https://onlinecasino-like.com>onlinecasino-like.com</a> \r\n \r\n----- \r\nа впрочем, muzmo скачать песни 2020 https://muzaza.ru \r\n \r\n----- \r\n<a href=https://igrovye-avtomaty.net/all/>автоматы без регистрации бесплатно</a> \r\n \r\nкак ни говорите чтите, золото партии автомат. \r\n \r\n----- \r\nпомимо всего локрийскому, музмо ру бесплатно клипы <a href=https://muzmurka.ru>скачать бесплатно музыку</a>', '52', '51.75.146.127', 'Pending', '26-Feb-2021', '06:36 PM'),
(181, 'Claude', 'info@ifi9.com', '', 'You Won&apos;t Want To Miss This!  \r\n\r\nBuy N95 Mask only $1.69 each and get 10 pcs of medical surgical masks for FREE.  \r\n\r\nLimited Time Offer! + Fast Shipping!  Get yours here: pharmacyusa.online\r\n\r\nMany Thanks,\r\n\r\nhow to take screenshot in laptop - ifi9.com', '53', '89.187.164.245', 'Pending', '27-Feb-2021', '06:54 PM'),
(182, 'Mike Fraser\r\n', 'see-email-in-message@monkeydigital.co', 'Increase sales for ifi9.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your ifi9.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your ifi9.com to have a DA between 50 to 60 points in Moz with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Fraser\r\n \r\nsupport@monkeydigital.co \r\nMonkey Digital', '71', '31.171.152.131', 'Pending', '01-Mar-2021', '11:01 PM'),
(183, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Hi, Eric here with a quick thought about your website ifi9.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '50.3.89.120', 'Pending', '03-Mar-2021', '04:58 PM'),
(184, 'Rebbeca', 'rebbeca@ifi9.com', '', 'Morning \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 19.99 dollars.  If interested, please visit our site: framesoutlet.online\r\n \r\nEnjoy, \r\n \r\nifi9.com', '53', '89.187.164.244', 'Pending', '05-Mar-2021', '01:04 PM'),
(185, 'Mario Gonzalez', 'mysolutions360@gmail.com', 'Get on the 1rst page of Google or don’t pay', 'Hi, are you still in charge of ifi9.com ? \r\n \r\nIf you take 30 sec to read this email, we could help you 2X-5X your business. \r\n \r\nMost SEO companies will ask you to pay upfront with no guarantee that your website will rank on Google. \r\n \r\nWe are different ... \r\n \r\nOur company specializes in Pay Per Performance SEO. Which means – \r\nWe get your business on the first page of Google before we get paid for our service. \r\n \r\nI know that’s a bold statement but we can back it up with 9 years of success in this industry. \r\n \r\nIf you’re interested in getting on the first page of Google, and only pay if you get there, \r\nlet me know when is a good time for a call. \r\n \r\nGet full details here or send us a message to mcmarketing360@hotmail.com: \r\nhttps://getmoreclientsfaster.com/performance-based-seo/', '66', '89.187.168.130', 'Pending', '05-Mar-2021', '09:43 PM'),
(186, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with ifi9.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out ifi9.com.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '185.122.170.72', 'Pending', '06-Mar-2021', '02:19 AM'),
(187, 'Wilson Schmitt', 'wilson@sesforyou.com', '', 'Hi,\r\n \r\nI&apos;m always asked what is the quickest way to make money online, when you are just starting out? Well here&apos;s the definitive answer that question:\r\n \r\n==> https://sesforyou.com\r\n \r\nNew Book Reveals How I Built A 7-Figure Online Business Using Nothing But Ethical Email Marketing To Drive Revenue, Sales and Commissions...\r\n \r\n==> https://sesforyou.com\r\n \r\nRegards,\r\nSesForYou.com', '34', '104.215.112.150', 'Pending', '08-Mar-2021', '08:02 AM'),
(188, 'Mike Green\r\n', 'no-replylek@gmail.com', 'Local SEO for more business', 'Good Day \r\n \r\nI have just analyzed  ifi9.com for  the current Local search visibility and seen that your website could use an upgrade. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart enhancing your local visibility with us, today! \r\n \r\nregards \r\nMike Green\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', '35', '84.17.47.8', 'Pending', '10-Mar-2021', '01:14 AM'),
(189, 'Cecile', 'cecile@ifi9.com', '', 'The #1 Best Dog Bed Of 2021\r\nGet yours now, we&apos;re currently having a sale & Free Shipping\r\nShop now: dogloverclub.store\r\n\r\nhow to take screenshot in laptop - ifi9.com', '53', '89.39.107.209', 'Pending', '10-Mar-2021', '06:48 PM'),
(190, 'Richard Polter', 'ryabchenko.k@yahoo.com', '*Windows 10 Pro license key for just $19.99', 'Struggling to get cheap and legit license for your Windows 10? We’re here to help you. \r\n \r\nWindows 10 Professional lifetime license is just for $19.99 \r\n \r\n350+ reviews from real buyers! \r\n \r\nWhat are you waiting for? Buy it right now: https://cutt.ly/Windows-10-Pro-License-Key', '34', '66.115.142.190', 'Pending', '12-Mar-2021', '06:13 AM'),
(191, 'Evelyne', 'evelyne@ifi9.com', '', 'Hi\r\n\r\nBuy face mask to protect your loved ones from the deadly CoronaVirus.  We wholesale N95 Masks and Surgical Masks for both adult and kids.  The prices begin at $0.19 each.  If interested, please check our site: pharmacyoutlets.online\r\n\r\nKind Regards,\r\n\r\nhow to take screenshot in laptop - ifi9.com', '53', '37.120.244.102', 'Pending', '12-Mar-2021', '06:32 AM'),
(192, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Hey, this is Eric and I ran across ifi9.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '45.152.198.237', 'Pending', '12-Mar-2021', '01:54 PM'),
(193, 'Ryddm Marketing', 'ryddmmarketing@gmail.com', 'New Streaming App: Ryddm', 'Hi! \r\nWe came across you and decided that we should reach out to give you the opportunity to try out our new audiovisual streaming app before we release it to the general public. Ryddm is a hybrid of IG and Spotify- and allows you to view entertaining content, discover new music, and even become an influencer yourself! The best part, it’s 100% FREE to listen. Ditch your streaming platform today. \r\n \r\nRegister for FREE at https://fan.ryddm.com/auth/register \r\nBest, \r\nRyddm Marketing', '76', '84.17.49.73', 'Pending', '13-Mar-2021', '11:15 PM'),
(194, 'Myrtis', 'myrtis@ifi9.com', '', 'Good day \r\n\r\nThe complete selection of all Ray-Ban sunglasses styles available online and only 19.99 dollars. \r\n\r\nInsanely special offer for the next 24 hours only! Get yours here: designerframes.online\r\n\r\nYou Won&apos;t Want To Miss This!\r\n\r\nAll the best, \r\n\r\nMyrtis\r\nhow to take screenshot in laptop - ifi9.com', '53', '91.219.212.214', 'Pending', '15-Mar-2021', '12:17 AM'),
(195, 'Cristina Walsh', 'bikki5408@godaddy.com', 'Brunei Dollar', 'platforms', '34', '45.128.133.242', 'Pending', '15-Mar-2021', '01:06 PM'),
(196, 'Mike Aldridge\r\n', 'no-reply@google.com', 'whitehat monthly SEO plans', 'Hi there \r\n \r\nI have just analyzed  ifi9.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\nregards \r\nMike Aldridge\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '52', '84.17.51.35', 'Pending', '15-Mar-2021', '07:58 PM'),
(197, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Hi, Eric here with a quick thought about your website ifi9.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '165.231.105.181', 'Pending', '18-Mar-2021', '01:28 PM'),
(198, 'Antonio Bins', 'muthsam@habmalnefrage.de', 'Cheese', 'Sleek', '34', '185.220.101.142', 'Pending', '19-Mar-2021', '08:54 AM'),
(199, 'Lilliana', 'lilliana@ifi9.com', '', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from Neck Pain\r\nTry NeckFlexer & Relieve Neck Pain Effortlessly In 10 Min!\r\nSave 50% OFF + FREE Worldwide Shipping\r\n\r\nShop Now: neckflexer.online\r\n\r\nLilliana', '53', '66.115.173.163', 'Pending', '20-Mar-2021', '06:12 AM'),
(200, 'Rickie', 'rickie@ifi9.com', '', 'Good Morning \r\n\r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nClick here: caredogbest.online\r\n\r\nBest regards, \r\n\r\nRickie\r\nhow to take screenshot in laptop - ifi9.com', '53', '69.10.63.246', 'Pending', '21-Mar-2021', '09:48 PM'),
(201, 'Taren', 'taren@ifi9.com', '', 'Hello \r\n\r\nBody Revolution - Medico Postura™ Body Posture Corrector\r\nImprove Your Posture INSTANTLY!\r\nGet it while it&apos;s still 60% OFF!\r\nFREE Worldwide Shipping!\r\n\r\nGet yours here: medicopostura.online\r\n\r\nThe Best, \r\n\r\nTaren\r\nhow to take screenshot in laptop - ifi9.com', '53', '91.219.212.222', 'Pending', '23-Mar-2021', '08:10 PM'),
(202, 'Joe', 'info@domainregistercorp.com', 'ATTENTION', 'Notice#: 491343<br>Date: 2021-03-24  <br><br>YOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!<br><br>YOUR DOMAIN ifi9.com WILL BE TERMINATED WITHIN 24 HOURS<br><br>We have not received your payment for the renewal of your domain ifi9.com<br><br>We have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain ifi9.com<br><br>CLICK HERE FOR SECURE ONLINE PAYMENT: https://registerdomains.ga/?n=ifi9.com&r=a&t=1616512231&p=v13<br><br>IF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN ifi9.com WILL BE TERMINATED<br><br>CLICK HERE FOR SECURE ONLINE PAYMENT: https://registerdomains.ga/?n=ifi9.com&r=a&t=1616512231&p=v13<br><br>ACT IMMEDIATELY. <br><br>The submission notification ifi9.com will EXPIRE WITHIN 24 HOURS after reception of this email', '56', '192.241.106.135', 'Pending', '23-Mar-2021', '08:40 PM'),
(203, 'Preston Macdowell', 'preston@bestlocaldata.com', '', 'Hello,\r\n\r\nBestLocalData.com has a special package you get any group of databases for $49 or $249 for all 16 databases and unlimited emails for a year(Domain, IP, Dashboard included).\r\n\r\nYou can purchase it on BestLocalData.com and see samples if you are interested.\r\n', '76', '52.176.55.20', 'Pending', '24-Mar-2021', '08:07 PM'),
(204, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with ifi9.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out ifi9.com.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '45.152.199.170', 'Pending', '26-Mar-2021', '02:53 PM'),
(205, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found ifi9.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://talkwithcustomer.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '196.242.10.202', 'Pending', '28-Mar-2021', '11:40 AM'),
(206, 'Linda Miller', 'lindamillerleads@gmail.com', '', 'How To Master Internet Lead Conversion?\r\n\r\nI spent the last 10+ years generating, calling and closing Internet leads. I will be sharing my decade long conversion code for you to copy during this new, free webinar!\r\nDuring the webinar, I will show you:\r\n\r\nEvery business needs to capture more leads, create more appointments, and close more deals.\r\n\r\nIf you commit to mastering the content in this session, you will earn more money immediately– not in six months or a year, but literally as soon as you put your new knowledge to work. I have used this method on 1,000&apos;s of Internet leads of all price points. \r\n\r\nIf you want Internet leads, I have the key to CONVERTING them. Hope you can make it... https://TalkWithWebTraffic.com/Webinar\r\n\r\nIf getting more Hot Phone Leads is a part of your business plan (and why wouldn&apos;t it be?), I&apos;ve got great news for you.\r\n\r\n1. 12 ways to generate seller leads\r\n2. How to get seller leads on the phone\r\n3. What to say on the phone so you get instant sales\r\n4. The Key to SMS Marketing\r\n5  Never Cold Call Again\r\n6. Better leads = Faster conversions\r\n7. The four keys to inside sales success\r\n8. The 10 steps to a perfect sales call with an Internet lead\r\n\r\nMore than 7,000 people have already registered. The last time I did a webinar with Top Producers, hundreds of people got locked out and could only watch the replay. Get your spot now and tune in early!\r\n\r\n==> Save my spot https://TalkWithWebTraffic.com/Webinar\r\n\r\nWe&apos;ve become obsessed with making sure our clients are converting the leads we generate for them. \r\n\r\nHow much are you getting back in commissions compared to how much are you spending on advertising? But what is even better than a great ROI is a quick ROI. During this live webinar I will show you how we can help you generate higher quality leads that are easier to convert, fast.\r\n\r\n==>  Register at https://TalkWithWebTraffic.com/Webinar\r\n\r\nYour #1 Fan, \r\nLinda Miller\r\nBe there or be square.\r\n\r\nIf you&apos;d like to unsubscribe click here http://talkwithwebtraffic.com/unsubscribe.aspx?d=ifi9.com\r\n', '73', '202.14.4.152', 'Pending', '07-Apr-2021', '07:06 AM'),
(207, 'Bobbie Makin', 'bobbie.makin@gmail.com', '', 'For Anyone Looking To Start, Scale and Grow A Digital Business In 2021\r\n\r\nNew Book Reveals How I Built A 7-Figure Online Business Using Nothing But Ethical Email Marketing To Drive Revenue, Sales and Commissions...\r\n\r\n$4.99 to access the secret email system.\r\n\r\nSesforyou.com!', '66', '52.237.178.178', 'Pending', '08-Apr-2021', '05:45 PM'),
(208, 'Mike Dowman\r\n', 'no-replylek@gmail.com', 'Local SEO for more business', 'Hello \r\n \r\nI have just analyzed  ifi9.com for its Local SEO Trend and seen that your website could use a boost. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart increasing your local visibility with us, today! \r\n \r\nregards \r\nMike Dowman\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', '70', '86.106.74.252', 'Pending', '09-Apr-2021', '11:02 PM'),
(209, 'Gabriel Angelo', 'g.a7.652719@gmail.com', 'Re; Hello', 'Hello, \r\n \r\nI&apos;m Gabriel Angelo, My Company can bridge fund for your new or ongoing Business. Do let me know when you receive this message for further procedure. \r\n \r\nYou can reach me using this email address: mailgabby773@gmail.com \r\n \r\nRegards, \r\nGabriel Angelo', '58', '84.17.48.140', 'Pending', '12-Apr-2021', '09:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `map` varchar(5000) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `google` varchar(500) NOT NULL,
  `github` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `license` varchar(500) DEFAULT 'Invalid Lisence',
  `reg_date` varchar(500) DEFAULT '01-01-1989',
  `tagLine` varchar(500) DEFAULT '',
  `banner` varchar(500) DEFAULT NULL,
  `bannerStatus` varchar(500) DEFAULT 'Color',
  `color` varchar(500) DEFAULT NULL,
  `color2` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `rotation` varchar(500) DEFAULT '36',
  `default_img` varchar(500) DEFAULT 'Show',
  `video` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `meta` varchar(650) DEFAULT NULL,
  `metakey` varchar(500) DEFAULT NULL,
  `mailingemail` varchar(500) DEFAULT NULL,
  `logo` varchar(5000) DEFAULT NULL,
  `privacy` text DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `youtube` varchar(5000) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `uid` varchar(500) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `activate` varchar(500) DEFAULT 'false',
  `setup` varchar(500) DEFAULT 'false',
  `step` varchar(500) DEFAULT '1',
  `api` varchar(500) DEFAULT NULL,
  `secret` varchar(500) DEFAULT NULL,
  `page_view` varchar(500) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `phone`, `address`, `map`, `facebook`, `twitter`, `google`, `github`, `linkedin`, `license`, `reg_date`, `tagLine`, `banner`, `bannerStatus`, `color`, `color2`, `url`, `rotation`, `default_img`, `video`, `instagram`, `meta`, `metakey`, `mailingemail`, `logo`, `privacy`, `text`, `youtube`, `title`, `lname`, `fname`, `uid`, `about`, `activate`, `setup`, `step`, `api`, `secret`, `page_view`) VALUES
(1, 'Our Portal', 'support@ourportal.in', '9826797487', 'Patel Nagar, Rajgarh (Madhya Pradesh), 465661', 'Delhi', 'https://facebook.com/workingbyks', 'https://linkedin.com/?', '', '', 'https://in.linkedin.com/in/theabhinaykumar', '', '1-1-1989', 'Any website any time', 'https://images.unsplash.com/photo-1475669698648-2f144fcaaeb1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'Video', '#eb3498', 'cyan', 'https://rgjconsult.com/', '19', 'Hide', 'https://mockvel.com/banner.mp4', 'https://www.instagram.com/theabhinaykumar_', 'This is meta description', 'this is keywords', 'mockvel@gmail.com', '29042021120719.png', '<h1 class=\"ql-align-center\"><span style=\"color: rgb(86, 86, 86);\">Privacy Policy @&nbsp; </span></h1><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Thank you for visiting&nbsp;</span><a href=\"http://localhost/rj/www.medsengage\" target=\"_blank\" style=\"color: rgb(86, 86, 86);\">MedsEngag</a><a href=\"http://localhost/rj/www.medsengage\" target=\"_blank\" style=\"color: rgb(230, 0, 0);\">e.com&nbsp;</a><span style=\"color: rgb(230, 0, 0);\">â„¢. We respect your individual privacy and value your confidence in us. We hold the privacy of your medical and personal information in the highest regard thus safeguarding it is a matter of th</span><span style=\"color: rgb(86, 86, 86);\">e utmost importan</span><span style=\"color: rgb(86, 86, 86); background-color: rgb(255, 153, 0);\">ce. You should know we are committed to meeting and exceeding the data privacy standards established by applicable Canadian law i.e&nbsp;.&nbsp;&nbsp;&nbsp;Personal Information Protection and Electronic Documents Act&nbsp;(PIPEDA).&nbsp;As a part of this commitment&nbsp;to&nbsp;protecting our customerâ€™s privacy, we have determined and implemented 10 privacy parameters t</span><span style=\"color: rgb(86, 86, 86);\">o govern our actions.</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">The&nbsp;Privacy Parameters&nbsp;are as follows:</span></p><ul><li><span style=\"color: rgb(86, 86, 86);\">Parameter 1 -Accountability:&nbsp;We hold the responsibility of maintaining and protecting personal and medical information under our control. In compliance with PIPEDA law, we have designated one person accountable for MedsEngage.comâ„¢ to ensure everything falls under privacy parameters.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 2 -Identifying purposes:&nbsp;We shall identify the purpose for which personal information is collected at or prior to the time of collection from the customer or the customerâ€™s authorized person.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 3 - Consent:&nbsp;The customer knowledge and consent are required for the collection, use, and disclosure of personal information except where the collection, use, and disclosure is needed and permitted by applicable law.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 4 - Limiting Collection:&nbsp;The personal details collected will be limited and necessary to the purpose as identified by MedsEngage.comâ„¢. All the information will be collected by fair and lawful means.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 5 -&nbsp;Limiting Use, Disclosure, and Retention:&nbsp;The customerâ€™s personal information will only be used or disclosed for the purpose it is collected unless consented by the customer or permitted and applicable by the law. Personal information will only be retained for the period of time it is required to fulfill professional or legal liabilities.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 6 - Accuracy:&nbsp;MedsEngage.comâ„¢ must maintain personal information in an accurate, complete and up-to-date form as it is necessary to fulfill the purpose for which it is collected and to be used.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 7 - Safeguarding Personal Information:&nbsp;Personal information at MedsEngage.comâ„¢ is protected by security technologies and safeguards against unauthorized access and misuse that are appropriate to the sensitivity of the collected information.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter&nbsp;8 -Openness and Transparency:&nbsp;MedsEngage.comâ„¢ will provide customers with information regarding privacy policy and data management that involves their personal information.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter&nbsp;9 -Customer Access&nbsp;:&nbsp;Upon request and with reasonable justification customer should be informed of the existence, use, and disclosure of their personal information and shall be given access to it.&nbsp;Customers should be able to verify the accuracy and completeness of their personal information and may request that it be amended if required.</span></li><li class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Parameter 10 -Handling Customer Complaints and Suggestions:&nbsp;Customers may direct their questions or enquires with respect to the Privacy parameters or about our practices by contacting the designated person accountable for privacy at MedsEngage.comâ„¢ or email us at&nbsp;</span><a href=\"mailto:info@medsengage.com\" target=\"_blank\" style=\"color: rgb(86, 86, 86);\">info@medsengage.com&nbsp;</a><span style=\"color: rgb(86, 86, 86);\">.</span></li></ul><p class=\"ql-align-justify\"><span style=\"color: rgb(118, 181, 27);\">The Information we collect?</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">We collect and uses only such information that is necessary for&nbsp;&nbsp;providing our services and fulfilling your orders. It typically includes the following personal information:</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Name,&nbsp;&nbsp;Mailing address,&nbsp;&nbsp;E-mail address,&nbsp;Telephone numbers,&nbsp;&nbsp;Occupation,&nbsp;&nbsp;Employment status,&nbsp;&nbsp;Referral source,&nbsp;The name of your primary physician and his or her contact information,&nbsp;&nbsp;Age,&nbsp;&nbsp;Height,&nbsp;&nbsp;Weight,&nbsp;&nbsp;Sex,&nbsp;&nbsp;Date of birth,&nbsp;&nbsp;The existence and types of drug allergies,&nbsp;&nbsp;Medications requested,&nbsp;&nbsp;Your personal medical history information,&nbsp;&nbsp;Details of your existing medications,&nbsp;</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Credit card information (including card type and number, expiry date,&nbsp;</span>and&nbsp;<span style=\"color: rgb(86, 86, 86);\">the name of the&nbsp;</span>cardholder&nbsp;<span style=\"color: rgb(86, 86, 86);\">,&nbsp;&nbsp;&nbsp;Banking information (including transit and account numbers) Prescription information.</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(118, 181, 27);\">How we use the information?</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">We collect, use and disclose personal information to serve you better. We also use this information to improve our services, prevent or detect fraud or abuse of&nbsp;&nbsp;our website and enable third parties to carry out technical, logistical or other functions on our behalf. We may provide your personal information to an affiliated company, a licensed pharmacy or to a prescribing physician in order to fulfill your prescription.</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">1.&nbsp;We use your personal information to communicate with you, enhance your visit to our website, allow processing of your prescription orders and effectively provide the products and services you have requested.</span></p><h1 class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">2.&nbsp;In some instances such as legal&nbsp;&nbsp;proceedings or court orders, we may also be required to disclose certain information to authorities. Only the information specifically requested is disclosed and we will take precautions to satisfy ourselves that the authorities who are making the request have legitimate grounds to do so.</span></h1><h1 class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">3.&nbsp;We will not rent, sell, or give away your personally identifiable medical information to anyone for marketing purposes. We will only use and share personally identifiable medical information for specifically requested transactions and for those purposes required or permitted by law.</span></h1><h1 class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">4.&nbsp;We share information where we are lesdsadasdddddddddddddd</span></h1><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">You can access all your personally identifiable information that we collect online and maintain it by calling, emailing or logging into your account online. To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections. We use this procedure to better safeguard your information&nbsp;.&nbsp;You can correct factual errors in your personally identifiable information by sending us a request that credibly shows an error.</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(118, 181, 27);\">How to contact us?</span></p><p class=\"ql-align-justify\"><span style=\"color: rgb(86, 86, 86);\">Customers may direct any questions or enquire&nbsp;&nbsp;with respect to our practices or your personal information by contacting our Privacy Officer, as follows:&nbsp;</span><a href=\"mailto:privacy@medsengage.com\" target=\"_blank\" style=\"color: rgb(86, 86, 86);\">privacy@medsengage.com&nbsp;</a><span style=\"color: rgb(86, 86, 86);\">Facsimile No. (TOLL-FREE) 1-800-986-4714 Place An Order Online Set Up An Online Account</span></p><p><br></p>', 'Free Consult', '', 'Flipkart Full Offer', 'Shil', 'Kanai', '1', NULL, 'false', 'false', '2', 'rzp_test_9TB3asShG3RvdV', 'zrpWBMrytnHq5UMUeVikNgfn', '386');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` varchar(500) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sender` varchar(500) DEFAULT NULL,
  `title` varchar(5000) DEFAULT NULL,
  `reply` varchar(50000) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `description`, `date`, `time`, `status`, `sender`, `title`, `reply`, `phone`) VALUES
(1, 'Kanai', 'The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.\r\n\r\nBreaking it down, here’s how it works:\r\n\r\nContainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and extra large devices, but not the first xs breakpoint).\r\nYou can use predefined grid classes (like .col-4) or Sass mixins for more semantic markup.\r\nBe aware of the limitations and bugs around flexbox, like the inability to use some HTML elements as flex containers.', '8-jan-2021', '9.09Am', 'Read', 'kanaishil419@gmail.com', 'Breaking it down, here’s how it works:', 'Containers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.\r\nRows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.\r\nIn a grid layout, content must be placed within columns and only columns may be immediate children of rows.\r\nThanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.\r\nColumn classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use .col-4.\r\nColumn widths are set in percentages, so they’re always fluid and sized relative to their parent element.\r\nColumns have horizontal padding to create the gutters between individual columns, however, you can remove the margin from rows and padding from columns with .no-gutters on the .row.\r\nTo make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint: all breakpoints (extra small), small, medium, large, and extra large.\r\nGrid breakpoints are based on minimum width media queries, meaning they apply to that one breakpoint and all those above it (e.g., .col-sm-4 applies to small, medium, large, and e', NULL),
(2, 'Kanai 2', 'This is testing contacts ', '8-jan-2021', '9.09Am', 'Deleted', 'kanaishil419@gmail.com', NULL, '1', NULL),
(4, 'Web Developer Kanai', 'Hello Dear ', '27-Apr-2021', '09:14 PM', 'Deleted', 'developer@kanaiconsult.com', NULL, NULL, NULL),
(6, 'my name ', 'hooooooo  ', '05-May-2021', '01:27 PM', '', 'name@gmsil.com', NULL, NULL, NULL),
(7, 'Web Developer Kanai', 'Just testing contact form . Thanks ', '09-May-2021', '10:10 AM', '', 'developer@kanaiconsult.com', 'Development Purpose', NULL, '8101979855');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `item` varchar(500) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `transactionId` varchar(5000) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `qty` varchar(500) DEFAULT NULL,
  `billUrl` varchar(50000) DEFAULT NULL,
  `price` varchar(500) DEFAULT '0',
  `delivery_mode` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `item`, `pid`, `uid`, `address`, `status`, `date`, `time`, `transactionId`, `paid`, `qty`, `billUrl`, `price`, `delivery_mode`) VALUES
(69, 'Kanai', 'kanaishil419@gmail.com', '7478596100', 'Mouse', '100', '1', 'Raiganj - WB', 'Success', '07-May-2021', '11:34 AM', 'pay_H7nT0sItivqIkb', '', '1', NULL, '500', 'Digital Mode'),
(70, 'Kanai', 'kanaishil419@gmail.com', '7478596100', '', '100', '1', 'Raiganj - WB', 'Success', '07-May-2021', '11:35 AM', 'pay_H7nUCXafCpC02D', '', '1', NULL, '500', NULL),
(71, 'Kanai', 'kanaishil419@gmail.com', '7478596100', 'Avira', '99', '1', 'Raiganj - WB', 'Success', '07-May-2021', '11:38 AM', 'pay_H7nXL4KosISdsi', '', '1', NULL, '559', 'Physical Mode'),
(72, '', '', '', '', '100', '', '', 'Pending', '07-May-2021', '08:10 PM', '', '', '1', NULL, '500', NULL),
(73, 'Mukesh Kushwaha', 'shivohamcreation@gmail.com', '7478596100', '', '100', '19', 'Rajgarh, Madhya Pradesh', 'Pending', '07-May-2021', '08:13 PM', '', '', '1', NULL, '500', NULL),
(74, 'Abhijeet Anand', 'abhijeet.anand@wideup.in', '', 'Quick Heal Antivirus  ', '96', '24', 'Please Change Address', 'Success', '10-May-2021', '09:27 PM', 'pay_H99AcnWq4PWvxK', '', '1', NULL, '559', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `title`, `status`) VALUES
(1, 'Admin', ''),
(2, 'Author', ''),
(3, 'Subscriber', ''),
(4, 'Developer', ''),
(5, 'Manager', ''),
(6, 'Content Writer', ''),
(7, 'viewer', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `category` varchar(500) DEFAULT NULL,
  `author` varchar(5000) DEFAULT NULL,
  `uid` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `afurl` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `category` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `stock` varchar(500) DEFAULT '1',
  `qty` varchar(500) DEFAULT '1',
  `tax` varchar(500) DEFAULT NULL,
  `sale` varchar(500) DEFAULT NULL,
  `author` varchar(500) DEFAULT NULL,
  `delivery_type` varchar(500) DEFAULT NULL,
  `brand` varchar(500) DEFAULT NULL,
  `version` varchar(500) DEFAULT NULL,
  `setup` varchar(50000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `thumbnail`, `date`, `status`, `time`, `category`, `price`, `stock`, `qty`, `tax`, `sale`, `author`, `delivery_type`, `brand`, `version`, `setup`) VALUES
(87, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(88, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(89, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(90, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(91, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(92, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(93, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(94, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(95, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(96, 'Quick Heal Antivirus  ', NULL, '07052021113738.png', '07-May-2021', '', '11:37 AM', 'antivirus', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021113738.'),
(97, 'Avira XP', NULL, '07052021095628.png', '07-May-2021', 'Deleted', '09:56 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095628.'),
(98, 'Quick Heal Internet Security', NULL, '07052021100231.png', '07-May-2021', '', '10:02 AM', 'internet security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021100231.exe'),
(99, 'Avira', NULL, '07052021095907.png', '07-May-2021', '', '09:59 AM', 'Mobile Security', '559', '1', '1', NULL, NULL, NULL, 'Digital Mode', 'Avira Brand', '1.1', '07052021095907.ttf'),
(100, 'Mouse', NULL, '07052021101550.png', '07-May-2021', '', '10:15 AM', 'Accessories', '500', '1', '1', NULL, NULL, NULL, 'Physical Mode', 'HP', '2.9', '07052021101550.');

-- --------------------------------------------------------

--
-- Table structure for table `product_key`
--

CREATE TABLE `product_key` (
  `id` int(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `product_key` text NOT NULL,
  `uid` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `validity` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_key`
--

INSERT INTO `product_key` (`id`, `pid`, `product_key`, `uid`, `date`, `time`, `status`, `validity`) VALUES
(34, '99', '5OOF780CJHVCH00121', '1', '07-May-2021', '11:38 AM', 'Block', '3.0 Y'),
(35, '96', 'wersdthvgjb', '24', '10-May-2021', '09:27 PM', 'Block', '2.0 Y');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(255) NOT NULL,
  `thumbnail` varchar(25500) NOT NULL,
  `heading` varchar(5000) NOT NULL,
  `heading2` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `button_url` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `thumbnail`, `heading`, `heading2`, `price`, `button_text`, `button_url`, `status`) VALUES
(5, '26042021093701.png', '', '', '', '', '', 'Deleted'),
(6, '26042021094012.png', '', '', '', '', '', 'Deleted'),
(7, '26042021094029.png', '', '', '', '', '', 'Deleted'),
(8, '29042021112951.png', '', '', '', '', '', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `uid` varchar(5000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `qty` varchar(500) DEFAULT NULL,
  `pid` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `transaction_id` varchar(5000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `google` varchar(500) NOT NULL,
  `github` varchar(500) NOT NULL,
  `rank` varchar(500) NOT NULL,
  `balance` varchar(500) NOT NULL DEFAULT '0',
  `reg_date` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `profile_img` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `documents` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `expert` varchar(500) DEFAULT NULL,
  `qualification` varchar(500) DEFAULT NULL,
  `ip` varchar(500) DEFAULT NULL,
  `dob` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `subs` varchar(500) DEFAULT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `age` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `sex` varchar(500) DEFAULT NULL,
  `otp` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `map`, `facebook`, `twitter`, `google`, `github`, `rank`, `balance`, `reg_date`, `status`, `password`, `linkedin`, `profile_img`, `date`, `documents`, `description`, `expert`, `qualification`, `ip`, `dob`, `gender`, `subs`, `fname`, `lname`, `instagram`, `age`, `location`, `sex`, `otp`) VALUES
(1, 'Kanai', 'kanaishil419@gmail.com', '7478596100', 'Raiganj - WB', '', 'https://facebook.com/amarsite', 'https://linkedin.com/?', '', 'https://git.io', 'Admin', '0', '29-10-2020', 'Live', 'kanai', 'https://linkedin.com/?', 'webdeveloper+30012021021219_unnamed.jpg', NULL, NULL, NULL, NULL, NULL, '::1', '2020-12-29', 'Male', NULL, 'Kanai', 'Shil', NULL, '18-60', 'Raiganj', NULL, '6574670'),
(18, 'Kanai Shil', 'kanaishil09@gmail.com', '7478596100', 'Raiganj', '', '', '', '', '', '', '0', '25-Apr-2021', 'Live', 'kanai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Mukesh Kushwaha', 'shivohamcreation@gmail.com', '7478596100', 'Rajgarh, Madhya Pradesh', '', '', '', '', '', 'Admin', '0', '29-10-2020', 'Live', 'Shiv@portal03', 'https://linkedin.com/?', 'webdeveloper+30012021021219_unnamed.jpg', NULL, NULL, NULL, NULL, NULL, '::1', '2020-12-29', 'Male', NULL, 'Kanai', 'Shil', NULL, '18-60', 'Raiganj', NULL, '6574670'),
(21, 'mukesh', 'mukesh4u456@gmail.com', '', 'sankatmochan colony', '', '', '', '', '', '', '0', '30-Apr-2021', 'Live', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Abhijeet Anand', 'abhijeet.anand@wideup.in', '', 'Please Change Address', '', '', '', '', '', '', '0', '01-May-2021', 'Live', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Mr. Kanai', 'kanaishil100a@gmail.com', '', 'Please Change Address', '', '', '', '', '', '', '0', '04-May-2021', 'Live', 'Kanai@1234$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `category` varchar(500) DEFAULT NULL,
  `author` varchar(5000) DEFAULT NULL,
  `uid` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `afurl` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_key`
--
ALTER TABLE `product_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `product_key`
--
ALTER TABLE `product_key`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
