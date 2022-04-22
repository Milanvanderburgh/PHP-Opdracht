<body style=" background-color: #d8e0eb;">
    <?php
        $username = "";
        $password = "";

        $username_control = "J_Bond";
        $password_control = '$2y$10$NbSdYoVLoLb9sQeH.neeseI9q30tEy51B38Y5IkY0LhgoHIex9WmG';


        if (isset($_POST['Login'])) {
            
                $username = htmlspecialchars($_POST["naam"]);
                $password = htmlspecialchars($_POST["wachtwoord"]);
                
            if($username == $username_control && password_verify($password, $password_control)) {
                Echo '<h2 class="ingelogd">u bent ingelogd</h2>';
                include("content/geheimedocumenten.php");               
            } 
            else {
                include("content/documenten.php");
                echo "<p class='fail'>Uw inloggegevens kloppen niet, probeer het opnieuw!</p>";
                
            } 
        } else {
            include("content/documenten.php");
        }
        ?>