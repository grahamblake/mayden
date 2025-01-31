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
            echo "<tr><td>" . $row[0] . "</td></tr>";  
        }

  echo "</tbody>
      </table>
    </body>
  </html>";