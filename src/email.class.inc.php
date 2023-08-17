<?php

	class Email {
	
		private
			$cfg = null,
			$to_array = array(),
			$cc_array = array(),
			$bcc_array = array(),
			$screen_style,
			$print_style,
			$from,
			$from_name = "Blood donation",
			$reply_to,
			$reply_to_name,
			$subject,
			$message,
			$attachments = array(),
			$sender, // set for return path
			$smtp = true;
			
		public			
			$errors;

		function __construct( &$cfg = null ) {
		
		}
	
		private function add_address( &$array, $address, $name = "" ) { 
			
			$address = $this->strip_string( $address );
			
			if( !isValidEmail1( $address ) )
				return false;
		
			$array[$address] =  $name?$name:$address;
			
			return true;
		}

		function add_to( $email_address, $name = "" ) {
		
			return $this->add_address( $this->to_array, $email_address, $name );
		}
		
		function add_cc( $email_address, $name = "" ) {
		
			return $this->add_address( $this->cc_array, $email_address, $name );
		}
		
		function add_bcc( $email_address, $name = "" ) {
		
			return $this->add_address( $this->bcc_array, $email_address, $name );
		}
		
		function set_from( $email_address )	{
			
			
			$email_address = $this->strip_string( $email_address );
			
			if( !isValidEmail1( $email_address ) )
			return false;
			
			$this->from = $email_address;
			
			return true;
		}
		
		function set_from_name( $from_name )	{			
			
			$this->from_name = $from_name;
			
			return true;
		}
		
		function add_reply_to($reply_to, $reply_to_name = "") {
			
			$email_address = $this->strip_string( $reply_to );
			
			if( !isValidEmail1( $reply_to ) )
				return false;
			
			$this->reply_to = $email_address;
			
			$this->reply_to_name = $reply_to_name?$reply_to_name:$reply_to;
			
			return true;
		}
		
		function set_sender($sender) {
			
			$email_address = $this->strip_string( $sender );
			
			if( !isValidEmail1( $sender ) )
				return false;
			
			$this->sender = $email_address;
			return true;
		}
		
		function set_subject( $subject ) {
			
			$subject = $this->strip_string( $subject );
			
			if( empty( $subject ) )
			return false;
			
			$this->subject = $subject;
			
			return true;
		}
		
		function set_message( $message ) {
		
			$this->message = $message;	
					
			return true;
		}
		
		function set_attachment( $attachment ) { // full file path
		
			if(!$attachment || !file_exists($attachment))
				return false;
			
			$this->attachments[] = $attachment;
			return true;
		}
		
		
		function strip_string( $value ) {
			$value = urldecode( $value );
			$value = strip_tags( $value );
			$value = trim( $value );
			return $value;
		}

		function validate() {
			
			if( (empty( $this->to_array ) && empty( $this->cc_array ) && empty( $this->bcc_array ) ) || empty( $this->from )  || empty( $this->subject )  || empty( $this->message ) )
			return false;
			
			return true;
		}


		function send( $priority = 5 ) {
		        global $configVars;
			assert( is_numeric( $priority ) );	
			//if( !$this->validate() )
			//	return false;

			require_once('phpmailer/class.phpmailer.php');

			$mail	= new PHPMailer(); // defaults to using php "mail()"
			
			if($this->smtp == true) {
				
				$mail->IsSMTP(); // telling the class to use SMTP
				$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
														   // 1 = errors and messages
														   // 2 = messages only
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
				$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
				$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
				$mail->Username   = $configVars['user_name']; // GMAIL username
				$mail->Password   = $configVars['password']; // GMAIL password
			}
			
			$mail->IsHTML(true);
			
			$mail->SetFrom($this->from, $this->from_name);
			
			if($this->reply_to) $mail->AddReplyTo($this->reply_to, $this->reply_to_name);
			
			if($this->sender) $mail->Sender = $this->sender;
			
			if(is_array($this->to_array) && count($this->to_array)) {
				
				foreach($this->to_array as $address => $name) {
					
					$mail->AddAddress($address, $name);
				}
			}
			
			if(is_array($this->cc_array) && count($this->cc_array)) {
				
				foreach($this->cc_array as $address => $name) {
					$mail->AddCC($address, $name);
				}
			}
			
			if(is_array($this->bcc_array) && count($this->bcc_array)) {
				
				foreach($this->bcc_array as $address => $name) {
					$mail->AddBCC($address, $name);
				}
			}
			
			$mail->Subject    = $this->subject;
			$mail->Body       = $this->message;
			
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			//print_r($mail); 
			//$mail->MsgHTML($body);
			
			//	attachment
			if(is_array($this->attachments) && count($this->attachments)) {
				
				foreach($this->attachments as $key => $attachment) {
				
					$mail->AddAttachment($attachment);
				}
			}
			//	attachment
			
			if(!$mail->Send()) {
				
				$this->errors = $mail->ErrorInfo;
				return false;
			}
			
			//	mail successfully sent
			return true;
		}
	}

	function isValidEmail1( $value )
	{
		if((strlen($value) > 110) || empty($value))
		return false;
		
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", $value))
		return false;
		
		return true;
	}
	
?>
