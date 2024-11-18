<?php
$users = [
    'admin' => ['pass' => 'MegaPassword', 'role' => 'admin'],
    'user' => ['pass' => '19061975kR', 'role' => 'user'],
    'admin2' => ['pass' => 'AdminPass2024', 'role' => 'admin'],
    'user2' => ['pass' => 'UserPassword123', 'role' => 'user'],
    'admin3' => ['pass' => 'SuperAdmin123!', 'role' => 'admin'],
    'user3' => ['pass' => 'SimpleUser2024', 'role' => 'user'],
    'admin4' => ['pass' => 'SecureAdminPass!', 'role' => 'admin'],
    'user4' => ['pass' => 'EasyUserPass', 'role' => 'user']
];

$tours = [
    [
        'name' => 'Подорож до Франції',
        'description' => 'Відкрийте для себе чарівність Франції, від Парижа до Ліона.',
        'departure_date' => '05-07-2024',
        'arrival_date' => '12-07-2024',
        'cost' => 2400,
        'cities' => [
            ['name' => 'Париж', 'country' => 'Франція', 'hotel' => 'Hilton', 'stars' => 4],
            ['name' => 'Ліон', 'country' => 'Франція', 'hotel' => 'Novotel', 'stars' => 4],
        ],
        'seats' => 18,
        'hot_tour' => true,
        'transport' => 'Поїзд',
        'imageSrc' => './assets/images/france.jpg'
    ],
    [
        'name' => 'Подорож до Італії',
        'description' => 'Досліджуйте сонячну Італію: Рим і Флоренцію.',
        'departure_date' => '15-08-2024',
        'arrival_date' => '22-08-2024',
        'cost' => 2600,
        'cities' => [
            ['name' => 'Рим', 'country' => 'Італія', 'hotel' => 'The Westin Excelsior', 'stars' => 5],
            ['name' => 'Флоренція', 'country' => 'Італія', 'hotel' => 'Hotel Savoy', 'stars' => 5],
        ],
        'seats' => 20,
        'hot_tour' => false,
        'transport' => 'Автобус',
        'imageSrc' => './assets/images/italy.jpg'
    ],
    [
        'name' => 'Подорож до Іспанії',
        'description' => 'Насолоджуйтесь атмосферою Барселони та Севільї.',
        'departure_date' => '01-09-2024',
        'arrival_date' => '08-09-2024',
        'cost' => 2600,
        'cities' => [
            ['name' => 'Барселона', 'country' => 'Іспанія', 'hotel' => 'W Barcelona', 'stars' => 5],
            ['name' => 'Севілья', 'country' => 'Іспанія', 'hotel' => 'Hotel Alfonso XIII', 'stars' => 5],
        ],
        'seats' => 16,
        'hot_tour' => true,
        'transport' => 'Швидкісний поїзд',
        'imageSrc' => './assets/images/spain.jpg'
    ],
    [
        'name' => 'Подорож до Швейцарії',
        'description' => 'Відкрийте для себе чарівні міста Цюрих та Люцерн.',
        'departure_date' => '20-09-2024',
        'arrival_date' => '26-09-2024',
        'cost' => 3100,
        'cities' => [
            ['name' => 'Цюрих', 'country' => 'Швейцарія', 'hotel' => 'Baur au Lac', 'stars' => 5],
            ['name' => 'Люцерн', 'country' => 'Швейцарія', 'hotel' => 'Art Deco Hotel Montana', 'stars' => 4],
        ],
        'seats' => 12,
        'hot_tour' => false,
        'transport' => 'Поїзд',
        'imageSrc' => './assets/images/switzerland.jpg'
    ],
    [
        'name' => 'Подорож до Великої Британії',
        'description' => 'Відвідайте історичний Лондон і чарівний Единбург.',
        'departure_date' => '15-10-2024',
        'arrival_date' => '22-10-2024',
        'cost' => 2900,
        'cities' => [
            ['name' => 'Лондон', 'country' => 'Велика Британія', 'hotel' => 'The Ritz London', 'stars' => 5],
            ['name' => 'Единбург', 'country' => 'Велика Британія', 'hotel' => 'The Balmoral', 'stars' => 5],
        ],
        'seats' => 20,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/gb.jpg'
    ],
    [
        'name' => 'Подорож до Японії',
        'description' => 'Відчуйте унікальну атмосферу Токіо та Кіото.',
        'departure_date' => '05-10-2024',
        'arrival_date' => '15-10-2024',
        'cost' => 3200,
        'cities' => [
            ['name' => 'Токіо', 'country' => 'Японія', 'hotel' => 'Conrad Tokyo', 'stars' => 5],
            ['name' => 'Кіото', 'country' => 'Японія', 'hotel' => 'The Ritz-Carlton Kyoto', 'stars' => 5],
        ],
        'seats' => 18,
        'hot_tour' => true,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/japan.jpg'
    ],
    [
        'name' => 'Подорож до Канади',
        'description' => 'Насолоджуйтеся дивовижними пейзажами Канади.',
        'departure_date' => '20-10-2024',
        'arrival_date' => '30-10-2024',
        'cost' => 2900,
        'cities' => [
            ['name' => 'Торонто', 'country' => 'Канада', 'hotel' => 'Fairmont Royal York', 'stars' => 5],
            ['name' => 'Ванкувер', 'country' => 'Канада', 'hotel' => 'Rosewood Hotel Georgia', 'stars' => 5],
        ],
        'seats' => 25,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/canada.jpg'
    ],
    [
        'name' => 'Подорож до Греції',
        'description' => 'Релаксуйте на узбережжі Афін та Санторіні.',
        'departure_date' => '10-11-2024',
        'arrival_date' => '17-11-2024',
        'cost' => 2400,
        'cities' => [
            ['name' => 'Афіни', 'country' => 'Греція', 'hotel' => 'Grand Bretagne', 'stars' => 5],
            ['name' => 'Санторіні', 'country' => 'Греція', 'hotel' => 'Canaves Oia', 'stars' => 5],
        ],
        'seats' => 20,
        'hot_tour' => true,
        'transport' => 'Автобус',
        'imageSrc' => './assets/images/greece.jpg'
    ],
    [
        'name' => 'Подорож до Туреччини',
        'description' => 'Насолоджуйтеся культурними скарбами Стамбула та розкішними пляжами Анталії.',
        'departure_date' => '05-12-2024',
        'arrival_date' => '15-12-2024',
        'cost' => 2200,
        'cities' => [
            ['name' => 'Стамбул', 'country' => 'Туреччина', 'hotel' => 'Four Seasons Bosphorus', 'stars' => 5],
            ['name' => 'Анталія', 'country' => 'Туреччина', 'hotel' => 'Rixos Premium Belek', 'stars' => 5],
        ],
        'seats' => 20,
        'hot_tour' => true,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/turkey.jpg'
    ],
    [
        'name' => 'Подорож до Єгипту',
        'description' => 'Відкрийте для себе історію Каїра та теплі води Червоного моря в Хургаді.',
        'departure_date' => '20-11-2024',
        'arrival_date' => '30-11-2024',
        'cost' => 1800,
        'cities' => [
            ['name' => 'Каїр', 'country' => 'Єгипет', 'hotel' => 'Marriott Mena House', 'stars' => 5],
            ['name' => 'Хургада', 'country' => 'Єгипет', 'hotel' => 'Steigenberger Al Dau Beach', 'stars' => 5],
        ],
        'seats' => 25,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/egypt.jpg'
    ],
    [
        'name' => 'Подорож до Домінікани',
        'description' => 'Проведіть незабутній час на райських пляжах Пунта-Кани.',
        'departure_date' => '10-12-2024',
        'arrival_date' => '20-12-2024',
        'cost' => 3500,
        'cities' => [
            ['name' => 'Пунта-Кана', 'country' => 'Домінікана', 'hotel' => 'Eden Roc Cap Cana', 'stars' => 5],
        ],
        'seats' => 15,
        'hot_tour' => true,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/dominican.jpg'
    ],
    [
        'name' => 'Подорож до Португалії',
        'description' => 'Досліджуйте вузькі вулички Лісабону та старовинну архітектуру Порту.',
        'departure_date' => '01-12-2024',
        'arrival_date' => '10-12-2024',
        'cost' => 2400,
        'cities' => [
            ['name' => 'Лісабон', 'country' => 'Португалія', 'hotel' => 'Altis Grand Hotel', 'stars' => 5],
            ['name' => 'Порту', 'country' => 'Португалія', 'hotel' => 'Pestana Vintage Porto', 'stars' => 4],
        ],
        'seats' => 20,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/portugal.jpg'
    ],
    [
        'name' => 'Подорож до Хорватії',
        'description' => 'Відкрийте для себе історичну чарівність Рієки та природні дива Плітвицьких озер.',
        'departure_date' => '15-11-2024',
        'arrival_date' => '25-11-2024',
        'cost' => 2000,
        'cities' => [
            ['name' => 'Рієка', 'country' => 'Хорватія', 'hotel' => 'Hilton Rijeka Costabella Beach Resort', 'stars' => 5],
            ['name' => 'Плітвицькі озера', 'country' => 'Хорватія', 'hotel' => 'Hotel Jezero', 'stars' => 4],
        ],
        'seats' => 18,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/croatia.jpg'
    ],
    [
        'name' => 'Подорож до Чорногорії',
        'description' => 'Пориньте у спокій Котора та розкіш Будви.',
        'departure_date' => '08-12-2024',
        'arrival_date' => '15-12-2024',
        'cost' => 1900,
        'cities' => [
            ['name' => 'Котор', 'country' => 'Чорногорія', 'hotel' => 'Hotel Forza Mare', 'stars' => 5],
            ['name' => 'Будва', 'country' => 'Чорногорія', 'hotel' => 'Avala Resort & Villas', 'stars' => 4],
        ],
        'seats' => 22,
        'hot_tour' => true,
        'transport' => 'Автобус',
        'imageSrc' => './assets/images/montenegro.jpg'
    ],
    [
        'name' => 'Подорож до Монако',
        'description' => 'Розкіш та елегантність Монако чекають на вас: відвідайте князівський палац, казино Монте-Карло та порт Геркулес.',
        'departure_date' => '05-12-2024',
        'arrival_date' => '10-12-2024',
        'cost' => 3000,
        'cities' => [
            ['name' => 'Монако', 'country' => 'Монако', 'hotel' => 'Hôtel de Paris Monte-Carlo', 'stars' => 5],
        ],
        'seats' => 15,
        'hot_tour' => false,
        'transport' => 'Літак',
        'imageSrc' => './assets/images/monaco.jpg'
    ],
    
];
