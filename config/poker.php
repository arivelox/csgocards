<?php

return [
    'maxCustomGames' => 2,
    'avatarsUrl' => env('APP_STATIC_URL') . "img/avatars.png",
    'avatarMin' => 0,
    'avatarMax' => 64,
    'avatarSize' => 32,

    'maxTableNameLength' => 25,
    'rakePercentage' => 5,
    'minBigBlind' => 1,
    'maxBigBlind' => 10000,
    'minBigBet' => 1,
    'maxBigBet' => 10000,
    'minSmallBlind' => 1,
    'maxSmallBlind' => 5000,
    'minSmallBet' => 1,
    'maxSmallBet' => 5000,
    'minSeats' => 2,
    'maxSeats' => 10,
    'maxSeatsRazzStud' => 8,
    'minBuyIn' => 10,
    'maxBuyIn' => 1000000,
    'gameTypes' => [
        "Limit Hold'em",
        "Pot Limit Hold'em",
        "No Limit Hold'em",
        "Limit Omaha",
        "Pot Limit Omaha",
        "No Limit Omaha",
        "Limit Omaha Hi-Lo",
        "Pot Limit Omaha Hi-Lo",
        "No Limit Omaha Hi-Lo",
        "Limit Razz",
        "Limit Stud",
        "Limit Stud Hi-Lo"
    ],

    'systemAccounts' => [
        'Test',
        'Hurensohn',
        'NSDAP',
        'SiegHeil',
        'Hitler',
        'Hacker',
        'Moderator',
        'r00t',
        'root',
        'sql',
        'Service',
        'Developer',
        'Superuser',
        'Staff',
        'Dev',
        'Sysadmin',
        'Administrator',
        'Cashier',
        'Admin'
    ]
];