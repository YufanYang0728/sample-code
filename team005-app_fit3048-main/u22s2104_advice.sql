-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 05:37 PM
-- Server version: 5.7.42
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u22s2104_advice`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `messages` mediumtext NOT NULL,
  `response` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `messages`, `response`) VALUES
(1, 'hi|hey|hello|hy', 'Hello, how can I help you today?'),
(6, 'How can I find some info about retirement?', 'You can go to the link below: https://www.nerdwallet.com/investing/retirement-calculator'),
(9, 'What is the inflation rate?', 'The current Australia\'s inflation rate is 8%.'),
(10, 'help | Please help me | I don\'t know | I dont know | What can you do | I want help', 'Enter:\r\n- retirement to get retirement info\r\n- investment to get investment info\r\n- super to get super info\r\n- inflation rate to get the current inflation rate\r\n- calculator to get our calculator info\r\n- or send us an email for staff to contact you\r\n'),
(11, 'What is the calculator function?', 'You can check our calculator function: Select My Account -> Dashboard -> Calculator'),
(12, 'I want to check my investment | I want to calculate my investment | I want to get my investment info.', 'You can check our investment function: Select My Account -> Dashboard -> Investment'),
(13, 'I want to manage my super | I want to choose a super company', 'You can check our Super function: Select My Account -> Dashboard -> Super');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `investment_id` int(11) NOT NULL,
  `investment_name` varchar(255) NOT NULL,
  `admin_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`investment_id`, `investment_name`, `admin_fee`) VALUES
