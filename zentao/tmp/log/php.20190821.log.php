<?php
 die();
?>

16:28:13 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:40
Stack trace:
#0 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1178): commonModel->__construct()
#1 E:\yiding_git\xampp\zentao\www\index.php(36): baseRouter->loadCommon()
#2 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 40 when visiting 

16:28:53 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:485
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(36): commonModel::printSearchBox()
#1 E:\yiding_git\xampp\zentao\module\my\view\task.html.php(13): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'task')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'task')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(200): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->task('assignedTo', 'id_desc', 0, 20, 1)
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 485 when visiting my-task

16:29:26 ERROR: '{88' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {88

16:29:26 ERROR: '{89' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {89

16:29:26 ERROR: '{86' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {86

16:29:26 ERROR: '{90' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {90

16:30:17 ERROR: '{89' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {89

16:30:17 ERROR: '{88' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {88

16:30:17 ERROR: '{90' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {90

16:30:17 ERROR: '{86' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting {86

16:51:37 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:530
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(27): commonModel::printUrgentJob()
#1 E:\yiding_git\xampp\zentao\module\my\view\index.html.php(12): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'index')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'index')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(42): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->index()
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 530 when visiting my

16:51:46 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:530
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(27): commonModel::printUrgentJob()
#1 E:\yiding_git\xampp\zentao\module\my\view\index.html.php(12): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'index')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'index')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(42): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->index()
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 530 when visiting my

16:52:27 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:532
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(27): commonModel::printUrgentJob()
#1 E:\yiding_git\xampp\zentao\module\my\view\index.html.php(12): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'index')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'index')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(42): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->index()
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 532 when visiting my

16:52:46 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:533
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(27): commonModel::printUrgentJob()
#1 E:\yiding_git\xampp\zentao\module\my\view\index.html.php(12): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'index')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'index')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(42): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->index()
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 533 when visiting my

16:53:41 Uncaught Error: Call to undefined function UrgentJob() in E:\yiding_git\xampp\zentao\module\common\model.php:533
Stack trace:
#0 E:\yiding_git\xampp\zentao\module\common\view\header.html.php(27): commonModel::printUrgentJob()
#1 E:\yiding_git\xampp\zentao\module\my\view\index.html.php(12): include('E:\\yiding_git\\x...')
#2 E:\yiding_git\xampp\zentao\framework\base\control.class.php(651): include('E:\\yiding_git\\x...')
#3 E:\yiding_git\xampp\zentao\framework\base\control.class.php(577): baseControl->parseDefault('my', 'index')
#4 E:\yiding_git\xampp\zentao\framework\base\control.class.php(797): baseControl->parse('my', 'index')
#5 E:\yiding_git\xampp\zentao\module\my\control.php(42): baseControl->display()
#6 E:\yiding_git\xampp\zentao\framework\base\router.class.php(1703): my->index()
#7 E:\yiding_git\xampp\zentao\www\index.php(67): baseRouter->loadModule()
#8 {main}
  thrown in E:\yiding_git\xampp\zentao\module\common\model.php on line 533 when visiting my

17:39:36 ERROR: 'my/images/main/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my/images/main/msg

17:39:43 ERROR: 'my/images/main/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my/images/main/msg

17:39:48 ERROR: 'my/images/main/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my/images/main/msg

17:42:13 ERROR: 'my/images/main/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my/images/main/msg

17:42:14 ERROR: 'zentao/img/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting zentao/img/msg

17:42:16 ERROR: 'zentao/img/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting zentao/img/msg

17:43:55 ERROR: 'my/images/main/msg' illegal.  in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1287, last called by E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 1194 through function checkModuleName.
 in E:\yiding_git\xampp\zentao\framework\base\router.class.php on line 2215 when visiting my/images/main/msg

18:11:55 syntax error, unexpected '
18:12:04 syntax error, unexpected '}', expecting ',' or ';' in E:\yiding_git\xampp\zentao\module\common\model.php on line 542 when visiting 
