<html lang="pl">

<head>
  <title>Tasks - To Do</title>
  <meta charset="utf-8">
  <link href="/public/style.css" rel="stylesheet">
</head>

<body class="body">
  <div class="wrapper">
    <div class="header">
      <h1><i class="far fa-clipboard"></i>To Do List</h1>
    </div>

    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="/">Task List</a></li>
          <li><a href="/?action=create">New Task</a></li>
        </ul>
      </div>

      <div class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </div>
    </div>

    <div class="footer">
      
    </div>
  </div>
</body>

</html>