ALTER TABLE `sky_recharge`
    MODIFY COLUMN `name` varchar (255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '充值卡名称' AFTER `id`,
    MODIFY COLUMN `token` varchar (255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `type`,
    MODIFY COLUMN `ip` varchar (255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `token`,
    DEFAULT CHARACTER SET =utf8 COLLATE =utf8_general_ci,
    ROW_FORMAT= DEFAULT;
ALTER TABLE `sky_goods`
    MODIFY COLUMN `accuracy` int (255) NULL DEFAULT 2 COMMENT '小数点精度' AFTER `units`;