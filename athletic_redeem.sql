-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2018 at 12:08 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athletic_redeem`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `code_name` varchar(50) DEFAULT NULL,
  `code_value` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `code_name`, `code_value`, `created_at`, `updated_at`) VALUES
(1, 'contact_email', NULL, NULL, NULL),
(2, 'token_address', NULL, NULL, NULL),
(3, 'net_type', 'real', '2018-05-18 23:50:28', '2018-05-18 23:50:29'),
(4, 'siteTitle', NULL, NULL, NULL),
(5, 'siteDesc', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `real` varchar(50) DEFAULT NULL,
  `test` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `real`, `test`, `created_at`, `updated_at`) VALUES
(1, '0x7eBb8e2e72891d08C495433075C64c223623E809', '0x9e26750041f442f13748b181596a88E72338Cd90', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('skyclean906@gmail.com', '$2y$10$POzkhb8Y4u1fiFGYDwvJzOMcyK5Bhmah184EkOQd2JeC9UVuoOsyy', '2018-05-22 23:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `redeems`
--

CREATE TABLE `redeems` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `redeem_code` varchar(255) DEFAULT NULL,
  `redeem_date` timestamp NULL DEFAULT NULL,
  `target_address` varchar(255) DEFAULT NULL,
  `private_key` varchar(255) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `received_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redeems`
--

INSERT INTO `redeems` (`id`, `title`, `description`, `redeem_code`, `redeem_date`, `target_address`, `private_key`, `amount`, `status`, `created_by`, `received_by`, `created_at`, `updated_at`) VALUES
(2, 'redeem1', 'redeem1 description', 'MMRA8Eh0jauO', NULL, '7ccf4a03066c3377f80db2faa77ce68b0928d9d0', '28f96862cec618909463a64e0400172fb1516c4d34f15474e3c4d94cc844c97d', '3000', NULL, 2, NULL, '2018-05-19 12:03:38', '2018-05-19 12:03:38'),
(3, 'redeem2', 'redeem2 description', '4TYNNib54OooHvy5', NULL, '437fd79b5ef318e526cad43933b189013f101c62', 'd26796a19f4e45fec1c3f69d87926585e56da0a4268e3cd1abc56a85f892df80', '2000', NULL, 2, NULL, '2018-05-19 12:11:16', '2018-05-19 12:48:46'),
(4, 'bb', 'bb', 'Lg9vXYqy1lkT5pi3', NULL, 'ac616f1c4423deee49f1c8b71c0a889cd39b47da', '877603182f22ff23ed471615d8e9e9c9bed491059249d2b6e9cc8018e44220ab', '1020', NULL, 2, NULL, '2018-05-21 21:30:35', '2018-05-21 21:31:55'),
(5, 'aaaaaaaa', 'aaaaaaaaaa', 'j4BbTXMPQKaYMwnd', NULL, 'd8a67cb14ff61ee7d0b48214a38f1b6df8f38925', '206ef7b9f8fd78e0e42cd89da0d42642a79adc2eaa4ace9777b5046822a4a48c', '1000', NULL, 2, NULL, '2018-05-21 21:59:15', '2018-05-21 21:59:15'),
(6, 'bbbbbbbbbbbb', 'bbbbbbbbbbb', 'oGEZORLq9GFgqeIi', '2018-05-21 22:51:10', 'b279cbd23263c94b236d22d2a7ff3c6725db096a', '613bde4482866dfd00811742ac4d05dbe29add33878118485e2b448821bac8c4', '2000', NULL, 2, 2, '2018-05-21 22:00:24', '2018-05-21 22:51:10'),
(7, 'ccccccccccccc', 'ccccccccc', 'beCHVqG0TzDvp5wd', NULL, '3fc488aa0bd2869d208543964165ba70531313a8', '57b7f5d69abfabc63b8f9fc99f67ac3ad06f4bc1f85cdd22521b8fd8c97ee295', '1000', NULL, 2, NULL, '2018-05-22 05:45:14', '2018-05-22 05:45:14'),
(8, 'Game MVP 201805', 'MVP Award for 5.2018 Game', 'rDANA3MOJAellUiM', '2018-05-30 00:56:14', 'ea1fba80c5124786165c6775c2af2910a8bab726', 'f067874f99390ba67d22f868acb9c4092f609463ffbc3189c097e500cc746688', '1000', NULL, 3, 3, '2018-05-30 00:55:12', '2018-05-30 00:56:14'),
(9, 'Texas 2step Survivor', 'Congratulations! You survived the Texas 2step in El Paso!', 'JMyfeO2MXwHNRD6O', '2018-05-30 01:03:30', 'b373daae44ebb947dac21e9db8b0eb2ebfd3e407', 'c34e47774e06ba1655f78e286821e14d76f1c56edef52fe3a1193a5c2664f713', '1000', NULL, 4, 5, '2018-05-30 01:00:43', '2018-05-30 01:03:30'),
(11, 'testing', 'testing', 'PWXt0p8HNK3EEAwj', '2018-05-30 07:51:54', '5ab800e0a3986b1e40c0206876550d74f1df4884', 'a9c776ac34a37ce49df0b221ef40af37735f7a9958fe9ea111a0631e8051a43b', '1000', NULL, 6, 6, '2018-05-30 07:51:18', '2018-05-30 07:51:54'),
(12, '2018053 Game MVP', 'test game mvp', 'NdaciyfsXFz39ANg', '2018-05-30 07:58:57', '624f853d5a2daf0874cefb605371144f181d3c2a', 'db0b1c44999e854c226358575bbd3a8e87533a7cb8e60e19261f1cc598bbd0da', '1000', NULL, 6, 6, '2018-05-30 07:58:34', '2018-05-30 07:58:57'),
(13, 'IWFL Forfeit Award', 'Forfeit Award', 'eb9iGF6rWHUitzZ3', NULL, '82750750b0299939a48f4eb23fbbcb2ceb8a9037', '6fa546002ac5b62f26729d100fc94c82e6668fcaee51cfa564fea8d64f54b95a', '1000', NULL, 7, NULL, '2018-06-02 02:00:50', '2018-06-02 02:00:50'),
(14, 'IWFL Forfeit Award 2', 'Forfeit Award 2', 'XMYMFvFZmJG6XSkZ', NULL, 'd6d5bddae584731bd14cd6f91b3428a3a1dd9c48', 'a5a476858e0b41ea7f50ebef0fd3431fc5bb35d57d235c52b442ba7ed411b30a', '1000', NULL, 7, NULL, '2018-06-02 02:04:33', '2018-06-02 02:04:33'),
(15, 'Test Game MVP', 'test', 'JQNwIhxryp8qOPed', '2018-06-05 18:32:30', '986971d493365f328e962f707074be3b427c780a', 'b01812c019fdeb7da6bb52a7a328e8dbe737968ed0135873dce47142d99d5a12', '1000', NULL, 3, 3, '2018-06-04 05:38:53', '2018-06-05 18:32:30'),
(16, 'Test ATHA Redeem', 'test', 'POvS1Ys9sgwKy4in', NULL, 'cdd38133fdc0480193ff235b27e33141acb48692', '4aebbc6d86310816e86d9bfb11ec809363a98eb07ad229c0b83abd22bd2cc84d', '1000', NULL, 3, NULL, '2018-06-05 18:56:08', '2018-06-05 18:56:08'),
(17, 'IWFL Regulators No Forfeits', '2018 IWFL Regulators No Forfeits', 'iUkIvZw9dgBD1zpa', '2018-06-19 17:32:00', '2511a90562b28e4abe7c8133a0d26e0b2d072201', 'ab198025fb9f93d0a46c23c403204beac033bb8620983901a083848df1cc81dc', '1000', NULL, 8, 11, '2018-06-09 20:40:46', '2018-06-19 17:32:00'),
(18, 'IWFL Phantomz No Forfeits', '2018 IWFL Phantomz No Forfeits', 'tJfRrqTKLwCQIgfu', '2018-06-18 14:18:40', '10595da05edbac87d71ae6ad939814550fe726f9', '47793a009286a11ef7faecb58e433052fc49ea953b56471465c52333658c5444', '1000', NULL, 8, 10, '2018-06-09 20:41:31', '2018-06-18 14:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `league_id` int(11) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `event_hostname` varchar(100) DEFAULT NULL,
  `event_hostemail` varchar(100) DEFAULT NULL,
  `event_hostwallet` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL COMMENT '[closed, active]',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `sport_id`, `league_id`, `event_name`, `event_hostname`, `event_hostemail`, `event_hostwallet`, `status`, `created_at`) VALUES
(1, 1, 1, 'event_name', 'event_hostname', 'event@mail.com', '0x2e58778ab9106376391f141b1b858171bc7babf3', 'closed', '2018-06-11 15:22:01'),
(2, 1, 2, 'aaaaa', 'bbbbbb', 'cccc@gmail.com', '0x2e58778ab9106376391f141b1b858171bc7babf3', 'active', '2018-06-11 15:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fans`
--

