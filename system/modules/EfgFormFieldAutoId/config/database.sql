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
  `autoIdField` int(10) unsigned NOT NULL default '0'
  `autoIdStartValue` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 