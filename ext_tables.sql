#
# Table structure for table 'tx_atvslider_domain_model_record'
#
CREATE TABLE tx_atvslider_domain_model_record (
	title varchar(255) DEFAULT '' NOT NULL,
	uri text,
	subtitle text,
	description text,
	simage int(11) unsigned NOT NULL default '0',
	image int(11) unsigned NOT NULL default '0',
	sorting int(10) unsigned DEFAULT '0' NOT NULL
);
