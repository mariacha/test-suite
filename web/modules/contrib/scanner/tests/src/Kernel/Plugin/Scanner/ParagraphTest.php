<?php

namespace Drupal\Tests\scanner\Kernel;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\paragraphs\FunctionalJavascript\ParagraphsTestBaseTrait;

/**
 * @covers \Drupal\scanner\Plugin\Scanner\Paragraph
 */
class ParagraphTest extends BrowserTestBase {

  // Contains helper methods.
  use ScannerHelperTrait;

  use ParagraphsTestBaseTrait;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['node', 'paragraphs', 'views', 'scanner'];

  /**
   * Create a content type and a node.
   *
   * @param string $title
   *   A title for the node that will be returned.
   * @param string $body
   *   The text to use as the body.
   * @param string $content_type
   *   The node bundle type.
   * @param string $content_type_label
   *   The content type label.
   *
   * @return \Drupal\node\NodeInterface
   *   A fully formatted node object.
   */
  protected function testSearchParagraphs(){

  }

}
