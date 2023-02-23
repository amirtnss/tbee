<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler</title>
    <link rel="stylesheet" href="css/postuler.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<footer class="contact">
        <div id="contact-heading">
            <h1 >  Postuler à une formation </h1>
            <p>L’admission à The BRIDGE Ecole Entreprises se fait en 2 étapes : candidature + entretien téléphonique/test et dossier d'inscription. Plusieurs sessions sont ouvertes tout au long de l’année. Choisissez la formation qui vous convient et pré-inscrivez-vous. Le Service Admissions vous recontactera pour vous confirmer l’heure et le rendez-vous.</p>
        </div>
        <form action="userinformation.php" method="post">
        <label for="pet-select">Quelle formation?</label>

            <select name="pets" id="pet-select">
                <option value="Expert UX">Expert UX</option>
                <option value="Expert SEO">Expert SEO</option>
                <option value="Expert Traffic Manager">Expert Traffic Manager</option>
                <option value="Expert SEA">Expert SEA</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="Social Media Manager">Social Media Manager</option>
                <option value="Marketing Digital E-commerce">Marketing Digital E-commerce</option>

            </select>            
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
        <a class ="main-btn contact-btn" href="#"><strong style="font-size:30px;">↑</strong> </a>

    </footer>

</html>