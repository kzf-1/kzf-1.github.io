ALTER TABLE `sky_goods`
    ADD COLUMN `sales` int(255) NULL DEFAULT 0 COMMENT '商品销量' AFTER `note`,
    ADD COLUMN `selling`  text NULL COMMENT '商品自定义售价' AFTER `sales`,
    ADD COLUMN `accuracy`  int(255) NULL DEFAULT 8 COMMENT '小数点精度' AFTER `units`;
CREATE TABLE `sky_mainframe`
(
    `id`             int(255) NOT NULL AUTO_INCREMENT,
    `oid`            int(255) NOT NULL DEFAULT '-1' COMMENT '订单ID',
    `identification` varchar(255)   DEFAULT NULL COMMENT '唯一标识符',
    `siteId`         int(255) DEFAULT '-1' COMMENT '主机ID',
    `uid`            int(255) DEFAULT '-1' COMMENT '用户ID',
    `server`         int(255) DEFAULT NULL COMMENT '服务器ID',
    `type`           int(10) DEFAULT '2' COMMENT '激活状态,1|2',
    `sql_user`       varchar(255)   DEFAULT NULL,
    `sql_name`       varchar(255)   DEFAULT NULL,
    `sql_pass`       varchar(255)   DEFAULT NULL,
    `domain`         text COMMENT '绑定域名',
    `RenewalType`    int(255) DEFAULT '1' COMMENT '自动续期1|2',
    `RenewPrice`     decimal(16, 8) DEFAULT NULL COMMENT '续费金额',
    `maxdomain`      int(255) DEFAULT '3' COMMENT '最大域名绑定数量',
    `concurrencyall` int(255) DEFAULT NULL COMMENT '并发总数',
    `concurrencyip`  int(255) DEFAULT NULL COMMENT '单IP并发',
    `traffic`        int(255) DEFAULT NULL COMMENT '上行流量上限',
    `filesize`       int(255) DEFAULT NULL COMMENT '文件上传大小限制',
    `status`         int(2) DEFAULT '1' COMMENT '用户可配置的主机开启状态',
    `state`          int(2) DEFAULT '1' COMMENT '管理员可配置的主机开启状态',
    `username`       text COMMENT '面板登录账号',
    `password`       text COMMENT '面板登录密码',
    `return`         text COMMENT '对接错误信息,方便主站调试',
    `endtime`        datetime       DEFAULT NULL COMMENT '到期时间',
    `addtime`        datetime       DEFAULT NULL COMMENT '创建时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
CREATE TABLE `sky_server`
(
    `id`             int(255) NOT NULL AUTO_INCREMENT,
    `name`           varchar(255) DEFAULT NULL COMMENT '主机名称',
    `url`            varchar(255) DEFAULT NULL COMMENT '对接链接',
    `domain`         text COMMENT '可供绑定的域名或ID',
    `data`           text COMMENT '服务器基础参数',
    `path`           varchar(255) DEFAULT '/www/wwwroot/' COMMENT '默认建站目录',
    `root_directory` varchar(255) DEFAULT '/www/' COMMENT '宝塔安装目录,仅windows需要配置',
    `token`          varchar(255) DEFAULT NULL COMMENT '对接密钥',
    `system`         int(255) DEFAULT '1' COMMENT '系统类型，1|2 linux，Windows',
    `type`           int(255) DEFAULT '0' COMMENT '存放的分类ID',
    `state`          int(10) DEFAULT '1' COMMENT '服务器状态',
    `sqlurl`         text COMMENT '数据库管理地址',
    `error`          text COMMENT '错误数据',
    `content`        text COMMENT '服务器节点介绍',
    `endtime`        datetime     DEFAULT NULL,
    `addtime`        datetime     DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
CREATE TABLE `sky_recharge`
(
    `id`      int(255) NOT NULL AUTO_INCREMENT,
    `name`    varchar(255)   DEFAULT NULL COMMENT '充值卡名称',
    `uid`     int(255) DEFAULT '-1' COMMENT '使用者',
    `money`   decimal(16, 2) DEFAULT NULL COMMENT '面额',
    `type`    int(2) DEFAULT '1' COMMENT '1余额充值，2积分充值',
    `token`   varchar(255)   DEFAULT NULL,
    `ip`      varchar(255)   DEFAULT NULL,
    `endtime` datetime       DEFAULT NULL,
    `addtime` datetime       DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;