<?php

include_once 'config.inc.php';
include_once 'templates/style.css';


	//echo str_replace("/","\/",$_GET['dir']);
/*if(preg_match('/'.str_replace("/","\/",$_GET['dir']).'/i',$env['hdfsToHiveDir']) == '0')
{
	$dir = $_GET['dir'];
}
else
{
	$dir = $env['hdfsToHiveDir'];
}


//if (is_dir($dir)) {

if ($dh = opendir($dir))
{
	echo "<a href=fileBrowser.php?dir=".$env['hdfsToHiveDir'].">Back to Root</a><br><br>";
	echo "<table border=1 cellspacing=1 cellpadding=3>";
	echo "<tr bgcolor=\"#FFFF99\">";
	echo "<td>".$lang['filename']."</td><td>".$lang['filetype']."</td><td>".$lang['filesize']."</td>";
	echo "</tr>";
	$i = 0;
	while (($file = readdir($dh)) !== false)
	{
		if(($i % 2) == 0)
		{
			$color = $env['trColor1'];
		}
		else
		{
			$color = $env['trColor2'];
		}
		echo "<tr bgcolor=\"".$color."\">";
		if(($file == '.') || ($file == '..'))
		{
			continue;
		}
		else
		{
			if(is_dir($dir.$file))
			{
				echo "<td><a href=fileBrowser.php?dir=".$dir.$file."/>$file</a></td>\n";
			}
			else
			{
				echo "<td><a href=fileBrowser.php?dir=".$dir.$file.">$file</a></td>\n";
			}
			echo "<td>".filetype($dir.$file)."</td>\n";
			echo "<td>".filesize($dir.$file)."</td>\n";
		}
		echo "</tr>";
		$i++;
	}
	closedir($dh);
	echo "</table>";
	echo "Files: ".$i;
}

//}
*/




?>