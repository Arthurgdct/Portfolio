<?php
class Contact extends Db
{
    public int $id;
    public string $name;
    public string $email;
    public string $object;
    public string $message;

    /**
     * Methode qui crée un nouveau message dans la base de données.
     * @return void
     */
    public function createContact()
    {
        $query = 'INSERT INTO `contact` (`name`, `email`, `object`,`message`) VALUES 
    (:name, :email, :object, :message)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':object', $this->object, PDO::PARAM_STR);
        $stmt->bindParam(':message', $this->message, PDO::PARAM_STR);
        $stmt->execute();
    }



}
