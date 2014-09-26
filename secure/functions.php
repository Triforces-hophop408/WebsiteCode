<?PHP if(isset($dir)&&chdir($dir)){

if(isset($wkdir)){chdir($wkdir);}}else if(!isset($dir)){die("Variable $dir must be set prior to including this code");}?>