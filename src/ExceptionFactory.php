<?php declare(strict_types=1);
/**
 * Artex Exceptions Library
 * Custom exception handling for Artex Software projects.
 * 
 * @package    Artex\Exceptions
 * @link       https://artexsoftware.com
 * @link       https://github.com/artex-agency/Exceptions
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions;

use Artex\Exceptions\Database\DatabaseException;
use Artex\Exceptions\ValidationException;

/**
 * ExceptionFactory
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com> 
*/
class ExceptionFactory 
{
    /**
     * Create a new database exception.
     *
     * @param string $message
     * @param integer $code
     * @return DatabaseException
     */
    public static function database(string $message, int $code = 500): DatabaseException {
        return new DatabaseException($message, $code);
    }

    /**
     * Create a new validation exception.
     *
     * @param string $message
     * @param integer $code
     * @return ValidationException
     */
    public static function validation(string $message, int $code = 400): ValidationException {
        return new ValidationException($message, $code);
    }
}