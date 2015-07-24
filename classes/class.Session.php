<?php

/**
 * Session Helper Class
 *
 * A simple session wrapper class.
 */
class Session {

    /**
     * Writes a value to the current session data.
     * 
     * @param string $key String identifier.
     * @param mixed $value Single value or array of values to be written.
     *
     */
    public static function write($key, $value) {
        $_SESSION[$key] = $value;
        return $value;
    }

    /**
     * Reads a specific value from the current session data.
     * 
     * @param string $key String identifier.
     *
     */
    public static function read($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return false;
    }

    /**
     * Deletes a value from the current session data.
     * 
     * @param string $key String identifying the array key to delete.
     * 
     */
    public static function delete($key) {
        unset($_SESSION[$key]);
    }

    /**
     * Echos current session data.
     * 
     * @return void
     */
    public static function dump() {
        echo nl2br(print_r($_SESSION));
    }

    /**
     * Starts or resumes a session by calling {@link Session::_init()}.
     * 
     * @see Session::_init()
     * @return boolean Returns true upon success and false upon failure.
     * @throws SessionDisabledException Sessions are disabled.
     */
    public static function start($regenerate_session_id = true, $limit = 0, $path = '/', $domain = null, $secure_cookies_only = null) {
        // this function is extraneous
        return self::_init($regenerate_session_id, $limit, $path, $domain, $secure_cookies_only);
    }

    public static function regenerate_session_id() {

        $session = array();

        foreach ($_SESSION as $k => $v) {

            $session[$k] = $v;
        }

        session_destroy();

        session_id(bin2hex(openssl_random_pseudo_bytes(16)));

        session_start();

        foreach ($session as $k => $v) {

            $_SESSION[$k] = $v;
        }
    }

    /**
     * Returns current session cookie parameters or an empty array.
     * 
     * @return array Associative array of session cookie parameters.
     */
    public static function params() {
        $r = array();
        if ('' !== session_id()) {
            $r = session_get_cookie_params();
        }
        return $r;
    }

    /**
     * Closes the current session and releases session file lock.
     * 
     * @return boolean Returns true upon success and false upon failure.
     */
    public static function close() {
        if ('' !== session_id()) {
            return session_write_close();
        }
        return true;
    }

    /**
     * Alias for {@link Session::close()}.
     * 
     * @see Session::close()
     * @return boolean Returns true upon success and false upon failure.
     */
    public static function commit() {
        return self::close();
    }

    /**
     * Removes session data and destroys the current session.
     * 
     * @return void
     */
    public static function destroy() {
        if ('' !== session_id()) {
            $_SESSION = array();

            // If it's desired to kill the session, also delete the session cookie.
            // Note: This will destroy the session, and not just the session data!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
                );
            }

            session_destroy();
        }
    }

    /**
     * Initializes a new session or resumes an existing session.
     * 
     * @return boolean Returns true upon success and false upon failure.
     * @throws SessionDisabledException Sessions are disabled.
     */
    private static function _init($regenerate_session_id = false, $limit = 0, $path = '/', $domain = null, $secure_cookies_only = null) {
        if ('' === session_id()) {

            $domain = isset($domain) ? $domain : $_SERVER['SERVER_NAME'];

            session_set_cookie_params($limit, $path, $domain, $secure_cookies_only, true);

            session_start();
            $_SESSION['id'] = session_id();
        }

        return true;
    }

    public static function isLogged(){
        if (strlen(Session::read("email")) && strlen(Session::read("userid"))) {
            return true;
        }
        return FALSE;
    }
    
    public static function logOut(){
        if (strlen(Session::read("email")) && strlen(Session::read("userid")) && strlen(Session::read("access_type"))) {
            Session::delete("email");
            Session::delete("userid");
            Session::delete("access_type");
            Session::destroy();
        }
        General::redirectUrl(SERVER_URL);
        return true;
    }
}
