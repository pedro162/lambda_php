<?php

declare(strict_types=1);

function main(array $context): array
{
    echo "Log pelo PHP";
    $req = json_encode($context);

    return [
        'statusCode' => 200,
        'body' => $req,
        'headers' => [
            'Content-Type' => 'application/json'
        ]
    ];
}
