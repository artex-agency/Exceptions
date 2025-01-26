<?php declare(strict_types=1);
/**
 * Artex Exception Library
 * 
 * This file is part of the Artex Software standard exception handling
 * library for PHP projects. The library provides enhanced exception 
 * handling capabilities with support for additional context and 
 * advanced debugging utilities.
 *
 * @package    Artex\Exceptions
 * @link       https://artexsoftware.com
 * @link       https://github.com/artex-agency/Exceptions
 * @license    Apache License 2.0
 * @copyright  2025 Artex Agency Inc.
 */
namespace Artex\Exceptions;

use ErrorException;
use Exception;

/**
 * ArtexErrorException
 * 
 * @version 1.0.0
 * @author  James Gober <me@jamesgober.com>
 */
class ArtexErrorException extends ErrorException
{
    /**
     * Additional context data for the exception.
     *
     * @var array
     */
    protected array $context = [];

    /**
     * Constructs a new ArtexException instance.
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

    /**
     * Converts the exception into a readable array for debugging or logging purposes.
     *
     * @return array An array containing exception details, including message, code, file, line, and context.
     */
    public function toArray(): array
    {
        return [
            'message' => $this->message,
            'code'    => $this->code,
            'file'    => $this->file,
            'line'    => $this->line,
            'context' => $this->context,
        ];
    }
}