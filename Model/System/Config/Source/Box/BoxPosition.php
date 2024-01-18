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

namespace MageINIC\CookieNotification\Model\System\Config\Source\Box;

use Magento\Framework\Option\ArrayInterface;

/**
 * Cookie Notification Class BoxPosition
 */
class BoxPosition implements ArrayInterface
{
    public const TOPLEFT = 'v-top-left';
    public const TOPRIGHT = 'v-top-right';
    public const BOTTOMLEFT = 'v-bottom-left';
    public const BOTTOMRIGHT = 'v-bottom-right';
    public const CENTER = 'v-center';

    /**
     * To Option Array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOPLEFT, 'label' => __('Top left')],
            ['value' => self::TOPRIGHT, 'label' => __('Top right')],
            ['value' => self::BOTTOMLEFT, 'label' => __('Bottom left')],
            ['value' => self::BOTTOMRIGHT, 'label' => __('Bottom right')],
            ['value' => self::CENTER, 'label' => __('Center')]
        ];
    }
}
