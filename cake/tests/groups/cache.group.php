<?php
/**
 * CacheGroupTest file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

/**
 * CacheGroupTest class
 *
 * This test group will run all the Cache class test and all core cache engine tests
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class CacheGroupTest extends TestSuite {

/**
 * label property
 *
 * @var string 'All core cache engines'
 * @access public
 */
	var $label = 'Cache and all CacheEngines';

/**
 * CacheGroupTest method
 *
 * @access public
 * @return void
 */
	function CacheGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cache');
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cache');
	}
}
?>