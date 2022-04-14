ALTER TABLE `sky_mainframe`
    ADD COLUMN `sizespace` decimal(65, 2) NULL DEFAULT 200 COMMENT '可用空间大小(MB)';
ALTER TABLE `sky_mainframe`
    ADD COLUMN `currentsize` decimal(65, 2) NULL DEFAULT 0 COMMENT '当前空间大小(MB)';
ALTER TABLE `sky_server`
    ADD COLUMN `HostSpace`  decimal(65,2) NULL DEFAULT 200 COMMENT '主机空间大小配额';
ALTER TABLE `sky_class`
    ADD COLUMN `grade`  int(255) NULL DEFAULT 1 COMMENT '等级限制';