<?php declare(strict_types=1);
/**
 * Artex Exception Library
 * Custom runtime exception for Artex Software projects.
 * 
 * @package    Artex\Exceptions
 * @link       https://artexsoftware.com
 * @link       https://github.com/artex-agency/Exceptions
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions;

use RuntimeException;
use Exception;

/**
 * ArtexRuntimeException
 * 
 * An extension of PHP's RuntimeException that provides additional 
 * context for debugging.
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com>
 */
class ArtexRuntimeException extends RuntimeException
{
    /**
     * Additional context data for the exception.
     *
     * @var array
     */
    protected array $context = [];

    /**
     * Constructs a new ArtexRuntimeException instance.
     *
     * @param string     $message  The exception message.
     * @param int        $code     The exception code (default is 0).
     * @param array      $context  Additional context data for debugging (default is an empty array).
     * @param Exception|null $previous A previous exception for exception chaining (default is null).
     */
    public function __construct(string $message = "", int $code = 0, array $context = [], Exception $previous = null)
    {
        $this->context = $context;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Returns additional context data associated with the exception.
     *
     * @return array The context data.
     */
    public function getContext(): array
    {
        return $this->context;
    }
}