function consoleLog($data) {
    if (is_array($data)) $data = implode(',', $data);
    echo "<script>console.log($data);</script>";
}
