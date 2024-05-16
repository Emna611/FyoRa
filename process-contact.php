<?php

class ContactFormHandler {
    private $toEmail;
    private $subject;

    public function __construct($toEmail, $subject) {
        $this->toEmail = $toEmail;
        $this->subject = $subject;
    }

    public function processForm() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les données du formulaire
            $name = $this->sanitizeInput($_POST["name"]);
            $email = $this->sanitizeInput($_POST["email"]);
            $subject = $this->sanitizeInput($_POST["subject"]);
            $message = $this->sanitizeInput($_POST["message"]);

            // Vérifier si tous les champs sont remplis
            if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
                // Construire le message
                $messageBody = "Nom: $name\n";
                $messageBody .= "Email: $email\n";
                $messageBody .= "Sujet: $subject\n";
                $messageBody .= "Message: $message\n";

                // En-têtes pour l'email
                $headers = "From: $name <$email>\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

                // Paramètres pour SMTP
                $smtpConfig = [
                    'host' => 'smtp.gmail.com',
                    'port' => 587,
                    'username' => 'votre_email@gmail.com',
                    'password' => 'votre_mot_de_passe',
                    'auth' => true,
                    'starttls' => true,
                    'timeout' => 30,
                ];

                // Envoyer l'email en utilisant SMTP
                if ($this->sendEmail($this->toEmail, $this->subject, $messageBody, $headers, $smtpConfig)) {
                    echo "Votre message a été envoyé avec succès.";
                } else {
                    echo "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
                }
            } else {
                echo "Veuillez remplir tous les champs du formulaire.";
            }
        } else {
            echo "Accès non autorisé.";
        }
    }

    private function sendEmail($to, $subject, $message, $headers, $smtpConfig) {
        $transport = new \Zend\Mail\Transport\Smtp(new \Zend\Mail\Transport\SmtpOptions($smtpConfig));
        $mail = new \Zend\Mail\Message();
        $mail->setBody($message);
        $mail->setFrom($headers['From']);
        $mail->addTo($to);
        $mail->setSubject($subject);
        try {
            $transport->send($mail);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    private function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

// Remplacez 'votre_email@exemple.com' par votre adresse email réelle
$toEmail = 'votre_email@gmail.com';
$subject = 'Nouveau message de contact depuis votre site web';

// Créer une instance de la classe ContactFormHandler
$contactFormHandler = new ContactFormHandler($toEmail, $subject);

// Traitement du formulaire
$contactFormHandler->processForm();

?>
