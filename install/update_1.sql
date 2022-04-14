ALTER TABLE `sky_goods`
DROP
COLUMN `picture`;
ALTER TABLE `sky_goods`
DROP
COLUMN `custom`;
ALTER TABLE `sky_goods`
DROP
COLUMN `curl`;
ALTER TABLE `sky_goods`
DROP
COLUMN `post_data`;
ALTER TABLE `sky_goods`
DROP
COLUMN `goods_id`;
ALTER TABLE `sky_goods`
DROP
COLUMN `goods_type`;
ALTER TABLE `sky_goods`
DROP
COLUMN `goods_url`;
ALTER TABLE `sky_goods`
DROP
COLUMN `submit_the_field`;
ALTER TABLE `sky_goods`
DROP
COLUMN `goods_mainKey`;
ALTER TABLE `sky_goods`
DROP
COLUMN `step`;
ALTER TABLE `sky_goods`
    MODIFY COLUMN `min` int (255) NULL DEFAULT 1 COMMENT '最低购买份数';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `max` int (255) NULL DEFAULT 1 COMMENT '最大购买份数';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `docs` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品说明';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品便签，仅站长可见';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `specification_type` int (1) NULL DEFAULT 1 COMMENT '是否将商品规格参数提交至对接货源，1提交，2不提交';
ALTER TABLE `sky_goods`
    CHANGE COLUMN `specification_set` `specification_spu` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品规格组合数组';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `specification_sku` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品规格组合参数';
ALTER TABLE `sky_goods`
    CHANGE COLUMN `value` `input` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '提交字段名称 | 分割';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `label` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品标签,逗号分割';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL;
ALTER TABLE `sky_goods`
    MODIFY COLUMN `quota` int (255) NULL DEFAULT 9999 COMMENT '商品总库存';
ALTER TABLE `sky_goods`
    MODIFY COLUMN `quantity` int (255) NULL DEFAULT 1 COMMENT '每份数量';
ALTER TABLE `sky_goods`
    ADD COLUMN `units` varchar(255) NULL DEFAULT '个' COMMENT '数量单位';
ALTER TABLE `sky_goods`
    ADD COLUMN `deliver` int(255) NULL DEFAULT 1 COMMENT '1自营,2URL,3卡密,4显示隐藏,其他均是第三方货源';
ALTER TABLE `sky_goods`
    ADD COLUMN `extend` mediumtext NULL COMMENT '对接扩展参数，根据商品发货类型配置';


ALTER TABLE `sky_order`
    ADD COLUMN `muid` int(255) NULL DEFAULT -1 COMMENT '卖家ID',
    ADD COLUMN `docking`  int(255) NULL DEFAULT -1 COMMENT '1,对接成功,2,对接失败,3待提交对接,-1,其他状态',
    ADD COLUMN `logistics`  text NULL COMMENT '物流单号';

DROP TABLE IF EXISTS `sky_buylog`;

ALTER TABLE `sky_notice`
    MODIFY COLUMN `content` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
    ADD COLUMN `PV` int (255) NULL DEFAULT 0 COMMENT '阅读数',
    ADD COLUMN `state` int (2) NULL DEFAULT 1 COMMENT '1显示，2关闭',
    ADD COLUMN `type` int (2) NULL DEFAULT 1 COMMENT '1,全部可见,2登陆用户可见';