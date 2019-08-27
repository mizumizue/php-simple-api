<?
$array = [
    'tokyo' => [
        '品川',
        '五反田',
        '三軒茶屋',
        '四谷'
    ],
    'kanagawa' => [
        '横浜',
        '相模原',
        '湘南',
        '鎌倉'
    ],
    'saitama' => [
        '所沢',
        '狭山',
        '川口',
        '浦和',
        '小手指',
        '川越',
        '飯能'
    ]
];

setHeaders();
responseJSON($array);

function setHeaders(): void {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
}

function responseJSON(array $obj): void {
    http_response_code (200);
    echo json_encode($obj, JSON_UNESCAPED_UNICODE);
}
