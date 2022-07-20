-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 02, 2022 lúc 08:27 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateday` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `admin_name`, `password`, `permission_id`, `dateday`, `status`) VALUES
(1, 'Quản Lý', 'admin', 'admin', 'Q001', '2022-06-11 03:56:16', 1),
(2, 'Nhà Bếp', 'admin1', 'admin1', 'Q002', '2022-06-11 03:56:16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dishorder`
--

CREATE TABLE `dishorder` (
  `id` int(11) NOT NULL,
  `TenTruyCap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaMonAn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenMonAn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgayCapNhat` timestamp NOT NULL DEFAULT current_timestamp(),
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `tableBook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dishorder`
--

INSERT INTO `dishorder` (`id`, `TenTruyCap`, `MaMonAn`, `TenMonAn`, `Anh`, `NoiDung`, `Gia`, `SoLuong`, `NgayCapNhat`, `TrangThai`, `tableBook`) VALUES
(1, 'xuantuan ', 'M019', 'Combo', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '3990000', 1, '2022-06-03 16:03:11', 1, NULL),
(2, 'xuantuan ', 'M020', 'Combo', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '569000', 1, '2022-06-04 16:03:11', 1, NULL),
(3, 'xuantuan ', 'M021', 'Combo', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '549000', 2, '2022-06-03 16:03:11', 0, NULL),
(4, 'xuantuan1 ', 'M019', 'Combo', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '3990000', 3, '2022-06-04 16:03:11', 0, NULL),
(5, 'xuantuan1 ', 'M020', 'Combo', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '569000', 6, '2022-06-04 16:03:11', 0, NULL),
(6, 'xuantuan1 ', 'M021', 'Combo', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '549000', 8, '2022-06-03 16:03:11', 0, NULL),
(10, 'xuantuan ', 'M019', 'Combo', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '3990000', 5, '2022-06-04 16:06:03', 1, NULL),
(11, 'xuantuan ', 'M020', 'Combo', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '569000', 9, '2022-06-04 16:06:03', 1, NULL),
(12, 'xuantuan ', 'M021', 'Combo', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '549000', 5, '2022-06-04 16:06:03', 1, NULL),
(13, 'xuantuan ', 'M019', 'Combo', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '3990000', 6, '2022-06-05 02:16:48', 0, NULL),
(14, 'xuantuan ', 'M020', 'Combo', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '569000', 6, '2022-06-05 02:16:48', 0, NULL),
(15, 'xuantuan ', 'M021', 'Combo', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '549000', 0, '2022-06-05 02:16:48', 0, NULL),
(16, 'xuantuan ', 'M019', 'Combo', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '3990000', 2, '2022-06-05 16:31:48', 0, NULL),
(17, 'xuantuan ', 'M020', 'Combo', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '569000', 0, '2022-06-05 16:31:48', 0, NULL),
(18, 'xuantuan ', 'M021', 'Combo', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '549000', 0, '2022-06-05 16:31:48', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimonan`
--

CREATE TABLE `loaimonan` (
  `MaLoaiMonAn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiMonAn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaimonan`
--

INSERT INTO `loaimonan` (`MaLoaiMonAn`, `TenLoaiMonAn`, `TrangThai`) VALUES
('L001', 'Thịt Bò', 'True'),
('L002', 'Thịt Heo', 'True'),
('L003', 'Sườn', 'True'),
('L004', 'Combo', 'True'),
('L005', 'Món Truyền Thống', 'True'),
('L006', 'Canh Lẩu', 'True'),
('L007', 'Bibumbap Noodle', 'True'),
('L008', 'Đồ Uống', 'True');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `MaMonAn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiMonAn` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenMonAn` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NgayCapNhat` datetime DEFAULT NULL,
  `Gia` decimal(10,0) DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`MaMonAn`, `MaLoaiMonAn`, `TenMonAn`, `TieuDe`, `Anh`, `NoiDung`, `NgayCapNhat`, `Gia`, `TrangThai`) VALUES
('M001', 'L001', 'Dẻ sườn bò mỹ', 'sườn', '1.PNG', 'USDA Beef Ribs Finger', '2022-05-07 15:45:10', '209001', 0),
('M002', 'L001', 'Dẻ sườn hoàng đế', '', '1.jpg', 'USDA Beef King Ribs', '2022-05-07 15:45:10', '219000', 1),
('M003', 'L001', 'Ba Chỉ Bò Mỹ Sốt Obathan', '', '1.PNG', 'USDA Beef Short Plate With Obathan Sauce', '2022-05-07 15:45:10', '219000', 1),
('M004', 'L001', 'Ba Chỉ Bò Mỹ Sốt Mật Ong', '', '4.PNG', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '219000', 1),
('M005', 'L001', 'Gấu bò mỹ', '', '5.PNG', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '129000', 1),
('M006', 'L001', 'Sườn non bò mỹ la', '', '6.PNG', 'USDA Beef Wang-Galbi', '2022-05-07 15:45:10', '129000', 1),
('M007', 'L001', 'Diềm bụng bò mỹ', '', '7.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '129000', 1),
('M008', 'L003', 'Sườn Đế Vương', '', '13.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '499000', 1),
('M009', 'L003', 'Sườn non bò mỹ hảo hạng sốt obathan', '', '8.png', 'USDA Beef Wang-Galbi', '2022-05-07 15:45:10', '319000', 1),
('M010', 'L003', 'Sườn non bò mỹ hảo hạng tươi', '', '9.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '319000', 1),
('M011', 'L003', 'Sườn non bò mỹ tươi', '', '10.png', 'USDA Beef King Ribs', '2022-05-07 15:45:10', '359000', 0),
('M012', 'L003', 'Sườn non bò mỹ sốt Galbi', '', '11.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '359000', 1),
('M013', 'L003', 'Sườn non bò mỹ sốt Obathan', '', '12.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '359000', 0),
('M014', 'L003', 'Sườn heo mỹ', '', '14.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '149000', 0),
('M015', 'L003', 'Sườn sụn heo ', '', '17.png', 'USDA Beef Wang-Galbi', '2022-05-07 15:45:10', '149000', 1),
('M016', 'L002', 'ba chỉ heo mỹ ', '', '14.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '89000', 0),
('M017', 'L002', 'Nạc vai heo', '', '15.png', 'USDA Beef King Ribs', '2022-05-07 15:45:10', '89000', 0),
('M018', 'L002', 'Má Heo tươi', '', '16.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '129000', 0),
('M019', 'L004', 'Combo', '', '20.png', 'Sườn heo mỹ sốt galbi (200gr),ba chỉ heo mỹ tươi (200g),Ức bò mỹ (100gr),dẻ sườn hoàng đế tươi (100gr)', '2022-05-07 15:45:10', '399000', 1),
('M020', 'L004', 'Combo', '', '21.png', 'Sườn non bò mỹ tươi (200gr), ba chỉ heo mỹ tươi (150g), Ức bò mỹ (100gr), dẻ sườn hoàng đế tươi (150gr)', '2022-05-07 15:45:10', '569000', 0),
('M021', 'L004', 'Combo', '', '22.png', 'Sườn non bò mỹ hảo hạng(100gr), ba chỉ heo mỹ tươi (200g), Ức bò mỹ (150gr), dẻ sườn hoàng đế tươi (150gr)', '2022-05-07 15:45:10', '549000', 0),
('M022', 'L005', 'Salad tổng hợp', '', '23.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '69000', 1),
('M023', 'L005', 'Salad cá ngừ', '', '24.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '69000', 0),
('M024', 'L005', 'Salad Củ sen', '', '25.png', 'USDA Beef Wang-Galbi', '2022-05-07 15:45:10', '89000', 0),
('M025', 'L005', 'Salad hoa quả tươi ', '', '26.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '109000', 0),
('M026', 'L005', 'Bánh xèo hải sản gogi', '', '27.png', 'USDA Beef Ribs Finger', '2022-05-07 15:45:10', '89000', 0),
('M027', 'L005', 'bánh Mandoo tuyền thống hàn quốc', '', '28.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '69000', 0),
('M028', 'L005', 'Tokpokki Nhân phô mai', '', '30.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '109000', 0),
('M029', 'L005', 'Kimbap chiên', '', '32.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '79000', 0),
('M030', 'L006', 'Canh kimchi ', '', '34.png', '', '2022-05-07 15:45:10', '89000', 0),
('M031', 'L006', 'Canh rong biển ', '', '35.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '89000', 0),
('M032', 'L006', 'Súp nghêu wakame', '', '36.png', 'USDA Beef King Ribs', '2022-05-07 15:45:10', '99000', 0),
('M033', 'L006', 'Canh thịt bò bulgogi', '', '36.png', 'USDA Beef King Ribs', '2022-05-07 15:45:10', '99000', 1),
('M034', 'L006', 'Súp tương đậu hàn quốc', '', '37.png', 'USDA Beef Ribs Finger', '2022-05-07 15:45:10', '99000', 1),
('M035', 'L006', 'Lẩu kim chi', '', '38.png', '', '2022-05-07 15:45:10', '269000', 1),
('M036', 'L006', 'lẩu Bulgogi', '', '40.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '269000', 1),
('M037', 'L007', 'cơm trộ bát đá hàn quốc sốt gogi', '', '41.png', 'USDA Beef  Short Plate With Honey Sauce', '2022-05-07 15:45:10', '99000', 1),
('M038', 'L007', 'cơm trộn bạch tuộc ', '', '41.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '99000', 1),
('M039', 'L007', 'mỳ lạnh nước', '', '42.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '79000', 0),
('M040', 'L007', 'mỳ lạnh trộn cay', '', '43.png', 'USDA Beef Ribs Finger', '2022-05-07 15:45:10', '79000', 1),
('M041', 'L007', 'mỳ jajang ', '', '44.png', 'Premium USDA Beef Boneless Ribs with Obathan Sauuce', '2022-05-07 15:45:10', '89000', 1),
('M042', 'L007', 'miến trộn hàn quốc', '', '45.png', 'USDA Beef Outside Skirt', '2022-05-07 15:45:10', '99000', 1),
('M043', 'L008', 'String', 'ngon', 'user2-160x160.jpg', 'USDA Beef  Short Plate With Honey Sauce', '2022-06-04 15:45:10', '10000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `TenTruyCap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaMonAn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `updateday` datetime NOT NULL DEFAULT current_timestamp(),
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `SoBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `TenTruyCap`, `MaMonAn`, `SoLuong`, `updateday`, `TrangThai`, `SoBan`) VALUES
(1, 'xuantuan ', 'M016', 5, '2022-06-06 15:40:58', 1, 7),
(2, 'xuantuan ', 'M017', 5, '2022-06-06 15:40:58', 1, 7),
(3, 'xuantuan ', 'M018', 5, '2022-06-06 15:40:58', 1, 7),
(4, 'xuantuan1 ', 'M019', 3, '2022-06-06 17:50:05', 1, 8),
(5, 'xuantuan1 ', 'M020', 6, '2022-06-06 17:50:05', 1, 8),
(6, 'xuantuan1 ', 'M021', 9, '2022-06-06 17:50:05', 1, 8),
(7, 'vana ', 'M002', 6, '2022-06-06 17:54:04', 1, 8),
(8, 'vana ', 'M003', 6, '2022-06-06 17:54:04', 1, 8),
(9, 'vana ', 'M030', 1, '2022-06-06 17:54:04', 1, 8),
(10, 'vana ', 'M031', 1, '2022-06-06 17:54:04', 1, 8),
(11, 'xuantuan ', 'M019', 4, '2022-06-07 20:54:43', 1, 7),
(12, 'xuantuan ', 'M020', 1, '2022-06-07 20:54:43', 1, 7),
(13, 'xuantuan ', 'M021', 2, '2022-06-07 20:54:43', 1, 7),
(14, 'xuantuan ', 'M001', 4, '2022-06-07 20:55:27', 1, 7),
(15, 'xuantuan ', 'M002', 4, '2022-06-07 20:55:27', 1, 7),
(16, 'xuantuan ', 'M003', 4, '2022-06-07 20:55:27', 1, 7),
(17, 'xuantuan ', 'M042', 1, '2022-06-07 20:55:27', 1, 7),
(18, 'xuantuan1 ', 'M001', 2, '2022-06-07 20:59:58', 1, 8),
(19, 'xuantuan1 ', 'M002', 2, '2022-06-07 20:59:58', 1, 8),
(20, 'xuantuan1 ', 'M003', 2, '2022-06-07 20:59:58', 1, 8),
(21, 'xuantuan1 ', 'M021', 1, '2022-06-07 20:59:58', 1, 8),
(22, 'xuantuan1 ', 'M001', 1, '2022-06-07 21:05:06', 1, 8),
(23, 'xuantuan1 ', 'M002', 1, '2022-06-07 21:05:06', 1, 8),
(24, 'xuantuan1 ', 'M003', 1, '2022-06-07 21:05:06', 1, 8),
(25, 'xuantuan1 ', 'M019', 9, '2022-06-07 21:36:50', 1, 8),
(26, 'vana ', 'M019', 5, '2022-06-07 21:38:28', 1, 10),
(27, 'vana ', 'M020', 5, '2022-06-07 21:38:28', 1, 10),
(28, 'vana ', 'M021', 1, '2022-06-07 21:38:28', 1, 10),
(29, 'xuantuan ', 'M019', 8, '2022-06-11 16:38:18', 1, 7),
(30, 'xuantuan ', 'M001', 2, '2022-06-12 09:50:57', 1, 7),
(31, 'xuantuan ', 'M002', 2, '2022-06-12 09:50:57', 1, 7),
(32, 'xuantuan ', 'M003', 2, '2022-06-12 09:50:57', 1, 7),
(33, 'xuantuan ', 'M034', 4, '2022-06-12 09:54:10', 1, 7),
(34, 'xuantuan ', 'M035', 5, '2022-06-12 09:54:10', 1, 7),
(35, 'xuantuan ', 'M001', 5, '2022-06-12 09:56:42', 1, 7),
(36, 'xuantuan ', 'M002', 5, '2022-06-12 09:56:42', 1, 7),
(37, 'xuantuan ', 'M034', 5, '2022-06-12 09:56:42', 1, 7),
(38, 'xuantuan ', 'M035', 5, '2022-06-12 09:56:42', 1, 7),
(39, 'xuantuan ', 'M002', 7, '2022-06-12 09:57:45', 1, 7),
(40, 'xuantuan ', 'M003', 7, '2022-06-12 09:57:45', 1, 7),
(41, 'xuantuan ', 'M004', 7, '2022-06-12 09:57:45', 1, 7),
(42, 'xuantuan ', 'M035', 7, '2022-06-12 09:57:45', 1, 7),
(43, 'xuantuan ', 'M007', 1, '2022-06-12 10:04:25', 1, 7),
(44, 'xuantuan ', 'M019', 5, '2022-06-12 10:04:25', 1, 7),
(45, 'xuantuan ', 'M034', 5, '2022-06-12 10:04:25', 1, 7),
(46, 'xuantuan ', 'M035', 4, '2022-06-12 10:04:25', 1, 7),
(47, 'xuantuan ', 'M005', 5, '2022-06-13 19:02:31', 1, 7),
(48, 'xuantuan ', 'M034', 5, '2022-06-13 19:02:31', 1, 7),
(49, 'xuantuan ', 'M035', 5, '2022-06-13 19:02:31', 1, 7),
(50, 'xuantuan1 ', 'M004', 9, '2022-06-13 23:04:06', 1, 6),
(51, 'xuantuan1 ', 'M019', 7, '2022-06-13 23:04:06', 1, 6),
(52, 'xuantuan1 ', 'M035', 4, '2022-06-13 23:04:06', 1, 6),
(53, 'xuantuan1 ', 'M004', 5, '2022-06-13 23:04:43', 1, 10),
(54, 'xuantuan1 ', 'M007', 5, '2022-06-13 23:04:43', 1, 10),
(55, 'xuantuan1 ', 'M001', 8, '2022-06-13 23:05:04', 1, 10),
(56, 'xuantuan ', 'M001', 5, '2022-06-14 09:38:57', 1, 7),
(57, 'xuantuan ', 'M002', 5, '2022-06-14 09:38:57', 1, 7),
(58, 'xuantuan ', 'M019', 5, '2022-06-14 09:38:57', 1, 7),
(59, 'xuantuan ', 'M034', 4, '2022-06-14 09:38:57', 1, 7),
(60, 'xuantuan123 ', 'M001', 1, '2022-06-14 21:39:51', 1, 11),
(61, 'xuantuan123 ', 'M002', 1, '2022-06-14 21:39:51', 1, 11),
(62, 'xuantuan123 ', 'M005', 1, '2022-06-14 21:39:51', 1, 11),
(63, 'xuantuan123 ', 'M010', 1, '2022-06-14 21:39:51', 1, 11),
(64, 'xuantuan123 ', 'M019', 1, '2022-06-14 21:39:51', 1, 11),
(65, 'xuantuan123 ', 'M035', 1, '2022-06-14 21:39:51', 1, 11),
(66, 'tuan123 ', 'M001', 1, '2022-06-14 21:42:10', 1, 12),
(67, 'tuan123 ', 'M003', 2, '2022-06-14 21:42:10', 1, 12),
(68, 'tuan123 ', 'M008', 2, '2022-06-14 21:42:10', 1, 12),
(69, 'tuan123 ', 'M009', 1, '2022-06-14 21:42:10', 1, 12),
(70, 'tuan123 ', 'M022', 1, '2022-06-14 21:42:10', 1, 12),
(71, 'tuan123 ', 'M040', 1, '2022-06-14 21:42:10', 1, 12),
(72, 'xuantuan123 ', 'M003', 4, '2022-06-14 21:42:39', 1, 11),
(73, 'xuantuan123 ', 'M001', 1, '2022-06-15 21:12:40', 1, 15),
(74, 'xuantuan123 ', 'M002', 1, '2022-06-15 21:12:40', 1, 15),
(75, 'xuantuan123 ', 'M003', 1, '2022-06-15 21:12:40', 1, 15),
(76, 'xuantuan123 ', 'M004', 1, '2022-06-15 21:12:40', 1, 15),
(77, 'xuantuan123 ', 'M019', 1, '2022-06-15 21:12:40', 1, 15),
(78, 'xuantuan123 ', 'M041', 1, '2022-06-15 21:12:40', 1, 15),
(79, 'xuantuan ', 'M001', 1, '2022-06-15 21:14:59', 1, 10),
(80, 'xuantuan ', 'M002', 1, '2022-06-15 21:14:59', 1, 10),
(81, 'xuantuan ', 'M003', 1, '2022-06-15 21:14:59', 1, 10),
(82, 'xuantuan ', 'M004', 2, '2022-06-15 21:14:59', 1, 10),
(83, 'xuantuan ', 'M034', 3, '2022-06-15 21:14:59', 1, 10),
(84, 'xuantuan123 ', 'M001', 1, '2022-06-15 21:16:27', 1, 15),
(85, 'xuantuan123 ', 'M002', 1, '2022-06-15 21:16:27', 1, 15),
(86, 'xuantuan123 ', 'M010', 1, '2022-06-15 21:16:27', 1, 15),
(87, 'tuan123 ', 'M041', 1, '2022-06-15 21:58:16', 0, 8),
(88, 'xuantuan123 ', 'M001', 2, '2022-06-16 21:16:27', 1, 5),
(89, 'xuantuan123 ', 'M002', 1, '2022-06-16 21:16:27', 1, 5),
(90, 'xuantuan123 ', 'M010', 1, '2022-06-16 21:16:27', 1, 5),
(91, 'xuantuan123 ', 'M041', 1, '2022-06-16 21:16:27', 1, 5),
(92, 'tuan123 ', 'M004', 1, '2022-06-16 21:24:41', 1, 3),
(93, 'tuan123 ', 'M005', 1, '2022-06-16 21:24:41', 1, 3),
(94, 'tuan123 ', 'M006', 2, '2022-06-16 21:24:41', 1, 3),
(95, 'tuan123 ', 'M034', 2, '2022-06-16 21:24:41', 1, 3),
(96, 'thenhan123 ', 'M002', 1, '2022-06-18 13:02:34', 1, 6),
(97, 'thenhan123 ', 'M008', 1, '2022-06-18 13:02:34', 1, 6),
(98, 'thenhan123 ', 'M034', 1, '2022-06-18 13:02:34', 1, 6),
(99, 'thenhan123 ', 'M041', 4, '2022-06-18 13:02:34', 1, 6),
(100, 'tuan123 ', 'M001', 1, '2022-06-19 10:15:28', 1, 5),
(101, 'tuan123 ', 'M005', 1, '2022-06-19 10:15:28', 1, 5),
(102, 'tuan123 ', 'M010', 2, '2022-06-19 10:15:28', 1, 5),
(103, 'tuan123 ', 'M041', 2, '2022-06-19 10:15:28', 1, 5),
(104, 'xuantuan ', 'M001', 2, '2022-06-19 11:43:45', 1, 4),
(105, 'xuantuan ', 'M002', 2, '2022-06-19 11:43:45', 1, 4),
(106, 'xuantuan ', 'M006', 2, '2022-06-19 11:43:45', 1, 4),
(107, 'xuantuan ', 'M010', 2, '2022-06-19 11:43:45', 1, 4),
(108, 'xuantuan ', 'M022', 2, '2022-06-19 11:43:45', 1, 4),
(109, 'xuantuan ', 'M035', 2, '2022-06-19 11:43:45', 1, 4),
(110, 'xuantuan ', 'M003', 2, '2022-06-21 23:23:35', 1, 4),
(111, 'xuantuan ', 'M033', 1, '2022-06-21 23:23:35', 1, 4),
(112, 'xuantuan ', 'M034', 1, '2022-06-21 23:23:35', 1, 4),
(113, 'xuantuan ', 'M035', 1, '2022-06-21 23:23:35', 1, 4),
(114, 'doanhnguyen ', 'M001', 1, '2022-06-21 23:29:16', 1, 6),
(115, 'doanhnguyen ', 'M002', 1, '2022-06-21 23:29:16', 1, 6),
(116, 'doanhnguyen ', 'M003', 1, '2022-06-21 23:29:16', 1, 6),
(117, 'doanhnguyen ', 'M008', 1, '2022-06-21 23:29:16', 1, 6),
(118, 'doanhnguyen ', 'M022', 1, '2022-06-21 23:29:16', 1, 6),
(119, 'doanhnguyen ', 'M036', 1, '2022-06-21 23:29:16', 1, 6),
(120, 'vana ', 'M001', 1, '2022-06-21 23:29:39', 0, 12),
(121, 'vana ', 'M002', 1, '2022-06-21 23:29:39', 0, 12),
(122, 'vana ', 'M003', 1, '2022-06-21 23:29:39', 0, 12),
(123, 'vana ', 'M019', 2, '2022-06-21 23:29:39', 0, 12),
(124, 'xuantuan ', 'M002', 1, '2022-06-24 22:58:01', 1, 5),
(125, 'xuantuan ', 'M003', 1, '2022-06-24 22:58:01', 1, 5),
(126, 'xuantuan ', 'M005', 1, '2022-06-24 22:58:01', 1, 5),
(127, 'xuantuan ', 'M009', 1, '2022-06-24 22:58:01', 1, 5),
(128, 'vana ', 'M002', 1, '2022-06-24 23:21:44', 1, 5),
(129, 'vana ', 'M003', 1, '2022-06-24 23:21:44', 1, 5),
(130, 'vana ', 'M004', 1, '2022-06-24 23:21:44', 1, 5),
(132, 'doanhnguyen ', 'M002', 1, '2022-06-24 23:27:27', 1, 7),
(133, 'doanhnguyen ', 'M006', 1, '2022-06-24 23:27:27', 1, 7),
(134, 'doanhnguyen ', 'M022', 1, '2022-06-24 23:27:28', 1, 7),
(135, 'doanhnguyen ', 'M041', 1, '2022-06-24 23:28:32', 1, 7),
(137, 'tuan123 ', 'M002', 1, '2022-06-24 23:35:26', 1, 3),
(138, 'tuan123 ', 'M010', 1, '2022-06-24 23:35:26', 1, 3),
(139, 'tuan123 ', 'M037', 1, '2022-06-24 23:35:26', 1, 3),
(140, 'vana ', 'M033', 1, '2022-06-25 07:37:40', 1, 9),
(141, 'vana ', 'M034', 1, '2022-06-25 07:37:40', 1, 9),
(143, 'vana ', 'M002', 1, '2022-06-25 07:43:08', 1, 9),
(144, 'vana ', 'M003', 1, '2022-06-25 07:43:08', 1, 9),
(145, 'doanhnguyen ', 'M002', 1, '2022-06-25 07:47:20', 1, 2),
(146, 'doanhnguyen ', 'M003', 1, '2022-06-25 07:47:20', 1, 2),
(147, 'doanhnguyen ', 'M004', 1, '2022-06-25 07:47:20', 1, 2),
(148, 'doanhnguyen ', 'M005', 1, '2022-06-25 07:47:20', 1, 2),
(149, 'doanhnguyen ', 'M038', 1, '2022-06-25 07:47:20', 1, 2),
(150, 'doanhnguyen ', 'M036', 1, '2022-06-25 07:48:17', 1, 2),
(151, 'xuantuan ', 'M002', 1, '2022-06-25 10:46:15', 1, 10),
(152, 'xuantuan ', 'M003', 2, '2022-06-25 10:46:15', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_admin`
--

CREATE TABLE `permission_admin` (
  `permission_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_admin`
--

INSERT INTO `permission_admin` (`permission_id`, `permission_name`) VALUES
('Q001', 'Quản lý'),
('Q002', 'Nhà Bếp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `TenNguoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenTruyCap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` timestamp NOT NULL DEFAULT current_timestamp(),
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `TenNguoiDung`, `TenTruyCap`, `MatKhau`, `NgayCapNhat`, `TrangThai`) VALUES
(2, 'Xuân Tuấn', 'xuantuan', 'xuantuan', '2022-05-09 10:39:24', 1),
(3, 'Phạm Văn Tuấn', 'xuantuan1', 'xuantuan1', '2022-06-10 14:50:24', 1),
(4, 'Phạm Văn A', 'vana', 'vana', '2022-06-10 14:50:29', 1),
(7, 'Phạm Xuân Tuấn', 'xuantuan123', 'xuantuan123', '2022-06-11 03:17:03', 1),
(8, 'Phạm Xuân Tuấn', 'admin123', 'admin123', '2022-06-11 03:19:22', 1),
(9, 'Phạm Xuân Tuấn', 'admin12345', 'admin', '2022-06-11 03:50:41', 1),
(10, 'Tuấn Phạm', 'tuan123', 'tuan123', '2022-06-11 03:51:20', 1),
(11, 'Thế Nhân', 'thenhan123', 'thenhan123', '2022-06-18 06:02:03', 1),
(12, 'Nguyễn Văn Doanh', 'doanhnguyen', 'doanhnguyen', '2022-06-21 14:58:12', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Chỉ mục cho bảng `dishorder`
--
ALTER TABLE `dishorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TenTruyCap` (`TenTruyCap`);

--
-- Chỉ mục cho bảng `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`MaLoaiMonAn`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `monan_ibfk_1` (`MaLoaiMonAn`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TenTruyCap` (`TenTruyCap`);

--
-- Chỉ mục cho bảng `permission_admin`
--
ALTER TABLE `permission_admin`
  ADD PRIMARY KEY (`permission_id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TenTruyCap` (`TenTruyCap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dishorder`
--
ALTER TABLE `dishorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permission_admin` (`permission_id`);

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`MaLoaiMonAn`) REFERENCES `loaimonan` (`MaloaiMonan`);

--
-- Các ràng buộc cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`TenTruyCap`) REFERENCES `taikhoan` (`TenTruyCap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
