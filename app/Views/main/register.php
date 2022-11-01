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
  <h2>회원가입</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="user_id">아이디:</label>
      <input type="text" class="form-control" id="user_id" placeholder="아이디" name="user_id">
    </div>
    <div class="form-group">
      <label for="user_name">이름:</label>
      <input type="text" class="form-control" id="user_name" placeholder="이름" name="user_name">
    </div>
    <div class="form-group">
      <label for="user_phonenumber">전화번호:</label>
      <input type="text" class="form-control" id="user_phonenumber" placeholder="전화번호" name="user_phonenumber">
    </div>
    <div class="form-group">
      <label for="user_password">비밀번호:</label>
      <input type="password" class="form-control" id="user_password" placeholder="비밀번호" name="user_password">
    </div>
    <div class="form-group">
      <label for="user_password_check">비밀번호 확인:</label>
      <input type="password" class="form-control" id="user_password_check" placeholder="비밀번호" name="user_password_check">
    </div>
    <div class="form-group">
      <label for="user_email">이메일:</label>
      <input type="email" class="form-control" id="user_email" placeholder="이메일" name="user_email">
    </div>
    <div class="form-group">
      <label for="user_address">주소:</label>
      <input type="text" class="form-control" id="user_address" placeholder="주소" name="user_address">
    </div>
    <button type="submit" class="btn btn-primary">등록</button>
  </form>
</div>

</body>
</html>