<?php

/**
 * Add a Font Awesome metabox output with Select2
 *
 * @link http://fortawesome.github.com/Font-Awesome/
 * @link http://ivaynberg.github.com/select2/
 */
function cmb_fontawesome($field, $meta) {
  $icons = array(
    array('name' => '', 'value' => ''),
    array('name' => 'icon-adjust', 'value' => 'icon-adjust'),
    array('name' => 'icon-align-center', 'value' => 'icon-align-center'),
    array('name' => 'icon-align-justify', 'value' => 'icon-align-justify'),
    array('name' => 'icon-align-left', 'value' => 'icon-align-left'),
    array('name' => 'icon-align-right', 'value' => 'icon-align-right'),
    array('name' => 'icon-arrow-down', 'value' => 'icon-arrow-down'),
    array('name' => 'icon-arrow-left', 'value' => 'icon-arrow-left'),
    array('name' => 'icon-arrow-right', 'value' => 'icon-arrow-right'),
    array('name' => 'icon-arrow-up', 'value' => 'icon-arrow-up'),
    array('name' => 'icon-asterisk', 'value' => 'icon-asterisk'),
    array('name' => 'icon-backward', 'value' => 'icon-backward'),
    array('name' => 'icon-ban-circle', 'value' => 'icon-ban-circle'),
    array('name' => 'icon-bar-chart', 'value' => 'icon-bar-chart'),
    array('name' => 'icon-beaker', 'value' => 'icon-beaker'),
    array('name' => 'icon-bell', 'value' => 'icon-bell'),
    array('name' => 'icon-bold', 'value' => 'icon-bold'),
    array('name' => 'icon-bolt', 'value' => 'icon-bolt'),
    array('name' => 'icon-bookmark', 'value' => 'icon-bookmark'),
    array('name' => 'icon-bookmark-empty', 'value' => 'icon-bookmark-empty'),
    array('name' => 'icon-briefcase', 'value' => 'icon-briefcase'),
    array('name' => 'icon-bullhorn', 'value' => 'icon-bullhorn'),
    array('name' => 'icon-calendar', 'value' => 'icon-calendar'),
    array('name' => 'icon-camera', 'value' => 'icon-camera'),
    array('name' => 'icon-camera-retro', 'value' => 'icon-camera-retro'),
    array('name' => 'icon-caret-down', 'value' => 'icon-caret-down'),
    array('name' => 'icon-caret-left', 'value' => 'icon-caret-left'),
    array('name' => 'icon-caret-right', 'value' => 'icon-caret-right'),
    array('name' => 'icon-caret-up', 'value' => 'icon-caret-up'),
    array('name' => 'icon-certificate', 'value' => 'icon-certificate'),
    array('name' => 'icon-check', 'value' => 'icon-check'),
    array('name' => 'icon-check-empty', 'value' => 'icon-check-empty'),
    array('name' => 'icon-chevron-down', 'value' => 'icon-chevron-down'),
    array('name' => 'icon-chevron-left', 'value' => 'icon-chevron-left'),
    array('name' => 'icon-chevron-right', 'value' => 'icon-chevron-right'),
    array('name' => 'icon-chevron-up', 'value' => 'icon-chevron-up'),
    array('name' => 'icon-circle-arrow-down', 'value' => 'icon-circle-arrow-down'),
    array('name' => 'icon-circle-arrow-left', 'value' => 'icon-circle-arrow-left'),
    array('name' => 'icon-circle-arrow-right', 'value' => 'icon-circle-arrow-right'),
    array('name' => 'icon-circle-arrow-up', 'value' => 'icon-circle-arrow-up'),
    array('name' => 'icon-cloud', 'value' => 'icon-cloud'),
    array('name' => 'icon-cog', 'value' => 'icon-cog'),
    array('name' => 'icon-cogs', 'value' => 'icon-cogs'),
    array('name' => 'icon-columns', 'value' => 'icon-columns'),
    array('name' => 'icon-comment', 'value' => 'icon-comment'),
    array('name' => 'icon-comment-alt', 'value' => 'icon-comment-alt'),
    array('name' => 'icon-comments', 'value' => 'icon-comments'),
    array('name' => 'icon-comments-alt', 'value' => 'icon-comments-alt'),
    array('name' => 'icon-copy', 'value' => 'icon-copy'),
    array('name' => 'icon-credit-card', 'value' => 'icon-credit-card'),
    array('name' => 'icon-cut', 'value' => 'icon-cut'),
    array('name' => 'icon-dashboard', 'value' => 'icon-dashboard'),
    array('name' => 'icon-download', 'value' => 'icon-download'),
    array('name' => 'icon-download-alt', 'value' => 'icon-download-alt'),
    array('name' => 'icon-edit', 'value' => 'icon-edit'),
    array('name' => 'icon-eject', 'value' => 'icon-eject'),
    array('name' => 'icon-envelope', 'value' => 'icon-envelope'),
    array('name' => 'icon-envelope-alt', 'value' => 'icon-envelope-alt'),
    array('name' => 'icon-exclamation-sign', 'value' => 'icon-exclamation-sign'),
    array('name' => 'icon-external-link', 'value' => 'icon-external-link'),
    array('name' => 'icon-eye-close', 'value' => 'icon-eye-close'),
    array('name' => 'icon-eye-open', 'value' => 'icon-eye-open'),
    array('name' => 'icon-facebook', 'value' => 'icon-facebook'),
    array('name' => 'icon-facebook-sign', 'value' => 'icon-facebook-sign'),
    array('name' => 'icon-facetime-video', 'value' => 'icon-facetime-video'),
    array('name' => 'icon-fast-backward', 'value' => 'icon-fast-backward'),
    array('name' => 'icon-fast-forward', 'value' => 'icon-fast-forward'),
    array('name' => 'icon-file', 'value' => 'icon-file'),
    array('name' => 'icon-film', 'value' => 'icon-film'),
    array('name' => 'icon-filter', 'value' => 'icon-filter'),
    array('name' => 'icon-fire', 'value' => 'icon-fire'),
    array('name' => 'icon-folder-close', 'value' => 'icon-folder-close'),
    array('name' => 'icon-folder-open', 'value' => 'icon-folder-open'),
    array('name' => 'icon-font', 'value' => 'icon-font'),
    array('name' => 'icon-forward', 'value' => 'icon-forward'),
    array('name' => 'icon-fullscreen', 'value' => 'icon-fullscreen'),
    array('name' => 'icon-gift', 'value' => 'icon-gift'),
    array('name' => 'icon-github', 'value' => 'icon-github'),
    array('name' => 'icon-github-sign', 'value' => 'icon-github-sign'),
    array('name' => 'icon-glass', 'value' => 'icon-glass'),
    array('name' => 'icon-globe', 'value' => 'icon-globe'),
    array('name' => 'icon-google-plus', 'value' => 'icon-google-plus'),
    array('name' => 'icon-google-plus-sign', 'value' => 'icon-google-plus-sign'),
    array('name' => 'icon-group', 'value' => 'icon-group'),
    array('name' => 'icon-hand-down', 'value' => 'icon-hand-down'),
    array('name' => 'icon-hand-left', 'value' => 'icon-hand-left'),
    array('name' => 'icon-hand-right', 'value' => 'icon-hand-right'),
    array('name' => 'icon-hand-up', 'value' => 'icon-hand-up'),
    array('name' => 'icon-hdd', 'value' => 'icon-hdd'),
    array('name' => 'icon-heart', 'value' => 'icon-heart'),
    array('name' => 'icon-heart-empty', 'value' => 'icon-heart-empty'),
    array('name' => 'icon-home', 'value' => 'icon-home'),
    array('name' => 'icon-inbox', 'value' => 'icon-inbox'),
    array('name' => 'icon-indent-left', 'value' => 'icon-indent-left'),
    array('name' => 'icon-indent-right', 'value' => 'icon-indent-right'),
    array('name' => 'icon-info-sign', 'value' => 'icon-info-sign'),
    array('name' => 'icon-italic', 'value' => 'icon-italic'),
    array('name' => 'icon-key', 'value' => 'icon-key'),
    array('name' => 'icon-leaf', 'value' => 'icon-leaf'),
    array('name' => 'icon-legal', 'value' => 'icon-legal'),
    array('name' => 'icon-lemon', 'value' => 'icon-lemon'),
    array('name' => 'icon-link', 'value' => 'icon-link'),
    array('name' => 'icon-linkedin', 'value' => 'icon-linkedin'),
    array('name' => 'icon-linkedin-sign', 'value' => 'icon-linkedin-sign'),
    array('name' => 'icon-list', 'value' => 'icon-list'),
    array('name' => 'icon-list-ol', 'value' => 'icon-list-ol'),
    array('name' => 'icon-list-ul', 'value' => 'icon-list-ul'),
    array('name' => 'icon-magic', 'value' => 'icon-magic'),
    array('name' => 'icon-magnet', 'value' => 'icon-magnet'),
    array('name' => 'icon-map-marker', 'value' => 'icon-map-marker'),
    array('name' => 'icon-minus', 'value' => 'icon-minus'),
    array('name' => 'icon-minus-sign', 'value' => 'icon-minus-sign'),
    array('name' => 'icon-money', 'value' => 'icon-money'),
    array('name' => 'icon-move', 'value' => 'icon-move'),
    array('name' => 'icon-music', 'value' => 'icon-music'),
    array('name' => 'icon-off', 'value' => 'icon-off'),
    array('name' => 'icon-ok', 'value' => 'icon-ok'),
    array('name' => 'icon-ok-circle', 'value' => 'icon-ok-circle'),
    array('name' => 'icon-ok-sign', 'value' => 'icon-ok-sign'),
    array('name' => 'icon-paper-clip', 'value' => 'icon-paper-clip'),
    array('name' => 'icon-paste', 'value' => 'icon-paste'),
    array('name' => 'icon-pause', 'value' => 'icon-pause'),
    array('name' => 'icon-pencil', 'value' => 'icon-pencil'),
    array('name' => 'icon-phone', 'value' => 'icon-phone'),
    array('name' => 'icon-phone-sign', 'value' => 'icon-phone-sign'),
    array('name' => 'icon-picture', 'value' => 'icon-picture'),
    array('name' => 'icon-pinterest', 'value' => 'icon-pinterest'),
    array('name' => 'icon-pinterest-sign', 'value' => 'icon-pinterest-sign'),
    array('name' => 'icon-plane', 'value' => 'icon-plane'),
    array('name' => 'icon-play', 'value' => 'icon-play'),
    array('name' => 'icon-play-circle', 'value' => 'icon-play-circle'),
    array('name' => 'icon-plus', 'value' => 'icon-plus'),
    array('name' => 'icon-plus-sign', 'value' => 'icon-plus-sign'),
    array('name' => 'icon-print', 'value' => 'icon-print'),
    array('name' => 'icon-pushpin', 'value' => 'icon-pushpin'),
    array('name' => 'icon-question-sign', 'value' => 'icon-question-sign'),
    array('name' => 'icon-random', 'value' => 'icon-random'),
    array('name' => 'icon-remove', 'value' => 'icon-remove'),
    array('name' => 'icon-remove-circle', 'value' => 'icon-remove-circle'),
    array('name' => 'icon-remove-sign', 'value' => 'icon-remove-sign'),
    array('name' => 'icon-reorder', 'value' => 'icon-reorder'),
    array('name' => 'icon-repeat', 'value' => 'icon-repeat'),
    array('name' => 'icon-resize-full', 'value' => 'icon-resize-full'),
    array('name' => 'icon-resize-horizontal', 'value' => 'icon-resize-horizontal'),
    array('name' => 'icon-resize-small', 'value' => 'icon-resize-small'),
    array('name' => 'icon-resize-vertical', 'value' => 'icon-resize-vertical'),
    array('name' => 'icon-retweet', 'value' => 'icon-retweet'),
    array('name' => 'icon-road', 'value' => 'icon-road'),
    array('name' => 'icon-rss', 'value' => 'icon-rss'),
    array('name' => 'icon-save', 'value' => 'icon-save'),
    array('name' => 'icon-screenshot', 'value' => 'icon-screenshot'),
    array('name' => 'icon-search', 'value' => 'icon-search'),
    array('name' => 'icon-share', 'value' => 'icon-share'),
    array('name' => 'icon-share-alt', 'value' => 'icon-share-alt'),
    array('name' => 'icon-shopping-cart', 'value' => 'icon-shopping-cart'),
    array('name' => 'icon-sign-blank', 'value' => 'icon-sign-blank'),
    array('name' => 'icon-signal', 'value' => 'icon-signal'),
    array('name' => 'icon-signin', 'value' => 'icon-signin'),
    array('name' => 'icon-signout', 'value' => 'icon-signout'),
    array('name' => 'icon-sitemap', 'value' => 'icon-sitemap'),
    array('name' => 'icon-sort', 'value' => 'icon-sort'),
    array('name' => 'icon-sort-down', 'value' => 'icon-sort-down'),
    array('name' => 'icon-sort-up', 'value' => 'icon-sort-up'),
    array('name' => 'icon-star', 'value' => 'icon-star'),
    array('name' => 'icon-star-empty', 'value' => 'icon-star-empty'),
    array('name' => 'icon-star-half', 'value' => 'icon-star-half'),
    array('name' => 'icon-step-backward', 'value' => 'icon-step-backward'),
    array('name' => 'icon-step-forward', 'value' => 'icon-step-forward'),
    array('name' => 'icon-stop', 'value' => 'icon-stop'),
    array('name' => 'icon-strikethrough', 'value' => 'icon-strikethrough'),
    array('name' => 'icon-table', 'value' => 'icon-table'),
    array('name' => 'icon-tasks', 'value' => 'icon-tasks'),
    array('name' => 'icon-text-height', 'value' => 'icon-text-height'),
    array('name' => 'icon-text-width', 'value' => 'icon-text-width'),
    array('name' => 'icon-th', 'value' => 'icon-th'),
    array('name' => 'icon-th-large', 'value' => 'icon-th-large'),
    array('name' => 'icon-th-list', 'value' => 'icon-th-list'),
    array('name' => 'icon-thumbs-down', 'value' => 'icon-thumbs-down'),
    array('name' => 'icon-thumbs-up', 'value' => 'icon-thumbs-up'),
    array('name' => 'icon-time', 'value' => 'icon-time'),
    array('name' => 'icon-tint', 'value' => 'icon-tint'),
    array('name' => 'icon-trash', 'value' => 'icon-trash'),
    array('name' => 'icon-trophy', 'value' => 'icon-trophy'),
    array('name' => 'icon-truck', 'value' => 'icon-truck'),
    array('name' => 'icon-twitter', 'value' => 'icon-twitter'),
    array('name' => 'icon-twitter-sign', 'value' => 'icon-twitter-sign'),
    array('name' => 'icon-umbrella', 'value' => 'icon-umbrella'),
    array('name' => 'icon-underline', 'value' => 'icon-underline'),
    array('name' => 'icon-undo', 'value' => 'icon-undo'),
    array('name' => 'icon-unlock', 'value' => 'icon-unlock'),
    array('name' => 'icon-upload', 'value' => 'icon-upload'),
    array('name' => 'icon-upload-alt', 'value' => 'icon-upload-alt'),
    array('name' => 'icon-user', 'value' => 'icon-user'),
    array('name' => 'icon-user-md', 'value' => 'icon-user-md'),
    array('name' => 'icon-warning-sign', 'value' => 'icon-warning-sign'),
    array('name' => 'icon-wrench', 'value' => 'icon-wrench'),
    array('name' => 'icon-zoom-in', 'value' => 'icon-zoom-in'),
    array('name' => 'icon-zoom-out', 'value' => 'icon-zoom-out'),
  );

  echo '<select name="', $field['id'], '" id="', $field['id'], '" class="fontawesome">';
  foreach ($icons as $icon) {
    echo '<option value="', $icon['value'], '"', $meta == $icon['value'] ? ' selected="selected"' : '', '>', $icon['name'], '</option>';
  }
  echo '</select>';
  echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
}
