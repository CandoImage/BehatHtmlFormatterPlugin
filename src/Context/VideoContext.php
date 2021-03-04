<?php

namespace emuse\BehatHTMLFormatter\Context;

use Behat\Behat\Context\Environment\ContextEnvironment;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Class VideoContext
 *
 * Abused to transport runtime information from the test to the formatter.
 *
 * @package emuse\BehatHTMLFormatter\Context
 */
class VideoContext extends RawMinkContext
{

  protected static $VIDEO_NAME;

  /**
   * @return mixed
   */
  public static function getVideoName() {
    return self::$VIDEO_NAME;
  }

  /**
   * @param mixed $VIDEO_NAME
   */
  public static function setVideoName($videoName) {
    self::$VIDEO_NAME = $videoName;
  }

  /**
   * Demo on how to define the video file name from the test runner.
   *
   * @BeforeScenario
   */
  public function gatherContexts(\Behat\Behat\Hook\Scope\BeforeScenarioScope $scope) {
    return;
    // DEMO CODE.
    /** @var $environment ContextEnvironment */
    if (($environment = $scope->getEnvironment()) instanceof ContextEnvironment) {
      if ($environment->hasContextClass('emuse\BehatHTMLFormatter\Context\VideoContext')) {
        \emuse\BehatHTMLFormatter\Context\VideoContext::setVideoName('MyVideoName.mp4');
      }
    }
  }

}
