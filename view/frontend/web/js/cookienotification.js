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
define([
    'jquery',
    'mage/cookies'
], function ($) {
    'use strict';

    return function(config) {
        function setCookie(behaviour, expire) {
            if ($("#m-cookienotice").css({ display: "block" })) {
                if (behaviour) {
                    var dayCount = behaviour + expire;
                    var d = new Date();
                    d.setTime(d.getTime() + (dayCount * 24 * 60 * 60 * 1000));
                    var expires = "expires=" + d.toUTCString();
                    document.cookie = "MageINICCookie" + "=" + "true" + ";" + expires + ";path=/";
                    $("#m-cookienotice").css({ display: "none" });
                }

                if (behaviour == 0) {
                    document.cookie = "MageINICCookie" + "=" + "true" + ";path=/";
                    $("#m-cookienotice").css({ display: "none" });
                }
            }
        }

        var position = config.position;
        var behaviour = config.behaviour;
        var expire = config.expire;

        if (expire === 0 || expire === '0') {
            expire = 1;
        } else {
            expire = expire;
        }

        if (position == 1) {
            $('#m-cookienotice').addClass('bottom');
            $("body").append($("#m-cookienotice-main").html());
            $("#m-cookienotice-main #m-cookienotice").remove();
        } else {
            $('#m-cookienotice').addClass('top');
            $("body").append($("#m-cookienotice-main").html());
            $("#m-cookienotice-main #m-cookienotice").remove();
        }

        $("#accept").click(function () {
            setCookie(behaviour,expire);
            return false;
        });

        $("#close").on('click',function () {
            $("#m-cookienotice").hide();
        });

        if (!$.cookie('MageINICCookie')) {
            setTimeout(function () {
                $("#m-cookienotice").css({ display: "block" });
                $('#m-cookienotice').show();
            }, 1000);
        }
    }
});
