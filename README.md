# Imager Storage Driver for DigitalOcean Spaces

This is an external storage driver for Imager that uploads your Imager transforms to DigitalOcean's Spaces object storage. Spaces is an AWS S3 compatible object storage, so the plugin utilizes the same S3 client as Imager's AWS storage does.

This plugin also serves as a good reference point if you want to create your own external storage driver for Imager to integrate with an unsupported third-party object storage. It's really simple, and you can do it either from a Craft 3 plugin, if you want to share it with the rest of the community (please do!), or a module, if you're using something proprietary/custom.

## Requirements

This plugin requires Craft CMS 3.0.0 or later, and Imager 2.0 or later. 

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require aelvan/imager-do-spaces-driver

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for "Imager Storage Driver for DigitalOcean Spaces".


## Configuration

Configure the storage driver by adding new key named `dospaces` to the `storagesConfig` config setting in your **imager.php config file**, with the following configuration:

    'storageConfig' => [
        'dospaces' => [
            'endpoint' => '',
            'accessKey' => '',
            'secretAccessKey' => '',
            'region' => '',
            'bucket' => '',
            'folder' => '',
            'requestHeaders' => array(),
        ]
    ],

Enable the storage driver by adding the key `dospaces` to Imager's `storages` config setting:

    'storages' => ['dospaces'],

Here's an example config, note that the endpoint has to be a complete URL with scheme, and as always you need to make sure that `imagerUrl` is pointed to the right location:

    'imagerUrl' => 'https://imager-test-bucket.ams3.digitaloceanspaces.com/transforms/',
    'storages' => ['dospaces'],
    'storageConfig' => [
        'dospaces'  => [
            'endpoint' => 'https://ams3.digitaloceanspaces.com',
            'accessKey' => 'MYACCESSKEY',
            'secretAccessKey' => 'MYSECRETKEY',
            'region' => 'ams3',
            'bucket' => 'imager-test-bucket',
            'folder' => 'transforms',
            'requestHeaders' => array(),
        ]
    ],
    
Also remember to always empty your Imager transforms cache when adding or removing external storages, as the transforms won't be uploaded if the transform already exists in the cache.
 

Price, license and support
---
The plugin is released under the MIT license, meaning you can do what ever you want with it as long as you don't blame me. **It's free**, which means there is absolutely no support included, but you might get it anyway. Just post an issue here on github if you have one, and I'll see what I can do. It doesn't hurt to donate a beer at [Beerpay](https://beerpay.io/aelvan/Imager-Craft) either. Just saying. :)
