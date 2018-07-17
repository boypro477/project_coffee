-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2018 lúc 03:55 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4
-- create database `mycoffee`;
create database `mycoffee`;
use `mycoffee`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mycoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_invoices`
--

CREATE TABLE `coffee_invoices` (
  `id_invoices` int(11) NOT NULL,
  `tongtien` double NOT NULL,
  `giogiaohang` text NOT NULL,
  `id` text NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `coffee_invoices`
--

INSERT INTO `coffee_invoices` (`id_invoices`, `tongtien`, `giogiaohang`, `id`, `code`) VALUES
(1, 1850000, '10:17:35am', '11', '-1530519455'),
(2, 1850000, '10:18:38am', '11', '11-1530519518'),
(3, 1850000, '10:20:46am', '11', '11-1530519646'),
(4, 1850000, '10:20:49am', '11', '11-1530519649'),
(5, 1850000, '10:20:52am', '11', '11-1530519652'),
(6, 1850000, '10:24:11am', '11', '11-1530519851'),
(7, 1850000, '10:24:51am', '11', '11-1530519891'),
(8, 1850000, '10:25:50am', '11', '11-1530519950'),
(9, 1850000, '10:27:39am', '11', '11-1530520059'),
(10, 60000, '10:36:22am', '11', '11-1530520582'),
(11, 780000, '01:16:09pm', '11', '11-1530530169'),
(12, 55000, '01:50:45pm', '11', '11-1530532245'),
(13, 170000, '02:35:19pm', '11', '11-1530534919'),
(14, 45000, '02:48:14pm', '11', '11-1530535694'),
(15, 605000, '02:49:15pm', '11', '11-1530535755'),
(16, 55000, '02:54:12pm', '11', '11-1530536052'),
(17, 725000, '02:58:06pm', '11', '11-1530536286'),
(18, 155000, '03:17:43pm', '11', '11-1530537463'),
(19, 115000, '01:28:33am', '11', '11-1530574113'),
(20, 595000, '09:00:31am', '1', '1-1530601231'),
(21, 360000, '09:20:45am', '1', '1-1530602445'),
(22, 275000, '12:44:28pm', '1', '1-1530614668');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_phanhoi`
--

CREATE TABLE `coffee_phanhoi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_phanhoi`
--

