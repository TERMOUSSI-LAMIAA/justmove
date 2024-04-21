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

    <h2 id="sessionsTitle" style="display: none;">Sessions</h2>
    <ul id="sessionsList" style="display: none;">
        <!-- Sessions here -->
    </ul>

    <script>
        // document.querySelectorAll('.categoryLink').forEach(link => {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         var categoryId = this.getAttribute('data-category-id');
        //         fetch('/category/' + categoryId + '/sports')
        //             .then(response => response.json())
        //             .then(data => {
        //                 var sportsList = document.getElementById('sportsList');
        //                 sportsList.innerHTML = '';
        //                 data.forEach(sport => {
        //                     var listItem = document.createElement('li');
        //                     var sportLink = document.createElement('a');
        //                     sportLink.textContent = sport.title;
        //                     sportLink.href = "/sport/" + sport.id; 
        //                     sportLink.classList.add(
        //                     "sportLink"); 
        //                     listItem.appendChild(sportLink);
        //                     sportsList.appendChild(listItem);
        //                 });
        //                 document.getElementById('sportsTitle').style.display = 'block';
        //                 sportsList.style.display = 'block';
        //             })
        //             .catch(error => console.error('Error fetching sports:', error));
        //     });
        // });
document.querySelectorAll('.categoryLink').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of navigating to another page
        var categoryId = this.getAttribute('data-category-id');
        fetch('/category/' + categoryId + '/sports') // Fetch sports for the selected category
            .then(response => response.json())
            .then(data => {
                var sportsList = document.getElementById('sportsList');
                sportsList.innerHTML = ''; // Clear existing sports
                data.forEach(sport => {
                    var listItem = document.createElement('li');
                    var sportLink = document.createElement('a');
                    sportLink.textContent = sport.title;
                    sportLink.href = "#"; // Placeholder to avoid redirection
                    sportLink.classList.add('sportLink'); // Add a class for easy selection
                    sportLink.setAttribute('data-sport-id', sport.id); // Set the sport ID for reference
                    listItem.appendChild(sportLink); // Append the link to the list item
                    sportsList.appendChild(listItem); // Append the list item to the sports list
                });
                document.getElementById('sportsTitle').style.display = 'block';
                sportsList.style.display = 'block';

                // Attach click event listener to the sport links
                attachSportLinkListeners(); // Custom function to add click listeners
            })
            .catch(error => console.error('Error fetching sports:', error));
    });
});

function attachSportLinkListeners() {
    document.querySelectorAll('.sportLink').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); 
            console.log("Sport link clicked"); 
            var sportId = this.getAttribute('data-sport-id'); 
            fetch('/sport/' + sportId + '/sessions') 
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
        console.log("Fetched data:", data); // This will show the raw data
        if (Array.isArray(data)) {
            var sessionsList = document.getElementById('sessionsList');
            sessionsList.innerHTML = '';
            data.forEach(session => {
                var listItem = document.createElement('li');
                listItem.textContent = session.date; 
                sessionsList.appendChild(listItem);
            });
            document.getElementById('sessionsTitle').style.display = 'block';
            sessionsList.style.display = 'block';
        } else {
            console.error('Data is not an array as expected');
        }
    })
    .catch(error => {
        console.error('Error fetching sessions:', error);
    });
        });
    });
}

       
    </script>
</body>

</html>
