<?php
declare(strict_types=1);

function render_template(string $template, array $data = []):void{
    extract($data);
    require "templates/$template.php";
}


function get_data (string $url): array {
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message (int $days):string {
    return match (true) {
        $days === 0     => "Today premieres!",
        $days < 30      => "Little time left!",
        default         => "$days days."
    };
};
?>