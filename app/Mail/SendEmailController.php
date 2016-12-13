<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailController extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	 
	 public $fname;
	 public $lname;
    public function __construct($fname,$lname)
    {
        //
		$this->fname = $fname;
		$this->lname = $lname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mail');
		$this->view('mail')->with([
		 'fname' => $this->fname,
		 'lname' => $this->lname,
		 
		 ]);
		 
		 
		 
		 
    }
}
