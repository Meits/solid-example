<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 16:45
 */

namespace App\L;


use InvalidArgumentException;

class PartialView extends AbstractView
{
    /**
     * Add a view (throws an exception)
     */
    public function addView(AbstractView $view)
    {
        throw new InvalidArgumentException('A partial view cannot aggregate another view.');
    }     /**
 * Add multiple views (throws an exception)
 */
    public function addViews(array $views)
    {
        throw new InvalidArgumentException('A partial view cannot aggregate other views.');
    }     /**
 * Remove a view (throws an exception)
 */
    public function removeView(AbstractView $view)
    {
        throw new InvalidArgumentException('A partial view cannot remove another view.');
    }     /**
 * Render the partial view
 */
    public function render()
    {
        return $this->_doRender();
    }
}