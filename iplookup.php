<?php
/**
 * Created by PhpStorm.
 * User: stuarteske
 * Date: 10/11/2013
 * Time: 18:33
 *
 * @copyright    Copyright (C) 2013 CFA Group. All rights reserved.
 * @license      GNU General Public License Version 2 or later.
 * @author       Stuart Eske, <stuart.eske@cfa-group.com>
 */

header("Access-Control-Allow-Origin: *");

$data = $_GET['domains'];

$returnArray = array();

foreach ($data as $key => $domain) {
    $returnArray[$domain]['ip'] = gethostbyname($domain);
}


echo json_encode($returnArray);