(1, 'Netwealth Cash', 1.96),
(2, 'Aberdeen Actively Hedged Intl Equities', 2.36),
(3, 'Aberdeen Asian Opportunities', 1.02),
(4, 'Aberdeen Australian Fixed Income', 2.52),
(5, 'Aberdeen Australian Small Companies', 1.31),
(6, 'Aberdeen Diversified Fixed Income', 3.00),
(7, 'Aberdeen Emerging Opportunities', 1.16),
(8, 'Aberdeen Global Government Bond', 2.03),
(9, 'Aberdeen International Equity', 1.44),
(10, 'Aberdeen Multi-Asset Income', 2.48),
(11, 'Acadian Wholesale Aus Equity Long Short', 2.46),
(12, 'Acadian Wholesale Australian Equity', 2.93),
(13, 'Acadian Wholesale Global Eqty Long Short', 1.78),
(14, 'Advance Alleron Aus Equity Growth W', 2.45),
(15, 'Allan Gray Australia Equity', 2.40),
(16, 'AMP Capital Core Infrastructure A', 2.22),
(17, 'AMP Capital Core Property A', 1.20),
(18, 'AMP Capital Corporate Bond A', 1.96),
(19, 'AMP Capital Global Property Securities A', 1.96),
(20, 'AMP Capital Wholesale Global Equity - Value Fund', 1.40),
(21, 'Antares Prof Elite Opportunities', 2.10),
(22, 'Antares Prof High Growth Shares', 1.44),
(23, 'Antares Prof Listed Property', 1.96),
(24, 'Antares Prof Small Companies', 1.90),
(25, 'APN AREIT', 1.30),
(26, 'AQR WS DELTA 1F', 1.95),
(27, 'Armytage Australian Equity Income', 1.45),
(28, 'Arnhem Australian Equity', 1.49),
(29, 'Arrowstreet Global Equity Hedged', 4.85),
(30, 'Aspect Diversified Futures-Class A', 8.05),
(31, 'Aspen Parks Wholesale Prop', 1.90),
(32, 'AUI Platypus Aust Equities Wholesale', 1.40),
(33, 'AUI Strategic Fixed Interest Trust - Wholesale', 1.56),
(34, 'Aurora Dividend Income Trust', 1.64),
(35, 'Aurora Fortitude Absolute Return', 1.80),
(36, 'Ausbil Australian Active Equity', 3.51),
(37, 'Ausbil Australian Emerging Leaders', 2.40),
(38, 'Ausbil Australian Geared Equity', 6.20),
(39, 'Ausbil MicroCap', 3.30),
(40, 'Aust Unity Acorn Capital Ws Microcap Tr', 3.25),
(41, 'Aust Unity Wholesale Healthcare Property', 1.86),
(42, 'Aust Unity Wholesale Property Income', 1.35),
(43, 'Australian Ethical Larger Companies B', 1.35),
(44, 'Australian Ethical Smaller Companies B', 0.00),
(45, 'Australian Unity Altius Bond Fund', 2.00),
(46, 'Bennelong Australian Equities', 2.61),
(47, 'Bennelong Avoca Emerging Leaders', 3.78),
(48, 'Bennelong Concentrated Australian Eq', 5.73),
(49, 'Bennelong ex-20 Australian Equities', 1.63),
(50, 'Bennelong Kardinia Absolute Return Fund', 1.75),
(51, 'BlackRock Australian Eq Absolute Return', 3.56),
(52, 'BlackRock Australian Eq Opportunities', 0.75),
(53, 'BlackRock Global Allocation Aus D', 0.51),
(54, 'BlackRock Indexed Aus Listed Property', 0.46),
(55, 'BlackRock Indexed Australian Bond', 0.51),
(56, 'BlackRock Indexed Australian Equity Fund', 0.20),
(57, 'BlackRock Indexed Hedged Intl Equity', 0.55),
(58, 'BlackRock Indexed Int Equity Fund', 2.06),
(59, 'BlackRock Scientific Global Markets', 1.10),
(60, 'BlackRock W Monthly Income D', 1.90),
(61, 'BlackRock WS Australian Share', 2.32),
(62, 'BlackRock WS Global Small Capital', 2.60),
(63, 'BlackRock WS Hedged Global Small Capital', 0.00),
(64, 'Blue Sky Apeiron Global Macro A', 0.00),
(65, 'BNY Mellon Global Alpha A', 1.80),
(66, 'BT Imputation Shr WS', 1.30),
(67, 'BT Wholesale Property Securities Fund', 1.92),
(68, 'Capital International Global Equity', 1.92),
(69, 'Capital International Global Equity Hgd', 5.46),
(70, 'Celeste Australian Small Companies', 2.46),
(71, 'CFS Global Soft Commodity Share', 1.93),
(72, 'CFS Wholesale Australian Share-Core', 2.08),
(73, 'CFS Wholesale Colliers Glb Property Sec', 1.04),
(74, 'CFS Wholesale Enhanced Yield', 2.51),
(75, 'CFS Wholesale Equity Income', 3.00),
(76, 'CFS Wholesale Geared Share', 1.25),
(77, 'CFS Wholesale Global Credit Income', 2.38),
(78, 'CFS Wholesale Global Resources', 1.94),
(79, 'CFS Wholesale Imputation', 2.47),
(80, 'CFS WS Glb Listed Infrastructure', 0.00),
(81, 'Challenger GIF 5.60 cents pa 30 Jun 2015', 0.00),
(82, 'Challenger Guaranteed Pen - 30 June 2017', 0.00),
(83, 'Challenger Guaranteed Pen - 30 June 2021', 1.39),
(84, 'Clime Australian Value WS', 1.95),
(85, 'Cromwell Phoenix Property Securities', 3.00),
(86, 'DDH Global Fixed Interest Alpha', 2.24),
(87, 'DWS Global Equity Agribusiness', 2.48),
(88, 'Eley Griffiths Group Small Companies', 3.00),
(89, 'EQT Intrinsic Value Intl Sharemarkets', 2.20),
(90, 'EQT SGH LaSalle Global Listed Prop Secs', 1.91),
(91, 'EQT SGH Wholesale Prop Income', 1.68),
(92, 'EQT Wholesale Flagship Fund', 2.30),
(93, 'Fidelity Asia Fund', 1.70),
(94, 'Fidelity Australian Equities', 2.40),
(95, 'Fidelity China', 2.30),
(96, 'Fidelity Global Equities', 2.40),
(97, 'Fidelity India', 3.08),
(98, 'Fiducian India Fund', 0.00),
(99, 'Firstmac High Livez', 0.90),
(100, 'Franklin Templeton Multisector Bond W', 4.17),
(101, 'GaveKal Asian Opportunities Fund', 1.90),
(102, 'Goldman Sachs Australian Equities WS', 1.58),
(103, 'Goldman Sachs Core Plus Aus Fix Inc-Ord', 2.44),
(104, 'Goldman Sachs International WS', 2.60),
(105, 'Grant Samuel Epoch Gbl Eq Shldr Yld Hgd', 2.50),
(106, 'Grant Samuel Epoch Gbl Eq Shldr Yld Uhgd', 2.49),
(107, 'Grant Samuel Tribeca Alpha Plus', 2.41),
(108, 'GVI Aubrey Global Growth & Income Hedged', 4.26),
(109, 'Hunter Hall Australian Value Trust', 4.04),
(110, 'Hunter Hall Global Deep Green Trust', 4.14),
(111, 'Hunter Hall Global Ethical Trust', 3.67),
(112, 'Hunter Hall Value Growth Trust', 1.92),
(113, 'Hyperion Australian Growth Companies', 3.73),
(114, 'Hyperion Small Growth Companies', 1.95),
(115, 'Ibbotson Diversified Alternatives Trust', 0.97),
(116, 'Ibbotson Dynamic Growth Trust', 0.77),
(117, 'Ibbotson Dynamic Income Trust', 2.76),
(118, 'IFP Global Franchise', 2.76),
(119, 'IFP Global Franchise Fund (Hedged)', 1.90),
(120, 'Integrity Australian Share', 2.50),
(121, 'Invesco W Aust Smaller Companies - Class A', 2.46),
(122, 'Invesco WS Asian Consumer Demand', 1.76),
(123, 'Invesco WS Australian Share', 2.16),
(124, 'Invesco WS Global Matrix Hedged - Class A', 2.16),
(125, 'Invesco WS Global Matrix Unhedged', 1.90),
(126, 'Invesco WS Global Property Secs Hgd A', 1.94),
(127, 'Investors Mutual WS Australian Share', 1.94),
(128, 'Investors Mutual WS Future Leaders', 2.33),
(129, 'Ironbark Karara Australian Small Comp', 3.85),
(130, 'K2 Asian Absolute Return', 4.02),
(131, 'K2 Australian Absolute Return', 4.04),
(132, 'K2 Select International Absolute Return', 2.80),
(133, 'La Trobe Aust Mortgage Pooled Mortgage', 0.76),
(134, 'Legg Mason Aus Bond Trust A', 1.98),
(135, 'Legg Mason Aust Value Equity Tr A', 0.00),
(136, 'Legg Mason Australian Real Income Fund', 1.60),
(137, 'Legg Mason Global Multi Sector Bond Tr A', 3.29),
(138, 'LHP Diversified Investments HR', 2.74),
(139, 'LHP Diversified Investments HW', 3.96),
(140, 'LHP Global Long/Short HW', 3.81),
(141, 'Macquarie Asia New Stars No.1', 2.63),
(142, 'Macquarie High Conviction', 0.99),
(143, 'Macquarie Income Opportunities', 2.12),
(144, 'Macquarie International Infra Ses', 1.24),
(145, 'Macquarie Master Diversified Fixed Int', 2.71),
(146, 'Magellan Global', 2.12),
(147, 'Magellan Infrastructure', 2.19),
(148, 'Man AHL Alpha (AUD)', 2.06),
(149, 'Maple-Brown Abbott Aus Geared Eq W', 1.84),
(150, 'Maple-Brown Abbott Imputation Wholesale', 2.90),
(151, 'Maxim Property Securities', 0.00),
(152, 'MFS Concentrated Global Equity Trust Institutional', 1.54),
(153, 'MFS Global Equity Trust', 1.18),
(154, 'Naos Emerging Companies Long Short Equities Fund', 1.40),
(155, 'netwealth Active Balanced Fund', 0.65),
(156, 'netwealth Active Conservative Fund', 1.50),
(157, 'netwealth Active Growth Fund', 1.80),
(158, 'netwealth Active High Growth Fund', 0.30),
(159, 'netwealth Australian Bond Index Fund', 0.60),
(160, 'netwealth Australian Equities Index Fund', 0.60),
(161, 'netwealth Australian Property Index Fund', 0.90),
(162, 'netwealth Index Opportunities Balanced Fund', 0.90),
(163, 'netwealth Index Opportunities Conservative Fund', 0.45),
(164, 'netwealth Index Opportunities Growth Fund', 0.60),
(165, 'netwealth International Equities Index Fund', 3.44),
(166, 'OC Dynamic Equity', 3.44),
(167, 'OC Premium Small Companies Fund', 1.20),
(168, 'Patersons Australian Equity', 1.20),
(169, 'Patersons Australian Resources Opp', 0.00),
(170, 'Pengana Asia Special Events Fund', 1.76),
(171, 'Pengana Aus Equities Market Neutral A', 2.26),
(172, 'Pengana Australian Equities', 5.37),
(173, 'Pengana Emerging Companies', 1.54),
(174, 'Pengana Global Resources', 2.30),
(175, 'Perennial Global Shares High Alpha Trust', 1.84),
(176, 'Perennial Growth Shares Wholesale Trust', 2.10),
(177, 'Perennial Hedged Glbl Prpty Wholesale Tr', 0.90),
(178, 'Perennial Tactical Income Trust', 1.84),
(179, 'Perennial Value Shares Wholesale Trust', 4.38),
(180, 'Perennial Value Smaller Companies Trust', 2.48),
(181, 'Perpetual W Share Plus L/S', 1.98),
(182, 'Perpetual Wholesale Australian', 2.09),
(183, 'Perpetual Wholesale Balanced Growth', 2.20),
(184, 'Perpetual Wholesale Concentrated Equity', 1.40),
(185, 'Perpetual Wholesale Diversified Income', 2.36),
(186, 'Perpetual Wholesale Ethical SRI', 3.80),
(187, 'Perpetual Wholesale Geared Australian', 1.98),
(188, 'Perpetual Wholesale Industrial', 2.46),
(189, 'Perpetual Wholesale International Share', 2.50),
(190, 'Perpetual Wholesale Smaller Companies', 0.94),
(191, 'PIMCO EQT Wholesale Global Bond', 0.99),
(192, 'PIMCO EQT WS Diversified Fixed Interest', 3.08),
(193, 'Platinum Asia', 3.08),
(194, 'Platinum International', 3.08),
(195, 'Platinum International Brands', 3.08),
(196, 'Platinum Unhedged', 0.00),
(197, 'Plato Australian Shares Income Fund', 3.42),
(198, 'PM Capital Absolute Performance', 1.82),
(199, 'PM Capital Enhanced Yield', 4.47),
(200, 'Premium Asia', 10.40),
(201, 'Premium China', 7.58),
(202, 'Premium SAM Asia Property', 2.46),
(203, 'Prime Value Growth B', 2.46),
(204, 'Prime Value Imputation B', 1.60),
(205, 'Principal Global Credit Opportunities Fund', 2.06),
(206, 'RARE Infrastructure Value', 5.47),
(207, 'RARE Series Emerging Markets', 1.33),
(208, 'Realindex Aus Small Companies-Class A', 0.93),
(209, 'Realindex Australian Share-Class A', 1.19),
(210, 'Realindex Global Share Hedged-Class A', 1.19),
(211, 'Realindex Global Share-Class A', 1.72),
(212, 'Resolution Capital Global Property Secs', 0.00),
(213, 'RFM StockBank', 1.68),
(214, 'Russell Balanced A', 1.37),
(215, 'Russell Conservative A', 1.57),
(216, 'Russell Diversified 50 A', 1.82),
(217, 'Russell Growth A', 2.08),
(218, 'Russell High Growth A', 1.50),
(219, 'Schroder Credit Securities', 1.00),
(220, 'Schroder Fixed Income', 1.96),
(221, 'Schroder Global Active Value Hedged', 0.90),
(222, 'Schroder Real Return Fund WS Class', 1.61),
(223, 'Schroder WS Australian Equity', 4.69),
(224, 'Select Alternatives Portfolio', 3.62),
(225, 'SGH ICE', 2.47),
(226, 'SGH20', 0.00),
(227, 'Solaris Core Australian Equity Fund PA', 1.61),
(228, 'T. Rowe Price Asia ex-Japan', 2.31),
(229, 'T. Rowe Price Global Equity', 2.06),
(230, 'TAAM New Asia', 0.00),
(231, 'TD St George 4.05% 6 Months-Monthly Int 25/11/2013', 0.00),
(232, 'TD St George 4.20% 3 Year-Annual Int 24/05/2016', 2.24),
(233, 'Templeton Global Equity', 0.00),
(234, 'Term Deposit Investec 4.15% 26/05/2014', 0.00),
(235, 'Term Deposit Investec 4.20% 25/11/2013', 0.00),
(236, 'Term Deposit Investec 4.20% 26/08/2013', 0.00),
(237, 'Term Deposit NAB 4.00% 25/11/2013', 0.00),
(238, 'Term Deposit NAB 4.00% 26/05/2014', 0.00),
(239, 'Term Deposit NAB 4.00% 26/08/2013', 0.00),
(240, 'Term Deposit St George 4.05% 12 Months 26/05/2014', 0.00),
(241, 'Term Deposit St George 4.10% 3 Months 26/08/2013', 1.28),
(242, 'Threadneedle Global Equity', 0.90),
(243, 'Tyndall Australian Bond', 1.90),
(244, 'Tyndall Australian Share Income', 1.60),
(245, 'Tyndall Australian Share W Portfolio', 1.80),
(246, 'UBS Clarion Global Property Securities I', 0.97),
(247, 'UBS Diversified Fixed Income', 1.80),
(248, 'UBS-HALO Australian Share Fund', 0.60),
(249, 'Vanguard Australian Fixed Interest Index', 0.80),
(250, 'Vanguard Australian Shares High Yield', 0.80),
(251, 'Vanguard Australian Shares Index', 0.68),
(252, 'Vanguard Balanced Index Fund', 0.66),
(253, 'Vanguard Conservative Index', 0.34),
(254, 'Vanguard Diversified Bond Index', 0.95),
(255, 'Vanguard Emerging Markets Shares Index', 0.98),
(256, 'Vanguard Global Infrastructure', 1.04),
(257, 'Vanguard Global Infrastructure Hedged', 0.72),
(258, 'Vanguard Growth Index Fund', 0.74),
(259, 'Vanguard High Growth Index', 0.86),
(260, 'Vanguard Int Property Secs Idx (Hdgd)', 0.80),
(261, 'Vanguard Int Property Securities Index', 0.74),
(262, 'Vanguard International Shares Index', 0.80),
(263, 'Vanguard International Shares Index Hgd', 0.68),
(264, 'Vanguard Intl Credit Secs Index Hgd', 0.70),
(265, 'Vanguard Property Securities Index', 1.38),
(266, 'Walter Scott Emerging Markets', 2.53),
(267, 'Walter Scott Global Equity', 2.56),
(268, 'Walter Scott Global Equity Hedged', 2.50),
(269, 'Wilson HTM Priority Growth', 2.30),
(270, 'Wingate Global Equity W', 6.87),
(271, 'Winton Global Alpha', 1.62),
(272, 'Zurich Investments Aus Property Secs', 3.74),
(273, 'Zurich Investments Equity Income', 1.96),
(274, 'Zurich Investments Gbl Thematic Shr', 0.00),
(275, 'Zurich Investments Global Equity Income Fund', 2.00),
(276, 'Zurich Investments Global Property Sec', 1.96),
(277, 'Zurich Investments Hgd Gbl Thematic Shr', 1.27),
(278, 'Zurich Investments Small Companies', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(10) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `paid`) VALUES
(8, 'Super', 1),
(9, 'Building Wealth', 1),
(10, 'Investment', NULL),
(13, 'Calculators', NULL),
(14, 'Retirement', 0),
(15, 'Savings', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_provider_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_providers`
--

CREATE TABLE `payment_providers` (
  `payment_provider_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_providers`
--

INSERT INTO `payment_providers` (`payment_provider_id`, `name`) VALUES
(3, 'PAYPAL');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `monthly_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_modules`
--

CREATE TABLE `products_modules` (
  `product_module_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `module_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `id` int(11) NOT NULL,
  `super_name` varchar(100) NOT NULL,
  `admin_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `super_name`, `admin_fee`) VALUES
