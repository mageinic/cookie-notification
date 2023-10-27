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

namespace MageINIC\CookieNotification\Model;

use MageINIC\CookieNotification\Api\Data\CookieNotificationInterface;
use Magento\Framework\DataObject;

/**
 * MageINIC_CookieNotification class CookieNotificationModal
 */
class CookieNotificationModal extends DataObject implements CookieNotificationInterface
{
    /**
     * @inheritdoc
     */
    public function getCookieNotification(): bool
    {
        return $this->getData(self::COOKIENOTIFICATION);
    }

    /**
     * @inheritdoc
     */
    public function getPosition(): mixed
    {
        return $this->getData(self::POSITION);
    }

    /**
     * @inheritdoc
     */
    public function getNoticeTitle(): mixed
    {
        return $this->getData(self::NOTIFICATIONTITLE);
    }

    /**
     * @inheritdoc
     */
    public function getNoticeMessage(): mixed
    {
        return $this->getData(self::NOTICEMESSAGE);
    }

    /**
     * @inheritdoc
     */
    public function getCookiePolicyUrl(): mixed
    {
        return $this->getData(self::COOKIEPOLICYURL);
    }

    /**
     * @inheritdoc
     */
    public function getBehaviour(): mixed
    {
        return $this->getData(self::BEHAVIOUR);
    }

    /**
     * @inheritdoc
     */
    public function getExpireCookieDay(): mixed
    {
        return $this->getData(self::EXPIRECOOKIEDAY);
    }

    /**
     * @inheritdoc
     */
    public function setCookieNotification($cookienotification): bool
    {
        return $this->getData(self::COOKIENOTIFICATION, $cookienotification);
    }

    /**
     * @inheritdoc
     */
    public function setPosition($position): mixed
    {
        return $this->getData(self::POSITION, $position);
    }

    /**
     * @inheritdoc
     */
    public function setNoticeTitle($title): mixed
    {
        return $this->getData(self::NOTIFICATIONTITLE, $title);
    }

    /**
     * @inheritdoc
     */
    public function setNoticeMessage($message): mixed
    {
        return $this->getData(self::NOTICEMESSAGE, $message);
    }

    /**
     * @inheritdoc
     */
    public function setCookiePolicyUrl($policyurl): mixed
    {
        return $this->getData(self::COOKIEPOLICYURL, $policyurl);
    }

    /**
     * @inheritdoc
     */
    public function setBehaviour($behaviour): mixed
    {
        return $this->getData(self::BEHAVIOUR, $behaviour);
    }

    /**
     * @inheritdoc
     */
    public function setExpireCookieDay($cookieday): mixed
    {
        return $this->getData(self::EXPIRECOOKIEDAY, $cookieday);
    }
}
