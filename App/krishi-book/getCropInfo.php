<?php
require "../connection/conn.php";
// header("Content-Type: json/application");
$crop_id = $_POST['crop_id'];
?>
<?php

$sql = "SELECT * FROM `crop-basic-info` WHERE `crop-id` = $crop_id";
if ($result = mysqli_query($con, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <!-- Basic Info Card -->
        <div class="card crop-card">
            <div class="card-title">
                <h1>Expectation</h1>
            </div>
            <div class="card-body" style="grid-template-columns: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Farming with VFA</th>
                            <th>Standard Farming</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <small class="text-muted">Expected Fertilizer and agriculture Expenditure</small>
                                <h3 style="color: green;">&#8377;
                                    <?= $row['expenses'] * (1 - 0.2) ?>
                                </h3>
                            </td>
                            <td>
                                <small class="text-muted">
                                    Expected Fertilizer and agriculture Expenditure
                                </small>
                                <h3>&#8377;
                                    <?= $row['expenses'] ?>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <small class="text-muted">Expexted Harvest</small>
                                <h3 style="color: green;">
                                    <?= $row['harvest'] * (1 + 0.2) ?> quintal/acre
                                </h3>
                            </td>
                            <td>
                                <small class="text-muted">Expexted Harvest</small>
                                <h3>
                                    <?= $row['harvest'] ?> quintal/acre
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <small class="text-muted">Expected Income (Rs)</small>
                                <h3 style="color: green;">&#8377;
                                    <?= $row['income'] * (1 + 0.2) ?>
                                </h3>
                            </td>
                            <td>
                                <small class="text-muted">
                                    Expected Income (Rs)
                                </small>
                                <h3>&#8377;
                                    <?= $row['income'] ?>
                                </h3>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
<?php
    }
} else {
    echo mysqli_error($con);
}
?>

