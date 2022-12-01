<?php include "nav.php"; ?>
<br><br><br><br>
<div class="form">

    <h1>Appoinment Form</h1>

    <div class="container">
        <form action="/action_page.php">
            <label for="fname" class="abc">Patient Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname" class="abc">Phone</label>
            <input type="number" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country" class="abc">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php include "footer.php" ?>