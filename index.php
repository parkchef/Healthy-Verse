<?php
include_once("config.php");
$member_name = DB::queryFirstField("SELECT `name` FROM members;");
echo $member_name;
