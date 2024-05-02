<?php
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$count = htmlspecialchars($_POST['count'], ENT_QUOTES);
// print "会社名は" . $company . "ですね";
print "私の名前は、" . $order . '<br />';
print "ご希望商品は、" . $set . '<br />';
print "注文数は、" . $count . '<br />';