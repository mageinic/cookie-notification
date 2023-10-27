<?php
/**
 * MageINIC
 * Copyright (C) 2023 MageINIC <support@mageinic.com>
 *
 * NOTICE OF LICENSE
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see https://opensource.org/licenses/gpl-3.0.html.
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category MageINIC
 * @package MageINIC_CookieNotification
 * @copyright Copyright (c) 2023 MageINIC (https://www.mageinic.com/)
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MageINIC <support@mageinic.com>
 */
namespace MageINIC\CookieNotification\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * MageINIC_CookieNotification Class Data
 */
class Data extends AbstractHelper
{
    public const COOKIE_NOTIFICATION = 'mageinic_cookienotification/general/enabledisable';
    public const POSITION            = 'mageinic_cookienotification/general/box_position';
    public const NOTICE_TITLE        = 'mageinic_cookienotification/general/notice_title';
    public const NOTICE_MESSAGE      = 'mageinic_cookienotification/general/notice_message';
    public const COOKIE_POLICY_URL   = 'mageinic_cookienotification/general/cookie_policy_url';
    public const BEHAVIOUR           = 'mageinic_cookienotification/general/behaviour';
    public const EXPIRE_COOKIE_DAY   = 'mageinic_cookienotification/general/expire_cookie_day';

    /**
     * Get CookieNotification
     *
     * @return mixed
     */
    public function getCookieNotification(): mixed
    {
        return $this->scopeConfig->getValue(
            self::COOKIE_NOTIFICATION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Position
     *
     * @return mixed
     */
    public function getPosition(): mixed
    {
        return $this->scopeConfig->getValue(
            self::POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Notice Title
     *
     * @return mixed
     */
    public function getNoticeTitle(): mixed
    {
        return $this->scopeConfig->getValue(
            self::NOTICE_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Notice Message
     *
     * @return mixed
     */
    public function getNoticeMessage(): mixed
    {
        return $this->scopeConfig->getValue(
            self::NOTICE_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get CookiePolicyUrl
     *
     * @return mixed
     */
    public function getCookiePolicyUrl(): mixed
    {
        return $this->scopeConfig->getValue(
            self::COOKIE_POLICY_URL,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Behaviour
     *
     * @return mixed
     */
    public function getBehaviour(): mixed
    {
        return $this->scopeConfig->getValue(
            self::BEHAVIOUR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get ExpireCookieDay
     *
     * @return mixed
     */
    public function getExpireCookieDay(): mixed
    {
        return $this->scopeConfig->getValue(
            self::EXPIRE_COOKIE_DAY,
            ScopeInterface::SCOPE_STORE
        );
    }
}
