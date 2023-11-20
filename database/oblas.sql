/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.11-MariaDB : Database - onlinebankloanapplicationsystem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`onlinebankloanapplicationsystem` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `onlinebankloanapplicationsystem`;

/*Table structure for table `admin_login_table` */

DROP TABLE IF EXISTS `admin_login_table`;

CREATE TABLE `admin_login_table` (
  `admin_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_login_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`admin_login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admin_login_table` */

insert  into `admin_login_table`(`admin_login_id`,`admin_login_name`,`admin_login_password`) values (1,'admin','admin');

/*Table structure for table `apply_loan_table` */

DROP TABLE IF EXISTS `apply_loan_table`;

CREATE TABLE `apply_loan_table` (
  `apply_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `basic_inquiry_id` int(11) DEFAULT NULL,
  `loans_schemes_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`apply_loan_id`),
  KEY `basic_inquiry_id` (`basic_inquiry_id`),
  KEY `loans_schemes_id` (`loans_schemes_id`),
  CONSTRAINT `apply_loan_table_ibfk_1` FOREIGN KEY (`basic_inquiry_id`) REFERENCES `basic_inquiry_table` (`basic_inquiry_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `apply_loan_table_ibfk_2` FOREIGN KEY (`loans_schemes_id`) REFERENCES `loans_schemes_table` (`loans_schemes_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `apply_loan_table` */

insert  into `apply_loan_table`(`apply_loan_id`,`basic_inquiry_id`,`loans_schemes_id`,`status`) values (16,10,26,3),(17,10,28,3),(18,10,28,3);

/*Table structure for table `basic_inquiry_table` */

DROP TABLE IF EXISTS `basic_inquiry_table`;

CREATE TABLE `basic_inquiry_table` (
  `basic_inquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `basic_inquiry_amount` int(11) DEFAULT NULL,
  `basic_inquiry_gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_customer_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_email_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_MARITAL_STATUS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_emp_industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_emp_industry_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_emp_industry_p_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_emp_monthly_income` int(11) DEFAULT NULL,
  `basic_inquiry_status` int(11) DEFAULT 1,
  PRIMARY KEY (`basic_inquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `basic_inquiry_table` */

insert  into `basic_inquiry_table`(`basic_inquiry_id`,`basic_inquiry_amount`,`basic_inquiry_gender`,`basic_inquiry_first_name`,`basic_inquiry_last_name`,`basic_inquiry_customer_password`,`basic_inquiry_email_address`,`basic_inquiry_phone_number`,`basic_inquiry_MARITAL_STATUS`,`basic_inquiry_emp_industry`,`basic_inquiry_emp_industry_name`,`basic_inquiry_emp_industry_p_number`,`basic_inquiry_emp_monthly_income`,`basic_inquiry_status`) values (9,120000,'Male','Saeed','Ali','pass','saeed@gmail.com','03465953886','unmarried','Swat Computer','Swat Computer','0946877785',50000,2),(10,2000,'Male','imran','khan','imran','imran@gmail.com','0987654321','unmarried','abc','abc','098765432',2000,2);

/*Table structure for table `extra_document_table` */

DROP TABLE IF EXISTS `extra_document_table`;

CREATE TABLE `extra_document_table` (
  `Extra_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `Extra_document_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Extra_document_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`Extra_document_id`),
  KEY `basic_inquiry_id` (`basic_inquiry_id`),
  CONSTRAINT `extra_document_table_ibfk_1` FOREIGN KEY (`basic_inquiry_id`) REFERENCES `basic_inquiry_table` (`basic_inquiry_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `extra_document_table` */

insert  into `extra_document_table`(`Extra_document_id`,`Extra_document_title`,`Extra_document_file`,`basic_inquiry_id`,`status`) values (14,'abc','please add more document',10,2);

/*Table structure for table `loans_schemes_table` */

DROP TABLE IF EXISTS `loans_schemes_table`;

CREATE TABLE `loans_schemes_table` (
  `loans_schemes_id` int(11) NOT NULL AUTO_INCREMENT,
  `loans_schemes_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loans_schemes_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interest_rate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`loans_schemes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `loans_schemes_table` */

insert  into `loans_schemes_table`(`loans_schemes_id`,`loans_schemes_title`,`loans_schemes_description`,`interest_rate`) values (22,'Personal Loan','A loan facility that provides you financial assistance whenever you need it. This will help you finance your dreams as well as be your support in difficult times.','20 %'),(23,'Car Loan','A loan facility that provides you financial assistance whenever you need it. This will help you finance your dreams as well as be your support in difficult times.','10 %'),(25,'Consumer Loans','UBL brings you an array of products specifically tailored to meet your financial needs. From education and marriage expenses for your child, to buying the car or house of your dreams, UBL is here to cater to all your needs so you can fulfil your dreams an','30 %'),(26,'Home Loan','UBL brings you an array of products specifically tailored to meet your financial needs. From education and marriage expenses for your child, to buying the car or house of your dreams, UBL is here to cater to all your needs so you can fulfil your dreams an','2 %'),(27,'Cash Plus','UBL brings you an array of products specifically tailored to meet your financial needs. From education and marriage expenses for your child, to buying the car or house of your dreams, UBL is here to cater to all your needs so you can fulfil your dreams an','25%'),(28,'Ready Cash','UBL brings you an array of products specifically tailored to meet your financial needs. From education and marriage expenses for your child, to buying the car or house of your dreams, UBL is here to cater to all your needs so you can fulfil your dreams an','11%');

/*Table structure for table `rules_and_regulation_table` */

DROP TABLE IF EXISTS `rules_and_regulation_table`;

CREATE TABLE `rules_and_regulation_table` (
  `rules_and_regulation_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules_and_regulation_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rules_and_regulation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `rules_and_regulation_table` */

/*Table structure for table `submit_extra_documents_table` */

DROP TABLE IF EXISTS `submit_extra_documents_table`;

CREATE TABLE `submit_extra_documents_table` (
  `submit_extra_documents_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submit_extra_documents_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submit_extra_documents_fil_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_inquiry_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`submit_extra_documents_id`),
  KEY `basic_inquiry_id` (`basic_inquiry_id`),
  CONSTRAINT `submit_extra_documents_table_ibfk_1` FOREIGN KEY (`basic_inquiry_id`) REFERENCES `basic_inquiry_table` (`basic_inquiry_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `submit_extra_documents_table` */

insert  into `submit_extra_documents_table`(`submit_extra_documents_id`,`image`,`location`,`submit_extra_documents_title`,`submit_extra_documents_fil_name`,`basic_inquiry_id`) values (4,'pexels-ola-dapo-3521937.jpg','swat khan','imran','BS Courses.docx',10),(5,'pexels-ola-dapo-3521937.jpg','swat khan','imran','BS Courses.docx',10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
