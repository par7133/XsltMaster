<?php

/**
 * Copyright (c) 2016, 2024, 5 Mode
 * 
 * This file is part of Xslt-Master.
 * 
 * Xslt-Master is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Xslt-Master is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.  
 * 
 * You should have received a copy of the GNU General Public License
 * along with Xslt-Master. If not, see <https://www.gnu.org/licenses/>.
 *
 * index.php
 * 
 * Xslt-Master index file.
 *
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2016, 2024, 5 Mode     
 */

require "../Private/core/init.inc";


// FUNCTION AND VARIABLE DECLARATIONS
$scriptPath = APP_SCRIPT_PATH;

// PARAMETERS VALIDATION

$url = filter_input(INPUT_GET, "url")??"";
$url = strip_tags($url);
$url = strtolower(trim(substr($url, 0, 300), "/"));

switch ($url) {
  case "action":

    $scriptPath = APP_AJAX_PATH;
    define("SCRIPT_NAME", "action");
    define("SCRIPT_FILENAME", "action.php");     
    break;

  case "":
  case "home":
  
    define("SCRIPT_NAME", "home");
    define("SCRIPT_FILENAME", "home.php");   
    break;  

  case "xml":
  
    define("SCRIPT_NAME", "xml");
    define("SCRIPT_FILENAME", "xml.php");   
    break;   

  case "xsl":
  
    define("SCRIPT_NAME", "xsl");
    define("SCRIPT_FILENAME", "xsl.php");   
    break;   
  
  default:
    
    $scriptPath = APP_ERROR_PATH;
    define("SCRIPT_NAME", "err-404");
    define("SCRIPT_FILENAME", "err-404.php");   

}

if (SCRIPT_NAME==="err-404") {
  header("HTTP/1.1 404 Not Found");
}  

require $scriptPath . "/" . SCRIPT_FILENAME;
