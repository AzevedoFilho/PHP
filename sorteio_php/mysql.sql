# MySQL-Front Dump 2.5
#
# Host: localhost   Database: int
# --------------------------------------------------------
# Server version 3.23.49-max-nt


#
# Table structure for table 'admin'
#

CREATE TABLE `admin` (
  `data` varchar(250) NOT NULL default '',
  `hora` varchar(250) NOT NULL default '',
  `nome` varchar(250) NOT NULL default '',
  `login` varchar(250) NOT NULL default '',
  `senha` varchar(8) NOT NULL default '',
  `nivel` char(1) NOT NULL default '',
  `ip` varchar(50) NOT NULL default '',
  `email_admin` varchar(250) NOT NULL default '',
  `site` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`login`,`nome`)
) TYPE=MyISAM;


#
# Table structure for table 'concorrentes'
#

CREATE TABLE `concorrentes` (
  `id` int(5) NOT NULL default '0',
  `nick` varchar(120) NOT NULL default '',
  `email` varchar(120) NOT NULL default '',
  `cidade` varchar(120) NOT NULL default '',
  `estado` varchar(120) NOT NULL default '',
  `nome2` varchar(250) NOT NULL default '',
  `data2` varchar(80) NOT NULL default '',
  `hora2` varchar(80) NOT NULL default '',
  `ip2` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`,`nome2`)
) TYPE=MyISAM;


#
# Table structure for table 'ganhadores'
#

CREATE TABLE `ganhadores` (
  `id_ganhador` int(5) NOT NULL default '0',
  `data_ganhou` varchar(80) NOT NULL default '',
  `hora_ganhou` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`id_ganhador`,`data_ganhou`)
) TYPE=MyISAM;

