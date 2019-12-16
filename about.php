<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $result = 'concentrate';

?>
<br>
    <h6 class="text-left">At U-DRIVE we believe everyone deserves to have easy-to-use and free file offsite platforms to facilitate file storage and sharing. 
                          Innovation and simplicity makes us happy: our goal is to remove any technical or financial 
                          barriers that can prevent interested persons from performing cloud storage or cloud file sharing. We're excited to help 
                          you on your journey!.
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

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