CREATE TABLE `tbl_fans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `wallet_address` varchar(100) DEFAULT NULL,
  `private_key` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fans`
--

INSERT INTO `tbl_fans` (`id`, `name`, `email`, `password`, `phone_number`, `country`, `wallet_address`, `private_key`, `created_at`, `updated_at`) VALUES
(1, 'skyclean', 'skyclean906@gmail.com', '12341234', 'clean', 'USA', '0x65A05c896d9A6f428B3936ac5db8df28752Ccd44', '6ede3ee4e9c6198ef1837dff04440942e085cf663024331ed0686b0087f45393', '2018-06-09 22:42:01', '2018-06-09 22:42:01'),
(2, 'test', 'test@gmail.com', '12341234', 'clean', 'USA', '0x2e58778ab9106376391f141b1b858171bc7babf3', '6ede3ee4e9c6198ef1837dff04440942e085cf663024331ed0686b0087f45393', '2018-06-09 22:42:01', '2018-06-09 22:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leagues`
--

CREATE TABLE `tbl_leagues` (
  `id` int(11) NOT NULL,
  `LeagueName` varchar(35) DEFAULT NULL,
  `LeagueCode` varchar(4) DEFAULT NULL,
  `LeagueEmail` varchar(25) DEFAULT NULL,
  `LeaguePhone` int(11) DEFAULT NULL,
  `LeagueWallet` varchar(0) DEFAULT NULL,
  `StartDate` varchar(19) DEFAULT NULL,
  `EndDate` varchar(0) DEFAULT NULL,
  `Active` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_leagues`
--

INSERT INTO `tbl_leagues` (`id`, `LeagueName`, `LeagueCode`, `LeagueEmail`, `LeaguePhone`, `LeagueWallet`, `StartDate`, `EndDate`, `Active`) VALUES
(1, 'league_aaa', '1111', 'league_aaa@gmail.com', 12515, NULL, NULL, NULL, NULL),
(2, 'league_bbb', '2222', 'league_bbb@gmail.com', 125125515, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL DEFAULT '0',
  `league_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `first_name` varchar(9) DEFAULT NULL,
  `last_name` varchar(13) DEFAULT NULL,
  `type` varchar(6) DEFAULT NULL,
  `PartNumber` int(11) DEFAULT NULL,
  `PosIDpart` int(11) DEFAULT NULL,
  `PartWallet` varchar(0) DEFAULT NULL,
  `StartDate` varchar(19) DEFAULT NULL,
  `EndDate` varchar(0) DEFAULT NULL,
  `Active` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`id`, `event_id`, `league_id`, `team_id`, `first_name`, `last_name`, `type`, `PartNumber`, `PosIDpart`, `PartWallet`, `StartDate`, `EndDate`, `Active`) VALUES
(1, 1, 1, 1, 'Micaila', 'Minnix', 'player', 19, 4, '', '2018-05-28 10:48:48', '', 'True'),
(3, 0, 1, 1, 'Danielle', 'Musick', 'player', 35, 7, '', '2018-05-28 10:48:48', '', 'True'),
(5, 0, 1, 1, 'Tania', 'Bashford', 'player', 33, 8, '', '2018-05-28 10:48:48', '', 'True'),
(7, 0, 1, 1, 'Natasha', 'Aiono', 'player', 27, 10, '', '2018-05-28 10:48:48', '', 'True'),
(9, 0, 1, 1, 'Camille', 'Brimhall', 'player', 25, 8, '', '2018-05-28 10:48:48', '', 'True'),
(11, 0, 1, 1, 'Maki', 'Yamagata', 'player', 22, 1, '', '2018-05-28 10:48:48', '', 'True'),
(13, 0, 1, 1, 'Keeshya', 'Cox', 'player', 20, 10, '', '2018-05-28 10:48:48', '', 'True'),
(15, 0, 1, 1, 'Andrea', 'Chilton', 'player', 16, 11, '', '2018-05-28 10:48:48', '', 'True'),
(17, 0, 1, 1, 'Louise', 'Bean', 'player', 13, 9, '', '2018-05-28 10:48:48', '', 'True'),
(19, 0, 1, 1, 'Sara', 'Galica', 'player', 10, 1, '', '2018-05-28 10:48:48', '', 'True'),
(21, 0, 1, 1, 'Elizabeth', 'Lane', 'player', 8, 9, '', '2018-05-28 10:48:48', '', 'True'),
(23, 0, 1, 1, 'Veronica', 'Siqueiros', 'player', 5, 10, '', '2018-05-28 10:48:48', '', 'True'),
(25, 0, 1, 1, 'Lyndi', 'Prestgard', 'player', 21, 7, '', '2018-05-28 10:48:48', '', 'True'),
(27, 0, 1, 1, 'Kaitlan', 'Reiff', 'player', 89, 11, '', '2018-05-28 10:48:48', '', 'True'),
(29, 0, 1, 1, 'Elisa', 'Salazar', 'player', 81, 1, '', '2018-05-28 10:48:48', '', 'True'),
(31, 0, 1, 1, 'Jessilyn', 'Burk', 'player', 78, 7, '', '2018-05-28 10:48:48', '', 'True'),
(33, 0, 1, 1, 'Kendra', 'Hall', 'player', 74, 3, '', '2018-05-28 10:48:48', '', 'True'),
(35, 0, 1, 1, 'Shauna', 'Loftin', 'player', 72, 8, '', '2018-05-28 10:48:48', '', 'True'),
(37, 0, 1, 1, 'Mary', 'Efraim', 'player', 38, 10, '', '2018-05-28 10:48:48', '', 'True'),
(39, 0, 1, 1, 'Jamelle', 'Winston', 'player', 41, 7, '', '2018-05-28 10:48:48', '', 'True'),
(41, 0, 1, 1, 'Christina', 'Mangum', 'player', 58, 8, '', '2018-05-28 10:48:48', '', 'True'),
(43, 0, 1, 1, 'Kaelene', 'Colobella', 'player', 54, 2, '', '2018-05-28 10:48:48', '', 'True'),
(45, 0, 1, 1, 'BreAnn', 'Cintron', 'player', 52, 8, '', '2018-05-28 10:48:48', '', 'True'),
(47, 0, 1, 1, 'Quinn', 'Wesley', 'player', 50, 8, '', '2018-05-28 10:48:48', '', 'True'),
(49, 0, 1, 1, 'Maira', 'Alcala', 'player', 44, 1, '', '2018-05-28 10:48:48', '', 'True'),
(51, 0, 1, 1, 'Jennifer', 'Marie', 'player', 64, 3, '', '2018-05-28 10:48:48', '', '\"Tru');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_selling_requests`
--

CREATE TABLE `tbl_selling_requests` (
  `id` int(11) NOT NULL,
  `selling_amount` varchar(50) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_selling_requests`
--

INSERT INTO `tbl_selling_requests` (`id`, `selling_amount`, `seller_id`, `buyer_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, '2000', 1, 0, '0.01', 'open', '2018-06-11 20:35:36', '2018-06-11 20:43:42'),
(3, '3000', 1, 1, '0.002', 'closed', '2018-06-11 20:40:05', '2018-06-11 20:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sports`
--

CREATE TABLE `tbl_sports` (
  `id` int(11) NOT NULL,
  `SportName` varchar(8) DEFAULT NULL,
  `SportDescription` varchar(8) DEFAULT NULL,
  `AdultYouth` varchar(5) DEFAULT NULL,
  `StartDate` varchar(19) DEFAULT NULL,
  `EndDate` varchar(0) DEFAULT NULL,
  `Active` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_sports`
--

INSERT INTO `tbl_sports` (`id`, `SportName`, `SportDescription`, `AdultYouth`, `StartDate`, `EndDate`, `Active`) VALUES
(1, 'sport_aa', 'sport_bb', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) NOT NULL,
  `league_id` int(11) DEFAULT NULL,
  `TeamName` varchar(7) DEFAULT NULL,
  `TeamCity` varchar(4) DEFAULT NULL,
  `TeamEmail` varchar(19) DEFAULT NULL,
  `TeamPhone` varchar(0) DEFAULT NULL,
  `TeamWallet` varchar(0) DEFAULT NULL,
  `StartDate` varchar(19) DEFAULT NULL,
  `EndDate` varchar(0) DEFAULT NULL,
  `Active` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_votes`
--

CREATE TABLE `tbl_votes` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `fan_id` int(11) DEFAULT NULL,
  `part_id` int(11) DEFAULT NULL,
  `vote_amount` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_votes`
--

INSERT INTO `tbl_votes` (`id`, `event_id`, `fan_id`, `part_id`, `vote_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1000', NULL, '2018-06-11 16:10:41', '2018-06-11 20:51:00'),
(2, 1, 2, 1, '2000', NULL, '2018-06-11 16:11:50', '2018-06-11 20:50:59'),
(3, 1, 2, 3, '2000', NULL, '2018-06-11 16:11:50', '2018-06-11 20:50:58'),
(4, 1, 1, 1, '3000', NULL, '2018-06-11 20:50:45', '2018-06-11 20:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@ex.com', '$2y$10$pqPHk09XKAvp/tYEnpMU/OVVyz8twjS7ntw6q7/twX7yaUdtQy17S', 5, 'vprHcftTvTmgWnbqcY0tc5q4F28s9sEX368c1OVT7zUIxzmpsZd7AHk3OxrZ', '2018-05-13 01:22:27', '2018-05-13 01:22:27'),
(2, 'skyclean', 'skyclean906@gmail.com', '$2y$10$FQbElANnMVZlrwIS3shME.HRLOxcwaQPPD.Lw0UqtDTv8NqUewPBG', 0, 'mpLc5T0BtJyC9EJO9etRzqgMDK3Ly43QGizW51XIpxcLVzjK84VbA6GgBkoc', '2018-05-18 08:25:46', '2018-05-30 08:19:40'),
(3, 'Your Name', 'yourname@email.com', '$2y$10$b1noUl8RkPEGbF3aCuY/M.1KTtLiFZkNyD1aTE7Ts.H3.bW.2qW9a', 0, '1Vqn2yHbcZeWd6xmjrSYXSR6kEO8DFKqQtU2g58seJptNWdQyrQXwD9y0rT8', '2018-05-30 00:51:27', '2018-05-30 08:34:33'),
(4, 'Kezia Disney', 'info@deysini.com', '$2y$10$3AKE8dbrcpLqiIbUYpmELuNI9pqBK5G1fko95mwBQeRwvdgV9SEc2', NULL, 'wdmgzPw35IB7I874U3BkaskTFFHiekRPNVSKTXNZ7iP0Ateeo1HVXBWdcxXm', '2018-05-30 00:53:04', '2018-05-30 00:53:04'),
(5, 'K. Disney', 'kdisney@iwflsports.com', '$2y$10$xdyIrq8qV5q8Z7fCFw2gB.gchWsMVKJNPW0PsBh72QomshRBUaUXG', NULL, 'LV96XhS3NRXTBnnh7uVNvClmijlsoIL6gE45CXjH1HbpVBqUH0xbjHoZ55Ip', '2018-05-30 01:03:20', '2018-05-30 01:03:20'),
(6, 'Your Name', 'youremail@email.com', '$2y$10$kYg4Vt7uebjOBv62LoPdXOq4NWbEBAnBFMDm34ldORFpXd/uusdhm', NULL, 'ldPGwYM6tokCwhWXOBVAxjNm7wtnZjyzC8eSLl1YyDgVu6V4zNdWwcOkBGdo', '2018-05-30 01:27:54', '2018-05-30 01:27:54'),
(7, 'Laurie Frederick', 'lauriefrederick@live.com', '$2y$10$8/x.4IhncnVlq.IidL02N.TQspLMXyHO/rpX2AfyhpLlgSNuYcZhW', NULL, NULL, '2018-06-02 01:50:41', '2018-06-02 01:50:41'),
(8, 'Laurie Frederick', 'lfrederick@iwflsports.com', '$2y$10$HpgDefwfUoJ5aYl22pZQqe4gW1UEHcb6OfbpPbH1PuwXFi4rBvNSu', NULL, 'ACTklNSqYGKNwlT5NON8fxUr4tSCqMAneDPNV0lWDSPlcaeslWGlbdgvaNmM', '2018-06-09 20:01:32', '2018-06-09 20:01:32'),
(9, 'Sara Cavenaugh', 'saracavenaugh@gmail.com', '$2y$10$uSHtROTdBG4j3XuhFObdT.CEc3Gvz4chi1fq8OW/wdIcHwkFRwe5.', NULL, NULL, '2018-06-14 01:11:04', '2018-06-14 01:11:04'),
(10, 'Tabitha McBride', 'mcbridetab@hotmail.com', '$2y$10$nPS7qKqnfgNs2AufhK969uNlyFIJExFyL3ufuUqJxVw1nLX/onpwm', NULL, 'sdJskFnhnE41pUVJUcnbhWxUh1OPccBxyBt7TKjWmSLXNu5zioMvV4BqbuDh', '2018-06-18 14:18:04', '2018-06-18 14:18:04'),
(11, 'Patricia Francois', 'saregulatorsowner@gmail.com', '$2y$10$2JC1fnSt8Cl5JDHDQ1c30.shT4x9pUp6eqre38g6Q9qExzTBW2i6y', NULL, NULL, '2018-06-19 17:31:07', '2018-06-19 17:31:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `redeems`
--
ALTER TABLE `redeems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fans`
--
ALTER TABLE `tbl_fans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leagues`
--
ALTER TABLE `tbl_leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_selling_requests`
--
ALTER TABLE `tbl_selling_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sports`
--
ALTER TABLE `tbl_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_votes`
--
ALTER TABLE `tbl_votes`
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
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `redeems`
--
ALTER TABLE `redeems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fans`
--
ALTER TABLE `tbl_fans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_leagues`
--
ALTER TABLE `tbl_leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_selling_requests`
--
ALTER TABLE `tbl_selling_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sports`
--
ALTER TABLE `tbl_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_votes`
--
ALTER TABLE `tbl_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
