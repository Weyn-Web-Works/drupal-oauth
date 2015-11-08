<?php
/**
 * @file
 * Contains \Drupal\oauth\Tests\OAuthTest.
 */

namespace Drupal\oauth\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests oauth functionality.
 *
 * @group OAuth
 */
class OAuthTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('node', 'oauth', 'rest', 'hal');

  /**
   * Tests consumer generation and deletion.
   */
  function testConsumers() {
    // Create user with permissions to manage own consumers.
    $permissions = array('access own consumers');
    $account = $this->drupalCreateUser($permissions);
    $this->drupalLogin($account);

    // Check that OAuth menu tab is visible at user profile.
    $this->drupalGet('user/' . $account->id() . '/oauth/consumer');
    $this->assertResponse(200);

    // Generate a set of consuemer keys.
    $this->drupalPostForm('oauth/consumer/add', array(), 'Add');
    $this->assertText(t('Added a new consumer.'));

    // Delete the set of consumer keys.
    $consumer_id = db_query('select cid from {oauth_consumer}')->fetchField();
    $this->drupalPostForm('oauth/consumer/delete/' . $consumer_id, array(), 'Delete');
    $this->assertText(t('OAuth consumer deleted.'));
  }

}
