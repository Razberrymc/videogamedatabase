/* name this database: sockmarket */

CREATE TABLE games (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    game TEXT(140),
    genre TEXT(40),
    system TEXT(40),
    why TEXT(999)
    );

/* access MySQL/MariaDB from the Terminal - Mac only:

cd /Applications/XAMPP/xamppfiles/bin;./mysql --user=root --password=

SHOW DATABASES;

USE sockmarket

   -- type SQL queries --

QUIT
*/
