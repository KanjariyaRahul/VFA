<!-- Right Section -->
<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>
        <div class="profile" id="pro-menu">
            <div class="info">
                <p>Hey, <b></b></p>
                <small class="text-muted"></small>
            </div>
            <!-- <div id="google_translate_element"></div> -->
            <div class="profile-photo">
                <img src="../img/default-user.png" id="p-modal" alt="profile_picture">
            </div>
            <!-- Profile Icon Dropdown -->
            <div class="dropdown">
                <li>
                    <a href="../account/">
                        <span class="material-icons-sharp">
                            person
                        </span>
                        Account
                    </a>
                </li>
                <li onclick="logout()">
                    <a href="">
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        Signout
                    </a>
                </li>
            </div>
        </div>
    </div>
    <!-- End of Top -->
    <div class="recent-updates">
        <h2>Recent Updates</h2>
        <div class="updates">
            <?php
            $result = mysqli_query($con, "SELECT * FROM `recent-updates`");
            while ($data = mysqli_fetch_array($result)) {
                echo '<div class="update">
                    <div class="profile-photo">
                        <img src="../img/upload/recent-update/' . $data["image"] . '" alt="' . $data["image"] . '">
                    </div>
                    <div class="message">
                        <p>' . $data["msg"] . '</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</div>

<script>
    $(".info p b").text(sessionStorage.getItem("farmerName"));

    $("#pro-menu").click(() => {
        // console.log("Profile Clicked..");
        $(".dropdown").toggle();
    })

    // Logging Out 
    function logout() {
        console.log("Logout CLicked");
        let see = confirm("Are you sure you want to Logout?");
        if (see) {
            sessionStorage.clear();
            window.location.href = "../auth";
        } else {
            console.log("Logout Canceled by user");
        }
    }
</script>

<!-- Google Translate API -->
<!-- <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->