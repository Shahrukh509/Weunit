-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 03:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weunit`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `messenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weixin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weibo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quora` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discord` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spotify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amazon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eagle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locaiton` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `messenger`, `weixin`, `telegram`, `qq`, `weibo`, `reddit`, `quora`, `skype`, `viber`, `line`, `discord`, `twitch`, `xing`, `spotify`, `amazon`, `vimeo`, `paypal`, `eagle`, `locaiton`, `house`, `message`, `facebook`, `instagram`, `twitter`, `youtube`, `whatsapp`, `heart`, `phone`, `tiktok`, `snapchat`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 3, 'https://vimeo.com/', NULL, 'https://vimeo.com/', NULL, NULL, 'https://laravel-livewire.com/', 'quora.com', 'skype.com', 'https://laravel-livewire.com/', 'https://vimeo.com/', NULL, 'https://github.com/', NULL, 'https://www.spotify.com/', 'https://www.amazon.com/', 'https://vimeo.com/', NULL, 'https://vimeo.com/', 'https://vimeo.com/', 'https://vimeo.com/', 'https://vimeo.com/', 'https://www.facebook.com/', NULL, 'https://twitter.com/?lang=en', 'https://www.youtube.com/', 'https://web.whatsapp.com/', 'https://play.google.com/', 'https://play.google.com/', 'https://mobile.twitter.com/tiktok?lang=en', 'https://www.snapchat.com/', 'https://www.pinterest.com/', '2022-02-18 13:22:00', '2022-02-25 11:44:34'),
(2, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://web.facebook.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-21 12:35:31', '2022-02-21 12:35:31'),
(3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://web.facebook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-21 12:38:44', '2022-02-21 12:38:44'),
(4, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://web.facebook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-21 13:37:33', '2022-02-21 13:37:33'),
(5, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/FMCAGSPAKISTAN/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 05:09:02', '2022-04-22 05:09:02'),
(6, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 20:40:20', '2022-04-22 20:40:20'),
(7, 31, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 21:07:40', '2022-04-22 21:07:50'),
(8, 38, 'https://www.messenger.com/', NULL, NULL, NULL, NULL, 'www.reddit.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/login/', 'www.instagram.com', 'https://twitter.com/iamsrk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.youtube.com/', NULL, NULL, NULL, 'www.tiktok.com', NULL, NULL, '2022-08-30 07:01:00', '2022-09-02 07:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'fdgdf', '2022-02-23 12:02:21', '2022-02-23 12:02:21'),
(2, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'Ut minus labore non', '2022-02-23 12:03:47', '2022-02-23 12:03:47'),
(3, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', NULL, '2022-02-23 12:05:29', '2022-02-23 12:05:29'),
(4, 'Imani Chavez', 'qobuqa@mailinator.com', '+1 (825) 655-2797', 'Expedita eveniet ma', '2022-02-23 12:09:10', '2022-02-23 12:09:10'),
(5, 'Arsenio Macias', 'jewe@mailinator.com', '+1 (855) 246-3948', 'Nam minima mollit qu', '2022-02-23 12:10:26', '2022-02-23 12:10:26'),
(6, 'Liberty Byers', 'daluvaveq@mailinator.com', '+1 (648) 576-3941', 'Optio cupiditate al', '2022-02-23 12:11:03', '2022-02-23 12:11:03'),
(7, 'Chloe Chambers', 'valaz@mailinator.com', '+1 (173) 457-3415', 'Rem deserunt consequ', '2022-02-23 12:11:31', '2022-02-23 12:11:31'),
(8, 'Ivor Bailey', 'goliro@mailinator.com', '+1 (833) 945-2018', 'Reprehenderit libero', '2022-02-23 12:12:29', '2022-02-23 12:12:29'),
(9, 'Jemima Combs', 'rifyfepam@mailinator.com', '+1 (842) 851-1755', 'Saepe debitis deseru', '2022-02-23 12:12:55', '2022-02-23 12:12:55'),
(10, 'Nichole Browning', 'xirajyfi@mailinator.com', '+1 (439) 392-6325', 'Neque est incididunt', '2022-02-23 12:13:30', '2022-02-23 12:13:30'),
(11, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'Qui anim numquam lor', '2022-02-23 13:43:31', '2022-02-23 13:43:31'),
(12, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'Tempor obcaecati nis', '2022-02-23 13:44:19', '2022-02-23 13:44:19'),
(13, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'In dolor quo dolores', '2022-02-23 13:45:58', '2022-02-23 13:45:58'),
(14, 'Dr. Omer Rashid', 'meharomer50@gmail.com', '324234567890', 'Labore veniam illo', '2022-02-23 13:47:43', '2022-02-23 13:47:43'),
(15, 'Test Hafeez', 'hafeezsoomrorehman@gmail.com', '233466', 'This is test', '2022-04-22 05:32:29', '2022-04-22 05:32:29'),
(16, 'fd', 'dgd', 'dgdg', 'dcg', '2022-04-22 21:08:46', '2022-04-22 21:08:46'),
(17, 'Michelle Wyatt', 'runihutu@mailinator.com', '82', 'Aute exercitation ea', '2022-07-05 16:10:18', '2022-07-05 16:10:18'),
(18, 'ghulam Rassol', 'rhhbm@lahr.com', '027511', 'ilkjlkjlkj;h;;;j;jkl;kjl;jhl;jl;', '2022-08-23 16:07:52', '2022-08-23 16:07:52'),
(19, 'ghulam Rassol', 'ahsan01@gmail.com', '027511', 'sdfsdfsdf', '2022-08-23 16:45:37', '2022-08-23 16:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `theme` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `user_id`, `theme`, `html`, `background_color`, `background_image`, `profile_image`, `logo`, `about`, `video`, `location`, `created_at`, `updated_at`) VALUES
(25, 3, '11', NULL, '#222020', 'images/PXRWfv2zB55545qHctjj7BGO3nl1n57WQguqkmWW.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-23 12:18:06', '2022-02-23 12:18:06'),
(26, 3, '4', NULL, NULL, 'images/doAEWqxoieDobEEzQ4HnceXKqi277PJo9SeY4B7f.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-23 12:19:35', '2022-02-23 12:20:10'),
(27, 3, '2', NULL, NULL, 'images/q94B6NfVHkIZYK2npmy6rIDRIZI5Lv9we0CDmwXW.jpg', NULL, 'images/ejX9val8AvhbeyCwzu8x4c9y2mPrr96xP4Vb6aRt.jpg', NULL, NULL, NULL, '2022-02-24 10:10:37', '2022-02-26 05:08:09'),
(28, 3, '1', NULL, NULL, NULL, 'public/images/rQeph4QAgezK5VgqMyug8l6rTxQSubKl5ClvvqQC.jpg', 'images/N9TEsrhqpxt8C43VAJlH2OQcWFz4ectslDAjMyFc.jpg', NULL, NULL, NULL, '2022-02-25 11:29:35', '2022-02-25 11:30:47'),
(29, 28, '1', NULL, '#49983a', 'images/jTUtvSrG40Fyg1UkgA7GViFb4aSsgXcWzBUHsQvO.jpg', 'public/images/8lkEVznhCkN5LOGK56ZeXqWht3yhOa4HuqOuWQX7.jpg', NULL, 'i am i am hafeez', NULL, NULL, '2022-04-22 05:15:54', '2022-04-22 20:21:03'),
(30, 29, '1', NULL, '#ff8000', 'https://www.adobe.com/express/create/media_127a4cd0c28c2753638768caf8967503d38d01e4c.jpeg?width=400&format=jpeg&optimize=medium', 'https://www.adobe.com/express/create/media_127a4cd0c28c2753638768caf8967503d38d01e4c.jpeg?width=400&format=jpeg&optimize=medium', 'https://cdn.dribbble.com/userupload/3158902/file/original-7c71bfa677e61dea61bc2acd59158d32.jpg?resize=400x0', 'shahrukh', 'https://youtu.be/J6vIS8jb6Fs', NULL, '2022-04-22 20:36:38', '2022-04-22 20:38:52'),
(31, 31, '6', NULL, '#008000', 'images/zseNjuYRGeeqzXgkPGvKX96AUzHNj6UVvR6t6CMv.jpg', 'public/images/AF2m1Z5LSn3JZ5U40sczihCWdECHMXIHPS5BoXY4.jpg', 'images/3fOxr6w9SXxZQ4ZnRv6fUPTTcQ2QzCAPHmaDZqA6.jpg', 'gjtjrg', 'videos/xcR9oiHAitJCO95p2CKThJRFhrsSmmrOb5sVQC5v.jpg', NULL, '2022-04-22 21:05:21', '2022-04-22 21:07:12'),
(36, 38, 'theme1', '<div class=\"row\">\n                                                        <div style=\"padding: 0;background-color: #000;\" class=\"col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg\">\n                                                            <!-- <div style=\"background-color: #111;\" class=\"col-xs-12 col-sm-5 offset-sm-0 col-md-5 temp2-bg\"> -->\n                                                                <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                    <!-- <div class=\"text-center\">\n                                                                        <img src=\"images/t2.png\" class=\"img-fluid\">\n                                                                    </div> -->\n                                                                    </a><div class=\"text-center temp2 temp4 temp41 temp412 firstTemp\"><a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                        </a><div class=\"temp-borders\"><a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                            </a><div class=\"bbb1\" id=\"bbblast\"><a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                </a><a class=\"bl-1\" href=\"\">BlondAgain</a>\n                                                                            </div>\n                                                                            <h3>Jerry<br>Lorenzo</h3>\n                                                                                <h5>Founder BlondAgain</h5>\n                                                                        </div>\n                                                                         \n                                                                            <img style=\"width: 25px;\" src=\"public/assets/images/ac1.PNG\" alt=\"\">\n                                                                            <!-- <i class=\"fas fa-dharmachakra\"></i> -->\n                                                                        </a>\n                                                                        <!-- <img src=\"images/t3.png\" class=\"img-fluid\"> -->\n                                                                        <!-- <a class=\"ac-1 copy-html\" href=\"#\"><i class=\"fas fa-dharmachakra\"></i></a> -->\n                                                                        <div class=\"row\">\n                                                                            <div class=\"col-md-7\">\n                                                                                \n                                                                            </div>\n                                                                            <div class=\"col-md-4\">\n                                                                                <!-- <div class=\"bbb1\" id=\"bbblast\">\n                                                                                    <a class=\"bl-1\" href=\"\">BlondAgain</a>\n                                                                                </div> -->\n                                                                            </div>\n                                                                        </div>\n                                                                        <div class=\"row i2 g-3 justify-content-center\">\n                                                                            <!-- <div class=\"bbb_main_container\"> -->\n                                                                                <div class=\"col-1\">\n                                                                                    <div>\n                                                                                        <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                            <!-- <img style=\"margin-top: 10px;\" src=\"images/BeautyPlus_20211213231814100_save.jpg\" class=\"img-fluid\"> -->\n                                                                                            <!-- <i style=\"color:#fff\" class=\"fas fa-caret-left\"></i> -->\n                                                                                            <img class=\"bbb_viewed_nav bbb_viewed_prev\" style=\"margin-left: 5px;\" src=\"public/assets/images/ang1.PNG\">\n                                                                                        </a>\n                                                                                    </div>\n                                                                                </div>\n                                                                                <div class=\"col-10\">\n                                                                                    <div class=\"owl-carousel owl-theme bbb_viewed_slider owl-loaded owl-drag\">\n                                                                                        \n                                                                                        \n                                                                                        \n                                                                                        \n                                                                                        \n                                                                                        \n                                                                                    <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-271px, 0px, 0px); transition: all 0s ease 0s; width: 815px;\"><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i style=\"margin-top: 2px;font-size: 26px;\" class=\"fa fa-facebook-f\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-instagram\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-whatsapp\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-pinterest-p\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-tiktok\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item active\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i style=\"margin-top: 2px;font-size: 26px;\" class=\"fa fa-facebook-f\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item active\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-instagram\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item active\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-whatsapp\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item active\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-pinterest-p\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item active\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-tiktok\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i style=\"margin-top: 2px;font-size: 26px;\" class=\"fa fa-facebook-f\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-instagram\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-whatsapp\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-pinterest-p\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div><div class=\"owl-item cloned\" style=\"width: 54.327px;\"><div class=\"owl-item\">\n                                                                                            <div class=\"bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center\">\n                                                                                                <div class=\"row\">\n                                                                                                    <div class=\"col-2 mx-auto\">\n                                                                                                        <div class=\"per-icon\">\n                                                                                                            <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                                                <i class=\"fab fa-tiktok\"></i>\n                                                                                                            </a>\n                                                                                                        </div>\n                                                                                                    </div>\n                                                                                                </div>\n                                                                                            </div>\n                                                                                        </div></div></div></div><div class=\"owl-nav disabled\"><div class=\"owl-prev\">prev</div><div class=\"owl-next\">next</div></div><div class=\"owl-dots disabled\"></div></div>\n                                                                                </div>\n                                                                                <div class=\"col-1\">\n                                                                                    <div>\n                                                                                        <a href=\"#\" class=\"text-decoration-none text-white\">\n                                                                                            <!-- <img style=\"margin-top: 10px;\" src=\"images/arrow.png\" class=\"img-fluid\"> -->\n                                                                                            <!-- <i style=\"color:#fff\" class=\"fas fa-caret-right\"></i> -->\n                                                                                            <img class=\"bbb_viewed_nav bbb_viewed_next\" style=\"margin-left: -15px;\" src=\"public/assets/images/ang2.PNG\">\n                                                                                        </a>\n                                                                                    </div>\n                                                                                </div>\n                                                                            <!-- </div> -->\n                                                                        </div>\n                                                                    </div>\n                                                                                                                    \n                                                            </div>\n                                                    </div>', '#EF5C5C', '02b3943200f12efc2c6e9b0ff4be4b13.jpg', NULL, '323310.png', 'ammmaarrrrrrrrrrrrrrrr', NULL, NULL, '2022-08-25 10:23:37', '2022-09-02 09:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_15_151718_create_designs_table', 2),
(6, '2022_02_15_174147_add_new_column_theme_designs', 3),
(8, '2022_02_18_164057_create_new_column_personals_table', 4),
(10, '2022_02_18_174047_create_new_applications_table', 5),
(11, '2022_02_21_114127_add_new_columns_in_applications_table', 6),
(12, '2022_02_23_165138_creatae_new_contacts_table', 7),
(13, '2022_08_31_142121_create_social_positions_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `user_id`, `type`, `title`, `first_name`, `family_name`, `birthday`, `company`, `position`, `street`, `postal_code`, `city`, `country`, `phone_one`, `phone_two`, `mobile`, `fax`, `email_one`, `email_two`, `website_one`, `website_two`, `website_three`, `created_at`, `updated_at`) VALUES
(4, '3', 'business', 'Dolor', 'Noel', 'Elea', '2007-11-17', 'Mcfarland and Michael Associates', 'Facilis ut eius ut d', 'Maxime nisi ducimus', 'Minima rerum consect', 'Quod exercitation na', 'Repellendus Enim co', '+1 (919) 377-8596', '+1 (396) 382-5123', '+1 (772) 739-4906', '+1 (362) 895-6954', 'ciramoveq@mailinator.com', 'zonex@mailinator.com', 'https://www.ruzumiziwyga.us', 'https://www.vohywyjaj.org.au', 'https://www.xal.info', '2022-02-18 12:21:16', '2022-02-25 11:43:49'),
(5, '6', 'private', 'Sequi', 'Judah', 'Amos', '2006-01-10', NULL, NULL, 'Perferendis impedit', 'Consectetur Nam libe', 'Pariatur Natus quo ', 'Laboris animi non l', '+1 (759) 681-3303', '+1 (549) 141-1593', '+1 (196) 349-3608', '+1 (834) 966-7758', 'kocah@mailinator.com', 'beni@mailinator.com', 'https://www.cavenyvy.me', 'https://www.zyzerywevyz.com', 'https://www.zetowuqiperivuf.org.uk', '2022-02-21 12:31:54', '2022-02-21 12:31:54'),
(6, '7', 'private', 'Eanisi ', 'Celeste', 'Victor', '1987-10-02', NULL, NULL, 'Quibusdam fugiat in', 'Et facere eum esse s', 'Quam alias autem lab', 'Cupiditate et enim v', '+1 (844) 572-5082', '+1 (226) 834-2279', '+1 (325) 223-4606', '+1 (988) 923-7799', 'byzoqak@mailinator.com', 'nocuzedoki@mailinator.com', 'https://www.jizugurotovu.org.uk', 'https://www.hehyxi.org.au', 'https://www.widazo.cc', '2022-02-21 12:37:34', '2022-02-21 12:37:34'),
(7, '8', 'private', 'Magn', 'Laurel', 'Vera', '1992-02-22', NULL, NULL, 'Irure aliquip commod', 'Et assumenda ut rati', 'Fugiat porro eligen', 'Sequi est irure vol', '+1 (618) 212-7385', '+1 (882) 486-4068', '+1 (166) 796-5504', '+1 (984) 484-5214', 'cigaqeq@mailinator.com', 'qukupehi@mailinator.com', 'https://www.milykynuhaduhax.tv', 'https://www.jikuvacor.org.au', 'https://www.qoxaziqowewo.ws', '2022-02-21 13:36:11', '2022-02-21 13:36:11'),
(8, '28', 'business', 'M r Hafeez', 'hh', 'hh', '275760-09-09', 'hh', 'jiojioj', 'ijiojio', 'jjijij', 'jijio', 'jijioj', 'jijio', 'jjj', '31', '33', NULL, NULL, 'jio', 'ji', 'j', '2022-04-22 05:04:42', '2022-04-22 05:07:42'),
(9, '29', 'private', 'abxc', 'OJNJN', 'NN', '4353-04-24', NULL, NULL, '324', '9HO8098', '898', '8098', '908', '8098', '0980', '98', '090', '88', '890', '90', '898', '2022-04-22 20:34:22', '2022-04-22 20:34:22'),
(10, '31', 'private', 'dgdg', 'hihi', 'ihiu', NULL, NULL, NULL, '7', '67', 'hi', 'h', 'bb', 'ib', 'ib', 'ib', 'ib', 'ib', 'b', 'i', 'b', '2022-04-22 21:04:02', '2022-04-22 21:04:40'),
(11, '35', NULL, 'dd', NULL, NULL, '2022-07-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04 22:08:31', '2022-07-04 22:08:31'),
(12, '35', NULL, 'rr', 'rr', 'rr', '2022-07-12', 'rr', 'rr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04 22:12:05', '2022-07-04 22:12:05'),
(13, '36', NULL, 'Consequatur quidem a', 'Brett', 'Ryan Lowery', '1987-08-26', NULL, NULL, 'Iusto magnam assumen', 'Consequuntur consequ', 'Magnam non rerum tem', 'Autem impedit sit s', '85', '48', '86', '83', 'movurygiza@mailinator.com', 'gaxuwem@mailinator.com', 'https://www.qegy.net', 'https://www.fiqynog.org.uk', 'https://www.zuvyrusoq.me', '2022-07-05 15:53:08', '2022-07-05 15:53:08'),
(14, '36', NULL, 'Iure molestiae ut cu', 'Maia', 'Nigel Chandler', '2012-12-18', 'Chandler Crane Associates', 'Culpa in similique i', 'Reiciendis incidunt', 'Omnis illo qui ad co', 'Ullamco ex aliquam e', 'Vero laborum unde do', '9', '13', '92', '76', 'wytef@mailinator.com', 'bygih@mailinator.com', 'https://www.mekazefof.org.uk', 'https://www.nanyjopi.org', 'https://www.hyxa.cc', '2022-07-05 15:53:46', '2022-07-05 15:53:46'),
(15, '36', NULL, 'asdf', 'asdf', 'asdf', '2022-07-05', NULL, NULL, 'asdf', 'asdf', NULL, 'asdf', '0122', '555', '0125455555', '55555555', 'movurygiza@mailinator.com', 'gaxuwem@mailinator.com', 'https://www.qegy.net', 'https://www.fiqynog.org.uk', 'https://www.zuvyrusoq.me', '2022-07-05 15:54:33', '2022-07-05 15:54:33'),
(16, '36', NULL, 'asdfsf', 'asdfsf', 'asdfsf', '2022-07-05', 'asdffas', 'asdff', 'Araihazar, Narayanganj, Dhaka', NULL, 'Nobis quae quia est', 'Afghanistan', '555555555', '888888', '015425512222', '555555', 'movurygiza@mailinator.com', NULL, 'https://www.qegy.net', 'https://www.fiqynog.org.uk', 'https://www.zuvyrusoq.me', '2022-07-05 15:55:20', '2022-07-05 15:55:20'),
(17, '36', NULL, NULL, NULL, NULL, '2022-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05 15:55:27', '2022-07-05 15:55:27'),
(18, '36', NULL, 'Veniam illo aut num', 'Jameson', 'Lucian Banks', '1990-06-19', 'Wilkins Marshall Trading', 'Qui est doloribus ea', 'Officiis consequuntu', 'Eligendi voluptate i', 'Eum et nisi aut simi', 'Dolorem libero venia', '68', '87', '97', '8', 'vugymoqir@mailinator.com', 'lulefy@mailinator.com', 'https://www.celu.us', 'https://www.koxeb.us', 'https://www.myvisawohy.org.uk', '2022-07-05 15:56:08', '2022-07-05 15:56:08'),
(25, '38', 'private', 'ham sb umeeed se ha', 'shahrukh siddiqui', 'fri0rUMM2p', '2022-08-15', NULL, NULL, '2XFWvo0Ihm', 'KAKb7THAmw', 'UyFf8dJNth', 'qQT1YbiLHA', '562935', '592815', '502895', '817148', 'i77ux@xvhq.com', 'onfs2@s90f.com', 'Xls2FQ0KHC', 'mxMEIbuJsi', 'Ai5fetOcde', '2022-08-22 15:01:19', '2022-08-24 07:39:31'),
(27, '38', 'business', NULL, 'q5ISQ3orXy', '7pNiEMmxk2', NULL, 'jCkAGtvpE2', 'RkL2Ti2iti', 'uIpsOWcRa1', 'wh6hJQrecT', 'x2eQ3zatuV', 'Ve7GQFjfJu', '245866', '299198', '076321', '676238', 'g94lx@uous.com', 'frgrf@ozyg.com', 'GxJT0OizuP', 'fVZ5VbokF8', 'z3CZeKOkf6', '2022-08-23 14:14:20', '2022-08-23 14:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_positions`
--

