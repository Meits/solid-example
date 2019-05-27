<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 17:09
 */

namespace App\L;


class LayoutBuilder
{
    protected $_views = array();

    /**
     * Attach a view
     */
    public function attachView($key, AbstractView $view)
    {
        if (isset($key)) {
            $this->_views[$key] = $view;
        } else {
            $this->_views[] = $view;
        }
        return true;
    }

    /**
     * Attach multiple views
     */
    public function attachViews(array $views)
    {
        foreach ($views as $key => $view) {
            $this->attachView($key, $view);
        }
    }

    /**
     * Get the attached views
     */
    public function getViews()
    {
        return $this->_views;
    }

    /**
     * Build the layout(s)
     */
    public function build()
    {
        foreach ($this->_views as $_view) {
            // create a predefined layout with the attached views (customizable)
            $_view->addViews(array(
                new PartialView('header.php'),
                new PartialView('body.php'),
                new PartialView('footer.php')
            ));
        }
    }
}