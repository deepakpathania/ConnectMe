<form action="components/update-bio-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Short Bio</label>
            <textarea class="form-control rsz" rows="3" placeholder="Describe yourself briefly, say Software Developer based out of Delhi." name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
        </div>
        <div class="form-group float-label-control">
            <label for="">Address</label>
            <textarea class="form-control rsz" rows="3" placeholder="Your current address" name="user_address" value="<?php echo $rws['user_address'];?>"><?php echo $rws['user_address'];?></textarea>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Birthday</label>   
            <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Profession</label>
            <input type="text" class="form-control" placeholder="Software Developer" name="user_profession" value="<?php echo $rws['user_profession'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Country</label>
            <input type="text" class="form-control" placeholder="India" name="user_country" value="<?php echo $rws['user_country'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Skype ID</label>
            <input type="text" class="form-control" placeholder="@abc.xyz96" name="user_skype" value="<?php echo $rws['user_skype'];?>"/>
        </div>
    </div>          
<?php
    $user_username =  $_POST['user_username'];
?>     
                     
    <div class="submit">          
        <center>
            <button class="btn btn-primary ladda-button zbor mtops" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>