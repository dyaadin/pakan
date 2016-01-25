CREATE TABLE `bahan_pakan` (
  `pakan_id` int(11) NOT NULL auto_increment,
  `pakan_nama` varchar(50) NOT NULL,
  `pakan_daerah` varchar(50) NOT NULL,
  `pakan_kandungan` varchar(50) NOT NULL,
  `pakan_analisis` varchar(50) NOT NULL,
  PRIMARY KEY  (`pakan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;