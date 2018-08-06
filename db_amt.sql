# Host: localhost  (Version 5.5.5-10.1.33-MariaDB)
# Date: 2018-08-05 22:12:02
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "appointment"
#

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(20) DEFAULT NULL,
  `recommendation` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "appointment"
#


#
# Structure for table "cbc"
#

DROP TABLE IF EXISTS `cbc`;
CREATE TABLE `cbc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `room` varchar(20) DEFAULT NULL,
  `req_doc` varchar(100) DEFAULT NULL,
  `specimen` varchar(20) DEFAULT NULL,
  `hemoglobin_r` varchar(50) DEFAULT NULL,
  `hemoglobin_nv` varchar(50) DEFAULT NULL,
  `hematocrit_r` varchar(50) DEFAULT NULL,
  `hematocrit_nv` varchar(50) DEFAULT NULL,
  `rbc_r` varchar(50) DEFAULT NULL,
  `rbc_nv` varchar(50) DEFAULT NULL,
  `wbc_r` varchar(50) DEFAULT NULL,
  `wbc_nv` varchar(50) DEFAULT NULL,
  `neutrophil_r` varchar(50) DEFAULT NULL,
  `neutrophil_nv` varchar(50) DEFAULT NULL,
  `lymphocyte_r` varchar(50) DEFAULT NULL,
  `lymphocyte_nv` varchar(50) DEFAULT NULL,
  `eosinophil_r` varchar(50) DEFAULT NULL,
  `eosinophil_nv` varchar(50) DEFAULT NULL,
  `monocytes_r` varchar(50) DEFAULT NULL,
  `monocytes_nv` varchar(50) DEFAULT NULL,
  `basophil_r` varchar(50) DEFAULT NULL,
  `basophil_nv` varchar(50) DEFAULT NULL,
  `mch_r` varchar(50) DEFAULT NULL,
  `mch_nv` varchar(50) DEFAULT NULL,
  `mchc_r` varchar(50) DEFAULT NULL,
  `mchc_nv` varchar(50) DEFAULT NULL,
  `mcv_r` varchar(50) DEFAULT NULL,
  `mcv_nv` varchar(50) DEFAULT NULL,
  `rdw_r` varchar(50) DEFAULT NULL,
  `rdw_nv` varchar(50) DEFAULT NULL,
  `mpv_r` varchar(50) DEFAULT NULL,
  `mpv_nv` varchar(50) DEFAULT NULL,
  `platelet_r` varchar(50) DEFAULT NULL,
  `platelet_nv` varchar(50) DEFAULT NULL,
  `time_taken` varchar(20) DEFAULT NULL,
  `comment` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "cbc"
#

INSERT INTO `cbc` VALUES (1,'P1533468767',NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'mr','admin','Denied','2018-08-05'),(2,'P1533475568',NULL,NULL,NULL,'88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88','88',NULL,'paola','admin','Approved','2018-08-05');

#
# Structure for table "csc"
#

DROP TABLE IF EXISTS `csc`;
CREATE TABLE `csc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `organism` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `amikacin_in` varchar(10) DEFAULT NULL,
  `amikacin_mi` varchar(10) DEFAULT NULL,
  `amikacin_s` varchar(10) DEFAULT NULL,
  `amikacin_i` varchar(10) DEFAULT NULL,
  `amikacin_r` varchar(10) DEFAULT NULL,
  `ampillicin_in` varchar(10) DEFAULT NULL,
  `ampillicin_mi` varchar(10) DEFAULT NULL,
  `ampillicin_s` varchar(10) DEFAULT NULL,
  `ampillicin_i` varchar(10) DEFAULT NULL,
  `ampillicin_r` varchar(10) DEFAULT NULL,
  `piperacillin_in` varchar(10) DEFAULT NULL,
  `piperacillin_mi` varchar(10) DEFAULT NULL,
  `piperacillin_s` varchar(10) DEFAULT NULL,
  `piperacillin_i` varchar(10) DEFAULT NULL,
  `piperacillin_r` varchar(10) DEFAULT NULL,
  `cefoperazone_in` varchar(10) DEFAULT NULL,
  `cefoperazone_mi` varchar(10) DEFAULT NULL,
  `cefoperazone_s` varchar(10) DEFAULT NULL,
  `cefoperazone_i` varchar(10) DEFAULT NULL,
  `cefoperazone_r` varchar(10) DEFAULT NULL,
  `imipenem_in` varchar(10) DEFAULT NULL,
  `imipenem_mi` varchar(10) DEFAULT NULL,
  `imipenem_s` varchar(10) DEFAULT NULL,
  `imipenem_i` varchar(10) DEFAULT NULL,
  `imipenem_r` varchar(10) DEFAULT NULL,
  `meropenem_in` varchar(10) DEFAULT NULL,
  `meropenem_mi` varchar(10) DEFAULT NULL,
  `meropenem_s` varchar(10) DEFAULT NULL,
  `meropenem_i` varchar(10) DEFAULT NULL,
  `meropenem_r` varchar(10) DEFAULT NULL,
  `colistin_in` varchar(10) DEFAULT NULL,
  `colistin_mi` varchar(10) DEFAULT NULL,
  `colistin_s` varchar(10) DEFAULT NULL,
  `colistin_i` varchar(10) DEFAULT NULL,
  `colistin_r` varchar(10) DEFAULT NULL,
  `tigecycline_in` varchar(10) DEFAULT NULL,
  `tigecycline_mi` varchar(10) DEFAULT NULL,
  `tigecycline_s` varchar(10) DEFAULT NULL,
  `tigecycline_i` varchar(10) DEFAULT NULL,
  `tigecycline_r` varchar(10) DEFAULT NULL,
  `trimethoprin_in` varchar(10) DEFAULT NULL,
  `trimethoprin_mi` varchar(10) DEFAULT NULL,
  `trimethoprin_s` varchar(10) DEFAULT NULL,
  `trimethoprin_i` varchar(10) DEFAULT NULL,
  `trimethoprin_r` varchar(10) DEFAULT NULL,
  `amoxyclav_in` varchar(10) DEFAULT NULL,
  `amoxyclav_mi` varchar(10) DEFAULT NULL,
  `amoxyclav_s` varchar(10) DEFAULT NULL,
  `amoxyclav_i` varchar(10) DEFAULT NULL,
  `amoxyclav_r` varchar(10) DEFAULT NULL,
  `ciprofloxacin_in` varchar(10) DEFAULT NULL,
  `ciprofloxacin_mi` varchar(10) DEFAULT NULL,
  `ciprofloxacin_s` varchar(10) DEFAULT NULL,
  `ciprofloxacin_i` varchar(10) DEFAULT NULL,
  `ciprofloxacin_r` varchar(10) DEFAULT NULL,
  `nalidixic_in` varchar(10) DEFAULT NULL,
  `nalidixic_mi` varchar(10) DEFAULT NULL,
  `nalidixic_s` varchar(10) DEFAULT NULL,
  `nalidixic_i` varchar(10) DEFAULT NULL,
  `nalidixic_r` varchar(10) DEFAULT NULL,
  `cefepime_in` varchar(10) DEFAULT NULL,
  `cefepime_mi` varchar(10) DEFAULT NULL,
  `cefepime_s` varchar(10) DEFAULT NULL,
  `cefepime_i` varchar(10) DEFAULT NULL,
  `cefepime_r` varchar(10) DEFAULT NULL,
  `gentamicin_in` varchar(10) DEFAULT NULL,
  `gentamicin_mi` varchar(10) DEFAULT NULL,
  `gentamicin_s` varchar(10) DEFAULT NULL,
  `gentamicin_i` varchar(10) DEFAULT NULL,
  `gentamicin_r` varchar(10) DEFAULT NULL,
  `ertapenem_in` varchar(10) DEFAULT NULL,
  `ertapenem_mi` varchar(10) DEFAULT NULL,
  `ertapenem_s` varchar(10) DEFAULT NULL,
  `ertapenem_i` varchar(10) DEFAULT NULL,
  `ertapenem_r` varchar(10) DEFAULT NULL,
  `nitrofurantoin_in` varchar(10) DEFAULT NULL,
  `nitrofurantoin_mi` varchar(10) DEFAULT NULL,
  `nitrofurantoin_s` varchar(10) DEFAULT NULL,
  `nitrofurantoin_i` varchar(10) DEFAULT NULL,
  `nitrofurantoin_r` varchar(10) DEFAULT NULL,
  `cefuroxime_in` varchar(10) DEFAULT NULL,
  `cefuroxime_mi` varchar(10) DEFAULT NULL,
  `cefuroxime_s` varchar(10) DEFAULT NULL,
  `cefuroxime_i` varchar(10) DEFAULT NULL,
  `cefuroxime_r` varchar(10) DEFAULT NULL,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "csc"
