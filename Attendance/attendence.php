<?php
require_once 'sessions.php';
require_once 'database/connection.php';
require_once 'database/data_retrive.php';
$date =date("Y/m/d");
$query = "SELECT * FROM students";
$result = mysqli_query($connect, $query);
//Insert Query Starts From Here
// require_once 'connection.php';
// require_once 'data_retrive.php';
if (isset($_POST['submit'])) {
    foreach ($_POST['attend'] as $ids => $attend) {
        $usn = $_POST["usn"][$ids];
        $sub = $_POST["sub"];
        $sem = $_POST["sem"];
        mysqli_query($connect, "insert into attendence (usn,attend,subject,sem,date) values ('$usn','$attend','$sub','$sem','$date')");
        header("location:admin_dash.php");
    }
    // echo $sub;

    // $sem=$_POST["sem"];

}
mysqli_close($connect);
//Insert Query Ends here
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Attandance</title>
    <link rel="stylesheet" href="css/style.css" />
    <script>
        function done() {
            alert("Attendaance Successfully Taked..");
        }
    </script>
</head>

<body style="background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);">
<?php
    require_once 'loader.html';
  ?>
    <?php 
        require_once 'sidebar.php';
    ?>
        <center>
            <!-- form method -->
            <form method="POST">
                <h1 style="line-height:normal;">Student Attendense</h1>
                <h3>Date:<?php echo date("d/m/y"); ?></h3><br>
                <h3>Time:<?php 
                date_default_timezone_set("Asia/Calcutta");
                echo date("h:i:a");?></h3>
                <!-- select Starts from here -->
                <h2> <label for="dub" style="line-height:normal;">Choose Sub</label></h2><br>
                <select name="sub" style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center">
                    <?php
                    while ($subdata = mysqli_fetch_array($subresult)) {
                        $subj = $subdata['sub_name'];
                        $sem = $subdata['sem'];
                    ?>
                        <option style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center" value="<?php echo $subj; ?>" name="<?php echo $subj; ?>"><?php echo $subj; ?></option>
                    <?php } ?>
                </select>
                <!-- Select Tag ends Here -->
                <input type="hidden" name="sem" value="<?php echo $sem; ?>">
                <h2>Sem:<?php echo $sem; ?></h2>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>SN.no</th>
                                <th>USN</th>
                                <th>Username</th>
                                <th>Attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                $sn = 1;

                                while ($data = mysqli_fetch_assoc($result)) {
                                    $att = 0;
                            ?>
                                    <tr>
                                        <td><?php echo $sn ?></td>
                                        <td><?php echo $data['usn']; ?>
                                            <input type="hidden" value="<?php echo $data['usn']; ?>" name="usn[<?php echo $data['usn']; ?>]">
                                        </td>

                                        <td>
                                            <?php echo $data['name']; ?>

                                        </td>
                                        <td>
                                            <link rel="stylesheet" href="css/radiobutton.css">
                                            <label class="container">P
                                                <input type="radio" id="p" name="attend[<?php echo $data['usn']; ?>]" value="present" checked>
                                                <span class="check"></span>
                                                <label class="container">A
                                                    <input type="radio" id="a" name="attend[<?php echo $data['usn']; ?>]" value="absent">
                                                    <span class="check"></span>
                                                </label>
                                            </label>
                                        </td>
                                    </tr>
                                <?php
                                    $sn++;
                                    $att++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="3">No data found</td>
                                </tr>
                            <?php }

                            ?>
                        </tbody>
                    </table>
                </div>
                <br>

                <!-- Submit Starts From Here -->
                <link rel="stylesheet" href="css/submitbtt.css">
                <div class="container">
                    <button class="button button-1" name="submit" onclick="done()">Submit</button>
                    <!-- <h3>Total Absent:</h3>
                    <h3 id="abse"></h3>
                    <h3>Total present: </h3>
                </div> -->
                    <!-- Submit Button Ends Here -->
                </div>

            </form>




        </center>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</body>

</html>