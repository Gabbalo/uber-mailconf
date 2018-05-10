function randomstring () {
  // create random chars to uniquify addesses
  return $random;
}

function writeqmail ($catchallprefix) {
  // write qmail file based on database entrys
  $file = fopen(".qmail-$catchallprefix-default, "w") or die ("Unable to open file!");
  // generate $content
  fwrite($file, $content);
  fclose($file);
}

function installdatabase () {
  // Get credentials from user and store them in config-file
  // CREATE database and tables
}

function connectdatabase () {
  // Import config-file with credentials
  // Connect to database
}
