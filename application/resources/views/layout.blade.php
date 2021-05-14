<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>のまどる</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">のまどる</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">繋がる</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Q&A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">情報</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">売る</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">買う</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">仕事</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">賃貸</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">口コミ</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>