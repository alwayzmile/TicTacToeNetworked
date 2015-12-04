<?php
if ( isset($_GET['server']) && isset($_GET['command'])                                               ) {
  exec("java -Xmx512m -jar ../jar/IkhsanTicTacToeClient.jar $_GET[server] \"$_GET[command]\"", $output);

  if ( isset($output[0]) ) {
    $data = explode(';', $output[0]);
    echo json_encode($data);
  }
}
?>