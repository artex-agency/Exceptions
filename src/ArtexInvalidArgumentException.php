<?php declare(strict_types=1);
/**
 * Artex Exception Library
 * Custom invalid argument exception for Artex Software projects.
 *
 * @package    Artex\Exceptions
 * @link       https://artexsoftware.com
 * @link       https://github.com/artex-agency/Exceptions
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions;

use InvalidArgumentException;
use Exception;

/**
 * ArtexInvalidArgumentException
 * 
 * A custom exception that extends PHP's InvalidArgumentException, 
 * providing additional context for debugging.
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com>
 */
class ArtexInvalidArgumentException extends InvalidArgumentException
{
    /**
     * Additional context data for the exception.
     *
     * @var array
     */
    protected array $context = [];

    /**
     * Constructs a new ArtexInvalidArgumentException instance.
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