<?php
require_once( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'PasswordHash.php' );
/**
 *
 */
class Auth {

    /**
     * Allow read access to data
     */
    const READ = 1;

    /**
     * Holds an internal map of allowed users.
     * @var array
     */
    private $auth = array();

    /**
     * Holds the password hashing system
     * @var PasswordHash
     */
    protected $hasher;


    /**
     *
     */
    public function __construct(){
        $this->hasher = new PasswordHash();
    }


    /**
     * @param $username
     * @param $password
     * @param int $access
     */
    public function addUser( $username, $password, $access = self::READ ){
        $this->auth[$username] = array(
            'password' => $this->hasher->HashPassword( $password ),
            'access' => $access
        );
    }


    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function authUser( $username, $password ){
        if(!REQUIRE_AUTH) return true;
        if(isset($this->auth[$username])){
            $user = $this->auth[$username];
            if($this->hasher->CheckPassword($password,$user['password'])){
                return true;
            }
        }
        return false;
    }


    /**
     * @param $token
     * @return string
     */
    public function hashString($token){
        return $this->hasher->HashPassword( $token );
    }


    /**
     * @param $token
     * @return string
     */
    public function checkToken( $token_a, $token_b){
        if(!REQUIRE_AUTH) return true;
        return $this->hasher->CheckPassword( $token_a, $token_b );
    }
}
