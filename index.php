<?php

require_once 'Task.php';
require_once 'Project.php';

$project = new Project("Разработка сайта");

$task1 = new Task("Дизайн", "Создать макет главной страницы");
$task2 = new Task("Разработка", "Разработать функционал сайта");

$project->addTask($task1);
$project->addTask($task2);

echo $project . "\n";
echo $task1 . "\n";
echo $task2 . "\n";

$task1->setStatus("Выполнено");
echo $task1 . "\n";
