CREATE TABLE users (
  userid int(25) NOT NULL auto_increment,
  first_name varchar(25) NOT NULL default '',
  last_name varchar(25) NOT NULL default '',
  email_address varchar(25) NOT NULL default '',
  username varchar(25) NOT NULL default '',
  password varchar(255) NOT NULL default '',
  info text NOT NULL,
  user_level enum('0','1','2','3') NOT NULL default '0',
  signup_date datetime NOT NULL default '0000-00-00 00:00:00',
  last_login datetime NOT NULL default '0000-00-00 00:00:00',
  activated enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (userid)
) TYPE=MyISAM COMMENT='Membership Information';
-- email_address 25 char? you serious bro?
-- a lot of time you want unique instead of not null.
-- activated should be a boolean value instead of enum 1,0
-- user_level should not enum 1,2,3 make it meaningful
-- why info should be not NULL
