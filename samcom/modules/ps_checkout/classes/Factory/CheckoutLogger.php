<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\PrestashopCheckout\Factory;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

class CheckoutLogger
{
    const MAX_FILES = 15;

    public static function create()
    {
        $path = _PS_ROOT_DIR_ . '/var/logs/ps_checkout';

        if (version_compare(_PS_VERSION_, '1.7', '<')) {
            $path = _PS_ROOT_DIR_ . '/log/ps_checkout';
        } elseif (version_compare(_PS_VERSION_, '1.7.4', '<')) {
            $path = _PS_ROOT_DIR_ . '/app/logs/ps_checkout';
        }

        $isDebug = (bool) \Configuration::get(
            'PS_CHECKOUT_DEBUG_LOGS_ENABLED',
            null,
            null,
            (int) \Context::getContext()->shop->id
        );

        $rotatingFileHandler = new RotatingFileHandler(
            $path,
            static::MAX_FILES,
            $isDebug ? Logger::DEBUG : Logger::ERROR
        );
        $logger = new Logger('ps_checkout');
        $logger->pushHandler($rotatingFileHandler);

        return $logger;
    }
}
