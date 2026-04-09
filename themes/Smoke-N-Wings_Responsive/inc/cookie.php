<?php

/**
 * Cookie banner HTML
 */
function smokeWings_banner_cookie_banner() {
    if (isset($_COOKIE['cookie_accepted']) && $_COOKIE['cookie_accepted'] == '1') {
        return;
    }
    ?>
    <div id="cookie-banner" class="hidden fixed bottom-6 left-1/2 transform -translate-x-1/2 w-[95%] md:w-4/12 lg:w-1/4 xl:w-1/3 z-[9999] bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-lg p-5 transition-all duration-300">
        <div class="flex gap-4 items-start">
            <div class="flex-1">
                <div class="flex justify-between items-start gap-3">
                    <div>
                         <h3 class="text-[20px] font-bebas font-semibold text-gray-900 dark:text-gray-100">
                        Allow cookies for the best experience
                    </h3>
                    <p class="text-[16px] text-gray-600 font-jost dark:text-gray-300 mt-1 capitalize">
                        We use cookies to improve your browsing experience. By clicking “Accept”, you agree to store cookies for one year.
                    </p>
                    </div>
                </div>
                <div class="mt-4 flex gap-3">
                    <button id="cookie-accept" class=" font-bebas-pro text-[22px] px-4 py-1.5 bg-orange-600 text-white rounded-lg hover:bg-orange-500">Accept</button>
                    <button id="cookie-close" aria-label="Close" class="text-white px-4 py-1.5 rounded-lg bg-red-400 text-[18px] font-bold font-bebas-pro hover:text-gray-600 dark:hover:text-gray-200">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'smokeWings_banner_cookie_banner', 999);


/**
 * AJAX - server-side cookie
 */
function smokeWings_set_cookie_ajax() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'cookie_nonce')) {
        wp_send_json_error('Invalid nonce');
    }

    $days = isset($_POST['days']) ? intval($_POST['days']) : 365;
    $expire = time() + ($days * DAY_IN_SECONDS);

    setcookie('cookie_accepted', '1', $expire, COOKIEPATH, COOKIE_DOMAIN, is_ssl(), true);
    $_COOKIE['cookie_accepted'] = '1';

    wp_send_json_success('Cookie set successfully');
}
add_action('wp_ajax_set_cookie', 'smokeWings_set_cookie_ajax');
add_action('wp_ajax_nopriv_set_cookie', 'smokeWings_set_cookie_ajax');