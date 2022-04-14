CREATE TABLE `sky_cash_card`
(
    `id`      int(255) NOT NULL AUTO_INCREMENT,
    `gid`     int(255) NOT NULL COMMENT '商品ID',
    `oid`     int(255) NOT NULL COMMENT '订单id',
    `token`   varchar(255) NOT NULL,
    `uid`     int(255) NOT NULL COMMENT '用户ID',
    `state`   int(255) NOT NULL DEFAULT '1' COMMENT '1未使用，2已使用',
    `addtime` datetime     NOT NULL,
    `endtime` datetime     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