<?php
$sql = "SELECT * FROM `favourable-climate` WHERE `crop-id` = $crop_id";
if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
?>
        <!-- Favourable Climate Card -->
        <div class="card crop-card" style="padding: 0;">
            <div class="card-body">
                <img src="../img/crop-info/climate.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                <div>
                    <h2>Favourable Climate</h2>
                    <ul>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['climate-details'];
                }
            }
        } else {
            echo mysqli_error($con);
        }

                ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Temperature Card -->
        <?php
        $sql = "SELECT * FROM `temperature` WHERE `crop-id` = $crop_id";
        if ($result = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($result) > 0) {
        ?>
                <div class="card crop-card" style="padding: 0;">
                    <div class="card-body">
                        <img src="../img/crop-info/temperature.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                        <div>
                            <h2>Temperature Details</h2>
                            <ul>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['temperature-details'];
                        }
                    }
                } else {
                    echo mysqli_error($con);
                }

                        ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Water Card  -->
                <?php
                $sql = "SELECT * FROM `water` WHERE `crop-id` = $crop_id";
                if ($result = mysqli_query($con, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                ?>
                        <div class="card crop-card" style="padding: 0;">
                            <div class="card-body">
                                <img src="../img/water source/river water.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                <div>
                                    <h2>Water recommendation</h2>
                                    <ul>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['water-details'];
                                }
                            }
                        } else {
                            echo mysqli_error($con);
                        }

                                ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Soil Card  -->
                        <?php
                        $sql = "SELECT * FROM `soil` WHERE `crop-id` = $crop_id";
                        if ($result = mysqli_query($con, $sql)) {
                            if (mysqli_num_rows($result) > 0) { ?>
                                <div class="card crop-card" style="padding: 0;">
                                    <div class="card-body">
                                        <img src="../img/crop-info/soil.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                        <div>
                                            <h2>Soil Recommendation</h2>
                                            <ul>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <div class="highlight">Recommended Soil:
                                                        <?= $row['req-method'] ?>
                                                    </div>
                                        <?php
                                                    echo $row['soil-details'];
                                                }
                                            }
                                        } else {
                                            echo mysqli_error($con);
                                        }

                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sowing Card -->
                                <?php
                                $sql = "SELECT * FROM `sowing` WHERE `crop-id` = $crop_id";
                                if ($result = mysqli_query($con, $sql)) {
                                    if (mysqli_num_rows($result) > 0) { ?>
                                        <div class="card crop-card" style="padding: 0;">
                                            <div class="card-body">
                                                <img src="../img/crop-info/planting.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                <div>
                                                    <h2>Sowing Information</h2>
                                                    <ul>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo $row['sowing-details'];
                                                }
                                            }
                                        } else {
                                            echo mysqli_error($con);
                                        }

                                                ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- land preparation Card -->
                                        <?php
                                        $sql = "SELECT * FROM `land-preparation` WHERE `crop-id` = $crop_id";
                                        if ($result = mysqli_query($con, $sql)) {
                                            if (mysqli_num_rows($result) > 0) { ?>
                                                <div class="card crop-card" style="padding: 0;">
                                                    <div class="card-body">
                                                        <img src="../img/crop-info/land-prepare.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                        <div>
                                                            <h2>Land Preparation Details</h2>
                                                            <ul>
                                                        <?php
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo $row['land-preparation'];
                                                        }
                                                    }
                                                } else {
                                                    echo mysqli_error($con);
                                                }

                                                        ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Spacing and Crop Population Card -->
                                                <?php
                                                $sql = "SELECT * FROM `spacing-and-plant-population` WHERE `crop-id` = $crop_id";
                                                if ($result = mysqli_query($con, $sql)) {
                                                    if (mysqli_num_rows($result) > 0) { ?>
                                                        <div class="card crop-card" style="padding: 0;">
                                                            <div class="card-body">
                                                                <img src="../img/crop-info/spacing-population.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                <div>
                                                                    <h2>Spacing and Plant population details</h2>
                                                                    <?php
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                    ?>
                                                                        <table>
                                                                            <tr>
                                                                                <td>Row to Row</td>
                                                                                <td>
                                                                                    <?= $row['rtr'] ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Plant to Plant</td>
                                                                                <td>
                                                                                    <?= $row['ptp'] ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Plant Population</td>
                                                                                <td>
                                                                                    <?= $row['pp'] ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                            <?php
                                                                    }
                                                                }
                                                            } else {
                                                                echo mysqli_error($con);
                                                            }
                                                            ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Transplanting Card -->
                                                        <?php
                                                        $sql = "SELECT * FROM `transplanting` WHERE `crop-id` = $crop_id";
                                                        if ($result = mysqli_query($con, $sql)) {
                                                            if (mysqli_num_rows($result) > 0) { ?>
                                                                <div class="card crop-card" style="padding: 0;">
                                                                    <div class="card-body">
                                                                        <img src="../img/crop-info/transplanting.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                        <div>
                                                                            <h2>Transplanting details </h2>
                                                                            <ul>
                                                                        <?php
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['transplanting-details'];
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo mysqli_error($con);
                                                                }
                                                                        ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Nutrition Card -->
                                                                <?php
                                                                $sql = "SELECT * FROM `nutrient-management` WHERE `crop-id` = $crop_id";
                                                                if ($result = mysqli_query($con, $sql)) {
                                                                    if (mysqli_num_rows($result) > 0) { ?>
                                                                        <div class="card crop-card" style="padding: 0;">
                                                                            <div class="card-body">
                                                                                <img src="../img/crop-info/nutrient.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                <div>
                                                                                    <h2>Nutrition Management</h2>
                                                                            <?php
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                echo "<span class='text-muted'> </span>" . $row['nm-timely'];
                                                                                echo "<span class='text-muted'> </span>" . $row['nm-late'];
                                                                                echo "<span class='text-muted'> </span>" . $row['nm-rain'];
                                                                            }
                                                                        }
                                                                    } else {
                                                                        echo mysqli_error($con);
                                                                    }
                                                                            ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Earthing Up Card -->
                                                                        <?php
                                                                        $sql = "SELECT * FROM `earthing-up` WHERE `crop-id` = $crop_id";
                                                                        if ($result = mysqli_query($con, $sql)) {
                                                                            if (mysqli_num_rows($result) > 0) { ?>
                                                                                <div class="card crop-card" style="padding: 0;">
                                                                                    <div class="card-body">
                                                                                        <img src="../img/crop-info/earthing-up.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                        <div>
                                                                                            <h2>EarthingUp details </h2>
                                                                                            <ul>
                                                                                        <?php
                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                            echo $row['earthing-up-details'];
                                                                                        }
                                                                                    }
                                                                                } else {
                                                                                    echo mysqli_error($con);
                                                                                }
                                                                                        ?>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Root Deep Treatment -->
                                                                                <?php
                                                                                $sql = "SELECT * FROM `root-deep-treatment` WHERE `crop-id` = $crop_id";
                                                                                if ($result = mysqli_query($con, $sql)) {
                                                                                    if (mysqli_num_rows($result) > 0) { ?>
                                                                                        <div class="card crop-card" style="padding: 0;">
                                                                                            <div class="card-body">
                                                                                                <img src="../img/crop-info/root-deep-treatment.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                <div>
                                                                                                    <h2>Root Deep Preparation</h2>
                                                                                                    <ul>
                                                                                                <?php
                                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                                    echo $row['details'];
                                                                                                }
                                                                                            }
                                                                                        } else {
                                                                                            echo mysqli_error($con);
                                                                                        }
                                                                                                ?>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- Nursery Preparation -->
                                                                                        <?php
                                                                                        $sql = "SELECT * FROM `nursery` WHERE `crop-id` = $crop_id";
                                                                                        if ($result = mysqli_query($con, $sql)) {
                                                                                            if (mysqli_num_rows($result) > 0) { ?>
                                                                                                <div class="card crop-card" style="padding: 0;">
                                                                                                    <div class="card-body">
                                                                                                        <img src="../img/crop-info/nursery.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                        <div>
                                                                                                            <h2>Nursery Preparation</h2>
                                                                                                            <?php
                                                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                echo $row['details'];
                                                                                                            ?>
                                                                                                                <span><b>Duratioin</b></span>
                                                                                                                <p><?= $row['duration'] ?></p>
                                                                                                                <span><b>Seed Rate:</b></span>
                                                                                                                <p><?= $row['seed-rate'] ?></p>
                                                                                                    <?php
                                                                                                            }
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo mysqli_error($con);
                                                                                                    }
                                                                                                    ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- Gap Feeling Card -->
                                                                                                <?php
                                                                                                $sql = "SELECT * FROM `gap-feeling` WHERE `crop-id` = $crop_id";
                                                                                                if ($result = mysqli_query($con, $sql)) {
                                                                                                    if (mysqli_num_rows($result) > 0) { ?>
                                                                                                        <div class="card crop-card" style="padding: 0;">
                                                                                                            <div class="card-body">
                                                                                                                <img src="../img/crop-info/gap-feeling.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                                <div>
                                                                                                                    <h2>Gap Feeling Information </h2>
                                                                                                                    <ul>
                                                                                                                <?php
                                                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                    echo $row['gap-details'];
                                                                                                                }
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo mysqli_error($con);
                                                                                                        }
                                                                                                                ?>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- Irrigation Card -->
                                                                                                        <?php
                                                                                                        $sql = "SELECT * FROM `irrigation` WHERE `crop-id` = $crop_id";
                                                                                                        if ($result = mysqli_query($con, $sql)) {
                                                                                                            if (mysqli_num_rows($result) > 0) { ?>
                                                                                                                <div class="card crop-card" style="padding: 0;">
                                                                                                                    <div class="card-body">
                                                                                                                        <img src="../img/crop-info/irrigation.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                                        <div>
                                                                                                                            <h2>Irrigation details </h2>
                                                                                                                            <ul>
                                                                                                                                <?php
                                                                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                                ?>
                                                                                                                                    <div class="highlight">Recommended Irrigation method:
                                                                                                                                        <?= $row['required-method'] ?>
                                                                                                                                    </div>
                                                                                                                        <?php
                                                                                                                                    echo $row['irrigation-details'];
                                                                                                                                }
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            echo mysqli_error($con);
                                                                                                                        }

                                                                                                                        ?>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!-- Yield Card -->
                                                                                                                <?php
                                                                                                                $sql = "SELECT * FROM `yield` WHERE `crop-id` = $crop_id";
                                                                                                                if ($result = mysqli_query($con, $sql)) {
                                                                                                                    if (mysqli_num_rows($result) > 0) { ?>
                                                                                                                        <div class="card crop-card" style="padding: 0;">
                                                                                                                            <div class="card-body">
                                                                                                                                <img src="../img/crop-info/yield.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                                                <div>
                                                                                                                                    <h2>Yield details </h2>
                                                                                                                                    <ul>
                                                                                                                                <?php
                                                                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                                    echo $row['yield-details'];
                                                                                                                                }
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            echo mysqli_error($con);
                                                                                                                        }
                                                                                                                                ?>
                                                                                                                                    </ul>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!-- Harvesting Card -->
                                                                                                                        <?php
                                                                                                                        $sql = "SELECT * FROM `harvesting` WHERE `crop-id` = $crop_id";
                                                                                                                        if ($result = mysqli_query($con, $sql)) {
                                                                                                                            if (mysqli_num_rows($result) > 0) { ?>
                                                                                                                                <div class="card crop-card" style="padding: 0;">
                                                                                                                                    <div class="card-body">
                                                                                                                                        <img src="../img/crop-info/harvesting.jpg" alt="Favourable Climate Image" style="width: 300px; height: 250px;">
                                                                                                                                        <div>
                                                                                                                                            <h2>Harvesting details</h2>
                                                                                                                                            <ul>
                                                                                                                                        <?php
                                                                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                                            echo $row['harvesting-details'];
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo mysqli_error($con);
                                                                                                                                }
                                                                                                                                        ?>
                                                                                                                                            </ul>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>