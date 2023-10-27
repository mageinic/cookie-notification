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

use MageINIC\CookieNotification\Api\ConfigApiInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * MageINIC_CookieNotification class CookieNotification
 */
class CookieNotification implements ConfigApiInterface
{
    public const COOKIE_NOTIFICATION = 'mageinic_cookienotification/general/enabledisable';
    public const POSITION            = 'mageinic_cookienotification/general/box_position';
    public const NOTICE_TITLE        = 'mageinic_cookienotification/general/notice_title';
    public const NOTICE_MESSAGE      = 'mageinic_cookienotification/general/notice_message';
    public const COOKIE_POLICY_URL   = 'mageinic_cookienotification/general/cookie_policy_url';
    public const BEHAVIOUR           = 'mageinic_cookienotification/general/behaviour';
    public const EXPIRE_COOKIE_DAY   = 'mageinic_cookienotification/general/expire_cookie_day';

    /**
     * @var WriterInterface
     */
    protected WriterInterface $configWriter;

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * CookieNotification Constructor
     *
     * @param WriterInterface $configWriter
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        WriterInterface $configWriter,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->configWriter = $configWriter;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritdoc
     */
    public function getConfigValues(): array
    {
        $configValues[] = [
            'cookie_notification_enable' => $this->scopeConfig->getValue(self::COOKIE_NOTIFICATION),
            'box_position' => $this->scopeConfig->getValue(self::POSITION),
            'notice_title' => $this->scopeConfig->getValue(self::NOTICE_TITLE),
            'notice_message' => $this->scopeConfig->getValue(self::NOTICE_MESSAGE),
            'cookie_policy_url' => $this->scopeConfig->getValue(self::COOKIE_POLICY_URL),
            'behaviour' => $this->scopeConfig->getValue(self::BEHAVIOUR),
            'expire_cookie_day' => $this->scopeConfig->getValue(self::EXPIRE_COOKIE_DAY)
        ];

        return $configValues;
    }
}
