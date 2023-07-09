<?php
require_once 'Models/Db.php';
require_once 'Models/Contact.php';

$errors = [];
$contact = new Contact;

if (isset($_POST['validform'])) {
    if (!empty($_POST['lastname'])) {
        $lastname = htmlspecialchars($_POST['lastname']);
        if (strlen($lastname) <= 40) {
            $contact->name = $lastname;
        } else {
            $errors['lastname'] = 'Le nom est trop long.';
        }
    } else {
        $errors['lastname'] = 'Merci de renseigner un nom.';
    }
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $contact->email = $email;
        } else {
            $errors['email'] = 'Merci de vérifier votre adresse email.';
        }
    } else {
        $errors['email'] = 'Merci de renseigner un email.';
    }
    if (!empty($_POST['object'])) {
        $object = htmlspecialchars($_POST['object']);
            $contact->object = $object;
    } else {
        $errors['object'] = 'Merci de renseigner un objet.';
    }
    if (!empty($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
            $contact->message = $message;
    } else {
        $errors['message'] = 'Vous devez écrire un message.';
    }
    if (empty($errors)) {
        $success = 'Merci ! Votre message a été envoyé avec succès.';
        $contact->createContact();
    }
}
