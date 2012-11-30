-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `redirectDomain` varchar(255) NOT NULL default '',
  `browser` varchar(64) NOT NULL default '',
  `osredirect` varchar(64) NOT NULL default '',
  `browserVersionMatch` varchar(3) NOT NULL default '',
  `browserVersion` varchar(10) NOT NULL default '',
  `browserRgxp` varchar(255) NOT NULL default '',
  `browserCookie` char(1) NOT NULL default '0',
  `browserCookieName` varchar(255) NOT NULL default '',
  `browserCookieValue` varchar(255) NOT NULL default '',
  `redirectinex` varchar(8) NOT NULL default '',
  `externalredirecturl` varchar(255) NOT NULL default '',
  `membersOnly` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
