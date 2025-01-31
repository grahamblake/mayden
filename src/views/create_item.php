<!doctype html>
<html>
  <head>
    <title>Create Item</title>
  </head>
  <body>
    <h1>Create Item</h1>
    <form action="/index.php/items" method="post">
      <label for="name">Name of Item:</label>
      <input type="text" id="name" name="name" required>
      <input type="hidden" id="list_id" name="list_id" value="<?php echo $list; ?>">
      <button type="submit">Create Item</button>
    </form>
  </body>
</html>