<?php
require_once 'database/connection.php';
require_once 'database/data_retrive.php';
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
        mysqli_query($connect, "insert into attendence (usn,attend,sub_code,sem) values ('$usn','$attend','$sub','$sem')");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attandance</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- radio button style Starts from here -->
    <!-- <script>
        function c(){
            
            if(document.getElementsByName("attend[<?php echo $data['usn']; ?>]").value==absent){
               $ab=0;
               document.getElementById("abse").innerHTML=$ab+1;
                
            }
        }
    </script> -->
    <!-- radio button style ends here -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
</head>

<body style="background: #FC466B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3F5EFB, #FC466B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3F5EFB, #FC466B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
    <link rel="stylesheet" href="css/loader.css">
    <div class="loader"></div>
    <div style="border:0px;" class="header_fixed">
        <center>
            <!-- form method -->
            <form method="POST">
                <h1 style="line-height:normal;">Student Attendense</h1>
                <!-- select Starts from here -->
                <h2> <label for="dub" style="line-height:normal;">Choose Sub</label></h2><br>
                <select name="sub" style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center">
                    <option value=""><b>---select Subject---</b></option>
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
                                                <input type="radio" id="p" onclick="c()" name="attend[<?php echo $data['usn']; ?>]" value="present" checked>
                                                <span class="check"></span>
                                                <label class="container">A
                                                    <input type="radio" style="color:red;" id="a" onclick="c()" name="attend[<?php echo $data['usn']; ?>]" value="absent">
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
                    <button class="button button-1" name="submit">Submit</button>
                    <h3>Total Absent:</h3>
                    <h3 id="abse"></h3>
                    <h3>Total present: </h3>
                </div>
                <!-- Submit Button Ends Here -->
    </div>

    </form>




    </center>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</body>

</html>