ALTER TABLE `sky_shequ`
    ADD COLUMN `annotation` varchar(255) NULL COMMENT '注释信息' AFTER `pattern`;
CREATE TABLE `sky_seckill`
(
    `id`         int(255) NOT NULL AUTO_INCREMENT,
    `gid`        int(255) DEFAULT NULL COMMENT '商品ID',
    `depreciate` int(255) DEFAULT '0' COMMENT '降价百分比',
    `start_time` datetime DEFAULT NULL COMMENT '活动开启时间',
    `end_time`   datetime DEFAULT NULL COMMENT '结束时间',
    `astrict`    int(255) DEFAULT '1' COMMENT '限购人数',
    `addtime`    datetime DEFAULT NULL COMMENT '添加时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;