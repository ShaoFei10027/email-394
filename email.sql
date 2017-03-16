/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : cms_development

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-03-13 11:28:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for email
-- ----------------------------
DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL DEFAULT '0',
  `module` varchar(255) NOT NULL,
  `content` text,
  `time` datetime DEFAULT NULL,
  `expire_time` datetime DEFAULT NULL,
  `is_del` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of email
-- ----------------------------
INSERT INTO `email` VALUES ('1', '0', 'data campaign', '{\"id\":\"151\",\"account_id\":\"1000\",\"name\":\"Master Keywords Batch 2\",\"about\":\"\",\"size\":\"100\",\"pattern\":\"expand\",\"template\":\"s3://bilin-datax/spark/KeywordsUrlMatch/input/000151_expand_template\",\"template_keywords_num\":\"184\",\"excluded_categories\":\"\",\"excluded_domains\":\"\",\"excluded_keywords\":\"\",\"language\":\"english\",\"country\":\"CN,AF,AL,AD,AZ,AR,AU,AT,BH,AM,BE,BO,BA,BR,BG,BY,CA,CL,TW,CO,CR,HR,CY,CZ,DK,EC,EE,GS,FI,FR,GE,DE,GR,VA,HU,IS,ID,IQ,IE,IL,IT,KZ,JO,KW,KG,LB,LV,LI,LT,LU,MY,MT,MX,MC,MD,ME,OM,NL,NZ,NO,PK,PY,PE,PH,PL,PT,QA,RO,RU,SM,SA,RS,SG,SK,VN,SI,ZA,ES,SE,CH,TJ,TH,AE,TR,TM,UA,MK,GB,UY,UZ,VE,YE,BN,HK,IN,JP,KR,MO,US,\",\"qa\":\"0\",\"last_process\":null,\"start_date\":\"2016-12-20\",\"end_date\":\"2017-01-20\",\"status\":\"new\",\"threshold\":\"0.20\",\"need_upload\":\"0\",\"campaign_id\":null,\"linked_list\":null,\"type\":\"data\",\"priority\":\"normal\"}', '2017-03-13 11:24:04', '2017-03-14 11:24:29', '0');
INSERT INTO `email` VALUES ('2', '0', 'baner campaign', 'xxxxxxxxxxxxx', '2017-03-13 11:24:04', '2017-03-14 11:24:29', '0');
INSERT INTO `email` VALUES ('3', '1', 'baner campaign', '{\"id\":\"151\",\"account_id\":\"1000\",\"name\":\"Master Keywords Batch 2\",\"about\":\"\",\"size\":\"100\",\"pattern\":\"expand\",\"template\":\"s3://bilin-datax/spark/KeywordsUrlMatch/input/000151_expand_template\",\"template_keywords_num\":\"184\",\"excluded_categories\":\"\",\"excluded_domains\":\"\",\"excluded_keywords\":\"\",\"language\":\"english\",\"country\":\"CN,AF,AL,AD,AZ,AR,AU,AT,BH,AM,BE,BO,BA,BR,BG,BY,CA,CL,TW,CO,CR,HR,CY,CZ,DK,EC,EE,GS,FI,FR,GE,DE,GR,VA,HU,IS,ID,IQ,IE,IL,IT,KZ,JO,KW,KG,LB,LV,LI,LT,LU,MY,MT,MX,MC,MD,ME,OM,NL,NZ,NO,PK,PY,PE,PH,PL,PT,QA,RO,RU,SM,SA,RS,SG,SK,VN,SI,ZA,ES,SE,CH,TJ,TH,AE,TR,TM,UA,MK,GB,UY,UZ,VE,YE,BN,HK,IN,JP,KR,MO,US,\",\"qa\":\"0\",\"last_process\":null,\"start_date\":\"2016-12-20\",\"end_date\":\"2017-01-20\",\"status\":\"new\",\"threshold\":\"0.20\",\"need_upload\":\"0\",\"campaign_id\":null,\"linked_list\":null,\"type\":\"data\",\"priority\":\"normal\"}', '2017-03-13 11:24:04', '2017-03-13 19:24:29', '0');
