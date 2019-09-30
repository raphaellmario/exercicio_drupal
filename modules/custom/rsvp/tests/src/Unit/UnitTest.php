<?php
namespace Drupal\Tests\rsvp\Unit;
use Drupal\Tests\UnitTestCase;
use Drupal\rsvp\Unit;

/**
 * {@inheritdoc}
 */
class UnitTest extends UnitTestCase {
  protected $unit;
  /**
   * {@inheritdoc}
   */
  public function setUp() {
    $this->unit = new Unit();
  }
  /**
   * {@inheritdoc}
   */
  public function testSetLength() {
    $this->assertEquals(0, $this->unit->getLength());
    $this->unit->setLength(9);
    $this->assertEquals(9, $this->unit->getLength());
  }
  /**
   * {@inheritdoc}
   */
  public function testGetLength() {
    $this->unit->setLength(9);
    $this->assertNotEquals(10, $this->unit->getLength());
  }
  /**
   * {@inheritdoc}
   */
  public function tearDown() {
    unset($this->unit);
  }
}
