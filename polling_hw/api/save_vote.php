<?php
include_once "db.php";

$opt_id = $POST['opt'];
$opt = find("options", $opt_id);
//$opt['count']++;
//$opt['count']+=1;
$opt['count'] = $opt['count'] + 1;

update('options', ['count' => $opt['count']], ['id' => $opt_id]);

// header("location:../index.php?do=vote_result"); //看投票結果

to("../index.php?do=vote_result&id={$opt['topic_id']}");

?>
