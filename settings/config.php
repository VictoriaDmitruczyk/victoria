<?php 
return [

    /*
    |--------------------------------------------------------------------------
    | Contact form
    |--------------------------------------------------------------------------
    */
   
   'contact_form' => [
      // Basic settings
   		'to' => 'victoria.dmitruczyk@gmail.com',
   		'defaultSubject' => 'Message from Contact Form',
        'from' => [
            'name'  => 'Sender Name',
            'email' => 'sender@email.com'
        ],

      // Validation rules
   		'validation' => [
   			'name' 		=>	'required',
   			'email'		=>	'required|email',
   			'message'	=>	'required|min:1',
   		],

       // Validation messages
   		'validationMessages' => [
   			'required'	=> 'This field is required',
   			'email'		=> 'Given email address is incorrect',
   			'min:1'	=> 'Enter more than 1 character, come on lol...'
   		],

      // Email template
   		'template' 		=> "Email from: {{name}} \r\nEmail address: {{email}} \r\n
							Message: \r\n
							{{message}} \r\n
							--------------------------------------------------- \r\n
							This email was sent from your site's contact form.",

      // Server error message
		  'serverError'	=> 'Something went wrong. Please try again later!'
   ]

];