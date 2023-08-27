<?php require("../connection/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/feeds.css">
    <style>
        .post-data>a {
            display: none;
        }

        .bn632-hover {
            width: 160px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 20px;
            height: 55px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:hover {
            background-position: 100% 0;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:focus {
            outline: none;
        }

        .bn632-hover.bn22 {
            background-image: linear-gradient(to right,
                    #0ba360,
                    #3cba92,
                    #30dd8a,
                    #2bb673);
            box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
        }

        .mtop {
            width: 60px;
            position: fixed;
            bottom: 0%;
            right: 0%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mtop>span {
            font-size: 2.1rem;
            margin-right: 0%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main id="home">
            <h1>Feed Post</h1>
            <!-- Feed Likes And Views Counter -->
            <!-- <div class="feed-top">
                <div>
                    <span class="material-icons-sharp" style="margin-right: 5px; color:var(--color-primary);">
                        visibility
                    </span>
                    <b>3245&nbsp;</b>Farmers Viewed
                </div>
                <div>
                    <span class="material-icons-sharp liked">
                        favorite
                    </span>
                    &nbsp; 333
                </div>
            </div> -->
            <?php
            $url = "https://economictimes.indiatimes.com/prime/economy-and-policy/rssfeeds/63884214.cms";
            // $feed = simplexml_load_file($url);
            $feed = json_decode(json_encode(simplexml_load_file($url)), true);
            if (isset($feed['channel'])) {
                if (isset($feed['channel']['item'])) {
                    foreach ($feed['channel']['item'] as $data) {
            ?>
                        <!-- Feed Post Card -->
                        <div class="card">
                            <h2><?= $data['title'] ?></h2>
                            <div class="feed-body">
                                <img src="<?= $data['image'] ?>" alt="Feed Post Image">
                                <p class="post-data">
                                    <?= $data['description'] ?>
                                    <br>
                                    <button class="bn632-hover bn22">Read More</button>
                                </p>
                            </div>
                            <?php
                            $time = strtotime($data['pubDate']);
                            $date = json_decode(json_encode($time));
                            $pubdate = gmdate("l jS \of F Y", $date);
                            ?>
                            <div style="text-align: right;"><?= $pubdate ?></div>
                        </div>
                        <!-- Feed Post Card Ends Here -->
            <?php
                    }
                } else {
                    echo "item not found";
                }
            } else {
                echo "Chnnel Not Found";
            }
            ?>
            <a href="#home" class="bn632-hover bn22 mtop">
                <span class="material-icons-sharp">
                    navigation
                </span>
            </a>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>