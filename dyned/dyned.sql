/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dyned

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-06 04:19:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO `biodata` VALUES ('1', '1', 'alamat', '0812345678');
INSERT INTO `biodata` VALUES ('2', '2', 'alamat2', '0812394727');
INSERT INTO `biodata` VALUES ('3', '3', 'alamat3', '08192753829');

-- ----------------------------
-- Table structure for pelajaran
-- ----------------------------
DROP TABLE IF EXISTS `pelajaran`;
CREATE TABLE `pelajaran` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelajaran
-- ----------------------------
INSERT INTO `pelajaran` VALUES ('1', '1', 'matematika');
INSERT INTO `pelajaran` VALUES ('2', '2', 'bhs inggris');
INSERT INTO `pelajaran` VALUES ('3', '3', 'bhs indonesia');
INSERT INTO `pelajaran` VALUES ('4', '2', 'sejarah');
INSERT INTO `pelajaran` VALUES ('5', '2', 'biologi');
INSERT INTO `pelajaran` VALUES ('6', '3', 'sosiologi');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ade@gmail.com', 'adeardian', '1234');
INSERT INTO `user` VALUES ('2', 'ardian@gmail.com', 'adeardian2', '1234');
INSERT INTO `user` VALUES ('3', 'adeardian@gmail.com', 'adeardian3', '1234');
