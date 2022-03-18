-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2022 lúc 08:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Hoang Y', 'ynhune'),
('Ai Nhu', 'ynhune');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logstatus`
--

CREATE TABLE `logstatus` (
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `logstatus`
--

INSERT INTO `logstatus` (`status`) VALUES
(0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` varchar(100) NOT NULL,
  `Hoten` varchar(100) NOT NULL,
  `IDPB` varchar(100) NOT NULL,
  `Diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES
('nv01', 'Nguyễn Lâm Ái Như', 'khtc', 'K13/4 An Trạch, Hòa Tiến, Hòa Vang, Đà Nẵng.'),
('nv02', 'Nguyễn Đăng Hoàng Ý', 'khtc', 'k82'),
('nv03', 'Hồ Nhật Quân', 'ctsv', '35 Âu Cơ, Liên Chiểu, Đà Nẵng.'),
('nv04', 'Hồ Thị Thanh Thúy', 'ctsv', '60 Ngô Sĩ Liên, Liên Chiểu, Đà Nẵng.'),
('nv05', 'Tăng Văn Lộc', 'dt', '32 Dũng Sĩ Thanh Khê, Thanh Khê, Đà Nẵng.'),
('nv06', 'Vũ Hoàng Sơn', 'dt', '43 Hoàng Hoa Thám, Thanh Khê, Đà Nẵng.'),
('nv07', 'Thái Trung Vĩnh', 'tchc', '218 Nguyễn Hữu Thọ, Hải Châu, Đà Nẵng'),
('nv08', 'Nguyễn Quang Tuấn', 'tchc', '298/11 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng.'),
('nv09', 'Diễm Quyên', 'khtc', '40/10 Lê Cơ, Hải Châu, Đà Nẵng.'),
('nv10', 'Phan Hoàng Tùng', 'ctsv', '28 Ông Ích Khiêm, Hải Châu, Đà Nẵng.'),
('nv11', 'Lê Đức Trình', 'dt', '18 Hà Huy Tập, Thanh Khê, Đà Nẵng'),
('nv12', 'Nguyễn Đăng Điệp', 'tchc', '54 Hà Văn Tính, Liên Chiểu, Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `IDPB` varchar(100) NOT NULL,
  `tenpb` varchar(100) NOT NULL,
  `mota` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`IDPB`, `tenpb`, `mota`) VALUES
('ctsv', 'Công Tác Sinh Viên', '        Phòng Công tác sinh viên có chức năng tham mưu, giúp Hiệu trưởng thực hiện chức năng quản lý Nhà nước về công tác chính trị, tư tưởng và công tác quản lý sinh viên'),
('dt', 'Đào Tạo', ' Phòng Đào tạo có chức năng tham mưu và giúp việc cho Hiệu trưởng trong công tác tổ chức và quản lý toàn bộ hoạt động đào tạo của nhà trường, ở tất cả các trình độ, hệ và loại hình đào tạo.'),
('khtc', 'Kế Hoạch Tài Chính', '     - Tham mưu giúp việc cho Hiệu trưởng thực hiện công tác lập kế hoạch, quản lý tài chính của nhà trường.- Thực hiện thanh quyết toán mọi nguồn kinh phí theo chế độ của nhà nước và quy định của Trường.- Hướng dẫn, kiểm tra hoạt động tài chính tại các đơn vị thuộc trường.- Tổng hợp báo cáo tình hình hoạt động tài chính của Trường trình Hiệu trưởng'),
('tchc', 'Tổ Chức - Hành Chính', '   Phòng Tổ chức - Hành chính là một trong 08 phòng chức năng của trường, chịu trách nhiệm về công tác hành chính, tổng hợp, tổ chức, nhân sự, an ninh trật tự, thi đua – khen thưởng, y tế, vệ sinh môi trường…. Hiện nay phòng có 46 cán bộ viên chức');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNV`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`IDPB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
