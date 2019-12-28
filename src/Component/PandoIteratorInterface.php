<?php
declare(strict_types=1);
/**
 *
 * @link    https://github.com/MarshallJamesRaynor/pando
 * @author  Paolo Combi <paolo@combi.li>
 * @license https://github.com/MarshallJamesRaynor/pando/blob/master/LICENSE (MIT License)
 * @package Component
 */

namespace Pando\Component;

interface PandoIteratorInterface extends \Iterator
{

    /**
     * Return the current element
     * @return PandoInterface|null
     */
    public function current(): ?PandoInterface;

    /**
     * Move forward to next element
     * @return void Any returned value is ignored.
     */
    public function next(): void;

    /**
     * Return the key of the current element
     * @return int scalar on success, or null on failure.
     */
    public function key(): int;

    /**
     * Checks if current position is valid
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool;

    /**
     * Rewind the Iterator to the first element
     * @return void Any returned value is ignored.
     */
    public function rewind(): void;
}
