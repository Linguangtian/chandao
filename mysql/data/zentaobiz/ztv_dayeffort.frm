TYPE=VIEW
query=select round(sum(`zentaobiz`.`zt_effort`.`consumed`),1) AS `consumed`,`zentaobiz`.`zt_effort`.`date` AS `date` from `zentaobiz`.`zt_effort` group by `zentaobiz`.`zt_effort`.`date`
md5=ca6c7f9706f996f288ff3f454b4d1cb2
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-10-25 08:34:36
create-version=2
source=select round(sum(zentaobiz.`zt_effort`.`consumed`),1) AS `consumed`,zentaobiz.`zt_effort`.`date` AS `date` from zentaobiz.`zt_effort` group by zentaobiz.`zt_effort`.`date`
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select round(sum(`zentaobiz`.`zt_effort`.`consumed`),1) AS `consumed`,`zentaobiz`.`zt_effort`.`date` AS `date` from `zentaobiz`.`zt_effort` group by `zentaobiz`.`zt_effort`.`date`
mariadb-version=100121
