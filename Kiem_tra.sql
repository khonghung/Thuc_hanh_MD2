-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210818.8ee4c61c32
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th9 15, 2021 lúc 10:51 AM
-- Phiên bản máy phục vụ: 8.0.26-0ubuntu0.20.04.2
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Kiem_tra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `sector`, `price`, `quantity`, `create_at`, `description`) VALUES
(7, 'Tủ lạnh LG inventer', 'Fridge', 46000000, 10, '2021-09-14 17:00:00', 'Công nghệ cửa tủ InstaView Door-in-Door cho phép nhìn thấu bên trong, tính năng LG Smart ThinQ'),
(8, 'Smart Tivi 8K ', 'TV', 200000000, 2, '2021-09-14 17:00:00', 'TV trí tuệ nhân tạo AI nhận thức đầu tiên trên thế giới, màn hình lớn 85\" Full Array LED 8K UHD siêu chi tiết đem lại hình ảnh tuyệt đẹp'),
(9, 'Điều hòa 2 chiều inventer', 'Harmonic', 20000000, 100, '2021-08-09 17:00:00', 'Lọc sạch không khí với màng lọc Apatit Titan, tiết kiệm điện hơn với công nghệ Inverter'),
(10, 'Iphone13', 'Phone', 23000000, 33, '2021-09-14 17:00:00', 'Sang, Xịn, Mịn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
