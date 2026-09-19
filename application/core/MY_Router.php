<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HMVC router for CodeIgniter 3.
 *
 * Supports URLs such as:
 *   /home
 *   /admin
 *   /admin/dashboard
 *
 * Controllers remain inside application/modules/<module>/controllers/.
 */
class MY_Router extends CI_Router
{
    protected function _validate_request($segments)
    {
        $segments = array_values($segments);

        if (empty($segments)) {
            return $segments;
        }

        $module = $segments[0];
        $controller = isset($segments[1]) ? $segments[1] : $module;

        $moduleController = APPPATH . 'modules' . DIRECTORY_SEPARATOR
            . $module . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
            . ucfirst(str_replace('-', '_', $controller)) . '.php';

        if (is_file($moduleController)) {
            // CodeIgniter's front controller concatenates APPPATH/controllers/
            // with this directory, so ../modules/... resolves correctly.
            $this->directory = '../modules/' . $module . '/controllers/';
            array_shift($segments);

            // When /admin is requested, use Auth::login as configured by routes.
            // Routes are parsed before this method, so explicit routes still win.
            return $segments;
        }

        return parent::_validate_request($segments);
    }

    protected function _set_default_controller()
    {
        if (empty($this->default_controller)) {
            show_error('Unable to determine what should be displayed. A default route has not been specified in the routing file.');
        }

        $parts = explode('/', trim($this->default_controller, '/'));
        $module = $parts[0] ?? '';
        $class  = $parts[1] ?? $module;
        $method = $parts[2] ?? 'index';

        $file = APPPATH . 'modules/' . $module . '/controllers/' . ucfirst($class) . '.php';

        if (!is_file($file)) {
            parent::_set_default_controller();
            return;
        }

        $this->directory = '../modules/' . $module . '/controllers/';
        $this->set_class($class);
        $this->set_method($method);
        $this->uri->rsegments = array(1 => $class, 2 => $method);
        log_message('debug', 'HMVC default controller set: ' . $module . '/' . $class . '/' . $method);
    }
}
