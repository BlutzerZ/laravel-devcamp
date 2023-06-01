<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Bio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        @foreach ($profils as $item)
            <div class="card mx-auto" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZ3JhbW1lcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->id }}</h5>
                    <h6 class="card-title">Backend Developer</h6>
                    <p class="card-text mt-2">
                        im is web developer and programmer from Indonesia. I am passionate about web development and
                        programming. I am also interested in UI/UX design, content writing, and digital marketing.
                    </p>
                    <div class="text-center ">
                        <a href="" class="text-decoration-none">Linkedin</a>
                        <a href="" class="text-decoration-none">Github</a>
                        <a href="" class="text-decoration-none">Medium</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>