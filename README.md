# PHP Undefined Variable Bug
This repository demonstrates a common PHP error: the "Undefined variable" notice. The `bug.php` file contains a function with an uninitialized variable used within a loop.  The solution is provided in `bugSolution.php`.

The problem arises because the `$result` array is not initialized outside the loop. If the input array is empty, the loop never runs, and `$result` remains undefined, causing the notice when trying to return it.

The fix involves initializing `$result` as an empty array before the loop begins.