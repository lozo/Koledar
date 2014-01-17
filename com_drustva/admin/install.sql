 
CREATE TABLE IF NOT EXISTS #__drustva (
  id int(11) NOT NULL AUTO_INCREMENT,
  naziv varchar(255) NOT NULL,
  naslov varchar(255) NOT NULL,
  posta varchar(255) NOT NULL,
  opisDrustva TEXT NOT NULL,
  predsednik varchar(255) NOT NULL,
  podpredsednik varchar(255) NOT NULL,
  tajnik varchar(255) NOT NULL,
  blagajnik varchar(255) NOT NULL,
  url varchar(255) NOT NULL,
  url2 varchar(255) NOT NULL,
  telefon varchar(40) NOT NULL,
  fax varchar(40) NOT NULL,
  catid int(11) NOT NULL DEFAULT '0',
  params TEXT NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;
 