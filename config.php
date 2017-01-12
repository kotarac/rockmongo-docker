<?php

$MONGO = array();
$MONGO["features"]["log_query"] = "on";
$MONGO["features"]["theme"] = "default";
$MONGO["features"]["plugins"] = "on";

$i = 0;
$MONGO["servers"][$i]["mongo_name"] = "mongo";
$MONGO["servers"][$i]["mongo_host"] = getenv("MONGO_HOST");
$MONGO["servers"][$i]["mongo_port"] = getenv("MONGO_PORT");
$MONGO["servers"][$i]["mongo_timeout"] = 0;
$MONGO["servers"][$i]["mongo_auth"] = false;
$MONGO["servers"][$i]["control_auth"] = false;
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";
$MONGO["servers"][$i]["ui_only_dbs"] = "";
$MONGO["servers"][$i]["ui_hide_dbs"] = "";
$MONGO["servers"][$i]["ui_hide_collections"] = "";
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;

?>
