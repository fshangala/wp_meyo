<?php
function enqueue_custom_stylesheets() {
    wp_enqueue_style('elementor-frontend-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/frontend.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('elementor-post-45-css', get_template_directory_uri() . '/assets/elementor/assets/css/post-452c5f.css', array(), '1721853134', 'all');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css', array(), '8.4.5', 'all');
    wp_enqueue_style('e-swiper-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/conditionals/e-swiper.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('e-animation-fadeInUp-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/lib/animations/styles/fadeInUp.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('widget-heading-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/widget-heading.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('widget-text-editor-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/widget-text-editor.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('ui-e-animation-css', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/css/utils/global-animations7daa.css', array(), '1.0.13', 'all');
    wp_enqueue_style('ui-e-entrance-css', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/css/utils/global-entrances7daa.css', array(), '1.0.13', 'all');
    wp_enqueue_style('widget-image-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/widget-image.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('e-animation-zoomIn-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/lib/animations/styles/zoomIn.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('e-animation-fadeInDown-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/lib/animations/styles/fadeInDown.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('widget-icon-list-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/widget-icon-list.min5422.css', array(), '3.25.9', 'all');
    wp_enqueue_style('bdt-uikit-css', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/css/bdt-uikit4ecf.css', array(), '3.21.7', 'all');
    wp_enqueue_style('ep-helper-css', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/css/ep-helper0566.css', array(), '7.18.9', 'all');
    wp_enqueue_style('ep-switcher-css', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/css/ep-switcher0566.css', array(), '7.18.9', 'all');
    wp_enqueue_style('ep-font-css', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/css/ep-font0566.css', array(), '7.18.9', 'all');
    wp_enqueue_style('ep-remote-thumbs-css', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/css/ep-remote-thumbs0566.css', array(), '7.18.9', 'all');
    wp_enqueue_style('elementor-post-15-css', get_stylesheet_directory_uri() . '/assets/elementor/assets/css/post-15946b.css', array(), '1733403354', 'all');
    wp_enqueue_style('uicore_global-css', get_stylesheet_directory_uri() . '/assets/uicore/uicore-global8bc5.css', array(), '7660', 'all');
    wp_enqueue_style('google-fonts-1-css', 'https://fonts.googleapis.com/css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=auto&ver=6.7.1', array(), null, 'all');
    wp_enqueue_style('elementor-icons-shared-0-css', get_stylesheet_directory_uri() . '/assets/uicore-framework/assets/fonts/themify-icons8a54.css', array(), '1.0.0', 'all');
    wp_enqueue_style('elementor-icons-uicore-icons-css', get_stylesheet_directory_uri() . '/assets/uicore-framework/assets/fonts/themify-icons8a54.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css', array(), null, 'all');
    wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheets');

function enqueue_custom_scripts() {
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array(), null, true);
    wp_enqueue_script('bdt-uikit-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/bdt-uikit.min4ecf.js', array(), '3.21.7', true);
    wp_enqueue_script('ep-switcher-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/modules/ep-switcher.min0566.js', array(), '7.18.9', true);
    wp_enqueue_script('elementor-webpack-runtime-js', get_stylesheet_directory_uri() . '/assets/elementor/assets/js/webpack.runtime.min5422.js', array(), '3.25.9', true);
    wp_enqueue_script('elementor-frontend-modules-js', get_stylesheet_directory_uri() . '/assets/elementor/assets/js/frontend-modules.min5422.js', array(), '3.25.9', true);
    wp_enqueue_script('jquery-ui-core-js', get_stylesheet_directory_uri() . '/assets/jquery/ui/core.minb37e.js', array(), '1.13.3', true);
    wp_enqueue_script('elementor-frontend-js', get_stylesheet_directory_uri() . '/assets/elementor/assets/js/frontend.min5422.js', array(), '3.25.9', true);
    wp_enqueue_script('ui-e-carousel-js', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/js/utils/global-carousel7daa.js', array(), '1.0.13', true);
    wp_enqueue_script('ep-remote-thumbs-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/modules/ep-remote-thumbs.min0566.js', array(), '7.18.9', true);
    wp_enqueue_script('uicore_global-js', get_stylesheet_directory_uri() . '/assets/uicore/uicore-global8bc5.js', array(), '7660', true);
    wp_enqueue_script('element-pack-helper-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/common/helper.min0566.js', array(), '7.18.9', true);
    wp_enqueue_script('ui-e-animated-border-js', get_stylesheet_directory_uri() . '/assets/uicore-animate/assets/js/animated-borderc1b4.js', array(), '2.0.5', true);
    wp_enqueue_script('ui-e-logo-grid-js', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/js/elements/logo-grid7daa.js', array(), '1.0.13', true);
    wp_enqueue_script('ep-background-overlay-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/modules/ep-background-overlay.min0566.js', array(), '7.18.9', true);
    wp_enqueue_script('ui-e-utils-carousel-effects-circular-js', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/js/utils/carousel-effects/circular7daa.js', array(), '1.0.13', true);
    wp_enqueue_script('ui-e-accordion-js', get_stylesheet_directory_uri() . '/assets/uicore-elements/assets/js/elements/accordion7daa.js', array(), '1.0.13', true);
    wp_enqueue_script('ui-e-fluid-js', get_stylesheet_directory_uri() . '/assets/uicore-animate/assets/js/fluidc1b4.js', array(), '2.0.5', true);
    wp_enqueue_script('ep-mailchimp-js', get_stylesheet_directory_uri() . '/assets/bdthemes-element-pack/assets/js/modules/ep-mailchimp.min0566.js', array(), '7.18.9', true);

    // Inline scripts
    wp_add_inline_script('jquery', 'var uicore_frontend = { "back": "Back", "rtl": "", "mobile_br": "1025" }; console.log("Using UiCore Pro v.1.0.8"); console.log("Powered By UiCore Framework v.6.0.1");');
    wp_add_inline_script('jquery', 'const lazyloadRunObserver = () => { const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`); const lazyloadBackgroundObserver = new IntersectionObserver((entries) => { entries.forEach((entry) => { if (entry.isIntersecting) { let lazyloadBackground = entry.target; if (lazyloadBackground) { lazyloadBackground.classList.add("e-lazyloaded"); } lazyloadBackgroundObserver.unobserve(entry.target); } }); }, { rootMargin: "200px 0px 200px 0px" }); lazyloadBackgrounds.forEach((lazyloadBackground) => { lazyloadBackgroundObserver.observe(lazyloadBackground); }); }; const events = ["DOMContentLoaded", "elementor/lazyload/observe"]; events.forEach((event) => { document.addEventListener(event, lazyloadRunObserver); });');
    wp_add_inline_script('jquery', '$(document).ready(function(){ $(".reviews-carousel").slick({ infinite:true, slidesToShow:3, slidesToScrow:1, }); });');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
