<?php
 die();
?>
20190822 14:31:58: my-task-tomorrowJob
  SELECT * FROM `zt_userview` WHERE account  = 'yidinglgt'
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.assignedTo = t2.account  WHERE t1.assignedTo  != '' AND  t1.deleted  = '0' AND  t2.deleted  = '0' AND  t1.status IN ('wait','doing') AND  t1.assignedTo  = 'yidinglgt' AND  t1.pri  = '1'
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.assignedTo = t2.account  WHERE t1.assignedTo  != '' AND  t1.deleted  = '0' AND  t2.deleted  = '0' AND  t1.status IN ('wait','doing') AND  t1.assignedTo  = 'yidinglgt' AND  t1.estStarted  = '2019-08-23'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','yidinglgt') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.status IN ('wait','doing') AND ( 2019-08-23  AND  t1.assignedTo  = 'yidinglgt' 

