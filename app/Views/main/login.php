<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2>로그인</h2>
  <form action="/home/login_proc" method="POST">
    <div class="form-group">
      <label for="user_id">아이디:</label>
      <input type="text" class="form-control" id="user_id" placeholder="아이디" name="user_id">
    </div>
    <div class="form-group">
      <label for="user_password">비밀번호:</label>
      <input type="password" class="form-control" id="user_password" placeholder="비밀번호" name="user_password">
    </div>
    <button type="submit" class="btn btn-primary">로그인</button>
  </form>
</div>

</body>
</html>