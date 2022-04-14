CREATE TABLE `sky_app`
(
    `id`         int(255) NOT NULL AUTO_INCREMENT,
    `uid`        int(255) DEFAULT NULL COMMENT 'uid',
    `TaskID`     int(255) DEFAULT '-1' COMMENT '任务ID',
    `TaskMsg`    text COMMENT '任务状态',
    `name`       varchar(255)   DEFAULT NULL,
    `url`        varchar(255)   DEFAULT NULL,
    `content`    text COMMENT 'App介绍说明',
    `state`      int(2) DEFAULT '4' COMMENT '1、成功，2、正在打包，3、打包失败，4、待打包',
    `theme`      varchar(255)   DEFAULT NULL,
    `load_theme` varchar(255)   DEFAULT NULL,
    `money`      decimal(12, 2) DEFAULT '2.00' COMMENT '生成消耗金额',
    `icon`       varchar(255)   DEFAULT NULL,
    `background` varchar(255)   DEFAULT NULL,
    `download`   text,
    `endtime`    datetime       DEFAULT NULL,
    `addtime`    datetime       DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;