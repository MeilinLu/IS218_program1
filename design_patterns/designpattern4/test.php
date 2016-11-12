<?php

require_once('ATM.php');
require_once('observer.php');

$ob1 = new PatternObserver();

$user1 = userFactory::create('Ali');
$user2 = userFactory::create('Bill');

$user1->attach($ob1);
$user2->attach($ob1);

$user1->startUse(ATM1::startUse());

$user1->getAvailableATM();

$user2->startUse(ATM1::startUse());

$user1->finishUse();

$user1->getAvailableATM();

$user2->startUse(ATM1::startUse());

$user2->getAvailaleATM();

$user2->finishUse();

$user1->detach($ob1);
$user2->detach($ob1);

?>

