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
    public const ENABLE_DISABLE = 'cookienotification/general/enabledisable';
    public const TYPE = 'cookienotification/general/type';
    public const BAR_POSITION = 'cookienotification/general/bar_position';
    public const BOX_POSITION = 'cookienotification/general/box_position';
    public const BEHAVIOUR = 'cookienotification/general/behaviour';
    public const AUTO_HIDE_AFTER = 'cookienotification/general/auto_hide_after';
    public const AUTO_ACCEPT = 'cookienotification/general/auto_accept';
    public const EXPIRE = 'cookienotification/general/expire';
    public const SHOW = 'cookienotification/content/show';
    public const CUSTOM_MESSAGE = 'cookienotification/content/custom_message';
    public const MODEL_TITLE = 'cookienotification/content/model_title';
    public const CUSTOM_ACCEPT = 'cookienotification/content/custom_accept';
    public const CUSTOM_CLOSE = 'cookienotification/content/custom_close';
    public const CUSTOM_MORE_INFO = 'cookienotification/content/custom_more_info';
    public const NEWTAB = 'cookienotification/content/newtab';
    public const CMS_PAGE = 'cookienotification/content/cms_page';
    public const ONSCROLL = 'cookienotification/general/onscroll';
    public const FONT_FAMILY = 'cookienotification/popup_style/font_family';
    public const MODEL_TEXT_ALIGN = 'cookienotification/popup_style/model_text_align';
    public const MODEL_TITLE_SIZE = 'cookienotification/popup_style/model_title_size';
    public const MODEL_BORDER = 'cookienotification/popup_style/model_border';
    public const FOOTER_TOP_BORDER = 'cookienotification/popup_style/continer_top_border';
    public const HEADER_BOTTOM_BORDER = 'cookienotification/popup_style/container_bottom_border';
    public const MODEL_BORDER_COLOR = 'cookienotification/popup_style/container_border_color';
    public const MODEL_MESSAGE_SIZE = 'cookienotification/popup_style/model_message_size';
    public const HEADER_BACKGROUND_COLOR = 'cookienotification/popup_style/header_background_color';
    public const HEADER_FONT_COLOR = 'cookienotification/popup_style/header_font_color';
    public const HEADER_BOTTOM_BORDER_COLOR = 'cookienotification/popup_style/header_bottom_border_color';
    public const FOOTER_TOP_BORDER_COLOR = 'cookienotification/popup_style/footer_top_border_color';
    public const ACCEPT_BUTTON_BACKGROUND_COLOR = 'cookienotification/popup_style/accept_button_background_color';
    public const CLOSE_BUTTON_BACKGROUND_COLOR = 'cookienotification/popup_style/close_button_background_color';
    public const POLICY_BACKGROUND_COLOR = 'cookienotification/popup_style/policy_button_background_color';
    public const CLOSE_BUTTON_COLOR = 'cookienotification/popup_style/close_button_color';
    public const PRIVACY_POLICY_COLOR = 'cookienotification/popup_style/privace_policy_color';
    public const ACCEPT_BUTTON_COLOR = 'cookienotification/popup_style/accept_button_color';
    public const MODEL_TITLE_COLOR = 'cookienotification/popup_style/model_title_color';

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
            'enabledisable' => $this->scopeConfig->getValue(self::ENABLE_DISABLE),
            'type' => $this->scopeConfig->getValue(self::TYPE),
            'bar_position' => $this->scopeConfig->getValue(self::BAR_POSITION),
            'box_position' => $this->scopeConfig->getValue(self::BOX_POSITION),
            'auto_hide_after' => $this->scopeConfig->getValue(self::AUTO_HIDE_AFTER),
            'behaviour' => $this->scopeConfig->getValue(self::BEHAVIOUR),
            'auto_accept' => $this->scopeConfig->getValue(self::AUTO_ACCEPT),
            'expire' => $this->scopeConfig->getValue(self::EXPIRE),
            'show' => $this->scopeConfig->getValue(self::SHOW),
            'custom_message' => $this->scopeConfig->getValue(self::CUSTOM_MESSAGE),
            'model_title' => $this->scopeConfig->getValue(self::MODEL_TITLE),
            'custom_accept' => $this->scopeConfig->getValue(self::CUSTOM_ACCEPT),
            'custom_close' => $this->scopeConfig->getValue(self::CUSTOM_CLOSE),
            'custom_more_info' => $this->scopeConfig->getValue(self::CUSTOM_MORE_INFO),
            'newtab' => $this->scopeConfig->getValue(self::NEWTAB),
            'cms_page' => $this->scopeConfig->getValue(self::CMS_PAGE),
            'onscroll' => $this->scopeConfig->getValue(self::ONSCROLL),
            'font_family' => $this->scopeConfig->getValue(self::FONT_FAMILY),
            'model_text_align' => $this->scopeConfig->getValue(self::MODEL_TEXT_ALIGN),
            'model_title_size' => $this->scopeConfig->getValue(self::MODEL_TITLE_SIZE),
            'model_border' => $this->scopeConfig->getValue(self::MODEL_BORDER),
            'continer_top_border' => $this->scopeConfig->getValue(self::FOOTER_TOP_BORDER),
            'container_bottom_border' => $this->scopeConfig->getValue(self::HEADER_BOTTOM_BORDER),
            'container_border_color' => $this->scopeConfig->getValue(self::MODEL_BORDER_COLOR),
            'model_message_size' => $this->scopeConfig->getValue(self::MODEL_MESSAGE_SIZE),
            'header_background_color' => $this->scopeConfig->getValue(self::HEADER_BACKGROUND_COLOR),
            'header_font_color' => $this->scopeConfig->getValue(self::HEADER_FONT_COLOR),
            'header_bottom_border_color' => $this->scopeConfig->getValue(self::HEADER_BOTTOM_BORDER_COLOR),
            'footer_top_border_color' => $this->scopeConfig->getValue(self::FOOTER_TOP_BORDER_COLOR),
            'close_button_background_color' => $this->scopeConfig->getValue(self::CLOSE_BUTTON_BACKGROUND_COLOR),
            'accept_button_background_color' => $this->scopeConfig->getValue(self::ACCEPT_BUTTON_BACKGROUND_COLOR),
            'policy_button_background_color' => $this->scopeConfig->getValue(self::POLICY_BACKGROUND_COLOR),
            'close_button_color' => $this->scopeConfig->getValue(self::CLOSE_BUTTON_COLOR),
            'privace_policy_color' => $this->scopeConfig->getValue(self::PRIVACY_POLICY_COLOR),
            'accept_button_color' => $this->scopeConfig->getValue(self::ACCEPT_BUTTON_COLOR),
            'model_title_color' => $this->scopeConfig->getValue(self::MODEL_TITLE_COLOR)
        ];

        return $configValues;
    }
}
