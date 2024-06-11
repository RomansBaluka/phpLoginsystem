<?php   

class SignupContr extends Signup {

    

    private $uid; 
    private $pwd; 
    private $pwdrepeat; 
    private $email;

    
    public function __constructs($uid, $pwd, $pwdrepeat, $email)  {   
        $this->  uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    
    }

    public function signupUser() {
        if($this->emptyInput() == false ) {
            // echo "Empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false ) {
            // echo "Invalid user name!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false ) {
            // echo "Invalid email adress!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->pwdMatch() == false ) {
            // echo "Password don't match!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->emailCheck() == false ) {
            // echo "Username or email is taken!!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        } 
        return $result;
    }
    private function invalidUid() {
        $result=false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
            else {
                $result = true;
            }
            return $result;
     }
     private function invalidEmail() {
        $result=false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
            else {
                $result = true;
            }
            return $result;
     }
     private function pwdMatch() {
        $result=false;
        if ($this->pwd !== $this->pwdrepeat)
        {
            $result = false;
        }
            else {
                $result = true;
            }
            return $result;
     }

     private function emailCheck() {
        $result=null;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else {
            $result = true;
            }
        return $result;
     }


}

?>




