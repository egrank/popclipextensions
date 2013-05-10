<?php
$current=`export LANG=en_US.UTF-8; pbpaste`;
$input=getenv('POPCLIP_TEXT');
echo $input."".$input;
`export LANG=en_US.UTF-8; /bin/echo -n $current | pbcopy`;
?>