INSERT INTO `coffee_phanhoi` (`id`, `name`, `email`, `comment`) VALUES
(1, 'dfsd', 'dsd@mail.com', 'dsdgf'),
(2, 'ThanhBinh', 't@gmail.com', 'Cần phục vụ nhanh hơn!!!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_products`
--

CREATE TABLE `coffee_products` (
  `id` int(11) NOT NULL,
  `productTypeId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price-small` double NOT NULL,
  `price-big` double DEFAULT '0',
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `lastModifiedBy` int(11) NOT NULL,
  `lastModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_products`
--

INSERT INTO `coffee_products` (`id`, `productTypeId`, `name`, `description`, `price-small`, `price-big`, `quantity`, `image`, `createdBy`, `lastModifiedBy`, `lastModifiedTime`, `createdTime`) VALUES
(1, 1, 'AMERICANO', 'Espresso, nước nóng', 45000, 55000, 50, './image/order_coffe/1275.jpg', 0, 0, '2018-07-03 06:33:45', '0000-00-00 00:00:00'),
(2, 1, 'CAPPUCCINO', 'Espresso, sữa tươi, bọt sữa', 55000, 60000, 50, './image/order_coffe/1275.jpg', 0, 0, '2018-07-03 06:33:47', '0000-00-00 00:00:00'),
(3, 1, 'CARAMEL MACCHIATO', 'Espresso, sữa tươi, caramel', 65000, 70000, 50, './image/order_coffe/1275.jpg', 0, 0, '2018-07-03 06:33:49', '0000-00-00 00:00:00'),
(4, 1, 'VIETNAMESE COFFEE', 'Cà phê đá / Cà phê sữa đá', 40000, 50000, 50, './image/order_coffe/1275.jpg', 0, 0, '2018-07-03 06:33:51', '0000-00-00 00:00:00'),
(5, 2, 'CARAMEL ICE BLENDED', 'Espresso, sữa tươi, caramal, kem tươi', 60000, 70000, 50, './image/order_coffe/178.jpg', 0, 0, '2018-07-03 10:06:54', '0000-00-00 00:00:00'),
(6, 2, 'COOKIE ICE BLEND', 'Bánh cookie, sữa tươi, kem tươi', 60000, 80000, 50, './image/order_coffe/178.jpg', 0, 0, '2018-07-03 10:06:59', '0000-00-00 00:00:00'),
(7, 2, 'ICE CHOCOLATE MOCHA ALMOND', 'Espresso, chocolate, hạnh nhân, bọt sữa', 60000, 90000, 50, './image/order_coffe/178.jpg', 0, 0, '2018-07-03 10:07:03', '0000-00-00 00:00:00'),
(8, 2, 'HAZELNUT ICE BLENDED', 'Espresso, sữa tươi, hazelnut, kem tươi', 60000, 80000, 50, './image/order_coffe/178.jpg', 0, 0, '2018-07-03 10:07:08', '0000-00-00 00:00:00'),
(9, 3, 'CHOCOLATE ICE BLENDED', 'Sôcôla, sữa tươi, kem tươi', 60000, 70000, 50, './image/order_coffe/42.jpg', 0, 0, '2018-07-03 10:07:36', '0000-00-00 00:00:00'),
(10, 3, 'HOT CHOCOLATE TOFFEE ALMOND', 'Sôcôla, hạnh nhân, kem tươi, kẹo marshmallow', 60000, 65000, 50, './image/order_coffe/42.jpg', 0, 0, '2018-07-03 10:07:46', '0000-00-00 00:00:00'),
(11, 4, 'BLACK TEA MACCHIATO', 'Trà đen, váng sữa', 40000, 50000, 50, './image/order_coffe/28.jpg', 0, 0, '2018-07-03 10:10:15', '0000-00-00 00:00:00'),
(12, 4, 'FLAVOURED TEA', 'Trà thảo mộc hương: chanh/bạc hà/ nho đen', 40000, 55000, 50, './image/order_coffe/28.jpg', 0, 0, '2018-07-03 10:10:20', '0000-00-00 00:00:00'),
(13, 4, 'MATCHA ICE BLENDED', 'Trà xanh, sữa tươi, kem tươi, đá xay', 45000, 55000, 50, './image/order_coffe/28.jpg', 0, 0, '2018-07-03 10:10:26', '0000-00-00 00:00:00'),
(14, 4, 'PEACH TEA MANIA', 'Trà đào, cam, sả', 55000, 70000, 50, './image/order_coffe/28.jpg', 0, 0, '2018-07-03 10:10:31', '0000-00-00 00:00:00'),
(15, 5, 'BLUBERRY SMOOTHIE', 'Mứt việt quất, sữa chua, sữa tươi', 60000, 70000, 50, './image/order_coffe/222.jpg', 0, 0, '2018-07-03 10:45:44', '0000-00-00 00:00:00'),
(16, 5, 'BLUEBERRY SODA', 'Mứt Việt Quốc, soda', 55000, 70000, 50, './image/order_coffe/222.jpg', 0, 0, '2018-07-03 10:45:38', '0000-00-00 00:00:00'),
(17, 5, 'GREEN APPLE', 'Syrup táo xanh, syrup mojito, táo xanh, 7up', 55000, 70000, 50, './image/order_coffe/222.jpg', 0, 0, '2018-07-03 10:45:32', '0000-00-00 00:00:00'),
(18, 5, 'MANGO ORANGE COOKIE SMOOTHIE', 'Mứt cam-xoài, sữa chua, bánh cookie', 60000, 80000, 50, './image/order_coffe/222.jpg', 0, 0, '2018-07-03 10:45:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_product_types`
--

CREATE TABLE `coffee_product_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_product_types`
--

INSERT INTO `coffee_product_types` (`id`, `name`, `description`, `image`, `url`) VALUES
(1, 'ESPRESSO & COFFEE', 'Cafe', '', ''),
(2, 'ICE BLENDED COFFEE', 'Đá xay', '', ''),
(3, 'CHOCOLATE', 'Chocolate', '', ''),
(4, 'SPECIAL TEA', 'Trà', '', ''),
(5, 'SMOOTHIES', 'Sữa chua, Trái cây và Sữa tươi', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_thoigian`
--

CREATE TABLE `coffee_thoigian` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_thoigian`
--

INSERT INTO `coffee_thoigian` (`id`, `time`) VALUES
(1, 'Fulltime (toàn thời gian)'),
(2, 'Parttime (bán thời gian)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_tintuc`
--

CREATE TABLE `coffee_tintuc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_tintuc`
--

INSERT INTO `coffee_tintuc` (`id`, `title`, `content`, `image`) VALUES
(1, 'CẦU ĐẤT - LÊN MÙ SƯƠNG, XUỐNG MÙ SƯƠNG', 'Có một xứ vùng đất, chẳng biết vô tình hay hữu ý, mà đúng chằn chặn với câu thơ của thi sĩ Bùi Giáng \"Lên mù sương, xuống mù sương\". Cách Đà Lạt 25 km về phía Đông Nam, nằm trên độ cao lý tưởng 1650m so với mặt nước biển, Cầu Đất đang trở thành một địa danh “nóng”.Thị trấn nhỏ xinh, những đồi chè trải ngút ngàn, những thung lũng đầy sương mây cộng với danh tiếng của hạt cà phê Arabica nơi đây đã làm cho vùng đất này trở nên quyến rũ hơn....', ''),
(2, 'CÀ PHÊ & NGƯỜI THÀNH THỊ', 'Cà phê từ lâu đã không chỉ là 1 danh từ, là tên của 1 loại thức uống đơn thuần. Cà phê đã trở thành 1 thói quen, 1 nét văn hoá lâu đời của người thành thị. Cuộc sống thành thị cũng lanh canh ồn ã, cũng ngọt, cũng đắng, cũng chen chúc sóng sánh tràn đầy cảm xúc như ly cà phê. Liệu đó có phải lý do cà phê trở thành thứ thức uống ưa thích của mọi lứa tuổi, mọi tầng lớp? Vì hương vị khi thưởng thức 1 tách cà phê rất “đời” và khơi gợi nhiều xúc cảm. Đương nhiên, người ta uống cà phê không chỉ đơn thuần để chống chọi những mệt mỏi ...', ''),
(3, 'Robusta + Arabica + tình yêu cà phê Việt Nam = ? ', 'Khó có một loại cà phê nào được xác định là ngon nhất mà chỉ có cái “gu” uống cà phê của chính chúng ta quyết định loại nào mang lại cho chúng ta nhiều cảm hứng nhất. Trên thế giới, Arabica chiếm khoảng 80% chủng loại cà phê, được trồng nhiều ở các nước Nam – Trung Mỹ như Brazil, Colombia, Mexico, một số nước Châu Phi…Khoảng 20% còn lại là loại Robusta được trồng nhiều nhất tại một số nước nhiệt đới xích đạo, trong đó có Việt Nam.....', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_tuyendung`
--

CREATE TABLE `coffee_tuyendung` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_tuyendung`
--

INSERT INTO `coffee_tuyendung` (`id`, `title`, `location`, `time`, `address`) VALUES
(1, 'The Coffee House - Đà Nẵng', '[TP. Đà Nẵng] Giám Sát Cửa Hàng - The Coffee House', 1, 'The Coffee House - Đà Nẵng, Lô 2A Nguyễn Văn Linh, Quận Hải Châu, TP. Đà Nẵng'),
(2, 'The Coffee House - Đà Nẵng', '[TP. Đà Nẵng] Cửa Hàng Trưởng - The Coffee House', 1, 'The Coffee House - Đà Nẵng, Lô 2A Nguyễn Văn Linh, Quận Hải Châu, TP. Đà Nẵng'),
(3, 'The Coffee House Signature - Hồ Chí Minh', '[TP. HCM] Nhân viên Phục vụ (Service) - The Coffee House Signature - Phạm Ngọc Thạch - Quận 3', 2, 'The Coffee House Signature, 19B Phạm Ngọc Thạch, Phường 6, Quận 3, TP. HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_users`
--

CREATE TABLE `coffee_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `isadmin` tinyint(4) NOT NULL,
  `diachi` text,
  `tenkh` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coffee_users`
--

INSERT INTO `coffee_users` (`id`, `username`, `password`, `email`, `phonenumber`, `isadmin`, `diachi`, `tenkh`) VALUES
(1, 'admin', '123', 'ab@gmail.com', 987654321, 1, 'aaaa', 'Lê Thanh Bình'),
(2, 'a', '1', 'b@gmail.com', 123545569, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú'),
(5, 'b', 'c4ca4238a0b923820dcc509a6f75849b', 'ba@gmail.com', 123123123, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú'),
(8, 'tt', 'c4ca4238a0b923820dcc509a6f75849b', 't@gmail.com', 12312312, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú'),
(9, 'r', '1', 'jh@mail.com', 465768798, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú'),
(10, 'binh', '1', 'bi@mail.com', 2147483647, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú'),
(11, 'aa', '123', 'aaa@gmail.com', 12, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú'),
(12, 'aaaa', '123', 'ba2@gmail.com', 1634150480, 0, 'Ngách gì đó tại Hà Nội', 'Nguyễn Anh Tú Tú');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffe_invoices_details`
--

CREATE TABLE `coffe_invoices_details` (
  `id` int(11) NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantitysmall` int(10) NOT NULL DEFAULT '0',
  `pricebig` double DEFAULT '0',
  `quantitybig` int(11) DEFAULT '0',
  `pricesmall` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `coffe_invoices_details`
--

INSERT INTO `coffe_invoices_details` (`id`, `invoiceid`, `productid`, `quantitysmall`, `pricebig`, `quantitybig`, `pricesmall`) VALUES
(1, 9, 2, 10, 60000, 0, 55000),
(2, 9, 3, 20, 70000, 0, 65000),
(3, 10, 15, 1, 0, 0, 60000),
(4, 11, 2, 1, 60000, 0, 55000),
(5, 11, 2, 12, 60000, 0, 55000),
(6, 11, 3, 1, 70000, 0, 65000),
(7, 12, 2, 1, 60000, 0, 55000),
(8, 12, 3, 2, 70000, 0, 65000),
(9, 12, 2, 1, 60000, 0, 55000),
(10, 13, 1, 1, 55000, 0, 45000),
(11, 13, 6, 1, 80000, 0, 60000),
(12, 13, 3, 1, 70000, 0, 65000),
(13, 14, 1, 1, 55000, 0, 45000),
(14, 15, 2, 11, 60000, 0, 55000),
(15, 16, 2, 1, 60000, 0, 55000),
(16, 17, 17, 12, 0, 0, 55000),
(17, 17, 3, 1, 70000, 0, 65000),
(18, 18, 1, 1, 55000, 0, 45000),
(19, 18, 3, 1, 70000, 0, 65000),
(20, 18, 1, 1, 55000, 0, 45000),
(21, 19, 2, 1, 60000, 0, 55000),
(22, 19, 7, 1, 90000, 0, 60000),
(23, 20, 1, 0, 0, 0, 0),
(24, 20, 1, 1, 55000, 10, 45000),
(25, 21, 3, 1, 70000, 2, 65000),
(26, 21, 1, 1, 55000, 2, 45000),
(27, 22, 14, 5, 70000, 0, 55000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `coffee_invoices`
--
ALTER TABLE `coffee_invoices`
  ADD PRIMARY KEY (`id_invoices`);

--
-- Chỉ mục cho bảng `coffee_phanhoi`
--
ALTER TABLE `coffee_phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_products`
--
ALTER TABLE `coffee_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_product_types`
--
ALTER TABLE `coffee_product_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_thoigian`
--
ALTER TABLE `coffee_thoigian`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_tintuc`
--
ALTER TABLE `coffee_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_tuyendung`
--
ALTER TABLE `coffee_tuyendung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffee_users`
--
ALTER TABLE `coffee_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coffe_invoices_details`
--
ALTER TABLE `coffe_invoices_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `coffee_invoices`
--
ALTER TABLE `coffee_invoices`
  MODIFY `id_invoices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `coffee_phanhoi`
--
ALTER TABLE `coffee_phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `coffee_products`
--
ALTER TABLE `coffee_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `coffee_product_types`
--
ALTER TABLE `coffee_product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `coffee_thoigian`
--
ALTER TABLE `coffee_thoigian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `coffee_tintuc`
--
ALTER TABLE `coffee_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `coffee_tuyendung`
--
ALTER TABLE `coffee_tuyendung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `coffee_users`
--
ALTER TABLE `coffee_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `coffe_invoices_details`
--
ALTER TABLE `coffe_invoices_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
