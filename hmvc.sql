/*
 Navicat Premium Data Transfer

 Source Server         : database mysql2
 Source Server Type    : MySQL
 Source Server Version : 50505
 Source Host           : localhost
 Source Database       : hmvc

 Target Server Type    : MySQL
 Target Server Version : 50505
 File Encoding         : utf-8

 Date: 08/19/2016 06:19:41 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `jenis_brg`
-- ----------------------------
DROP TABLE IF EXISTS `jenis_brg`;
CREATE TABLE `jenis_brg` (
  `id_jenis_brg` varchar(255) NOT NULL,
  `jenis_brg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_brg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `jenis_brg`
-- ----------------------------
BEGIN;
INSERT INTO `jenis_brg` VALUES ('1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `user`
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'), ('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
