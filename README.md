# Deprecated mysql_* Functions in PHP

This repository demonstrates a common error in PHP code: the use of deprecated `mysql_*` functions.  These functions are no longer supported in modern PHP versions and will cause errors.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version using the recommended `mysqli_*` or PDO functions.

**Problem:** The original code relies on outdated and insecure `mysql_*` functions to connect to a MySQL database, perform queries, and fetch results.

**Solution:** The solution replaces the deprecated functions with their secure and supported counterparts from either the `mysqli_*` extension (for procedural style) or PDO (for object-oriented style).  Using prepared statements with `mysqli` or PDO is highly recommended to prevent SQL injection vulnerabilities.