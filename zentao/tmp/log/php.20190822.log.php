<?php
 die();
?>

02:30:06 Maximum execution time of 7200 seconds exceeded in E:\yiding_git\xampp\zentao\module\cron\control.php on line 237 when visiting cron-ajaxExec-0

11:04:49 syntax error, unexpected ')' in E:\yiding_git\xampp\zentao\module\task\model.php on line 1613 when visiting my-task-urgentJob

14:14:25 Uncaught Error: Call to undefined method sql::getlastsql() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1673): baseDAO->__call('getlastsql', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob

14:31:38 syntax error, unexpected ';', expecting ',' or ')' in E:\yiding_git\xampp\zentao\module\task\model.php on line 1677 when visiting my-task-tomorrowJob

14:31:58 ERROR: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1&lt;p&gt;The sql is: SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  wHeRe t1.deleted  = '0' AND  t1.status IN ('wait','doing') AND ( 2019-08-23  AND  t1.assignedTo  = 'yidinglgt' oRdEr bY `id` desc &lt;/p&gt; in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1392, last called by E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 386 through function sqlError.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my-task-tomorrowJob

14:33:06 Uncaught Error: Call to a member function printSQL() on array in E:\yiding_git\xampp\zentao\module\task\model.php:1677
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#1 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#2 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#3 {main}
  thrown in E:\yiding_git\xampp\zentao\module\task\model.php on line 1677 when visiting my-task-tomorrowJob

14:33:24 Uncaught Error: Call to a member function printSQL() on array in E:\yiding_git\xampp\zentao\module\task\model.php:1677
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#1 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#2 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#3 {main}
  thrown in E:\yiding_git\xampp\zentao\module\task\model.php on line 1677 when visiting my-task-tomorrowJob

14:33:33 Uncaught Error: Call to a member function printSQL() on array in E:\yiding_git\xampp\zentao\module\task\model.php:1678
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#1 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#2 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#3 {main}
  thrown in E:\yiding_git\xampp\zentao\module\task\model.php on line 1678 when visiting my-task-tomorrowJob

14:47:57 Uncaught Error: Call to undefined method sql::gte() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1668): baseDAO->__call('gte', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob

14:48:09 Uncaught Error: Call to undefined method sql::egt() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1668): baseDAO->__call('egt', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob

14:48:10 Uncaught Error: Call to undefined method sql::egt() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1668): baseDAO->__call('egt', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob

14:48:11 Uncaught Error: Call to undefined method sql::egt() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1668): baseDAO->__call('egt', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob

14:48:22 Uncaught Error: Call to undefined method sql::egt() in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php:1027
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\task\model.php(1668): baseDAO->__call('egt', Array)
#1 E:\yiding_git\xampp\zentao\module\my\control.php(198): taskModel->getUserJob('tomorrowJob', 0, Object(pager), 'id_desc')
#2 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('tomorrowJob', 'id_desc', 0, 20, 1)
#3 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#4 {main}
  thrown in E:\yiding_git\xampp\zentao\lib\base\dao\dao.class.php on line 1027 when visiting my-task-tomorrowJob
