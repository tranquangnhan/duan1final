-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 05:41 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datvemaybay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieude` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `star` tinyint(1) DEFAULT NULL,
  `idkh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `idbaiviet` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anhien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdchitiet`
--

CREATE TABLE `hdchitiet` (
  `id` int(11) NOT NULL,
  `tenve` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idhd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `hotenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydatve` date NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quocgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tichdiem` int(11) DEFAULT NULL,
  `randomkey` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `user`, `role`, `pass`, `kichhoat`, `ngaysinh`, `email`, `sodienthoai`, `diachi`, `thanhpho`, `quocgia`, `tichdiem`, `randomkey`) VALUES
(1, 'admin', 1, '111111', 1, '2020-11-11', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanbay`
--

CREATE TABLE `sanbay` (
  `id` int(11) NOT NULL,
  `tensanbay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masanbay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tinh` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanbay`
--

INSERT INTO `sanbay` (`id`, `tensanbay`, `masanbay`, `tinh`) VALUES
(1, 'Sân bay Quốc tế Cần Thơ', 'VVCT/VCA', 'Cần Thơ'),
(2, 'Sân bay Quốc tế Đà Nẵng', 'VVDN/DAD', 'Đà Nẵng'),
(3, 'Sân bay Quốc tế Cát Bi – Hải Phòng', 'VVCI/HPH', 'Hải Phòng'),
(4, 'Sân bay Quốc tế Nội Bài – Hà Nội', 'VVNB/HAN', 'Hà Nội'),
(5, 'Sân bay Quốc tế Tân Sơn Nhất', 'VVTS/SGN', 'Thành phố Hồ Chí Minh'),
(6, 'Sân bay Quốc tế Cam Ranh', 'VVCR/CXR', 'Khánh Hòa'),
(7, 'Sân bay Quốc tế Phú Quốc', 'VVPQ/PQC', 'Kiên Giang'),
(8, 'Sân bay Quốc tế Vinh – Nghệ An', 'VVVH/VII', 'Nghệ An'),
(9, 'Sân bay Quốc tế Phú Bài – Huế', 'VVPB/HUI', 'Thừa Thiên – Huế'),
(10, 'Sân bay Côn Đảo', 'VVCS/VCS', 'Bà Rịa-Vũng Tàu'),
(11, 'Sân bay Nà Sản', 'VVNS/SQH', 'Sơn La'),
(12, 'Sân bay Phù Cát – Bình Định', 'VVPC/UIH', 'Bình Định'),
(13, 'Sân bay Cà Mau', 'VVCM/CAH', 'Cà Mau'),
(14, 'Sân bay Buôn Ma Thuột', 'VVBM/BMV', 'Đắk Lắk'),
(15, 'Sân bay Điện Biên Phủ', 'VVDB/DIN', 'Điện Biên'),
(16, 'Sân bay Pleiku – Gia Lai', 'VVPK/PXU', 'Gia Lai'),
(17, 'Sân bay Rạch Giá – Kiên Giang', 'VVRG/VKG', 'Kiên Giang'),
(18, 'Sân bay Liên Khương – Đà Lạt', 'VVDL/DLI', 'Lâm Đồng'),
(19, 'Sân bay Tuy Hòa – Phú Yên', 'VVTH/TBB', 'Phú Yên'),
(20, 'Sân bay Đồng Hới – Quảng Bình', 'VVDH/VDH', 'Quảng Bình'),
(21, 'Sân bay Chu Lai – Quảng Nam', 'VVCA/VCL', 'Quảng Nam'),
(22, 'Sân bay Thọ Xuân – Thanh Hóa', 'VVTX/THD', 'Thanh Hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenmaybay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` float NOT NULL,
  `giamgia` float DEFAULT NULL,
  `iddm` int(11) NOT NULL,
  `diemdi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diemden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loaighe` tinyint(1) NOT NULL,
  `timestar` datetime NOT NULL,
  `timeend` datetime NOT NULL,
  `hanhly` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaitri` tinyint(1) DEFAULT NULL,
  `suatan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binhluan_khachhang` (`idkh`),
  ADD KEY `fk_binhluan_sanpham` (`idsp`),
  ADD KEY `fk_binhluan_baiviet` (`idbaiviet`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hdchitiet`
--
ALTER TABLE `hdchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chitiet_hoadon` (`idhd`),
  ADD KEY `fk_chitiet_sanpham` (`idsp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_khachhang` (`idkh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sodienthoai` (`sodienthoai`);

--
-- Chỉ mục cho bảng `sanbay`
--
ALTER TABLE `sanbay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc_sanpham` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hdchitiet`
--
ALTER TABLE `hdchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanbay`
--
ALTER TABLE `sanbay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
