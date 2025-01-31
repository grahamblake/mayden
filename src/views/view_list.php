<?php
  echo "<!doctype html>
  <html>
    <head>
      <title>Edit List</title>
    </head>
    <body>
      <h1>Edit List</h1>
      <p>" . $listName . "</p>
      <table>
        <thead>
          <tr>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>";
        foreach ($data as $item) {
            echo "<tr>";
            echo "<td>" . $item . "</td>";
            echo "</tr>";  
        }

  echo "</tbody>
      </table>
      <a href='/index.php/createitem?list=".$listName."'>Add Item</a>
    </body>
  </html>";