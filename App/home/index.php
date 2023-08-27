<?php
require("../connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/home.css">
    <style>
        .loading-wrapper {
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .read-more-btn{
            margin-right: 5px;
            color: var(--color-danger);
            transition: all 500ms ease;
        }

        .read-more-btn:hover{
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="loading">
        <div class="loading-wrapper">
            <div class="lds-dual-ring">
                Loading...
            </div>
        </div>
    </div>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <div class="main-top-card" style="background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>Home</h1>
            </div>
            <!-- Card Section -->
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p id="alert-text"></p>
            </div>
            <div class="cards">
                <!-- Add new Farm Card -->
                <div class="card" onclick="$('.select-crop-section').toggle();" style="cursor: pointer;">
                    <div class="middle">
                        <span>+</span>
                        <h2 style="margin-right: 10px;">Add New Crop Details </h2>
                    </div>
                </div>
                <!-- Crop tracing Card  -->
                <div id="farm-card">

                </div>
                <!-- Krishi Samachar Card -->
                <div class="card">
                    <h2>Krishi Samachaar</h2>
                    <hr><br>
                    <!-- krishi smachar card -->
                    <div class="karishi-samachar-card scroll-snap-container">
                        <?php
                        $sql = "SELECT * FROM `news` ORDER BY 'time-stamp' desc";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="scroll-snap-child">
                                <img src="../img/upload/news/<?= $row['image'] ?>" alt="krishi-smachar-news thumbnail">
                                <div style="padding: 5px;">
                                    <h3>
                                        <?= $row['heading'] ?>
                                    </h3>
                                    <p class="text-fade" id="<?= md5($row['time-stamp']) ?>">
                                        <?= $row['news'] ?>
                                    </p>
                                    <div style="display: flex; justify-content:space-between; align-items:center;">
                                        <div>
                                            <span style="background-color: transparent; color:grey; font-size:medium;">
                                                <?php
                                                $date = explode(" ", $row['time-stamp']);
                                                echo $date[0];
                                                ?>
                                            </span>
                                        </div>
                                        <div style="display: flex; align-items: center; ">
                                            <a href="./news.php?id=<?=$row['id']?>" class="read-more-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>

    <!-- News Modal -->
    <!-- <section class="modal-section" style="display: none;" onclick="$(this).hide()">
        <div class="modal">
            <div class="modal-title">
                <h1 id="heading">News Heading</h1>
            </div>
            <div class="modal-body">
                <p id="modal-news">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eius ex aliquid natus
                    maiores consequatur, asperiores molestiae quaerat sint? Quaerat enim rerum error iste quod expedita
                    fugit! Eum eaque voluptatum soluta quae unde odio cum aut deserunt, provident libero quaerat,
                    blanditiis obcaecati reiciendis magnam facilis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="$('.modal-section').toggle()">Close</button>
            </div>
        </div>
    </section> -->

    <!-- Add new Farm Form  -->
    <form onsubmit="return false;" method="POST" id="add-farm-form">

        <!-- select-crop-section start-->
        <div class="select-crop-section crop-add">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-gallary">
                <?php
                $result = mysqli_query($con, "SELECT * FROM crop");
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <div class="crop-item" onClick="getSeed(this.id)" id='<?= $data["id"] ?>'>
                        <img class="lozad" src="../img/upload/crop/<?= $data["image"] ?>" alt="
                    <?= $data["image"] ?>">
                        <h2 id="crop-name">
                            <?= $data["name"] ?>
                        </h2>
                    </div>
                <?php
                }
                ?>
                <input type="hidden" name="crop-id" id="crop-id" value="null">
            </div>
        </div>
        <!-- select-crop-section Ends -->

        <!-- Select Seed -->
        <div class="seed-section crop-add" id="seed-select">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>Select Seeds</h1>
                <div>
                    <select name="seed-id" id="seeds">

                    </select>
                </div>
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Seed info?</h3>
                    </div>
                    <div class="note-description">
                        <h4>VFA will help you get personalized information about the right quantity of seeds and
                            fertilizers</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".seed-section").toggle()'>PREVIOUS</button>
                <span class="btn btn-next" onclick='openSowingDate()'>NEXT</span>
            </div>
        </div>
        <!-- Select seeds Ends here -->


        <!-- Select Date of sowing -->
        <div class="date-of-sowing crop-add" id="add-sowing">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h3>
                    Please select the accureate Date of Sowing of your crop as it is an important part of your crop
                    lifecycle
                </h3>
                <h1 for="sowing-date">Enter sowing Date</h1>
                <input type="date" name="sowing-date" id="sowing-date">
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Date of Sowing?</h3>
                    </div>
                    <div class="note-description">
                        <h4>VFA will keep you informed about your entire crop cycle from the date of sowing to the final
                            harvest</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn btn-previous" onclick='$(".date-of-sowing").toggle()'>PREVIOUS</button>
                <span class="btn btn-next" onclick='openFarmArea()'>NEXT</span>
            </div>
        </div>
        <!-- Date of sowing Section Ends Here -->

        <!-- Enter Farm Area -->
        <div class="add-farm-area crop-add" id="select-area">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>How much area is taken by your Crop</h1>
                <div>
                    <input type="text" name="area" id="inputArea" onkeyup="calculateArea()">
                    <input type="hidden" name="calculatedArea" id="cArea" value="null">
                    <select name="area-type" id="area-type" onchange="calculateArea()">
                        <option selected value="bigha">Bigha</option>
                        <option value="acre">Acre</option>
                        <option value="hacter">Hacter</option>
                    </select>
                </div>
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Farm size?</h3>
                    </div>
                    <div class="note-description">
                        <h4>VFA will help you get personalized information about the right quantity of seeds and
                            fertilizers</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-farm-area").toggle()'>PREVIOUS</button>
                <span class="btn btn-next" onclick='openSelectSoil()'>NEXT</span>
            </div>
        </div>
        <!-- Farm Area Ends here -->

        <!-- select your Soil Type -->
        <div class="add-soil-type crop-add" id="soil">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>Enter your Soil Information </h1>
                <input name="soil" type="hidden" value="null" id="selected-soil">
                <div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/black soil.jpg" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Black Soil</h2>
                                    <h4 class="card-text text-muted">
                                        Black soil is also known as “Regur Soil” or the “Black Cotton Soil”. It covers
                                        about 15% of the total land area of the country.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="black-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/red soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Red Soil</h2>
                                    <h4 class="card-text text-muted">
                                        Red soils denote the largest soil group of India, covering an area of about
                                        350,000 sq.km (10.6% of India's area) across the Peninsula.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="red-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/Alluvial-Soils.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2> Alluvial soil</h2>
                                    <h4 class="card-text text-muted">
                                        Alluvial soils are widespread in the northern plains and river valleys.It covers
                                        about 40% of the total land area of the country.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="alluvial-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/arid desert soil1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Arid desert soil</h2>
                                    <h4 class="card-text text-muted">
                                        Arid soils contain a substantial amount of soluble salts. It is alkaline in
                                        nature because there is no rain to wash soluble salts. These soils are very
                                        infertile in nature.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="arid-dasert-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/laterite soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Laterite soil</h2>
                                    <h4 class="card-text text-muted">
                                        Laterite is both a soil and a rock type rich in iron and aluminium and is
                                        commonly considered to have formed in hot and wet tropical areas.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="laterite-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/forest-soils-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Forest soil</h2>
                                    <h4 class="card-text text-muted">
                                        Forests soils are found in the hilly and mountainous areas where sufficient
                                        rainforests are available.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="forest-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/friable loam soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Friable Loam Soil</h2>
                                    <h4 class="card-text text-muted">
                                    Friable loam soil is the type of soil that is composed of almost equal amounts of sand and silt with a little less clay. Good soil means the soil has the right nutrients for feeding the plants and a texture that holds water but drains well enough that the roots are not sitting in it.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="friable-loam-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/Sandy_loam soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Sandy Loam Soil</h2>
                                    <h4 class="card-text text-muted">
                                    Sandy loam is a type of soil used for gardening. This soil type is normally made up of sand along with varying amounts of silt and clay. Many people prefer sandy loam soil for their gardening because this type of soil normally allows for good drainage.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="sandy-loam-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/volcanic-soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Volcanic Soil</h2>
                                    <h4 class="card-text text-muted">
                                    Volcanic soils form by weathering of volcanogenic materials. Their distribution on the Earth parallels that of terrestrial volcanoes, and they are found across various climates, but most of them are classified as Andisols.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button class="select-btn soil-btn" soil-data="volcanic-soil" type="button" onclick="selectSoil(this);">Select</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Soil Information?</h3>
                    </div>
                    <div class="note-description">
                        <h4>Soils provide anchorage for roots, hold water and nutrients. Soils are home to myriad
                            micro-organisms that fix nitrogen and decompose organic matter, and armies of microscopic
                            animals as well as earthworms and termites. We build on soil as well as with it and in it.
                            Soil plays a vital role in the Earth's ecosystem.</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-soil-type ").toggle()'>PREVIOUS</button>
                <span class="btn btn-next" onclick='openSelectWater()'>NEXT</span>
            </div>
        </div>
        <!-- Soil type Section Ends Here -->

        <!-- Enter Water Condition -->
        <div class="add-water-level crop-add" id="water">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>Select your Main Water Source for Irrigation</h1>
                <input type="hidden" name="water" id="selected-water" value="null">
                <div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/surface water.jpg" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>surface water Source</h2>
                                    <h4 class="card-text text-muted">
                                        Surface water is any body of water above ground, including streams, rivers,
                                        lakes, wetlands, reservoirs, and creeks. The ocean, despite being saltwater, is
                                        also considered surface water.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="surface-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/canal water source.webp" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>canal water Source</h2>
                                    <h4 class="card-text text-muted">
                                        The water for the canal must be provided from an external source, like streams
                                        or reservoirs. Where the new waterway must change elevation engineering works
                                        like locks, lifts or elevators are constructed to raise and lower vessels.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="canal-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/rain water.webp" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Rain water Source</h2>
                                    <h4 class="card-text text-muted">
                                        Rainwater is harvested from roofs via guttering into storage tanks and may be
                                        contaminated, particularly in the 'first flush' after a dry period, by detritus
                                        that has collected on the roof, for instance leaves, insects or more importantly
                                        bird faeces.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="rain-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/river water.jpg" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>River water Source</h2>
                                    <h4 class="card-text text-muted">
                                    The place where a river begins is called its source. River sources are also called headwaters. Rivers often get their water from many tributaries, or smaller streams, that join together. The tributary that started the farthest distance from the river's end would be considered the source, or headwaters.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="river-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/pond water.jpg" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Pond water Source</h2>
                                    <h4 class="card-text text-muted">
                                    A pond is a small area of still, fresh water. It is different from a river or a stream because it does not have moving water and it differs from a lake because it has a small area and is no more than around 1.8m deep.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="pond-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/ground water.png" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2> Ground water Source</h2>
                                    <h4 class="card-text text-muted">
                                    Groundwater sources are beneath the land surface and include springs and wells. As can be seen from the hydrologic cycle, when rain falls to the ground, some water flows along the land to streams or lakes, some water evaporates into the atmosphere, some is taken up by plants, and some seeps into the ground.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <button water-data="ground-water" onclick="selectWater(this)" class="select-btn water-btn" id="water-select">Select</button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Water for Farming?</h3>
                    </div>
                    <div class="note-description">
                        <h4>Water helps to maintain the turgidity of cell walls. Water helps in cell enlargement due to
                            turgor pressure and cell division which ultimately increase the growth of plant. Water is
                            essential for the germination of seeds, growth of plant roots, and nutrition and
                            multiplication of soil organism.</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-water-level").css("display","none")'>PREVIOUS</button>
                <button class="btn" type="button" onclick="addFarm();">Add Farm</button>
            </div>
        </div>
        <!-- Water Section Ends Here -->
    </form>

    <script src="../js/index.js"></script>
    <script>
        $(document).ready(async function() {
            await getFarm();
            //getting list of all Farms 
            await calculateGrowth();
        });

        // Modal opening 
        // function openModal(id) {
        //     $(".modal-section").toggle();
        //     let newsCardParent = document.getElementById(id).parentNode;
        //     let heading = newsCardParent.children;
        //     console.log(heading)
        //     document.getElementById("heading").innerText = heading[0].innerText;
        //     document.getElementById("modal-news").innerHTML = heading[1].innerHTML;

        // }

        // function to calculate Growth of CROP 
        function calculateGrowth() {
            $('.farm-card-item').each((index, item) => {
                var today = new Date().getTime();

                let sowingDate = $(item).find(".sowing-date").val();
                sowingDate = sowingDate.split(' ');
                var parts = sowingDate[0].split('-');
                var sowing_unix = new Date(parts[0], parts[1] - 1, parts[2]).getTime();

                let duration = $(item).find(".duration").val();

                let harvest_time = duration * 24 * 60 * 60 * 1000;
                let end = harvest_time + (new Date(sowingDate).getTime());
                // console.log("Harvest: ", harvest_time + (new Date(sowingDate).getTime()));

                let pr = (today - sowing_unix) * 100 / (end - sowing_unix);

                let progressId = $(item).find(".complete").attr("id");

                let progressText = $(item).find(".percentage").attr("id");

                let stageId = $(item).find(".stage").attr("id");

                if (pr >= 0 && pr < 5) {
                    $("#" + stageId).text("Plowing/Cultivation");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 5 && pr < 8) {
                    $("#" + stageId).text("Sowing");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 8 && pr < 22) {
                    $("#" + stageId).text("Sprout");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 22 && pr < 39) {
                    $("#" + stageId).text("Seeding");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 39 && pr < 52) {
                    $("#" + stageId).text("vegetative");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 52 && pr < 69) {
                    $("#" + stageId).text("Budding");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 69 && pr < 83) {
                    $("#" + stageId).text("Flowring");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr >= 83 && pr < 96) {
                    $("#" + stageId).text("Repening");
                    $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                    $("#" + progressText).text(parseInt(pr) + "%");
                } else if (pr < 0) {
                    $("#" + stageId).text("Praparing for Sowing");
                    $("#" + progressId).css("stroke-dashoffset", 220);
                    $("#" + progressText).text("0%");
                } else {
                    $("#" + stageId).text("Harvesting");
                    if (pr <= 100) {
                        $("#" + progressId).css("stroke-dashoffset", 220 - (2.2 * pr));
                        $("#" + progressText).text(parseInt(pr) + "%");
                    } else {
                        $("#" + progressId).css("stroke-dashoffset", 0);
                        $("#" + progressText).text("100%");
                    }
                }
            });
        }
        // Toggeling Select New Crop Section
        $(".crop-item").click(() => {
            $(".seed-section").toggle();
        });

        function openSowingDate() {
            // checking if Crop has a Seed or not 
            seed = $("#seeds").val();
            if (seed == "null") {
                alertify.warning('Sorry! this crop does\'t have any Seeds yet we will notify you once we have a seed info for this crop');
            } else {
                $(".date-of-sowing").toggle();
            }
        }
        var seed_duration = null;

        function openFarmArea() {
            let sowing_date = $("#sowing-date").val();
            let sid = $("#seeds").val();
            // alertify.alert("VFA -AI Farming Technology","Seed id is : " + sid);
            $.get({
                url: "getSeedDuration.php?sid=" + sid,
                success: (response) => {
                    // alertify.alert("VFA -AI Farming Technology",response);
                    // console.log(response);
                    var today = new Date();
                    seed_duration = response["duration"];

                    var parts = sowing_date.split('-');

                    var sowing_date_unix = new Date(parts[0], parts[1] - 1, parts[2]);
                    var today = new Date();

                    // To calculate the time difference of two dates
                    var Difference_In_Time = today.getTime() - sowing_date_unix.getTime();
                    // To calculate the no. of days between two dates
                    var day_age = parseInt(Difference_In_Time / (1000 * 3600 * 24));

                    // console.log("Day Age: " + day_age + " Duration : " + seed_duration);
                    if (day_age > seed_duration) {
                        alertify.alert("Invalid Sowing Date", "Your crop was already Grown! Just Go and Harvest\n Sorry! because of your crop was already Grown/Harvested you can not Add This Crop");
                    } else if (day_age >= (seed_duration - 20) && day_age > 0) {
                        alertify.confirm("Crop is almost ready to Harvest!!!", "your crop is almost ready to harvest. we dont recommend you to add this crop!", function() {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else if (day_age >= (seed_duration - 50) && day_age > 0) {
                        alertify.confirm("Crop Recommendation!!!", "your crop was already growen Enough Don't Worry VFA will keep track of your all past activities and give you a best recommendation based on your field and Data we have :)", function() {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else if (day_age < 0 && day_age >= -10) {
                        alertify.confirm("Crop Recommendation!!!", "Ohhh! so you want to sown your crop after some days Don't worry VFA will guid you How you can Prepare your land before Sowing, so sit back and Relax :) VFA will guid you Every thing 🌞", function() {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else if (day_age == 0) {
                        alertify.confirm("journy Begins from Today 🌞", "Let's start growing your Crop from Today Be relax VFA will tech you and Assist you Everything About Farming with Latest Technology", () => {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else if (day_age < -10) {
                        alertify.confirm("Not Recommended!!!", "The sowing date you have selected hase more then 10days we don't recommend you to add your crop details from today", function() {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else if (day_age >= 1 && day_age <= (seed_duration - 50)) {
                        alertify.confirm("Crop Guidance Sowing Activity", "Since your you have already sown your crop, so from now on days you will get all Upcoming Activity Alerts :)", function() {
                            $(".add-farm-area").toggle();
                        }, function() {
                            alertify.warning("Action canceled by user");
                        });
                    } else {
                        alertify.alert("Invalid Sowing Date!!!", "The date you have selected was wrong Please Enter Valid Sowing date");
                    }
                },
                error: (response) => {
                    alert(response);
                }
            })
            // var parts = sowing_date.split('-');
            // var sowing_unix = new Date(parts[0], parts[1] - 1, parts[2]).getTime();
        }

        function openSelectSoil() {
            $(".add-soil-type").toggle();
        }

        function openSelectWater() {
            $(".add-water-level").toggle();
        }


        function openFarmDetail() {
            window.location.href = 'farm-detail.php';
        }

        function addFarm() {
            let fid = sessionStorage.getItem("farmerId");
            $.get({
                // When Crop info are added then only I can able to add new Farm Details 
                url: "addFarm.php?farmer-id=" + fid,
                data: $("#add-farm-form").serialize(),
                success: (response) => {
                    console.log(response);
                    $("#alert-text").text(response.data);
                },
                error: (response) => {
                    console.log(response);
                    $("#alert-text").text(response.data);
                }
            })
            $(".alert").css("display", "block");
            $(".crop-add").css("display", "none");

            getFarm();
        }

        // Getting Selected Crop Id
        function getSeed(crop_id) {
            $("#crop-id").val(crop_id);
            $.get({
                url: "getSeed.php?crop_id=" + crop_id,
                success: (response) => {
                    $("#seeds").html(response);
                },
                error: (response) => {
                    $("#seeds").html(response);
                }
            })
        }

        // Get Farm Details Function 
        async function getFarm() {
            let fid = sessionStorage.getItem("farmerId");
            let response = await $.get({
                url: "getFarm.php?farmer-id=" + fid
            });

            $("#farm-card").html(response);
        }

        function selectSoil(e) {
            let soil = $(e).attr("soil-data");
            console.log("Clicked btn " + soil);
            $(".select-btn").removeClass("active");
            $(e).addClass("active");
            $("#selected-soil").val(soil);
            $(".add-water-level").toggle();

        }

        var water = "";

        function selectWater(e) {
            $(e).toggleClass("active");
            $(e).each(() => {
                water = water + $(e).attr("water-data") + ",";
            })
            console.log(water.substring(0, water.length - 1));
            $("#selected-water").val(water.substring(0, water.length - 1));
        }


        // Function to calculate area 
        function calculateArea() {
            let type = $("#area-type").val();
            let enterArea = $("#inputArea").val();
            let acre = null;
            if (type == "acre") {
                acre = enterArea;
            }
            if (type == "hacter") {
                acre = enterArea * 2.471;
            }
            if (type == "bigha") {
                acre = enterArea * 0.619;
            }

            $("#cArea").val(acre);
        }
    </script>
</body>

</html>