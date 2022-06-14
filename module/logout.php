<?php
require_once('../db/database.php');
session_destroy();
header('location:../index.php');
