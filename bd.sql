CREATE TABLE IF NOT EXISTS `tblmenu` (
`menu_id` int(11) NOT NULL AUTO_INCREMENT,
`menu_name` varchar(100) NOT NULL,
`price` float NOT NULL,
`menu_type_id` int(11) NOT NULL,
`menu_image` blob NOT NULL,
`ingredients` varchar(500) NOT NULL,
`menu_status` int(1) NOT NULL,
PRIMARY KEY (`menu_id`),
KEY `menu_type_id` (`menu_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;





customer:

CREATE TABLE IF NOT EXISTS `tblcustomer` (
`customer_id` int(11) NOT NULL AUTO_INCREMENT,
`customer_first_name` varchar(30) NOT NULL,
`customer_last_name` varchar(30) NOT NULL,
`customer_middle_name` varchar(30) NOT NULL,
`customer_email` varchar(50) NOT NULL,
`customer_phone_number` varchar(15) NOT NULL,
`customer_landline` varchar(15) NOT NULL,
`profile_image` blob NOT NULL,
`customer_username` varchar(30) NOT NULL,
`customer_password` varchar(30) NOT NULL,
`account_status` int(1) NOT NULL,
PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
