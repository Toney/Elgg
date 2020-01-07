<?php

echo elgg_view_message('success', 'Success message (.elgg-state-success) example with a <a href="#">link</a>.');
echo elgg_view_message('notice', 'Notice message (.elgg-state-notice) example with a <a href="#">link</a>');
echo elgg_view_message('help', 'Notice message (.elgg-state-help) example with a <a href="#">link</a>');
echo elgg_view_message('warning', 'Warning message (.elgg-state-warning) example with a <a href="#">link</a>');
echo elgg_view_message('error', 'Error message (.elgg-state-error) example with a <a href="#">link</a>');

echo elgg_view_message('success', 'Success message (.elgg-state-success) without title', ['title' => false]);
echo elgg_view_message('notice', 'Notice message (.elgg-state-notice) without title', ['title' => false]);
echo elgg_view_message('help', 'Help message (.elgg-state-help) without title', ['title' => false]);
echo elgg_view_message('warning', 'Warning message (.elgg-state-warning) without title', ['title' => false]);
echo elgg_view_message('error', 'Error message (.elgg-state-error) without title', ['title' => false]);
