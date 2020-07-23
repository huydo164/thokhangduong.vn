/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : thokhangduong

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 22/07/2020 20:56:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for statics
-- ----------------------------
DROP TABLE IF EXISTS `statics`;
CREATE TABLE `statics`  (
  `statics_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NULL DEFAULT NULL,
  `statics_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statics_catid` int(11) NULL DEFAULT NULL,
  `statics_cat_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statics_cat_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statics_intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `statics_content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `statics_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statics_image_other` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `statics_created` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statics_order_no` int(11) NULL DEFAULT 0,
  `statics_focus` int(2) NULL DEFAULT NULL,
  `statics_view_num` int(11) NULL DEFAULT 0,
  `statics_word` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `statics_status` int(2) NULL DEFAULT 0 COMMENT 'Item enabled status (1 = enabled, 0 = disabled)',
  `meta_title` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Meta title',
  `meta_keywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Meta keywords',
  `meta_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Meta description',
  `statics_video` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`statics_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 118 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'Stores news content.' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of statics
-- ----------------------------
INSERT INTO `statics` VALUES (86, NULL, 'Đông y chữa viêm tắc động mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia. Fusce blandit sem odio, at eleifend orci vehicula vel. Proin massa dolor, hendrerit sit amet lectus vitae, sagittis ultrices enim. Sed augue tortor, elementum sit amet urna in, sagittis convallis lacus. Fusce nec augue ut orci semper tincidunt id in ligula.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id libero in felis maximus dapibus eget sit amet ante. Maecenas vitae viverra mi. Sed ut eleifend ipsum. Nullam pulvinar blandit leo, eget aliquet arcu finibus a. Integer tristique, quam in faucibus iaculis, mi nunc facilisis ante, ut tempor enim diam ac lorem. Maecenas massa diam, consequat sit amet pretium nec, interdum nec quam. Sed eu sapien eget nisl ornare eleifend quis eget mauris. Maecenas nec tristique velit, id commodo metus. Sed non dui scelerisque, dapibus sapien eget, porta risus. Aenean urna lorem, pretium nec ultricies sed, faucibus id orci.</p>\r\n\r\n<p>Praesent dolor eros, pulvinar non sagittis sed, consequat sed est. Cras vitae leo in ex sagittis cursus eu fermentum elit. Maecenas sodales vestibulum purus, eu consequat elit lacinia id. In interdum varius vehicula. Phasellus tincidunt odio tincidunt vestibulum volutpat. Morbi sed dapibus ligula. Phasellus tempor blandit felis sed mattis. Praesent pretium fringilla mauris at bibendum. Integer aliquam ex varius sem euismod aliquet. Ut tempus malesuada felis quis posuere. Nulla et tempus magna, eu pharetra arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque aliquam tincidunt eros, vel sollicitudin ex suscipit pulvinar.</p>\r\n\r\n<p>Duis tempus, sem eu aliquam congue, mauris ligula aliquet ante, eget vulputate justo turpis id lacus. Vivamus tortor enim, blandit vitae dui in, vulputate egestas mi. Mauris finibus lacinia ligula, porta rhoncus lacus venenatis eu. Nam consequat purus ex, et mollis erat placerat ac. Sed faucibus sit amet magna eget pulvinar. Curabitur sit amet dolor nec turpis pharetra hendrerit. Ut nec eros at sem tempor convallis. Vivamus dapibus arcu urna, sed imperdiet augue pulvinar ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus eget nisi quis turpis faucibus cursus ut ut felis. Praesent porttitor ligula eros, id porttitor felis tempus non. Morbi bibendum ornare nibh eget varius. Aenean cursus condimentum euismod. Ut malesuada nulla quis justo laoreet, feugiat porta tortor rhoncus. Cras in purus laoreet, ullamcorper sapien id, aliquet erat. Suspendisse lobortis erat vel tortor euismod, sed maximus leo vehicula.</p>', '05-54-24-20-07-2020-viem-tac-dong-mach-1.png', 'a:1:{i:0;s:44:\"05-54-24-20-07-2020-viem-tac-dong-mach-1.png\";}', '1595242501', 1, 1, 38, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (91, NULL, 'Tìm hiểu về viêm tắc động mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '09-03-55-21-07-2020-viem-tac-dong-mach-6.png', 'a:1:{i:0;s:44:\"09-03-55-21-07-2020-viem-tac-dong-mach-6.png\";}', '1595297059', 2, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (92, NULL, 'Động mạch chi dưới có vấn đề', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '09-05-12-21-07-2020-viem-tac-dong-mach-7.png', 'a:1:{i:0;s:44:\"09-05-12-21-07-2020-viem-tac-dong-mach-7.png\";}', '1595297123', 3, 1, 4, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (93, NULL, 'An toàn với bài thuốc đông y', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '09-05-43-21-07-2020-viem-tac-dong-mach-8.png', 'a:1:{i:0;s:44:\"09-05-43-21-07-2020-viem-tac-dong-mach-8.png\";}', '1595297150', 4, 1, 0, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (94, NULL, 'Khỏe mạnh cho động mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '09-06-22-21-07-2020-viem-tac-dong-mach-10.png', 'a:1:{i:0;s:45:\"09-06-22-21-07-2020-viem-tac-dong-mach-10.png\";}', '1595297189', 5, 1, 0, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (95, NULL, 'An toàn với khang mẫu nhi', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '09-06-46-21-07-2020-viem-tac-dong-mach-11.png', 'a:1:{i:0;s:45:\"09-06-46-21-07-2020-viem-tac-dong-mach-11.png\";}', '1595297216', 6, 1, 0, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (98, NULL, 'Dược liệu quý cho thành mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia. Fusce blandit sem odio, at eleifend orci vehicula vel. Proin massa dolor, hendrerit sit amet lectus vitae, sagittis ultrices enim. Sed augue tortor, elementum sit amet urna in, sagittis convallis lacus. Fusce nec augue ut orci semper tincidunt id in ligula.', '', '10-47-55-21-07-2020-viem-tac-dong-mach-2.png', 'a:1:{i:0;s:44:\"10-47-55-21-07-2020-viem-tac-dong-mach-2.png\";}', '1595303299', 7, 1, 2, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (99, NULL, '5 dấu hiệu viêm tắc động mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia. Fusce blandit sem odio, at eleifend orci vehicula vel. Proin massa dolor, hendrerit sit amet lectus vitae, sagittis ultrices enim. Sed augue tortor, elementum sit amet urna in, sagittis convallis lacus. Fusce nec augue ut orci semper tincidunt id in ligula.', '', '10-48-34-21-07-2020-viem-tac-dong-mach-3.png', 'a:1:{i:0;s:44:\"10-48-34-21-07-2020-viem-tac-dong-mach-3.png\";}', '1595303325', 8, 1, 5, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (100, NULL, 'Dược liệu quý cho thành mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia. Fusce blandit sem odio, at eleifend orci vehicula vel. Proin massa dolor, hendrerit sit amet lectus vitae, sagittis ultrices enim. Sed augue tortor, elementum sit amet urna in, sagittis convallis lacus. Fusce nec augue ut orci semper tincidunt id in ligula.', '', '10-49-03-21-07-2020-viem-tac-dong-mach-4.png', 'a:1:{i:0;s:44:\"10-49-03-21-07-2020-viem-tac-dong-mach-4.png\";}', '1595303359', 9, 1, 4, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (101, NULL, '5 dấu hiệu viêm tắc động mạch', 701, 'VIÊN TẮC ĐỘNG MẠCH', 'vien-tac-dong-mach', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia. Fusce blandit sem odio, at eleifend orci vehicula vel. Proin massa dolor, hendrerit sit amet lectus vitae, sagittis ultrices enim. Sed augue tortor, elementum sit amet urna in, sagittis convallis lacus. Fusce nec augue ut orci semper tincidunt id in ligula.', '', '10-49-43-21-07-2020-viem-tac-dong-mach-5.png', 'a:1:{i:0;s:44:\"10-49-43-21-07-2020-viem-tac-dong-mach-5.png\";}', '1595303397', 10, 1, 2, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (103, NULL, 'Video Tin tức', 704, 'Video tin tức', 'video-tin-tuc', '', '', NULL, NULL, '1595304017', 11, 1, 0, NULL, 1, '', '', '', 'https://www.youtube.com/embed/UUhS_5ItfZA');
INSERT INTO `statics` VALUES (104, NULL, 'Video Tin tức 2', 704, 'Video tin tức', 'video-tin-tuc', '', '', NULL, NULL, '1595304037', 12, 1, 0, NULL, 1, '', '', '', 'https://www.youtube.com/embed/UUhS_5ItfZA');
INSERT INTO `statics` VALUES (105, NULL, 'Tìm hiểu về viêm tắc động mạch', 705, 'Bài viết mới', 'bai-viet-moi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '11-05-45-21-07-2020-viem-tac-dong-mach-6.png', 'a:1:{i:0;s:44:\"11-05-45-21-07-2020-viem-tac-dong-mach-6.png\";}', '1595304367', 13, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (106, NULL, 'Động mạch chi dưới có vấn đề', 705, 'Bài viết mới', 'bai-viet-moi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '11-06-26-21-07-2020-viem-tac-dong-mach-7.png', 'a:1:{i:0;s:44:\"11-06-26-21-07-2020-viem-tac-dong-mach-7.png\";}', '1595304404', 14, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (107, NULL, 'An toàn với bài thuốc đông y', 705, 'Bài viết mới', 'bai-viet-moi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '11-07-01-21-07-2020-viem-tac-dong-mach-8.png', 'a:1:{i:0;s:44:\"11-07-01-21-07-2020-viem-tac-dong-mach-8.png\";}', '1595304437', 15, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (108, NULL, 'Khỏe mạnh cho động mạch', 705, 'Bài viết mới', 'bai-viet-moi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '11-07-44-21-07-2020-viem-tac-dong-mach-10.png', 'a:1:{i:0;s:45:\"11-07-44-21-07-2020-viem-tac-dong-mach-10.png\";}', '1595304507', 16, 1, 2, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (109, NULL, 'An toàn với Khang Mẫu Nhi', 705, 'Bài viết mới', 'bai-viet-moi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas viverra ligula eu lacinia.', '', '11-09-26-21-07-2020-viem-tac-dong-mach-11.png', 'a:1:{i:0;s:45:\"11-09-26-21-07-2020-viem-tac-dong-mach-11.png\";}', '1595304583', 17, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (114, NULL, 'Đông y chữa viêm tắc động mạch', 699, 'BỆNH ÁN', 'benh-an', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '', '10-02-22-21-07-2020-viem-tac-dong-mach-1.png', 'a:1:{i:0;s:44:\"10-02-22-21-07-2020-viem-tac-dong-mach-1.png\";}', '1595343778', 22, 1, 2, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (115, NULL, 'Dược liệu quý cho thành mạch', 699, 'BỆNH ÁN', 'benh-an', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '', '10-03-26-21-07-2020-viem-tac-dong-mach-4.png', 'a:1:{i:0;s:44:\"10-03-26-21-07-2020-viem-tac-dong-mach-4.png\";}', '1595343814', 23, 1, 1, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (116, NULL, '5 dấu hiệu viêm tắc động mạch', 699, 'BỆNH ÁN', 'benh-an', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '', '10-03-51-21-07-2020-viem-tac-dong-mach-5.png', 'a:1:{i:0;s:44:\"10-03-51-21-07-2020-viem-tac-dong-mach-5.png\";}', '1595343838', 24, 1, 0, NULL, 1, '', '', '', '');
INSERT INTO `statics` VALUES (117, NULL, 'Dược liệu quý cho thành mạch', 699, 'BỆNH ÁN', 'benh-an', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '', '10-04-13-21-07-2020-viem-tac-dong-mach-2.png', 'a:1:{i:0;s:44:\"10-04-13-21-07-2020-viem-tac-dong-mach-2.png\";}', '1595343859', 25, 1, 2, NULL, 1, '', '', '', '');

SET FOREIGN_KEY_CHECKS = 1;
