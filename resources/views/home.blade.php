@include('components.start')

<div class="container mt-5">

    <h1 class="text-center">Добро пожаловать!</h1>

    <p class="text-center">В этом приложении вы можете искать, добавлять и смотреть пользователей.</p>

    <div class="row justify-content-center ">

        <a href="/search" class="btn btn-primary mr-3">Поиск пользователей</a>
        <a href="/users/create" class="btn btn-danger mr-3 ">Добавить пользователя</a>
        <a href="/users" class="btn btn-warning">Показать всех пользователей</a>
    </div>

</div>

@include('components.end')