#


#
# Structure for table "hiv"
#

DROP TABLE IF EXISTS `hiv`;
CREATE TABLE `hiv` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `room` varchar(100) DEFAULT NULL,
  `specimen_no` varchar(20) DEFAULT NULL,
  `specimen` varchar(100) DEFAULT NULL,
  `license_no` varchar(20) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `comment` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hiv"
#

INSERT INTO `hiv` VALUES (1,'P1533468767','','','','','','','mr',NULL,'Pending','2018-08-05');

#
# Structure for table "ksa"
#

DROP TABLE IF EXISTS `ksa`;
CREATE TABLE `ksa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `calcium_ma` varchar(10) DEFAULT NULL,
  `calcium_mi` varchar(10) DEFAULT NULL,
  `calcium_to` varchar(10) DEFAULT NULL,
  `oxalate_ma` varchar(10) DEFAULT NULL,
  `oxalate_mi` varchar(10) DEFAULT NULL,
  `oxalate_to` varchar(10) DEFAULT NULL,
  `phosphate_ma` varchar(10) DEFAULT NULL,
  `phosphate_mi` varchar(10) DEFAULT NULL,
  `phosphate_to` varchar(10) DEFAULT NULL,
  `carbonate_ma` varchar(10) DEFAULT NULL,
  `carbonate_mi` varchar(10) DEFAULT NULL,
  `carbonate_to` varchar(10) DEFAULT NULL,
  `urate_ma` varchar(10) DEFAULT NULL,
  `urate_mi` varchar(10) DEFAULT NULL,
  `urate_to` varchar(10) DEFAULT NULL,
  `magnesium_ma` varchar(10) DEFAULT NULL,
  `magnesium_mi` varchar(10) DEFAULT NULL,
  `magnesium_to` varchar(10) DEFAULT NULL,
  `cystine_ma` varchar(10) DEFAULT NULL,
  `cystine_mi` varchar(10) DEFAULT NULL,
  `cystine_to` varchar(10) DEFAULT NULL,
  `ammonium_ma` varchar(10) DEFAULT NULL,
  `ammonium_mi` varchar(10) DEFAULT NULL,
  `ammonium_to` varchar(10) DEFAULT NULL,
  `com_ma` varchar(10) DEFAULT NULL,
  `com_mi` varchar(10) DEFAULT NULL,
  `com_to` varchar(10) DEFAULT NULL,
  `cod_ma` varchar(10) DEFAULT NULL,
  `cod_mi` varchar(10) DEFAULT NULL,
  `cod_to` varchar(10) DEFAULT NULL,
  `uric_ma` varchar(10) DEFAULT NULL,
  `uric_mi` varchar(10) DEFAULT NULL,
  `uric_to` varchar(10) DEFAULT NULL,
  `cmp_ma` varchar(10) DEFAULT NULL,
  `cmp_mi` varchar(10) DEFAULT NULL,
  `cmp_to` varchar(10) DEFAULT NULL,
  `pc_ma` varchar(10) DEFAULT NULL,
  `pc_mi` varchar(10) DEFAULT NULL,
  `pc_to` varchar(10) DEFAULT NULL,
  `protein_ma` varchar(10) DEFAULT NULL,
  `protein_mi` varchar(10) DEFAULT NULL,
  `protein_to` varchar(10) DEFAULT NULL,
  `comment` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ksa"
#


#
# Structure for table "patient"
#

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `full_name` varchar(150) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "patient"
#


#
# Structure for table "section"
#

DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "section"
#

INSERT INTO `section` VALUES (1,'HE','Hermatology'),(2,'CC','Clinical Chemistry'),(3,'CM','Clinical Microscopy'),(4,'BA','Bacteriology'),(5,'BL','Blood Bank and Serology'),(6,'HI','Histopathology');

#
# Structure for table "sqar"
#

DROP TABLE IF EXISTS `sqar`;
CREATE TABLE `sqar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `toc` varchar(10) DEFAULT NULL,
  `moc` varchar(30) DEFAULT NULL,
  `abstinence` varchar(20) DEFAULT NULL,
  `quantity_pv` varchar(10) DEFAULT NULL,
  `quantity_nv` varchar(10) DEFAULT NULL,
  `appearance_pv` varchar(30) DEFAULT NULL,
  `appearance_nv` varchar(30) DEFAULT NULL,
  `liquefaction_pv` varchar(30) DEFAULT NULL,
  `liquefaction_nv` varchar(30) DEFAULT NULL,
  `viscosity_pv` varchar(20) DEFAULT NULL,
  `viscosity_nv` varchar(20) DEFAULT NULL,
  `cef_pv` varchar(30) DEFAULT NULL,
  `cef_nv` varchar(30) DEFAULT NULL,
  `ph_pv` varchar(10) DEFAULT NULL,
  `ph_nv` varchar(10) DEFAULT NULL,
  `sperm_count` varchar(50) DEFAULT NULL,
  `sperm_montility` varchar(50) DEFAULT NULL,
  `rlp` varchar(50) DEFAULT NULL,
  `slp` varchar(50) DEFAULT NULL,
  `gr` varchar(50) DEFAULT NULL,
  `np` varchar(50) DEFAULT NULL,
  `nm` varchar(50) DEFAULT NULL,
  `nf` varchar(50) DEFAULT NULL,
  `af` varchar(50) DEFAULT NULL,
  `immature` varchar(50) DEFAULT NULL,
  `leucocytes` varchar(50) DEFAULT NULL,
  `rbc` varchar(50) DEFAULT NULL,
  `agglutination` varchar(50) DEFAULT NULL,
  `aggregation` varchar(50) DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL,
  `comment` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "sqar"
