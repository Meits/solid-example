<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 16:01
 */

namespace App\L;


use InvalidArgumentException;

abstract class AbstractView
{
    protected $_values = array();
    protected $_template;

    /**
     * Constructor
     */
    public function __construct($template = null)
    {
        if ($template !== null) {
            $this->setTemplate($template);
        }
    }

    /**
     * Set the view template
     */
    public function setTemplate($template)
    {
        $template = TEMPLATE.'/Templates' . DIRECTORY_SEPARATOR . $template;

        if (!file_exists($template)) {
            throw new InvalidArgumentException('The specified template is invalid.');
        }
        $this->_template = $template;
    }

    /**
     * Get the view template
     */
    public function getTemplate()
    {
        return $this->_template;
    }

    /**
     * Assign a value to the specified field of the view via the corresponding mutator (if it exists);
     * otherwise, assign the value directly to the '$_values' protected array
     */
    public function __set($name, $value)
    {
        $mutator = 'set' . ucfirst(strtolower($name));
        if (method_exists($this, $mutator) && is_callable(array($this, $mutator))) {
            $this->$mutator($value);
        } else {
            $this->_values[$name] = $value;
        }
    }

    /**
     * Get the value assigned to the specified field of the view via the corresponding getter (if it exists);
     * otherwise, get the value directly from the '$_values' protected array
     */
    public function __get($name)
    {
        $accessor = 'get' . ucfirst(strtolower($name));
        if (method_exists($this, $accessor) && is_callable(array($this, $accessor))) {
            return $this->$accessor;
        }
        if (isset($this->_values[$name])) {
            return $this->_values[$name];
        }
        throw new InvalidArgumentException('The field ' . $name . ' has not been set for this view yet.');
    }

    /**
     * Check if the specified field has been assigned to the view
     */
    public function __isset($name)
    {
        return isset($this->_values[$name]);
    }

    /**
     * Unset the specified field from the view
     */
    public function __unset($name)
    {
        if (isset($this->_values[$name])) {
            unset($this->_values[$name]);
            return true;
        }
        return false;
    }

    /**
     * Render the template
     */
    protected function _doRender()
    {
        if ($this->_template !== null) {
            extract($this->_values);
            ob_start();
            include $this->_template;
            return ob_get_clean();
        }
        return '';
    }

    /**
     * Get an associative array with the values assigned to the fields of the view
     */
    public function toArray()
    {
        return $this->_values;
    }

    abstract public function addView(AbstractView $view);

    abstract public function addViews(array $views);

    abstract public function removeView(AbstractView $view);

    abstract public function render();
}