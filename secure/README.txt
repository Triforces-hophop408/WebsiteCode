This folder should not be accessable by the general public. Only site administrators with direct access to the server.
In this folder should be kept sensitive code, such as scripts to encrypt information, or log on to the database.
If using a script from this folder in any code in /www/:
 -create a local variable $dir, set it to point to this directory. eg: $dir = "../secure/"
  -this is used to 1) make it easier to use the same location for each include
  -2) functions in this directory should use $dir whenever directory sensitive code is being used
   -include function acts as if putting the source code directly into the file, so when moving directories code may no longer work
 -use php's include or require function to include the code into your page. eg: include($dir."references.php");
If creating any code in this directory:
 -put all code in: if (chdir($dir)){}
 -statement should be in begging of code, close brace should be at very end of code
 -this ensures that the code dosn't run unless the working directory has been changed to whatever it should be
 -comment this statement out if running code directly from here to test before including into main code
 -var $dir is created when including the file, should not be created localy.