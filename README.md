# fluffzy-php
FLUFFZY PHP ASSIGNMENT - TASK MANAGEMENT USER SYSTEM
A task management system with the option for logging in and storing user and task data.
The project is divided among files which included seperate css and js files.
The **login.php** file contains a form which inputs data from the user and is linked to the **loginValidation.php** file to check the database for the exisitng user.
The **board.php** connects to the db,extracts the task data and displays it in a table along with the option to create a task.
The **connect.php** contains the db information: host, user, password and dbname.
The **newTask.php** file allows the user to add a new task based on the task id. A description of the taskcan also be added.
The **newTaskValidation.php** inserts the newly added task into the database and views it on the board.
The **task.php** displays the current tasks.
