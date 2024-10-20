
<?php

$text = '<p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>';
$pat = '%<li>(\w+)</li>%';
$repl = '<li><a href="http://www.php.kh.ua/script.php?role=$1">$1</a></li>';
$res = preg_replace($pat, $repl, $text);
print_r($res);
