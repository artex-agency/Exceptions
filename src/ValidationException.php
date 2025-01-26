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

use Artex\Exceptions\ArtexException;
use Exception;

/**
 * ValidationException
 * 
 * This class extends ArtexException and provides a default message and 
 * code for validation errors. This exception is throw when there's an 
 * error with validation.  
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com> 
*/
class ValidationException extends ArtexException
{
    public function __construct(string $message = "Validation failed", int $code = 422, array $context = [], Exception $previous = null)
    {
        parent::__construct($message, $code, $context, $previous);
    }
}