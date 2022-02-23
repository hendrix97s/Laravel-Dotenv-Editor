<?php

namespace Jackiedo\DotenvEditor\Contracts;

interface FormatterInterface
{
    /**
     * Formatting the key of setter to writing
     *
     * @param string  $key
     * @param boolean $export  optional
     */
    public function formatKey(string $key, bool $export = false);

    /**
     * Formatting the value of setter to writing
     *
     * @param string|null $value
     * @param string|null $comment  optional
     */
    public function formatValue(?string $value, ?string $comment = null);

    /**
     * Formatting the comment to writing
     *
     * @param string $comment
     */
    public function formatComment(?string $comment);

    /**
     * Build an setter from the individual components for writing
     *
     * @param string       $key
     * @param string|null  $value
     * @param string|null  $comment  optional
     * @param boolean      $export   optional
     */
    public function formatSetter(string $key, ?string $value = null, ?string $comment = null, bool $export = false);
}