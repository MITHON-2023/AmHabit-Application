<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css" />
    <title>홈</title>
</head>

<body>
    <h3 class="title">홈</h3>

    <hr>

    <form method="post" action="#">
        <div class="H1">
            <h1>
                <?php
                
                include "db_conn.php";

                $sql = "select * from habit order by id desc";
                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_array($result);

                echo $row["content1"];
                ?>
        </h1>

        <h1> Day - <?php echo $row["day1"]; ?> </h1>
            <button type="button" onclick="button()">수정하기</button>
        </div>

        <div class="H2">
            <h1><?php echo $row["content2"]; ?></h1>
            <h1>Day - <?php echo $row["day2"]; ?></h1>
            <button type="button" onclick="button()">수정하기</button>
        </div>


        <div class="bottom-nav">
            <a href="calendar.html"><img src="image/plan_disabled.png" alt="Plan"></a>
            <a href="home.html"><img src="image/home_enable.png" alt="Home"></a>
            <a href="list.html"><img src="image/list_disabled.png" alt="List"></a>
        </div>
    </form>

    <script>

        function button() {
            location.href = "home1.html";
        }
    </script>
</body>

</html>