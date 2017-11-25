<?php
$contactFields = [
    'email' => [
        'label' => 'Email',
        'class' => 'col-md-6',
        'type' => 'email',
        'placeholder' => 'Entrez votre email',
        'helpText' => 'Vous recevrez votre réponse sur cet email.',
        'required' => true
    ],
    'name' => [
        'label' => 'Nom',
        'class' => 'col-md-6',
        'type' => 'text',
        'placeholder' => 'Prénom ou surnom...',
        'pattern' => '/[-a-z0-9&@_ \']{1,}/i',
        'required' => true
    ],
    'subject' => [
        'label' => 'Objet',
        'type' => 'text',
        'placeholder' => 'Objet du message',
        'pattern' => '/[-a-z0-9+&@#\/%?=~_|!:,.; \'"]{2,}/i',
        'required' => true
    ],
    'message' => [
        'label' => 'Message',
        'type' => 'textarea',
        'placeholder' => '',
        'pattern' => '/.{2,}/',
        'required' => true
    ],
];

function checkContactForm($form, $validators) {
    $errors = [];
    if (!checkEmail($form['contactFormEmail'])) {
        $errors['email'] = 'L\'email ne semble pas valide';
    }
    foreach ($validators as $index => $validator) {
        if (!checkSubmittedValue($form[$validator['formName']], $validator['pattern'])) {
            $errors[$validator['errorId']] = $validator['error'];
        }
    }
    return $errors;
}

function checkEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) === $email;
}


function checkSubmittedValue($value, $pattern) {
    echo($value);
    echo preg_match($pattern, $value) === 1;
    return preg_match($pattern, $value) === 1;
}
