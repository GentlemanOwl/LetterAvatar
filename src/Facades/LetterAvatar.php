<?php
/**
 * LetterAvatar.php
 * --
 * @package         LetterAvatar
 * @subpackage      Facades
 * --
 * User: GentlemanOwl <github@gentlemanowl.fr>
 * Date: 20/06/15
 * Time: 22:20
 */

namespace GentlemanOwl\LetterAvatar\Facades;

use Illuminate\Support\Facades\Facade;

class LetterAvatar extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'gentlemanowl.letter-avatar'; }

}