<?php
namespace App\Helpers;

use Illuminate\Support\Str;

class WA {
    protected $to;
    protected $driver;
    function __construct($to) {
        $this->to = $to;
    }
    /**
     * Send mesage
     *
     * @param string $message
     * @return \Illuminate\Http\Client\Response
     */
    public function send($message){
        // return self::phone($phones);
        $connec = new WAConnection(self::phone($this->to),$this->driver);
       return $connec->post($message);
    }
    /**
     * Send mesage
     *
     * @param string $message
     * @return \Illuminate\Http\Client\Response
     */
    public function msg($message){
       return $this->send($message);
    }
    public function phone($phones){
        $phones=str_replace('-','',$phones);
        if(Str::is('+*', $phones)){
            $phones=str_replace('+','',$phones);
        }elseif (Str::is('08*', $phones)) {
            $phones = Str::replaceFirst('0','62', $phones);
        }
        if(strlen($phones)<10||!is_int($phones)){
            throw new \Exception("Phone Number Invalid");
        }
        return $phones;
    }
    /**
     * Set WA driver
     *
     * @param string $driver
     * @return WA
     */
    public function driver($driver){
        $this->driver=$driver;
       return  $this;
    }
    /**
     * WA Number
     *
     * @param mixed $phone
     * @return WA
     */
    public static function to($phone){
       return  new self($phone);
    }
    
}
