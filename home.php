<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Home</title>
</head>
<body>
    

    <div class="navbar">
        <p> <span> Jewellery shop </span></p>
       <div class="signin border">
            <p> <span>  Home </a></span></p>
        </div>

        <div class="navshop">
            <p> <span>shop</span></p>
        </div>
        
        <div class="navcontact">
            contact us
        </div>
        <div class="signin border">
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
        <div class="others">
            <a href="#"><i class="fa-solod fa-lock"></i></a>
        </div>
</div>

</head>


<div class="container">
    <h2>Products</h2>
    <table>
        
            <tr>
            <td><img src="1.png" alt="">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>

            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            </tr>
           
            <tr>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>

            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            </tr>
            <tr>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>

            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            <td><img src="https://www.candere.com/media/catalog/product/K/C/KC04132_1.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=360&width=360&canvas=360:360" alt="Product 1">
            <p>Neck lace</p>
            <p>100000₹</p>
             <div class="button-container">
                <button>Shop Now</button>
                <button>Add to Cart</button>
            </div>
            </td>
            </tr>
 </table>
    <section class="contact">
            <div class="contact-info">
                <h2>Contact us</h2>
                <ul>
                    <li><strong>Email:</strong> pkirtan851@gmail.com</li>
                    <li><strong>Phone:</strong> 7069859581</li>
                    <li><strong>Social Media:</strong> <a href="#">Facebook</a>, <a href="#">Twitter</a>, <a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="feedback-form">
                <h2>Send us your feedback</h2>
                <form action="#" method="post">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </section>
</div>

</body>
</html>

   <form>
        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }
            ?>

            

        </div>
    </div>
</form>
</body>
</html>