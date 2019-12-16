<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $result = 'servicio2';

?>
<br>
    <h6 class="text-left">U-DRIVE is a secure cloud storage service with 50 GB of data storage space.
                This version contains the new download page video viewer, U-DRIVE public upload folder feature, file versioning and U-DRIVEchat.
                This extension will allow you to install U-DRIVE into your browser. It will reduce loading times, improve download performance and strengthen security. If you wish to download a version from our site you can find a manual installer can be provided to you if you reach out to the developer of this site via the contact Us tab.
                Any U-DRIVE URL will be captured by this app and stay local (no JavaScript will be loaded from our servers).
    </h6>

<br/>
    <div>

    <table class="table">
    <tr>
    <td>
        <img src="images/gallery/<?php echo $result; ?>.jpg">     
    </td>  
    
    </tr>    
  
    </table>

    </div>

<!-- <form method="get" action="success.php"> this method shows the values in the URL query string 
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
    </div>

    <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
    </div>

    <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
    </div>

    <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <option>Database Administrator</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact number</label>
        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form> -->

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
