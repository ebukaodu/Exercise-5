<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 25/09/2018
 * Time: 10:50 AM
 */

include ("config.php");

$title = "My Awesome OOP Site";
$content = <<<EOT
<div>
    <h1>Example Domain</h1>
    <p>This domain is established to be used for illustrative examples in documents.
     You may use this domain in example without prior co-ordination or asking for permission.</p>
     <p><a href="http://www.iana.org/domains/example">More information</a> </p>
</div>
EOT;
    $site->display($content, $title);
