<?php

declare(strict_types=1);

/**
 * WebCLIDetector - Web and CLI Detector in PHP Development Environments.
 * PHP Version required 7.4.* or higher
 * This example shows how the WebCLIDetector class and its function/methods are declared.
 *
 * @see https://github.com/IcarosNetSA/BOH-Basic-Output-Handler
 *
 * @author    Walter Nuñez (arcanisgk/original founder)
 * @email     icarosnet@gmail.com
 * @copyright 2020 - 2022 Walter Nuñez.
 * @license   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful
 *            WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 *            or FITNESS FOR A PARTICULAR PURPOSE.
 */

namespace IcarosNet\WebCLIDetector;

/**
 * WebCLIDetector Class.
 */
class WebCLIDetector
{

    /**
     * @const string
     */

    private const ENV_CLI = 'CLI';

    /**
     * @const string
     */

    private const ENV_WEB = 'WEB';

    /**
     * Description: instantiate Class Static.
     * @var WebCLIDetector|null $instance
     */

    private static ?WebCLIDetector $instance = null;

    /**
     * Description: environment description.
     *  - CLI
     *  - WEB
     * @var string
     */

    private string $environment;

    /**
     * construct of class
     */

    public function __construct()
    {
        $this->setEnvironment($this->evaluateEnvironment() ? $this::ENV_CLI : $this::ENV_WEB);
    }

    /**
     * @return string
     */

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */

    private function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * Description: Determinate if Running from Terminal/Command-Line Environment or Web by default.
     * @return bool
     */

    private function evaluateEnvironment(): bool
    {
        return defined('STDIN')
            || php_sapi_name() === "cli"
            || (stristr(PHP_SAPI, 'cgi') && getenv('TERM'))
            || (empty($_SERVER['REMOTE_ADDR']) && !isset($_SERVER['HTTP_USER_AGENT']) && count($_SERVER['argv']) > 0);
    }

    /**
     * @return bool
     */

    public function isCLI(): bool
    {
        return ($this->getEnvironment() === $this::ENV_CLI);
    }

    /**
     * @return bool
     */

    public function isWEB(): bool
    {
        return ($this->getEnvironment() === $this::ENV_WEB);
    }

    /**
     * Description: Auto-Instance Helper for static development.
     * @return WebCLIDetector
     */

    public static function getInstance(): WebCLIDetector
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
