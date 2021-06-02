<?php

namespace Drupal\Tests\scanner\Kernel\Plugin\Scanner;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\paragraphs\FunctionalJavascript\ParagraphsTestBaseTrait;

/**
 * @covers \Drupal\scanner\Plugin\Scanner\Paragraph
 */
class ParagraphTest extends BrowserTestBase {

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
   * Does nothing now.
   *
   * @return \Drupal\node\NodeInterface
   *   A fully formatted node object.
   */
  protected function testSearchParagraphs(){

  }

}
