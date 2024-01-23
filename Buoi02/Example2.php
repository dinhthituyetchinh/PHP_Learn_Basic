<?php
function foo() 
{
    function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

 foo();


bar();

?>