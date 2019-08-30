<?php
//       cron job command :              0 12 * * * /yyyyyy/php /xxxxxxx/script.php
require_once "vendor/autoload.php";

$host = '127.0.0.1';
$db   = 'hidayaqorania';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic("806ba54a", "hsRZYwq8S6dGTKxb")); 
  
     $students_stmt = $pdo->query('SELECT * FROM registrations inner join users where role_id=2');
     $stmt = $pdo->query('SELECT * FROM cycles where startDate="'.date('Y-m-d').'"');
     $row = $stmt->fetch();
     $cycle_name = $row['name'];
     
     while($row=$students_stmt->fetch())
    {
        $to_email = $row['Email'];
        $subject = 'هداية قرانية';
        $message = 'رسالة تذكيرية بداية التقرير' . $cycle_name;
        $headers = 'From: info@hidayatqurania.org';
        mail($to_email,$subject,$message,$headers);
        $message = $client->message()->send([
            'to' => $row['Phonne1'],
            'from' => 'hidayatqurania',
            'text' => 'رسالة تذكيرية بداية التقرير' . $cycle_name,
            'type' => 'unicode'
        ]);
     }


     $stmt = $pdo->query('SELECT * FROM cycles where endDate="'.date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 days')).'"');
     $row = $stmt->fetch();
     $cycle_name = $row['name'];

     while ($row = $students_stmt->fetch())
     {
        $to_email = $row['Email'];
        $subject = 'هداية قرانية';
        $message = 'رسالة تذكيرية نهاية التقرير' . $cycle_name;
        $headers = 'From: info@hidayatqurania.org';
        mail($to_email,$subject,$message,$headers);
        $message = $client->message()->send([
            'to' => $row['Phonne1'],
            'from' => 'hidayatqurania',
            'text' => 'رسالة تذكيرية نهاية التقرير' . $cycle_name,
            'type' => 'unicode'
        ]);
     }


} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>