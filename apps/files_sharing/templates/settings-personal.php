<?php
script('files_sharing', 'settings-personal');
style('files_sharing', 'settings-personal');
if ($_['showShareIT']) {
	script('files_sharing', '3rdparty/gs-share/gs-share');
	style('files_sharing', '3rdparty/gs-share/style');
}
?>

