<?php 
    require_once('header.php');
?>

    <div class="contact-us">
        <h1>Send Us A Message</h1>

        <section class="contact">
            <form target="_blank" action="https://formsubmit.co/adeyemiakinyemi01@gmail.com" method="POST">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <input type="tel" name="number" placeholder="Enter your number" required>
                <textarea name="message" placeholder="Enter your message" required></textarea>
                <button type="submit">Send</button>
            </form>
    </section>
    </div>

    <?php 
    require_once('footer.php');
?>