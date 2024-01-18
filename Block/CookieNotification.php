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

namespace MageINIC\CookieNotification\Block;

use MageINIC\CookieNotification\Model\System\Config\Source\Bar\BarPosition;
use MageINIC\CookieNotification\Helper\Data;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * MageINIC_CookieNotification Class CookieNotification
 */
class CookieNotification extends Template implements BlockInterface
{
    /**
     * @var Data
     */
    private Data $moduleHelper;

    /**
     * @var StoreManagerInterface
     */
    private StoreManagerInterface $storeManager;

    /**
     * CookieNotification constructor.
     *
     * @param Template\Context $context
     * @param Data $moduleHelper
     * @param StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $moduleHelper,
        StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleHelper =$moduleHelper;
        $this->storeManager=$storeManager;
    }

    /**
     * Get Urls
     *
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getUrls()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    /**
     * Get Cookie Notification
     *
     * @return mixed
     */
    public function enableDisable()
    {
        return $this->moduleHelper->enableDisable();
    }

    /**
     * Get Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->moduleHelper->getType();
    }

    /**
     * Get Bar Position
     *
     * @return mixed
     */
    public function getBarPosition()
    {
        return $this->moduleHelper->getBarPosition();
    }

    /**
     * Get Box Position
     *
     * @return mixed
     */
    public function getBoxPosition()
    {
        return $this->moduleHelper->getBoxPosition();
    }

    /**
     * Get Behaviour
     *
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->moduleHelper->getBehaviour();
    }

    /**
     * Get Auto hide
     *
     * @return mixed
     */
    public function getAutohide()
    {
        return $this->moduleHelper->getAutohide();
    }

    /**
     * Get Auto Accept
     *
     * @return mixed
     */
    public function getAutoAccept()
    {
        return $this->moduleHelper->getAutoAccept();
    }

    /**
     * Get Auto Expire
     *
     * @return mixed
     */
    public function getAutoExpire()
    {
        return $this->moduleHelper->getAutoExpire();
    }

    /**
     * Get Show
     *
     * @return mixed
     */
    public function getShow()
    {
        return $this->moduleHelper->getShow();
    }

    /**
     * Get Custom Message
     *
     * @return mixed
     */
    public function getCustomMessage()
    {
        return $this->moduleHelper->getCustomMessage();
    }

    /**
     * Get Custom More Info
     *
     * @return mixed
     */
    public function getCustomMoreInfo()
    {
        return $this->moduleHelper->getCustomMoreInfo();
    }

    /**
     * Cms Page
     *
     * @return mixed
     */
    public function cmsPage()
    {
        return $this->moduleHelper->cmsPage();
    }

    /**
     * Get Custom Accept
     *
     * @return mixed
     */
    public function getCustomAccept()
    {
        return $this->moduleHelper->getCustomAccept();
    }

    /**
     * Get Custom Decline
     *
     * @return mixed
     */
    public function getCustomDecline()
    {
        return $this->moduleHelper->getCustomDecline();
    }

    /**
     * Accept Button Background Color
     *
     * @return mixed
     */
    public function acceptButtonBackgroundColor()
    {
        return $this->moduleHelper->acceptButtonBackgroundColor();
    }

    /**
     * Accept Button Color
     *
     * @return mixed
     */
    public function acceptButtonColor()
    {
        return $this->moduleHelper->acceptButtonColor();
    }

    /**
     * Privacy Policy Color
     *
     * @return mixed
     */
    public function privacyPolicyColor()
    {
        return $this->moduleHelper->privacyPolicyColor();
    }

    /**
     * Close Button Background Color
     *
     * @return mixed
     */
    public function closeButtonBackgroundColor()
    {
        return $this->moduleHelper->closeButtonBackgroundColor();
    }

    /**
     * On Scroll
     *
     * @return mixed
     */
    public function onscroll()
    {
        return $this->moduleHelper->onscroll();
    }

    /**
     * New Tab
     *
     * @return mixed
     */
    public function newTab()
    {
        return $this->moduleHelper->newTab();
    }

    /**
     * Close Button Color
     *
     * @return mixed
     */
    public function closeButtonColor()
    {
        return $this->moduleHelper->closeButtonColor();
    }

    /**
     * Header Background Color
     *
     * @return mixed
     */
    public function headerBackgroundColor()
    {
        return $this->moduleHelper->headerBackgroundColor();
    }

    /**
     * Header Font Color
     *
     * @return mixed
     */
    public function headerFontColor()
    {
        return $this->moduleHelper->headerFontColor();
    }

    /**
     * Model Border
     *
     * @return mixed
     */
    public function modelBorder()
    {
        return $this->moduleHelper->modelBorder();
    }

    /**
     * Model Border Color
     *
     * @return mixed
     */
    public function modelBorderColor()
    {
        return $this->moduleHelper->modelBorderColor();
    }

    /**
     * Header Bottom Border
     *
     * @return mixed
     */
    public function headerBottomBorder()
    {
        return $this->moduleHelper->headerBottomBorder();
    }

    /**
     * Header Bottom Border Color
     *
     * @return mixed
     */
    public function headerBottomBorderColor()
    {
        return $this->moduleHelper->headerBottomBorderColor();
    }

    /**
     * Container Top Border
     *
     * @return mixed
     */
    public function containerTopBorder()
    {
        return $this->moduleHelper->containerTopBorder();
    }

    /**
     * Policy Background Color
     *
     * @return mixed
     */
    public function policyBackgroundColor()
    {
        return $this->moduleHelper->policyBackgroundColor();
    }

    /**
     * Container Top Border Color
     *
     * @return mixed
     */
    public function containerTopBorderColor()
    {
        return $this->moduleHelper->containerTopBorderColor();
    }

    /**
     * Header Text Font Family
     *
     * @return mixed
     */
    public function headerTextFontFamily()
    {
        return $this->moduleHelper->headerTextFontFamily();
    }

    /**
     * Model Title
     *
     * @return mixed
     */
    public function modelTitle()
    {
        return $this->moduleHelper->modelTitle();
    }

    /**
     * Model Title Color
     *
     * @return mixed
     */
    public function modelTitleColor()
    {
        return $this->moduleHelper->modelTitleColor();
    }

    /**
     * Model Title Font Size
     *
     * @return mixed
     */
    public function modelTitleFontSize()
    {
        return $this->moduleHelper->modelTitleFontSize();
    }

    /**
     * Model Message Size
     *
     * @return mixed
     */
    public function modelMessageSize()
    {
        return $this->moduleHelper->modelMessageSize();
    }

    /**
     * Model Text Align
     *
     * @return mixed
     */
    public function modelTextAlign()
    {
        return $this->moduleHelper->modelTextAlign();
    }

    /**
     * To Html
     *
     * @return string
     */
    public function toHtml(): string
    {
        if (!$this->moduleHelper->enableDisable() ||
            ($this->getNameInLayout() == 'mageinic_cookienotification_top'
                && $this->moduleHelper->getBarPosition() != BarPosition::TOP)
            || ($this->getNameInLayout() == 'mageinic_Cookienotification_bottom'
                && $this->moduleHelper->getBarPosition() != BarPosition::BOTTOM)
        ) {
            return '';
        }
        return parent::toHtml();
    }
}
