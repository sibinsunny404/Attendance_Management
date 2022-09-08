<?php
require_once 'sessions.php';
require_once 'database/connection.php';
require_once 'database/data_retrive.php';
$date = date("Y/m/d");
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
    <style>
        body{
            background-color: #ff0000;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1200 800'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='600' y1='25' x2='600' y2='777'%3E%3Cstop offset='0' stop-color='%23ff0000'/%3E%3Cstop offset='1' stop-color='%23E0F'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='650' y1='25' x2='650' y2='777'%3E%3Cstop offset='0' stop-color='%23ff0019'/%3E%3Cstop offset='1' stop-color='%23ce00f3'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='700' y1='25' x2='700' y2='777'%3E%3Cstop offset='0' stop-color='%23ff0031'/%3E%3Cstop offset='1' stop-color='%23b000e6'/%3E%3C/linearGradient%3E%3ClinearGradient id='d' gradientUnits='userSpaceOnUse' x1='750' y1='25' x2='750' y2='777'%3E%3Cstop offset='0' stop-color='%23ff004a'/%3E%3Cstop offset='1' stop-color='%239400da'/%3E%3C/linearGradient%3E%3ClinearGradient id='e' gradientUnits='userSpaceOnUse' x1='800' y1='25' x2='800' y2='777'%3E%3Cstop offset='0' stop-color='%23ff0063'/%3E%3Cstop offset='1' stop-color='%237a00ce'/%3E%3C/linearGradient%3E%3ClinearGradient id='f' gradientUnits='userSpaceOnUse' x1='850' y1='25' x2='850' y2='777'%3E%3Cstop offset='0' stop-color='%23ff007c'/%3E%3Cstop offset='1' stop-color='%236200c1'/%3E%3C/linearGradient%3E%3ClinearGradient id='g' gradientUnits='userSpaceOnUse' x1='900' y1='25' x2='900' y2='777'%3E%3Cstop offset='0' stop-color='%23ff0094'/%3E%3Cstop offset='1' stop-color='%234d00b5'/%3E%3C/linearGradient%3E%3ClinearGradient id='h' gradientUnits='userSpaceOnUse' x1='950' y1='25' x2='950' y2='777'%3E%3Cstop offset='0' stop-color='%23ff00ad'/%3E%3Cstop offset='1' stop-color='%233900a8'/%3E%3C/linearGradient%3E%3ClinearGradient id='i' gradientUnits='userSpaceOnUse' x1='1000' y1='25' x2='1000' y2='777'%3E%3Cstop offset='0' stop-color='%23ff00c6'/%3E%3Cstop offset='1' stop-color='%2328009c'/%3E%3C/linearGradient%3E%3ClinearGradient id='j' gradientUnits='userSpaceOnUse' x1='1050' y1='25' x2='1050' y2='777'%3E%3Cstop offset='0' stop-color='%23ff00df'/%3E%3Cstop offset='1' stop-color='%23180090'/%3E%3C/linearGradient%3E%3ClinearGradient id='k' gradientUnits='userSpaceOnUse' x1='1100' y1='25' x2='1100' y2='777'%3E%3Cstop offset='0' stop-color='%23ff00f7'/%3E%3Cstop offset='1' stop-color='%230b0083'/%3E%3C/linearGradient%3E%3ClinearGradient id='l' gradientUnits='userSpaceOnUse' x1='1150' y1='25' x2='1150' y2='777'%3E%3Cstop offset='0' stop-color='%23E0F'/%3E%3Cstop offset='1' stop-color='%23007'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg %3E%3Crect fill='url(%23a)' width='1200' height='800'/%3E%3Crect fill='url(%23b)' x='100' width='1100' height='800'/%3E%3Crect fill='url(%23c)' x='200' width='1000' height='800'/%3E%3Crect fill='url(%23d)' x='300' width='900' height='800'/%3E%3Crect fill='url(%23e)' x='400' width='800' height='800'/%3E%3Crect fill='url(%23f)' x='500' width='700' height='800'/%3E%3Crect fill='url(%23g)' x='600' width='600' height='800'/%3E%3Crect fill='url(%23h)' x='700' width='500' height='800'/%3E%3Crect fill='url(%23i)' x='800' width='400' height='800'/%3E%3Crect fill='url(%23j)' x='900' width='300' height='800'/%3E%3Crect fill='url(%23k)' x='1000' width='200' height='800'/%3E%3Crect fill='url(%23l)' x='1100' width='100' height='800'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;   
        }
    </style>
</head>

<body>
    <?php
    require_once 'loader.html';
    ?>
    <center>
        <!-- form method -->
        <form method="POST">
            <h1 style="line-height:normal;">Student Attendense</h1>
            <h3>Date:<?php echo date("d/m/y"); ?></h3><br>
            <h3>Time:<?php
                        date_default_timezone_set("Asia/Calcutta");
                        echo date("h:i:a"); ?></h3>
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