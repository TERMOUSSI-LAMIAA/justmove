@extends('layouts.guest')

@section('content')
<div class="container my-5">
    <h1 class="display-4 text-center mb-5">Categories and Sports</h1>

    <div class="mb-5">
        <h2 class="h3">Categories</h2>
        <div class="row">
            @foreach ($catgs as $category)
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $category->img) }}" alt="Category Image" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#" class="categoryLink text-primary" data-category-id="{{ $category->id }}">{{ $category->title }}</a>
                        </h5>
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-none" id="sportsSection">
        <h2 class="h3 mb-3">Sports</h2>
        <ul id="sportsList" class="list-group">
            <!-- Sports will be populated here -->
        </ul>
    </div>

    <div class="d-none" id="sessionsSection">
        <h2 class="h3 mb-3">Sessions</h2>
        <ul id="sessionsList" class="list-group">
            <!-- Sessions will be populated here -->
        </ul>
    </div>
</div>

<script>
    document.querySelectorAll('.categoryLink').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const categoryId = this.getAttribute('data-category-id');
            fetch(`/category/${categoryId}/sports`)
                .then(response => response.json())
                .then(data => {
                    const sportsSection = document.getElementById('sportsSection');
                    const sportsList = document.getElementById('sportsList');

                    const sessionsSection = document.getElementById('sessionsSection');
                    const sessionsList = document.getElementById('sessionsList');
                    sessionsList.innerHTML = '';
                    sessionsSection.classList.add('d-none');

                    sportsList.innerHTML = '';
                    data.forEach(sport => {
                        const listItem = document.createElement('li');
                        const sportLink = document.createElement('a');
                        sportLink.textContent = sport.title;
                        sportLink.href = "#";
                        sportLink.classList.add("sportLink", "list-group-item", "list-group-item-action");
                        sportLink.setAttribute('data-sport-id', sport.id);
                        listItem.appendChild(sportLink);
                        sportsList.appendChild(listItem);
                    });

                    sportsSection.classList.remove('d-none');
                    attachSportLinkListeners();
                })
                .catch(error => console.error('Error fetching sports:', error));
        });
    });

    function attachSportLinkListeners() {
        document.querySelectorAll('.sportLink').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const sportId = this.getAttribute('data-sport-id');
                fetch(`/sport/${sportId}/sessions`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        const sessionsSection = document.getElementById('sessionsSection');
                        const sessionsList = document.getElementById('sessionsList');
                        sessionsList.innerHTML = '';

                        data.forEach(session => {
                            const listItem = document.createElement('li');
                            listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
                            listItem.textContent = `Session Date: ${session.date}`;

                            const reserveForm = document.createElement('form');
                            reserveForm.method = 'POST';
                            reserveForm.action = '/reserve-session';

                            const csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = "{{ csrf_token() }}";

                            const sessionIdInput = document.createElement("input");
                            sessionIdInput.type = 'hidden';
                            sessionIdInput.name = 'session_id';
                            sessionIdInput.value = session.id;

                            const reserveButton = document.createElement('button');
                            reserveButton.type = 'submit';
                            reserveButton.textContent = 'Reserve';
                            reserveButton.classList.add('btn', 'btn-primary');

                            reserveForm.append(csrfInput, sessionIdInput, reserveButton);

                            listItem.appendChild(reserveForm);

                            sessionsList.appendChild(listItem);
                        });

                        sessionsSection.classList.remove('d-none');
                    })
                    .catch(error => console.error('Error fetching sessions:', error));
            });
        });
    }
</script>
@endsection
