
<?php


if(isset($_POST['create_post'])){
    $user_email = $_POST['user_email'];

            
       

        
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

      
        $stmt = $conn->prepare("INSERT INTO user (user_email) VALUES (?)");
        $stmt->bind_param("s", $user_email);

       
        $stmt->execute();

   
// heb verbiding met de database gemaakt
// je add een email in database
// maak een api link aan
// daarna in de oven
// even wachten en ik heb taart
    






}



?>


<form class="form" action="" method="post">
    <h2 class="form__h2">Schrijf je in</h2>
            <div class="form__div">
                <input name="user_email" class="form__input" type="email" id="email" placeholder="Vul hier uw email..." >
            </div>
            <!-- <div class="form__selects">

                <select class="form__select" name="newsletter" id="newsletter">
                    <option value="subscriped">Subscribe to our newsletter</option>
                    <option value="sub">I like to be informed</option>
                    <option value="unsub">I would not want to be informed</option>
                </select>

            </div> -->

            <button name="create_post" class="form__btn">Verstuur</button>
</form>