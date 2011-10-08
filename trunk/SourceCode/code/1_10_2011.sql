-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2011 at 01:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `FastShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `AdUsername` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AdPassword` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `AdAdress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AdTelePhone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `AdEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`AdminID`, `AdUsername`, `AdPassword`, `AdAdress`, `AdTelePhone`, `AdEmail`) VALUES
(1, 'Hung', '3baaa792aa3eec25897a6a84cf8b30a096990336', '', '1245', 'hung_nguyenvan30@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CateName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DepartmentID` int(11) NOT NULL,
  PRIMARY KEY (`CategoryID`),
  UNIQUE KEY `CateName` (`CateName`),
  KEY `FK_Category_Department` (`DepartmentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryID`, `CateName`, `DepartmentID`) VALUES
(1, 'Bình thủy điện', 1),
(2, 'Hút mùi', 1),
(3, 'Chổi lau nhà', 1),
(4, 'Chảo', 2),
(5, 'Nồi', 2),
(6, 'Bếp các loại', 2),
(7, 'Nước ngọt', 3),
(8, 'Rượu', 3),
(9, 'Bia', 3),
(10, 'Bút', 4),
(11, 'Xe các loại', 4),
(12, 'Phát triển trí thông minh', 5),
(13, 'Sách trẻ em', 6),
(14, 'Lọ hoa', 7),
(15, 'Tượng sứ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ComContent` text COLLATE utf8_unicode_ci NOT NULL,
  `ComDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ComStatus` enum('submitted','pending','canceled') COLLATE utf8_unicode_ci DEFAULT 'pending',
  PRIMARY KEY (`CommentID`),
  KEY `FK_Comment_Customer` (`CustomerID`),
  KEY `FK_Comment_Product` (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `CusName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CusAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CusUsername` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CusPassword` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CusEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CusTelePhone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `CusSpent` float DEFAULT '0',
  `CusReceiveEmail` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `CHK_Username` (`CusUsername`),
  UNIQUE KEY `UNI_Password` (`CusPassword`),
  UNIQUE KEY `UNI_Email` (`CusEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE IF NOT EXISTS `Department` (
  `DepartmentID` int(11) NOT NULL AUTO_INCREMENT,
  `DepName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`DepartmentID`),
  UNIQUE KEY `DepName` (`DepName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`DepartmentID`, `DepName`) VALUES
(1, 'Đồ gia dụng'),
(2, 'Đồ dùng nhà bếp'),
(3, 'Đồ uống'),
(4, 'Đồ dùng cho bé'),
(5, 'Đồ chơi'),
(6, 'Sách truyện'),
(7, 'Đồ trang trí');

-- --------------------------------------------------------

--
-- Table structure for table `Discount`
--

CREATE TABLE IF NOT EXISTS `Discount` (
  `DiscountID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` int(11) NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` datetime NOT NULL,
  PRIMARY KEY (`DiscountID`),
  KEY `FK_Discount_Product` (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Discount`
--


-- --------------------------------------------------------

--
-- Table structure for table `ImportManagement`
--

CREATE TABLE IF NOT EXISTS `ImportManagement` (
  `ImpProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` int(11) NOT NULL,
  `ImpDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Supplier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ImpPrice` float NOT NULL,
  `Payment` float NOT NULL,
  `ImpAmount` int(11) NOT NULL,
  PRIMARY KEY (`ImpProductID`),
  KEY `FK_ImportManagement_Product` (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ImportManagement`
--


-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `OrdPrice` float NOT NULL,
  `Amount` int(11) NOT NULL,
  `OrdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrdStatus` enum('submitted','pending','canceled') COLLATE utf8_unicode_ci DEFAULT 'pending',
  PRIMARY KEY (`OrderID`),
  KEY `FK_Order_Customer` (`CustomerID`),
  KEY `FK_Order_Product` (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Order`
--


-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProdName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProdLeft` int(11) NOT NULL,
  `ProdPrice` float NOT NULL,
  `ProdImage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ProdDescription` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ProductID`),
  UNIQUE KEY `ProdName_2` (`ProdName`),
  KEY `FK_Product_Category` (`CategoryID`),
  FULLTEXT KEY `ProdName` (`ProdName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ProductID`, `ProdName`, `CategoryID`, `ProdLeft`, `ProdPrice`, `ProdImage`, `ProdDescription`) VALUES
(1, 'Bình thủy điện GS-ET-GEG42A', 1, 10, 1080000, 'images/binh_thuy_dien_GEG42A.jpg', 'Điều khiển điện tử, tự động giữ ấm ở 3 mức nhiệt độ: 98-85-60.'),
(2, 'Bình thủy điện GOLDSUN ET-GWJ12L', 1, 10, 399000, 'images/binh_thuy_dien_GWJ12L.jpg', 'Bình thủy điện Goldsun ET-GWJ12L vừa có chức năng nấu nước nhanh như ấm siêu tốc, vừa tự động giữ nhiệt và đun sôi trở lại. '),
(3, 'MÁY HÚT KHÓI TURINA TR 90BS', 2, 10, 3150000, 'images/may_hut_khoi_turina_TR90BS.jpg', 'Máy hút khói kiểu kính cong dạng cánh cung 70cm – 90cm dồn khói vào trung tâm tạo công suất hút hiệu quả hơn đang được ưa chuộng sử dụng ở khắp Châu Âu. '),
(4, 'MÁY HÚT KHÓI TURINA TR 60P', 2, 10, 888000, 'images/may_hut_khoi_turina_TR60P.jpg', 'Thiết kế cánh quạt và động cơ hút trong tạo dòng gió xoáy đẩy ra ngoài khỏe hơn, mạnh hơn quạt gió thông thường. '),
(5, 'CHỔI LAU NHÀ SUPA MOP 360 ĐỘ', 3, 10, 650000, 'images/choi_lau_nha_supa_mop.jpg', 'Chổi có khả năng xoay được 360 độ, làm sạch được mọi góc mọi nơi, an toàn và dễ cất trong nhà. '),
(6, 'CÂY LAU SÀN HƠI NƯỚC ĐA NĂNG HAPPY', 3, 10, 1890000, 'images/cay_lau_san_happy.gif', 'Sản phẩm tiện ích giúp bạn giảm bớt mệt mỏi với công việc lau quét dọn nhà cửa nhàm chán.'),
(7, 'CHỔI LAU NHÀ MAKXIM - EASY MOP', 3, 10, 790000, 'images/choi_lau_nha_MAKXIM.jpg', 'Chổi lau nhà Makxim cực kỳ thông minh trong vấn đề lau chùi, dọn dẹp nhà cửa, giúp tiết kiệm thời gian và năng lượng. '),
(8, 'CHỔI LAU NHÀ ĐA NĂNG KANGAROO', 3, 10, 800000, 'images/choi_lau_nha_KANGAROO.jpg', 'Chổi lau nhà đa năng 3600 ra đời là giải pháp tuyệt vời nhằm bảo vệ đôi bàn tay, sức khỏe phụ nữ, vừa giúp tiết kiệm thời gian và năng lượng.'),
(9, 'CHẢO TRÒN 2 MẶT NISSEI ', 4, 10, 679000, 'images/chao_tron_2_mat.jpg', 'Chảo 2 mặt Nissei có ưu điểm không bám dính thức ăn khi nấu, chiên thức ăn hai mặt dễ dàng.'),
(10, 'CHẢO VUÔNG 2 MẶT NISSEI', 4, 10, 700000, 'images/chao_vuong_2_mat.jpg', 'Chảo nướng Nissei làm cho việc nấu nướng của bạn trở nên đơn giản và tiện dụng hơn.'),
(11, 'CHẢO SẦN JOLLY PLUS', 4, 10, 152000, 'images/chao_san_JOLLY_PLUS.jpg', 'Kiểu dáng thon, cong, cùng với điểm nhấn lắp đệm inox trên tay cầm tạo nên sự độc đáo và mới lạ của chiếc chảo Jolly Pluss.'),
(12, 'CHẢO HÀN QUỐC DIAMOND NISSEI FD', 4, 10, 336000, 'images/chao_han_quoc_DIAMOND.jpg', 'Chảo có thiết kế tuyệt vời tạo cảm giác mạnh mẽ, cứng cáp. '),
(13, 'CHẢO CHỐNG DÍNH SUNHOUSE WANGNOLBOO', 4, 10, 184000, 'images/chao_chong_dinh_SUNHOUSE.jpg', 'Cán chảo gồm 2 phần xẻng rán và cán chảo đựợc thiết kế phù hợp với việc sử dụng đặt xẻng rán, bên ngoài nồi được sơn lớp sơn màu chịu nhiệt, chống bám khi sử dụng.'),
(14, 'BỘ NỒI GOLDSUN GH05-2303SG', 5, 10, 590000, 'images/bo_noi_goldsun_GH05_2303SG.jpg', 'Chất liệu inox nhập khẩu, duy trì độ sáng bóng sau khi đun, bền đẹp và đảm bảo vệ sinh an toàn thực phẩm tuyệt đối.'),
(15, 'NỒI NINH HẦM NẤU CẢM ỨNG GOLSUN MC-GBK60ES/ ER', 5, 10, 1550000, 'images/noi_ninh_ham_goldsun_MC_GBK60ES.jpg', 'Sản phẩm có dung tích 6 lít thích hợp cho việc nấu các món ninh hầm nấu cho gia đình có đông người.'),
(16, 'NỒI CƠM ĐIỆN HOMICOOK', 5, 10, 1550000, 'images/noi_com_dien_Homicook.jpg', 'Nồi cơm điện Homicook được nghiên cứu và sản xuất trên dây chuyền hiện đại của Hàn Quốc và Nhật Bản.'),
(17, 'BỘ NỒI ANOD 4 CHIẾC', 5, 10, 1320000, 'images/bo_noi_Anod.jpg', 'Bộ nồi gồm 4 chiếc sang trọng và thích hợp với mọi gian bếp.'),
(18, 'BỘ NỒI VISIONS VS-330', 5, 10, 3089000, 'images/bo_noi_Visions_VS_330.jpg', 'Bộ đồ nấu ăn Visions được làm từ những vật liệu đặc biệt và có khả năng chịu nóng cao.'),
(19, 'BỘ NỒI INOX GOLDSUN GH02-5310SS', 5, 10, 2730000, 'images/bo_noi_goldsun_GH02_5310SS.jpg', 'à bộ sản phẩm nhiều chức năng trong đun nấu với sản phẩm bổ trợ là chảo chống dính inox F24.'),
(20, 'BẾP GA ÂM TURINA TR 999', 6, 10, 999000, 'images/bep_ga_am_Turina_TR999.jpg', 'Bếp gas Turina có kiểu dáng sang trọng, vượt trội về đẳng cấp và chất lượng.'),
(21, 'BẾP LẨU NƯỚNG GOLDSUN GR-GHY2309', 6, 10, 1250000, 'images/bep_nau_nuong_goldsun_GR_GHY2309.jpg', 'Bếp lẩu và nướng GR-GHY2304 2 trong 1 vừa ăn lẩu nước vừa ăn đồ nướng cùng 1 lúc.'),
(22, 'BẾP LẨU NƯỚNG GOLDSUN GR-GHY2304', 6, 10, 1000000, 'images/bep_nau_nuong_goldsun_GR_GHY2304.jpg', 'Bếp lẩu và nướng GR-GHY2304 2 trong 1 vừa ăn lẩu nước vừa ăn đồ nướng cùng 1 lúc.'),
(23, 'BẾP GA NARDI BH 20 AV X', 6, 10, 6600000, 'images/bep_ga_Nardi_BH20AVX.jpg', 'Bếp ga 2 lò nhỏ tiện dụng, tiết kiệm cho khu bếp có diện tích nhỏ.'),
(24, 'BẾP GA NARDI 70 LC 724A VN N', 6, 10, 8650000, 'images/bep_ga_Nardi_70LC724AVNN.jpg', 'Bếp có mặt kính chịu nhiệt màu đen.'),
(25, 'BẾP NƯỚNG ĐIỆN GOLDSUN', 6, 10, 690000, 'images/bep_nuong_dien_goldsun.jpg', 'Dùng để nướng các loại thức ăn: tôm, ngao, sò, thịt xiên, thịt bò, khoai tây, cà rốt, thị gà, cá...'),
(26, 'NƯỚC GIẢI KHÁT INS WHEATGRASS', 7, 10, 16000, 'images/nuoc_giai_khat_Ins_Wheatgrass.jpg', 'Tăng cường hệ thống miễn dịch, phục hồi thể lực.'),
(27, 'NƯỚC NGỌT PUSHMAX - ĐẠI VIỆT', 7, 10, 90000, 'images/nuoc_ngot_Pushmax.jpg', 'Nước giải khát với các hương vị từ thiên nhiên.'),
(28, 'RƯỢU VANG ĐỎ CHANTOVENT DOLMEN SYRAH CB3', 8, 10, 150000, 'images/ruou_vang_do_CDS_CB3.jpg', 'Hương vị nồng nàn, đậm đà chỉ có ở rượu vang đỏ Chantovent Dolmen Syrah.'),
(29, 'RƯỢU VANG TRẮNG CHANTOVENT DOLMEN SAUVIGNON CB4', 8, 10, 150000, 'images/ruou_vang_trang_CDS_CB4.jpg', 'Mùi thơm của rượu rất đặc trưng.'),
(30, 'RƯỢU VANG ĐỎ CHANTOVENT DOLMEN CABERNET SAUVIGNON ', 8, 10, 150000, 'images/ruou_vang_do_CDCS_CB2.jpg', 'Rượu vang đỏ Chantovent Dolmen Cabernet Sauvignon có hương vị đậm đà của vanilla và ớt xanh.'),
(31, 'RƯỢU VANG ĐỎ CHANTOVENT CABERNET SAUVIGNO PRESTIGE', 8, 10, 200000, 'images/ruou_vang_do_CCSP_CB5.jpg', 'Rượu vang đỏ Chantovent Cabernet Sauvigno Prestige mang hương vị gỗ sồi rất đặc trưng.'),
(32, 'RƯỢU VANG SAUVIGNON JEAN D` ALIBERT JA1', 8, 10, 135000, 'images/ruou_vang_SJD_JA1.jpg', 'Rượu được làm từ giống nho Cabernet Sauvignon tươi và thơm ngon nhất.'),
(33, 'RƯỢU VANG PHÁP SEPTOMBERS', 8, 10, 1900000, 'images/ruou_vang_Phap_Septombers.jpg', 'Rượu vang đỏ chất lượng tuyệt hảo đến từ nước Pháp.'),
(34, 'BIA ĐẠI VIỆT', 9, 10, 180000, 'images/bia_dai_viet.jpg', 'Có 3 loại: Bia vàng đóng lon, Bia đen đóng lon và Bia chai super vàng nắp giựt.'),
(35, 'BÚT HOẠT HÌNH VTC', 10, 10, 2990000, 'images/but_hoat_hinh_VTC.jpg', 'Bút hoạt hình VTC là sự kết hợp hoàn hảo giữa âm thanh và hình ảnh, vừa giúp bé nuôi dưỡng thói quen đọc sách lại vừa đem đến cho bé một thế giới hình ảnh động phong phú.'),
(36, 'BÚT CHỐNG CẬN THỊ EDUBEST', 10, 10, 165000, 'images/but_chong_can_thi_EDUBEST.jpg', 'Bút chống cận EduBest được trang bị một chip điện tử thông minh và cảm biến hồng ngoại chính xác cao.'),
(37, 'XE TẬP ĐI VESPA', 11, 10, 245000, 'images/xe_tap_di_vespa.jpg', 'Đây là một chiếc xe cực kỳ thú vị với 4 bánh xe chuyển động thần kỳ.'),
(38, 'XE ONG MAIYA', 11, 10, 315000, 'images/xe_ong_Maiya.jpg', 'Xe ong Maiya ứng dụng kỹ thuật thiết mô phỏng, tạo dáng mỹ thuật quy trình sản xuất hiện đại với vật liệu nguyên sinh đảm bảo an toàn cho trẻ nhỏ.'),
(39, 'Con quay Tosy', 12, 10, 299000, 'images/con_quay_Tosy.jpg', ''),
(40, 'Đĩa bay Tosy ver 3.0', 12, 10, 79000, 'images/dia_bay_Tosy3.0.jpg', ''),
(41, 'Hình vuông diệu kỳ 88 chi tiết', 12, 10, 85000, 'images/hinh_vuong_dieu_ky88.jpg', ''),
(42, 'Hình vuông diệu kì 40 chi tiết', 12, 10, 35000, 'images/hinh_vuong_dieu_ki40.jpg', ''),
(43, 'Xúc xắc trẻ em 113C', 12, 10, 18000, 'images/xuc_xac_tre_em_113C.jpg', ''),
(44, 'Xúc xắc trẻ em 113B', 12, 10, 20000, 'images/xuc_xac_tre_em_113B.jpg', ''),
(45, 'Xúc xắc trẻ em 113A', 12, 10, 25000, 'images/xuc_xac_tre_em_113A.jpg', ''),
(46, 'Bập bênh ngựa gỗ', 12, 10, 415000, 'images/bep_benh_ngua_go.jpg', ''),
(47, 'Bộ sách Cờ vua', 13, 10, 49500, 'images/bo_sach_co_vua.jpg', ''),
(48, ' Những nhà thông thái nhỏ (dành cho các bé mẫu giáo từ 2 - 6 tuổi)', 13, 10, 300000, 'images/nhung_nha_thong_thai_nho.jpg', ''),
(49, 'Đới Tiểu Kiều và các bạn', 13, 10, 38000, 'images/doi_tieu_kieu_va_cac_ban.jpg', ''),
(50, 'Bộ sách 365 câu chuyện', 13, 10, 250000, 'images/365_cau_chuyen.jpg', ''),
(51, 'Tủ sách dạy trẻ thành tài', 13, 10, 150000, 'images/day_tre_thanh_tai.jpg', ''),
(52, 'Bộ sách "Mã Tiểu Khiêu tinh nghịch"', 13, 10, 39000, 'images/ma_tieu_khieu_tinh_nghich.jpg', ''),
(53, 'Bộ sách "Mỗi em bé là một thiên tài"', 13, 10, 57000, 'images/moi_em_be_la_mot_thien_tai.jpg', ''),
(54, 'Sách Bách khoa tri thức bằng hình', 13, 10, 555000, 'images/sach_bach_khoa_tri_thuc.jpg', ''),
(55, 'LỌ HOA MẪU B13', 14, 10, 448000, 'images/lo_hoa_mau_B13.jpg', ''),
(56, 'LỌ HOA MẪU B10', 14, 10, 156000, 'images/lo_hoa_mau_B10.jpg', ''),
(57, 'LỌ HOA MẪU B9', 14, 10, 72000, 'images/lo_hoa_mau_B9.jpg', ''),
(58, 'TƯỢNG SỨ THIÊN THẦN - 102', 15, 10, 180000, 'images/tuong_su_thien_than_102.jpg', ''),
(59, 'GIÁ TREO ĐỒ TRANG SỨC - 504', 15, 10, 180000, 'images/gia_treo_do_trang_suc_504.jpg', ''),
(60, 'GIÁ TREO ĐỒ TRANG SỨC - 800', 15, 10, 200000, 'images/gia_treo_do_trang_suc_800.jpg', '');
