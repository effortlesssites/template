CREATE TABLE IF NOT EXISTS `#__foxcontact_settings` (
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `#__fcf_sessions`;
DROP TABLE IF EXISTS `#__fcf_settings`;
DROP TABLE IF EXISTS `#__foxcontact_sessions`;
