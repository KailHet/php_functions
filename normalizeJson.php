function normalizeJson($data) {
    $content = @file_get_contents($data);
    $content_data = stripcslashes(html_entity_decode($content));
    return $result = json_decode($content_data,true);
}
