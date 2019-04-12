// Starting the server...
if ($act=="start")
{
$output = shell_exec("./Server.exe start");
echo $output;
}
// Stopping the server...
elseif ($act=="stop")
{
$output = shell_exec("./Server.exe stop");
echo $output;
} ?>