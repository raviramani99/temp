<?php

class mail extends siCommon {

    public function __construct() {
        $this->oSession = new sessionManager();
        $sDbHost = getconfig('dbHost');
        $sDbUser = getconfig('dbUser');
        $sDbPassword = getconfig('dbPassword');
        $sDbName = getconfig('dbName');
        parent::__construct($sDbHost, $sDbUser, $sDbPassword, $sDbName);
    }

        public function sendMail($aMailDetails) {

            $to       = $aMailDetails['user_email'];
            $subject  = 'CTRL verification';
            $message  = '<html>'
                        . '<head>'
                        . '</head>'
                        . '<body>'
                        . '<center>'
                            . '<div>'
                                . '<h1>This is your verification mail "DO NOT SHARE WITH ANYONE"</h1>'
                                . '<h3>Your password is </h3>'
                                . '<h2>'
                                    .$aMailDetails['password']
                                . '</h2>'
                                . '<h3>Your verification link is </h3>'
                                . '<h2>'
                                .$aMailDetails['verification_link']
                                . '</h2>'
                            . '</div>'
                        .'</center>'
                        . '</body>'
                    . '</html>';
            $headers  = 'From: ravip.stepin@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';

            if(mail($to, $subject, $message, $headers)) {

                redirect(getConfig('siteUrl') . '/home/inviteUser');
            }
            else {
                    echo "Email sending failed";
            }

 
        }
}