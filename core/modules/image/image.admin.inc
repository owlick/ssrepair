<?php

/**
 * @file
 * Administration pages for image settings.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for image style preview templates.
 *
 * Default template: image-style-preview.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - style: \Drupal\image\ImageStyleInterface image style being previewed.
 */
function template_preprocess_image_style_preview(&$variables) {

  /** @var \Drupal\Core\File\FileUrlGeneratorInterface $file_url_generator */
  $file_url_generator = \Drupal::service('file_url_generator');

  // Style information.
  $style = $variables['style'];
  $variables['style_id'] = $style->id();
  $variables['style_name'] = $style->label();

  // Cache bypass token.
  $variables['cache_bypass'] = \Drupal::time()->getRequestTime();

  // Sample image info.
  $sample_width = 160;
  $sample_height = 160;
  $image_factory = \Drupal::service('image.factory');

  // Set up original file information.
  $original_path = \Drupal::config('image.settings')->get('preview_image');
  $original_image = $image_factory->get($original_path);
  $variables['original'] = [
    'url' => $file_url_generator->generateString($original_path),
    'width' => $original_image->getWidth(),
    'height' => $original_image->getHeight(),
  ];
  if ($variables['original']['width'] > $variables['original']['height']) {
    $variables['preview']['original']['width'] = min($variables['original']['width'], $sample_width);
    $variables['preview']['original']['height'] = round($variables['preview']['original']['width'] / $variables['original']['width'] * $variables['original']['height']);
  }
  else {
    $variables['preview']['original']['height'] = min($variables['original']['height'], $sample_height);
    $variables['preview']['original']['width'] = round($variables['preview']['original']['height'] / $variables['original']['height'] * $variables['original']['width']);
  }

  // Set up derivative file information.
  $preview_file = $style->buildUri($original_path);
  // Create derivative if necessary.
  if (!file_exists($preview_file)) {
    $style->createDerivative($original_path, $preview_file);
  }
  $preview_image = $image_factory->get($preview_file);

  // Generate an itok.
  $defaultScheme = \Drupal::config('system.file')->get('default_scheme');
  $variables['itok'] = $style->getPathToken($defaultScheme . '://' . $original_path);

  $variables['derivative'] = [
    'url' => $file_url_generator->generateString($preview_file),
    'width' => $preview_image->getWidth(),
    'height' => $preview_image->getHeight(),
  ];
  if ($variables['derivative']['width'] > $variables['derivative']['height']) {
    $variables['preview']['derivative']['width'] = min($variables['derivative']['width'], $sample_width);
    $variables['preview']['derivative']['height'] = round($variables['preview']['derivative']['width'] / $variables['derivative']['width'] * $variables['derivative']['height']);
  }
  else {
    $variables['preview']['derivative']['height'] = min($variables['derivative']['height'], $sample_height);
    $variables['preview']['derivative']['width'] = round($variables['preview']['derivative']['height'] / $variables['derivative']['height'] * $variables['derivative']['width']);
  }

  // Build the preview of the original image.
  $variables['original']['rendered'] = [
    '#theme' => 'image',
    '#uri' => $original_path,
    '#alt' => t('Source image: @width pixels wide, @height pixels high', [
      '@width' => $variables['original']['width'],
      '@height' => $variables['original']['height'],
    ]),
    '#title' => '',
    '#attributes' => [
      'width' => $variables['original']['width'],
      'height' => $variables['original']['height'],
      'style' => 'width: ' . $variables['preview']['original']['width'] . 'px; height: ' . $variables['preview']['original']['height'] . 'px;',
    ],
  ];

  // Build the preview of the image style derivative. Timestamps are added
  // to prevent caching of images on the client side.
  $variables['derivative']['rendered'] = [
    '#theme' => 'image',
    '#uri' => $variables['derivative']['url'] . '?cache_bypass=' . $variables['cache_bypass'] . '&itok=' . $variables['itok'],
    '#alt' => t('Derivative image: @width pixels wide, @height pixels high', [
      '@width' => $variables['derivative']['width'],
      '@height' => $variables['derivative']['height'],
    ]),
    '#title' => '',
    '#attributes' => [
      'width' => $variables['derivative']['width'],
      'height' => $variables['derivative']['height'],
      'style' => 'width: ' . $variables['preview']['derivative']['width'] . 'px; height: ' . $variables['preview']['derivative']['height'] . 'px;',
    ],
  ];

}

/**
 * Prepares variables for image anchor templates.
 *
 * Default template: image-anchor.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the image.
 */
function template_preprocess_image_anchor(&$variables) {
  $element = $variables['element'];

  $rows = [];
  $row = [];
  foreach (Element::children($element) as $n => $key) {
    $element[$key]['#attributes']['title'] = $element[$key]['#title'];
    unset($element[$key]['#title']);
    $row[] = [
      'data' => $element[$key],
    ];
    if ($n % 3 == 3 - 1) {
      $rows[] = $row;
      $row = [];
    }
  }

  $variables['table'] = [
    '#type' => 'table',
    '#header' => [],
    '#rows' => $rows,
    '#attributes' => [
      'class' => ['image-anchor'],
    ],
  ];
}
