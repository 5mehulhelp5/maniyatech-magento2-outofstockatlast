# ManiyaTech OutOfStockAtLast module for Magento 2

The ManiyaTech OutOfStockAtLast module automatically sorts and pushes out-of-stock products to the end of product listings on both category and search result pages. By modifying Magento’s stock indexer logic and sorting behavior, it ensures that in-stock products are prioritized in customer-facing views. This improves visibility of available items, enhances user experience, and can positively impact sales and engagement metrics—without requiring manual sorting or customization per category.

## How to install ManiyaTech_OutOfStockAtLast module

### Composer Installation

Run the following command in Magento 2 root directory to install ManiyaTech_OutOfStockAtLast module via composer.

#### Install

```
composer require maniyatech/magento2-outofstockatlast
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

#### Update

```
composer update maniyatech/magento2-outofstockatlast
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

Run below command if your store is in the production mode:

```
php bin/magento setup:di:compile
```

### Manual Installation

If you prefer to install this module manually, kindly follow the steps described below - 

- Download the latest version [here](https://github.com/maniyatech/magento2-outofstockatlast/archive/refs/heads/main.zip) 
- Create a folder path like this `app/code/ManiyaTech/OutOfStockAtLast` and extract the `main.zip` file into it.
- Navigate to Magento root directory and execute the below commands.

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```