(1, 'Aware Super Aust Equities', 0.87),
(2, 'Aware Super Aust Equities SRI', 0.34),
(3, 'Aware Super Aust Fixed Interest', 0.03),
(4, 'Aware Super Balanced Growth', 0.96),
(5, 'Aware Super Cash', 1.09),
(6, 'Aware Super Conservative Growth', 0.83),
(7, 'Aware Super Diversified SRI', 0.53),
(8, 'Aware Super Growth', 0.06),
(9, 'Aware Super High Growth', 0.06),
(10, 'Aware Super Int\'l Equities', 0.07),
(11, 'Aware Super Int\'l Fixed Int', 0.27),
(12, 'Aware Super Property', 0.24),
(13, 'Cbus Cash Savings', 0.25),
(14, 'Cbus Conservative', 0.51),
(15, 'Cbus Conservative Growth', 0.56),
(16, 'Cbus Growth (Cbus MySuper)', 0.05),
(17, 'Cbus High Growth', 0),
(18, 'Cbus Self Managed - Cash Transaction Account', 0),
(19, 'Cbus Self Managed - Listed Securities', 0),
(20, 'Cbus Self Managed - Term Deposit', 0.38),
(21, 'Cbus Self Managed Infrastructure', 0.38),
(22, 'Cbus Self Managed Property', 0.36),
(23, 'Rest Aust Shares', 0.54),
(24, 'Rest Australian Shares Indexed', 0.17),
(25, 'Rest Balanced', 0.41),
(26, 'Rest Balanced Indexed', 0.03),
(27, 'Rest Bonds', 0.62),
(28, 'Rest Capital Stable', 0.67),
(29, 'Rest Cash', 0.75),
(30, 'Rest Core Strategy', 0.61),
(31, 'Rest Diversified', 0.74),
(32, 'Rest High Growth', 0.58),
(33, 'Rest Overseas Shares', 0.55),
(34, 'Rest Overseas Shares Indexed', 0),
(35, 'Rest Property', 0),
(36, 'Rest Shares', 0),
(37, 'Rest Sustainable Growth', 0.36),
(1, 'Aware Super Aust Equities', 0.87),
(2, 'Aware Super Aust Equities SRI', 0.34),
(3, 'Aware Super Aust Fixed Interest', 0.03),
(4, 'Aware Super Balanced Growth', 0.96),
(5, 'Aware Super Cash', 1.09),
(6, 'Aware Super Conservative Growth', 0.83),
(7, 'Aware Super Diversified SRI', 0.53),
(8, 'Aware Super Growth', 0.06),
(9, 'Aware Super High Growth', 0.06),
(10, 'Aware Super Int\'l Equities', 0.07),
(11, 'Aware Super Int\'l Fixed Int', 0.27),
(12, 'Aware Super Property', 0.24),
(13, 'Cbus Cash Savings', 0.25),
(14, 'Cbus Conservative', 0.51),
(15, 'Cbus Conservative Growth', 0.56),
(16, 'Cbus Growth (Cbus MySuper)', 0.05),
(17, 'Cbus High Growth', 0),
(18, 'Cbus Self Managed - Cash Transaction Account', 0),
(19, 'Cbus Self Managed - Listed Securities', 0),
(20, 'Cbus Self Managed - Term Deposit', 0.38),
(21, 'Cbus Self Managed Infrastructure', 0.38),
(22, 'Cbus Self Managed Property', 0.36),
(23, 'Rest Aust Shares', 0.54),
(24, 'Rest Australian Shares Indexed', 0.17),
(25, 'Rest Balanced', 0.41),
(26, 'Rest Balanced Indexed', 0.03),
(27, 'Rest Bonds', 0.62),
(28, 'Rest Capital Stable', 0.67),
(29, 'Rest Cash', 0.75),
(30, 'Rest Core Strategy', 0.61),
(31, 'Rest Diversified', 0.74),
(32, 'Rest High Growth', 0.58),
(33, 'Rest Overseas Shares', 0.55),
(34, 'Rest Overseas Shares Indexed', 0),
(35, 'Rest Property', 0),
(36, 'Rest Shares', 0),
(37, 'Rest Sustainable Growth', 0.36),
(1, 'Aware Super Aust Equities', 0.87),
(2, 'Aware Super Aust Equities SRI', 0.34),
(3, 'Aware Super Aust Fixed Interest', 0.03),
(4, 'Aware Super Balanced Growth', 0.96),
(5, 'Aware Super Cash', 1.09),
(6, 'Aware Super Conservative Growth', 0.83),
(7, 'Aware Super Diversified SRI', 0.53),
(8, 'Aware Super Growth', 0.06),
(9, 'Aware Super High Growth', 0.06),
(10, 'Aware Super Int\'l Equities', 0.07),
(11, 'Aware Super Int\'l Fixed Int', 0.27),
(12, 'Aware Super Property', 0.24),
(13, 'Cbus Cash Savings', 0.25),
(14, 'Cbus Conservative', 0.51),
(15, 'Cbus Conservative Growth', 0.56),
(16, 'Cbus Growth (Cbus MySuper)', 0.05),
(17, 'Cbus High Growth', 0),
(18, 'Cbus Self Managed - Cash Transaction Account', 0),
(19, 'Cbus Self Managed - Listed Securities', 0),
(20, 'Cbus Self Managed - Term Deposit', 0.38),
(21, 'Cbus Self Managed Infrastructure', 0.38),
(22, 'Cbus Self Managed Property', 0.36),
(23, 'Rest Aust Shares', 0.54),
(24, 'Rest Australian Shares Indexed', 0.17),
(25, 'Rest Balanced', 0.41),
(26, 'Rest Balanced Indexed', 0.03),
(27, 'Rest Bonds', 0.62),
(28, 'Rest Capital Stable', 0.67),
(29, 'Rest Cash', 0.75),
(30, 'Rest Core Strategy', 0.61),
(31, 'Rest Diversified', 0.74),
(32, 'Rest High Growth', 0.58),
(33, 'Rest Overseas Shares', 0.55),
(34, 'Rest Overseas Shares Indexed', 0),
(35, 'Rest Property', 0),
(36, 'Rest Shares', 0),
(37, 'Rest Sustainable Growth', 0.36),
(1, 'Aware Super Aust Equities', 0.87),
(2, 'Aware Super Aust Equities SRI', 0.34),
(3, 'Aware Super Aust Fixed Interest', 0.03),
(4, 'Aware Super Balanced Growth', 0.96),
(5, 'Aware Super Cash', 1.09),
(6, 'Aware Super Conservative Growth', 0.83),
(7, 'Aware Super Diversified SRI', 0.53),
(8, 'Aware Super Growth', 0.06),
(9, 'Aware Super High Growth', 0.06),
(10, 'Aware Super Int\'l Equities', 0.07),
(11, 'Aware Super Int\'l Fixed Int', 0.27),
(12, 'Aware Super Property', 0.24),
(13, 'Cbus Cash Savings', 0.25),
(14, 'Cbus Conservative', 0.51),
(15, 'Cbus Conservative Growth', 0.56),
(16, 'Cbus Growth (Cbus MySuper)', 0.05),
(17, 'Cbus High Growth', 0),
(18, 'Cbus Self Managed - Cash Transaction Account', 0),
(19, 'Cbus Self Managed - Listed Securities', 0),
(20, 'Cbus Self Managed - Term Deposit', 0.38),
(21, 'Cbus Self Managed Infrastructure', 0.38),
(22, 'Cbus Self Managed Property', 0.36),
(23, 'Rest Aust Shares', 0.54),
(24, 'Rest Australian Shares Indexed', 0.17),
(25, 'Rest Balanced', 0.41),
(26, 'Rest Balanced Indexed', 0.03),
(27, 'Rest Bonds', 0.62),
(28, 'Rest Capital Stable', 0.67),
(29, 'Rest Cash', 0.75),
(30, 'Rest Core Strategy', 0.61),
(31, 'Rest Diversified', 0.74),
(32, 'Rest High Growth', 0.58),
(33, 'Rest Overseas Shares', 0.55),
(34, 'Rest Overseas Shares Indexed', 0),
(35, 'Rest Property', 0),
(36, 'Rest Shares', 0),
(37, 'Rest Sustainable Growth', 0.36);

