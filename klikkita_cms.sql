-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 12:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klikkita_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` tinytext,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `status` enum('Y','N','T') NOT NULL COMMENT 'Y : active, N : non active, T : trash',
  `trash_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('Y','N','T') NOT NULL COMMENT 'Y : active, N : non active, T : trash',
  `type` enum('Gallery','Content','Page','Slider Banner','Section') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `trash_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `status`, `type`, `create_date`, `update_date`, `trash_date`) VALUES
(1, 'Top Slider Homepage', '', 'Y', 'Slider Banner', '2016-12-04 17:14:44', '2016-12-04 17:15:52', NULL),
(2, 'Section 1', '', 'Y', 'Section', '2016-12-04 17:20:22', NULL, NULL),
(3, 'Section 2', '', 'Y', 'Section', '2016-12-04 17:20:33', NULL, NULL),
(4, 'Section 3', '', 'Y', 'Section', '2016-12-04 17:22:55', NULL, NULL),
(5, 'Section 4', '', 'Y', 'Section', '2016-12-04 17:23:56', NULL, NULL),
(6, 'Section 5', '', 'Y', 'Section', '2016-12-04 17:24:37', NULL, NULL),
(7, 'Section 6', '', 'Y', 'Section', '2016-12-04 17:25:12', NULL, NULL),
(8, 'Profile', '', 'Y', 'Page', '2017-01-05 21:17:34', NULL, NULL),
(9, 'Hubungi Kami', '', 'Y', 'Page', '2017-01-05 21:21:59', '2017-01-14 17:00:28', NULL),
(10, 'Layanan Kami', '', 'Y', 'Page', '2017-01-14 16:59:28', NULL, NULL),
(11, 'Klien Kami', '', 'Y', 'Page', '2017-01-14 17:00:45', NULL, NULL),
(12, 'Pendirian Perusahaan', '', 'Y', 'Page', '2017-01-14 17:02:01', NULL, NULL),
(13, 'Kitas - Kitap', '', 'Y', 'Page', '2017-01-14 17:04:10', NULL, NULL),
(14, 'Document Export - Import', '', 'Y', 'Page', '2017-01-14 17:04:45', '2017-01-14 17:04:58', NULL),
(15, 'Visa', '', 'Y', 'Page', '2017-01-14 17:05:29', NULL, NULL),
(16, 'Perseroan Terbatas (PT)', '', 'Y', 'Page', '2017-01-22 10:48:15', NULL, NULL),
(17, 'Persekutuan Komanditer (CV)', '', 'Y', 'Page', '2017-01-22 10:48:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `user_id` smallint(6) NOT NULL,
  `category_id` smallint(6) NOT NULL,
  `status` enum('Y','N','T') NOT NULL COMMENT 'Y : active, N : non active, T : trash',
  `picture` varchar(100) NOT NULL,
  `trash_date` datetime DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `description`, `create_date`, `update_date`, `user_id`, `category_id`, `status`, `picture`, `trash_date`, `link`) VALUES
(1, NULL, '                                                                <div class=\"col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center\">\r\n                            <div class=\"singleTesti wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;\">\r\n                                <h2>People<img class=\"testiImg\" src=\"images/logoBig.png\" alt=\"\">Top<span>Biz</span></h2>\r\n                            </div>\r\n                            <div class=\"quote wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;\">\r\n                                <p class=\"quotation\">\r\n                                    Lorem ipsum dolor siamet consetetur sadipscing elitr, sed diam \r\n                                    nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat\r\n                                </p>\r\n                                <p class=\"name\">-  <span>Jason</span> Willis  -</p>\r\n                            </div>\r\n                        </div>                                    ', '2016-12-04 17:21:31', '2016-12-20 20:34:27', 1, 2, 'N', '', NULL, NULL),
(2, NULL, '                                                                                                                                                                                                                                                                                                                                                                                                                                                        <section class=\"featureArea commonSection\">\r\n                <div class=\"container\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"http://klikkitas.com/content-manage/img/Images/20161219/71e18f610c87f01fbe44227355aacc07.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Perusahaan Baru</a></h3>\r\n                                <p>Membuat dan mengurus semua dokumen legalitas yang dibutuhkan oleh perusahaan baru.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"http://klikkitas.com/content-manage/img/Images/20161219/a6e34440f4173ac6f7516f7eab1436c3.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">VISA</a></h3>\r\n                                <p>Ijin warga negara asing masuk ke Indonesia atau sebaliknya.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 400ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"http://klikkitas.com/content-manage/img/Images/20161219/dc39eb8fece4b860eec1e691c284af99.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Kitas - Kitap</a></h3>\r\n                                <p>Ijin warga negara asing untuk tinggal di Indonesia berstatus sementara ataupun tetap.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"450ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"http://klikkitas.com/content-manage/img/Images/20161219/1a1553c2fdaa62af693814246bf6e466.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Eksport - Import</a></h3>\r\n                                <p>Dokument Legalitas untuk kegiatan Ekspor dan Import.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n </section>                                                                                                                                                                                                                                                                                                                                                                                                             ', '2016-12-04 17:22:33', '2017-04-24 12:25:26', 1, 3, 'Y', '', NULL, NULL),
(3, NULL, '                                                                                                                                                        <div class=\"col-lg-4 col-sm-4 col-xs-12 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">\r\n                <div class=\"singleService first\">\r\n                    <div class=\"serviceContent pull-left text-right\">\r\n                        <h4><a href=\"#\">Web <span>Design</span></a></h4>\r\n                        <p>At vero eos et accusam et justo duo</p>\r\n                    </div>\r\n                    <div class=\"serviceIcon pull-right\">\r\n                        <i class=\"icon-pen2\"></i>\r\n                    </div>\r\n                </div>\r\n                <div class=\"singleService\">\r\n                    <div class=\"serviceContent pull-left text-right\">\r\n                        <h4><a href=\"#\">Pure <span>Code</span></a></h4>\r\n                        <p>Dolores et ea rebum stet clita kasd</p>\r\n                    </div>\r\n                    <div class=\"serviceIcon pull-right\">\r\n                        <i class=\"fa fa-code\"></i>\r\n                    </div>\r\n                </div>\r\n                <div class=\"singleService\">\r\n                    <div class=\"serviceContent pull-left text-right\">\r\n                        <h4><a href=\"#\">SEO <span>Research</span></a></h4>\r\n                        <p>Stet clita kasd gubergren no sea</p>\r\n                    </div>\r\n                    <div class=\"serviceIcon pull-right\">\r\n                        <i class=\"icon-search3\"></i>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-4 col-sm-4 col-xs-12 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">\r\n                <div class=\"serviceImg\">\r\n<img src=\"/cms/TopBiz/images/home1/mobile.png\" />\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-4 col-sm-4 col-xs-12 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\">\r\n                <div class=\"singleService first\">\r\n                    <div class=\"serviceIcon pull-left\">\r\n                        <i class=\"icon-bubble\"></i>\r\n                    </div>\r\n                    <div class=\"serviceContent pull-right text-left\">\r\n                        <h4><a href=\"#\">Business <span>Consults</span></a></h4>\r\n                        <p>Takimata sanctus est lorem ipsum</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"singleService right\">\r\n                    <div class=\"serviceIcon pull-left\">\r\n                        <i class=\"icon-user3\"></i>\r\n                    </div>\r\n                    <div class=\"serviceContent pull-right text-left\">\r\n                        <h4><a href=\"#\">Top <span>Management</span></a></h4>\r\n                        <p>Dolor sit amet. Lorem ipsum dolor sit</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"singleService\">\r\n                    <div class=\"serviceIcon pull-left\">\r\n                        <i class=\"icon-thumbs-up\"></i>\r\n                    </div>\r\n                    <div class=\"serviceContent pull-right text-left\">\r\n                        <h4><a href=\"#\">Best <span>Support</span></a></h4>\r\n                        <p>Amet consetetur sadipscing elitr</p>\r\n                    </div>\r\n                </div>\r\n            </div>                                                                                                                                                                                                                                                                                     ', '2016-12-04 17:23:37', '2016-12-20 20:34:37', 1, 4, 'N', '', NULL, NULL),
(4, NULL, '                                                                                                                                                                                               <div class=\"row\">\r\n            <div class=\"col-lg-12 col-sm-12 col-xs-12 text-center\">\r\n                <h2 class=\"commonTittle folio wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">Our<span>portfolio</span></h2>\r\n                <p class=\"folioSubTittle wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">recent works</p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-lg-12 col-sm-12 col-xs-12\">\r\n                <div class=\"singlePortfolio\">\r\n                    <div class=\"portfolioImg folioImgFix_1\">\r\n                        <img src=\"images/home1/folio1.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio1h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_2\">\r\n                        <img src=\"images/home1/folio2.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio2h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_3\">\r\n                        <img src=\"images/home1/folio3.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio3h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_4\">\r\n                        <img src=\"images/home1/folio4.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio4h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"clearfix\"></div>\r\n                    <div class=\"portfolioImg folioImgFix_5\">\r\n                        <img src=\"images/home1/folio5.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio5h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_6\">\r\n                        <img src=\"images/home1/folio6.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio6h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_7\">\r\n                        <img src=\"images/home1/folio7.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio7h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"clearfix\"></div>\r\n                    <div class=\"portfolioImg folioImgFix_8\">\r\n                        <img src=\"images/home1/folio8.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio8h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"portfolioImg folioImgFix_9\">\r\n                        <img src=\"images/home1/folio9.jpg\" alt=\"\">\r\n                        <div class=\"folioHover\">\r\n                            <a href=\"images/home1/folio9h.jpg\" class=\"prePhoto\" data-rel=\"prettyPhoto\"><i class=\"icon-search3\"></i></a>\r\n                            <a href=\"folio1.html\" class=\"detailsLink\"><i class=\"icon-location\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"clearfix\"></div>\r\n                </div>\r\n                <div class=\"mixurBtn\">\r\n                    <div class=\"viewBtn\">\r\n                        <a href=\"#\">view more</a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>                                                                                                                                                                  ', '2016-12-04 17:24:12', '2016-12-20 20:34:46', 1, 5, 'N', '', NULL, NULL),
(5, NULL, '                                                                                                                                                                                                   <div class=\"singleFacts text-center wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">\r\n            <h1 class=\"mycounter\" data-counter=\"42854\">42<span>854</span></h1>\r\n            <p>happy clients</p>\r\n        </div>\r\n        <div class=\"singleFacts text-center wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">\r\n            <h1 class=\"mycounter\" data-counter=\"3583\">3<span>583</span></h1>\r\n            <p>project made</p>\r\n        </div>\r\n        <div class=\"singleFacts text-center wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\">\r\n            <h1 class=\"mycounter\" data-counter=\"34937\">34<span>937</span></h1>\r\n            <p>comments</p>\r\n        </div>\r\n        <div class=\"singleFacts text-center wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"450ms\">\r\n            <h1 class=\"mycounter\" data-counter=\"21527\">21527</h1>\r\n            <p>letters sent</p>\r\n        </div>                                                                                                                                                                                         ', '2016-12-04 17:24:45', '2016-12-20 20:34:54', 1, 6, 'N', '', NULL, NULL),
(6, NULL, '                                                                                                                                 <div class=\"row\">\r\n            <div class=\"col-lg-12 col-sm-12 col-xs-12 text-center\">\r\n                <h2 class=\"commonTittle white wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">Our<span>skills</span></h2>\r\n                <p class=\"subTittle wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">Lorem ipsum dolor amet consetetur sadipscing elitr</p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-lg-4 col-sm-12 col-xs-12 text-center\">\r\n                <div class=\"singleSkill wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">\r\n                    <div class=\"skillOne cmskill\" data-skills=\"0.9\" data-gradientstart=\"#DF3F31\" data-gradientend=\"#FBC877\"><strong></strong></div>\r\n                    <p>html,css</p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-4 col-sm-12 col-xs-12 text-center\">\r\n                <div class=\"singleSkill wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">\r\n                    <div class=\"skillTwo cmskill\" data-skills=\"0.95\" data-gradientstart=\"#DF3F31\" data-gradientend=\"#FBC877\"><strong></strong></div>\r\n                    <p>wordpress</p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-4 col-sm-12 col-xs-12 text-center\">\r\n                <div class=\"singleSkill wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\">\r\n                    <div class=\"skillThree cmskill\" data-skills=\"0.63\" data-gradientstart=\"#DF3F31\" data-gradientend=\"#FBC877\"><strong></strong></div>\r\n                    <p>photoshop</p>\r\n                </div>\r\n            </div>\r\n        </div>                                                                                                   ', '2016-12-04 17:25:24', '2016-12-20 20:35:12', 1, 7, 'N', '', NULL, NULL),
(7, NULL, '<section class=\"featureArea commonSection\">\r\n                <div class=\"container\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"images/home1/feature1.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Easy <span>Customize</span></a></h3>\r\n                                <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"images/home1/feature2.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Unique <span>Design</span></a></h3>\r\n                                <p>Stet clita kasd gubergren no takimata sanctus est lorem ipsum.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 400ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"images/home1/feature3.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">Retina <span>Ready</span></a></h3>\r\n                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated\" data-wow-duration=\"700ms\" data-wow-delay=\"450ms\" style=\"visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;\">\r\n                            <div class=\"featureImg\">\r\n                                <img src=\"images/home1/feature4.png\" alt=\"\">\r\n                            </div>\r\n                            <div class=\"featureContent\">\r\n                                <h3><a href=\"#\">24/7 <span>Support</span></a></h3>\r\n                                <p>Nonumy eirmod tempor invidunt ut labore et dolore magna.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n </section>', '2016-12-13 21:27:23', NULL, 2, 3, 'T', '', '2016-12-13 21:28:58', NULL),
(8, NULL, '<p><strong>Facebook</strong> adalah sebuah <a href=\"https://id.wikipedia.org/wiki/Layanan_jejaring_sosial\">layanan jejaring sosial</a> yang diluncurkan pada bulan Februari 2004, dan berkantor pusat di <a href=\"https://id.wikipedia.org/wiki/Menlo_Park,_California\">Menlo Park, California</a>, <a href=\"https://id.wikipedia.org/wiki/Amerika_Serikat\">Amerika Serikat</a>. Pada September 2012, Facebook memiliki lebih dari <a href=\"https://id.wikipedia.org/w/index.php?title=Daftar_komunitas_virtual_dengan_lebih_dari_100_juta_pengguna&amp;action=edit&amp;redlink=1\">satu miliar</a> pengguna aktif,<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-8\">[8]</a> lebih dari separuhnya menggunakan <a href=\"https://id.wikipedia.org/wiki/Telepon_genggam\">telepon genggam</a>.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-9\">[9]</a> Pengguna harus mendaftar sebelum dapat menggunakan situs ini. Setelah itu, pengguna dapat membuat <a href=\"https://id.wikipedia.org/w/index.php?title=Profil_pengguna&amp;action=edit&amp;redlink=1\">profil pribadi</a>, menambahkan pengguna lain sebagai <a href=\"https://id.wikipedia.org/w/index.php?title=Berteman&amp;action=edit&amp;redlink=1\">teman</a>, dan bertukar pesan, termasuk pemberitahuan otomatis ketika mereka memperbarui profilnya. Selain itu, pengguna dapat bergabung dengan grup pengguna dengan ketertarikan yang sama, diurutkan berdasarkan tempat kerja, sekolah atau perguruan tinggi, atau ciri khas lainnya, dan mengelompokkan teman-teman mereka ke dalam daftar seperti &quot;Rekan Kerja&quot; atau &quot;Teman Dekat&quot;.</p>\r\n\r\n<p>Facebook didirikan oleh <a href=\"https://id.wikipedia.org/wiki/Mark_Zuckerberg\">Mark Zuckerberg</a> bersama teman sekamarnya dan sesama mahasiswa <a href=\"https://id.wikipedia.org/wiki/Universitas_Harvard\">Universitas Harvard</a>, <a href=\"https://id.wikipedia.org/wiki/Eduardo_Saverin\">Eduardo Saverin</a>, <a href=\"https://id.wikipedia.org/wiki/Andrew_McCollum\">Andrew McCollum</a>, <a href=\"https://id.wikipedia.org/wiki/Dustin_Moskovitz\">Dustin Moskovitz</a>, dan <a href=\"https://id.wikipedia.org/wiki/Chris_Hughes_%28pengusaha%29\">Chris Hughes</a>.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-10\">[10]</a> Keanggotaan situs web ini awalnya terbatas untuk mahasiswa Harvard saja, kemudian diperluas ke perguruan lain di Boston, <a href=\"https://id.wikipedia.org/wiki/Ivy_League\">Ivy League</a>, dan <a href=\"https://id.wikipedia.org/wiki/Universitas_Stanford\">Universitas Stanford</a>. Situs ini secara perlahan membuka diri kepada mahasiswa di universitas lain sebelum dibuka untuk siswa sekolah menengah atas, dan akhirnya untuk setiap orang yang berusia minimal 13 tahun. Meski begitu, menurut survei <em><a href=\"https://id.wikipedia.org/wiki/Consumer_Reports\">Consumer Reports</a></em> bulan Mei 2011, ada 7,5 juta anak di bawah usia 13 tahun yang memiliki akun Facebook dan 5 juta lainnya di bawah 10 tahun, sehingga melanggar persyaratan layanan situs ini.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-11\">[11]</a></p>\r\n\r\n<p>Studi <a href=\"https://id.wikipedia.org/w/index.php?title=Compete.com&amp;action=edit&amp;redlink=1\">Compete.com</a> bulan <a href=\"https://id.wikipedia.org/wiki/Januari\">Januari</a> <a href=\"https://id.wikipedia.org/wiki/2009\">2009</a> menempatkan Facebook sebagai layanan jejaring sosial yang paling banyak digunakan menurut jumlah pengguna aktif bulanan di seluruh dunia.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-Kazeniac-12\">[12]</a> <em><a href=\"https://id.wikipedia.org/wiki/Entertainment_Weekly\">Entertainment Weekly</a></em> menempatkannya di daftar &quot;terbaik&quot; akhir <a href=\"https://id.wikipedia.org/wiki/Dasawarsa\">dasawarsa</a> dengan komentar, &quot;Bagaimana caranya kita menguntit mantan kekasih kita, mengingat ulang tahun rekan kerja kita, mengganggu teman kita, dan bermain <a href=\"https://id.wikipedia.org/w/index.php?title=Lexulous&amp;action=edit&amp;redlink=1\">Scrabulous</a> sebelum Facebook diciptakan?&quot;<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-13\">[13]</a> <a href=\"https://id.wikipedia.org/w/index.php?title=Quantcast&amp;action=edit&amp;redlink=1\">Quantcast</a> memperkirakan Facebook memiliki 138,9 juta pengunjung bulanan di AS pada Mei 2011.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-14\">[14]</a> Menurut <em>Social Media Today</em> pada April 2010, sekitar 41,6% penduduk Amerika Serikat memiliki akun Facebook.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-15\">[15]</a> Meski begitu, pertumbuhan pasar Facebook mulai turun di sejumlah wilayah dengan hilangnya 7 juta pengguna aktif di Amerika Serikat dan Kanada pada Mei 2011.<a href=\"https://id.wikipedia.org/wiki/Facebook#cite_note-16\">[16]</a></p>\r\n\r\n<p>Nama layanan ini berasal dari <a href=\"https://id.wikipedia.org/w/index.php?title=Facebook_%28direktori%29&amp;action=edit&amp;redlink=1\">nama buku</a> yang diberikan kepada mahasiswa pada tahun akademik pertama oleh beberapa pihak administrasi universitas di <a href=\"https://id.wikipedia.org/wiki/Amerika_Serikat\">Amerika Serikat</a> dengan tujuan membantu mahasiswa mengenal satu sama lain. Facebook memungkinkan setiap orang berusia minimal 13 tahun menjadi pengguna terdaftar di situs ini</p>\r\n', '2017-01-05 21:21:27', '2017-01-22 12:30:09', 1, 8, 'Y', '', NULL, 'http://localhost/cms/Profile-8'),
(9, NULL, '<h2>Perseroan Terbatas (PT)</h2>\r\n\r\n<p>Perseroan Terbatas (PT) adalah suatu bentuk perusahaan yang dimana modalnya terbagi atas saham-saham, dan tanggung jawab dari para pemegang saham PT berdasarkan pada jumlah saham yang dia miliki. Adapun alat-alat atau perlengkapan dari organisasi Perseroan Terbatas, yang diantaranya seperti Komisaris, Direksi, dan Rapat umum para pemegang saham.</p>\r\n\r\n<p>- Paket Dokument yang akan kami tangani :</p>\r\n\r\n<ul>\r\n	<li>Akta Notaris / Pendirian Perusahaan</li>\r\n	<li>SK Kehakiman</li>\r\n	<li>Surat Izin Usaha Perdagangan (SIUP)</li>\r\n	<li>Tanda Daftar Perusahaan (TDP)</li>\r\n	<li>Nomor Pokok Wajib Pajak (NPWP)</li>\r\n	<li>Surat Keterangan Domisili Perusahaan</li>\r\n	<li>Berita Negara</li>\r\n</ul>\r\n\r\n<p>- Persyaratan :</p>\r\n\r\n<ul>\r\n	<li>Fotocopy KTP para pendiri, minimal 2 orang</li>\r\n	<li>Fotocopy KK dan NPWP Pribadi penanggung jawab / Direktur</li>\r\n	<li>Surat Keterangan Domisili dari pengelola gedung, apabila berada di gedung perkantoran</li>\r\n	<li>Fotocopy PBB terakhir tempat usaha/kantor (apabila milik sendiri, atau Surat Kontrak (apabila status kantor sewa/kontrak)</li>\r\n	<li>Surat Pengantar RT/RW untuk pengurusan izin domisili</li>\r\n	<li>Pas photo warna penanggung jawab / direktur; 3 x 4 cm ( 4 lembar )</li>\r\n</ul>\r\n', '2017-01-22 10:49:26', NULL, 1, 16, 'Y', '', NULL, NULL),
(10, NULL, '<h2>Persekutuan Komanditer (CV)</h2>\r\n\r\n<p>Persekutuan Komanditer atau Commanditaire Vennootschap (CV) adalah persekutuan 2 (dua) orang atau lebih untuk mendirikan badan usaha yang dimana sebagian anggotanya memiliki tanggung jawab yang tidak terbatas dan sebagiannya lagi memiliki tanggung jawab yang terbatas.</p>\r\n\r\n<p>- Paket Dokument yang akan kami tangani :</p>\r\n\r\n<ul>\r\n	<li>Akta Notaris</li>\r\n	<li>Legalisir Pengadilan</li>\r\n	<li>Surat Izin Usaha Perdagangan (SIUP)</li>\r\n	<li>Tanda Daftar Perusahaan (TDP)</li>\r\n	<li>Nomor Pokok Wajib Pajak (NPWP)</li>\r\n	<li>Surat Keterangan Domisili Perusahaan</li>\r\n</ul>\r\n\r\n<p>- Persyaratan :</p>\r\n\r\n<ul>\r\n	<li>Fotocopy KTP para pendiri, minimal 2 orang</li>\r\n	<li>Fotocopy KK dan NPWP penanggung jawab / Direktur</li>\r\n	<li>Surat Keterangan Domisili dari pengelola gedung, apabila berada di gedung perkantoran</li>\r\n	<li>Fotocopy PBB terakhir tempat usaha/kantor (apabila milik sendiri, atau Surat Kontrak (apabila status kantor sewa/kontrak)</li>\r\n	<li>Pas photo warna penanggung jawab / direktur; 3 x 4 cm ( 2 lembar )</li>\r\n</ul>\r\n', '2017-01-22 10:59:18', '2017-01-22 11:53:53', 1, 17, 'Y', '', NULL, 'http://localhost/cms/Persekutuan-Komanditer--CV--10'),
(11, NULL, '<p>Jasa yang kami tawarkan untuk Perizinan Perusahaan :</p>\r\n<br>\r\n<ol>\r\n	<li>PT (Perseroan Terbatas)</li>\r\n	<li>CV (Persekutuan Komanditer)</li>\r\n	<li>UD (Usaha Dagang)</li>\r\n	<li>PMA (Penanaman Modal Asing)</li>\r\n	<li>PMDN (Penanaman Modal Dalam Negeri)</li>\r\n	<li>Pendaftaran Penanaman Modal / SP BKPM</li>\r\n	<li>Izin Prinsip Penanaman Modal &ndash; PMA / PMDN</li>\r\n	<li>Izin Prinsip Perubahan &ndash; PMA / PMDN</li>\r\n	<li>Izin Prinsip Perluasan &ndash; PMA / PMDN</li>\r\n	<li>SIUP (Surat Izin Usaha Perdagangan)</li>\r\n	<li>TDP (Tanda Daftar Perusahaan)</li>\r\n	<li>BPW (Biro Perjalanan Wisata)</li>\r\n	<li>UUG / HO (Undang-undang Gangguan)</li>\r\n	<li>TDI (Tanda Daftar Industri)</li>\r\n	<li>IUT (Izin Usaha Tetap) &ndash; PMA / PMDN</li>\r\n	<li>IPAK (Izin Penyalur Alat Kesehatan)</li>\r\n	<li>Izin Usaha Jasa Konstruksi (IUJK) &ndash; Khusus PMA</li>\r\n	<li>Izin Usaha Penjualan Langsung (IUPL) Sementara / tetap</li>\r\n	<li>Izin Usaha Perusahaan Perantara Perdagangan Properti (IUP4)</li>\r\n	<li>SKPLBI (Izin Label)</li>\r\n	<li>Nomor Pokok Wajib Pajak Perusahaan</li>\r\n	<li>Izin Usaha Perfilman (PH)</li>\r\n	<li>Akta Pendirian dan Perubahan Perusahaan</li>\r\n	<li>Perizinan BKPM</li>\r\n	<li>Domisili Perusahaan</li>\r\n	<li>Akta Jual Beli Tanah / Bangunan</li>\r\n	<li>Akta Perjanjian</li>\r\n	<li>Akta Perjanjian Pisah Harta</li>\r\n	<li>Peningkatan HGB menjadi SHM</li>\r\n</ol>\r\n', '2017-01-22 11:00:20', '2017-01-22 13:00:36', 1, 12, 'Y', '', NULL, 'http://localhost/cms/Pendirian-Perusahaan-11'),
(12, NULL, '<p>Visa</p>\r\n', '2017-01-22 11:33:19', NULL, 1, 15, 'Y', '', NULL, '12'),
(13, NULL, '', '2017-02-26 09:53:17', NULL, 1, 10, 'Y', '', NULL, 'http://localhost/cms/Layanan-Kami-13'),
(14, NULL, '', '2017-02-26 13:51:24', NULL, 1, 9, 'Y', '', NULL, 'http://localhost/cms/Hubungi-Kami-14'),
(15, NULL, '', '2017-02-26 13:51:59', NULL, 1, 11, 'Y', '', NULL, 'http://localhost/cms/Klien-Kami-15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `path` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `category_id` smallint(6) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `is_active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `description`, `link`, `path`, `create_date`, `update_date`, `category_id`, `user_id`, `is_active`) VALUES
(1, 'VISA', 'Ijin untuk masuk ke wilayah Indonesia atau luar Indonesia, baik untuk belajar, bekerja, tinggal, transit dan lain-lain', '', '32b2c11177961355eee3c37c939a7710.png', '2016-12-09 22:07:55', '2016-12-09 22:53:10', 1, 1, 'Y'),
(2, 'KITAS / KITAP', 'Kartu Ijin Tinggal Sementara / Tetap untuk Warga Negara Asing di Indonesia', '', 'a0c28d7b4ec156b1f2959342e0f5c945.png', '2016-12-09 22:14:30', '2016-12-09 22:52:57', 1, 1, 'Y'),
(3, 'Export Import', 'Dokumen legalitas perijinan untuk kegiatan export dan import', '', '3db5aa907657213703b1b38145e86e54.png', '2016-12-10 09:12:01', '2016-12-10 09:15:11', 1, 1, 'Y'),
(4, 'Perusahaan', 'Mengurus semua dokumen legalitas perusahaan yang anda dirikan', '', '7497b4e13865accd607853b6ccc82ab6.png', '2016-12-10 09:20:32', NULL, 1, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `guestbook_id` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` tinytext NOT NULL,
  `send_date` datetime NOT NULL,
  `read_msg` enum('Y','N') NOT NULL DEFAULT 'N',
  `read_date` datetime DEFAULT NULL,
  `read_by` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guestcounter`
--

CREATE TABLE `guestcounter` (
  `ip_address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(80) DEFAULT NULL,
  `hit` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestcounter`
--

INSERT INTO `guestcounter` (`ip_address`, `date`, `location`, `hit`) VALUES
('192.168.1.1', '2017-05-21', 'profile', 2),
('192.168.1.2', '2017-05-21', 'profile', 5);

-- --------------------------------------------------------

--
-- Table structure for table `images_list`
--

CREATE TABLE `images_list` (
  `id_images` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `user_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_list`
--

INSERT INTO `images_list` (`id_images`, `name`, `created_date`, `updated_date`, `user_id`) VALUES
(1, '1a1553c2fdaa62af693814246bf6e466.png', '2016-12-19 20:47:09', '2016-12-20 20:26:27', 1),
(2, '71e18f610c87f01fbe44227355aacc07.png', '2016-12-19 20:49:36', NULL, 1),
(3, 'a6e34440f4173ac6f7516f7eab1436c3.png', '2016-12-19 20:50:14', NULL, 1),
(4, 'dc39eb8fece4b860eec1e691c284af99.png', '2016-12-19 20:50:48', NULL, 1),
(5, '77b5b7863709117c8d9179094f46f4ee.png', '2017-04-24 12:22:06', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` smallint(6) NOT NULL,
  `name` varchar(60) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `user_id` smallint(6) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `create_date`, `update_date`, `user_id`, `is_active`) VALUES
(2, 'Menu Default', '2017-02-26 08:57:35', NULL, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE `menu_detail` (
  `menu_detil_id` int(11) NOT NULL,
  `menu_id` smallint(6) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `drop_down` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 = drop down ,0 = no',
  `category_id` smallint(6) NOT NULL,
  `order_id` tinyint(4) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ended_date` datetime NOT NULL DEFAULT '3014-12-31 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_detail`
--

INSERT INTO `menu_detail` (`menu_detil_id`, `menu_id`, `parent_id`, `drop_down`, `category_id`, `order_id`, `status`, `created_date`, `ended_date`) VALUES
(1, 2, 0, 0, 8, 1, 'Y', '2017-02-26 08:59:00', '3014-12-31 00:00:00'),
(2, 2, 0, 1, 10, 2, 'Y', '2017-02-26 09:00:02', '3014-12-31 00:00:00'),
(3, 2, 0, 0, 9, 4, 'Y', '2017-02-26 09:00:32', '3014-12-31 00:00:00'),
(5, 2, 2, 0, 12, 1, 'Y', '2017-02-26 09:54:40', '3014-12-31 00:00:00'),
(7, 2, 0, 0, 11, 3, 'Y', '2017-02-26 13:53:47', '3014-12-31 00:00:00'),
(9, 2, 2, 0, 15, 2, 'Y', '2017-02-26 13:55:38', '3014-12-31 00:00:00'),
(10, 2, 2, 0, 13, 3, 'Y', '2017-02-26 13:56:28', '3014-12-31 00:00:00'),
(11, 2, 2, 0, 14, 4, 'Y', '2017-02-26 13:57:05', '3014-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `from_msg` varchar(80) NOT NULL,
  `to_msg` varchar(80) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` tinytext NOT NULL,
  `send_date` datetime NOT NULL,
  `send_by` smallint(6) NOT NULL,
  `guestbook_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plugin`
--

CREATE TABLE `plugin` (
  `id_plugin` int(11) NOT NULL,
  `type` enum('video','slider') NOT NULL,
  `embed` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `keys` varchar(100) NOT NULL,
  `value_1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id_theme` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `index` varchar(15) NOT NULL,
  `install_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Y : Active, N : Not Active',
  `type` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id_theme`, `name`, `path`, `index`, `install_date`, `update_date`, `active`, `type`) VALUES
(1, 'TopBiz', NULL, '', '2016-12-04 17:00:00', NULL, 'Y', '');

-- --------------------------------------------------------

--
-- Table structure for table `themes_setting`
--

CREATE TABLE `themes_setting` (
  `id_theme` tinyint(4) NOT NULL,
  `key` varchar(100) NOT NULL,
  `field_name` varchar(100) NOT NULL,
  `group` varchar(50) DEFAULT NULL,
  `value_1` mediumtext,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `type` enum('embed','text') NOT NULL DEFAULT 'text',
  `category` enum('Slider Banner','Page','Section') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes_setting`
--

INSERT INTO `themes_setting` (`id_theme`, `key`, `field_name`, `group`, `value_1`, `is_active`, `type`, `category`) VALUES
(1, 'base_url', 'Base Url Admin', NULL, 'http://localhost/admin-cms/', 'Y', 'text', NULL),
(1, 'copyright_footer', 'Footer CopyRight', 'footer', 'Copyright © 2016 By PT. Rafindo Sejahtera', 'Y', 'text', NULL),
(1, 'description_meta', 'Description Meta', NULL, 'meta', 'Y', 'text', NULL),
(1, 'facebook', 'Link Account Facebook', 'social_media', 'https://www.facebook.com/candra.ramadhan', 'Y', 'text', NULL),
(1, 'footer_info', 'Footer Info', 'footer', '<h2 class=\"wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">(+62)2180885245 / (+62)811935106</h2>\r\n<h2 class=\"wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"350ms\">mudji.rafindo@gmail.com</h2>\r\n<p class=\"wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"400ms\">Jl. Permata No.4 RT.007/04 Kebon Pala, Makasar Jakarta Timur</p>', 'Y', 'text', NULL),
(1, 'google', 'Link Account Google Plus', 'social_media', 'https://plus.google.com/', 'Y', 'text', NULL),
(1, 'menu_header', 'Menu Header', NULL, '2', 'Y', 'embed', 'Page'),
(1, 'section_1', 'Section 1', 'section', '2', 'Y', 'embed', 'Section'),
(1, 'section_2', 'Section 2', 'section', '3', 'Y', 'embed', 'Section'),
(1, 'section_3', 'Section 3', 'section', '4', 'Y', 'embed', 'Section'),
(1, 'section_4', 'Section 4', 'section', '5', 'Y', 'embed', 'Section'),
(1, 'section_5', 'Section 5', 'section', '6', 'Y', 'embed', 'Section'),
(1, 'section_6', 'Section 6', 'section', '7', 'Y', 'embed', 'Section'),
(1, 'title_logo', 'Title Logo', NULL, 'KlikKitas.com', 'Y', 'text', NULL),
(1, 'title_web', 'Title Website', NULL, 'Jasa Pembuatan Kitas dan Visa', 'Y', 'text', NULL),
(1, 'top_slider', 'Top Slider', NULL, '1', 'Y', 'embed', 'Slider Banner'),
(1, 'twitter', 'Link Twitter', 'social_media', 'https://www.twitter.com', 'Y', 'text', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` smallint(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(60) NOT NULL,
  `is_active` enum('Y','N') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` enum('Administrator','User') NOT NULL,
  `path_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `is_active`, `create_date`, `update_date`, `status`, `path_img`) VALUES
(1, 'Candra', 'Rahmawan', 'candra', '1973287G2E4355795E7313B031B169GF7G39C851848E6708G033G7G95190GGCG4341CF8823BBF6GB9B194FBE31D0BE3354E40678E2BE60GFG9C7E6674ECEGF6E', 'candra.assasin@gmail.com', 'Y', '2016-12-02 13:41:00', NULL, 'Administrator', ''),
(2, 'Admin', 'Klikkitas.com', 'admin', '8G6B04F8105G24FC69C95G85FF244CD1BG5E937416388345155F6G27CG488EB37FD79DF35C8CED585G3104464E0CF9E8E3ED9C3G1B80626DC40B8G0073G70019', 'administrator@klikkitas.com', 'Y', '2016-12-02 20:10:35', NULL, 'Administrator', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`),
  ADD KEY `userid` (`user_id`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `category_id` (`category_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `category_id` (`category_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `category_idr` (`category_id`) USING BTREE,
  ADD KEY `user_idr` (`user_id`) USING BTREE;

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`guestbook_id`),
  ADD KEY `read_by` (`read_by`);

--
-- Indexes for table `guestcounter`
--
ALTER TABLE `guestcounter`
  ADD PRIMARY KEY (`ip_address`,`date`);

--
-- Indexes for table `images_list`
--
ALTER TABLE `images_list`
  ADD PRIMARY KEY (`id_images`),
  ADD KEY `user_id_img` (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD PRIMARY KEY (`menu_detil_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `cat_id` (`category_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `send_by` (`send_by`),
  ADD KEY `guestbook_id` (`guestbook_id`);

--
-- Indexes for table `plugin`
--
ALTER TABLE `plugin`
  ADD PRIMARY KEY (`id_plugin`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id_theme`),
  ADD UNIQUE KEY `theme` (`name`);

--
-- Indexes for table `themes_setting`
--
ALTER TABLE `themes_setting`
  ADD PRIMARY KEY (`id_theme`,`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`user_name`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `guestbook_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images_list`
--
ALTER TABLE `images_list`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_detail`
--
ALTER TABLE `menu_detail`
  MODIFY `menu_detil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plugin`
--
ALTER TABLE `plugin`
  MODIFY `id_plugin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id_theme` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `category_idr` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_idr` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD CONSTRAINT `read_by` FOREIGN KEY (`read_by`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images_list`
--
ALTER TABLE `images_list`
  ADD CONSTRAINT `user_id_img` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `menu_id` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `guestbook_id` FOREIGN KEY (`guestbook_id`) REFERENCES `guestbook` (`guestbook_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `send_by` FOREIGN KEY (`send_by`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
