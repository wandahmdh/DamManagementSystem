/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80016
 Source Host           : 127.0.0.1:3306
 Source Schema         : projek_bendungan

 Target Server Type    : MySQL
 Target Server Version : 80016
 File Encoding         : 65001

 Date: 19/03/2020 20:00:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (0, 'muhammad aldhy fathahillah', 'admin', '123456789');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
