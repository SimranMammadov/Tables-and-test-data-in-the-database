<?php
include("database.php");
include_once("generate_excel.php");

$db = $conn;
function fetch_data()
{
  global $db;
  $query = "SELECT * from users ORDER BY id DESC";
  $exec = mysqli_query($db, $query);
  if (mysqli_num_rows($exec) > 0) {
    $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;
  } else {
    return $row = [];
  }
}
$fetchData = fetch_data();
show_data($fetchData);
function show_data($fetchData)
{
  echo '<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Ata adı</th>
            <th>Peşə</th>
        </tr>';
  if (count($fetchData) > 0) {
    foreach ($fetchData as $data) {
      echo "<tr>
          <td>" . $data['id'] . "</td>
          <td>" . $data['name'] . "</td>
          <td>" . $data['surname'] . "</td>
          <td>" . $data['father_name'] . "</td>
          <td>" . $data['profession'] . "</td>
   </tr>";
    }
  } else {
    echo "<tr>
        <td colspan='7'>Məlumat tapılmadı.</td>
       </tr>";
  }
  echo "</table>";
}
