TYPE=VIEW
query=select count(0) AS `bugresolve`,left(`zentaobiz`.`zt_action`.`date`,10) AS `day` from `zentaobiz`.`zt_action` where ((`zentaobiz`.`zt_action`.`objectType` = \'bug\') and (`zentaobiz`.`zt_action`.`action` = \'resolved\')) group by left(`zentaobiz`.`zt_action`.`date`,10)
md5=b6bb5ee22f3b1de8796428f44331e90e
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-10-25 08:34:36
create-version=2
source=select count(*) AS `bugresolve`,left(zentaobiz.`zt_action`.`date`,10) AS `day` from zentaobiz.`zt_action` where ((zentaobiz.`zt_action`.`objectType` = \'bug\') and (zentaobiz.`zt_action`.`action` = \'resolved\')) group by left(zentaobiz.`zt_action`.`date`,10)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select count(0) AS `bugresolve`,left(`zentaobiz`.`zt_action`.`date`,10) AS `day` from `zentaobiz`.`zt_action` where ((`zentaobiz`.`zt_action`.`objectType` = \'bug\') and (`zentaobiz`.`zt_action`.`action` = \'resolved\')) group by left(`zentaobiz`.`zt_action`.`date`,10)
mariadb-version=100121
