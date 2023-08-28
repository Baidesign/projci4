<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Form extends BaseController
{
    public function index()
    {
        //to be able to load the form validation libraries
        //this allows as t ouse methods like validate
        helper(['form']);
        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Dep-Principle',
            'Principle'
        ];

        //we create variable to form rules for our form
        if($this->request->getMethod() == 'post'){
            $rules = [
                //we separate rules will | as shown below
                // 'email' => [
                //     'rules' =>'required|valid_email',
                //     'label' => 'Email Address',
                //     // below we are customizing our error message to produce our own custom ones
                //     // we can specify for each rule
                //     'errors' => [
                //         'required' => 'Hey, The Email address is  a required field',
                //         'valid_email' => 'Oh, really?? Pls provide a valid  email address to continue'
                //     ]

                // ],
                // 'password' => 'required|min_length[8]',
                // //from the rule below user can only choose the two option provided only
                // //the others will give him/her an error
                // 'category' => 'in_list[Student, Teacher]',
                // 'date' => [
                //     'rules' => 'required|check_date',
                //     'label' => 'Date',
                //     'errors' => [
                //         'check_date' => 'You can not add a past date it has to be a present date'
                //     ]
                // ]
                'ourFile' => [
                    'rules' => 'uploaded[ourFile]|max_size[ourFile, 1024]',
                    'label' => 'Our File',
                    'errors' => [
                        'uploaded' => 'Pls Upload something !!!',
                        'max_size' => 'Aki that is to large for us to handle walai'
                    ]
                ]
            ];
            if($this->validate($rules)){
                //the piece of code below should return to us the name
                //of our uploaded file
                $file = $this->request->getFile('ourFile');
                //the code snippets below will validate our file before uploading it to our server
                if ($file->isValid() && !$file->hasMoved()) {
                    # code...
                    $file->move('./uploads/images'/**create RANDOM name */);
                }
               
                //Then do database insertion
                //login user
                //this redirect to our success method
                //return redirect()->to('/form/success');
            }else{
                //to give as the list of errors generated when the validation fails
                $data['validation'] = $this->validator;
            }
        }
            
        
        return view('form', $data);
    }

    function success(){
        return 'Hey, you have passed the validation, Congrats!!!';
    }
}
