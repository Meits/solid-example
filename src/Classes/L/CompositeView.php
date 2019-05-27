<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 16:44
 */

namespace App\L;


class CompositeView extends AbstractView
{
    protected $_views = array();

    /**
     * Add a view
     */
    public function addView(AbstractView $view)
    {
        if (!in_array($view, $this->_views, true)) {
            $this->_views[] = $view;
            return true;
        }
        return false;
    }

    /**
     * Add multiple views
     */
    public function addViews(array $views)
    {
        foreach ($views as $view) {
            $this->addView($view);
        }
    }

    /**
     * Remove a view
     */
    public function removeView(AbstractView $view)
    {
        $this->_views = array_filter($this->_views, function ($v) use ($view) {
            return $v !== $view;
        });
        return true;
    }

    /**
     * Render both the injected views and the current one
     */
    public function render()
    {
        $output = '';
        // render the injected views
        if (!empty($this->_views)) {
            foreach ($this->_views as $_view) {
                $output .= $_view->render();
            }
        }
        // render the current view
        $output .= $this->_doRender();
        return $output;
    }
}