CREATE TABLE `social_positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `social_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_positions`
--

INSERT INTO `social_positions` (`id`, `user_id`, `position`, `social_media`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 38, 4, 'instagram', 'insta.png', 1, NULL, '2022-09-02 07:31:51'),
(2, 38, 1, 'facebook', 'fb.png', 1, NULL, '2022-09-02 10:40:08'),
(3, 38, 2, 'twitter', 'tw.png', 1, NULL, '2022-09-02 07:33:59'),
(4, 38, 0, 'youtube', 'you.png', 1, NULL, '2022-09-02 10:40:08'),
(5, 38, 3, 'ball', 'ball.png', 1, NULL, '2022-09-02 07:31:51'),
(6, 38, 5, 'linkedin', 'link.png', 1, NULL, '2022-09-01 08:12:53'),
(7, 38, 6, 'tiktok', NULL, 1, '2022-09-01 09:03:37', '2022-09-01 09:07:47'),
(8, 38, 7, 'reddit', NULL, 1, '2022-09-01 09:07:34', '2022-09-01 09:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mac_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quora` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spotify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amazon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eagle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locaiton` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ball` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `user_id`, `ip_address`, `mac_address`, `messenger`, `instagram`, `twitch`, `telegram`, `reddit`, `quora`, `skype`, `viber`, `line`, `spotify`, `amazon`, `vimeo`, `eagle`, `locaiton`, `house`, `message`, `linkedin`, `facebook`, `ball`, `twitter`, `youtube`, `whatsapp`, `heart`, `phone`, `tiktok`, `snapchat`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 38, '::1', '28-16-AD-46-4D-C5   Media disconnected', NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, '1', '2022-08-31 10:10:17', '2022-08-31 10:10:17'),
(2, 38, '::1', '28-17-AD-46-4D-C5   Media disconnected', '', NULL, NULL, '', '', '', '', '', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, '1', '2022-09-02 08:36:54', '2022-09-02 08:36:54'),
(3, 38, '::1', '28-18-AD-46-4D-C5   Media disconnected', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '1', '2022-09-02 08:36:54', '2022-09-02 08:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_no_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_no_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `profile_image`, `email`, `phone_no`, `address_line_no_one`, `address_line_no_two`, `post_code`, `state`, `area`, `education`, `country`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Dr. Omer', 'Rashid', 'images/i2k6Pv5qxjWgQabzIsasMqrCgnlfOdWOUPVkzh9L.jpg', 'meharomer50@gmail.com', '324234567890', 'Street 121', 'Enim blanditiis erro', '55000', 'Et ea ut et modi com', 'Aliqua Ad delectus', 'Amet aut iure ratio', 'Pakistan', NULL, '$2y$10$NrNPL7nFWv2cgMc4czDgLOscRf6/J1ZRJB/cpufn5.Ry7myML/X.K', NULL, '2022-02-14 12:02:27', '2022-02-23 13:46:47'),
(24, 'Cheyenne', 'Clay', NULL, 'jymumanypo@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wD2mag5fkDuMZ3ON8OgAB./aNO3CONOfUfy9OKCa6zN5yG.ntM6fO', NULL, '2022-02-23 13:48:06', '2022-02-23 13:48:06'),
(25, 'Andy', 'Remy', NULL, 'remyar@live.de', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$11aFT/4dC426.ePQJU1ICOuBZJFQqMLt1tVb5UkIFsp7wY8N86/cK', NULL, '2022-04-02 07:30:03', '2022-04-02 07:30:03'),
(26, 'Adnan Khan', 'khan', NULL, 'adnankhan0999@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$gcqDlzro9B5qjKn3glHHCeOl8t6Dd54yPEo0k/fC./IfU7TMFGOgG', NULL, '2022-04-02 10:25:49', '2022-04-02 10:25:49'),
(27, 'test1 fn', 'test1 ln', 'images/KvWeaVg9lxcxHpqmyPYDz8VWzWx31tNXMjPQkwnt.jpg', 'test1@email.com', '0123456789', 'gsfdg', 'ert', 'asdf', 'sdfasd', 'asdf', 'wqer', 'qwer', NULL, '$2y$10$CgFyHq7UnC3tM/FtrFIu9eX2Wol8J4ld8xS2B0tUYtR98TZQXNjYa', NULL, '2022-04-04 20:57:28', '2022-04-11 20:14:29'),
(28, 'Hafeez', 'Rahman', 'images/zHCSfiNrTmMK3AD2so7OhiEiduqMq0cpNAGCYFzF.jpg', 'hafeezsoomrorehman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$2bEhYSxiVcOiEMeaV/D30eXbDDBjqe4jCgmB5cKjSJjdSwpgwQriK', NULL, '2022-04-06 19:03:55', '2022-04-22 05:17:43'),
(29, 'team', 'hafeez', 'images/GvbV05Rr7nURLhV1TxhLhBzYnKL19VCNVGx33Vgv.jpg', 'team@hafeez.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lvN15Gmmi.ax/lxgkpgtQecszlFMjRX99.RxlYisnnULjMSUY3epi', NULL, '2022-04-22 20:28:03', '2022-04-22 20:42:27'),
(30, 'adnan', 'team', NULL, 'adnan@team.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$vDvCdfyOnyWRx0xbEtRgieFLLvmR31yQa6HiV0DzyOKU2MWXs9yom', NULL, '2022-04-22 20:31:27', '2022-04-22 20:31:27'),
(31, 'hafeez', 'team', 'images/XkmW4qnXEjrvNBcMKMgiWuOrnsmJCi2K6RUCwSlI.jpg', 'hafeez@weunit.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$d5PLqthbM6.YF3O56J6Yg.TI6WWkLimsJAKD5EigGI15VB7lpuzmC', NULL, '2022-04-22 20:59:56', '2022-04-22 21:02:57'),
(32, 'Farooq', 'Khan', NULL, 'khan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SpQjl/8qwstIm4.lSyIWUuy2c3fLR9QcL.CtwVQLkdc5Iu0ewnkki', NULL, '2022-05-17 13:04:37', '2022-05-17 13:04:37'),
(33, 'Melvin', 'Logan', NULL, 'wyxip@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$3Jyy3Nlhedsgxb/.pA57tuc9B3KstfTi8qNfdsSjYusRtU3xB/M4m', NULL, '2022-05-30 08:31:30', '2022-05-30 08:31:30'),
(34, 'Suleman', 'Abbas', 'images/05302022091350am.png', 'salmanabbas@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$vjmLDRdpmPFB.PoLKhg8LOnnNJEiNBTnisCHW2Gn.gqygC0Rbiko2', NULL, '2022-05-30 09:11:53', '2022-05-30 10:05:29'),
(35, 'Sultan', 'Bayezid', NULL, 'edu@lastlineweb.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$FkeRSQ2BFq4e5Fv0Ksv2fOXxPA23qeCZvQEg1sWElyQvi8yR.vzEm', NULL, '2022-07-04 21:57:17', '2022-07-04 22:13:03'),
(36, 'kamal', 'hossen', '20220706162018850.jpg', NULL, '01868799280', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', NULL, '$2y$10$LGdv47EAMtQLYTVlGWCVKeqohN4eKeO1Wm7nkzvov/O4HD6/snDA.', NULL, '2022-07-05 15:35:13', '2022-07-06 16:20:17'),
(37, 'Ars', 'Khan', NULL, 'arslankk40@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$r5zq5N/YmHuEBYzh96aAi.lAEtUYz02SQFSZB9PHl9n5t.bHZMrfm', NULL, '2022-08-22 07:24:58', '2022-08-22 07:24:58'),
(38, 'Shahrukh Akhter', 'siddiqui', '202208241219ASS.webp', 'srkshah1998@gmail.com', '0999876543', '321321wwedd', 'norway gali2', '11223', 'karchi', NULL, 'graduated', 'Pakistan', NULL, '$2y$10$aRTmXk2tjXdFwR4jf90EMOMKMzBTues7s0MV1UcSVxXXHMzQxCoRa', NULL, '2022-08-22 07:45:11', '2022-08-24 07:19:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `social_positions`
--
ALTER TABLE `social_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_positions_user_id_foreign` (`user_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_positions`
--
ALTER TABLE `social_positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `social_positions`
--
ALTER TABLE `social_positions`
  ADD CONSTRAINT `social_positions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
