/*
Navicat MySQL Data Transfer

Source Server         : DIRECTPROFILE
Source Server Version : 50553
Source Host           : directprofile.de:3306
Source Database       : directprofile_hosting

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-01-06 13:46:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `Accounts`
-- ----------------------------
DROP TABLE IF EXISTS `Accounts`;
CREATE TABLE `Accounts` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Password` text NOT NULL,
  `Credits` decimal(10,2) NOT NULL,
  `Admin` int(11) DEFAULT NULL,
  `CreditsCount` decimal(10,2) NOT NULL,
  `Suspended` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Accounts
-- ----------------------------