#


#
# Structure for table "sub_section"
#

DROP TABLE IF EXISTS `sub_section`;
CREATE TABLE `sub_section` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `section_code` varchar(255) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "sub_section"
#

INSERT INTO `sub_section` VALUES (1,'HE','CBC','Complete Blood Counts'),(2,'CC','UA','Uric Acid'),(3,'CM','SQAR','Semen Analysis'),(4,'BA','CSC','Culture and Sensitivity'),(5,'BL','HIV','HIV'),(6,'HI','KSA','Kidney Stone Analysis');

#
# Structure for table "ua"
#

DROP TABLE IF EXISTS `ua`;
CREATE TABLE `ua` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `room` varchar(10) DEFAULT NULL,
  `specimen` varchar(10) DEFAULT NULL,
  `result` varchar(10) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `reference_range` varchar(30) DEFAULT NULL,
  `lab` varchar(10) DEFAULT NULL,
  `therapeutic` varchar(30) DEFAULT NULL,
  `comment` text,
  `med_tech` varchar(150) DEFAULT NULL,
  `pathologist` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Pending',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ua"
#

INSERT INTO `ua` VALUES (1,'P1533468767',NULL,NULL,'','','','','','','mr',NULL,'Pending','2018-08-05'),(2,'P1533468767',NULL,NULL,'qaq','aa','aa','aa','askjalkd','lkdsjfdslkjdslkfjflkjds lkfd jfdif jdsfpid jfdsf ids f','paola',NULL,'Pending','2018-08-05');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(150) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT 'temppw',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin admin','PA','admin','admin');
