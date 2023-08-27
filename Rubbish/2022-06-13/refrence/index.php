<div class="cards">
    <?php
    $result = mysqli_query($con, "SELECT * FROM community");
    while ($data = mysqli_fetch_array($result)) {
        $fid = $data['farmer-id'];
        $fname = mysqli_query($con, "SELECT * FROM farmer where id = $fid");
        $fdata = mysqli_fetch_array($fname);
        echo '<div class="post card" id="' . $data['id'] . '">
        <div class="post-top">
            <div class="post-profile-photo">
                <img src="../img/default-user.png" alt="profile_picture">
            </div>
            <h2><i style="color:orange"">@</i>' . $fdata['name'] . '</h2>
            <span class="primary">Follow</span>
        </div>
        <div class="data">
            <div class="post-bio">
                <p>' . $data['post-text'] . '</p>
            </div>
            <div class="post-stats">
                <ul>
                    <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >'.$data['post-like'].'</b> Likes</li>
                    <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >0</b> Comments</li>
                    <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >' . $data['share'] . '</b> Share</li>
                </ul>
            </div>
        </div>
        <img src="../img/upload/community/' . $data['post-picture'] . '" alt="post-img" class="post-img">
        <!--Like/Comment/Share Buttons-->
        <div class="btns">
            <a class="liked" href="like.php?postid=' . $data['id'] . '&&like=true"> <span class="material-icons-sharp"> thumb_up_alt </span> </a>
            <a href="like.php?"> <span class="material-icons-sharp"> thumb_down </span> </a> 
            <a href="update.php?id=' . $data['id'] . '&cmt=true"> <span class="material-icons-sharp"> try </span> </a>
            <a href="update.php?id=' . $data['id'] . '&share=true"> <span class="material-icons-sharp"> share </span> </a>
         </div>
    </div>';
    }

    ?>
    <!-- Post card Start from Here -->
    <!-- <div class="post card">
        <div class="post-top">
            <div class="post-profile-photo">
                <img src="../img/carousel-image02.jpg" alt="profile_picture">
            </div>
            <h2>@Hardik_Kanajariya</h2>
            <span class="primary">Follow</span>
        </div>
        <div class="data">
            <div class="post-bio">
                <p>Hello, <i class="post-real-name">Hardik</i> This is Post Description | Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eius optio reiciendis incidunt ipsum dignissimos, non iusto aliquam provident eveniet, asperiores aspernatur quam dolorem at placeat animi veritatis, aut quos obcaecati enim deleniti corporis.</p>
            </div>
            <div class="post-stats">
                <ul>
                    <li><b class="post-stat-count">164</b> Likes</li>
                    <li><b class="post-stat-count">188</b> Comments</li>
                    <li><b class="post-stat-count">206</b> Share</li>
                </ul>
            </div>
        </div>
        <img src="../img/image-box01.jpg" alt="post-img" class="post-img">
    </div> -->
    <!-- Post card Ends Here -->
</div>