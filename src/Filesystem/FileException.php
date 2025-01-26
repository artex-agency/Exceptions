<?php declare(strict_types=1);
/**
 * Artex Exceptions Library
 * Custom exception handling for Artex Software projects.
 * 
 * @package    Artex\Exceptions\Filesystem
 * @link       https://github.com/artex-agency/Exceptions 
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions\Filesystem;

use Artex\Exceptions\ArtexException;
use Exception;

/**
 * FileException
 * 
 * FileException extends ArtexException and provides a default 
 * message and code for file-related errors. This exception is 
 * thrown when there's an error with a file.
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com>
*/
class FileException extends ArtexException
{
    public function __construct(string $message = "File error", int $code = 404, array $context = [], Exception $previous = null)
    {
        parent::__construct($message, $code, $context, $previous);
    }
}