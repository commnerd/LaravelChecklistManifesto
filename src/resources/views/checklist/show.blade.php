<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="/vendor/css/checklists.css">
    </head>
    <body>
        <scaffolding
            name="{{ $scaffolding->name }}"
            api="{{ route('scaffolding.show', $scaffolding) }}">
        </scaffolding>
        <script async src="/vendor/js/checklists.js"></script>
    </body>
</html>
