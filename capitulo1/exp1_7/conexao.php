<?php
$db = new PDO("sqlite:skshop.db");
$rows = $db->query("Select * from hardware");
