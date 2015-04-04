##AppStatusCommand
Simple console command that will check if your application is live or in maintenance mode.
It is faster than opening a browser. 

##Installation:
Fork this repo and use it as default Laravel application with AppStatusCommand added. Or just copy command file,located in app/Console/Commands/AppStatusCommand.php to your Laravel application. Also you will need to add command to the list of commands in app/Console/Kernel.php file, and run composer dump-autoload.

##Running 
Run php artisan app:status and your will get answer, in which mode is your application.
