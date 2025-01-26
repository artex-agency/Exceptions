<?php declare(strict_types=1);
/**
 * Artex Exceptions Library
 * Custom exception handling for Artex Software projects.
 * 
 * @package    Artex\Exceptions\Database
 * @link       https://github.com/artex-agency/Exceptions
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions\Database;

use Artex\Exceptions\ArtexException;
use Exception;

/**
 * DatabaseException
 * 
 * DatabaseException extends ArtexException designed to handle 
 * database-related errors and provide additional context for 
 * debugging or logging purposes.
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com>
 */
class DatabaseException extends ArtexException
{
    public function __construct(string $message = "Database error", int $code = 500, array $context = [], Exception $previous = null)
    {
        parent::__construct($message, $code, $context, $previous);
    }
}