-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 24, 2023 lúc 09:42 AM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webxemphim`
--
CREATE DATABASE IF NOT EXISTS `webxemphim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webxemphim`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maphim` varchar(200) NOT NULL,
  `tenphim` varchar(200) DEFAULT NULL,
  `namphathinh` int(11) DEFAULT NULL,
  `theloai` varchar(200) DEFAULT NULL,
  `quocgia` varchar(50) DEFAULT NULL,
  `dienvien` varchar(200) DEFAULT NULL,
  `mota` text,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`maphim`, `tenphim`, `namphathinh`, `theloai`, `quocgia`, `dienvien`, `mota`, `link`) VALUES
('3-idiots', '3 Idiots', 2009, 'Hài hước, Kịch tính', 'Ấn độ', '', '', 'https://drive.google.com/file/d/1dyYsg83t8aqMWIORcy-smjzze-W-I_4d/preview'),
('accepted', 'Accepted', 2006, 'Hài hước', 'Mỹ', '', '', 'https://drive.google.com/file/d/1yNp1lrbFGopwcl_R-vrpV9zcE3EsVna_/preview'),
('agent-cody-banks', 'Agent Cody Banks', 2003, 'Hành động, Phiêu lưu, Hài hước', 'Mỹ', '', '', 'https://drive.google.com/file/d/1-4tZC_q688VXZdRgIlttz5trYMef6dCU/preview'),
('baby-driver', 'Bady Driver', 2017, 'Hành động, Tội phạm, Kịch tính', 'Vương Quốc Anh', '', '', 'https://drive.google.com/file/d/1R187yDfe55wGJWHYYJ1cEuD-Dev4RFLa/preview'),
('birds-of-prey', 'Birds Of Prey', 2020, 'Hành động, Hài hước, Tội phạm', 'Mỹ', '', '', 'https://drive.google.com/file/d/1LsGabjIPmUFYatxD6PDW-LQ65BLrY3sd/preview');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tendangnhap` varchar(20) DEFAULT NULL,
  `matkhau` varchar(1000) DEFAULT NULL,
  `quyen` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maphim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
