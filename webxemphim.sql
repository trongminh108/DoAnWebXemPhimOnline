-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 25, 2023 lúc 05:35 PM
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
CREATE DATABASE IF NOT EXISTS `webxemphim` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webxemphim`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maphim` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tenphim` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namphathanh` int(11) DEFAULT NULL,
  `theloai` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quocgia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienvien` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `luotxem` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`maphim`, `tenphim`, `namphathanh`, `theloai`, `quocgia`, `dienvien`, `mota`, `link`, `luotxem`) VALUES
('3-idiots', '3 Idiots', 2009, 'Hài hước, Kịch tính', 'Ấn độ', '', 'Tác phẩm có nội dung xoay quanh tình bạn của ba sinh viên tại một trường đại học kỹ thuật của Ấn Độ, đồng thời mang tính đả kích những áp lực xã hội dưới hệ thống giáo dục Ấn Độ. Tác phẩm được kể lại theo hai cốt truyện song song, một ở hiện tại và một ở quá khứ cách đó 10 năm. Phim còn kết hợp cả những sáng chế có thật của Ấn Độ do Remya Jose, Mohammad Idris, Jahangir Painter và Sonam Wangchuk sở hữu.', 'https://drive.google.com/file/d/1dyYsg83t8aqMWIORcy-smjzze-W-I_4d/preview', 5),
('accepted', 'Accepted', 2006, 'Hài hước', 'Mỹ', '', 'Accepted là một bộ phim hài của Mỹ năm 2006 do Steve Pink đạo diễn (trong lần đầu làm đạo diễn của anh ấy) và được viết bởi Adam Cooper, Bill Collage và Mark Perez. Cốt truyện kể về một nhóm học sinh tốt nghiệp trung học thành lập trường đại học giả của riêng mình sau khi bị trường cao đẳng mà họ nộp đơn từ chối. Câu chuyện diễn ra ở Wickliffe và một thị trấn đại học hư cấu tên là Harmon ở Ohio.', 'https://drive.google.com/file/d/1yNp1lrbFGopwcl_R-vrpV9zcE3EsVna_/preview', 1),
('agent-cody-banks', 'Agent Cody Banks', 2003, 'Hành động, Phiêu lưu, Hài hước', 'Mỹ', '', 'Agent Cody Banks là một bộ phim hài điệp viên của Mỹ năm 2003 do Harald Zwart đạo diễn. Phim theo sau cuộc phiêu lưu của nhân vật 15 tuổi, Cody Banks người phải hoàn thành nhiệm vụ của mình là làm quen với cô bạn Natalie Connors để tiếp cận với ba của cô, một nhà khoa học không biết mình đang tiếp tay cho tổ chức tội ác ERIS để chế tạo ra một đội quân nanobot chết người. Bộ phim được quay ở British Columbia và được phát hành tại Hoa Kỳ vào ngày 14 tháng 3 năm 2003.', 'https://drive.google.com/file/d/1-4tZC_q688VXZdRgIlttz5trYMef6dCU/preview', 6),
('baby-driver', 'Bady Driver', 2017, 'Hành động, Tội phạm, Kịch tính', 'Vương Quốc Anh', '', 'Baby Driver là bộ phim hành động tội phạm năm 2017 do Edgar Wright viết kịch bản và đạo diễn. Phim có dàn diễn viên gồm Ansel Elgort, Kevin Spacey, Lily James, Eiza González, Jon Hamm, Jamie Foxx và Jon Bernthal. Cốt truyện xoay quanh Baby, một tài xế trẻ tuổi đang tìm cách chạy trốn khỏi chính cái bóng tội lỗi của bản thân mình.', 'https://drive.google.com/file/d/1R187yDfe55wGJWHYYJ1cEuD-Dev4RFLa/preview', 1),
('birds-of-prey', 'Birds Of Prey', 2020, 'Hành động, Hài hước, Tội phạm', 'Mỹ', '', 'Birds of Prey: Cuộc lột xác huy hoàng của Harley Quinn (tên gốc tiếng Anh: Birds of Prey (and the Fantabulous Emancipation of One Harley Quinn)) là phim điện ảnh siêu anh hùng của Mỹ năm 2020. Đây là phim điện ảnh thứ tám trong Vũ trụ Mở rộng DC (DCEU) và là phim ngoại truyện của Biệt đội cảm tử (2016). Tác phẩm do Cathy Yan đạo diễn, dựa trên phần kịch bản do Christina Hodson đảm nhiệm. Phim có sự góp mặt của các diễn viên gồm Margot Robbie, Mary Elizabeth Winstead, Jurnee Smollett-Bell, Rosie Perez, Chris Messina, Ella Jay Basco, Ali Wong và Ewan McGregor. Nội dung phim xoay quanh nhân vật Harley Quinn khi cô gia nhập lực lượng với Black Canary, Huntress và Renee Montoya để cứu Cassandra Cain từ Thành phố Gotham khỏi tên chúa tể tội phạm Black Mask.', 'https://drive.google.com/file/d/1LsGabjIPmUFYatxD6PDW-LQ65BLrY3sd/preview', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user`, `pass`, `name`, `email`, `role`) VALUES
('admin', 'ad123', 'Minh Thong', 'minhthong@gmail.com', 1),
('user', 'us123', 'Quoc Toan', 'quoctoan@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maphim`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
