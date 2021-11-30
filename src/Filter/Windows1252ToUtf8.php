<?php

declare(strict_types=1);

namespace MarcusJaschen\Collmex\Filter;

use ForceUTF8\Encoding;
use InvalidArgumentException;

/**
 * Filter to convert Windows 1252 to UTF-8 encoding.
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 */
class Windows1252ToUtf8 extends AbstractFilter
{
    /**
     * @throws InvalidArgumentException
     */
    public function filterString(string $text): string
    {
        $result = mb_convert_encoding($text, 'UTF-8', 'Windows-1252');

        if ($result === false) {
            throw new InvalidArgumentException('Cannot convert string to UTF-8', 8609163127);
        }

        return $result;
    }
}
