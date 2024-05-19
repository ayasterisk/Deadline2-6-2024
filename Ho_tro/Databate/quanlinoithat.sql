-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2024 lúc 09:06 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlinoithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content_menu`
--

CREATE TABLE `content_menu` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `subcategory` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `content_menu`
--

INSERT INTO `content_menu` (`id`, `category`, `subcategory`, `link`) VALUES
(1, 'Mua sắm', 'Người dùng mới', ''),
(2, 'Mua sắm', 'Người dùng mới', ''),
(3, 'Mua sắm', 'Thao tác', ''),
(4, 'Mua sắm', 'Thanh toán đơn hàng', ''),
(5, 'Mua sắm', 'Khám phá', ''),
(6, 'Khuyến mãi ưu đãi', 'Chương trình khuyến mãi', ''),
(7, 'Khuyến mãi ưu đãi', 'Chương trình khuyến mãi cho người dùng', ''),
(8, 'Thanh toán', 'Thuế hóa đơn', ''),
(9, 'Thanh toán', 'Phương thức thanh toán khác', ''),
(10, 'Đơn hàng vận chuyển', 'Đơn hàng', ''),
(11, 'Đơn hàng vận chuyển', 'Đánh giá & bình luận', ''),
(12, 'Đơn hàng vận chuyển', 'Thông tin vận chuyển khác', ''),
(13, 'Đơn hàng vận chuyển', 'Phương thức vận chuyển', ''),
(14, 'Trả hàng hoặc hoàn tiền', 'Gửi yêu cầu', ''),
(15, 'Trả hàng hoặc hoàn tiền', 'Xử lý yêu cầu', ''),
(16, 'Trả hàng hoặc hoàn tiền', 'Khiếu nại', ''),
(17, 'Thông tin chung', 'Chính sách', ''),
(18, 'Thông tin chung', 'Tài khoản', ''),
(19, 'Thông tin chung', 'Mua sắm an toàn', ''),
(20, 'Thông tin chung', 'Thư viện thông tin', ''),
(21, 'Thông tin chung', 'Hướng dẫn chung', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content_warp_main`
--

