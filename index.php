<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=-, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-primery">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Домой</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Ссылки</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Войти
                </a>
            </ul>
            </div>
        </div>
        </nav>
    </header>
    <h1>Пожалуйста, зарегистрируйтесь</h1>
    
    <section>
        <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Введите Ваш email адрес</label>
            <input type="email" class="rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никому не передаём Вашу почту.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputLogin" class="form-label">Введите логин</label>
            <input type="text" class="rounded-pill" id="exampleInputLogin">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Введите Имя</label>
            <input type="text" class="rounded-pill" id="exampleInputName">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
            <input type="password" class="rounded-pill" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Проверка на робота</label>
        </div>
        <button type="submit" class="btn btn-primary">Далее</button>
        </form>
    </section>
    <footer>
        
    </footer>
</body>
</html>


