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
     * Get CookieNotification Enable Disable
     *
     * @return mixed
     */
    public function enableDisable()
    {
        return $this->scopeConfig->getValue(
            self::ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->scopeConfig->getValue(
            self::TYPE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Bar Position
     *
     * @return mixed
     */
    public function getBarPosition()
    {
        return $this->scopeConfig->getValue(
            self::BAR_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Box Position
     *
     * @return mixed
     */
    public function getBoxPosition()
    {
        return $this->scopeConfig->getValue(
            self::BOX_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Behaviour
     *
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->scopeConfig->getValue(
            self::BEHAVIOUR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Auto Hide
     *
     * @return mixed
     */
    public function getAutohide()
    {
        return $this->scopeConfig->getValue(
            self::AUTO_HIDE_AFTER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Auto Accept
     *
     * @return mixed
     */
    public function getAutoAccept()
    {
        return $this->scopeConfig->getValue(
            self::AUTO_ACCEPT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Auto Expire
     *
     * @return mixed
     */
    public function getAutoExpire()
    {
        return $this->scopeConfig->getValue(
            self::EXPIRE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Show
     *
     * @return mixed
     */
    public function getShow()
    {
        return $this->scopeConfig->getValue(
            self::SHOW,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Custom Message
     *
     * @return mixed
     */
    public function getCustomMessage()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Title
     *
     * @return mixed
     */
    public function modelTitle()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Custom Accept
     *
     * @return mixed
     */
    public function getCustomAccept()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_ACCEPT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Custom Decline
     *
     * @return mixed
     */
    public function getCustomDecline()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_CLOSE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * New Tab
     *
     * @return mixed
     */
    public function newTab()
    {
        return $this->scopeConfig->getValue(
            self::NEWTAB,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * On Scroll
     *
     * @return mixed
     */
    public function onscroll()
    {
        return $this->scopeConfig->getValue(
            self::ONSCROLL,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Custom More Info
     *
     * @return mixed
     */
    public function getCustomMoreInfo()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_MORE_INFO,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Cms Page
     *
     * @return mixed
     */
    public function cmsPage()
    {
        return $this->scopeConfig->getValue(
            self::CMS_PAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Header Text Font Family
     *
     * @return mixed
     */
    public function headerTextFontFamily()
    {
        return $this->scopeConfig->getValue(
            self::FONT_FAMILY,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Text Align
     *
     * @return mixed
     */
    public function modelTextAlign()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TEXT_ALIGN,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Title Font Size
     *
     * @return mixed
     */
    public function modelTitleFontSize()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE_SIZE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Border
     *
     * @return mixed
     */
    public function modelBorder()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Container Top Border
     *
     * @return mixed
     */
    public function containerTopBorder()
    {
        return $this->scopeConfig->getValue(
            self::FOOTER_TOP_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Header Bottom Border
     *
     * @return mixed
     */
    public function headerBottomBorder()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BOTTOM_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Border Color
     *
     * @return mixed
     */
    public function modelBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Message Size
     *
     * @return mixed
     */
    public function modelMessageSize()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_MESSAGE_SIZE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Header Background Color
     *
     * @return mixed
     */
    public function headerBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Header Font Color
     *
     * @return mixed
     */
    public function headerFontColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_FONT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Header Bottom Border Color
     *
     * @return mixed
     */
    public function headerBottomBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BOTTOM_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Container Top Border Color
     *
     * @return mixed
     */
    public function containerTopBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::FOOTER_TOP_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Accept Button Background Color
     *
     * @return mixed
     */
    public function acceptButtonBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::ACCEPT_BUTTON_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Close Button Background Color
     *
     * @return mixed
     */
    public function closeButtonBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::CLOSE_BUTTON_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Policy Background Color
     *
     * @return mixed
     */
    public function policyBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::POLICY_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Close Button Color
     *
     * @return mixed
     */
    public function closeButtonColor()
    {
        return $this->scopeConfig->getValue(
            self::CLOSE_BUTTON_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Privacy Policy Color
     *
     * @return mixed
     */
    public function privacyPolicyColor()
    {
        return $this->scopeConfig->getValue(
            self::PRIVACY_POLICY_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Accept Button Color
     *
     * @return mixed
     */
    public function acceptButtonColor()
    {
        return $this->scopeConfig->getValue(
            self::ACCEPT_BUTTON_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Model Title Color
     *
     * @return mixed
     */
    public function modelTitleColor()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }
}
