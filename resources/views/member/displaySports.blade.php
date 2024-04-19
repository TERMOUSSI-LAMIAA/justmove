<!-- resources/views/member/displaySports.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Sports</title>
</head>

<body>
    <h1>Categories and Sports</h1>

    <h2>Categories</h2>
    <ul>
        @foreach ($catgs as $category)
            <div>
                <img src="{{ asset('storage/' . $category->img) }}" alt="Category Image" width="80">
                <p><a href="{{ route('category.show', $category->id) }}" class="categoryLink"
                        data-category-id="{{ $category->id }}">{{ $category->title }}</a></p>
                <p>{{ $category->description }}</p>
            </div>

            <hr>
        @endforeach
    </ul>

    <h2 id="sportsTitle" style="display: none;">Sports</h2>
    <ul id="sportsList" style="display: none;">
        <!-- Sports here -->
    </ul>


     <script>
        document.querySelectorAll('.categoryLink').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); 
                var categoryId = this.getAttribute('data-category-id');
                fetch('/category/' + categoryId + '/sports')
                    .then(response => response.json())
                    .then(data => {
                        var sportsList = document.getElementById('sportsList');
                        sportsList.innerHTML = '';
                        data.forEach(sport => {
                            var listItem = document.createElement('li');
                            listItem.textContent = sport.title;
                            sportsList.appendChild(listItem);
                        });
                        document.getElementById('sportsTitle').style.display = 'block';
                        sportsList.style.display = 'block';
                    })
                    .catch(error => console.error('Error fetching sports:', error));
            });
        });
    </script>
</body>

</html>
