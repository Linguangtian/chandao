<?php
public function getTestcases($productID)
{
    return $this->loadExtension('report')->getTestcases($productID);
}

public function getBuildBugs($productID)
{
    return $this->loadExtension('report')->getBuildBugs($productID);
}

public function getWorkSummary($begin, $end, $dept)
{
    return $this->loadExtension('report')->getWorkSummary($begin, $end, $dept);
}

public function getRoadmaps($conditions = '')
{
    return $this->loadExtension('report')->getRoadmaps($conditions);
}

public function getBugSummary($dept, $begin, $end)
{
    return $this->loadExtension('report')->getBugSummary($dept, $begin, $end);
}

public function getCasesRun($productID)
{
    return $this->loadExtension('report')->getCasesRun($productID);
}

public function getStoryBugs($moduleID)
{
    return $this->loadExtension('report')->getStoryBugs($moduleID);
}

public function getModule($productID)
{
    return $this->loadExtension('report')->getModule($productID);
}
