-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2023 at 04:18 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_movies3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int NOT NULL DEFAULT '0',
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `time_create` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_BlogUser` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `content`, `user_id`, `image`, `view_count`, `title`, `status`, `time_create`) VALUES
(1, '<p>Tắt đ&egrave;n l&agrave; một trong những t&aacute;c phẩm văn học ti&ecirc;u biểu nhất của nh&agrave; văn Ng&ocirc; Tất Tố. Đ&acirc;y l&agrave; một t&aacute;c phẩm văn học hiện thực ph&ecirc; ph&aacute;n với nội dung n&oacute;i về cuộc sống khốn khổ của tầng lớp n&ocirc;ng d&acirc;n Việt Nam đầu thế kỉ XX dưới &aacute;ch đ&ocirc; hộ của thực d&acirc;n Ph&aacute;p.</p>', 3, '1685633446.jpg', 66, '<p>CHỊ MƯỜI BA: BA NG&Agrave;Y SINH TỬ Cảm nghĩ về bộ phim tắt đ&egrave;n CHỊ MƯỜI BA: BA NG&Agrave;Y SINH TỬ Cảm ngh</p>', 0, '2023-05-12'),
(18, '<p><strong>XAutomobili&nbsp;Lamborghini&nbsp;S.p.A l&agrave; nh&agrave; sản xuất si&ecirc;u xe thể thao cao cấp của Italy, c&oacute; trụ sở ch&iacute;nh v&agrave; xưởng sản xuất đặt tại Sant&#39; Agata Bolognese, gần Bologna, Italy. Hiện tại&nbsp;Lamborghini&nbsp;l&agrave; c&ocirc;ng ty con thuộc tập đo&agrave;n &ocirc; t&ocirc; lớn nhất thế giới Volkswagen AG của Đức.&nbsp;Lamborghini&nbsp;ch&iacute;nh thức ph&acirc;n phối ch&iacute;nh h&atilde;ng tại Việ</strong></p>\r\n\r\n<p>123123123</p>', 2, '1685371293.png', 21, '<p>son dep zai12312xxx</p>', 0, '2023-05-26'),
(29, '<p><em><strong>hanh T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh</strong></em>&nbsp;l&agrave; một&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BB%83u_thuy%E1%BA%BFt\">tiểu thuyết</a>&nbsp;d&agrave;nh cho thanh thiếu ni&ecirc;n của nh&agrave; văn&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nguy%E1%BB%85n_Nh%E1%BA%ADt_%C3%81nh\">Nguyễn Nhật &Aacute;nh</a>, xuất bản lần đầu tại&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Vi%E1%BB%87t_Nam\">Việt Nam</a>&nbsp;v&agrave;o ng&agrave;y 9 th&aacute;ng 12 năm 2010 bởi&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nh%C3%A0_xu%E1%BA%A5t_b%E1%BA%A3n_Tr%E1%BA%BB\">Nh&agrave; xuất bản Trẻ</a>&nbsp;với phần tranh minh họa do Đỗ Ho&agrave;ng Tường thực hiện. Đ&acirc;y l&agrave; một trong c&aacute;c truyện d&agrave;i của Nguyễn Nhật &Aacute;nh, ra đời sau&nbsp;<em><a href=\"https://vi.wikipedia.org/w/index.php?title=%C4%90%E1%BA%A3o_m%E1%BB%99ng_m%C6%A1&amp;action=edit&amp;redlink=1\">Đảo mộng mơ</a></em>&nbsp;v&agrave; trước&nbsp;<em><a href=\"https://vi.wikipedia.org/w/index.php?title=L%C3%A1_n%E1%BA%B1m_trong_l%C3%A1&amp;action=edit&amp;redlink=1\">L&aacute; nằm trong l&aacute;</a></em>.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/T%C3%A1c_ph%E1%BA%A9m_v%C4%83n_h%E1%BB%8Dc\">T&aacute;c phẩm</a>&nbsp;như một tập&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nh%E1%BA%ADt_k%C3%BD\">nhật k&yacute;</a>&nbsp;xoay quanh cuộc sống của những đứa trẻ ở một v&ugrave;ng qu&ecirc; Việt Nam ngh&egrave;o kh&oacute;, nổi bật l&ecirc;n l&agrave; th&ocirc;ng điệp về t&igrave;nh anh em, t&igrave;nh l&agrave;ng nghĩa x&oacute;m v&agrave; những t&acirc;m tư của&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Tu%E1%BB%95i_m%E1%BB%9Bi_l%E1%BB%9Bn\">tuổi mới lớn</a>. Theo Nguyễn Nhật &Aacute;nh, đ&acirc;y l&agrave; lần đầu ti&ecirc;n &ocirc;ng đưa v&agrave;o truyện của m&igrave;nh những nh&acirc;n vật phản diện, đặt ra vấn đề đạo đức như sự v&ocirc; t&acirc;m hay&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C3%81c\">c&aacute;i &aacute;c</a></p>\r\n\r\n<p>L&agrave; một trong những quyển s&aacute;ch Việt Nam b&aacute;n chạy nhất năm 2010,&nbsp;<em>T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh</em>&nbsp;đ&atilde; được t&aacute;i bản ngay trong ng&agrave;y ph&aacute;t h&agrave;nh đầu ti&ecirc;n, với tổng số bản in l&ecirc;n đến hơn 20.000 bản. Đ&acirc;y cũng l&agrave; cuốn s&aacute;ch mở đầu cho phương thức in nhiều dạng ấn bản tr&ecirc;n một t&aacute;c phẩm ở Việt Nam, với ấn bản b&igrave;a mềm v&agrave; b&igrave;a cứng được b&aacute;n ra song song.&nbsp;<em>T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh</em>&nbsp;được chuyển thể th&agrave;nh một bộ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Phim_%C4%91i%E1%BB%87n_%E1%BA%A3nh\">phim điện ảnh</a>&nbsp;c&ugrave;ng t&ecirc;n bởi đạo diễn&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Victor_V%C5%A9\">Victor Vũ</a>, c&ocirc;ng chiếu v&agrave;o th&aacute;ng 10 năm 2015 với doanh thu ph&ograve;ng v&eacute; rất cao v&agrave; g&acirc;y được nhiều sự ch&uacute; &yacute; trong c&ocirc;ng ch&uacute;ng. Như một ảnh hưởng từ sức ảnh hưởng t&iacute;ch cực của bộ phim, tiểu thuyết đ&atilde; trở th&agrave;nh quyển s&aacute;ch b&aacute;n chạy nhất trong Hội s&aacute;ch&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%C3%A0_N%E1%BB%99i\">H&agrave; Nội</a>&nbsp;năm 2015. T&iacute;nh đến th&aacute;ng 3 năm 2020,&nbsp;<em>T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh</em>&nbsp;đ&atilde; trải qua 43 lần t&aacute;i ph&aacute;t h&agrave;nh với tổng số bản in l&ecirc;n đến hơn 300.000 bản.</p>', 3, '1685633742.jpg', 4, '<h1><em>T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh1</em></h1>', 0, '2023-05-29'),
(35, '<p>In Laravel, you can use the <code>trim()</code> function to remove leading and trailing whitespace from a string. Laravel provides a convenient way to use this function through the <code>Str</code> facade.</p>\r\n\r\n<p>To use the <code>trim()</code> function in Laravel, follow these steps:</p>\r\n\r\n<ol>\r\n	<li>Import the <code>Str</code> facade at the top of your PHP file:x</li>\r\n</ol>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>use Illuminate\\Support\\Str; </code></p>\r\n\r\n<ol>\r\n	<li>Now you can use the <code>trim()</code> function from the <code>Str</code> facade to trim a string:</li>\r\n</ol>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$trimmedString = Str::trim($string); </code></p>\r\n\r\n<p>In the example above, <code>$string</code> is the string you want to trim, and <code>$trimmedString</code> will store the trimmed version of the string.</p>\r\n\r\n<p>The <code>Str::trim()</code> function can handle both single strings and arrays of strings. If you pass an array of strings to <code>Str::trim()</code>, it will trim each string in the array.</p>\r\n\r\n<p>Here&#39;s an example with an array of strings:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$strings = [&#39; Hello &#39;, &#39; World &#39;]; $trimmedStrings = Str::trim($strings); // Result: [&#39;Hello&#39;, &#39;World&#39;] </code></p>\r\n\r\n<p>In the example above, the <code>Str::trim()</code> function trims the leading and trailing whitespace from each string in the array <code>$strings</code> and returns an array of trimmed strings in <code>$trimmedStrings</code>.</p>\r\n\r\n<p>By using the <code>Str::trim()</code> function, you can easily remove leading and trailing whitespace from strings in Laravel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2738%27%20height=%2738%27/%3e\" /><img alt=\"User\" src=\"https://chat.openai.com/_next/image?url=https%3A%2F%2Fs.gravatar.com%2Favatar%2Fe2f060d87e205399da666dcfd4b56dc1%3Fs%3D480%26r%3Dpg%26d%3Dhttps%253A%252F%252Fcdn.auth0.com%252Favatars%252Fwt.png&amp;w=96&amp;q=75\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>cach su dung ham trim()</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ChatGPT</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&agrave;m <code>trim()</code> trong PHP được sử dụng để loại bỏ khoảng trắng ở đầu v&agrave; cuối chuỗi. Dưới đ&acirc;y l&agrave; c&aacute;ch sử dụng h&agrave;m <code>trim()</code>:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$string = &quot; Hello, World! &quot;; $trimmedString = trim($string); echo $trimmedString; </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;: &quot;Hello, World!&quot; (chuỗi đ&atilde; được loại bỏ khoảng trắng ở đầu v&agrave; cuối).</p>\r\n\r\n<p>H&agrave;m <code>trim()</code> cũng c&oacute; thể được sử dụng để loại bỏ c&aacute;c k&yacute; tự kh&aacute;c ngo&agrave;i khoảng trắng từ đầu v&agrave; cuối chuỗi. Bạn c&oacute; thể chỉ định c&aacute;c k&yacute; tự cần loại bỏ bằng c&aacute;ch truyền tham số thứ hai cho h&agrave;m <code>trim()</code>:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$string = &quot;*-*Hello, World!*-*&quot;; $trimmedString = trim($string, &#39;*-&#39;); echo $trimmedString; </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;: &quot;Hello, World!&quot; (chuỗi đ&atilde; được loại bỏ c&aacute;c k&yacute; tự &#39;*&#39; v&agrave; &#39;-&#39; ở đầu v&agrave; cuối).</p>\r\n\r\n<p>Ngo&agrave;i ra, h&agrave;m <code>trim()</code> cũng c&oacute; thể được sử dụng để loại bỏ khoảng trắng từ một mảng chuỗi:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$strings = [&quot; Hello &quot;, &quot; World! &quot;]; $trimmedStrings = array_map(&#39;trim&#39;, $strings); print_r($trimmedStrings); </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>csharpCopy code</p>\r\n\r\n<p><code>Array ( [0] =&gt; Hello [1] =&gt; World! )</code></p>', 3, '1685370788.png', 0, '<p><em>cach su dung ham trim()vgvghadkwabdjawh</em></p>\r\n\r\n<p><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></p>\r\n\r\n<p>ădawdawdawdaw<img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/img/audio.png\" /></p>\r\n\r\n<p>vgvgh</p>', 0, '2023-05-29'),
(47, '<p>C&acirc;u chuyện l&agrave; những trang nhật k&yacute; về cuộc sống thường ng&agrave;y v&agrave; t&acirc;m tư của cậu b&eacute; Thiều. Thiều đang l&agrave; học sinh lớp 7 sống ở một v&ugrave;ng qu&ecirc; ngh&egrave;o, c&ugrave;ng với người em trai t&ecirc;n Tường. Tường l&agrave; một cậu b&eacute; dễ thương, hiền l&agrave;nh, bao dung, rất y&ecirc;u mến anh trai v&agrave; th&iacute;ch chơi đ&ugrave;a với nhiều lo&agrave;i động vật gồm cả s&acirc;u bọ, rắn rết. Cậu b&eacute; sống nội t&acirc;m, ham đọc s&aacute;ch v&agrave; rất say m&ecirc; những c&acirc;u&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Chuy%E1%BB%87n_c%E1%BB%95_t%C3%ADch\">chuyện cổ t&iacute;ch</a>, đặc biệt l&agrave; truyện&nbsp;<em>C&oacute;c t&iacute;a</em>, ch&iacute;nh v&igrave; vậy m&agrave; cậu nu&ocirc;i nấng một con&nbsp;<a href=\"https://vi.wikipedia.org/wiki/C%C3%B3c\">c&oacute;c</a>&nbsp;dưới gầm giường v&agrave; đặt t&ecirc;n cho n&oacute; l&agrave; &quot;Cu Cậu&quot;. Trong khi đ&oacute; Thiều vốn l&agrave; một người hướng ngoại, kh&aacute; tinh qu&aacute;i, đ&atilde; nhiều lần v&ocirc; t&igrave;nh để em m&igrave;nh chịu tai bay vạ gi&oacute; sau những tr&ograve; nghịch ph&aacute; do ch&iacute;nh m&igrave;nh b&agrave;y ra. Thiều cũng rất nhiều lần tỏ ra hẹp h&ograve;i, nhưng trong th&acirc;m t&acirc;m cậu vẫn rất thương em m&igrave;nh v&agrave; l&agrave; một người h&agrave;o hiệp. Hai anh em Thiều v&agrave; Tường thả hồn v&agrave;o những tr&ograve; chơi cảm gi&aacute;c mạnh v&agrave; nhiều kỷ niệm đ&aacute;ng nhớ thời thơ ấu của những đứa trẻ l&agrave;ng qu&ecirc;. Truyện cũng mở rộng ra mối quan hệ giữa hai anh em v&agrave; những người d&acirc;n trong ng&ocirc;i l&agrave;ng, gồm cả người th&acirc;n của m&igrave;nh v&agrave; những bạn học c&ugrave;ng lớp. Ba của Thiều được mi&ecirc;u tả l&agrave; một người giảo hoạt v&agrave; được d&acirc;n l&agrave;ng y&ecirc;u mến nhưng hay nổi n&oacute;ng v&agrave; thường xuy&ecirc;n đ&aacute;nh đ&ograve;n hai anh em v&igrave; nhiều l&yacute; do, trong khi mẹ cậu tỏ ra dịu d&agrave;ng với c&aacute;c con hơn d&ugrave; b&agrave; cũng kh&ocirc;ng tr&aacute;nh khỏi việc tr&aacute;ch mắng khi c&aacute;c con l&agrave;m điều sai quấy.</p>\r\n\r\n<p>Ch&uacute; Đ&agrave;n l&agrave; em trai của ba Thiều, bị mất một tay do tai nạn nhưng vẫn lu&ocirc;n y&ecirc;u đời v&agrave; thường kể chuyện ma cho hai anh em Thiều v&agrave; Tường nghe. Tuy bị cụt mất một tay nhưng ch&uacute; Đ&agrave;n lại chơi đ&agrave;n ắc - m&ocirc; - ni - ca rất hay. Nỗi muộn phiền duy nhất của ch&uacute; c&oacute; lẽ nằm ở chuyện t&igrave;nh nhiều trắc trở do c&aacute;nh tay cụt g&acirc;y ra. Ch&uacute; Đ&agrave;n y&ecirc;u chị Vinh, một c&ocirc; g&aacute;i c&ugrave;ng x&oacute;m v&agrave; l&agrave; con của thầy Nh&atilde;n, thầy gi&aacute;o chủ nhiệm lớp của Thiều, người thầy m&agrave; l&uacute;c n&agrave;o cũng l&agrave;m cho Thiều sợ chết khiếp. V&agrave;o l&uacute;c mở đầu c&acirc;u chuyện, Thiều cảm thấy th&iacute;ch một c&ocirc; bạn c&ugrave;ng lớp ngồi kế b&ecirc;n cậu t&ecirc;n l&agrave; Xin. Xin hay bị Thiều tr&ecirc;u chọc v&agrave; từng c&oacute; lần v&ocirc; t&igrave;nh l&agrave;m cho Thiều bẽ mặt trước lớp. Một bạn học kh&aacute;c của Thiều l&agrave; Sơn, lớn hơn cậu ba tuổi nhưng học lực rất yếu v&agrave; phải ở lại lớp li&ecirc;n tục 3 năm liền. Sơn được mi&ecirc;u tả l&agrave; một đứa du c&ocirc;n, suốt ng&agrave;y ph&aacute; l&agrave;ng ph&aacute; x&oacute;m v&agrave; c&oacute; những cử chỉ v&agrave; lời n&oacute;i khiếm nh&atilde;, th&ocirc; tục. Về sau, Thiều nhận ra m&igrave;nh đ&atilde; c&oacute; t&igrave;nh cảm với Mận, l&agrave; một c&ocirc; bạn c&ugrave;ng lớp lớn hơn cậu một tuổi. Mận xinh xắn v&agrave; ng&acirc;y thơ nhưng học kh&ocirc;ng được tốt do phải chăm s&oacute;c người cha mắc căn bệnh phong, đang bị mẹ c&ocirc; b&eacute; giam tr&ecirc;n g&aacute;c nh&agrave;. B&iacute; mật n&agrave;y chỉ c&oacute; Thiều v&agrave; Tường biết, v&agrave; hai anh em đ&atilde; phải ẩu đả với Sơn chỉ để bảo vệ Mận trước những &acirc;m mưu đen tối.</p>', 0, '1685707289.jpg', 0, '<h1><em>T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh</em></h1>', 0, '2023-06-02'),
(41, '<p>qưertyuiop</p>', 1, '1685640395.jpg', 9, '<p>son cuto</p>', 0, '2023-06-02'),
(42, '<p>cai qq</p>', 1, '1685640498.jpg', 5, '<p>cai qq&nbsp;</p>', 0, '2023-06-02'),
(39, '<p>H&agrave;m <code>trim()</code> trong PHP được sử dụng để loại bỏ khoảng trắng ở đầu v&agrave; cuối chuỗi. Dưới đ&acirc;y l&agrave; c&aacute;ch sử dụng h&agrave;m <code>trim()</code>:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$string = &quot; Hello, World! &quot;; $trimmedString = trim($string); echo $trimmedString; </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;: &quot;Hello, World!&quot; (chuỗi đ&atilde; được loại bỏ khoảng trắng ở đầu v&agrave; cuối).</p>\r\n\r\n<p>H&agrave;m <code>trim()</code> cũng c&oacute; thể được sử dụng để loại bỏ c&aacute;c k&yacute; tự kh&aacute;c ngo&agrave;i khoảng trắng từ đầu v&agrave; cuối chuỗi. Bạn c&oacute; thể chỉ định c&aacute;c k&yacute; tự cần loại bỏ bằng c&aacute;ch truyền tham số thứ hai cho h&agrave;m <code>trim()</code>:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$string = &quot;*-*Hello, World!*-*&quot;; $trimmedString = trim($string, &#39;*-&#39;); echo $trimmedString; </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;: &quot;Hello, World!&quot; (chuỗi đ&atilde; được loại bỏ c&aacute;c k&yacute; tự &#39;*&#39; v&agrave; &#39;-&#39; ở đầu v&agrave; cuối).</p>\r\n\r\n<p>Ngo&agrave;i ra, h&agrave;m <code>trim()</code> cũng c&oacute; thể được sử dụng để loại bỏ khoảng trắng từ một mảng chuỗi:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>phpCopy code</p>\r\n\r\n<p><code>$strings = [&quot; Hello &quot;, &quot; World! &quot;]; $trimmedStrings = array_map(&#39;trim&#39;, $strings); print_r($trimmedStrings); </code></p>\r\n\r\n<p>Kết quả sẽ l&agrave;:</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>csharpCopy code</p>\r\n\r\n<p><code>Array ( [0] =&gt; Hello [1] =&gt; World! ) </code></p>\r\n\r\n<p>Trong v&iacute; dụ tr&ecirc;n, <code>array_map(&#39;trim&#39;, $strings)</code> được sử dụng để &aacute;p dụng h&agrave;m <code>trim()</code> cho mỗi phần tử trong mảng <code>$strings</code>, v&agrave; kết quả trả về l&agrave; một mảng chứa c&aacute;c chuỗi đ&atilde; được loại bỏ khoảng trắng.</p>', 1, '1685371312.png', 5, '<p>adwdawdawdawdaw</p>', 0, '2023-05-29'),
(51, '<p><em><strong>Ngh&igrave;n lẻ một đ&ecirc;m</strong></em>&nbsp;(<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_%E1%BA%A2_R%E1%BA%ADp\">tiếng Ả Rập</a>:&nbsp;<em>Kitāb &#39;Alf Layla wa-Layla</em>;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Ba_T%C6%B0\">tiếng Ba Tư</a>:&nbsp;<em>Haz&acirc;r-o Yak &Scaron;ab</em>) l&agrave; bộ sưu tập c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Truy%E1%BB%87n_d%C3%A2n_gian\">truyện d&acirc;n gian</a>&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Trung_%C4%90%C3%B4ng\">Trung Đ&ocirc;ng</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nam_%C3%81\">Nam &Aacute;</a>&nbsp;được bi&ecirc;n soạn bằng tiếng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%E1%BA%A2_R%E1%BA%ADp\">Ả Rập</a>&nbsp;trong thời đại ho&agrave;ng kim&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%E1%BB%93i_gi%C3%A1o\">Hồi gi&aacute;o</a>. T&aacute;c phẩm n&agrave;y được sưu tập qua nhiều thế kỷ bởi nhiều t&aacute;c giả, dịch giả v&agrave; học giả khắp T&acirc;y &Aacute;,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Trung_%C3%81\">Trung &Aacute;</a>, Nam &Aacute; v&agrave; Bắc Phi. Bản th&acirc;n c&aacute;c c&acirc;u truyện được truy t&igrave;m nguồn gốc ngược về nền văn chương v&agrave; truyện kể d&acirc;n gian Ả Rập,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ba_T%C6%B0\">Ba Tư</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/L%C6%B0%E1%BB%A1ng_H%C3%A0\">Lưỡng H&agrave;</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%E1%BA%A4n_%C4%90%E1%BB%99\">Ấn Độ</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Do_Th%C3%A1i\">Do Th&aacute;i</a><a href=\"https://vi.wikipedia.org/wiki/Ngh%C3%ACn_l%E1%BA%BB_m%E1%BB%99t_%C4%91%C3%AAm#cite_note-Marzolph2007-1\">[1]</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ai_C%E1%BA%ADp\">Ai Cập</a>. Đặc biệt, nhiều truyện ban đầu l&agrave; truyện d&acirc;n gian từ thời đại&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Khalifah\">Khalifah</a>, trong khi đ&oacute; một số truyện kh&aacute;c, đặc biệt l&agrave; truyện nền, phần lớn c&oacute; thể đ&atilde; được lấy từ t&aacute;c phẩm văn chương Ba Tư l&agrave;&nbsp;<em>Hazār Afsān</em>&nbsp;(<em>Một ng&agrave;n truyện</em>) m&agrave; đến lượt ch&uacute;ng lại dựa một phần v&agrave;o những yếu tố Ấn Độ.<a href=\"https://vi.wikipedia.org/wiki/Ngh%C3%ACn_l%E1%BA%BB_m%E1%BB%99t_%C4%91%C3%AAm#cite_note-2\">[2]</a></p>\r\n\r\n<p>Điểm chung của c&aacute;c lần xuất bản bộ truyện l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=Truy%E1%BB%87n_n%E1%BB%81n&amp;action=edit&amp;redlink=1\">truyện nền</a>&nbsp;ban đầu kể về vị vua&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=Shahry%C4%81r&amp;action=edit&amp;redlink=1\">Shahryār</a>&nbsp;v&agrave; vợ của &ocirc;ng l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Scheherazade\">Scheherazade</a>. Truyện nền đ&atilde; gi&uacute;p kết hợp chặt chẽ xuy&ecirc;n suốt cho ch&iacute;nh c&aacute;c truyện kể kh&aacute;c. C&aacute;c truyện kể tiến triển từ truyện kể ban đầu n&agrave;y; một số truyện kể được lồng v&agrave;o b&ecirc;n trong c&aacute;c truyện kể kh&aacute;c trong khi đ&oacute; c&oacute; một số truyện kể tự m&igrave;nh bắt đầu v&agrave; kết th&uacute;c. Một số lần xuất bản chỉ c&oacute; chứa v&agrave;i trăm đ&ecirc;m trong khi đ&oacute; c&oacute; một số lần xuất bản c&oacute; chứa đến một ngh&igrave;n lẻ một đ&ecirc;m hay nhiều hơn. Phần lớn c&aacute;c truyện kể được viết theo thể&nbsp;<a href=\"https://vi.wikipedia.org/wiki/V%C4%83n_xu%C3%B4i\">văn xu&ocirc;i</a>&nbsp;tuy đ&ocirc;i khi cũng được viết theo thể thơ d&agrave;nh cho c&aacute;c b&agrave;i h&aacute;t, c&acirc;u đố v&agrave; để diễn tả cảm x&uacute;c cao độ.</p>\r\n\r\n<p>Một số truyện kể được xem l&agrave; rất c&oacute; li&ecirc;n quan đến&nbsp;<em>Ngh&igrave;n lẻ một đ&ecirc;m</em>, đặc biệt l&agrave; &quot;<a href=\"https://vi.wikipedia.org/wiki/Aladdin_v%C3%A0_c%C3%A2y_%C4%91%C3%A8n_th%E1%BA%A7n\">Aladdin v&agrave; c&acirc;y đ&egrave;n thần</a>&quot;, &quot;<a href=\"https://vi.wikipedia.org/wiki/Ali_Baba_v%C3%A0_b%E1%BB%91n_m%C6%B0%C6%A1i_t%C3%AAn_c%C6%B0%E1%BB%9Bp\">Ali Baba v&agrave; bốn mươi t&ecirc;n cướp</a>&quot;, v&agrave; &quot;<a href=\"https://vi.wikipedia.org/wiki/Sinbad\">Thủy thủ Sinbad</a>&quot; lại kh&ocirc;ng phải l&agrave; một phần của&nbsp;<em>Ngh&igrave;n lẻ một đ&ecirc;m</em>&nbsp;trong phi&ecirc;n bản nguy&ecirc;n thủy bằng tiếng Ả Rập. Ch&uacute;ng được&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=Antoine_Galland&amp;action=edit&amp;redlink=1\">Antoine Galland</a>&nbsp;v&agrave; c&aacute;c phi&ecirc;n dịch ch&acirc;u &Acirc;u đưa v&agrave;o bộ truyện.<a href=\"https://vi.wikipedia.org/wiki/Ngh%C3%ACn_l%E1%BA%BB_m%E1%BB%99t_%C4%91%C3%AAm#cite_note-3\">[3]</a></p>', 2, '1685719006.png', 0, '<h1><em>Ngh&igrave;n lẻ một đ&ecirc;m</em></h1>', 0, '2023-06-02'),
(50, '<p>234567890-</p>', 2, '1685718929.jpg', 0, '<p>1234567890</p>', 0, '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phim lẻ', '2023-05-18 10:11:18', '2023-05-18 10:07:51'),
(2, 'Phim bộ', '2023-05-18 10:11:18', '2023-05-18 10:46:24'),
(3, 'Phim chiếu rạp', '2023-05-18 10:11:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `move_id` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserTable` (`user_id`),
  KEY `FK_MovieTable` (`move_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `move_id` int NOT NULL,
  `link` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` int NOT NULL,
  `trailer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_EpisodeMovie` (`move_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `move_id`, `link`, `episode`, `trailer`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-1-t2712248.html&ap_id=1685647731', 1, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(2, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-2-t2712248.html&ap_id=1685647731', 2, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(3, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-3-t2712248.html&ap_id=1685647731', 3, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(4, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-4-t2712248.html&ap_id=1685647731', 4, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(5, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-5-t2712248.html&ap_id=1685647731', 5, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(6, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-6-t2712248.html&ap_id=1685647731', 6, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(7, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-7-t2712248.html&ap_id=1685647731', 7, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27'),
(8, 1, 'https://animeaz.me/kplayer/v2/ShoukoNishimiya/?t=emxnY2VLNmpBcHZlcktxT21VeC9yRTNFaUZzMU9DN1JMeVdyVTMvYzZ2ZUxsZ2kyV2FSNmNmSVlUU0RRV2FVOFlxRytUeVZwMC9lOGtRS0hSM1BseWc9PQ==&tap_next=https://animeaz.me/xem-anime/black-clover-tap-8-t2712248.html&ap_id=1685647731', 8, 'none', 'Vietsub', '2023-05-18 23:14:59', '2023-05-19 15:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `genreses`
--

DROP TABLE IF EXISTS `genreses`;
CREATE TABLE IF NOT EXISTS `genreses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `genreses`
--

INSERT INTO `genreses` (`id`, `title`) VALUES
(1, 'kinh dị'),
(2, 'tình cảm'),
(3, 'hài hước'),
(4, 'viễn tưởng'),
(5, 'trinh thám'),
(6, 'hành động'),
(7, 'phim ma'),
(8, 'hoạt hình');

-- --------------------------------------------------------

--
-- Table structure for table `genreses_movies`
--

DROP TABLE IF EXISTS `genreses_movies`;
CREATE TABLE IF NOT EXISTS `genreses_movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genres_id` int NOT NULL,
  `move_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_GenresTable` (`genres_id`),
  KEY `FK_MoviesTable` (`move_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `genreses_movies`
--

INSERT INTO `genreses_movies` (`id`, `genres_id`, `move_id`) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 5, 1),
(4, 6, 1),
(5, 8, 1),
(6, 1, 5),
(7, 9, 1),
(8, 1, 4),
(9, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `actor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_year` int DEFAULT NULL,
  `country` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CategoryMovie` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `actor`, `director`, `name`, `description`, `status`, `image`, `category_id`, `duration`, `publish_year`, `country`) VALUES
(1, 'Asta,Yami Sukehiro', 'Tabata Yūki', 'Black Clover', 'Black Clover là một loạt shōnen manga của Nhật Bản được sáng tác bởi Tabata Yūki. Loạt truyện ban đầu được đăng thường kỳ trên tạp chí Weekly Shōnen Jump từ số tháng 2 năm 2015, sau đó biên soạn thành tankōbon bởi nhà xuất bản Shueisha và hiện đã phát hành 34 tập tại Nhật Bản.', 0, 'du-doan-ngay-phat-hanh-black-clover-season-5-khi-nao-black-clover-episode-171-ra-mat.jpg', 2, '60/60', 2017, 'Japan'),
(2, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 2', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, '1684895493.png', 0, '1h30', 2019, 'vietnam'),
(3, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 5', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, '1684895586.png', 0, '1h30', 2023, 'campuchia'),
(4, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 3', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'lao'),
(5, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 6', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'usa'),
(6, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 7', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2019, 'usa'),
(7, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 8', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam'),
(8, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 9', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'thailan'),
(9, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 10', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'trungquoc'),
(10, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 11', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'myanmar'),
(11, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 12', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2024, 'lao'),
(12, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 13', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam'),
(13, 'Lão Hạc , cậu vàng', 'Victor Vũ', 'Lão Hạc 14', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam'),
(14, 'như hoa, văn hưng ', 'Vũ Trọng Phụng', 'Tôi thấy hoa vàng trên cỏ xanh', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam'),
(15, 'như hoa, văn hưng ', 'Vũ Trọng Phụng', 'Thằng Bờm', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam'),
(16, 'như hoa, văn hưng ', 'Vũ Trọng Phụng', 'Chẳng thể tìm được em', 'Lão Hạc là một truyện ngắn của nhà văn Nam Cao được viết vào năm 1943. Tác phẩm được đánh giá là một trong những truyện ngắn tiêu biểu của dòng văn học hiện thực, nội dung truyện đã phần nào phản ánh được hiện trạng xã hội Việt Nam trong giai đoạn trước C', 0, NULL, 0, '1h30', 2020, 'vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `movies_likes`
--

DROP TABLE IF EXISTS `movies_likes`;
CREATE TABLE IF NOT EXISTS `movies_likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_movie` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `movies_likes`
--

INSERT INTO `movies_likes` (`id`, `id_user`, `id_movie`) VALUES
(1, 1, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
CREATE TABLE IF NOT EXISTS `notify` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `content`, `time`, `status`, `user_id`) VALUES
(50, 'Phim mới là một trang web xem phim trực tuyến không có bản quyền bằng tiếng Việt. Đây là website xem phim lớn nhất tại Việt Nam, nhưng hầu hết phim trên website này đều không có bản quyền. Theo thống kê từ Alexa, trước khi bị chặn, phimmoi.net đang là website có lưu lượng truy cập lớn nhất tại Việt Nam', '2023-05-31', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'quan-tri-vien', 'Quản trị viên', '2023-05-19 01:19:14', '2023-05-19 03:58:14'),
(2, 'khach', 'Khách', '2023-05-19 03:59:24', '2023-05-19 03:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_access` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`, `image`, `count_access`) VALUES
(1, 'binhgold123999', 'natswarchuan@gmail.com', 'eyJpdiI6IklMVHhOWktlME9kZDJvT2JNZG94NHc9PSIsInZhbHVlIjoiK25keXlqSm5LLzRidEsvMm1wTXdmQT09IiwibWFjIjoiNmM5YmJlODBkMTlhNTdlMzU2NzAxNjFiZTY4MzU5OWI3NmVkNWIxNDQxNWEyMzZkNTkxOTdlYmI3YTc5OGVkZiIsInRhZyI6IiJ9', 'active', '2023-06-01 18:20:28', '2023-06-01 18:20:28', '', 0),
(2, 'chudinhhanh', 'dinhh7844@gmail.com', 'eyJpdiI6InpiVUdWaVBuSnQwZ05tNDJoR2g4Mmc9PSIsInZhbHVlIjoidGRtbG9lVjJPQ09kdjlOWWpMcG9Kdz09IiwibWFjIjoiZTY1YjU0NWM4ZjVkMGU2M2U0Yzk1NDVjMGIxYzQzMzUyNGQwNTBiMDMyNjI5OGQyZTA3MjU1OTZmZTc4MTFkYyIsInRhZyI6IiJ9', 'active', '2023-06-02 07:31:43', '2023-06-02 07:31:43', '', 0),
(6, 'hanh@1234', 'hanh@1234', 'eyJpdiI6InpYSGZDcWl5cGpVeHlCeFZyZWw1aUE9PSIsInZhbHVlIjoiUldzNnVzUjBaN2I0eGNFa3pCUkVJdz09IiwibWFjIjoiZTQwZmVmNjYyNzQwYThkMDRlMjU0MWY5ZmM3OGZiYzFiYzc1ODFlNDM0OWFjZGMyNzBhOTc0ZmY5NTM3Mzg5OCIsInRhZyI6IiJ9', 'active', '2023-06-02 07:33:11', '2023-06-02 07:33:11', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_movies`
--

DROP TABLE IF EXISTS `users_movies`;
CREATE TABLE IF NOT EXISTS `users_movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movie_id` int NOT NULL,
  `user_id` int NOT NULL,
  `watching_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users_movies`
--

INSERT INTO `users_movies` (`id`, `movie_id`, `user_id`, `watching_time`) VALUES
(1, 1, 1, '2023-05-21'),
(2, 1, 1, '2023-05-21'),
(3, 2, 1, '2023-05-21'),
(4, 1, 1, '2023-05-21'),
(5, 2, 1, '2023-05-21'),
(6, 1, 1, '2023-05-22'),
(7, 3, 1, '2023-05-21'),
(8, 4, 1, '2023-05-21'),
(9, 1, 1, '2023-05-21'),
(10, 3, 1, '2023-05-21'),
(11, 2, 1, '2023-05-21'),
(12, 1, 1, '2023-05-21'),
(13, 3, 1, '2023-05-21'),
(14, 3, 1, '2023-05-21'),
(15, 3, 1, '2023-05-21'),
(16, 5, 1, '2023-05-21'),
(17, 3, 1, '2023-04-12'),
(18, 8, 1, '2023-05-21'),
(19, 9, 1, '2023-05-20'),
(20, 7, 1, '2023-05-21'),
(21, 6, 1, '2023-05-21'),
(22, 1, 1, '2023-01-22'),
(23, 1, 1, '2023-01-23'),
(24, 1, 1, '2023-01-15'),
(25, 1, 1, '2023-01-14'),
(26, 1, 1, '2023-05-22'),
(27, 1, 1, '2023-01-2'),
(28, 1, 1, '2023-01-2'),
(29, 1, 1, '2023-01-2'),
(30, 1, 1, '2023-01-2'),
(31, 1, 1, '2023-01-2'),
(32, 1, 1, '2023-05-14'),
(33, 1, 1, '2023-01-2'),
(34, 1, 1, '2023-01-2'),
(35, 1, 1, '2023-01-2'),
(36, 1, 1, '2023-01-2'),
(37, 1, 1, '2023-01-2'),
(38, 1, 1, '2023-01-2'),
(39, 3, 1, '2023-05-21'),
(40, 10, 1, '2023-05-15'),
(41, 11, 1, '2023-05-14'),
(42, 12, 1, '2023-05-21'),
(43, 13, 1, '2023-05-22'),
(44, 1, 1, '2023-05-12'),
(45, 1, 1, '2023-01-13'),
(46, 1, 1, '2023-01-14'),
(47, 1, 1, '2023-01-16'),
(48, 1, 1, '2023-01-17'),
(49, 1, 1, '2023-05-18'),
(50, 1, 1, '2023-05-19'),
(51, 1, 1, '2023-05-20'),
(52, 1, 1, '2023-05-16'),
(53, 1, 1, '2023-05-23'),
(54, 1, 1, '2023-05-14'),
(55, 1, 1, '2023-05-15'),
(56, 1, 1, '2023-05-21'),
(57, 1, 1, '2023-05-21'),
(58, 1, 1, '2023-05-2'),
(59, 1, 1, '2023-05-14'),
(60, 1, 1, '2023-05-22'),
(61, 1, 1, '2023-05-18'),
(62, 14, 1, '2023-05-1'),
(63, 15, 2, '2023-04-25'),
(64, 15, 1, '2023-05-31'),
(65, 16, 1, '2023-06-1'),
(66, 9, 1, '2023-05-22'),
(67, 1, 1, '2023-05-26'),
(68, 1, 1, '2023-05-26'),
(69, 2, 1, '2023-05-26'),
(70, 1, 1, '2023-12-14'),
(71, 1, 1, '2023-10-14'),
(72, 2, 1, '2023-02-21'),
(73, 1, 1, '2023-08-21'),
(74, 1, 1, '2023-08-21'),
(75, 1, 1, '2023-08-21'),
(76, 1, 1, '2023-08-21'),
(77, 1, 1, '2023-08-21'),
(78, 1, 1, '2023-08-21'),
(79, 1, 1, '2023-08-21'),
(80, 1, 1, '2023-08-21'),
(81, 1, 1, '2023-08-21'),
(82, 1, 1, '2023-11-21'),
(83, 1, 1, '2023-11-21'),
(84, 1, 1, '2023-01-21'),
(85, 1, 1, '2023-01-21'),
(86, 1, 1, '2023-09-21'),
(87, 1, 1, '2023-09-21'),
(88, 1, 1, '2023-09-21'),
(89, 1, 1, '2023-09-21'),
(90, 1, 1, '2023-09-21'),
(91, 1, 1, '2023-09-21'),
(92, 1, 2, '2023-09-21'),
(93, 2, 1, '2023-09-21'),
(94, 19, 1, '2023-07-21'),
(95, 19, 1, '2023-07-21'),
(96, 18, 1, '2023-07-21'),
(97, 4, 1, '2023-07-21'),
(98, 7, 1, '2023-12-21'),
(99, 1, 1, '2023-03-21'),
(100, 1, 1, '2023-03-21'),
(101, 1, 3, '2023-05-21'),
(102, 1, 3, '2023-05-21'),
(103, 1, 3, '2023-05-21'),
(104, 1, 3, '2023-04-21'),
(105, 1, 3, '2023-12-21'),
(106, 1, 1, '2023-06-02'),
(107, 1, 1, '2023-06-2'),
(108, 1, 1, '2023-01-21'),
(109, 1, 3, '2023-01-21'),
(110, 1, 2, '2023-01-21'),
(111, 1, 2, '2023-06-21'),
(112, 6, 2, '2023-06-21'),
(113, 1, 2, '2023-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserTable` (`user_id`),
  KEY `FK_RoleTable` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `user_id`, `role_id`) VALUES
(18, 1, 1),
(19, 3, 2),
(20, 4, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
