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
    public const ENABLE_DISABLE = 'enabledisable';
    public const TYPE = 'type';
    public const BAR_POSITION = 'bar_position';
    public const BOX_POSITION = 'box_position';
    public const BEHAVIOUR = 'behaviour';
    public const AUTO_HIDE_AFTER = 'auto_hide_after';
    public const AUTO_ACCEPT = 'auto_accept';
    public const EXPIRE = 'expire';
    public const SHOW = 'show';
    public const CUSTOM_MESSAGE = 'custom_message';
    public const MODEL_TITLE = 'model_title';
    public const CUSTOM_ACCEPT = 'custom_accept';
    public const CUSTOM_CLOSE = 'custom_close';
    public const CUSTOM_MORE_INFO = 'custom_more_info';
    public const NEWTAB = 'newtab';

    public const CMS_PAGE = 'cms_page';
    public const ONSCROLL = 'onscroll';
    public const FONT_FAMILY = 'font_family';
    public const MODEL_TEXT_ALIGN = 'model_text_align';
    public const MODEL_TITLE_SIZE = 'model_title_size';
    public const MODEL_BORDER = 'model_border';
    public const FOOTER_TOP_BORDER = 'continer_top_border';
    public const HEADER_BOTTOM_BORDER = 'container_bottom_border';
    public const MODEL_BORDER_COLOR = 'container_border_color';
    public const MODEL_MESSAGE_SIZE = 'model_message_size';
    public const HEADER_BACKGROUND_COLOR = 'header_background_color';
    public const HEADER_FONT_COLOR = 'header_font_color';
    public const HEADER_BOTTOM_BORDER_COLOR = 'header_bottom_border_color';
    public const FOOTER_TOP_BORDER_COLOR = 'footer_top_border_color';
    public const ACCEPT_BUTTON_BACKGROUND_COLOR = 'accept_button_background_color';
    public const CLOSE_BUTTON_BACKGROUND_COLOR = 'close_button_background_color';
    public const POLICY_BACKGROUND_COLOR = 'policy_button_background_color';
    public const CLOSE_BUTTON_COLOR = 'close_button_color';
    public const PRIVACY_POLICY_COLOR = 'privace_policy_color';
    public const ACCEPT_BUTTON_COLOR = 'accept_button_color';
    public const MODEL_TITLE_COLOR = 'model_title_color';

    /**
     * Get Enable Disable
     *
     * @return mixed
     */
    public function getEnableDisable();

    /**
     * Get Type
     *
     * @return mixed
     */
    public function getType();

    /**
     * Get cookie notification Bar Position
     *
     * @return mixed
     */
    public function getBarPosition();

    /**
     * Get cookie notification Box Position
     *
     * @return mixed
     */
    public function getBoxPosition();

    /**
     * Get cookie notification Behaviour
     *
     * @return mixed
     */
    public function getBehaviour();

    /**
     * Get cookie notification AutoHide
     *
     * @return mixed
     */
    public function getAutohide();

    /**
     * Get AutoAccept
     *
     * @return mixed
     */
    public function getAutoAccept();

    /**
     * Get Auto Expire
     *
     * @return mixed
     */
    public function getAutoExpire();

    /**
     * Get Show
     *
     * @return mixed
     */
    public function getShow();

    /**
     * Get Custom Message
     *
     * @return mixed
     */
    public function getCustomMessage();

    /**
     * Get Custom More Info
     *
     * @return mixed
     */
    public function getCustomMoreInfo();

    /**
     * Cms Page
     *
     * @return mixed
     */
    public function cmsPage();

    /**
     * Get Custom Accept
     *
     * @return mixed
     */
    public function getCustomAccept();

    /**
     * Get Custom Decline
     *
     * @return mixed
     */
    public function getCustomDecline();

    /**
     * Get Accept Button Background Color
     *
     * @return mixed
     */
    public function getAcceptButtonBackgroundColor();

    /**
     * Get Accept Button Color
     *
     * @return mixed
     */
    public function getAcceptButtonColor();

    /**
     * Get Privacy Policy Color
     *
     * @return mixed
     */
    public function getPrivacyPolicyColor();

    /**
     * Get Close Button Background Color
     *
     * @return mixed
     */
    public function getCloseButtonBackgroundColor();

    /**
     * Get On Scroll
     *
     * @return mixed
     */
    public function getOnscroll();

    /**
     * Get New Tab
     *
     * @return mixed
     */
    public function getNewTab();

    /**
     * Get Close Button Color
     *
     * @return mixed
     */
    public function getCloseButtonColor();

    /**
     * Get Header Background Color
     *
     * @return mixed
     */
    public function getHeaderBackgroundColor();

    /**
     * Get Header Font Color
     *
     * @return mixed
     */
    public function getHeaderFontColor();

    /**
     * Get Model Border
     *
     * @return mixed
     */
    public function getModelBorder();

    /**
     * Get Model Border Color
     *
     * @return mixed
     */
    public function getModelBorderColor();

    /**
     * Get Header Bottom Border
     *
     * @return mixed
     */
    public function getHeaderBottomBorder();

    /**
     * Get Header Bottom Border Color
     *
     * @return mixed
     */
    public function getHeaderBottomBorderColor();

    /**
     * Get Container Top Border
     *
     * @return mixed
     */
    public function getContainerTopBorder();

    /**
     * Get Policy Background Color
     *
     * @return mixed
     */
    public function getPolicyBackgroundColor();

    /**
     * Get Container Top Border Color
     *
     * @return mixed
     */
    public function getContainerTopBorderColor();

    /**
     * Get Header Text Font Family
     *
     * @return mixed
     */
    public function getHeaderTextFontFamily();

    /**
     * Get Model Title
     *
     * @return mixed
     */
    public function getModelTitle();

    /**
     * Get Model Title Color
     *
     * @return mixed
     */
    public function getModelTitleColor();

    /**
     * Get Model Title Font Size
     *
     * @return mixed
     */
    public function getModelTitleFontSize();

    /**
     * Get Model Message Size
     *
     * @return mixed
     */
    public function getModelMessageSize();

    /**
     * Get Model Text Align
     *
     * @return mixed
     */
    public function getModelTextAlign();

    /**
     * Set cookie notification Enable Disable
     *
     * @param mixed $enabledisable
     * @return mixed
     */
    public function setEnableDisable(mixed $enabledisable);

    /**
     * Set cookie notification Type
     *
     * @param mixed $type
     * @return mixed
     */
    public function setType(mixed $type);

    /**
     * Set cookie notification Bar Position
     *
     * @param mixed $barposition
     * @return mixed
     */
    public function setBarPosition(mixed $barposition);

    /**
     * Set cookie notification Box Position
     *
     * @param mixed $boxposition
     * @return mixed
     */
    public function setBoxPosition(mixed $boxposition);

    /**
     * Set cookie notification Behaviour
     *
     * @param mixed $behaviour
     * @return mixed
     */
    public function setBehaviour(mixed $behaviour);

    /**
     * Set cookie notification Auto Hide
     *
     * @param mixed $autohide
     * @return mixed
     */
    public function setAutohide(mixed $autohide);

    /**
     * Set cookie notification Auto Accept
     *
     * @param mixed $autoaccept
     * @return mixed
     */
    public function setAutoAccept(mixed $autoaccept);

    /**
     * Set cookie notification Auto Expire Cookie
     *
     * @param mixed $autoexpire
     * @return mixed
     */
    public function setAutoExpire(mixed $autoexpire);

    /**
     * Set cookie notification Show
     *
     * @param mixed $show
     * @return mixed
     */
    public function setShow(mixed $show);

    /**
     * Set cookie notification Custom Message
     *
     * @param mixed $custommessage
     * @return mixed
     */
    public function setCustomMessage(mixed $custommessage);

    /**
     * Set cookie notification Custom More Information
     *
     * @param mixed $custommoreinfo
     * @return mixed
     */
    public function setCustomMoreInfo(mixed $custommoreinfo);

    /**
     * Set cookie notification Cms Page
     *
     * @param mixed $cmspage
     * @return mixed
     */
    public function setCmsPage(mixed $cmspage);

    /**
     * Set cookie notification Custom Accept
     *
     * @param mixed $customaccept
     * @return mixed
     */
    public function setCustomAccept(mixed $customaccept);

    /**
     * Set cookie notification Custom Decline
     *
     * @param mixed $customdecline
     * @return mixed
     */
    public function setCustomDecline(mixed $customdecline);

    /**
     * Set Accept Button Background Color
     *
     * @param mixed $acceptbuttonbackgroundcolor
     * @return mixed
     */
    public function setAcceptButtonBackgroundColor(mixed $acceptbuttonbackgroundcolor);

    /**
     * Set Accept Button Color
     *
     * @param mixed $acceptbuttoncolor
     * @return mixed
     */
    public function setAcceptButtonColor(mixed $acceptbuttoncolor);

    /**
     * Set Privacy Policy Color
     *
     * @param mixed $privacypolicycolor
     * @return mixed
     */
    public function setPrivacyPolicyColor(mixed $privacypolicycolor);

    /**
     * Set Close Button Background Color
     *
     * @param mixed $closebuttonbackgroundcolor
     * @return mixed
     */
    public function setCloseButtonBackgroundColor(mixed $closebuttonbackgroundcolor);

    /**
     * Set On scroll
     *
     * @param mixed $onscroll
     * @return mixed
     */
    public function setOnscroll(mixed $onscroll);

    /**
     * Set New Tab
     *
     * @param mixed $newtab
     * @return mixed
     */
    public function setNewTab(mixed $newtab);

    /**
     * Set Close Button Color
     *
     * @param mixed $closebuttoncolor
     * @return mixed
     */
    public function setCloseButtonColor(mixed $closebuttoncolor);

    /**
     * Set Header Background Color
     *
     * @param mixed $headerbackgroundcolor
     * @return mixed
     */
    public function setHeaderBackgroundColor(mixed $headerbackgroundcolor);

    /**
     * Set Header Font Color
     *
     * @param mixed $headerfontcolor
     * @return mixed
     */
    public function setHeaderFontColor(mixed $headerfontcolor);

    /**
     * Set Model Border
     *
     * @param mixed $modelborder
     * @return mixed
     */
    public function setModelBorder(mixed $modelborder);

    /**
     * Set Model Border Color
     *
     * @param mixed $modelbordercolor
     * @return mixed
     */
    public function setModelBorderColor(mixed $modelbordercolor);

    /**
     * Set Header Bottom Border
     *
     * @param mixed $headerbottomborder
     * @return mixed
     */
    public function setHeaderBottomBorder(mixed $headerbottomborder);

    /**
     * Set Header Bottom Border Color
     *
     * @param mixed $headerbottombordercolor
     * @return mixed
     */
    public function setHeaderBottomBorderColor(mixed $headerbottombordercolor);

    /**
     * Set Container Top Border
     *
     * @param mixed $containertopborder
     * @return mixed
     */
    public function setContainerTopBorder(mixed $containertopborder);

    /**
     * Set Policy Background Color
     *
     * @param mixed $policybackgroundcolor
     * @return mixed
     */
    public function setPolicyBackgroundColor(mixed $policybackgroundcolor);

    /**
     * Set Container Top Border Color
     *
     * @param mixed $containertopbordercolor
     * @return mixed
     */
    public function setContainerTopBorderColor(mixed $containertopbordercolor);

    /**
     * Set Header Text Font Family
     *
     * @param mixed $headertextfontfamily
     * @return mixed
     */
    public function setHeaderTextFontFamily(mixed $headertextfontfamily);

    /**
     * Set Model Title
     *
     * @param mixed $modeltitle
     * @return mixed
     */
    public function setModelTitle(mixed $modeltitle);

    /**
     * Set Model Title Color
     *
     * @param mixed $modeltitlecoloe
     * @return mixed
     */
    public function setModelTitleColor(mixed $modeltitlecoloe);

    /**
     * Set Model Title Font Size
     *
     * @param mixed $modeltitlefontsize
     * @return mixed
     */
    public function setModelTitleFontSize(mixed $modeltitlefontsize);

    /**
     * Set Model Message Size
     *
     * @param mixed $modelmessagesize
     * @return mixed
     */
    public function setModelMessageSize(mixed $modelmessagesize);

    /**
     * Set Model Text Align
     *
     * @param mixed $modeltextalign
     * @return mixed
     */
    public function setModelTextAlign(mixed $modeltextalign);
}
