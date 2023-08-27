<?php
include("../connection/connection.php");
$cid = null;
if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];
} else {
    echo "Not getting Crop id";
    exit(0);
}
?> 
<div class="row row-cols-1 row-cols-md-2 g-4 clearfix">
    <!-- Crop Basic Information -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Crop Basic Info
            </div>
            <?php 
            $cbi = "SELECT * FROM `crop-basic-info` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td>Expenses</td>
                                <td id="ex" contenteditable="true">' . $row['expenses'] . '</td>
                            </tr>
                            <tr>
                                <td>Income</td>
                                <td id="in" contenteditable="true">' . $row['income'] . '</td>
                            </tr>
                            <tr>
                                <td>Harvest</td>
                                <td id="hr" contenteditable="true">' . $row['harvest'] . '</td>
                            </tr>
                        </table>
                    </div>';
                }
            }
            ?>
            <div class="card-footer">
                <button type="button" onclick="updateCBI()" class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Favourable Climate -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Favourable Climate
            </div>
            <div class="card-body" contenteditable="true" id="climate">
                <?php
                $cbi = "SELECT * FROM `favourable-climate` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['climate-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button" onclick="updateClimate()" class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Favourable temperature -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Temperature Details
            </div>
            <div class="card-body" contenteditable="true" id="temperature">
                <?php
                $cbi = "SELECT * FROM `temperature` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['temperature-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button" onclick="updateTemperature()" class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Favourable Soil -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Favourable Soil
            </div>
            <?php
            $cbi = "SELECT * FROM `soil` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                        <div class="card-title"><b>Req. Soil: </b><span id="red-soil" contenteditable="true">' . $row['req-method'] . '</span></div>
                        <hr>
                        <div contenteditable="true" id="soil-details">
                            ' . $row['soil-details'] . '
                        </div>
                    </div>';
                }
            } ?>
            <div class="card-footer">
                <button type="button" onclick="updateSoil()" class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Nursery Preparation -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Nursery Preparation
            </div>
            <?php
            $cbi = "SELECT * FROM `nursery` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                    <div class="card-title">
                        <div>
                            <b>Duration: </b> <span id="n-duration" contenteditable="true">' . $row['duration'] . '</span>
                        </div>
                        <div>
                            <b>Seed Rate: </b> <span id="n-seed-rate" contenteditable="true">' . $row['seed-rate'] . '</span>
                        </div>
                    </div>
                    <hr>
                    <div contenteditable="true" id="nursery-details">
                    ' . $row['details'] . '
                    </div>
                </div>';
                }
            } ?>
            <div class="card-footer">
                <button type="button"onclick="updateNursery()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Land Preparation -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Land Preparation
            </div>
            <div class="card-body" contenteditable="true" id="land-preparation">
                <?php
                $cbi = "SELECT * FROM `land-preparation` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['land-preparation'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateLandPreparation()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Spacing and Plant Details -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Spacing & Plant Details
            </div>
            <?php
            $cbi = "SELECT * FROM `spacing-and-plant-population` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>Row to Row</td>
                            <td contenteditable="true" id="rtr">' . $row['rtr'] . '</td>
                        </tr>
                        <tr>
                            <td>Plant to Plant</td>
                            <td contenteditable="true" id="ptp">' . $row['ptp'] . '</td>
                        </tr>
                        <tr>
                            <td>Plant Population</td>
                            <td contenteditable="true" id="pp">' . $row['pp'] . '</td>
                        </tr>
                    </table>
                </div>';
                }
            }
            ?>
            <div class="card-footer">
                <button type="button"onclick="updateSpacingandPlantDetails()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Root Dip Treatment -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Root Dip Treatment
            </div>
            <div class="card-body" contenteditable="true" id="root-dip">
                <?php
                $cbi = "SELECT * FROM `root-deep-treatment` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateRootDipTreatment()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Earthing Up -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Earthing UP
            </div>
            <div class="card-body" contenteditable="true" id="earthing-up">
                <?php
                $cbi = "SELECT * FROM `earthing-up` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['earthing-up-details'];
                    }
                } ?>
            </div> 
            <div class="card-footer">
                <button type="button"onclick="updateEarthingUp()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Gap feeling -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Gap Feeling
            </div>
            <div class="card-body" contenteditable="true" id="gap">
                <?php
                $cbi = "SELECT * FROM `gap-feeling` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['gap-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateGapFeeling()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Sowing Information -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Sowing Details
            </div>
            <div class="card-body" contenteditable="true" id="sowing">
                <?php
                $cbi = "SELECT * FROM `sowing` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['sowing-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateSowing()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Transplanting  -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Transplanting
            </div>
            <div class="card-body" contenteditable="true" id="transplanting">
                <?php
                $cbi = "SELECT * FROM `transplanting` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['transplanting-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateTransplanting()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Nutrient Management -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Nutriement Management
            </div>

            <?php
            $cbi = "SELECT * FROM `nutrient-management` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                    <div class="card-title">Timely</div>
                    <div contenteditable="true" id="nm-time">
                    ' . $row['nm-timely'] . '
                    </div>
                    <hr>
                    <div class="card-title">Late</div>
                    <div contenteditable="true" id="nm-late">
                    ' . $row['nm-late'] . '
                    </div>
                    <hr>
                    <div class="card-title">Rain</div>
                    <div contenteditable="true" id="nm-rain">
                    ' . $row['nm-rain'] . '
                    </div>
                </div>';
                }
            } ?>


            <div class="card-footer">
                <button type="button"onclick="updateNutrientManagement()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Irrigation -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Irrigation
            </div>
            <?php
            $cbi = "SELECT * FROM `irrigation` WHERE `crop-id` = $cid";
            if ($result = mysqli_query($conn, $cbi)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-body">
                        <div class="card-title"><b>Req. Method: </b><span id="red-irrigation-method">' . $row['required-method'] . '</span></div>
                        <hr>
                        <div contenteditable="true" id="irrigation">
                            ' . $row['irrigation-details'] . '
                        </div>
                    </div>';
                }
            } ?>
            <div class="card-footer">
                <button type="button"onclick="updateIrrigation()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Harvesting -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Havesting
            </div>
            <div class="card-body" contenteditable="true" id="harvesting">
                <?php
                $cbi = "SELECT * FROM `harvesting` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['harvesting-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateHarvesting()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
    <!-- Yield -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                Yield
            </div>
            <div class="card-body" contenteditable="true" id="yield">
                <?php
                $cbi = "SELECT * FROM `yield` WHERE `crop-id` = $cid";
                if ($result = mysqli_query($conn, $cbi)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['yield-details'];
                    }
                } ?>
            </div>
            <div class="card-footer">
                <button type="button"onclick="updateYield()"  class="btn btn-warning">Update</button>
                <a class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
</div>