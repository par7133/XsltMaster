<?PHP
/**
 * Copyright 2021, 2024 5 Mode
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
 * html.php
 * 
 * Xslt-Master html rotviler.
 *
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2016, 2024 5 Mode
 */

header("Content-type: text/xsl");

$dataName = filter_input(INPUT_GET, "d")??"";
$dataName = strip_tags($dataName);

//switch ($dataName) {
//  case "singers":
//    $XSLfilename = "singers.xsl";
//    break;
//}

$XSLfilename = $dataName.".xsl";

chdir(APP_DATA_PATH);

echo(file_get_contents($XSLfilename));



  