<?php 

function download_file($url, $localfile = null)
{
	$ch = curl_init($url);
	if (!$localfile) {
		$localfile = basename($url);
	}
	$fp = fopen($localfile, "w");
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}
chdir("..");
@ unlink("kloxo-current.zip");
print("Downloading.... \n");
// download_file("http://download.lxcenter.org/download/kloxo/production/kloxo/kloxo-current.zip");
print("download done...\n");

system("unzip -oq kloxo-current.zip");
print("Chowning...\n");
system("chown -R lxlabs ..");