-- --------------------------------------------------------

--
-- Table structure for table `testinvestment`
--

CREATE TABLE `testinvestment` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `investment_name` varchar(100) NOT NULL,
  `admin_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinvestment`
--

INSERT INTO `testinvestment` (`id`, `company_name`, `investment_name`, `admin_fee`) VALUES
(1, 'MLC', 'MLC investment 1', 1.11),
(2, 'MLC', 'MLC investment 2', 1.22),
(3, 'AMP', 'AMP investment 1', 2.11),
(4, 'AMP', 'AMP investment 2', 2.22),
(5, 'CBUS', 'CBUS investment 1', 3.11),
(6, 'CBUS', 'CBUS investment 2', 3.22),
(1, 'MLC', 'MLC investment 1', 1.11),
(2, 'MLC', 'MLC investment 2', 1.22),
(3, 'AMP', 'AMP investment 1', 2.11),
(4, 'AMP', 'AMP investment 2', 2.22),
(5, 'CBUS', 'CBUS investment 1', 3.11),
(6, 'CBUS', 'CBUS investment 2', 3.22),
(1, 'MLC', 'MLC investment 1', 1.11),
(2, 'MLC', 'MLC investment 2', 1.22),
(3, 'AMP', 'AMP investment 1', 2.11),
(4, 'AMP', 'AMP investment 2', 2.22),
(5, 'CBUS', 'CBUS investment 1', 3.11),
(6, 'CBUS', 'CBUS investment 2', 3.22),
(1, 'MLC', 'MLC investment 1', 1.11),
(2, 'MLC', 'MLC investment 2', 1.22),
(3, 'AMP', 'AMP investment 1', 2.11),
(4, 'AMP', 'AMP investment 2', 2.22),
(5, 'CBUS', 'CBUS investment 1', 3.11),
(6, 'CBUS', 'CBUS investment 2', 3.22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_fields` text,
  `role` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `postcode` int(10) NOT NULL,
  `token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `mobile_number`, `first_name`, `last_name`, `profile_fields`, `role`, `DOB`, `postcode`, `token`) VALUES
