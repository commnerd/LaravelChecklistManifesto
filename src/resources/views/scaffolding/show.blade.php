<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="/vendor/css/checklists.css">
    </head>
    <body>
        <checklist
            name="{{ $checklist->name }}"
            api="{{ route('checklist.show', $checklist) }}">
        </checklist>
        <script async src="/vendor/js/checklists.js"></script>
    </body>
</html>
