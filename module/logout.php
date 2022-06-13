<?php
require('../db/database.php');
session_destroy();
header('location:../index.php');
