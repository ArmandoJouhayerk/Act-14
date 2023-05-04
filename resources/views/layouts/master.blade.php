@include(shared.head)

<div class="conteiner py-4">
    <div class="row mb-4">
        <div class="col tect-center">
            <header class="py-4 bg-primary">
                <h1 class="mb-0 text-white">{{ $page_title }}</h1>
            </header>
        </div>
    </div>

    @yield('content')

    @yield('button')
</div>


@include(shared.footer)