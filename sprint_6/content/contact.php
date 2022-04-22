
<body style=" background-color: #d8e0eb;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact_header"> 
                    <h1>Bezoek Adres</h1>
                </div>
                <div class="contact_text">
                    <p> Van Moerkerkstraat 21 <br>
                        1024 DG Amsterdam
                        <br>
                        <br>
                        Tel. 020 123 456 78 <br>
                        info@spyservices-int.nl 
                        <br>
                        <br>
                        KVK. 123 456 789
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div> 
                    <h1 class="contact_header">Contact Formulier</h1>
                </div>
                <div class="contactform">
                    <form method="post">
                        <input type="text"  name="Name" placeholder="Name" class="contact" required>
                        <input type="email" name="Email" placeholder="Email" class="contact" required>
                        <input type="text" name="Phone" placeholder="phone number" class="contact" required >
                        <textarea type="text" name="Message" placeholder="Message" class="contact" required></textarea>
                        <div>
                            <button class="button" name="submit">send</button>
                        </div>
                    </form>
                    <?php
 
 if (isset($_POST['submit'])) {
    $naam = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $phonenumber = htmlspecialchars($_POST['Phone']);
    $vraag = htmlspecialchars($_POST['Message']);
    $ipaddress = getenv("REMOTE_ADDR");
    echo '<h3 class="contact_header .contact_text">Message Sent: </h3><br>'; 
    echo "<p class='contact_text'>naam: $naam<br>";
    echo "email: $email<br>";
    echo "phonenumber: $phonenumber<br>";
    echo "question: $vraag<br>";
    echo "Your IP Address is: $ipaddress</p><br>";
    // IP 172.19.80.186
    }
?>
                </div>
            </div>
            <div class="col-md-4">
                <div> 
                    <h1 class="contact_header">locatie</h1>
                </div>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1084.9304347373609!2d4.816553967840911!3d52.37791907541443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e24d27cc29cb%3A0xffa85b213c783cb2!2sVan%20Moerkerkenstraat%2021%2C%201064%20KC%20Amsterdam!5e0!3m2!1sen!2snl!4v1647432024500!5m2!1sen!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>