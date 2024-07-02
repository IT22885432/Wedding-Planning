<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="Admin_styles/style.css" />
</head>
<style>
  body {

    background-color: #004d66;

  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

  }

  td,
  th {

    text-align: left;
    padding: 8px;
  }

  tr {

    border: 10px solid #004d66;
  }

  th:nth-child(even),
  td:nth-child(even) {
    background-color: #00ace6;
    color: white;
  }

  th:nth-child(odd),
  td:nth-child(odd) {
    background-color: white;
    color: b;
  }

  .adminheader {

    text-align: center;
    color: #00ace6;
    font-family: sans-serif;


  }

  button {
    background-color: red;
    color: white;
    padding: 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    opacity: 0.9;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
    font-size: 10px;
    float: right;
  }

  button:hover {
    opacity: 1;
  }
</style>

<body>
  <div style="background-color:white;height:60px;padding-top:5px;padding-bottom:15px;margin-bottom:20px;">
    <h1 class="adminheader">Manage All Inquiries</h2>
  </div>
  <div>
    <table>
      <tr>
        <th>id</th>
        <th>CID_id</th>
        <th>date</th>
        <th>qty</th>
        <th>description</th>

      </tr>

      <?php

      require 'config.php';
      $page_no;

      if (isset($_GET["page"])) {
        $page_no = $_GET["page"];
      } else {
        $page_no = 1;
      }

      $product_rs = mysqli_query($conn, "SELECT * FROM `contact_us`");
      $product_num = $product_rs->num_rows;
      $results_per_page = 10;
      $number_of_pages = ceil($product_num / $results_per_page);
      $page_first_result = ((int)$page_no - 1) * $results_per_page;
      $view_product_rs = mysqli_query($conn, "SELECT * FROM `contact_us` LIMIT " . $results_per_page . " OFFSET " . $page_first_result);
      $view_results_num = $view_product_rs->num_rows;

      $c = 0;

      ?>

      <?php

      while ($product_data = $view_product_rs->fetch_assoc()) {
        $c += 1;
      ?>
        <tr>
          <td><span class="fs-6 fw-bold text-white"><?php echo $product_data["id"]; ?></span></td>
          <td><span class="fs-6 fw-bold text-white"><?php echo $product_data["CID_id"]; ?></span></td>
          <td><span class="fs-6 fw-bold text-white"><?php echo $product_data["date"]; ?></span></td>
          <td><span class="fs-6 fw-bold text-white"><?php echo $product_data["qty"]; ?></span></td>
          <td><span class="fs-6 fw-bold text-white"><?php echo $product_data["description"]; ?></span><button> Block</button></td>
        </tr>

      <?php
      }

      ?>

    </table>
  </div>
</body>

</html>