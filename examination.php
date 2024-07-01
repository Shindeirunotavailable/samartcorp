<!DOCTYPE html>
<html lang="en">
<head>
  <title>examination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    .custom-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .custom-table, .custom-table th, .custom-table td {
            border: 1px solid #ddd;
        }
        .custom-table th, .custom-table td {
            padding: 10px;
            text-align: left;
        }
        .custom-table th {
            background-color: #4CAF50;
            color: white;
        }
        .custom-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .custom-table tr:hover {
            background-color: #ddd;
        }

    

</style>

</head>
<body>

<!-- examination1  -->

<div class="container">
    <?php
        class MultiplicationTable {
            private $start;
            private $end;

            public function __construct($start, $end) {
                $this->start = $start;
                $this->end = $end;
            }

            public function generateTable() {
                echo "<div style='font-family: Arial, sans-serif; line-height: 1.6;'>";
                for ($i = $this->start; $i <= $this->end; $i++) {
                    echo "<h2 style='color: #2c3e50;'>แม่สูตรคูณ $i</h2>";
                    echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse;'>";
                    for ($j = 1; $j <= 12; $j++) {
                        $result = $i * $j;
                        echo "<tr><td>$j x $i</td><td>= $result</td></tr>";
                    }
                    echo "</table><br>";
                }
                echo "</div>";
            }
        }

        $start = 2;
        $end = 12;

        $table = new MultiplicationTable($start, $end);
        $table->generateTable();
    ?>
</div>


<!-- examination2  -->
    <div class="container">
        <h2> examination2</h2>
            <p>ตัวอย่างการใช้งาน โปรแกรมนี้จะสร้างตารางสูตรคูณตั้งแต่ 2 ถึง 8 และแสดงผลออกมาในรูปแบบที่ต้องการ</p>

        <div class="d-flex justify-content-center">
            <table class="table" style="width: 90%;" >
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
            class MaxSumCalculator {
                private $pairs;

                public function __construct($pairs) {
                    $this->pairs = $pairs;
                }

                public function calculateMaxSum() {
                    $maxSum = 0;
                    foreach ($this->pairs as $pair) {
                        $maxSum += max($pair);
                    }
                    return $maxSum;
                }
            }

            $pairs = [
                [3, 4],
                [5, 7],
                [8, 2],
                [9, 1]
            ];

            $calculator = new MaxSumCalculator($pairs);
            $maxSum = $calculator->calculateMaxSum();
            echo "# ผลรวมของค่ามากสุดคือ: $maxSum\n" ;
        ?>

    </div>
<hr>

<!-- examination3  -->
    <div class="container ">
    <h2>examination3</h2>

        <div class="row mb-3 pt-5">
            <label for="Fname" class="col-sm-2 col-form-label col-form-label-sm">first name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="Fname" placeholder="first name">
                </div>
        </div>
        
        <div class="row mb-3">
            <label for="Lname" class="col-sm-2 col-form-label col-form-label-sm">last name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="Lname" placeholder="last name">
                </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="specificSizeSelect">Country</label>
            <div class="col-sm-10">
                
            <select class="form-select" id="specificSizeSelect">
                <option selected>Australia</option>
                <option value="1">Thailand</option>
                <option value="2">singapore</option>
                <option value="3">malaysia</option>
            </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label col-form-label-sm" for="specificSizeSelect">Subject</label>
                <div class="col-sm-10"> 
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Write simething" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-end">
             <button type="button" class="btn btn-success">Success</button>
        </div>

    </div>

<hr>    

<!-- examination4 -->


<div class="container">
<h2>examination4</h2>

    <?php
        include 'db.php';

        try {
            $stmt = $pdo->query("SELECT * FROM Customers WHERE Country = 'Sweden'");
            echo "<table class='custom-table'>";
            echo "<tr><th>CustomerID</th><th>CustomerName</th><th>ContactName</th><th>Address</th><th>City</th><th>PostalCode</th><th>Country</th></tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['CustomerID'] . "</td>";
                echo "<td>" . $row['CustomerName'] . "</td>";
                echo "<td>" . $row['ContactName'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['PostalCode'] . "</td>";
                echo "<td>" . $row['Country'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    ?>
</div>

</body>
</html>
