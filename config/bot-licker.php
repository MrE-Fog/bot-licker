<?php 

return [
    
    /**
     * Enable or disable the firewall
     */
    'enabled' => env('FIREWALL_ENABLED', true),
    
    /**
     * The firewall provider to use
     */
    'provider' => \Turbo124\BotLicker\Providers\Cloudflare::class,

    /**
     * Specific provider configuration
     */
    'cloudflare' => [
        'api_key' => env('CLOUDFLARE_API_KEY'),
        'email' => env('CLOUDFLARE_EMAIL'),
        'zone_id' => env('CLOUDFLARE_ZONE_ID'),
    ],

    /**
     * Array of IPs to never ban
     */
    'whitelist' => [],
];