(25, 'ash123@gmail.com', '$2y$10$XB2mOfgq8Bm6s6YnFmAnJeO/fYHCsg2uKqp8y3vJNYEbnElSCbUJW', '0432440466', 'Rahman', 'Ashik', 'N/A', 'user', '2000-09-02', 3149, NULL),
(31, 'cake@pp.com', '$2y$10$dLxygvWiPly73FkOuaPzmueJzA.8.cKtC/kKuo86fnrRkVaWTQeFm', '0452160479', 'Hong Kien', 'Nguyen', 'asdwda', 'admin', '2001-04-26', 3149, NULL),
(35, 'lstest1@gmail.com', '$2y$10$bEnUyY/m.RzKEel5/6A5Hurbk2HBSgv/c5crxiyoteIyEqFxJ.78y', '0452091113', 'Lei', 'Shi', 'asd', 'user', '2023-03-15', 3000, NULL),
(39, '123@gmail.com', '$2y$10$.LbWe2Xd.O17d4IEtdhicexD8KpJ7h.PtvQCxQ7X8.ry8iwrPZo4a', '0412345678', 'Davvvvid', 'Kil taipiao', NULL, 'user', '2169-01-11', 3000, NULL),
(40, 'abc@gmail.com', '$2y$10$KVmex57/L4DpKW.OGYDN.uMv7RpH06l5ULLwQgdNYSeXzlNObO1D.', '0481818181', 'Holden', 'Diznats', NULL, 'user', '2024-02-02', 3168, NULL),
(42, 'staff.advicecyborg@gmail.com', '$2y$10$5pCuqOZnKpp0fWCeaIuS6uCG0GyBWZKQ6XnZ1DyfgrtSHSQeFk/ne', '0481952300', 'Staff', 'Advice', 'changed', 'user', '2000-01-01', 3168, NULL),
(43, 'mary.jabbarzadeh@monash.edu', '$2y$10$59ig.QQ5MazefsxoYFF0tOk3F7sfFCwhmJm7VzMwOfbT1T6ggzZ6S', '0423499898', 'mary', 'jb', 'hghghjgjhgjhgjgjhgj', 'user', '0002-12-12', 3189999, NULL),
(50, 'nguyenhongkien26@gmail.com', '$2y$10$8tuIyZF4.yKRvNfrdH.mgeLlGkkUFWd/rX32RG2HNS.OS3I1kI4PC', '0452160479', 'Hong Kien', 'Nguyen', '', 'admin', '2023-06-02', 3149, 'ce41651677e61060db99dff85acfe13a'),
(51, 'Steven213mel@Gmail.Com', '$2y$10$HkY5xzMHEIEO/uf8OTIza.GY5Npeilc4F4U88K59UjcEmzTCjE8zC', '0000000000', 'fengrong', 'Xing', NULL, 'user', '2023-05-09', 3000, NULL),
(54, '1234@gmail.com', '$2y$10$pUx1BqS22aFoPJ/392KhZ..h9UhZPU7NCui/Y9aJr.pFT00FMEwcK', '0420897470', 'j', 'm', 'test', 'user', '2023-05-23', 3168, NULL),
(55, 'wasd123@gmail.com', '$2y$10$.ftsN.f37RV8Zt0qqcyVXeX66k/dO/98C60Wgu.zC.X9HvPUTSniq', '0123231321', 'wasd', 'wads', NULL, 'user', '1993-03-12', 1301, NULL),
(56, 'nguyenhaiphongvodich@gmail.com', '$2y$10$yB6S1OB58bqLw6k9NEfwLevwcUeo.kky5Zmg9HF6SG8cqozC3NW7a', '0452160479', 'Hong Kien', 'Nguyen', NULL, 'user', '2001-04-26', 3149, '0d5637fa61688e8bae0d6edb3bd2d6fa'),
(57, 'hngu0053@student.monash.edu', '$2y$10$am5YRBuHl19O4hpY.wtvLOWZ.c.CElkR0dZd4h2Xy3JxOADbxPlg.', '0452160479', 'Hong Kien', 'Nguyen', '', 'admin', '2001-04-26', 3149, '5fbe0f4de9d57e446668479d80850ab0'),
(58, 'nguyenhongkien123tk@gmail.com', '$2y$10$pCI/OS9Ghdnnqxw4grmXZ.qC3kiT.IVNA1YZaFnEyt7HbVecKAN8G', '0452160479', 'Hong Kien', 'Nguyen', NULL, 'user', '2001-04-26', 3149, NULL),
(59, 'vloneloud20@gmail.com', '$2y$10$S2tTWWdtFJ7y3JZVU0e/VeGL10e9giZtmBHQje9UdKm.5oabtj/lG', '0405143066', 'Max', 'Coustley', NULL, 'user', '2010-10-10', 3130, NULL),
(60, 'nguyenhongkien216@gmail.com', '$2y$10$NtolkLiyhVfyFNfLDT8c1uhQ2eZ7.1Sf3B6xGtrn6It2nC11y2.K2', '0452160479', 'Hong Kien', 'Nguyen', NULL, 'user', '2001-04-26', 3149, NULL),
(61, '1234qwe@gmail.com', '$2y$10$GJ50hw/HcMzg2Jd.6aUb8.kVqv3/k2g4i1UsfjrBr3CWOTf4YGhfK', '000000000', ' @./12', '   ', NULL, 'user', '2023-02-01', -3000, NULL),
(62, '2@2.com', '$2y$10$awrTHwTapBeC1LGWqxBAQOdSJYRpvTJUCwOcaAFqFbCU0dviSi5n6', '0483311111', 'wwww', 'wwww', NULL, 'user', '2023-11-11', 3211, NULL),
(63, 'jamie@partnersinplanning.com.au', '$2y$10$uNJuFCRBwaxozECnYc9R5eq72C3ANSbDduMaVS4oxX0dVYO6B2.Q2', '0404064798', 'Partners ', 'Planning', NULL, 'user', '2001-03-27', 3163, '9c31597c030913f720808acfa6b150b7');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `users_products_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`investment_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk1` (`payment_provider_id`),
  ADD KEY `fk2` (`user_id`);

--
-- Indexes for table `payment_providers`
--
ALTER TABLE `payment_providers`
  ADD PRIMARY KEY (`payment_provider_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_modules`
--
ALTER TABLE `products_modules`
  ADD PRIMARY KEY (`product_module_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`users_products_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `investment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_providers`
--
ALTER TABLE `payment_providers`
  MODIFY `payment_provider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_modules`
--
ALTER TABLE `products_modules`
  MODIFY `product_module_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `users_products_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`payment_provider_id`) REFERENCES `payment_providers` (`payment_provider_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products_modules`
--
ALTER TABLE `products_modules`
  ADD CONSTRAINT `products_modules_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `products_modules_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
