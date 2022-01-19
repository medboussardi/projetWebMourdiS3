<?php include 'include/session.php';?>
<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

// if(isset($_POST['submit'])){
// $to = "lakrakarouafaa@gmail.com";
// $subject = "Formulaire";
// $from = $_POST['email'];
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $subject = "Form submission";
// $subject2 = "Copy of your form submission";
// $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
// $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
// $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
// mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); 

// }
?>
<?php include 'include/header.php';?>
        <!-- form to do here -->
        <section class="container-fluid" style="background-color: #7CD1B8 ;">
            <div class="container mail-form">
                <form action="mailto:lakrakarouafaa@gmail.com" method="" class="form-control">
                    <div class="mb-3">
                        <h1>Donnez votre avis à notre site Web.</h1>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">votre prenom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">votre nom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Vote Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" ></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
</section>
        <!-- footer from bootstrap temp -->
     <!-- footer from bootstrap temp -->
     <?php  include 'include/footer.php' ;?>
        
</body>
</html>
<!--  -->