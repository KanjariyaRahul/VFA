<?php include("../include/popup.php");?>
<!-- Right Section -->
<div class="right ">
    <div class="top" style="background:white; height: 80px;">
        <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>
        <div class="notification">
            <span class="material-icons-sharp bell-icon">
                notifications
            </span>
            <div class="dropdown-menu" id="notificationToggle">
                <ul>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <span class="material-icons-sharp">
                                    markunread
                                </span>
                            </div>
                            <div>
                                <span class="text-muted notification-title">Notification Title</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quae pariatur! Commodi harum id voluptate facere soluta magnam unde dignissimos.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <span class="material-icons-sharp">
                                    markunread
                                </span>
                            </div>
                            <div>
                                <span class="text-muted notification-title">Notification Title</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quae pariatur! Commodi harum id voluptate facere soluta magnam unde dignissimos.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <span class="material-icons-sharp">
                                    markunread
                                </span>
                            </div>
                            <div>
                                <span class="text-muted notification-title">Notification Title</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quae pariatur! Commodi harum id voluptate facere soluta magnam unde dignissimos.</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <a class="text-muted" style="color: var(--color-primary); width:100%; text-align:center; display: block;" href="#">Show All Messeges</a>
            </div>
        </div>
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
                <li>
                    <a href="../auth/index.php?so=true">
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
        <div class="updates">
            <h2>Recent Updates</h2>
            <hr> <br>
            <?php
            $result = mysqli_query($con, "SELECT * FROM `recent-updates`");
            $i=1;
            while ($data = mysqli_fetch_array($result)) {
                $i++;
                if($i>=10){
                    continue;
                }else{
                    echo '<div class="update">
                    <div class="profile-photo">
                        <img src="../img/upload/recent-update/' . $data["image"] . '" alt="' . $data["image"] . '">
                    </div>
                    <div class="message">
                        <p>' . $data["msg"] . '</p>
                        <input class="update_time" type="hidden" value="'.$data['time_stamp'].'">
                        <small class="text-muted time_id" id="t-' . $data["id"] . '">2 minutes ago</small>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<script>
    // calculating From Now time of Recent Updates 
    $(document).ready(function() {
        $('.update').each((index, item) => {
            let time_id = $(item).find(".time_id").attr("id");
            let update_time = $(item).find(".update_time").val();
            parts = update_time.split("-");
            // console.log(parts[0]);
            let from_time = moment([parts[0], parts[1]-1, parts[2]]).fromNow();
            $("#"+time_id).text(from_time);
        })
    })

    // Getting Farmer Name from Session Storage
    $(".info p b").text(sessionStorage.getItem("farmerName"));

    // Profile DropDown Clicker 
    $("#pro-menu").click(() => {
        // console.log("Profile Clicked..");
        $(".dropdown").toggle();
    })
</script>