  <?

    
         // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 
  if($_POST) {
    // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
    $result = $pdo->prepare('INSERT INTO contact (nom, mail, tel, sujet, message) VALUES (:nom, :mail, :tel, :sujet, :message)');
    // On remplace les éléments préparés par les données envoyées par le formulaire
    $result->execute(array(
          'nom' => $_POST['nom'],
          'mail' => $_POST['mail'],
          'tel' => $_POST['tel'],
          'sujet' => $_POST['sujet'],
          'message' => $_POST['message'],

          
    ));?>
   