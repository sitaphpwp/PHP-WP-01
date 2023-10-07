<?php return array(
    'root' => array(
        'name' => 'hp/portfolio-plugin',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'c2599fd208f66f6ed5047e50afdc92bd3d9a760e',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'hp/portfolio-plugin' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'c2599fd208f66f6ed5047e50afdc92bd3d9a760e',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpmailer/phpmailer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'b915445e7c837c2c1543332bd8324ae652fbbcac',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmailer/phpmailer',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
