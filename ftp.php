<?php
$server = "";
$user = "";
$password = "";

$ftp_connection = ftp_connect($server) or die("Couldn't connect to $server");
ftp_login($ftp_connection,$user,$password) or die("Couldn't login to $server");
ftp_pasv($ftp_connection,true);




function upload_files($ftp_connection,$local_dir,$server_dir){
    $files = clean_scandir($local_dir);
    for($i = 0;$i < count($files);$i++){
        $files_on_server = clean_ftp_nlist($ftp_connection,$server_dir);
        if(!in_array("$files[$i]",$files_on_server)){
            if(ftp_put($ftp_connection,"$server_dir/$files[$i]","$local_dir/$files[$i]",FTP_BINARY)){
                echo "Successfully uploaded $files[$i]";
                echo "<br/>";
            }else{
                echo "There was a problem while uploading $files[$i]";
                echo "<br/>";
            }
        }else{
            echo "file name is exists";
            echo "<br/>";
        }
    }
    $files_on_server = clean_ftp_nlist($ftp_connection,$server_dir);
    ftp_close($ftp_connection);

    return $files_on_server;
}
function clean_ftp_nlist($ftp_connection,$server_dir){
    $list = ftp_nlist($ftp_connection,$server_dir);
    foreach($list as $row){
        if($row !== '.' || $row !== '..'){
            $results[] = $row;
        }
    }
    return $results;
}
function clean_scandir($dir){
    $list = scandir($dir);
    foreach($list as $row){
        if($row !== '.' || $row !== '..'){
            $results[] = $row;
        }
    }
    return $results;
}

$local_dir = "";
$remote_dir = "";

upload_files($ftp_connection,$local_dir,$server_dir);
