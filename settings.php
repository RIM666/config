<?php

//file: settings.php

declare(strict_types=1);

return [
    "site_name" => "My site",
    "site_url" => "http://mysite.ru",
    "db" => [
        "user" => "admin",
        "password" => "ifghigh8y8rt347ghi",
        "name" => "my_database",
        "entrances" => [
            "february" => "02.10, 02.20",
            "march" => "03.10",
            "april" => [
                "none" => "04.01",
                "yes" => "04.02, 04.03"
            ]
        ]
    ]
];
