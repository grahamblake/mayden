<?php
  echo "<!doctype html>
  <html>
    <head>
      <title>View Lists</title>
    </head>
    <body>
      <h1>View Lists</h1>
      <table>
        <thead>
          <tr>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td><a href='/index.php/edit?name=". $row[0]."'>EDIT</td>";
            echo "</tr>";  
        }

  echo "</tbody>
      </table>
      <a href='/views/create_list.html'>Create List</a>
    </body>
  </html>";