<?php
require_once '/var/www/html/google_appengine/google/appengine/api/cloud_storage/CloudStorageTools.php';

use google_appengine\google\appengine\api\cloud_storage\CloudStorageTools;

$options = [ 'gs_bucket_name' => 'test_bucket_content' ];
echo $upload_url = CloudStorageTools::createUploadUrl('/upload_handler.php', $options);
exit;
