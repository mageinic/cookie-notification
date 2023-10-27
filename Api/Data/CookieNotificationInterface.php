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

namespace MageINIC\CookieNotification\Api\Data;

/**
 * interface CookieNotificationInterface
 */
interface CookieNotificationInterface
{
    public const COOKIENOTIFICATION = 'cookie_notification';
    public const POSITION = 'position';
    public const NOTIFICATIONTITLE = 'notification_title';
    public const NOTICEMESSAGE = 'notice_message';
    public const COOKIEPOLICYURL = 'cookie_policy_url';
    public const BEHAVIOUR = 'Behaviour';
    public const EXPIRECOOKIEDAY = 'expire_cookie_day';

    /**
     * Get cookie notification status
     *
     * @return bool
     */
    public function getCookieNotification(): bool;

    /**
     * Get cookie notification Position
     *
     * @return mixed
     */
    public function getPosition(): mixed;

    /**
     * Get cookie notification Title
     *
     * @return mixed
     */
    public function getNoticeTitle(): mixed;

    /**
     * Get cookie notification Message
     *
     * @return mixed
     */
    public function getNoticeMessage(): mixed;

    /**
     * Get cookie notification Policy url
     *
     * @return mixed
     */
    public function getCookiePolicyUrl(): mixed;

    /**
     * Get cookie notification Behaviour
     *
     * @return mixed
     */
    public function getBehaviour(): mixed;

    /**
     * Get cookie notification Expire Cookie Day
     *
     * @return mixed
     */
    public function getExpireCookieDay(): mixed;

    /**
     * @param $cookienotification
     * @return bool
     */
    public function setCookieNotification($cookienotification): bool;

    /**
     * Set cookie notification Position
     *
     * @param $position
     * @return mixed
     */
    public function setPosition($position): mixed;

    /**
     * Set cookie notification Title
     *
     * @param $title
     * @return mixed
     */
    public function setNoticeTitle($title): mixed;

    /**
     * Set cookie notification Message
     *
     * @param $message
     * @return mixed
     */
    public function setNoticeMessage($message): mixed;

    /**
     * Set cookie notification Policy url
     *
     * @param $policyurl
     * @return mixed
     */
    public function setCookiePolicyUrl($policyurl): mixed;

    /**
     * Set cookie notification Behaviour
     *
     * @param $behaviour
     * @return mixed
     */
    public function setBehaviour($behaviour): mixed;

    /**
     * Set cookie notification Expire Cookie Day
     *
     * @param $cookieday
     * @return mixed
     */
    public function setExpireCookieDay($cookieday): mixed;
}
