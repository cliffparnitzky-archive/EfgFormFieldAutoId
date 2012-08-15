-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_form`
--
CREATE TABLE `tl_form` (
  `autoIdActive` char(1) NOT NULL default '',
  `autoIdField` varchar(64) NOT NULL default '',
  `autoIdStartValue` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table `tl_form_field`
--
CREATE TABLE `tl_form_field` (
  `autoIdDigitGrouping` char(1) NOT NULL default '',
  `autoIdThousandsSeparator` varchar(5) NOT NULL default '',
  `autoIdShowWhileCreation` char(1) NOT NULL default '',
  `autoIdAutoCreationMessage` text NULL,
  `autoIdPrefix` varchar(30) NOT NULL default '',
  `autoIdPrefixAddBlank` char(1) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;