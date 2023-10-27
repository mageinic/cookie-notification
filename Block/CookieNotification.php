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

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use MageINIC\CookieNotification\Helper\Data;
use MageINIC\CookieNotification\Model\System\Config\Source\Box\Position;
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
     * Get Cookie Notification
     *
     * @return mixed
     */
    public function getCookieNotification(): mixed
    {
        return $this->moduleHelper->getCookieNotification();
    }

    /**
     * Get Position
     *
     * @return mixed
     */
    public function getPosition(): mixed
    {
        return $this->moduleHelper->getPosition();
    }

    /**
     * Get NoticeTitle
     *
     * @return mixed
     */
    public function getNoticeTitle(): mixed
    {
        return $this->moduleHelper->getNoticeTitle();
    }

    /**
     * Get NoticeMessage
     *
     * @return mixed
     */
    public function getNoticeMessage(): mixed
    {
        return $this->moduleHelper->getNoticeMessage();
    }

    /**
     * Get CookiePolicyUrl
     *
     * @return string
     * @throws NoSuchEntityException
     */
    public function getCookiePolicyUrl(): string
    {
        return $this->storeManager->getStore()->getBaseUrl() .$this->moduleHelper->getCookiePolicyUrl();
    }

    /**
     * Get Behaviour
     *
     * @return mixed
     */
    public function getBehaviour(): mixed
    {
        return $this->moduleHelper->getBehaviour();
    }

    /**
     * Get ExpireCookieDay
     *
     * @return mixed
     */
    public function getExpireCookieDay(): mixed
    {
        return $this->moduleHelper->getExpireCookieDay();
    }

    /**
     * To Html
     *
     * @return string
     */
    public function toHtml(): string
    {
        if (!$this->moduleHelper->getCookieNotification() ||
            ($this->getNameInLayout() == 'mageinic_cookienotification_top'
                && $this->moduleHelper->getPosition() != Position::TOP)
            || ($this->getNameInLayout() == 'mageinic_Cookienotification_bottom'
                && $this->moduleHelper->getPosition() != Position::BOTTOM)
        ) {
            return '';
        }
        return parent::toHtml();
    }
}
