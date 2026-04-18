<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library System</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand"
           href="/">
            Library
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('users.index') }}">
                        Users
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('categories.index') }}">
                        Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('bookshelves.index') }}">
                        Bookshelves
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('books.index') }}">
                        Books
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('loans.index') }}">
                        Loans
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('loan-details.index') }}">
                        Loan Details
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('returns.index') }}">
                        Returns
                    </a>
                </li>


            </ul>

        </div>

    </div>

</nav>

<div class="container mt-4">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>