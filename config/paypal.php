<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID', 'AdrPnL0q29tEyVI6dTB401Oj3il1v3_MzgmbLRGMoEPDeoSew0hmsRc5udc1UkYT0WnWjSG_yRl7j2PL'),
    'secret' => env('PAYPAL_SECRET', 'EC5eLs_HomMM3HcQqCEd2b8I9Kr8j35gSfrLdU9jy_H8GqWiTdalfMF2zy9FjJeYVIWMd2ziH7F9029y'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
