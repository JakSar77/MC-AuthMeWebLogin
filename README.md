Login script for server using AuthMe plugin.

Require
• Mysql database
• AuthMe plugin with secure BCrypt - V2.0+
• WebHosting with php7.2+


Features:
• Player login in web. (No register)
• Background IMG edit.
• All settings are in Config file.


Setup
Code (Text):

1. Connect your AuthMe plugin to MySQL database.
     Need to edit:
     • Table name set: Server_AuthMe
     • Row with realname set to: realname
     • Row with username set to: username
     • Row with email set to: email
     • Row with password set to: password
2. Open file Config.php.
3. Setup connect to your mysql database & message.
4. Complete
 
Code has been tested on PHP 7.2
