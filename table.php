<?php
if (isset($_POST['rows']) && isset($_POST['columns'])) {
  $rows = intval($_POST['rows']);
  $columns = intval($_POST['columns']);
  $table = '<table border="1">';
  for ($i = 1; $i <= $rows; $i++) {
    $table .= '<tr>';
    for ($j = 1; $j <= $columns; $j++) {
      $table .= '<td>' . ($i * $j) . '</td>';
    }
    $table .= '</tr>';
  }
  $table .= '</table>';
  echo $table;
}
?>