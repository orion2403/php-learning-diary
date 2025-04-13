<!--Basic-->

<?php echo 'If you want to serve PHP code in XHTML or XML documents,
use these tags'; ?>

Hello world

<?= 'print this string'; ?>

<?php

echo 'Hello world';

echo 'Last message';

// Script end


?>

<!--With expression-->

<?php if($expression == null): ?>
    This is true
<?php else: ?>
    This is false
<?php endif; ?>

<!--Comments-->

<?php
    echo "This is a text\n"; // This is a one-line c++ style comment
    /*
     * This is a multi line comment
     * yet another line of comment
     */
    echo "This is yet another test\n";
    echo "One Final Test\n"; # This is a one-line shell-style comment

