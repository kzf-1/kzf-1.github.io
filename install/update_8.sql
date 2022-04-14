ALTER TABLE `sky_shequ`
    ADD COLUMN `class_name`  varchar(255) NULL DEFAULT -1 COMMENT '类名称' AFTER `type`;
ALTER TABLE `sky_pay`
    ADD COLUMN `oid`  int(22) NOT NULL DEFAULT -1 COMMENT '对应的订单ID' AFTER `gid`;
