/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : 127.0.0.1:3306
 Source Schema         : school_board

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 16/02/2022 01:25:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for student_grades
-- ----------------------------
DROP TABLE IF EXISTS `student_grades`;
CREATE TABLE `student_grades`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` int UNSIGNED NULL DEFAULT NULL,
  `grade` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_student`(`student_id`) USING BTREE,
  CONSTRAINT `fk_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of student_grades
-- ----------------------------
INSERT INTO `student_grades` VALUES (1, 1, 2);
INSERT INTO `student_grades` VALUES (2, 1, 4);
INSERT INTO `student_grades` VALUES (3, 1, 3);
INSERT INTO `student_grades` VALUES (4, 1, 5);
INSERT INTO `student_grades` VALUES (5, 1, 6);
INSERT INTO `student_grades` VALUES (6, 1, 3);
INSERT INTO `student_grades` VALUES (7, 1, 5);
INSERT INTO `student_grades` VALUES (8, 1, 5);
INSERT INTO `student_grades` VALUES (9, 1, 9);
INSERT INTO `student_grades` VALUES (10, 1, 5);
INSERT INTO `student_grades` VALUES (11, 1, 2);
INSERT INTO `student_grades` VALUES (12, 2, 7);
INSERT INTO `student_grades` VALUES (13, 2, 7);
INSERT INTO `student_grades` VALUES (14, 2, 5);
INSERT INTO `student_grades` VALUES (15, 2, 2);
INSERT INTO `student_grades` VALUES (16, 2, 5);
INSERT INTO `student_grades` VALUES (17, 2, 9);
INSERT INTO `student_grades` VALUES (18, 2, 9);
INSERT INTO `student_grades` VALUES (19, 2, 2);
INSERT INTO `student_grades` VALUES (20, 2, 8);
INSERT INTO `student_grades` VALUES (21, 2, 4);
INSERT INTO `student_grades` VALUES (22, 2, 3);
INSERT INTO `student_grades` VALUES (23, 2, 5);
INSERT INTO `student_grades` VALUES (24, 6, 9);
INSERT INTO `student_grades` VALUES (25, 6, 8);

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `school` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (1, 'Ava Welch', 'CSM');
INSERT INTO `students` VALUES (2, 'Evan Manni', 'CSMB');
INSERT INTO `students` VALUES (3, 'Elizabeth Newma', 'CSM');
INSERT INTO `students` VALUES (4, 'Christopher Walke', 'CSM');
INSERT INTO `students` VALUES (5, 'Stephen Ince', 'CSM');
INSERT INTO `students` VALUES (6, 'Gavin Parr', 'CSMB');
INSERT INTO `students` VALUES (7, 'Caroline Allan', 'CSMB');
INSERT INTO `students` VALUES (8, 'Stewart Mitch', 'CSMB');
INSERT INTO `students` VALUES (9, 'Faith Parr', 'CSMB');
INSERT INTO `students` VALUES (10, 'Ruth Short', 'CSMB');

SET FOREIGN_KEY_CHECKS = 1;
