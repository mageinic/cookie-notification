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
    public function getEnableDisable()
    {
        return $this->getData(self::ENABLE_DISABLE);
    }

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * @inheritdoc
     */
    public function getBarPosition()
    {
        return $this->getData(self::BAR_POSITION);
    }

    /**
     * @inheritdoc
     */
    public function getBoxPosition()
    {
        return $this->getData(self::BOX_POSITION);
    }

    /**
     * @inheritdoc
     */
    public function getBehaviour()
    {
        return $this->getData(self::BEHAVIOUR);
    }

    /**
     * @inheritdoc
     */
    public function getAutohide()
    {
        return $this->getData(self::AUTO_HIDE_AFTER);
    }

    /**
     * @inheritdoc
     */
    public function getAutoAccept()
    {
        return $this->getData(self::AUTO_ACCEPT);
    }

    /**
     * @inheritdoc
     */
    public function getAutoExpire()
    {
        return $this->getData(self::EXPIRE);
    }

    /**
     * @inheritdoc
     */
    public function getShow()
    {
        return $this->getData(self::SHOW);
    }

    /**
     * @inheritdoc
     */
    public function getCustomMessage()
    {
        return $this->getData(self::CUSTOM_MESSAGE);
    }

    /**
     * @inheritdoc
     */
    public function getModelTitle()
    {
        return $this->getData(self::MODEL_TITLE);
    }

    /**
     * @inheritdoc
     */
    public function getCustomAccept()
    {
        return $this->getData(self::CUSTOM_ACCEPT);
    }

    /**
     * @inheritdoc
     */
    public function getCustomDecline()
    {
        return $this->getData(self::CUSTOM_CLOSE);
    }

    /**
     * @inheritdoc
     */
    public function getCustomMoreInfo()
    {
        return $this->getData(self::CUSTOM_MORE_INFO);
    }

    /**
     * @inheritdoc
     */
    public function getNewTab()
    {
        return $this->getData(self::NEWTAB);
    }

    /**
     * @inheritdoc
     */
    public function cmsPage()
    {
        return $this->getData(self::CMS_PAGE);
    }

    /**
     * @inheritdoc
     */
    public function getOnscroll()
    {
        return $this->getData(self::ONSCROLL);
    }

    /**
     * @inheritdoc
     */
    public function getHeaderTextFontFamily()
    {
        return $this->getData(self::FONT_FAMILY);
    }

    /**
     * @inheritdoc
     */
    public function getModelTextAlign()
    {
        return $this->getData(self::MODEL_TEXT_ALIGN);
    }

    /**
     * @inheritdoc
     */
    public function getModelTitleFontSize()
    {
        return $this->getData(self::MODEL_TITLE_SIZE);
    }

    /**
     * @inheritdoc
     */
    public function getModelBorder()
    {
        return $this->getData(self::MODEL_BORDER);
    }

    /**
     * @inheritdoc
     */
    public function getContainerTopBorder()
    {
        return $this->getData(self::FOOTER_TOP_BORDER);
    }

    /**
     * @inheritdoc
     */
    public function getHeaderBottomBorder()
    {
        return $this->getData(self::HEADER_BOTTOM_BORDER);
    }

    /**
     * @inheritdoc
     */
    public function getModelBorderColor()
    {
        return $this->getData(self::MODEL_BORDER_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getModelMessageSize()
    {
        return $this->getData(self::MODEL_MESSAGE_SIZE);
    }

    /**
     * @inheritdoc
     */
    public function getHeaderBackgroundColor()
    {
        return $this->getData(self::HEADER_BACKGROUND_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getHeaderFontColor()
    {
        return $this->getData(self::HEADER_FONT_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getHeaderBottomBorderColor()
    {
        return $this->getData(self::HEADER_BOTTOM_BORDER_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getContainerTopBorderColor()
    {
        return $this->getData(self::FOOTER_TOP_BORDER_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getAcceptButtonBackgroundColor()
    {
        return $this->getData(self::ACCEPT_BUTTON_BACKGROUND_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getCloseButtonBackgroundColor()
    {
        return $this->getData(self::CLOSE_BUTTON_BACKGROUND_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getPolicyBackgroundColor()
    {
        return $this->getData(self::POLICY_BACKGROUND_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getCloseButtonColor()
    {
        return $this->getData(self::CLOSE_BUTTON_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getPrivacyPolicyColor()
    {
        return $this->getData(self::PRIVACY_POLICY_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getAcceptButtonColor()
    {
        return $this->getData(self::ACCEPT_BUTTON_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function getModelTitleColor()
    {
        return $this->getData(self::MODEL_TITLE_COLOR);
    }

    /**
     * @inheritdoc
     */
    public function setEnableDisable($enabledisable): bool
    {
        return $this->getData(self::ENABLE_DISABLE, $enabledisable);
    }

    /**
     * @inheritdoc
     */
    public function setType($type)
    {
        return $this->getData(self::TYPE, $type);
    }

    /**
     * @inheritdoc
     */
    public function setBarPosition($barposition)
    {
        return $this->getData(self::BAR_POSITION, $barposition);
    }

    /**
     * @inheritdoc
     */
    public function setBoxPosition($boxposition)
    {
        return $this->getData(self::BOX_POSITION, $boxposition);
    }

    /**
     * @inheritdoc
     */
    public function setBehaviour($behaviour)
    {
        return $this->getData(self::BEHAVIOUR, $behaviour);
    }

    /**
     * @inheritdoc
     */
    public function setAutohide($autohide)
    {
        return $this->getData(self::AUTO_HIDE_AFTER, $autohide);
    }

    /**
     * @inheritdoc
     */
    public function setAutoAccept($autoaccept)
    {
        return $this->getData(self::AUTO_ACCEPT, $autoaccept);
    }

    /**
     * @inheritdoc
     */
    public function setAutoExpire($autoexpire)
    {
        return $this->getData(self::EXPIRE, $autoexpire);
    }

    /**
     * @inheritdoc
     */
    public function setShow($show)
    {
        return $this->getData(self::SHOW, $show);
    }

    /**
     * @inheritdoc
     */
    public function setCustomMessage($custommessage)
    {
        return $this->getData(self::CUSTOM_MESSAGE, $custommessage);
    }

    /**
     * @inheritdoc
     */
    public function setModelTitle($modeltitle)
    {
        return $this->getData(self::MODEL_TITLE, $modeltitle);
    }

    /**
     * @inheritdoc
     */
    public function setCustomAccept($customaccept)
    {
        return $this->getData(self::CUSTOM_ACCEPT, $customaccept);
    }

    /**
     * @inheritdoc
     */
    public function setCustomDecline($customdecline)
    {
        return $this->getData(self::CUSTOM_CLOSE, $customdecline);
    }

    /**
     * @inheritdoc
     */
    public function setCustomMoreInfo($custommoreinfo)
    {
        return $this->getData(self::CUSTOM_MORE_INFO, $custommoreinfo);
    }

    /**
     * @inheritdoc
     */
    public function setNewTab($newtab)
    {
        return $this->getData(self::NEWTAB, $newtab);
    }

    /**
     * @inheritdoc
     */
    public function setCmsPage($cmspage)
    {
        return $this->getData(self::CMS_PAGE, $cmspage);
    }

    /**
     * @inheritdoc
     */
    public function setOnscroll($onscroll)
    {
        return $this->getData(self::ONSCROLL, $onscroll);
    }

    /**
     * @inheritdoc
     */
    public function setHeaderTextFontFamily($headertextfontfamily)
    {
        return $this->getData(self::FONT_FAMILY, $headertextfontfamily);
    }

    /**
     * @inheritdoc
     */
    public function setModelTextAlign(mixed $modeltextalign)
    {
        return $this->getData(self::MODEL_TEXT_ALIGN, $modeltextalign);
    }

    /**
     * @inheritdoc
     */
    public function setModelTitleFontSize($modeltitlefontsize)
    {
        return $this->getData(self::MODEL_TITLE_SIZE, $modeltitlefontsize);
    }

    /**
     * @inheritdoc
     */
    public function setModelBorder($modelborder)
    {
        return $this->getData(self::MODEL_BORDER, $modelborder);
    }

    /**
     * @inheritdoc
     */
    public function setContainerTopBorder($containertopborder)
    {
        return $this->getData(self::FOOTER_TOP_BORDER, $containertopborder);
    }

    /**
     * @inheritdoc
     */
    public function setHeaderBottomBorder($headerbottomborder)
    {
        return $this->getData(self::HEADER_BOTTOM_BORDER, $headerbottomborder);
    }

    /**
     * @inheritdoc
     */
    public function setModelBorderColor($modelbordercolor)
    {
        return $this->getData(self::MODEL_BORDER_COLOR, $modelbordercolor);
    }

    /**
     * @inheritdoc
     */
    public function setModelMessageSize($modelmessagesize)
    {
        return $this->getData(self::MODEL_MESSAGE_SIZE, $modelmessagesize);
    }

    /**
     * @inheritdoc
     */
    public function setHeaderBackgroundColor($headerbackgroundcolor)
    {
        return $this->getData(self::HEADER_BACKGROUND_COLOR, $headerbackgroundcolor);
    }

    /**
     * @inheritdoc
     */
    public function setHeaderFontColor($headerfontcolor)
    {
        return $this->getData(self::HEADER_FONT_COLOR, $headerfontcolor);
    }

    /**
     * @inheritdoc
     */
    public function setHeaderBottomBorderColor($headerbottombordercolor)
    {
        return $this->getData(self::HEADER_BOTTOM_BORDER_COLOR, $headerbottombordercolor);
    }

    /**
     * @inheritdoc
     */
    public function setContainerTopBorderColor($containertopbordercolor)
    {
        return $this->getData(self::FOOTER_TOP_BORDER_COLOR, $containertopbordercolor);
    }

    /**
     * @inheritdoc
     */
    public function setAcceptButtonBackgroundColor($acceptbuttonbackgroundcolor)
    {
        return $this->getData(self::ACCEPT_BUTTON_BACKGROUND_COLOR, $acceptbuttonbackgroundcolor);
    }

    /**
     * @inheritdoc
     */
    public function setCloseButtonBackgroundColor($closebuttonbackgroundcolor)
    {
        return $this->getData(self::CLOSE_BUTTON_BACKGROUND_COLOR, $closebuttonbackgroundcolor);
    }

    /**
     * @inheritdoc
     */
    public function setPolicyBackgroundColor($policybackgroundcolor)
    {
        return $this->getData(self::POLICY_BACKGROUND_COLOR, $policybackgroundcolor);
    }

    /**
     * @inheritdoc
     */
    public function setCloseButtonColor($closebuttoncolor)
    {
        return $this->getData(self::CLOSE_BUTTON_COLOR, $closebuttoncolor);
    }

    /**
     * @inheritdoc
     */
    public function setPrivacyPolicyColor($privacypolicycolor)
    {
        return $this->getData(self::PRIVACY_POLICY_COLOR, $privacypolicycolor);
    }

    /**
     * @inheritdoc
     */
    public function setAcceptButtonColor($acceptbuttoncolor)
    {
        return $this->getData(self::ACCEPT_BUTTON_COLOR, $acceptbuttoncolor);
    }

    /**
     * @inheritdoc
     */
    public function setModelTitleColor($modeltitlecoloe)
    {
        return $this->getData(self::MODEL_TITLE_COLOR, $modeltitlecoloe);
    }
}
