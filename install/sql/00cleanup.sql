DROP VIEW IF EXISTS `%sqlprefix%viewages`;
DROP TRIGGER IF EXISTS `%sqlprefix%meta_after_update`;
DROP TABLE IF EXISTS `%sqlprefix%meta`;
DROP TABLE IF EXISTS `%sqlprefix%changelog`;
DROP TRIGGER IF EXISTS `%sqlprefix%feepayments_after_insert`;
DROP TRIGGER IF EXISTS `%sqlprefix%feepayments_after_delete`;
DROP TABLE IF EXISTS `%sqlprefix%feepayments`;
DROP TRIGGER IF EXISTS `%sqlprefix%feeperiods_after_update`;
DROP TRIGGER IF EXISTS `%sqlprefix%feeperiods_after_insert`;
DROP TRIGGER IF EXISTS `%sqlprefix%feeperiods_after_delete`;
DROP TABLE IF EXISTS `%sqlprefix%feeperiods`;
DROP TRIGGER IF EXISTS `%sqlprefix%members_after_update`;
DROP TRIGGER IF EXISTS `%sqlprefix%members_after_insert`;
DROP TRIGGER IF EXISTS `%sqlprefix%members_after_delete`;
DROP TABLE IF EXISTS `%sqlprefix%members`;