CREATE TABLE `content_warp_main` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Subtitle` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `content_warp_main`
--

INSERT INTO `content_warp_main` (`id`, `Title`, `Subtitle`, `Content`) VALUES
(1, 'Người dùng mới', 'Cách tìm kiếm sản phẩm cần mua', '1. Tìm kiếm theo từ khóa\n\n\n\nBước 1: Trên FFShop, chọn Thanh tìm kiếm > nhập các từ khóa liên quan > Tìm kiếm\n\nBước 2: Trên trang Kết quả tìm kiếm, bạn có thể lựa chọn sắp xếp/lọc các kết quả tìm kiếm được hiển thị theo các tiêu chí nhanh (ví dụ: Danh mục, Nơi bán, Vận chuyển, Khoảng giá, Mới nhất, Bán chạy, Giá tăng dần/giảm dần, Freeship Xtra, Yêu thích, Điểm đánh giá…) hoặc theo các tiêu chí cụ thể hơn thông qua tính năng Bộ lọc tìm kiếm                            Lưu ý:\n\n\n\nTrong trường hợp gặp vấn đề khi sử dụng tính năng tìm kiếm bằng hình ảnh, bạn vui lòng kiểm tra để đảm bảo FFShop đã được cấp quyền truy cập Hình ảnh phù hợp trên thiết bị của bạn.'),
(2, 'Người dùng mới', 'Cách mua ngay sản phẩm', 'Nội dung chi tiết về cách mua ngay sản phẩm.'),
(3, 'Người dùng mới', 'Làm thế nào để mua lại sản phẩm đã đặt mua/hủy trước đó?', 'Nội dung chi tiết về cách mua lại sản phẩm đã đặt mua/hủy trước đó.'),
(4, 'Người dùng mới', 'Câu hỏi thường gặp', 'Nội dung chi tiết về câu hỏi thường gặp.'),
(5, 'Thao tác', 'Cách đăng ký/hủy đăng ký nhận Bản tin Shopee qua email?', 'Nội dung chi tiết về cách đăng ký/hủy đăng ký nhận Bản tin Shopee qua email.'),
(6, 'Thao tác', 'Cách để thêm / thay đổi / xóa địa chỉ nhận hàng trên FFShop?', 'Nội dung chi tiết về cách thêm / thay đổi / xóa địa chỉ nhận hàng trên FFShop.'),
(7, 'Thao tác', 'Cách thêm Tài khoản/Thẻ ngân hàng vào tài khoản FFShop', 'Nội dung chi tiết về cách thêm Tài khoản/Thẻ ngân hàng vào tài khoản FFShop.'),
(8, 'Thao tác', 'Hướng dẫn Chat/Nhắn tin trên FFShop?', 'Nội dung chi tiết về hướng dẫn Chat/Nhắn tin trên FFShop.'),
(21, 'Thanh toán đơn hàng', 'Cách để thay đổi Phân loại sản phẩm trong Giỏ hàng?', 'Nội dung chi tiết về cách thay đổi phân loại sản phẩm trong giỏ hàng.'),
(22, 'Thanh toán đơn hàng', 'Làm sao để xóa/bỏ sản phẩm ra khỏi Giỏ hàng?', 'Nội dung chi tiết về cách xóa/bỏ sản phẩm ra khỏi giỏ hàng.'),
(23, 'Thanh toán đơn hàng', 'Tôi có thể mua hàng mà không cần tài khoản ?', 'Nội dung chi tiết về việc mua hàng mà không cần tài khoản.'),
(24, 'Thanh toán đơn hàng', 'Tại sao Giá sản phẩm thay đổi sau khi được thêm vào Giỏ hàng?', 'Nội dung chi tiết về lý do giá sản phẩm thay đổi sau khi được thêm vào giỏ hàng.'),
(25, 'Khám phá', 'Sản Phẩm Được Vận Chuyển Từ Nước Ngoài Nghĩa Là Gì ?', 'Nội dung chi tiết về ý nghĩa của sản phẩm được vận chuyển từ nước ngoài.'),
(26, 'Khám phá', 'Sản phẩm bán buôn/bán sỉ trên FFShop là gì?', 'Nội dung chi tiết về khái niệm sản phẩm bán buôn/bán sỉ trên FFShop.'),
(27, 'Khám phá', 'Phí vận chuyển được tính thế nào nếu tôi mua sản phẩm từ nhiều Shop trong cùng một đơn hàng?', 'Nội dung chi tiết về cách tính phí vận chuyển khi mua sản phẩm từ nhiều Shop trong cùng một đơn hàng.'),
(28, 'Khám phá', 'Cách thay đổi món sau khi đặt hàng thành công', 'Nội dung chi tiết về cách thay đổi món sau khi đặt hàng thành công.'),
(29, 'Chương trình khuyến mãi', 'Ưu đãi Combo khuyến mãi trên FFShop là gì?', 'Nội dung chi tiết về chương trình ưu đãi Combo khuyến mãi trên FFShop.'),
(30, 'Chương trình khuyến mãi', 'Làm sao để tìm Ưu đãi Ngân hàng trên FFShop?', 'Nội dung chi tiết về cách tìm ưu đãi Ngân hàng trên FFShop.'),
(31, 'Chương trình khuyến mãi', 'Mua Kèm Deal Sốc trên FFShop là gì?', 'Nội dung chi tiết về chương trình Mua Kèm Deal Sốc trên FFShop.'),
(32, 'Chương trình khuyến mãi cho người dùng', 'Cách quy đổi ưu đãi từ Điểm Khách Hàng Thân Thiết', 'Nội dung chi tiết về cách quy đổi ưu đãi từ Điểm Khách Hàng Thân Thiết.'),
(33, 'Chương trình khuyến mãi cho người dùng', 'Chương trình Khách Hàng Thân Thiết là gì?', 'Nội dung chi tiết về khái niệm và cách thức hoạt động của Chương trình Khách Hàng Thân Thiết.'),
(34, 'Thuế hóa đơn', 'Xuất hóa đơn Điện Tử/hóa đơn VAT cho đơn hàng FFShop', 'Nội dung chi tiết về cách xuất hóa đơn Điện Tử/hóa đơn VAT cho đơn hàng FFShop.'),
(35, 'Thuế hóa đơn', 'Xuất hóa đơn Điện Tử/hóa đơn VAT cho Phí dịch vụ của Người mua', 'Nội dung chi tiết về cách xuất hóa đơn Điện Tử/hóa đơn VAT cho Phí dịch vụ của Người mua.'),
(36, 'Phương thức thanh toán khác', 'Tổng hợp các câu hỏi thường gặp', 'Nội dung chi tiết tổng hợp các câu hỏi thường gặp liên quan đến phương thức thanh toán khác.'),
(37, 'Phương thức thanh toán khác', 'Hướng Dẫn Thanh Toán Nhiều Đơn Hàng', 'Nội dung chi tiết về cách thanh toán nhiều đơn hàng cùng một lúc.'),
(38, 'Phương thức thanh toán khác', 'Làm sao tôi biết đơn hàng đã được thanh toán thành công hay chưa?', 'Nội dung chi tiết về cách kiểm tra đơn hàng đã được thanh toán thành công hay chưa.'),
(39, 'Phương thức thanh toán khác', 'Hướng Dẫn Đổi Phương Thức Thanh Toán Cho Đơn Hàng Trả Trước', 'Nội dung chi tiết về cách đổi phương thức thanh toán cho đơn hàng trả trước.'),
(40, 'Đơn hàng', 'Tại sao đơn hàng của tôi chưa cập nhật trạng thái?', 'Nội dung chi tiết về lý do tại sao đơn hàng chưa cập nhật trạng thái.'),
(41, 'Đơn hàng', 'Người bán gửi hàng tại bưu cục là gì?', 'Nội dung chi tiết về việc người bán gửi hàng tại bưu cục.'),
(42, 'Đơn hàng', 'Cần làm gì khi Shop/Người bán chưa xác nhận đơn?', 'Nội dung chi tiết về những việc cần làm khi Shop/Người bán chưa xác nhận đơn.'),
(43, 'Đơn hàng', 'Tôi cần làm gì khi đơn hàng chưa lấy hàng/không lấy thành công từ Người bán?', 'Nội dung chi tiết về những việc cần làm khi đơn hàng chưa lấy hàng/không lấy thành công từ Người bán.'),
(44, 'Đơn hàng', 'Tại sao đơn hàng của tôi được giao thành nhiều lần?', 'Nội dung chi tiết về lý do tại sao đơn hàng được giao thành nhiều lần.'),
(45, 'Đơn hàng', 'Tại sao đơn của tôi được chia thành nhiều lần giao?', 'Nội dung chi tiết về lý do tại sao đơn hàng được chia thành nhiều lần giao.'),
(46, 'Đơn hàng', 'Cách kiểm tra Mã đơn hàng của đơn hàng đã đặt?', 'Nội dung chi tiết về cách kiểm tra mã đơn hàng của đơn hàng đã đặt.'),
(47, 'Đơn hàng', 'Cách kiểm tra lịch sử mua hàng', 'Nội dung chi tiết về cách kiểm tra lịch sử mua hàng.'),
(48, 'Đơn hàng', 'Tổng hợp các câu hỏi thường gặp', 'Nội dung chi tiết tổng hợp các câu hỏi thường gặp liên quan đến đơn hàng.'),
(49, 'Đơn hàng', 'Đã quá thời gian dự kiến giao hàng nhưng tôi chưa nhận được hàng', 'Nội dung chi tiết về những việc cần làm khi đã quá thời gian dự kiến giao hàng nhưng chưa nhận được hàng.'),
(50, 'Đánh giá & bình luận', 'Tôi có thể xoá/chỉnh sửa đánh giá sản phẩm của mình trên FFShop không?', 'Nội dung chi tiết về cách xoá hoặc chỉnh sửa đánh giá sản phẩm trên FFShop.'),
(51, 'Đánh giá & bình luận', 'Tại Sao Đánh Giá Sản Phẩm Của Tôi Bị Xóa / Không Hiển Thị?', 'Nội dung chi tiết về lý do đánh giá sản phẩm bị xóa hoặc không hiển thị.'),
(52, 'Đánh giá & bình luận', 'Làm thế nào để có 1 bài viết đánh giá chất lượng?', 'Nội dung chi tiết về cách viết một bài đánh giá chất lượng.'),
(53, 'Đánh giá & bình luận', 'Các câu hỏi thường gặp', 'Nội dung chi tiết tổng hợp các câu hỏi thường gặp liên quan đến đánh giá và bình luận.'),
(54, 'Đánh giá & bình luận', 'Hướng dẫn đánh giá sản phẩm', 'Nội dung chi tiết về cách đánh giá sản phẩm.'),
(55, 'Thông tin vận chuyển khác', 'Nếu tổng tiền đơn hàng của tôi nhỏ hơn mức ưu đãi tối thiểu của mã miễn phí vận chuyển thì sao?', 'Nội dung chi tiết về trường hợp tổng tiền đơn hàng nhỏ hơn mức ưu đãi tối thiểu của mã miễn phí vận chuyển.'),
(56, 'Thông tin vận chuyển khác', 'Tôi cần chờ bao lâu để nhận được đơn hàng Quốc tế?', 'Nội dung chi tiết về thời gian chờ đợi để nhận được đơn hàng Quốc tế.'),
(57, 'Thông tin vận chuyển khác', 'Làm Thế Nào Để Biết Sản Phẩm Vận Chuyển Từ Đâu ?', 'Nội dung chi tiết về cách xác định nơi xuất phát của sản phẩm.'),
(58, 'Thông tin vận chuyển khác', 'Tại Sao Tôi Đã Sử Dụng Mã Miễn Phí Vận Chuyển / Mã Freeship Nhưng Vẫn Bị Tính Phí', 'Nội dung chi tiết về lý do vẫn bị tính phí vận chuyển dù đã sử dụng mã miễn phí vận chuyển.'),
(59, 'Thông tin vận chuyển khác', 'Các Câu Hỏi Liên Quan Đến Mã Miễn Phí Vận Chuyển (Mã Freeship)', 'Nội dung chi tiết tổng hợp các câu hỏi liên quan đến mã miễn phí vận chuyển.'),
(60, 'Gửi yêu cầu', 'Cẩm nang Trả hàng hoàn tiền', 'Nội dung chi tiết về cẩm nang trả hàng hoàn tiền.'),
(61, 'Gửi yêu cầu', 'Làm thế nào để yêu cầu Trả hàng/Hoàn tiền cho sản phẩm?', 'Nội dung chi tiết về cách yêu cầu trả hàng/hoàn tiền cho sản phẩm.'),
(62, 'Gửi yêu cầu', 'Hướng dẫn gửi yêu cầu Trả Hàng/Hoàn Tiền', 'Nội dung chi tiết về hướng dẫn gửi yêu cầu trả hàng/hoàn tiền.'),
(63, 'Gửi yêu cầu', 'Những lưu ý khi gửi yêu cầu Trả hàng/Hoàn tiền', 'Nội dung chi tiết về những lưu ý khi gửi yêu cầu trả hàng/hoàn tiền.'),
(64, 'Xử lý yêu cầu', 'Tổng hợp các câu hỏi liên quan dành cho Người mua', 'Nội dung chi tiết tổng hợp các câu hỏi liên quan dành cho Người mua.'),
(65, 'Xử lý yêu cầu', 'Tôi có được hoàn lại phí vận chuyển ban đầu khi yêu cầu Trả hàng/Hoàn tiền không?', 'Nội dung chi tiết về việc hoàn lại phí vận chuyển ban đầu khi yêu cầu Trả hàng/Hoàn tiền.'),
(66, 'Xử lý yêu cầu', 'Thời gian kiểm tra hàng hoàn trả là bao lâu?', 'Nội dung chi tiết về thời gian kiểm tra hàng hoàn trả.'),
(67, 'Xử lý yêu cầu', 'Người bán sẽ làm gì sau khi nhận được yêu cầu của tôi?', 'Nội dung chi tiết về các bước xử lý của người bán sau khi nhận được yêu cầu.'),
(68, 'Khiếu nại', 'Làm sao để trao đổi thêm với Người bán về yêu cầu Trả hàng/Hoàn tiền trên FFShop?', 'Nội dung chi tiết về cách trao đổi thêm với Người bán về yêu cầu Trả hàng/Hoàn tiền trên FFShop.'),
(69, 'Khiếu nại', 'Hướng dẫn cung cấp bằng chứng cho yêu cầu Trả hàng/Hoàn tiền', 'Nội dung chi tiết về cách cung cấp bằng chứng cho yêu cầu Trả hàng/Hoàn tiền.'),
(70, 'Khiếu nại', 'Tại sao yêu cầu Trả Hàng/Hoàn Tiền cho sản phẩm không được chấp nhận?', 'Nội dung chi tiết về các lý do yêu cầu Trả Hàng/Hoàn Tiền cho sản phẩm không được chấp nhận.'),
(71, 'Chính sách', 'Điều khoản', 'Nội dung chi tiết về các điều khoản của chính sách.'),
(72, 'Tài khoản', 'Các Câu Hỏi Thường Gặp Về Đăng Nhập Tài Khoản', 'Nội dung chi tiết về các câu hỏi thường gặp liên quan đến đăng nhập tài khoản.'),
(73, 'Tài khoản', 'Các Câu Hỏi Thường Gặp Về Tài Khoản', 'Nội dung chi tiết về các câu hỏi thường gặp liên quan đến tài khoản.'),
(74, 'Tài khoản', 'Các Thông Tin Về Đăng Ký', 'Nội dung chi tiết về các thông tin liên quan đến đăng ký tài khoản.'),
(75, 'Mua sắm an toàn', 'Tránh sập bẫy trước tin nhắn/bài đăng mạo danh tuyển dụng', 'Nội dung chi tiết về cách tránh sập bẫy trước tin nhắn/bài đăng mạo danh tuyển dụng.'),
(76, 'Mua sắm an toàn', 'Nên và không nên làm để tránh nhận phải đơn hàng ảo/giả mạo', 'Nội dung chi tiết về những điều nên và không nên làm để tránh nhận phải đơn hàng ảo/giả mạo.'),
(77, 'Mua sắm an toàn', 'Làm thế nào để bảo vệ bản thân khỏi những kẻ lừa đảo?', 'Nội dung chi tiết về cách bảo vệ bản thân khỏi những kẻ lừa đảo.'),
(78, 'Mua sắm an toàn', 'Cung cấp dịch vụ có thu phí', 'Nội dung chi tiết về các dịch vụ có thu phí được cung cấp.'),
(79, 'Thư viện thông tin', 'Không tìm thấy trang?', 'Nội dung chi tiết về cách xử lý khi không tìm thấy trang.'),
(80, 'Thư viện thông tin', 'FFShop là gì?', 'Nội dung chi tiết về FFShop.'),
(81, 'Thư viện thông tin', 'Cách Tìm Kiếm Thông Tin Trên Trung Tâm Trợ Giúp?', 'Nội dung chi tiết về cách tìm kiếm thông tin trên trung tâm trợ giúp.'),
(82, 'Thư viện thông tin', 'Tôi muốn gửi ý kiến phản hồi đến FFShop?', 'Nội dung chi tiết về cách gửi ý kiến phản hồi đến FFShop.'),
(83, 'Hướng dẫn chung.', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `content_menu`
--
ALTER TABLE `content_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content_warp_main`
--
ALTER TABLE `content_warp_main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `content_menu`
--
ALTER TABLE `content_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `content_warp_main`
--
ALTER TABLE `content_warp_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
