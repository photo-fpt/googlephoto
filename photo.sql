-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2019 lúc 10:19 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `photo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`album_id`, `album_title`, `album_image`, `date_create`, `date_update`, `status`) VALUES
(4, 'Sự Vật', 'MathildeM-6-1.jpg', '2019-05-15 16:18:31', '2019-05-15 16:18:31', 1),
(5, 'Yêu Dấu', 'g3.jpg', '2019-05-15 16:45:16', '2019-05-15 16:45:16', 1),
(6, 'Yêu Dấu', 'MathildeM-8-1.jpg', '2019-05-15 17:00:16', '2019-05-15 17:00:16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`image_id`, `album_id`, `image_title`, `image`, `path_image`, `description`, `date_create`, `date_update`, `location`, `status`) VALUES
(18, NULL, NULL, 'Screenshot (2).png', 'uploads/917381c4c61c9230932e7dd30edad64e.png', NULL, '2019-06-04 10:12:51', '2019-06-04 10:12:51', NULL, 1),
(19, NULL, NULL, 'Screenshot (3).png', 'uploads/32203d44568d32b486b1d4fef9e0df4a.png', NULL, '2019-06-04 10:13:52', '2019-06-04 10:13:52', NULL, 1),
(22, NULL, NULL, 'Screenshot (1).png', 'uploads/f3fe70a563ff280e6f587f0b345a64e3.png', NULL, '2019-06-04 10:22:09', '2019-06-04 10:22:09', NULL, 1),
(23, NULL, NULL, 'Screenshot (3).png', 'uploads/32203d44568d32b486b1d4fef9e0df4a.png', NULL, '2019-06-04 10:22:09', '2019-06-04 10:22:09', NULL, 1),
(24, NULL, NULL, 'ss.png', 'uploads/3691308f2a4c2f6983f2880d32e29c84.png', NULL, '2019-06-04 10:50:17', '2019-06-04 10:50:17', NULL, 1),
(25, NULL, NULL, 'ss.png', 'uploads/3691308f2a4c2f6983f2880d32e29c84.png', NULL, '2019-06-04 10:50:20', '2019-06-04 10:50:20', NULL, 1),
(26, NULL, NULL, 'Capture2.png', 'uploads/3ead30037e14a4e32117b0489ba24d7e.png', NULL, '2019-06-04 10:59:08', '2019-06-04 10:59:08', NULL, 1),
(27, NULL, NULL, 'Capture1.png', 'uploads/cf81bc44599fcd8b749efd66e619b067.png', NULL, '2019-06-04 11:03:55', '2019-06-04 11:03:55', NULL, 1),
(28, NULL, NULL, 'a20.jpg', 'uploads/550748639a1675e04db3d8a4135094a0.jpg', NULL, '2019-06-04 11:07:52', '2019-06-04 11:07:52', NULL, 1),
(29, NULL, NULL, 'a20.jpg', 'uploads/550748639a1675e04db3d8a4135094a0.jpg', NULL, '2019-06-04 11:07:57', '2019-06-04 11:07:57', NULL, 1),
(30, NULL, NULL, 'a20.jpg', 'uploads/550748639a1675e04db3d8a4135094a0.jpg', NULL, '2019-06-04 11:09:03', '2019-06-04 11:09:03', NULL, 1),
(31, NULL, NULL, 'a20.jpg', 'uploads/550748639a1675e04db3d8a4135094a0.jpg', NULL, '2019-06-04 11:10:23', '2019-06-04 11:10:23', NULL, 1),
(32, NULL, NULL, 'a17.jpg', 'uploads/62a0e3d0e8d9db40e64419904a137c32.jpg', NULL, '2019-06-04 11:11:37', '2019-06-04 11:11:37', NULL, 1),
(33, NULL, NULL, 't8.jpg', 'uploads/531a93a176df5bde70902adaeeeb8eb2.jpg', NULL, '2019-06-04 11:22:32', '2019-06-04 11:22:32', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1557905360),
('m130524_201442_init', 1557905395),
('m190124_110200_add_verification_token_column_to_user_table', 1557905395);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `share`
--

CREATE TABLE `share` (
  `share_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_share` int(11) DEFAULT NULL,
  `email_receive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `date_create` datetime(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `auth_key`, `password_hash`, `password_reset_token`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Trần Cảnh Dinh', 'canhdinh', 'dinhtrancntt@gmail.com', 'l0Bssoj8i6T-CQvxxgK50HFu26sn8jfh', '$2y$13$p1LOhRXtXmSYkqsxPjK6ruu2c.7dQz7kGW1PQ1fVQP5pMNKBYRXAe', NULL, 9, '2019-05-15 08:01:36', '0000-00-00 00:00:00', 'JvLafvBz20hDXvoMAAIufvrCWXpVVcZD_1557905441');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wistlist`
--

CREATE TABLE `wistlist` (
  `wis_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `user_wist` int(11) DEFAULT NULL,
  `date_wistlist` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `user_share` (`user_share`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Chỉ mục cho bảng `wistlist`
--
ALTER TABLE `wistlist`
  ADD PRIMARY KEY (`wis_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `user_wist` (`user_wist`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `share`
--
ALTER TABLE `share`
  MODIFY `share_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wistlist`
--
ALTER TABLE `wistlist`
  MODIFY `wis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`);

--
-- Các ràng buộc cho bảng `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `share_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `share_ibfk_3` FOREIGN KEY (`user_share`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `wistlist`
--
ALTER TABLE `wistlist`
  ADD CONSTRAINT `wistlist_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `wistlist_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `wistlist_ibfk_3` FOREIGN KEY (`user_wist`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
