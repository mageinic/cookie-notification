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
namespace MageINIC\CookieNotification\Model\System\Config\Source;

use Magento\Cms\Model\Config\Source\Page as SourcePage;

/**
 * MageINIC_CookieNotification Class Page
 */
class Page extends SourcePage
{
    /**
     * To OptionArray
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        if (!$this->options) {
            $emptyOption[] = ['value' => '', 'label' => 'Select Any One'];
            $this->options = $this->collectionFactory->create()->toOptionIdArray();
            $this->options = array_merge($emptyOption, $this->options);
        }
        return $this->options;
    }
}
